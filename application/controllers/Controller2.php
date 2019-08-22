<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller2 extends CI_Controller {
    
    public function parImpar()
    {
        $num1 = rand(1,10);
        $resp1 ="";
        if ($num1 % 2 == 0) $resp1='es par';
        else $resp1='es impar';
        $data['num1']=$num1;
        $data['resp1']=$resp1;
        $this->load->view('par_impar',$data);
    }

    public function mayorMenorPar()
    {
        $arr = array(
            rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100),
            rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)
        );
        sort($arr, SORT_NUMERIC);
        $data['menor'] = $arr[0];
        $data['mayor'] = $arr[9];
        function calParImpar($val){
            if ($val % 2 == 0) return 'es par';
            else return 'es impar';
        }

        $data['num1']=$arr[0];
        $data['num2']=$arr[1];
        $data['num3']=$arr[2];
        $data['num4']=$arr[3];
        $data['num5']=$arr[4];
        $data['num6']=$arr[5];
        $data['num7']=$arr[6];
        $data['num8']=$arr[7];
        $data['num9']=$arr[8];
        $data['num10']=$arr[9];

        $data['resp1']=calParImpar($arr[0]);
        $data['resp2']=calParImpar($arr[1]);
        $data['resp3']=calParImpar($arr[2]);
        $data['resp4']=calParImpar($arr[3]);
        $data['resp5']=calParImpar($arr[4]);
        $data['resp6']=calParImpar($arr[5]);
        $data['resp7']=calParImpar($arr[6]);
        $data['resp8']=calParImpar($arr[7]);
        $data['resp9']=calParImpar($arr[8]);
        $data['resp10']=calParImpar($arr[9]);
        $this->load->view('mayor_menor_par',$data);

    }
    
    public function promedio()
    {
        $arr = array(
            rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5),
            rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5),
            rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5),
            rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5),
            rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5) 
        );
        $suma=0;

        for($i = 0; $i < count($arr); $i++) $suma+=$arr[$i];
        $data['notas']=$arr;
        $data['promedio']=$suma / count($arr);
        $this->load->view('promedio',$data);
    }
}