<form action="?c=Farmaco&a=<?php echo $far->id_farmaco > null ? 'Actualizar' : 'Registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
    <input type="hidden" name="id_farmaco" value="<?php echo $far->__GET('id_farmaco'); ?>" />

    <table style="width:500px;">
	    <tr> 
            <th style="text-align:left;">ID Farmaco</th>
            <td><input type="text" name="id_farmaco" value="<?php echo $far->__GET('id_farmaco'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Descripcion</th>
            <td><input type="text" name="descripcion" value="<?php echo $far->__GET('descripcion'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Precio</th>
            <td><input type="text" name="precio" value="<?php echo $far->__GET('precio'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <th style="text-align:left;">Unidad</th>
            <td><input type="text" name="unidad" value="<?php echo $far->__GET('unidad'); ?>" style="width:100%;" /></td>
        </tr>
		<tr>
            <th style="text-align:left;">ID Tipo Farmaco</th>
            <td><input type="text" name="id_tipoFarmaco" value="<?php echo $far->__GET('id_tipoFarmaco'); ?>" style="width:100%;" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
            </td>
        </tr>
    </table>
</form>