<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\CurrencyRate;
use PDF;



class Products extends Component
{

    public $pdf;
    public $product;
    // public $p_title;
    // public $p_name;
    // public $p_description;
    // public $p_amount;

    public  $confirmProductDeletion = false;
    public  $confirmProductAdd = false;

    protected $rules = [
        'product.title' => 'required|max:191|string',
        'product.name' => 'required|max:191|string',
        'product.description' => 'required|max:191|string',
        'product.amount' =>  'numeric',
    ];
    public function render()
    {

        $products = Product::all();
        return view('livewire.products', [
            'products' => $products,

        ]);
    }

    public function confirmProductDeletion($id)
    {
        $this->confirmProductDeletion = $id;
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        $this->confirmProductDeletion = false;
    }

    public function confirmProductAdd()
    {
        $this->reset(['product']);
        $this->confirmProductAdd = true;
    }

    public function saveProduct()
    {
        // dd(auth()->check());
        $this->validate();
        // if (isset($this->product->id)) {
        //     $this->product->save();
        // } else {
        Product::create([
            'title' => $this->product['title'],
            'name' => $this->product['name'],
            'description' => $this->product['description'],
            'amount' => $this->product['amount'],
        ]);
        // }
        $this->confirmProductAdd = false;
    }

    public function confirmProductEdit(Product $product)
    {
        $this->product = $product;
        $this->confirmProductAdd = true;
    }

    // Generate PDF
    public function createPDF()
    {
        // retreive all records from db
        $data = Product::all();

        // share data to view
        view()->share('products', $data);
        $pdf = PDF::loadView('pdf_view', $data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
