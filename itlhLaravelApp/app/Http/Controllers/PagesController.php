<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index()
    {
        //echo "hey";
        $bannerMessage = "Helping You With Any Of Your Business Needs!";
        $optionsArray = ['lorem ipsum','tet clita kasd','Kasd gubergre'];

    	return view('index')->with(['message'=>$bannerMessage,'options'=>$optionsArray]);
    }

    public function about()
    {
    	return view('about');
    }

	public function portfolio()
    {
    	return view('portfolio');
    }
	
	public function contact()
    {
    	return view('contact');
    }

	public function login()
    {
    	return view('login');
    }

    public function showDummyData()
    {
        $user = new User();
        $user = $user->first();
        echo "user email = ".$user->email;
        //echo "here";
    }

    public function registrationData(Request $data)
    {
        //ar_dump($data);
        echo "user name received is =".$data->name;
    }

    public function showRegistrationForm()
    {
        return view('registrationForm');
    }

}
