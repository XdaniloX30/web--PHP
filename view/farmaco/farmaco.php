<div class="pure-g">
    <div class="pure-u-1-12">
	
              <h2>Lista de Farmacos </h2>
        <table class="pure-table pure-table-horizontal">
            <thead>
                <tr>
                    <th style="text-align:left;">ID Farmaco</th>
                    <th style="text-align:left;">Descripcion</th>
                    <th style="text-align:left;">Precio</th>
                    <th style="text-align:left;">Unidad</th>
					<th style="text-align:left;">ID Tipo Farmaco</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php foreach($this->model->Listar() as $r): ?>
                <tr>
				    <td><?php echo $r->__GET('id_farmaco'); ?></td>
                    <td><?php echo $r->__GET('descripcion'); ?></td>
                    <td><?php echo $r->__GET('precio'); ?></td>
                    <td><?php echo $r->__GET('unidad');?></td>
                    <td><?php echo $r->__GET('id_tipoFarmaco'); ?></td>
                    <td>
                        <a href="?c=Farmaco&a=Crud&id_farmaco=<?php echo $r->id_farmaco; ?>">Editar</a>
                    </td>
                    <td>
                        <a href="?c=Farmaco&a=Eliminar&id_farmaco=<?php echo $r->id_farmaco; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>     

    </div>
</div>