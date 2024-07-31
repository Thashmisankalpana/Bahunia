<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registrations;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    //
        function login(){
            return view('login');
        }
        function register(){
            return view('register');
        }
        function save(Request $request){

            $request->validate([
                'Name'=>'required',
                'Delivary_Address'=>'required',
                'Telephone_Number_01'=>'required|max:10',
                'Telephone_Number_02'=>'required|max:10',
                'Email_Address'=>'required|email|unique:registrations',
                'Password'=>'required|min:5|max:12'
            ]);
    
            //print_r($req->input());
            $registrations= new registrations;
            $registrations->Name=$request-> Name;
            $registrations->Delivary_Address=$request-> Delivary_Address;
            $registrations->Telephone_Number01=$request-> Telephone_Number_01;
            $registrations->Telephone_Number02=$request-> Telephone_Number_02;
            $registrations->Email_Address=$request-> Email_Address;
            $registrations->Password=$request-> Password;
            $save=$registrations->save();

            if($save)
            {
                return redirect('/');
            }
            else{
                return back()->with('fail','Something went wrong. try again later');
            }
        }

        function check(Request $request){
            //validate requestIn
            $request->validate([
                'Email_Address'=>'required|email',
                'Password'=>'required|min:5|max:12',
            ]);

            $Registrations = registrations::where(['Email_Address'=>$request->Email_Address])->first();

            if(!$Registrations || !Hash::check($request->Password,$Registrations->Password))
            {
                return 'We do not recognize your email';
            }else{
                //check password
                $request->session()->put('Registrations',$Registrations);
                return redirect('/');
            }
        }   
    
        function logout(){
            if(session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect('/login');
            }
        }
        function Alogin(){
            return view('Alogin');
        }
}