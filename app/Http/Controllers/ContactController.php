<?php

namespace App\Http\Controllers;

// CLIC-DROIT IMPORTER CLASS
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
        /**********
         * Formulaire de contact
         **********/
        public function index(){

            $enregistrement = false;

            return view("contact" , compact("enregistrement"));
        }
    
        /****
         * Enregistement en base des données qu'on a soumis
         ****/
        public function save(Request $request){

            
            $validated = $request->validate([
                'nom' => 'required|min:2',
                'prenom' => 'required|min:2',
            ]);
            
            /**** Test de la validation de la variable concernée */
            if (isset($validated)) {
                
                // Créer l'instance de classe
                $contact = new Contact() ;

                // Affection des variables à l'instance
                $contact->nom = $request->nom ;
                $contact->prenom = $request->prenom ;
                $contact->email = "mail@mail.com" ;
                $contact->telephone = "0696" ;
                $contact->adresse = "Bloc" ;

                $contact->save() ;

                $enregistrement = true ;
            }
    
            // regarder ce qu'une variable contient
            // dd($request) ;
            // dd($validated) ;
            
            return view("contact" , compact("enregistrement"));
        }
        
}