<?php
/**
 * Veterinaria - funciones.php
 * 
 * @author    Bartolom� Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2007 Bartolom� Sintes Marco
 * @license   http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * @version   2007-03-08
 * @link      http://www.mclibre.org
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  any later version.
 *   
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *   
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

$db_db         = 'Veterinaria';
$db_citas      = 'Citas';
$db_clientes   = 'Clientes';
$db_animales   = 'Animales';
$db_intervalos = 'Intervalos'; 

$administrador = 'root';
$tam_cliente   = 50; 
$tam_password  = 20;

function conecta_db()
{
    global $db_db;
    
    $db = odbc_connect($db_db, '', '');
    if (!$db) {
        cabecera('Error grave', 'menu_principal');
        print "<p>Imposible conectarse con la base de datos.</p>";
        pie();
        exit();
    } else {
        return($db);
    }
}

function recoge($var)
{
    $var = (isset($_REQUEST[$var])) ? trim(strip_tags($_REQUEST[$var])) : '';
    return $var;
}

function recoge_para_consulta($db, $var, $var2='') 
{
    $var = (isset($_REQUEST[$var])) ? trim(strip_tags($_REQUEST[$var])) : $var2;
    if (get_magic_quotes_gpc()) {
        $var = stripslashes($var);
     }
//    if (!is_numeric($var)) {
//        $var = mysqli_real_escape_string($db, $var);
//    }
    return $var;
}

function limpia_para_consulta($db, $var) 
{
    $var = trim(strip_tags($var));
    if (get_magic_quotes_gpc()) {
        $var = stripslashes($var);
    }
//    if (!is_numeric($var)) {
//        $var = mysqli_real_escape_string($db, $var);
//    }
    return $var;
}

function cabecera($texto, $menu='menu_principal')
{
    global $administrador;
    
    print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
  <title>www.mclibre.org - Cl�nica veterinaria - $texto</title>
  <link href=\"estilo.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>

<body onload=\"document.getElementById('cursor').focus()\">
<h1>Veterinaria - $texto</h1>
<div id=\"menu\">
  <ul>\n";
    if ($menu=='menu_principal') {
        print "    <li><a href=\"index.php\">Conectar</a></li>";
    } elseif ($menu==$administrador) {
        print "    <li><a href=\"borrartodo1.php\">Borrar todo</a></li>
    <li><a href=\"salir.php\">Desconectar</a></li>";
    } else {
        print "    <li><a href=\"anyadir1.php\">Pedir citar</a></li>
    <li><a href=\"borrar1.php\">Anular cita</a></li>
    <li><a href=\"salir.php\">Desconectar</a></li>";
    }
    print "\n  </ul>\n</div>\n\n<div id=\"contenido\">\n";
}

function pie() 
{
    print "\n</div>\n</body>\n</html>";
}

function calendario ($fecha, $enlaces)
{
    global $db, $db_citas, $db_intervalos;
    
    $dia  = substr($fecha, 8, 2);
    $mes  = substr($fecha, 5, 2);
    $anyo = substr($fecha, 0, 4); 

    $jd = gregoriantojd($mes, $dia, $anyo);
    $num_dia = (jddayofweek($jd, 0)+6)%7;
    
    $fecha_lun = date('Y-m-d', mktime(0, 0, 0, $mes, $dia-$num_dia,   $anyo));
    $fecha_mar = date('Y-m-d', mktime(0, 0, 0, $mes, $dia-$num_dia+1, $anyo));
    $fecha_mie = date('Y-m-d', mktime(0, 0, 0, $mes, $dia-$num_dia+2, $anyo));
    $fecha_jue = date('Y-m-d', mktime(0, 0, 0, $mes, $dia-$num_dia+3, $anyo));
    $fecha_vie = date('Y-m-d', mktime(0, 0, 0, $mes, $dia-$num_dia+4, $anyo));
    $fecha_sab = date('Y-m-d', mktime(0, 0, 0, $mes, $dia-$num_dia+5, $anyo));
    $fecha_dom = date('Y-m-d', mktime(0, 0, 0, $mes, $dia-$num_dia+6, $anyo));
    $fecha_ant = date('Y-m-d', mktime(0, 0, 0, $mes, $dia-7, $anyo));
    $fecha_sig = date('Y-m-d', mktime(0, 0, 0, $mes, $dia+7, $anyo));
    $semana = array($fecha_lun, $fecha_mar, $fecha_mie, $fecha_jue, $fecha_vie,
        $fecha_sab, $fecha_dom);
 
    print "<div class=\"calendario\">\n  <table border=\"1\" class=\"$enlaces\" >\n";
    print "    <caption><a href=\"$_SERVER[PHP_SELF]?fecha=$fecha_ant\">&lt;&lt;
      </a>Semana del $fecha_lun al $fecha_dom
      <a href=\"$_SERVER[PHP_SELF]?fecha=$fecha_sig\">&gt;&gt;</a></caption>
    <thead>
      <tr>\n        <th>Hora</th>\n        <th>Lunes</th>\n        <th>Martes</th>
        <th>Mi�rcoles</th>\n        <th>Jueves</th>\n        <th>Viernes</th>
        <th>S�bado</th>\n        <th>Domingo</th>\n      </tr>
    </thead>\n    <tbody>\n";
    
    $consulta = "SELECT COUNT(*) AS num_intervalos FROM $db_intervalos";
    $result = odbc_exec($db, $consulta);
    if (!$result) {
        exit("Error en la consulta.");
    } else {
        $valor = odbc_fetch_array($result);
        $num_intervalos = $valor['num_intervalos'];
    }
    for ($i = 1; $i <=$num_intervalos; $i++) {
        print "      <tr>\n";
        $consulta = "SELECT texto FROM $db_intervalos WHERE Codigo = $i";
        $result = odbc_exec($db, $consulta);
        if (!$result) {
            exit("Error en la consulta.");
        } else {
            $valor = odbc_fetch_array($result);
            print "        <td>$valor[texto]</td>\n";
            foreach ($semana as $j ) {
                $j2 = substr($j,5,2)."/".substr($j,8,2)."/".substr($j,0,4);
                $consulta = "SELECT COUNT(*) AS num_consultas FROM $db_citas "
                    ."WHERE Hora = $i AND Fecha=#$j2#"
                    ."AND Animal <> $_SESSION[vet_NumHistorial]";
                $result = odbc_exec($db, $consulta);
                if (!$result) {
                    exit("Error en la consulta.");
                } else {
                    $valor = odbc_fetch_array($result);
                    if ($valor['num_consultas']) {
                        print "        <td style=\"background-color: red\"></td>\n";
                    } else {
                        $consulta2 = "SELECT COUNT(*) AS num_consultas2 FROM "
                            ."$db_citas WHERE Hora = $i AND Fecha=#$j2# "
                            ."AND Animal = $_SESSION[vet_NumHistorial]";
                        $result2 = odbc_exec($db, $consulta2);
                        if (!$result2) {
                            exit("Error en la consulta.");
                        } else {
                            $valor2 = odbc_fetch_array($result2);
                            if ($enlaces=='anyadir') {
                                if ($valor2['num_consultas2']) {
                                    print "        <td style=\"background-color: white\">Reservado</td>\n";
                                } else {
                                    print "        <td style=\"background-color: green\">"
                                        ."<a href=\"anyadir2.php?fecha=$j2&amp;hora=$i\">Reservar</a></td>\n";
                                }
                            } else {
                                if ($valor2['num_consultas2']) {
                                    print "        <td style=\"background-color: white\">"
                                        ."<a href=\"borrar2.php?fecha=$j2&amp;hora=$i\">Anular cita</a></td>\n";
                                } else {
                                    print "        <td style=\"background-color: red\"></td>\n";
                                }
                            }
                        
                        }
                    }
                }
            }
        }
        print "      </tr>\n";
    }
    print "    </tbody>\n  </table>\n</div>\n";
}
