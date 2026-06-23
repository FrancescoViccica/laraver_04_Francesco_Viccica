<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merch;

class MerchController extends Controller
{
     
    // public $articoli = [
    //     ['id'=>1, 'title'=>'Luffy', 'img'=>'/media/imgmerch/poster.jpeg', 'genres'=>'poster' ],
    //     ['id'=>2, 'title'=>'Zoro', 'img'=>'/media/imgmerch/a_Figure1.jpeg', 'genres'=>'action figure'],
    //     ['id'=>3, 'title'=>'Kimono', 'img'=>'/media/imgmerch/cosplay.jpg', 'genres'=>'cosplay'],
    //     ['id'=>4, 'title'=>'Felpa OnePiece', 'img'=>'/media/imgmerch/felpa.jpg', 'genres'=>'felpa'],
    //     ['id'=>5, 'title'=>'Capitolo n. 1180', 'img'=>'/media/imgmerch/manga.jpg', 'genres'=>'manga'],

    // ];

    public function articoli(){
        $merchs = Merch::all();
        //  return view('merch.articoli', ['articoli' => $this->articoli]);

        return view('merch.articoli', ['merchs' => $merchs]);
    }

// public function dettaglioArticoli($id){
   
//     foreach($this->articoli as $articolo){
//         if($id == $articolo['id'])
//             return view('merch.dettaglio-articoli', ['articolo'=> $articolo]);
//     }
// }

public function create(){
    return view('merch.create'); 
}


public function store(Request $request){
    // dd($request->all());
    $title = $request->title;
    $genres = $request->genres;
    
    
    $merch = Merch::create([
        'title'=> $request->title,
        'genres'=> $request->genres
    ]);

    // $merch->title = $title;
    // $merch->genres= $genres;
    // $merch->title = $request->title;
    // $merch->genres = $request->genres;
    
    
    // dd($merch);

    // $merch->save();

    return redirect()->route('merch.list')->with('successMessage', 'Hai inserito il prodotto corretto!');



}
}
