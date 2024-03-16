<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\OrgQuery;
use App\Mail\OrgQueryMail;
use Illuminate\Support\Str;

use App\Mail\CompleteMail;

use App\Mail\ResendOTPMail;


use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $response;
    public function generateOTP($length = 6)
    {
        // Generate a random number with the specified length
        $otp = str_pad(rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);

        return $otp;
    }
    public function resendOTP(Request $request)
    {
        $code = $this->generateOTP();
        Mail::to($request->email)
                        ->send(
                            new ResendOTPMail($code)
                        );
        return response()->json(['message' => 'OTP Sent Successfully!','otp' => $code]);

    }
    public function queryOrganization(Request $request)
    {
        // return $request->all();
        if($request->otp){
                if(isset($_POST['g-recaptcha-response'])){
                    $secretkey = '6LcUODwoAAAAAG0g3gbxVAk-GdYDYYl1EoKSxpSU';
                    $ipadd = $_SERVER['REMOTE_ADDR'];
                    $response = $_POST['g-recaptcha-response'];
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ipadd";

                    $fire = file_get_contents($url);
                    $data = json_decode($fire);
                    if($data->success == true){

                        $headers = array(
                            'Accept: application/json',
                            'Content-Type: application/json',
                            'X-CSRF-TOKEN: '
                        );
                
                        $data = array(
                            'email' =>  $request->email,
                            'signup_token' =>$request->signup_token,
                            'otp' => $request->otp
                        );
            
                        $senOtpResponse = $this->callInternalAPI($headers,$data,'signup/verify-email','POST');
                        if($senOtpResponse->status == 'true'){

                       
                            $otp = $this->generateOTP();
                            $orgQuery = new OrgQuery();
                            $orgQuery->name = $request->org_name ?? '';
                            $orgQuery->full_name = $request->full_name ?? '';
                            $orgQuery->email = $request->email ?? '';
                            $orgQuery->employees = $request->employees ?? '';
                            $orgQuery->signup_token = $request->signup_token ?? '';
                            $orgQuery->url = $request->url ?? '';
                            $orgQuery->mobile = $request->mobile ?? '';
                            $orgQuery->otp = $otp ?? '';

                            if($orgQuery->save()){

                             Mail::to($request->email)
                        ->send(
                            new CompleteMail()
                        );

                        if($senOtpResponse->status == 'true'){
                            $this->response['status'] = 'true2';
                            $this->response['message'] = 'Thank you for sharing your details. Please check your email to learn how you can successfully onboard with us.';
                            $this->response['data'] = $senOtpResponse->data;
                
                        } else{
                            $this->response['status'] = 'false';
                            $this->response['message'] = $senOtpResponse->message;
                            $this->response['data'] = $senOtpResponse->data ?? [];
                        }
                        
                        return response()->json(
                            $this->response
                        );
                                // return response()->json(['message' => 'Thank you for sharing your details. Please check your email to learn how you can successfully onboard with us.']);//Redirect::to('/');//Redirect::route('oas-index')->with('status', 'profile-updated');
                            }else {
                                return redirect()->back();
                            }
                        }else{
                            return response()->json(['message' => $senOtpResponse->message]);
                        }
                    }
                }
        }else{
            
            return $this->sendOTP($request->email,$request->full_name);
        }
       


    }
    public function sendOTP($email,$name)
    {
      
            $headers = array(
                'Accept: application/json',
                'Content-Type: application/json',
                'X-CSRF-TOKEN: '
            );
    
            $data = array(
                'email' => $email
            );


            $senOtpResponse = $this->callInternalAPI($headers,$data,'signup/send-email','POST');


        // $otp = $this->generateOTP();
        //   Mail::to($email)
        //                 ->send(
        //                     new OrgQueryMail($name,$otp)
        //                 );
       
        if($senOtpResponse->status == 'true'){
            $this->response['status'] = 'true';
            $this->response['message'] = 'OTP sent successfully. Please check your email!';
            $this->response['data'] = $senOtpResponse->data;

        } else{
            $this->response['status'] = 'false';
            $this->response['message'] = $senOtpResponse->message;
            $this->response['data'] = $senOtpResponse->data ?? [];
        }
        
        return response()->json(
            $this->response
        );
        
    }


    public function callInternalAPI($headers,$data,$apiUrl,$method){
        if(env('APP_ENV') === 'local')
        {
         $baseURL = 'http://127.0.0.1:8000/v1/'.$apiUrl;
        }else if(env('APP_ENV') === 'testing'){
            $baseURL = 'https://api.oas36ty.com'.'/'.'v1/'.$apiUrl;
        }else if(env('APP_ENV') === 'production'){
            $baseURL = 'https://api.oas36ty.com'.'/'.'v1/'.$apiUrl;
        }else{
            $baseURL = env('APP_URL').'/'.'v1/'.$apiUrl;
        }

        $ch = curl_init($baseURL);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        curl_close($ch);
        return json_decode($response);

    }
    public function makeOrganization(Request $request)
    {

        try {
            //code...
        
        $check = OrgQuery::where(['id' => $request->queryId, 'name' => $request->organization_name]);
        if($check->first()){
            $check->update(['name' => $request->organization_name,'url' => $request->organization_url]);
        }
         $headers = array(
                            'Accept: application/json',
                            'Content-Type: application/json',
                            'X-CSRF-TOKEN: '
                        );
                
                        $signupOrg = array(
                            'email' =>  $request->email,
                            'signup_token' => $request->signup_token,
                            'organization_name' => $request->organization_name,
                            'organization_url' => $request->organization_url
                            // 'otp' => $request->otp
                        );
                          $signupComplete = array(
                            'email' =>  $request->email,
                            'signup_token' => $request->signup_token,
                            'name' => $request->name,
                            'password' => Str::random(12),
                            // 'otp' => $request->otp
                        );
            // return [$headers,$signupOrg];
        $this->callInternalAPI($headers,$signupOrg,'signup/organization','PUT');
         return $this->callInternalAPI($headers,$signupComplete,'signup/complete','POST');
        // return response()->json(['message' => 'Organization Created!', 'status' => true]);
        } catch (\Throwable $th) {
                    //throw $th;
                    return $th;
        }
    }
}
