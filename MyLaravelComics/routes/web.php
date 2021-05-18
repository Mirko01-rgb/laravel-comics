<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
                                              // home= il nome che va nella barra accanto 8000 per capire dove mi trovo
Route::get('homepage', 'TestController@home');   // TestController@home= nome funzione in testcontroller.php


                                                      // indice= il nome che va nella barra accanto 8000 per capire dove mi trovo
Route::get('/indice/{index}', 'TestController@element') // TestController@element= nome funzione in testcontroller.php
       -> name('elem');  // elem  è una etichetta che è = /indice/{index se il percorso dovessere essere troppo lungo
