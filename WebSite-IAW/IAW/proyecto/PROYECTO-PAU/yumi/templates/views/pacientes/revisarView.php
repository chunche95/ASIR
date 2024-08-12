<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_navbar.php'; ?>

  <!-- vista de paciente -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-4">Revisando paciente Pancho Doe</h2>
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

            <form action="" class="">
              <div class="form-group">
                <label for="recomendaciones">Recomendaciones</label>
                <textarea class="form-control" name="recomendaciones" reuqired></textarea>
              </div>
              
              <div class="form-group">
                <label for="receta">Receta</label>
                <input type="file" class="form-control-file" name="receta" id="receta" accept="application/pdf" required>
              </div>

              <button class="btn btn-success" type="submit"><i class="fas fa-envelope-open-text"></i> Terminar revisión</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends contenido -->
  
<?php require_once INCLUDES.'inc_footer.php'; ?>