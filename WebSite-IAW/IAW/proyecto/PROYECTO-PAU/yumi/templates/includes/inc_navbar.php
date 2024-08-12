<!-- Navbar -->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?php echo URL; ?>"><img src="<?php echo IMAGES.'logo_150.png'; ?>" alt="Yumi" class="img-fluid" style="width: 70px;"></a></h5>
<nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="consultas/agendar">Agendar consulta</a>
    <?php if(Auth::validate()): ?>
        <a class="p-2 text-dark" href="pacientes">Pacientes</a>
        <a class="btn btn-outline-danger" href="logout">Cerrar sesión</a>
    <?php else: ?>
        <a class="btn btn-success" href="login">Ingresar</a>
    <?php endif; ?>
    
</nav>
</div>
<!-- ends navbar -->