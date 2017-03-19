<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finca_model extends CI_Model {

	private $id;
	private $nombre;
	private $valor_propiedad ;
	private $cantidad_vacas;
    private $cantidad_gallinas;


	public function __construct($value = null) {
		parent::__construct();
		$this->load->database();

		if ($value != null) {
			if (is_array($value))
				settype($value, 'object');

			if (is_object($value)) {
				$this->id = isset($value->id)? $value->id : null;
				$this->nombre = isset($value->nombre)? $value->nombre : null;
				$this->valor_propiedad = isset($value->valor_propiedad)? $value->valor_propiedad : null;
                $this->cantidad_vacas= isset($value->cantidad_vacas)? $value->cantidad_vacas : null;
                 $this->cantidad_gallinas= isset($value->cantidad_gallinas)? $value->cantidad_gallinas : null;
			}
		}
	}

	public function __get($key) {
		switch ($key) {
			case 'id':
			case 'nombre':
			case 'valor_propiedad':
			case 'cantidad_vacas':
            case 'cantidad_gallinas':
				return $this->$key;
			default:
				return parent::__get($key);
		}
	}


	public function registrar($granjero) {
		$data = [
			'granjero' => $granjero->id,
			'nombre' => $this->nombre,
			'valor_propiedad' => $this->valor_propiedad,
			'cantidad_vacas' => $this->cantidad_vacas,
            'cantidad_gallinas' => $this->cantidad_gallinas,
		];

        if($this->db->insert('finca', $data) != FALSE){
            $this->id = $this->db->insert_id();
            return TRUE;
        }else{
            return FALSE;
        }
	}

	public function obtener_fincas_por_granjero($granjero) {

		$fincas= [];

		$query = $this->db->get_where('finca', array('granjero' => $granjero->id));

		foreach ($query->result() as $key=>$finca) {
			$fincas[$key] = new Finca_model($finca);
		}

		// $this->db->from('finca')
		// 	->where('granjero', $granjero->id);

		// $fincas[] = $this->db->get()->result();



		return $fincas;
	}

	public function obtener_todas() {
		$query = $this->db->get('finca');

		$result = [];

		foreach ($query->result() as $key=>$finca) {
			$result2 = [];
			$result2[] = $finca->granjero;
			$result2[] = new Finca_model($finca);
			$result[] = $result2;

		}
		return $result;
	}

	public function obtener_finca($granjero) {

		$this->db->from('finca')
			->where('granjero', $granjero->id)
			->where('id', $this->id);

		$finca = $this->db->get()->result();
		
		return $finca;


	}

	public function inventario_granjeros(){



		$this->db->select_sum('cantidad_vacas')
		    ->from('finca')
			->join('granjero', 'finca.granjero = granjero.id')
			->group_by('granjero');

			

		$suma_vacas = $this->db->get()->result();

		// // foreach ($suma_vacas as $granjero_vacas) {
		// // 	# code...
		// // }

		var_dump($suma_vacas);
	}

}
