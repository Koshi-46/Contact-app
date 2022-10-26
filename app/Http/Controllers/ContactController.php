<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Rules\ZipCodeRule;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Carbon\Carbon;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function create(ContactRequest $request)
    {

        $contacts = $request->validated();
        if(!$contacts){
            return redirect()->route('contact');
        }

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

    public function register(Request $request)
    {
        $contacts = new Contact();

        $request->validate([
            'name' => 'required',
             'gender' => 'required',
             'email' => 'required|email:filter,dns',
             'postcode' => ['required', new ZipCodeRule()],
             'address' => 'required',
             'building' => 'nullable',
             'opinion' => 'required|max:120'
         ]);
 

        //  $contacts = $this->unsetToken($request);
        
        //  $contacts = $request->all();
        //  if(!$contacts){
        //      return redirect()->route('contact');
        //  }

         $contacts->fill($request->all())->save();

        return view('thanks');
    }

    public function find()
    {
        $contacts = Contact::all();
        $contacts = [];
        return view('manage', ['contacts' => $contacts]);
    }

    public function search(Request $request)
    {
        $name = $request['name'];
        $gender = $request['gender'];
        $email = $request['email'];
        $from = $request['from'];
        $until = $request['until'];

        $contacts = Contact::doSearch($name, $gender, $email, $from, $until);

        return view('manage', ['contacts' => $contacts]);
    }

    public function delete(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return back();
    }
}
