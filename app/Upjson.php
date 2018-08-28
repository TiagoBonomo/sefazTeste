<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Upjson extends Model
{
    
    public function jload($numeroD)
    {
        
        $path = storage_path() . "/dados/dados.json";
        $json = json_decode(file_get_contents($path), true);

         
        
            
        foreach ($json as $key => $value)
        {
            $c1 = $value->tipo;
            $c2 = $value->numero;
            $c3 = $value->inscricaoEstaudal;
            $c4 = $value->dataEmissao;
            $c5 = $value->dataPagamento;
            $c6 = $value->vlrImposto;
            
            if ($c2 == $numeroD) {
                
                $result = [

                    'tipo'=> $c1 ,
                    'numero'=> $c2 ,
                    'inscricaoEstaudal' => $c3 ,
                    'dataEmissao'=>$c4,
                    'dataPagamento'=>$c5,
                    'vlrImposto'=>$c6

                ];

                return json_encode($result);

            }else {

                return "Informe numero de Débito correto !";
            }


        }
        
    }
        


}
