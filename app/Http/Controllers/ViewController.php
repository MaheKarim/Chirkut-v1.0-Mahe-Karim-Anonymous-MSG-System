<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\viewMSG;
use Carbon\Carbon;

class ViewController extends Controller
{
    public function viewMSG(){
    	return view('layouts.viewmsg');
    }
    function dataInsert(){
    	//$send_msg = new MSGOK;
    	
    	viewMSG::insert([
         'send_msg' =>  $_POST['send_msg'],
         'created_at' =>  Carbon::now()

    	]);
    	 return back()->with('status', ' আপনার মেসেজ আমার কাছে চলে এসেছে !');
    	// if ($send_msg => save()){
    	// 	$request->session()->flash('status', 'Task was successful!');
    	// 	return redirect() => back();
    	// 	echo "Ok!";
    	// } else {
    	// 	echo "Fail!";
    	// }

    	 //Flash Data 
    	 // Mail Me at mahekarim@gmail.com
    	
    }
    function originalview(){
    	
    	//echo "string";
    	// return view('layouts.originalView');
    	$allviewMSG = viewMSG::all(); 
    	 return view('layouts.originalView', compact('allviewMSG'));
    }
    // function delete($mahekarim_id){

    // 	 viewMSG::findOrFail($_POST['mahekarim_id'])->delete();
    // 	 return redirect('layouts.originalView');

    	

    // }


}
