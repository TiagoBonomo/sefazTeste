<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vrte extends Model
{
    
    
    
    public function calculaVrte($numero)
    {
        $path_vrte = storage_path() . "/dados/vrte.json";
        $json_vrte = json_decode(file_get_contents($path_vrte), true);
         

    
        foreach ($json_vrte as $key => $value)
        {
            $c1 = $value->ano;
            $c2 = $value->valor;
           
            $b1 = 1998;

            if ($c1 == $b1) {

                return (object)[
                    'ano'=>'$c1',
                    'valor'=>'$c2'

                ];

            }else {

                return "Informe numero de Débito correto !";
            }


        }  

    

        return $json_vrte;

    }
    
    
    
    
     
    	
    
    	

}
