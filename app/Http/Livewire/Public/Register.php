<?php

namespace App\Http\Livewire\Public;

use App\Actions\Fortify\PasswordValidationRules;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;
//use Laravel\Fortify\Contracts\CreatesNewUsers;

class Register extends Component
{
    use PasswordValidationRules;
    public $register = [
        'fullName'=>'',
        'email'=>'',
        'mobile'=>'',
        'password'=>'',
        'confirmPassword'=>'',
    ];
    protected $rules = [
        'register.fullName' => 'required|max:50',
        'register.email' => ['required','email','unique:Users,email'],
        'register.mobile' => 'required|integer',
        'register.password' => 'required|min:8',
        'register.confirmPassword' => 'required|same:register.password',
    ];
    protected $messages = [
        'register.fullName.required' => 'Name Required',
        'register.fullName.max' => 'Name can\'t more than 50 char',
        'register.email.required' => 'Email Required',
        'register.email.email' => 'Please enter valid Email ID',
        'register.email.unique' => 'Email ID already exists.',//
        'register.mobile.required' => 'Mobile number Required',
        'register.mobile.integer' => 'Enter valid Mobile number',
//        'register.mobile.min' => 'Mobile Number Should 10 digit',
//        'register.mobile.max' => 'Mobile Number Should 13 digit',
        'register.password.required' => 'Password Required',
        'register.password.min' => 'Password Should more than 8 char',
        'register.confirmPassword.required' => 'Confirm Password Required',
        'register.confirmPassword.same' => 'Confirm Password should same as Password',
    ];
    public function render()
    {
        return view('livewire.public.register');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function register()
    {
        $this->validate();
        User::create([
            'name' => $this->register['fullName'],
            'email' => $this->register['email'],
            'mobile' => $this->register['mobile'],
            'social_network' => 'Email',
            'password' => Hash::make($this->register['password']),
        ]);
        $this->redirect('email/verification-notification');
//        session()->flash('verifyEmail', 'Email verification Link has been sent to your Email: '.$this->register['email']);
    }

}
