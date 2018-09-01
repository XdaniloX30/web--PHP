<div class="pure-g">
    <div class="pure-u-1-12">

                   <h2> Lista de Usuarios </h2> 
        <table class="pure-table pure-table-horizontal">
            <thead>
                <tr>
                    <th style="text-align:left;">ID usuario</th>
                    <th style="text-align:left;">Nombre</th>
                    <th style="text-align:left;">Apellido</th>
                    <th style="text-align:left;">Edad</th>
					  <th style="text-align:left;">Fecha nacimiento</th>
                    <th style="text-align:left;">Perfil</th>
                    <th style="text-align:left;">Login</th>
                    <th style="text-align:left;">Password</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php foreach($this->model->Listar() as $r): ?>
                <tr>
					<td><?php echo $r->__GET('id_usuario'); ?></td>
                    <td><?php echo $r->__GET('nombre_usuario'); ?></td>
                    <td><?php echo $r->__GET('apellido_usuario'); ?></td>
                    <td><?php echo $r->__GET('edad_usuario');?></td>
                    <td><?php echo $r->__GET('fechaNacimiento_usuario'); ?></td>
                    <td><?php echo $r->__GET('codigo_perfil'); ?></td>
                    <td><?php echo $r->__GET('login_usuario');?></td>
                    <td><?php echo $r->__GET('pass_usuario'); ?></td>
                    <td>
                        <a href="?c=Usuario&a=Crud&id_usuario=<?php echo $r->id_usuario; ?>">Editar</a>
                    </td>
                    <td>
                        <a href="?c=Usuario&a=Eliminar&id_usuario=<?php echo $r->id_usuario; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>     

    </div>
</div>