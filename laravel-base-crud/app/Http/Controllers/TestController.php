<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospiti;

class TestController extends Controller
{
   public function home(){
       $ospiti=Ospiti::all();
       return view('pages.home', compact('ospiti'));
   }

    public function ospite($id){
        $ospite=Ospiti::findOrFail($id);
        return view('pages.ospite', compact('ospite'));
    } 

    public function create(){
        
        return view('pages.create');
    } 

    public function store(Request $request){

        $validate = $request -> validate([

            'name' => 'required|max:255',
            'lastname'  => 'required|max:255',
            'date_of_birth'  => 'required|date',
            'document_type'  => 'required|max:1024',
            'document_number'  => 'required|max:1024',
            

        ]);
        
        $ospite = Ospiti::create($validate);

        return redirect() -> route('ospite', $ospite->id);
    } 
}
