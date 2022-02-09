<?php

class ConsultarApi{
    public function Api($cep){
        $curl = curl_init();

        curl_setopt_array($curl,[
            CURLOPT_URL => "viacep.com.br/ws/$cep/json/",
            CURLOPT_RETURNTRANSFER => true
        ]);

        $resultadoJson = curl_exec($curl);

        $resultado = json_decode($resultadoJson, true);

        if(count($resultado) > 0){
            return $resultado;
        }
        else{
            return [];
        }

        curl_close($curl);
    }
}