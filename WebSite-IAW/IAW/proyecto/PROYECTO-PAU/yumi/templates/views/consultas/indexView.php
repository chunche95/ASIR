<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_navbar.php'; ?>


  <!-- Formulario y contenido -->
  <div class="container">
      <div class="row">
          <div class="col-12">
                <?php echo Flasher::flash(); ?>
          </div>
      </div>
    <div class="row">
      <div class="offset-xl-2 col-xl-8 py-5">
        <h2 class="mb-4">Agenda tu consulta</h2>
        
        <div class="card">
          <div class="card-header">Completa el formulario</div>
          <div class="card-body">
            <form method="post" action="consultas/post_agendar" >
                <?php echo insert_inputs(); ?>
              <div class="form-group row">
                <div class="col-xl-6 col-12">
                  <label for="nombres">Nombre(s)</label>
                  <input type="text" class="form-control" name="nombres" required>
                </div>
                <div class="col-xl-6 col-12">
                  <label for="apellidos">Apellido(s)</label>
                  <input type="text" class="form-control" name="apellidos" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-xl-6 col-12">
                  <label for="email">Correo electrónico</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-xl-6 col-12">
                  <label for="telefono">Teléfono</label>
                  <input type="text" class="form-control" name="telefono" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-xl-6 col-12">
                  <label for="sexo">Sexo</label>
                  <select name="sexo" id="sexo" class="form-control" required>
                    <option value="">Selecciona una opción...</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="col-xl-6 col-12">
                  <label for="edad">Edad</label>
                  <input type="number" class="form-control" name="edad" min="1" max="120" required>
                </div>
              </div>
              <div class="form-group">
                <label for="notas">Describe los síntomas</label>
                <textarea name="notas" id="notas" cols="10" rows="5" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label for="fecha">Reservar consulta</label>
                <input type="date" class="form-control" name="fecha" required>
              </div>

              <button class="btn btn-success" type="submit">Agendar ahora</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends contenido -->

  
<?php require_once INCLUDES.'inc_footer.php'; ?>