<?php 

class pacientesController extends Controller {
  function __construct()
  {
    if(!Auth::validate()){
      Redirect::to('login');
    }
  }
  
  function index() {
    $data = [ 
      'title' => 'Todos los pacientes.', 
      'pacientes' => pacienteModel::list('pacientes' => 0);
    ]
    View::render('index');
  }

  function ver($id){
    View::render('ver');
  }
  
  function revisar($id){
    View::render('revisar');
  }
}