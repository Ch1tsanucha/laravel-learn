<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninja',function(){
    $ninja = [
        ["name"=> "BB","skill"=>"run","id"=>"1"],
        ["name"=> "BABOON","skill"=> "talk","id"=> "2"],
        ["name"=> "KING","skill"=> "KONG","id"=> "3"],
    ];
    return view('ninja',["ninja" => $ninja]);
});

Route::get('/ninja/{id}',function($id){
    return view('ninjashow',["id" => $id]);
});

Route::get('/temp',function(){
    return view('temp.index',["greeting" => "Hello"]);
});