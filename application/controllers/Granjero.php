<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Granjero extends CI_Controller {

  function __construct(){
    parent::__construct();
      $this->load->library('session');
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
  }

  function index(){
  $this->load->view('home');
  }


  function registrar($opcion = NULL){

    $this->load->model('Granjero_model');

      if($opcion == "formulario"){

        $this->load->view('registrar_granjero');

      }elseif ($opcion == "validar") {

        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('edad', 'edad', 'required');
        $this->form_validation->set_rules('sexo', 'sexo', 'required|in_list[F,M]');
       
       if ($this->form_validation->run() == FALSE){

            $this->load->view('registrar_granjero');

        }else{

          $value['id'] = $this->input->post('id');
          $value['nombre'] = $this->input->post('nombre');
          $value['edad'] = $this->input->post('edad');
          $value['sexo'] = $this->input->post('sexo');

          $granjero = new Granjero_model($value);
          $resultado = $granjero->registrar();

          if($resultado == TRUE){
            echo "Granjero insertado";
          }else{
            echo "Fallo al insertar granjero";
          }

        }
        
      }
     
  }

  function listar(){

     $this->load->model('Granjero_model');
     $resultado = $this->Granjero_model->obtener_todas();

    //  var_dump($resultado);
     $cantidad_granjeros = count($resultado);
     for ($i=0; $i <  $cantidad_granjeros; $i++) { 
       	$indice = "granjero".($i+1);
      	$result[$indice] =  $resultado[$i];
     }

    $result['cantidad'] = $cantidad_granjeros;
     $this->load->view('Listar_granjeros',$result);


  }

  function listar_detalle($id = NULL){
    $this->load->model('Granjero_model');
    if($id != NULL){
      $value['id'] = $id;
      $granjero = new Granjero_model($value);
      $granjero->obtener_datos();
      $data['granjero'] = $granjero;
      $fincas = $granjero->obtener_fincas();
      $data['fincas'] = $fincas;
      //var_dump($fincas);
      $this->load->view('Listar_detalle_granjero',$data);
     
    }
  }

  function inventario(){
     $this->load->model('Finca_model');
     $finca = new Finca_model();
     $finca->inventario_granjeros();

  }
}
