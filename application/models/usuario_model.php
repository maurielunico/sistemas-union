<?php
class Usuario_model extends CI_Model
{

    public function validar($login, $password)
    {
        /*
            $this->db->select('*');
            $this->db->from('usuarios');
         $this->db->where('login',$login);
         $this->db->where('password',$password);
            return $this->db->get();
*/
        $query = "SELECT * FROM usuarios WHERE login='$login'AND password='$password'";
        return $this->db->query($query);
    }
    public function save_verification_code($email, $verification_code)
    {
        // Primero, debes buscar el usuario por su dirección de correo electrónico
        $this->db->where('email', $email);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() > 0) {
            // El usuario existe en la base de datos, actualiza su código de verificación
            $data = array('verification_code' => $verification_code);
            $this->db->where('email', $email);
            $this->db->update('usuarios', $data);
        } else {
            // El usuario no existe en la base de datos, puedes manejar esto según tus necesidades
            // Puedes, por ejemplo, registrar un registro nuevo para el usuario
            $data = array(
                'email' => $email,
                'verification_code' => $verification_code
            );
            $this->db->insert('usuarios', $data);
        }
    }
    public function validar_token($token)
    {
        $query = $this->db->get_where('usuarios', array('verification_code' => $token));
        return $query;
    }

    public function cambiar_contrasena($token, $nueva_contrasena)
    {
        $data = array('password' => $nueva_contrasena);
        $this->db->where('verification_code', $token);
        $this->db->update('usuarios', $data);
    }
}
