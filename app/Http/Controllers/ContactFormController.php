<?php


namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactFormController extends Controller
{

    public function submitContactForm(Request $request)
    {

        try {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);
        } catch (ValidationException $e) {
            Log::error($e, ['message' => "Error validating", 'request' => $request->all()]);

            return response()->json(['error' => $e ],422);
        }

        $this->saveContactMessage($request);
        $this->emailContactMessage($request);

        return response()->json(['response' => 'Yay! Message sent successfully!!']);
    }

    public function emailContactMessage($request) {

        Mail::send('email', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'comment' => $request->get('message'),
            'phone' => $request->get('phone')
        ],
            function ($message) {
                $message->from('info@example.com');
                $message->to(config('constants.mail.send_contact_form_to'))
                    ->subject('Your Website Contact Form');
            });
    }

    public function saveContactMessage($request) {

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->phone = $request->input('phone', NULL);
        $contact->save();
    }
}
