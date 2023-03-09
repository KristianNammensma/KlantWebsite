<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Docs extends BaseController
{
    public function index()
    {
        return view('docs', array(
            'title1'=>'Dit is mijn docs pagina',
            'title2'=>'Hier vind je documentatie van mijn site.',
            'content'=>'Dit zal in de toekomst nog verder ingevuld worden.'
        )); 
        
        // maakt van de array variabelen met text als inhoud
    }
}

?>