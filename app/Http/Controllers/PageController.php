<?php


namespace App\Http\Controllers;
use App\Models\CurrencyRate;
use App\Models\product;
use App\page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
    }

    public function index($slug = null)
    {
        $pages = PageController::select('page_name','slug')
            ->where('status', '=', 'active')
            ->get();

        if($slug === null) {
            return view('index', ['pageSlugs' => $pages->toArray()]);
        } else {
            $pageContent = PageController::where('slug', '=', $slug)
                ->where('status', '=', 'active')
                ->first();

            if (is_object($pageContent)) {
                return view('page', ['pageSlugs' => $pages->toArray(),
                    'pageTitle' => $pageContent->page_name,
                    'pageContent' => $pageContent->content
                ]);
            } else {
                return 'page not found';
            }
        }
    }


    public function checkoutdata(Request $request) {

//        \Log::error($request->all());
        if(request()->ajax())
        {
            //dd(request());
            $data = request()->all();
            $selectedCourse = request()->input('values');
            $totalAmount = request()->input('totalAmount');
//            dd($selectedCourse);

            return response()->json($data);
        }

    }

    public function dataCheckout() {

        $data = $this->checkoutdata();

        return view('email-template');
    }

    public function coursePage(Request $request)
    {
        $data = product::all();
        $rates = CurrencyRate::all();

        return view('home2', ['products' => $data,]);
    }

    public function courseLawmaPage(Request $request)
    {
        $data = product::all();
        $rates = CurrencyRate::all();

        return view('lawma', ['products' => $data,]);

    }
}
