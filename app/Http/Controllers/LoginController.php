<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use Hash;
use Validator;
use Auth;

class LoginController extends Controller
{
    public function stlogin()
    {
        return view('stdlogin');
    }

    public function studentDashboard()
    {
        $students = Student::all();
        $success =  $students;

        return response()->json($success, 200);
    }

    public function studentLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        $userdata = array(
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {

//            dd(auth()->check());
            return Redirect::to('/web');

        } else {

            // validation not successful, send back to form
            return Redirect::to('login');

        }


//        if (auth()->guard('student')->attempt(['email' => request('email'), 'password' => request('password')])) {
//
//            config(['auth.guards.api.provider' => 'student']);
//
//            $students = Student::select('students.*')->find(auth()->guard('student')->user()->id);
//            $success =  $students;
//            $success['token'] =  $students->createToken('MyApp', ['student'])->accessToken;
//            if(auth()->check() == true){
//                echo 'works';
//            }
//            else{
//                return view('home2');
//            }
//
//
//        } else {
//            return response()->json(['error' => ['Email and Password are Wrong.']], 200);
//        }
    }

    public function logout()
    {
        auth()->logout(); // log the user out of our application

        dd(auth()->check());

        return Redirect('/');
    }

    public function editStudent($id)
    {
        $student = User::where('id', $id)->where('user_type', '1')->firstOrFail();
        return view('stdEdit')->with('student', $student);
    }

    public function updateStudent(Request $request, $id)
    {
        $student = User::find((int) $id);

        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->address = $request->input('address');
        $student->profession_occupation = $request->input('profession_occupation');
        $student->date = $request->input('date');
        $student->state = $request->input('state');

        if($student->update()){
            return back()->with('success', 'Details Updated Successfully');
        }else {
            return back()->with('error', 'Details not Updated');
        }

    }

    public function updateStudentPassword(Request $request, $id)
    {
        $student = User::find((int) $id);

        $student->password = Hash::make($request->input('password'));

        $student->update();

        $request->session()->flush();

        return \redirect('stdlogin');
    }
}
