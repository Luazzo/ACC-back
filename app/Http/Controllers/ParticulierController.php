<?php

    namespace App\Http\Controllers;

    use App\Mail\ContactParticulier;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Validation\ValidationException;

    class ParticulierController extends Controller
    {
        public function create()
        {
            return view('contact-particulier');
        }


        public function store(Request $request)
        {
            try {
                $contact = $this->validate($request, [
                    'nom' => 'required',
                    'email' => 'required|email',
                    'message' => 'required',
                    'gsm' => 'required',
                    'ddn' => 'required',
                    'permis' => '',         // il faut marquer touts les pramettres, même sans vlidation, si non - Error 500
                ]);
            } catch (ValidationException $e) {
                return response( 'Sorry, your massage could not be send at this time. - '.$e->getMessage(), 422);
            }

            Mail::to( 'iacc7495@gmail.com')->send( new ContactParticulier($contact) );

            return response()->json( ['sent' => true], 200, );
        }

    }
