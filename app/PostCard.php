<?php
namespace App;

use App\MainFasade as AppMainFasade;
use MainFasade;

class PostCard extends AppMainFasade{



    protected static function getFasadeAccessor(){
        return 'PostCard';
    }
}
