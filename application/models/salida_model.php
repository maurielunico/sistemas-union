<?php

    class Salida_model extends CI_Model{
        public function listaSalida()
        {
            $this->db->select('*');
            $this->db->from('salida');
         
            return $this->db->get();
        }

         public function recuperarsalida($idSalida)
        {
            $this->db->select('*');
        $this->db->from('salida');
          $this->db->where('idSalida',$idSalida);
           return $this->db->get();
        }

        public function salidaProducto($idSalida,$data)
        {
            $this->db->trans_start();

            $this->db->insert('productos',$data);
            $idProducto=$this->db->insert_id();

            

            $data2['idSalida']=$idSalida;
            $data2['idProducto']=$idProducto;
           
            $this->db->insert('registro',$data2); 

            $this->db->trans_complete();

            if($this->db->trans_status()===FALSE)
            {
                return false;
            }
        }

       
    }