<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Food;
use Dotenv\Validator;
use Illuminate\Support\Facades\Redis;

class ContactController extends Controller
{
    //
        /**********
         * Formulaire de contact
         **********/
    public function index(){
        return view("contact");
    }

    /****
     * Enregistement en base
     ****/
    public function save(Request $request){
        
        $validated = $request->validate([
            'nom' => 'required',
        ]);

        dd($request) ;
        return view("contact");
    }

}