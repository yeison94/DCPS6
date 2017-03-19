<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finca extends CI_Controller {

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

    $this->load->model('Finca_model');
    $this->load->model('Granjero_model');

      if($opcion == "formulario"){

        $this->load->view('registrar_finca');

      }elseif ($opcion == "validar") {

        $this->form_validation->set_rules('id_granjero', 'id_granjero', 'required');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('valor_propiedad', 'valor_propiedad', 'required');
        $this->form_validation->set_rules('cantidad_vacas', 'cantidad_vacas', 'required');
        $this->form_validation->set_rules('cantidad_gallinas', 'cantidad_gallinas', 'required');
       
       if ($this->form_validation->run() == FALSE){

            $this->load->view('registrar_finca');

        }else{

          $value2['id'] = $this->input->post('id_granjero');
          
          $value['nombre'] = $this->input->post('nombre');
          $value['valor_propiedad'] = $this->input->post('valor_propiedad');
          $value['cantidad_vacas'] = $this->input->post('cantidad_vacas');
          $value['cantidad_gallinas'] = $this->input->post('cantidad_gallinas');


          $finca = new Finca_model($value);
          $granjero = new Granjero_model($value2);
          $resultado = $finca->registrar( $granjero);

          if($resultado == TRUE){
            echo "Finca insertada";
          }else{
            echo "Fallo al insertar finca";
          }

        }
        
      }
     
  }

   function listar(){

     $this->load->model('Granjero_model');
     $this->load->model('Finca_model');
     $resultado = $this->Finca_model->obtener_todas();

    $result['fincas'] = $resultado;
     $this->load->view('Listar_fincas',$result);

  }

  function lista_especifica($opcion = NULL){
    $this->load->model('Granjero_model');
     $this->load->model('Finca_model');

    if($opcion=="formulario"){
      $this->load->view('buscar_finca');
    }else if($opcion=="validar"){
      $this->form_validation->set_rules('id_finca', 'id_finca', 'required');
      $this->form_validation->set_rules('id_granjero', 'id_granjero', 'required');
       
       if ($this->form_validation->run() == FALSE){

            $this->load->view('buscar_finca');

        }else{

          $value2['id'] = $this->input->post('id_granjero');
          $granjero = new Granjero_model($value2);
          $value['id'] = $this->input->post('id_finca');
          $finca = new Finca_model($value);

          $resultado =  $finca->obtener_finca($granjero);
          $data['finca'] = $resultado;


          $this->load->view('Listar_finca',$data);

        }

    }
  }

}
