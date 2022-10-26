<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Rules\ZipCodeRule;


class Register extends Component
{
    public $name;
    public $gender;
    public $email;
    public $postcode;
    public $address;
    public $building;
    public $opinion;


    protected $rules = [
        
        'name' => 'required',
        'gender' => 'required',
        'email' => 'required|email:filter,dns',
        'postcode' => ['required', new ZipCodeRule()],
        'address' => 'required',
        'building' => 'nullable',
        'opinion' => 'required|max:120'
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function register()
    {
        $this->validated();
        
    }

    

    public function render()
    {
        return view('livewire.register');
    }
}
