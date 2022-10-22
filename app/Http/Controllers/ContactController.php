<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Rules\ZipCodeRule;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function create(Request $request)
    {
        

        $request->validate([
           'name' => 'required',
            'gender' => 'required',
            'email' => ['required','email','confirmed'],
            // 'email' => ['required|email:filter,dns'],
            'postcode' => ['required', new ZipCodeRule()],
            'address' => 'required',
            'opinion' => ['required','max:120']
        ]);

        $contacts = $request->all();
        if(!$contacts){
            return redirect()->route('contact');
        }

        if (isset($contacts['gender']))
            $contacts['gender'] = mb_convert_kana($contacts['gender'], 'a');

        if (isset($contacts['email']))
            $contacts['email'] = mb_convert_kana($contacts['email'], 'a');

        if (isset($contacts['postcode']))
            $contacts['postcode'] = mb_convert_kana($contacts['postcode'], 'a');

        // $contacts = Validator::make($contacts, [
        //     'name' => 'required',
        //     'gender' => 'required',
        //     'email' => ['required', 'email:filter'],
        //     'postcode' => ['required', new ZipCodeRule()],
        //     'address' => ['required', 'numeric', 'digits_between:8,11'],
        //     'opinion' => 'max:120'
        // ]);
        // $contacts->validate();



        return view('confirm', [
            'contacts' => $contacts,
        ]);

      
    }

    // public function confirm()
    // {
    //     return view('confirm');
    // }
}
