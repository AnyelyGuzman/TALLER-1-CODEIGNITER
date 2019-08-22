<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller1 extends CI_Controller {
    
    public function mayorMenor()
	{
        $arr = array(
            rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100),
            rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)
        );
        $arrUpdate = $arr;
        sort($arrUpdate, SORT_NUMERIC);
        $data['numbers'] = $arr;
        $data['menor'] = $arrUpdate[0];
        $data['mayor'] = $arrUpdate[9];
        $this->load->view('mayor_menor', $data);
    }
    
    public function diaMes()
    {
        $dia = "";
        $val = $this->input->post('numero');
        if($val !== null){
            switch($val){
                case 1:
                    $dia = "Sabado";
                    break;
                
                case 2:
                    $dia = "Domingo";
                    break;
                
                case 3:
                    $dia = "Lunes";
                    break;
            
                case 4:
                    $dia = "Martes";
                    break;
            
                case 5:
                    $dia = "Miercoles";
                    break;
                
                case 6:
                    $dia = "Jueves";
                    break;

                case 7:
                    $dia = "Viernes";
                    break;
                
                case 8:
                    $dia = "Sabado";
                    break;
                
                case 9:
                    $dia = "Domingo";
                    break;

                case 10:
                    $dia = "Lunes";
                    break;
            
                case 11:
                    $dia = "Martes";
                    break;
            
                case 12:
                    $dia = "Miercoles";
                    break;
                
                case 13:
                    $dia = "Jueves";
                    break;

                case 14:
                    $dia = "Viernes";
                    break;
                
                case 15:
                    $dia = "Sabado";
                    break;
                
                case 16:
                    $dia = "Domingo";
                    break;
                
                case 17:
                    $dia = "Lunes";
                    break;
            
                case 18:
                    $dia = "Martes";
                    break;
            
                case 19:
                    $dia = "Miercoles";
                    break;
                
                case 20:
                    $dia = "Jueves";
                    break;

                case 21:
                    $dia = "Viernes";
                    break;
                
                case 22:
                    $dia = "Sabado";
                    break;
                
                case 23:
                    $dia = "Domingo";
                    break;

                case 24:
                    $dia = "Lunes";
                    break;
            
                case 25:
                    $dia = "Martes";
                    break;
            
                case 26:
                    $dia = "Miercoles";
                    break;
                
                case 27:
                    $dia = "Jueves";
                    break;

                case 28:
                    $dia = "Viernes";
                    break;

                case 29:
                    $dia = "Sabado";
                    break;
                
                case 30:
                    $dia = "Domingo";
                    break;

            }
        }
        $data['dia']=$dia;
        $this->load->view('dias',$data);
    }

    public function mayorMenorNegativo()
    {
        $num1 = rand(-100,100);
        $num2 = rand(-100,100);
        $num3 = rand(-100,100);
        function validar($val){
            if ($val > 50) return 'numero mayor a 50';
            else if ($val < 20 && $val > 0) return 'numero menor a 20';
            else if ($val < 0) return  'numero negativo';
            else return 'no especificado';
        }
        $resp1 = validar($num1);
        $resp2 = validar($num2);
        $resp3 = validar($num3);
        $data['num1']=$num1;
        $data['num2']=$num2;
        $data['num3']=$num3;
        $data['resp1']=$resp1;
        $data['resp2']=$resp2;
        $data['resp3']=$resp3;
        $this->load->view('mayor_menor_negativo',$data);
    }
}
