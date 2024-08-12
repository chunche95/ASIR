<img src="images/Introduccion.png"> 
<br>
<h1> Ansible. </h1>

Tecnología para el aprovisionamiento de sistemas. 
Consiste en la preparación de un servidor con el software y los datos necesarios para que unos servicios puedan correr en un servidor web. 
<hr>
<h2> Es declarativo </h2>
No damos instrucciones sobre los pasos que deben seguir el aprovisionamiento para preparar el servidor. <br>
En su lugar le indicamos el estado en el que queremos encontrarnos el servidor. <br>
    - El paquete <i>nginx</i> debe estar instaldo en este sistema.
    - El usuario <i>webapplication</i> debe estar creado.

Automaticamente ejecuta los comados para preparar el servidor.

<h2> No tenemos que tratar manualmente los casos </h2>
Ansible ya recopila automáticamente los hechos. 
Si el servidor ya tiene el paquete nginx instalado no tendrá que instalar el paquete nginx. 
Estos hechos o <b>facts</b> permiten conocer mucha información sobre el ordenador.

<hr>
<strong>Ansible está organizado en módulos</strong>
<hr>

En caso de no 'existir' el módulo para nuestro pryoyecto, existe <i>GALAXY</i> que es un playbook o proyecto de ansible para reutilizar códigos.

<i>ANSIBLE es de software libre</i> y gestionable por SSH, además funciona en cualquier UNIX. <br>

