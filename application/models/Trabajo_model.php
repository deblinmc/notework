<?php
class Trabajo_model extends CI_Model {

    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
    }

public function obtener_actividades_day($fecha)
    {

        $this->db->select('actividades.*,trabajos.*,usuarios.nombre as user');
        $this->db->from('actividades');
        $this->db->join('trabajos', 'actividades.id = trabajos.id_actividad');
        $this->db->join('usuarios', 'usuarios.id = trabajos.id_usuario');
        $this->db->like('fecha',$fecha);
        $this->db->order_by('id_usuario');
        $this->db->order_by('fecha','asc');
        $query = $this->db->get();
        return $query->result_array();

    }
}    