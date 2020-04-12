<?php

    namespace App\Http\Controllers;

    use App\Mail\Contact;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Validation\ValidationException;

    class ContactController extends Controller
    {
        public function create()
        {
            return view('contact');
        }

        public function stores(Request $request)
        { return response()->json( ['sent' => true], 200); }


        public function store(Request $request)
        {
            try {
                $contact = $this->validate($request, [
                    'nom' => 'required',
                    'email' => 'required|email',
                    'message' => 'required',
                    'gsm' => 'required',
                ]);
            } catch (ValidationException $e) {
                return response( 'Sorry, your massage could not be send at this time. - '.$e->getMessage(), 422);
            }

            Mail::to( 'iacc7495@gmail.com')->send( new Contact($contact) );

            return response()->json( ['sent' => true], 200);
        }
    }
