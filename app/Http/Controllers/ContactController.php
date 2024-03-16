<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Mail\SendMailClient;
use App\Mail\SendMailQuery;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        if (isset($_POST['g-recaptcha-response'])) {
            $secretkey = '6LcUODwoAAAAAG0g3gbxVAk-GdYDYYl1EoKSxpSU';
            $ipadd = $_SERVER['REMOTE_ADDR'];
            $response = $_POST['g-recaptcha-response'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ipadd";

            $fire = file_get_contents($url);
            $data = json_decode($fire);
            if ($data->success == true) {


                $contact = new Contact();
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->message = $request->message;
                if ($contact->save()) {
                    $userEmail = $request->email;
                    $userName = $request->name;
                    $userMess = $request->message;
                    $companyEmail = 'info@oas36ty.com';
                    // SendEmail::dispatch($userEmail,$userName,$userMess,'client', $userEmail);
                    // SendEmail::dispatch($userEmail,$userName,$userMess,'company',$companyEmail);
                    try {


                        // Mail::to($userEmail)
                        // ->send(
                        //     new SendMailClient($request->name)
                        // );
                        // Mail::to($companyEmail)
                        // ->send(
                        //     new SendMailQuery($request->name, $request->email, $request->message),
                        // );

                    } catch (Exception $ex) {

                    }

                    return redirect()->back()->with('success', 'Submitted successfully');
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect()->back()->with('error', 'Please fill the recaptcha');

            }

        } else {
            return redirect()->back()->with('error', 'Recptcha error');
        }

    }
}
