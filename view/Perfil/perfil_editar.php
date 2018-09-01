<div class="pure-g">
    <div class="pure-u-1-12">
<form action="?c=Perfil&a=<?php echo $per->id_perfil > null ? 'Actualizar' : 'Registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
    <input type="hidden" name="id_perfil" value="<?php echo $per->__GET('id_perfil'); ?>" />
     <br></br>
    <table style="width:500px;" align="center">
	    <tr> 
            <th style="text-align:left;">Id Perfil</th>
            <td><input type="text" name="id_perfil" value="<?php echo $per->__GET('id_perfil'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Descripcion</th>
            <td><input type="text" name="descripcion_perfil" value="<?php echo $per->__GET('descripcion_perfil'); ?>" style="width:100%;" /></td>
        </tr>
       
            <td colspan="2">
                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
            </td>
        </tr>
    </table>
</form>
</div></div>