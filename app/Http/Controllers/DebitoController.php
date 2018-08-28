<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Debito;
use App\Upjson;
use App\cache;
use App\Vrte;

class DebitoController extends Controller
{
   
   

    public function numerodebito($numeroDebito)
    {
     
       
        $buscaDbito = new Upjson();
        $tested = $buscaDbito->jload($numeroDebito);
               dd($tested);
        return " Controller função numero Débito $numeroDebito ";
    }
   
    public function situacao($sitaucao)
    {
        dd($dados);
        return " Controller função situação $sitaucao ";
    }

    /*
    public function situacaoinscricao($sitaucao, $inscricaoEstadual)
    {
        return " Controller função situação inscrição estadual $sitaucao + $inscricaoEstadual ";
    }
    */

    public function inscricao($inscricaoEstadual)
    {
        return " Controller função Inscrição estadual: $inscricaoEstadual ";
    }
}
