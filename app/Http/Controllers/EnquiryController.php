<?php

namespace App\Http\Controllers;


use App\Models\Enquiry;
use Illuminate\Http\Request;




class EnquiryController extends Controller
{

    public $admin_email;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
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
        

        $data = $this->validate($request, [

             'name' => 'required',
            'email' => 'required | emal',
            'Profession_Occupation' => 'required | Profession_Occupation',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'state' => 'required',
                      
        ]);

        $enquiry = new Enquiry();

        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->Profession_Occupation = $request->Profession_Occupation;
        $enquiry->state = $request->state;
        $enquiry->phone_number = $request->phone_number;

      

        if ($enquiry->save($data) == true) {

        // Mail::send(['email-template'], $data, function ($message) use ($data) {
        //     $message->to($data['email']);
                             
        // });
        echo 'Saved';
        } else {
            echo 'Error';
            return back();
        }
    }


    public function success()
    {
        return view('enquirySuccess');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
