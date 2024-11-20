<?php 
class AccountController{
    public function MyAccount(){
        return view('client.account.my-account');
    }
    public function SignIn(){
        return view('client.account.sign-in');
    }
    public function SignUp(){
        return view('client.account.sign-up');
    }
}