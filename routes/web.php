<?php

use App\PostCard;
use App\PostcardServices;

Route::get('/postcards',function(){

    $postcard = new PostcardServices($country = "BD", $width = 100);
    dd($postcard->hello("This is testing message",'test@gmail.com'));
});

Route::get('/fasades',function(){

    $postcard = PostCard::hello('Tesging messag two','test2@gmail.com');
});



// ################  Bitfams #################
// class Fish{

//     public function swim(){
//         return 'swiming';
//     }
//     public function eat(){
//         return 'eating';
//     }

// }

// //bind container
// app()->bind('fish',function(){
//     return new Fish;
// });

// class Bike{
//     public function start(){
//         return 'starting';
//     }
// }
// // bind container
// app()->bind('bike',function(){
//     return new Bike;
// });

// class Fasade{
//     public static function __callStatic($name, $arguments)
//     {
//        return app()->make(static::getFasadeAccessor())->$name();
//         // dd($name);
//     }
// }


// class FishFasade extends Fasade{
//     protected static function getFasadeAccessor(){
//         return 'fish';
//     }
// }

// class BikeFasade extends Fasade{
//     protected static function getFasadeAccessor(){
//         return 'bike';
//     }
// }

// // dd(FishFasade::eat());
// dd(BikeFasade::start());











Route::get('/', function () {
    return view('welcome');
});
