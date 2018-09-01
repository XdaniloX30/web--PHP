<div class="pure-g">
    <div class="pure-u-1-12">

                   <h2> Lista de Perfil </h2> 
        <table class="pure-table pure-table-horizontal" align="center">
            <thead>
                <tr>
                    <th style="text-align:left;">ID Perfil</th>
                    <th style="text-align:left;">Descripcion</th>
                   
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php foreach($this->model->Listar() as $r): ?>
                <tr>
					<td><?php echo $r->__GET('id_perfil'); ?></td>
                    <td><?php echo $r->__GET('descripcion_perfil'); ?></td>
                    
                    <td>
                        <a href="?c=Perfil&a=Crud&id_perfil=<?php echo $r->id_perfil; ?>">Editar</a>
                    </td>
                    <td>
                        <a href="?c=Perfil&a=Eliminar&id_perfil=<?php echo $r->id_perfil; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>     

    </div>
</div>