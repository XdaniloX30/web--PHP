<?php
require_once 'model/usuario.entidad.php';
require_once 'model/usuario.model.php';

class UsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new UsuarioModel();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $usu = new Usuario();
        
        if(isset($_REQUEST['id_usuario'])){
            $usu = $this->model->Obtener($_REQUEST['id_usuario']);
        }
        
        require_once 'view/header.php';
        require_once 'view/usuario/usuario_editar.php';
        require_once 'view/footer.php';
    }
    
    public function Actualizar(){
        $usu = new Usuario();
        
        $usu->__SET('id_usuario',              $_REQUEST['id_usuario']);
        $usu->__SET('apellido_usuario',          $_REQUEST['apellido_usuario']);
        $usu->__SET('nombre_usuario',        $_REQUEST['nombre_usuario']);
        $usu->__SET('codigo_perfil',            $_REQUEST['codigo_perfil']);
        $usu->__SET('correo_usuario',              $_REQUEST['correo_usuario']);
        $usu->__SET('edad_usuario',          $_REQUEST['edad_usuario']);
        $usu->__SET('login_usuario',        $_REQUEST['login_usuario']);
        $usu->__SET('pass_usuario',            $_REQUEST['pass_usuario']);
        
		$this->model->Actualizar($usu);
        header('Location: Usuario.php');
    }
    
    public function Registrar(){
        $usu = new Usuario();
		
        $usu->__SET('id_usuario',              $_REQUEST['id_usuario']);
        $usu->__SET('apellido_usuario',          $_REQUEST['apellido_usuario']);
        $usu->__SET('nombre_usuario',        $_REQUEST['nombre_usuario']);
        $usu->__SET('codigo_perfil',            $_REQUEST['codigo_perfil']);
        $usu->__SET('correo_usuario',              $_REQUEST['correo_usuario']);
        $usu->__SET('edad_usuario',          $_REQUEST['edad_usuario']);
        $usu->__SET('login_usuario',        $_REQUEST['login_usuario']);
        $usu->__SET('pass_usuario',            $_REQUEST['pass_usuario']);
        
        $this->model->Registrar($usu);
        header('Location: Usuario.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_usuario']);
        header('Location: Usuario.php');
    }
}