<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Unirest\Request;

class API_oxfor extends Controller
{
    function pronunciar($idioma,$palabra){
        $response = Request::get("https://od-api.oxforddictionaries.com/api/v1/entries/en/font/pronunciations?source_lang=en&word_id=$palabra",
            [
                "app_id"    =>  "JgZPtQQAeVmsh5onCixC9uYpQqjTp1rjkh1jsnFwl0cpbRG1Xg",
                "app_key"   =>  "e04f157887d2d04563cde33a88c357a2",
                "Accept"    =>  "application/json"
            ]
        );
        return($response->body);

    }
}
