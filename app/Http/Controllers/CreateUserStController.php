<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CreateUserStController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        // return response()->json(['students' => $students], 200);
         return view('users', compact('students'));
    }


    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
    // public function viewForm(){
    //     return view('createstudent');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createstudent');
    }

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'phone' => 'required|max:191',
            'password' => 'required|max:191',
            'address' => 'required|max:191',
            'profession_occupation' => 'required|max:191',
            'date' => 'required|max:191',
            'state' => 'required|max:191',
        ]);


        return Student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'profession_occupation' => $request['profession_occupation'],
            'date' => $request['date'],
            'state' => $request['state'],
        ]);
        return response()->json(['message' => 'account created'], 200);

        // $student = new Student();

        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->phone = $request->phone;
        // $student->password = $request->password;
        // $student->address = $request->address;
        // $student->profession_occupation = $request->profession_occupation;
        // $student->date = $request->date;
        // $student->state = $request->state;
        // Student::create($request->all());

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
}
