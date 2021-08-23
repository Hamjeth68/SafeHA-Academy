<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CoursePurchased;
Use PDF;


class Purchases extends Component
{
    public function render()
    {
        // dd('st');
        // $data = CoursePurchased::join('course_purchased', 'course_purchased.student_id', '=', 'student.student_id')
        // ->join('products', 'products.product_id', '=', 'products.id')
        // ->get(['course_purchased.student_id', 'course_purchased.reference_number' , 'products.product_id' ]);
        

        // $data = CoursePurchased::all()->first();
        // dd($data->product->p_title);

        $course_purchased = CoursePurchased::all();
        return view('livewire.purchases', [
            'course_purchased' => $course_purchased,
        ]);
    }


    public function createPDF()
    {
        // retreive all records from db
        $data = CoursePurchased::all();

        // share data to view
        view()->share('purchases', $data);
        $pdf = PDF::loadView('pdf_view3', $data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }

    // public function student(){
    //     $data = CoursePurchased::join('course_purchased', 'course_purchased.student_id', '=', 'student.student_id')
    //     ->join('products', 'products.product_id', '=', 'products.id')
    //     ->get(['coursepurchased.*', 'course_purchased.product_id', 'course_purchased.reference_number']);
    // }
}
