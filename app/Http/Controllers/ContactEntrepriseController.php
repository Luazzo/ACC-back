<?php

    namespace App\Http\Controllers;

    use App\Mail\ContactEntreprise;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Validation\ValidationException;

    class ContactEntrepriseController extends Controller
    {
        public function create()
        {
            return view('contact-entreprise');
        }

        public function store(Request $request)
        {
            try {
                $contact = $this->validate($request, [
                    'entreprise' => 'required',
                    'personne' => 'required',
                    'tva' => '',
                    'numero' => '',
                    'email' => 'required|email',
                    'tel' => 'required',
                    'message' => 'required',
                ]);
            } catch (ValidationException $e) {
                return response( 'Sorry, your massage could not be send at this time. - '.$e->getMessage(), 422);
            }

            Mail::to( 'iacc7495@gmail.com')->send( new ContactEntreprise($contact) );

            return response()->json( ['sent' => true], 200);
        }
    }
