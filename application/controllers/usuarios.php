<?php
defined('BASEPATH') or exit('No direct script access allowed'); //linea de seguiridad que impide la ejecutacion del http

//nombre de la clase base.php
require FCPATH . 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//nombre de la clase base.php


class Usuarios extends CI_Controller
{
    //metodo 

    public function index()
    {
        if ($this->session->userdata('login')) {
            redirect('usuarios/panel', 'refresh');
        } else {
            $data['msg'] = $this->uri->segment(3);
            $this->load->view('login', $data);
        }
    }

    public function validarusuario()
    {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $consulta = $this->usuario_model->validar($login, $password);

        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $row) {
                $this->session->set_userdata('idUsuario', $row->idUsuario);
                $this->session->set_userdata('login', $row->login);
                $this->session->set_userdata('tipo', $row->tipo);
                redirect('usuarios/panel', 'refresh');
            }
        } else {
            redirect('usuarios/index/1', 'refresh');
        }
    }

    public function panel()
    {
        if ($this->session->userdata('login')) {
            $tipo = $this->session->userdata('tipo');
            if ($tipo == 'admin') {
                redirect('producto/indexlte', 'refresh');
            } else {
                redirect('producto/invitadolte', 'refresh');
            }
        } else {

            redirect('usuarios/index/2', 'refresh');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarios/index/3', 'refresh');
    }
    public function agregar()
    {
        //mostrar un formulario (vista) para agregar nuevo estudiante
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('est_formulario');
        $this->load->view('inclte/pie');
    }

    public function agregarbd()
    {
        //atri. BD      |    formulario
        $data['producto'] = $_POST['producto'];
        $data['precio'] = $_POST['precio'];


        $this->estudiante_model->agregarestudiante($data);

        redirect('estudiante/index', 'refresh');
    }

    public function eliminarbd()
    {
        $idProducto = $_POST['idProducto'];
        $this->estudiante_model->eliminarestudianate($idProducto);
        redirect('estudiante/index', 'refresh');
    }

    public function modificar()
    {
        $idProducto = $_POST['idProducto'];
        $data['infoestudiante'] = $this->estudiante_model->recuperarestudiante($idProducto);

        $this->load->view('inc/cabecera');
        $this->load->view('inc/menu');
        $this->load->view('est_modificar', $data);
        $this->load->view('inc/pie');
    }

    public function modificarbd()
    {
        $idProducto = $_POST['idProducto'];

        $data['producto'] = $_POST['producto'];
        $data['precio'] = $_POST['precio'];


        $this->estudiante_model->modificarestudiante($idProducto, $data);

        redirect('estudiante/index', 'refresh');
    }

    public function deshabilitarbd()
    {
        $idProducto = $_POST['idProducto'];
        $data['habilitado'] = '0';

        $this->estudiante_model->modificarestudiante($idProducto, $data);

        redirect('estudiante/index', 'refresh');
    }

    public function deshabilitados()
    {
        $lista = $this->estudiante_model->listaestudiantedeshabilitado();
        $data['producto'] = $lista;

        $this->load->view('inc/cabecera');
        $this->load->view('inc/menu');
        $this->load->view('est_listadeshabilitado', $data);
        $this->load->view('inc/pie');
    }

    public function habilitarbd()
    {
        $idProducto = $_POST['idProducto'];
        $data['habilitado'] = '1';

        $this->estudiante_model->modificarestudiante($idProducto, $data);

        redirect('estudiante/deshabilitados', 'refresh');
    }

    public function indexlte()
    {
        $lista = $this->estudiante_model->listaestudiante();
        $data['productos'] = $lista;

        $fechaprueba = formatearFecha('2023-06-21 15:42:40');
        $data['fechatest'] = $fechaprueba;


        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('est_listalte', $data);
        $this->load->view('inclte/pie');
    }
    public function send_recovery_email()
    {
        $email = $this->input->post('email');
        // Generar un código de verificación único (puedes adaptarlo según tus necesidades)
        $verification_code = mt_rand(100000, 999999);

        // Guardar el código de verificación en la base de datos junto con el correo electrónico del usuario
        $this->usuario_model->save_verification_code($email, $verification_code);
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hinojosamauricio395@gmail.com';
        $mail->Password = 'rksfmbubkpajwkdo';
        $mail->SMTPSecure = 'tls'; // Puedes usar 'ssl' si es necesario
        $mail->Port = 587; // Puerto SMTP

        $mail->setFrom('hinojosamauricio395@gmail.com', 'Union Agronegocio ');
        $mail->addAddress($email);
        $mail->isHTML(true);

        $mail->Subject = 'Recuperacion de Contraseña';
        $mail->Body = 'Para restablecer tu contraseña, utiliza el siguiente código de verificación: ' . $verification_code;
        $mail->send();
        redirect('usuarios/validartoke', 'refresh');
    }

    public function sent()
    {
        $this->load->view('email');
    }
    public function cambiarContrasena()
    {
        $this->load->view('cambiar_contrasena');
    }
    public function validartoke()
    {
        $this->load->view('validar_token');
    }
    public function validar_token()
    {
        $token = $this->uri->segment(3);
        $result = $this->usuario_model->validar_token($token);

        if ($result->num_rows() > 0) {
            $data['token'] = $token;
            $this->load->view('cambiar_contrasena', $data);
        } else {
            redirect('usuarios/token_invalido', 'refresh');
        }
    }

    public function cambiar_contrasena()
    {
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');
        $token = $this->input->post('token');

        if (
            $password === $confirm_password
        ) {
            // Contraseña válida, actualiza la contraseña en la base de datos
            $this->usuario_model->cambiar_contrasena($token, md5($password));
            $this->load->view('contrasena_cambiada');
        } else {
            redirect('usuarios/cambiar_contraseña', 'refresh');
        }
    }
}
