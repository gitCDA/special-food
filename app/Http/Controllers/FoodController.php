<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //page principale
    public function index(){
    /*lecture de la table food
      avec paginate de 4 éléments
    */


    // $food=Food::all();
    $foods = Food::Paginate(2);

    return view("acceuil", compact("foods"));
    }

    /*
    Affiche le détail d'1 élément à partir de son $id
    Route ex: "detail/2"
    */
    public function detail($id=0){

    /* Lecture du 1er élément trouvé à partir de l'id */
    $item = Food::where('id', $id)->first() ;

    /* Affichage des données dans le detail */
    return view("detail", compact("item"));

    }
    
}