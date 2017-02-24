<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Unirest\Request;

class API_oxfor extends Controller{
    function pronunciar($palabra){
        $response = Request::get("https://od-api.oxforddictionaries.com/api/v1/entries/en/$palabra/pronunciations",
            [
                "app_id"    =>  "6ba4a38f",
                "app_key"   =>  "e04f157887d2d04563cde33a88c357a2",
                "Accept"    =>  "application/json"
            ]
        );
        return($response->body->results);
    }
}
