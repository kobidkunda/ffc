<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Customer as Cust;
use Illuminate\Support\Facades\Cookie;


class Customer extends Controller
{
    public function SaveCustomer(Request $request){

        if ( Cust::where('mobile',$request->mobile)->exists()){

            return redirect()->route('already');

        } else {





            $utm_medium = Cookie::get('utm_medium');
            $utm_source = Cookie::get('utm_source');
            $utm_campaign = Cookie::get('utm_campaign');
            $utm_term = Cookie::get('utm_term');



            $a = new Cust();
            $a->name = $request->name;
            $a->city = $request->city;
            $a->mobile = $request->mobile;
            $a->utm_source = $utm_source;
            $a->utm_medium = $utm_medium;
            $a->utm_campaign = $utm_campaign;
            $a->utm_term = $utm_term;

            $a->save();





            $name = $request->name;

            $otp = rand(1000, 9999);

            $message = ("Hello ".$name.", Your OTP is ".$otp." for #1 Dating Website. #Happy Dating ❤");





            $username = "kobid";

            $password = "Demo@123@" ;



$sender="FRDSHP"; //ex:INVITE

            $pho = Preg_match("/\d*(\d{10})/", $request->mobile, $match);

            $ph =  $match[1];




$mobile_number= $ph;



    $url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$curl_scraped_page = curl_exec($ch);

curl_close($ch);




            $encryptedOTP = encrypt($otp);


            return view('front.pages.otp')->with([
                'encryptedOTP' => $encryptedOTP,
                'receiverNo' => $mobile_number,
                'msg' => ''
            ]);

        

        }





    }



    public function otp(Request $request){
        $receiverNo = $request->admin_phone;
        $decryptedOTP = decrypt($request->encryptedOTP);
        $otpEntered = $request->otpEntered;
        if($otpEntered == $decryptedOTP){

         //   dd($decryptedOTP);

            $admin = Cust::where('mobile','=', $receiverNo)->first();

         //   dd($admin);

            $admin->phone_verified_at = Carbon::now();
            $admin->save();
            
            
            
            
            
            
            
        

             $message = ("Thankyou for Registering in #1 Dating Website. For Activation call ".env('NUMS')." #Happy Dating ❤");






            $username = "kobid";

            $password = "Demo@123" ;



$sender="FRDSHP"; //ex:INVITE

$mobile_number=$request->mobile;

    $url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$curl_scraped_page = curl_exec($ch);

curl_close($ch);
            
            
            
            
            
            
            
            
            
            
            return redirect()->route('successful');
        }
        else{
            return view('front.pages.otp')->with([
                'encryptedOTP' => $request->encryptedOTP,
                'receiverNo' => $receiverNo,
                'msg' => 'Invalid OTP'
            ]);
        }
    }





}
