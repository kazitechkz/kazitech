<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            $this->validate($request, ['name' => 'required', 'email' => 'required','phone' => 'required',"subject"=>"required"]);
            $phone = $request->get('phone');
            $email = $request->get('email');
            $name = $request->get('name');
            $subject = $request->get('subject');
            $message = $request->get('message');
            Mail::to('kazitech2023@gmail.com')->send(new InquiryMail($name, $email,$phone, $subject, $message));
            return response()->json(true);
        }
        catch (\Exception $exception){
            return response()->json(false);
        }

    }
}
