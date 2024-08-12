<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_navbar.php'; ?>

  <!-- vista de paciente -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-4">Viendo paciente Pancho Doe</h2>
      </div>

      <div class="col-xl-4">
        <img src="https://picsum.photos/500" alt="Paciente" class="img-fluid img-thumbnail img-circle">
      </div>
      <div class="col-xl-8">
        <div class="card">
          <div class="card-header">Información general</div>
          <div class="card-body">
            <p><strong>Nombre(s):</strong> Pancho</p>
            <p><strong>Apellido(s):</strong> Doe</p>
            <p><strong>Sexo:</strong> Masculino</p>

            <p><strong>Correo electrónico:</strong> micorreo@doe.com</p>
            <p><strong>Teléfono:</strong> 11223344</p>

            <p><strong>Fecha agendada:</strong> 12 de Agosto 2020</p>

            <p><strong>Notas agregadas o síntomas:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas suscipit et quod possimus laudantium rerum fugiat, deleniti facilis dignissimos perspiciatis.</p>

            <div class="button-group">
              <a href="" class="btn btn-warning"><i class="fas fa-laptop-medical"></i> Revisar</a>
              <a href="" class="btn btn-success"><i class="fas fa-check"></i> Terminado</a>
              <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Borrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends contenido -->

<?php require_once INCLUDES.'inc_footer.php'; ?>