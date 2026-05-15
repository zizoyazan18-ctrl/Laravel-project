<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function (){

$name = 'Alyazan';
// return view('about')->with('name',$name);
// return view('about',['name'=>$name]);
$departments = ['1'=>'A','2'=>'B','3'=>'C'];

return view('about',compact('name' , 'departments') );
});

Route::post('/about',function (){
    $name = $_POST['name'];        //save the name form user
    $departments = ['1'=>'A','2'=>'B','3'=>'C'];
    return view('about' , compact('name' , 'departments'));

});
Route::get('tasks',function(){
    return view('tasks');

});
Route::post('create',function(){
    $task_name = $_POST['name'];
    DB::table('tasks')->insert(['name'=>$task_name]);

    return view('tasks');

});
