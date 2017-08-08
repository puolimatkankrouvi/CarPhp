<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

//Tietokanta käyttöön
use Illuminate\Support\Facades\DB;
//Schema
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){
        
        //If POST has both brand and model fields of the form create car
        if(Input::has('brand') && Input::has('model')){
          $brand = strip_tags(Input::get('brand'));
          $model = strip_tags(Input::get('model'));
          
          //Inserting new car into the table
          DB::table('cars')->insert([ 'model' => $model,
                                     'brand' => $brand ]);
        }
        
        //If post has for remove_cars
        if(Input::has('delete_this')){
            $id = Input::get('delete_this');
            DB::table('cars')->where('id','=',$id)->delete();
        }
            
        
        
        $cars = DB::select('SELECT * FROM cars');
        
        return view('list',['cars' => $cars]);
    }
    
    public function create(){
        return view('create');
    }
    
    public function delete(){
        
        $cars = DB::select('SELECT * FROM cars');
        
        return view('delete',['cars' => $cars]);
    }
}
