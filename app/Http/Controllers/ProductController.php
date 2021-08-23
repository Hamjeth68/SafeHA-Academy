<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CoursePurchased;
use App\Models\CurrencyRate;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use function Livewire\str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = product::all();
        $rates = CurrencyRate::all();
        $checkPurchase = CoursePurchased::where('student_id', auth()->user()->id)->pluck('product_id')->toArray();

        if(!Session::has('cart')){

            return view('booknow_new', ['products' => $data, 'selectedProducts' => null, 'totalPrice' => null, 'rates' => $rates, 'checkPurchase' => $checkPurchase]);
        }

        // set currency
        $currency = $request->has('currency') ? (int) $request->input('currency') : 2; // default pounds
        $current_currency = $rates->filter(function ($item) use ($currency) { return $item->id === $currency; })->first();

        Session::put('currency', $current_currency->id);

        $cart = new Cart(Session::get('cart'));
        $cart->updateCurrency($current_currency);
        Session::put('cart', $cart);

        return view('booknow_new', ['products' => $data, 'selectedProducts' => $cart->items, 'totalPrice' => $cart->totalPrice, 'rates' => $rates, 'current_currency' => $current_currency, 'checkPurchase' => $checkPurchase ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAddToCart(Request $request, $id) {
        $products = product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $products->id);

        $request->session()->put('cart', $cart);

        return redirect('/enroll');
    }

    public function getCart() {
        if(!Session::has('cart')){
            return view('booknow_new', ['selectedProducts' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return  view('booknow_new', ['selectedProducts' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function removeProduct(Request $request, $id){

        // Get the product array
        $cart = Session::get('cart');
        $products = product::find($id);

        // Unset the first index (or provide an index)

        $cart->remove($products, $products->id);

        unset($cart->items[$id]);
        // Overwrite the product session

        Session::put('cart', $cart);

        return redirect('/enroll');
    }

    public function updateCurrency(Request $request)
    {
        return redirect('/enroll');
    }

    public function checkOut(Request $request)
    {
        if(Session::has('cart')){

            $rates = CurrencyRate::where('code', 'USD')->first();

            $cart = Session::get('cart');

            $cart->updateCurrency($rates);
            Session::put('cart', $cart);

            $data = (Session::get('cart'));

            $totalamount = $data->totalPrice;

            $data = $data->items;

            $insert_data =  [];

            $randomNumber = (string) Str::random(5);

            $refNumber = '#'.str_pad(auth()->user()->id, 10, $randomNumber , STR_PAD_LEFT);


            foreach ($data as $items)
            {
                array_push($insert_data, [
                    'product_id' => $items['items']->id,
                    'product_name' => $items['items']->p_title,
                    'product_amount' => $items['items']->p_amount,
                ]);

                CoursePurchased::create([
                    'student_id' => auth()->user()->id,
                    'product_id' => $items['items']->id,
                    'reference_number' => $refNumber,
                ]);
            }

//            dd($insert_data);

            Mail::send('email-template', ['data_session'=>$insert_data, 'refNumber'=>$refNumber, 'totalAmount' => $totalamount], function ($message) use ($insert_data) {
                $message->to(auth()->user()->email);
                $message->subject('Safeenviro Academy Student Purchase Confirmation');
            });


            $request->session()->forget('cart');

            return redirect('/thankyou');

        }else {
            return back();
        }
    }

    public function clearSessionCart(Request $request)
    {
        if(Session::has('cart')){
            $request->session()->forget('cart');
            return redirect('/enroll');
        }else {
            return redirect('/enroll');
        }
    }


    

}
