<?php
defined('BASEPATH') or exit('No direct script access allowed'); //linea de seguiridad que impide la ejecutacion del http

//nombre de la clase base.php
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Producto extends CI_Controller
{

    //metodo 

    public function japi_listalte()
    {
        $lista = $this->producto_model->listajapi();
        $data['productos'] = $lista;
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('japi_listalte', $data);
        $this->load->view('inclte/pie');
    }



    public function proveedor()
    {
        $lista = $this->producto_model->listaproveedor();
        $data['proveedor'] = $lista;

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('proveedor', $data);
        $this->load->view('inclte/pie');
    }
    public function premiunlte()
    {
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('premiunlte');
        $this->load->view('inclte/pie');
    }

    public function premiunsinlte()
    {
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('premiunsinlte');
        $this->load->view('inclte/pie');
    }
    public function premiunespelte()
    {
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('premiunespelte');
        $this->load->view('inclte/pie');
    }
    public function superpremiunlte()
    {
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('superpremiunlte');
        $this->load->view('inclte/pie');
    }

    public function premiunlte2()
    {
        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('premiunlte2');
        $this->load->view('inclte2/pie');
    }

    public function premiunsinlte2()
    {
        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('premiunsinlte2');
        $this->load->view('inclte2/pie');
    }


    public function premiunespelte2()
    {
        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('premiunespelte2');
        $this->load->view('inclte2/pie');
    }
    public function superpremiunlte2()
    {
        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('superpremiunlte2');
        $this->load->view('inclte2/pie');
    }

    public function personallte()
    {
        $lista = $this->producto_model->listapersonal();
        $data['empleado'] = $lista;
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('personallte', $data);
        $this->load->view('inclte/pie');
    }
    public function salidalte()
    {
        $lista = $this->salida_model->listasalida();
        $data['salida'] = $lista;
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('salidalte', $data);
        $this->load->view('inclte/pie');
    }
    public function ubicacionlte()
    {
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('ubicacionlte');
        $this->load->view('inclte/pie');
    }

    public function japi2_listalte()
    {
        $lista = $this->producto_model->listajapi();
        $data['productos'] = $lista;
        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('japi2_listalte', $data);
        $this->load->view('inclte2/pie');
    }



    public function salida2_listalte()
    {

        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('fino2_listalte');
        $this->load->view('inclte2/pie');
    }

    public function proveedor2_listalte()
    {

        $lista = $this->producto_model->listaproveedor();
        $data['proveedor'] = $lista;

        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('proveedor2_listalte', $data);
        $this->load->view('inclte2/pie');
    }

    public function personal2_listalte()
    {
        $lista = $this->producto_model->listapersonal();
        $data['empleado'] = $lista;
        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('personal2_listalte', $data);
        $this->load->view('inclte2/pie');
    }

    public function ubicacionlte2()
    {
        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('ubicacionlte2');
        $this->load->view('inclte2/pie');
    }


    public function lista()
    {

        $lista = $this->producto_model->lista();
        $data['lista'] = $lista;
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('lista', $data);
        $this->load->view('inclte/pie');
    }

    public function agregarlista()
    {
        //mostrar un formulario (vista) para agregar nuevo estudiante

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('lista_formulario');
        $this->load->view('inclte/pie');
    }






    public function agregarlistabd()
    {


        $data['producto'] = ucwords(strtolower($_POST['producto']));

        if (!preg_match('/^[A-Za-z\s]+$/', $data['producto'])) {
            $this->session->set_flashdata('error_mesage', 'el campo Producto no debe tener caracteres especiales');
            redirect('producto/lista_formulario', 'refresh');
        }


        $this->producto_model->agregarlista($data);

        redirect('producto/lista', 'refresh');
    }



    public function modificarlista()
    {
        $idLista = $_POST['idLista'];
        $data['infolista'] = $this->producto_model->recupeLista($idLista);

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('modificarlista',$data);
        $this->load->view('inclte/pie');
    }

    public function modificarlistabd()
    {
        $idLista = $_POST['idLista'];

        $data['producto'] = $_POST['producto'];
       


        $this->producto_model->modificarlista($idLista, $data);

        redirect('producto/lista', 'refresh');
    }

   

    public function eliminarlista()
    {
        $idLista = $_POST['idLista'];
        $this->producto_model->eliminarlista($idLista);
        redirect('producto/lista', 'refresh');
    }

    public function subirfoto()
    {


        $data['idLista'] = $_POST['idLista'];
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('subirform', $data);
        $this->load->view('inclte/pie');
    }


    public function subir()
    {


        $idLista = $_POST['idLista'];

        $nombrearchivo = $idLista . ".jpg";

        $config['upload_path'] = './foto';
        $config['file_name'] = $nombrearchivo;
        $direccion = "./foto" . $nombrearchivo;

        if (file_exists($direccion)) {
            unlink($direccion);
        }

        $config['allowed_types'] = 'jpg';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['foto'] = $nombrearchivo;
            $this->producto_model->modificarlista($idLista, $data);
            $this->upload->data();
        }
        redirect('producto/lista', 'refresh');
    }

    public function reportelte()
    {


        $lista = $this->producto_model->listajapi();
        $lista = $lista->result();

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="productos.xlsx"');
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Producto');
        $sheet->setCellValue('C1', 'cantidad');
        $sheet->setCellValue('D1', 'peso');
        $sheet->setCellValue('E1', 'lote');
        $sheet->setCellValue('F1', 'fechaVencimineto');
        $sheet->setCellValue('G1', 'nacionalidad');
        $sheet->setCellValue('H1', 'creado');


        $sn = 2;
        foreach ($lista as $row) {
            $sheet->setCellValue('A' . $sn, $row->idProducto);
            $sheet->setCellValue('B' . $sn, $row->producto);
            $sheet->setCellValue('C' . $sn, $row->cantidad);
            $sheet->setCellValue('D' . $sn, $row->peso);
            $sheet->setCellValue('E' . $sn, $row->lote);
            $sheet->setCellValue('F' . $sn, $row->fechaVencimineto);
            $sheet->setCellValue('G' . $sn, $row->nacionalidad);
            $sheet->setCellValue('H' . $sn, $row->creado);

            $sn++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("php://output");
    }

    public function reportelte2()
    {

        $lista = $this->producto_model->listaestudiante();
        $lista = $lista->result();

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="estudiantes.xlsx"');
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Producto');
        $sheet->setCellValue('C1', 'Precio');

        $sn = 2;
        foreach ($lista as $row) {
            $sheet->setCellValue('A' . $sn, $row->idProducto);
            $sheet->setCellValue('B' . $sn, $row->producto);
            $sheet->setCellValue('C' . $sn, $row->precio);

            $sn++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("php://output");
    }

    public function reportelte3()
    {

        $lista = $this->producto_model->listaestudiante();
        $lista = $lista->result();

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="estudiantes.xlsx"');
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Producto');
        $sheet->setCellValue('C1', 'Precio');

        $sn = 2;
        foreach ($lista as $row) {
            $sheet->setCellValue('A' . $sn, $row->idProducto);
            $sheet->setCellValue('B' . $sn, $row->producto);
            $sheet->setCellValue('C' . $sn, $row->precio);

            $sn++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("php://output");
    }

   







    public function agregar()
    {
        //mostrar un formulario (vista) para agregar nuevo estudiante

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('pro_formulario');
        $this->load->view('inclte/pie');
    }


    public function agregar2()
    {
        //mostrar un formulario (vista) para agregar nuevo estudiante

        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('pro_formulario2');
        $this->load->view('inclte2/pie');
    }

    public function agregarbd()
    {
        // atri. BD      |    formulario
        $data['producto'] = $_POST['producto'];
        $data['gama'] = $_POST['gama'];
        $data['cantidad'] = $_POST['cantidad'];
        $data['peso'] = $_POST['peso'];
        $data['lote'] = $_POST['lote'];
        $data['fechaVencimineto'] = $_POST['fechaVencimineto'];
        $data['nacionalidad'] = $_POST['nacionalidad'];
        $data['almacen']=$_POST['almacen'];

        $nombreTabla = $_POST['almacen'];
        $this->producto_model->agregarjapi($data, $nombreTabla);

        redirect('producto/japi_listalte', 'refresh');
    }

    public function agregarbd2()
    {
        // atri. BD      |    formulario
        $data['producto'] = $_POST['producto'];
        $data['gama'] = $_POST['gama'];
        $data['cantidad'] = $_POST['cantidad'];
        $data['peso'] = $_POST['peso'];
        $data['lote'] = $_POST['lote'];
        $data['fechaVencimineto'] = $_POST['fechaVencimineto'];
        $data['nacionalidad'] = $_POST['nacionalidad'];
        $data['almacen']=$_POST['almacen'];
        $nombreTabla = $_POST['almacen'];
        $this->producto_model->agregarjapi($data, $nombreTabla);

        

        redirect('producto/japi2_listalte', 'refresh');
    }

    public function eliminarjapi()
    {
        $idproducto = $_POST['idproducto'];
        $almacen = $_POST['nombreAlmacen'];

        $this->producto_model->eliminarjapi($idproducto,$almacen);
         

        redirect('producto/japi_listalte', 'refresh');
    }







    public function modificarjapi()
    {
        $idproducto = $_POST['idproducto'];
        $data['infojapi'] = $this->producto_model->recuperarjapi($idproducto);

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('modificarjapi', $data);
        $this->load->view('inclte/pie');
    }

    public function modificarbd()
    {
        $idproducto = $_POST['idproducto'];

        $data['producto'] = $_POST['producto'];
        $data['gama'] = $_POST['gama'];
        $data['cantidad'] = $_POST['cantidad'];
        $data['peso'] = $_POST['peso'];
        $data['lote'] = $_POST['lote'];
        $data['fechaVencimineto'] = $_POST['fechaVencimineto'];
        $data['nacionalidad'] = $_POST['nacionalidad'];


        $this->producto_model->modificarjapi($idproducto, $data);

        redirect('producto/japi_listalte', 'refresh');
    }

    public function agregarpersonal()
    {
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('perso_formulario');
        $this->load->view('inclte/pie');
    }
    public function agregarpersonal2()
    {
        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('perso_formulario2');
        $this->load->view('inclte2/pie');
    }

    public function agregarpersonalbd()
    {



        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('perso_formulario');
        $this->load->view('inclte/pie');


        $data['nombre'] = ucwords(strtolower($_POST['nombre']));
        $data['apePaterno'] = ucwords(strtolower($_POST['apellido1']));
        $data['apeMaterno'] = ucwords(strtolower($_POST['apellido2']));
        $data['fechaNacimineto'] = $_POST['fechaNacimineto'];
        $ci = $_POST['ci'];
        if (ctype_digit($ci)) {
            // El campo CI solo contiene números
            $data['ci'] = $ci;
        } else {
            // El campo CI contiene caracteres no numéricos
            echo "El campo CI debe contener solo números.";
        }
        $data['cargo'] = ucwords(strtolower($_POST['cargo']));


        if (!preg_match('/^[A-Za-z\s]+$/', $data['nombre'])) {
            $this->session->set_flashdata('error_mesage', 'el campo Nombre no debe tener caracteres especiales');
            redirect('producto/perso_formulario', 'refresh');
        }

        if (!preg_match('/^[A-Za-z\s]+$/', $data['apePaterno'])) {
            $this->session->set_flashdata('error_mesage', 'el campo Apellido Paterno no debe tener caracteres especiales');
            redirect('producto/perso_formulario', 'refresh');
        }

        if (!preg_match('/^[A-Za-z\s]+$/', $data['apeMaterno'])) {
            $this->session->set_flashdata('error_mesage', 'el campo Apellido Materno no debe tener caracteres especiales');
            redirect('producto/perso_formulario', 'refresh');
        }

        if (!preg_match('/^[A-Za-z\s]+$/', $data['cargo'])) {
            $this->session->set_flashdata('error_mesage', 'el campo cargo no debe tener caracteres especiales');
            redirect('producto/perso_formulario', 'refresh');
        }



        $this->producto_model->agregarpersonal($data);

        redirect('producto/personallte', 'refresh');
    }

    public function perso_formulario()
    {
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('perso_formulario');
        $this->load->view('inclte/pie');
    }

    public function agregarpersonalbd2()
    {


        // atri. BD      |    formulario
        $data['nombre'] = $_POST['nombre'];
        $data['apePaterno'] = $_POST['apellido1'];
        $data['apeMaterno'] = $_POST['apellido2'];
        $data['fechaNacimineto'] = $_POST['fechaNacimineto'];
        $data['ci'] = $_POST['ci'];
        $data['cargo'] = $_POST['cargo'];



        $this->producto_model->agregarpersonal2($data);

        redirect('producto/personal2_listalte', 'refresh');
    }



    public function modificarpersonal1()
    {

        $idEmpleado = $_POST['idEmpleado'];
        $data['infopersonal'] = $this->producto_model->recuperarpersonal($idEmpleado);

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('pro_modificar', $data);
        $this->load->view('inclte/pie');
    }

    public function modificarpersonalbd()
    {
        $idEmpleado = $_POST['idEmpleado'];

        $data['nombre'] = $_POST['nombre'];
        $data['apePaterno'] = $_POST['apellido1'];
        $data['apeMaterno'] = $_POST['apellido2'];
        $data['fechaNacimineto'] = $_POST['fechaNacimineto'];
        $data['ci'] = $_POST['ci'];
        $data['cargo'] = $_POST['cargo'];

        $this->producto_model->modificarpersonal($idEmpleado, $data);

        redirect('producto/personallte', 'refresh');
    }

    public function eliminarpersonal()
    {
        $idEmpleado = $_POST['idEmpleado'];
        $this->producto_model->eliminarpersonal($idEmpleado);
        redirect('producto/personallte', 'refresh');
    }


    public function agregarproveedor()
    {
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('prov_formulario');
        $this->load->view('inclte/pie');
    }

    public function agregarproveedorbd()
    {

        // atri. BD      |    formulario
        $data['proveedor'] = ucwords(strtolower($_POST['Proveedor']));
        $data['pais'] = $_POST['Pais'];

        $cantidad = $_POST['Cantidad'];

        if (ctype_digit($cantidad)) {
            // El campo CI solo contiene números
            $data['Cantidad'] = $cantidad;
        } else {
            // El campo CI contiene caracteres no numéricos
            echo "El campo CI debe contener solo números.";
        }
        $data['marca'] = $_POST['Marca'];
        $data['peso'] = $_POST['Peso'];
        $data['lote'] = $_POST['lote'];


        if (!preg_match('/^[A-Za-z\s]+$/', $data['proveedor'])) {
            $this->session->set_flashdata('error_mesage', 'el campo Proveedor no debe tener caracteres especiales');
            redirect('producto/prov_formulario', 'refresh');
        }

        $this->producto_model->agregarproveedor($data);

        redirect('producto/proveedor', 'refresh');
    }

    public function prov_formulario()
    {
        $this->load->view('prov_formulario');
    }

    public function agregararproveedor2()
    {

        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('prov_formulario');
        $this->load->view('inclte2/pie');
    }

    public function modificarproveedor()
    {
        $idProveedor = $_POST['idProveedor'];
        $data['infoproveedor'] = $this->producto_model->recuperarproveedor($idProveedor);

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('modificarproveedor', $data);
        $this->load->view('inclte/pie');
    }

    public function modificarproveedorbd()
    {
        $idProveedor = $_POST['idProveedor'];

        $data['proveedor'] = $_POST['proveedor'];
        $data['pais'] = $_POST['pais'];
        $data['cantidad'] = $_POST['cantidad'];
        $data['marca'] = $_POST['marca'];
        $data['peso'] = $_POST['peso'];
        $data['lote'] = $_POST['lote'];

        $this->producto_model->modificarproveedor($idProveedor, $data);

        redirect('producto/proveedor', 'refresh');
    }

    public function eliminarproveedor()
    {
        $idProveedor = $_POST['idProveedor'];
        $this->producto_model->eliminarproveedor($idProveedor);
        redirect('producto/proveedor', 'refresh');
    }

    public function agregarsalida()
    {
        $data['infosalida'] = $this->salida_model->listaSalida();

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('sali_formulario', $data);
        $this->load->view('inclte/pie');
    }

    public function agregarsalida2()
    {


        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('sali_formulario');
        $this->load->view('inclte/pie');
    }

    public function agregarsalidabd()
    {
        $data['producto'] = $_POST['producto'];
        $data['cantidad'] = $_POST['cantidad'];
        $data['kilos'] = $_POST['kilos'];
        $data['lote'] = $_POST['Lote'];

        $this->salida_model->agregarsalida($data);
        redirect('producto/salidalte', 'refresh');
    }

    public function modificarsalida()
    {
        $idSalida = $_POST['idSalida'];
        $data['infosalida'] = $this->salida_model->salidaProducto($idSalida);

        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('modificarsalida', $data);
        $this->load->view('inclte/pie');
    }

    public function modificarsalidabd()
    {

        $idSalida = $_POST['idSalida'];

        $data['producto'] = $_POST['producto'];
        $data['cantidad'] = $_POST['cantidad'];
        $data['kilos'] = $_POST['kilos'];
        $data['lote'] = $_POST['lote'];


        $this->producto_model->modificarsalida($idSalida, $data);

        redirect('producto/salidalte', 'refresh');
    }

    public function eliminarsalida()
    {
        $idSalida = $_POST['idSalida'];
        $this->producto_model->eliminarsalida($idSalida);
        redirect('producto/salidalte', 'refresh');
    }


    public function almacen1()
    {

        $lista = $this->producto_model->listaalmacen1();
        $data['almacen1'] = $lista;
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('almacen1', $data);
        $this->load->view('inclte/pie');
    }



    public function almacen2()
    {

        $lista = $this->producto_model->listaalmacen2();
        $data['almacen2'] = $lista;
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('almacen2', $data);
        $this->load->view('inclte/pie');
    }



    public function almacen3()
    {

        $lista = $this->producto_model->listaalmacen3();
        $data['almacen3'] = $lista;
        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('almacen3', $data);
        $this->load->view('inclte/pie');
    }









    public function indexlte()
    {
        if ($this->session->userdata('login')) {


            $fechaprueba = formatearFecha('2023-06-21 15:42:40');
            $data['fechatest'] = $fechaprueba;


            $this->load->view('inclte/cabecera');
            $this->load->view('inclte/menusuperior');
            $this->load->view('inclte/menulateral');
            $this->load->view('pro_listalte');
            $this->load->view('inclte/pie');
        } else {

            redirect('usuarios/index/2', 'refresh');
        }
    }

    public function invitadolte()
    {
        if ($this->session->userdata('login')) {

            $this->load->view('inclte2/cabecera');
            $this->load->view('inclte2/menusuperior');
            $this->load->view('inclte2/menulateral');
            $this->load->view('pro_invitado');
            $this->load->view('inclte2/pie');
        } else {

            redirect('usuarios/index/2', 'refresh');
        }
    }
}
