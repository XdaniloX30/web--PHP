<div class="pure-g">
    <div class="pure-u-1-12">
<form action="?c=Usuario&a=<?php echo $usu->id_usuario > null ? 'Actualizar' : 'Registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
    <input type="hidden" name="id_usuario" value="<?php echo $usu->__GET('id_usuario'); ?>" />
     <br></br>
    <table style="width:500px;" align="center">
	    <tr> 
            <th style="text-align:left;">Id Usuario</th>
            <td><input type="text" name="id_usuario" value="<?php echo $usu->__GET('id_usuario'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Nombre</th>
            <td><input type="text" name="nombre_usuario" value="<?php echo $usu->__GET('nombre_usuario'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Apellido</th>
            <td><input type="text" name="apellido_usuario" value="<?php echo $usu->__GET('apellido_usuario'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Edad</th>
            <td><input type="text" name="edad_usuario" value="<?php echo $usu->__GET('edad_usuario'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
			    <tr> 
            <th style="text-align:left;">Fecha Nacimiento</th>
            <td><input type="text" name="fechaNacimiento_usuario" value="<?php echo $usu->__GET('fechaNacimiento_usuario'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Codigo Perfil</th>
            <td><input type="text" name="codigo_perfil" value="<?php echo $usu->__GET('codigo_perfil'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Nombre Usuario</th>
            <td><input type="text" name="login_usuario" value="<?php echo $usu->__GET('login_usuario'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Password</th>
            <td><input type="text" name="pass_usuario" value="<?php echo $usu->__GET('pass_usuario'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
            </td>
        </tr>
    </table>
</form>
</div></div>