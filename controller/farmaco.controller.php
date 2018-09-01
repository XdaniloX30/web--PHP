<?php
require_once 'model/farmaco.entidad.php';
require_once 'model/farmaco.model.php';

class FarmacoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new FarmacoModel();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/farmaco/farmaco.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $far = new Farmaco();
        
        if(isset($_REQUEST['id_farmaco'])){
            $far = $this->model->Obtener($_REQUEST['id_farmaco']);
        }
        
        require_once 'view/header.php';
        require_once 'view/farmaco/farmaco_editar.php';
        require_once 'view/footer.php';
    }
    
    public function Actualizar(){
        $far = new Farmaco();
        
        $far->__SET('id_farmaco',              $_REQUEST['id_farmaco']);
        $far->__SET('descripcion',          $_REQUEST['descripcion']);
        $far->__SET('precio',        $_REQUEST['precio']);
        $far->__SET('unidad',            $_REQUEST['unidad']);
        $far->__SET('id_tipoFarmaco',            $_REQUEST['id_tipoFarmaco']);
		
        $this->model->Actualizar($far);
        header('Location: Farmaco.php');
    }
    
    public function Registrar(){
         $far = new Farmaco();
        
        $far->__SET('id_farmaco',              $_REQUEST['id_farmaco']);
        $far->__SET('descripcion',          $_REQUEST['descripcion']);
        $far->__SET('precio',        $_REQUEST['precio']);
        $far->__SET('unidad',            $_REQUEST['unidad']);
        $far->__SET('id_tipoFarmaco',            $_REQUEST['id_tipoFarmaco']);
		
		
		
        $this->model->Registrar($far);
        header('Location: Farmaco.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_farmaco']);
        header('Location: Farmaco.php');
	}
}