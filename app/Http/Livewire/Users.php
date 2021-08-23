<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use PDF;

class Users extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.users', [
            'users' => $users,
        ]);
    }


    public function createPDF()
    {
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('users', $data);
        $pdf = PDF::loadView('pdf_view2', $data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
