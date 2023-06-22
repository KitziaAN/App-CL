<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Mimodelo extends CI_Model {

        // Constructor
        public function __construct() {

            $this->load->database();
        }

        public function getCategorias($id=false) {

            if($id != false){
                $this->db->where('id_categorias', $id);
            }
            // select * from categorias
            $resultado = $this->db->get('categorias');

            if ($resultado->num_rows()>0)
                return $resultado;

            else
                false;
        }

        // Metodo Insertar
        public function addCategoria($valores) {
            // Insert into categorias values (.....);
            $this->db->insert('categorias', $valores);
        }

        public function lessCategoria($id) {
            // eliminar categorias values (.....);
            $this->db->where('id_categorias', $id);
            $this->db->delete('categorias');
        }

        public function updateCategoria($id, $data) {
            $this->db->where('id_categorias', $id);
            $this->db->update('categorias');
        }

    }
?>