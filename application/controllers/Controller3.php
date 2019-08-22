<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller3 extends CI_Controller {

    public function ochoNumeros()
    {


        $arr = array(
            $this->input->post('numero1'), $this->input->post('numero2'), $this->input->post('numero3'),
            $this->input->post('numero4'), $this->input->post('numero5'), $this->input->post('numero6'),
            $this->input->post('numero7'), $this->input->post('numero8')
        );
        $suma=0;

        for($i = 0; $i < count($arr); $i++) $suma+=$arr[$i];

        $data['suma']=$suma;
        $this->load->view('ocho_numeros',$data);
    }

    public function vector()
    {
        $arr = array(
            rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20),
            rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20),
            rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20),
            rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20)
        );
        
        $sumpar=0;
        $sumimpar=0;
        $totalpar=0;
        $totalimpar=0;

        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] % 2 == 0){
                $sumpar+=$arr[$i];
                $totalpar++;
            } 
            else {
                $sumimpar+=$arr[$i];
                $totalimpar++;
            }
        }

        $data['arr']=$arr;
        $data['sumpar']=$sumpar;
        $data['totalpar']=$totalpar;
        $data['sumimpar']=$sumimpar;
        $data['totalimpar']=$totalimpar;
        $this->load->view('vector',$data);
    }
}
