<?php

namespace App\Http\Livewire;

use Livewire\Component;


class ErrorCheck extends Component
{
    public $name1;
    public $name2;
    public $gender;
    public $email;
    public $postcode;
    public $address;
    public $building_name;
    public $opinion;

    public function rules()
    {
        return [
            'name1'=>['required','max:123','string'],
            'name2'=>['required','max:122','string'],
            'gender'=>['required'],
            'email'=>['required','max:255','email'],
            'postcode'=>['required','max:8','min:8'],
            'address'=>['required','max:255','string'],
            'building_name'=>['nullable','max:255','string'],
            'opinion'=>['required','max:120','string'],
        ];
    }
    public function messages(){
        return [
            'name1.required'=>'入力必須です',
            'name1.max'=>'123字以内で入力してください',
            'name1.string'=>'文字で入力してください',
            'name2.required'=>'入力必須です',
            'name2.max'=>'122字以内で入力してください',
            'name2.string'=>'文字で入力してください',
            'gender.required'=>'入力必須です',
            'email.required'=>'入力必須です',
            'email.max'=>'255字以内で入力してください',
            'email.email'=>'email形式でで入力してください',
            'postcode.required'=>'入力必須です',
            'postcode.max'=>'8桁で入力してください',
            'postcode.min'=>'8桁で入力してください',
            'address.required'=>'入力必須です',
            'address.max'=>'255字以内で入力してください',
            'address.string'=>'文字で入力してください',
            'building_name.max'=>'255字以内で入力してください',
            'building_name.string'=>'文字で入力してください',
            'opinion.required'=>'入力必須です',
            'opinion.max'=>'120字以内で入力してください',
            'opinion.string'=>'文字で入力してください',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.error-check');
    }
}

