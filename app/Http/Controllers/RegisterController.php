<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registrations;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    function register(){
        return view('register');
    }

    function save(Request $request){

        $request->validate([
            'Name'=>'required',
            'Delivary_Address'=>'required',
            'Telephone_Number_01'=>'required',
            'Telephone_Number_02'=>'required',
            'Email_Address'=>'required|email|unique:registrations',
            'Password'=>'required'
        ]);

        //print_r($req->input());
        $registrations= new registrations;
        $registrations->Name=$request-> Name;
        $registrations->Delivary_Address=$request-> Delivary_Address;
        $registrations->Telephone_Number01=$request-> Telephone_Number_01;
        $registrations->Telephone_Number02=$request-> Telephone_Number_02;
        $registrations->Email_Address=$request-> Email_Address;
        $registrations->Password=$request-> Password;
        $registrations->save();
    }
}
