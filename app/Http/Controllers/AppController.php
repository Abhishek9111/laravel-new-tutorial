<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index(){
        // $name='Abhishek';
        // $phone="213212";

// DATA TO VIEW->
        // to send data to view using compact
        // return view('welcome',compact("name","phone"));

        //using associative array
        // return view('welcome',array(
        //     'name'=>$name,
        //     'phone'=>$phone
        // ));


        // using with method
        //  return view('welcome')->with('name',$name )->with('phone',$phone);

        //cleanest syntax
        // $data['name'] = $name;
        //         $data['phone'] = $phone;
                //  return view('welcome',$data);
//MODEL METHODS->
        //saving to db
        // $party = new Party;
        // $party->full_name = "Abhishek";
        // $party->new="no";
        // $party->save();

        //saving to db using associative array
        // $param = array('full_name'=>'Abhi','new'=>'Test');
        // Party::create($param);

        // $parties = Party::all();
        // dd($parties);

        //selecting a record by id
        // $id = 1;
        // $party = Party::find($id);
        // dd($party);
                
        // //select by a field
        // $party = Party::where("full_name","Abhi")->get();
        // dd($party);
                
        //update
        // $id = 1;
        // $party = Party::find($id);
        // $party->full_name = "Abhishek kapoor";
        // $party->save();

        //delete
        // $id = 2;
        // $party = Party::find($id);
        // $party->delete();

//FACADES->
//insert
        // $param=array('full_name'=>'abhshek','new'=>'newww');
        // DB::table('party')->insert($param);


            //get data

        // $party = DB::table('party')
        //         ->get();
        //     echo"<pre>";print_r($party);

        
            //select specific
        // $party = DB::table('party')
        // ->where('id',1)
                // ->where('full_name','Abhishek kapoor')

                // ->get();
                
            // echo"<pre>";print_r($party);

            
            //jupdate
            // $param  = array('full_name'=>'Kapoor abhishek');
            // DB::table('party')->where('id',4)->update($param);

            //delete 

            //delete all entries
            // DB::table('party')->delete(); => delete all data from table

                        DB::table('party')->where('id',3)->delete();


        return "hello zi";


    }
}
