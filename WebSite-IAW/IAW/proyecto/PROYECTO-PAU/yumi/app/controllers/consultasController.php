<?php 

class consultasController extends Controller {
  function __construct()
  {
  }
  
  function index() {
    Redirect::to('consultas/agendar');
   
  }

  function agendar() {
    $data = [
        'title' => 'Tu cita HC3.0'
    ];

    View::render('index', $data);
   
  }

    function post_agendar() {
        if (!Csrf::validate($_POST['csrf'])) {
            Flasher::new('Token no válido.', 'danger');
            Redirect::back();
        }

        // Correo electronico       
        // Procesar formulario
        $nombres            = clean($_POST['nombres']);
        $apellidos          = clean($_POST['apellidos']);
        $nombre_completo    = sprintf('%s %s', $nombres, $apellidos);
        $email              = clean($_POST['email']);
        $telefono           = clean($_POST['telefono']);
        $sexo               = clean($_POST['sexo']);
        $edad               = clean($_POST['edad']);
        $notas              = clean($_POST['notas']);
        $fecha              = clean($_POST['fecha']);

        
        try{
          // Guardar en la base de datos
          $data = [
            'id' => random_password(6, 'numeric'),
            'dni' => random_int(8, 8),
            'nombre' => $nombres,
            'apellido' => $apellidos,
            'edad' => $edad,
            'email'  => $email,
            'movil' => $telefono,
            'notas' => $notas,
            'fecha' => $fecha,
            'status' => 'pendiente',
            'borrado' => 0,
            'creado' => now()
          ];

          if ($id = pacienteModel::add('pacientes', $data)){
            throw new Exception('Hay un error en tu registro!');
          }

          $paciente = pacienteModel::list('pacientes', ['id' => $id], 1);

          $body = 'Hola %s, <br>
          Recibimos tu consulta, tu información es la siguiente: <br><br>
          <b> Nº de paciente:<b> %s<br>
          <b> Nombre(s):<b> %s<br>
          <b> Apellidos:<b> %s<br>
          <b> E-mail:<b> %s<br>
          <b> Móvil:<b> %s<br>
          <b> Sexo:<b> %s<br>
          <b> Edad:<b> %s<br>
          <b> Tus síntomas son:<b> %s<br>
          <b> Fecha:<b> %s<br>
          <b> Estado de su consulta es:<b> %s<br>
          ';
          $body=sprintf($body, 
            $paciente['nombre_completo'],
            $paciente['idNumeroSeguro'],
            $paciente['nombres'],
            $paciente['apellidos'],
            $paciente['email'],
            $paciente['telefono'],
            $paciente['sexo'],
            $paciente['edad'],
            $paciente['notas'],
            format_date($paciente['fecha']),
            $paciente['status']
          );


          $subject = sprintf('[%s] Consulta recibida', get_sitename());
          $alt = 'Consulta resibida';
          send_email(get_siteemail(), $paciente['email'], $subject, $body, $alt);
          Flasher::new(sprintf('Correo electrónico enviado con éxito a %s', $email, 'Sucess!'));
          Redirect::back();
        }catch(Exception $e){
          Flasher::new($e->getMessage(), 'danger');
          Redirect::back();
        }

    }
}

