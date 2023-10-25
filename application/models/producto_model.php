<?php

    class Producto_model extends CI_Model{
        public function listapersonal()
        {
            $this->db->select('*');
            $this->db->from('empleado');
         
            return $this->db->get();
        }

         public function listaproveedor()
        {
            $this->db->select('*');
            $this->db->from('proveedor');
         
            return $this->db->get();
        }

        public function listajapi()
        {
            $this->db->select('*');
            $this->db->from('productos');
         
            return $this->db->get();
        }

        

         public function listasalida()
        {
            $this->db->select('*');
            $this->db->from('salida');
         
            return $this->db->get();
        }

         public function lista()
        {
            $this->db->select('*');
            $this->db->from('lista');
         
            return $this->db->get();
        }


          public function listaalmacen1()
        {
            $this->db->select('*');
            $this->db->from('almacen1');
         
            return $this->db->get();
        }

          public function listaalmacen2()
        {
            $this->db->select('*');
            $this->db->from('almacen2');
         
            return $this->db->get();
        }
        

          public function listaalmacen3()
        {
            $this->db->select('*');
            $this->db->from('almacen3');
         
            return $this->db->get();
        }

           public function agregaralmacen1($data)
        {
            $this->db->insert('almacen1',$data);
        }

         public function agregaralmacen2($data)
        {
            $this->db->insert('almacen2',$data);
        }

         public function agregaralmacen3($data)
        {
            $this->db->insert('almacen3',$data);
        }

    



         public function recupeLista($idLista)
        {
           $this->db->select('*');
        $this->db->from('lista');
          $this->db->where('idLista',$idLista);
           return $this->db->get();
        }

        public function recuperarjapi($idproducto)
        {
           $this->db->select('*');
        $this->db->from('productos');
          $this->db->where('idproducto',$idproducto);
           return $this->db->get();
        }
         

        public function recuperarpersonal($idEmpleado)
        {
           $this->db->select('*');
        $this->db->from('empleado');
          $this->db->where('idEmpleado',$idEmpleado);
           return $this->db->get();
        }

        public function recuperarproveedor($idProveedor)
        {
           $this->db->select('*');
        $this->db->from('proveedor');
          $this->db->where('idProveedor',$idProveedor);
           return $this->db->get();
        }

        public function recuperarsalida($idSalida)
        {
            $this->db->select('*');
        $this->db->from('salida');
          $this->db->where('idSalida',$idSalida);
           return $this->db->get();
        }

          public function agregarjapi($data,$tabla)
        {
            $this->db->insert('productos',$data);
              $this->db->insert($tabla,$data);


        }




        public function eliminarjapi($idproducto,$almacen)
        {
            $this->db->where('idproducto',$idproducto);
            
            $this->db->delete($almacen);
          
            $this->db->delete('productos');

           

        }

         public function eliminaralmacenes($idproducto,$almacen)
        {
            $this->db->where('idproducto',$idproducto);
            

            $this->db->delete($almacen);
          
           

        }
        

        public function modificarjapi($idproducto,$data)
        {
            $this->db->where('idproducto',$idproducto);
            $this->db->update('productos',$data);
        }

           public function agregarlista($data)
        {
            $this->db->insert('lista',$data);
        }

        public function modificarlista($idLista,$data)
        {
            $this->db->where('idLista',$idLista);
            $this->db->update('lista',$data);
        }
        public function eliminarlista($idLista)
        {
              $this->db->where('idLista',$idLista);
            $this->db->delete('lista');

        }
        

         public function agregarproveedor($data)
        {
           $this->db->insert('proveedor',$data);
        }

        public function eliminarproveedor($idProveedor)
        {
             $this->db->where('idProveedor',$idProveedor);
            $this->db->delete('proveedor');

       }
        public function modificarproveedor($idProveedor,$data)
        {
            $this->db->where('idProveedor',$idProveedor);
            $this->db->update('proveedor',$data);
            
        }
         public function agregarpersonal($data)
        {
            $this->db->insert('empleado',$data);
        }

         public function agregarpersonal2($data)
        {
            $this->db->insert('empleado',$data);
        }

        public function eliminarpersonal($idEmpleado)
        {
              $this->db->where('idEmpleado',$idEmpleado);
            $this->db->delete('empleado');

        }
        public function modificarpersonal($idEmpleado,$data)
        { 
             $this->db->where('idEmpleado',$idEmpleado);
            $this->db->update('empleado',$data);
            
        }
       


         public function agregarsalida($data)
        {
           $this->db->insert('salida',$data);
        }

        public function eliminarsalida($idSalida)
        {
             $this->db->where('idSalida',$idSalida);
            $this->db->delete('salida');
        }
        public function modificarsalida($idSalida,$data)
        {
             $this->db->where('idSalida',$idSalida);
            $this->db->update('salida',$data);
            
        }
        
        public function listajapiPorIntervalo($fechaInicio)
{
    // Filtrar los datos según la fecha de inicio proporcionada
    $this->db->where('fechaVencimiento >=', $fechaInicio);
    $query = $this->db->get('productos'); // 'productos' es el nombre de tu tabla

    return $query;
}
    }