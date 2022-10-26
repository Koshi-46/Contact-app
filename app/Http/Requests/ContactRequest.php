<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ZipCodeRule;
use App\Models\Contact;



class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email:filter,dns',
            'postcode' => ['required', new ZipCodeRule()],
            'address' => 'required',
            'building' => 'nullable',
            'opinion' => 'required|max:120'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        $validatedData = $this->validate();

        Contact::create($validatedData);
    }

    public function prepareForValidation()
    {
        $data = [];
        $this->merge(['email' => mb_convert_kana($this->email, 'as')]);
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'as')]);

        $this->merge([
            'email' => mb_convert_kana($this->email, 'as'),
            'postcode' => mb_convert_kana($this->postcode, 'as'),
            'address' => mb_convert_kana($this->address, 'as'),

        ]);
    }
}
