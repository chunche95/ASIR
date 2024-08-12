<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_navbar.php'; ?>

<!-- Formulario y contenido -->
<div class="container">
  <div class="row">
    <div class="offset-xl-2 col-xl-8 py-5">
      <h2 class="mb-4">Agenda tu consulta</h2>
      
      <div class="card">
        <div class="card-header">Completa el formulario</div>
        <div class="card-body">
          <form method="post" action="process.php" enctype="multipart/form-data">
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

<!-- tabla de pacientes -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <h2 class="mb-4">Todos los pacientes</h2>
      
      <div class="card">
        <div class="card-header">Lista de pacientes</div>
        <div class="card-body table-responsive">
          <table class="table table-hover table-striped table-borderless">
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
                <td>012032</td>
                <td>Pancho Doe</td>
                <td>Masculino</td>
                <td>12 de Agosto</td>
                <td>Revisado</td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> Ver</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-laptop-medical"></i> Revisar</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-check"></i> Terminado</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-trash"></i> Borrar</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>856322</td>
                <td>María Doe</td>
                <td>Femenino</td>
                <td>12 de Agosto</td>
                <td>Pendiente</td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> Ver</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-laptop-medical"></i> Revisar</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-check"></i> Terminado</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-trash"></i> Borrar</a>
                    </div>
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

<br><br>

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

<br><br>

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