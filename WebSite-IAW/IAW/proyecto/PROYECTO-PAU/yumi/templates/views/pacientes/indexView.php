<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_navbar.php'; ?>

<!-- tabla de pacientes -->
<div class="container">
<div class="row">
    <div class="col-12">
    <h2 class="mb-4">Todos los pacientes</h2>
    
    <div class="card">
        <div class="card-header">Lista de pacientes</div>
        <div class="card-body table-responsive">
        <div class="table-responsive">
         <?php if ( empty($d -> pacientes)): ?>
            <div class="text-center">
                <img src="<?php echo IMAGES.'yumi_empty.png'; ?>" alt="No hay registros" class="imf-fluid py-5" style="width: 150px">
            </div>
        <table class="table table-hover table-striped table-borderless">
        </div>            
            <thead>
            <th>Número</th>
            <th>Nombre completo</th>
            <th>Sexo</th>
            <th>Fecha</th>
            <th>Status</th>
            <th></th>
            </thead>
            <tbody>
                <tr>
                <?php foreach ($d -> pacientes as $p): ?>
                    <tr>
                        <td><?php echo $p->numero; ?></td>
                        <td><?php echo $p->nombre_completo; ?></td>
                        <td><?php echo $p->sexo; ?></td>
                        <td><?php echo format_date($p->fecha); ?></td>
                        <td><?php echo $p->status; ?></td>
                    </tr> 
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo sprintf('pacientes/ver/%s', $p->id); ?>"><i class="fas fa-eye"></i> Ver</a>
                            <?php if ($p-> status === 'pendiente'):?>
                            <a class="dropdown-item" href="<?php echo sprintf('pacientes/revisar/%s', $p->id); ?>"><i class="fas fa-laptop-medical"></i> Revisar</a>
                            <?php elseif ($p-> status === 'revisado'):?>
                            <a class="dropdown-item" href="<?php echo sprintf('pacientes/terminar/%s', $p->id); ?>"><i class="fas fa-check"></i> Terminado</a>
                            <?php endif;?>
                            <a class="dropdown-item" href="<?php echo sprintf('pacientes/borrar/%s', $p->id); ?>"><i class="fas fa-trash"></i> Borrar</a>
                        </div>
                    </td>
                </tr>
           
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
</div>
<!-- ends contenido -->

<?php require_once INCLUDES.'inc_footer.php'; ?>