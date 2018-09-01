<?php
require_once 'model/perfil.entidad.php';
require_once 'model/perfil.model.php';

class PerfilController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new PerfilModel();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/perfil/perfil.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $per = new Perfil();
        
        if(isset($_REQUEST['id_perfil'])){
            $per = $this->model->Obtener($_REQUEST['id_perfil']);
        }
        
        require_once 'view/header.php';
        require_once 'view/perfil/perfil_editar.php';
        require_once 'view/footer.php';
    }
    
    public function Actualizar(){
		
       $per = new Perfil();
        
        $per->__SET('id_perfil',          $_REQUEST['id_perfil']);
        $per->__SET('descripcion_perfil',          $_REQUEST['descripcion_perfil']);


        $this->model->Actualizar($per);
        header('Location: Perfil.php');
    }
    
    public function Registrar(){
         $per = new Perfil();
        
        $per->__SET('id_perfil',          $_REQUEST['id_perfil']);
        $per->__SET('descripcion_perfil',          $_REQUEST['descripcion_perfil']);

        $this->model->Registrar($per);
        header('Location: Perfil.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_perfil']);
        header('Location: Perfil.php');
    }
}