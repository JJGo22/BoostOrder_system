<?php
namespace App\Http\Controllers;
use Auth;
use Socialite;
use Session;

class MainController extends Controller
{	
	public function callAPI($requesttype='',$additionalpara=[],$directreturn=false,$module='')
	{
		$str = '';
		return $this->callServer($str,$additionalpara,$directreturn);
	}

    public function callServer()
    {
        $username = env('BO_USERNAME');	
        $pass = env('BO_PASS');	
        $url = env('BO_PRODUCT_URL');	

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_TIMEOUT, 400); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$pass");
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $result=curl_exec ($ch);
        curl_close ($ch);
        
       return $result;

    }
}