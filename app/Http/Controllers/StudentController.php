<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
    	// $students = DB::select('select * from student where city=?',['Bangalore']);

    	// $students = DB::select('select * from student where city= :city', ['city'=>'Bangalore']);

    	// DB::insert("insert into student(name, email, city)values(?,?,?)",['jack', 'jack@gmail.com', 'maxicon']);
    	
    	// DB::insert("insert into student(name, email, city)values(:nm,:email,:city)",['nm'=>'kunal', 'email'=>'kunal@gmail.com', 'city'=>'ranchi']);
    	
    	$name="smrithi";
    	$email="smrithi@gmail.com";
    	$city="Himachal";

    	// DB::insert("insert into student(name, email, city)values(:nm,:email,:city)",['nm'=>$name, 'email'=>$email, 'city'=>$city]);
    	
    	// DB::update("update student set city=? where id=?",['dhanbad',4]);
    	
    	// DB::update("update student set city=:city where id=:id",['city'=>'padubidri','id'=>4]);
    	
    	// DB::delete("delete from student where id=:id",['id'=>5]);

    	DB::transaction(function(){
    		DB::update("update student set city=? where id=?",['bhuvaneshwar', 1]);
    		DB::delete("delete from student where id=:id",['id'=>7]);
    	});
    	
    	 $students = DB::select('select * from student');
    	return view('welcome', ['students'=>$students]);
    }
}
