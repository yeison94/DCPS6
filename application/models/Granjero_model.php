<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Granjero_model extends CI_Model {

	private $id;
	private $nombre;
	private $edad;
	private $sexo;


	public function __construct($value = null) {
		parent::__construct();
		$this->load->database();

		if ($value != null) {
			if (is_array($value))
				settype($value, 'object');

			if (is_object($value)) {
				$this->id = isset($value->id)? $value->id : null;
				$this->nombre = isset($value->nombre)? $value->nombre : null;
				$this->edad = isset($value->edad)? $value->edad : null;
                $this->sexo= isset($value->sexo)? $value->sexo : null;
			}
		}
	}

	public function __get($key) {
		switch ($key) {
			case 'id':
			case 'nombre':
			case 'edad':
			case 'sexo':
				return $this->$key;
			default:
				return parent::__get($key);
		}
	}


	public function registrar() {
		$data = [
			'id' => $this->id,
			'nombre' => $this->nombre,
			'sexo' => $this->sexo,
			'edad' => $this->edad
		];

		return $this->db->insert('granjero', $data);
	}

	public function obtener_todas() {
		$query = $this->db->get('granjero');

		$result = [];

		foreach ($query->result() as $key=>$granjero) {
			$result[$key] = new Granjero_model($granjero);
		}
		return $result;
	}

	public function obtener_datos() {
		$query = $this->db->get_where('granjero', ['id' => $this->id]);
		$result = $query->result();
		if (empty($result)) {
			return FALSE;
		} else {
			$this->id = $result[0]->id;
			$this->nombre = $result[0]->nombre;
			$this->edad = $result[0]->edad;
			$this->sexo = $result[0]->sexo;
			return $this;
		}
	}

	public function obtener_fincas() {
		$this->load->model('Finca_model');

		$fincas = $this->Finca_model->obtener_fincas_por_granjero($this);
		//var_dump($fincas);	
		return $fincas;
	}

	// public function actualizar() {
	// 	$data = [
	// 		'tipo_documento' => $this->tipo_documento,
	// 		'numero_documento' => $this->numero_documento,
	// 		'nombre' => $this->nombre,
	// 		'apellido' => $this->apellido,
	// 		'sexo' => $this->sexo,
	// 		'fecha_nacimiento' => $this->fecha_nacimiento,
	// 		'direccion' => $this->direccion,
	// 		'ciudad' => $this->ciudad,
	// 		'nacionalidad' => $this->nacionalidad,
	// 		'email' => $this->email,
	// 		'telefono' => $this->telefono
	// 	];

	// 	return $this->db->update('persona', $data, array('numero_documento' => $this->numero_documento));
	// }
	
	// public function obtener_persona($numero_documento) {

    //     $query = $this->db->get_where('persona', array('numero_documento' => $numero_documento));
    //     return $query->row_array();
	// }

}
