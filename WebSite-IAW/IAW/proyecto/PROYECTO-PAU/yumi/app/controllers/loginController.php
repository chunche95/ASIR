<?php 

class loginController extends Controller {
  function __construct()
  {
    if (Auth::validate()) {
      Flasher::new('Ya hay una sesión abierta.');
      Redirect::to('home/flash');
    }
  }

  function index()
  {
    $data =
    [
      'title'   => 'Ingresar a tu cuenta',
      'padding' => '0px'
    ];

    View::render('index', $data);
  }

  function post_login()
  {
    if (!Csrf::validate($_POST['csrf'])) {
      Flasher::new('Acceso no autorizado.', 'danger');
      Redirect::back();
    }

/*    $def_id       = 123;
    $def_user     = 'bee';
    $def_password = '123456';
*/
    if($usuario = usuarioModel::list('usuario', ['usuario' => clean($_POST['usuario']), 'password' => clean['password'], 1])){
      Flasher::new('Las credenciales no son correctas.', 'danger');
      Redirect::back();
    }else{
      // Loggear al usuario
      Auth::login($usuario['id'], $usuario);
      Redirect::to('pacientes');
    }

    // if (clean($_POST['usuario']) !== $def_user || clean($_POST['password']) !== $def_password) {
    //   Flasher::new('Las credenciales no son correctas.', 'danger');
    //   Redirect::back();
    // }

    
  }
}