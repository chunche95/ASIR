<?php
/**
 * Veterinaria - anyadir1.php
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

session_start();
include('funciones.php');
$db = conecta_db();
date_default_timezone_set('Europe/Madrid');

if (!isset($_SESSION['vet_ok_identificacion'])) {
    header('Location:index.php');
    exit();
} else {
    cabecera('Pedir cita 1', $_SESSION['vet_cliente']);

    $aviso = recoge('aviso');
    if ($aviso) {
        print "<p class=\"aviso\">$aviso</p>\n";
    }
    print "<p>La tabla siguiente muestra las horas libres y ocupadas para que "
        ."usted elija la que le resulte m�s c�moda:</p>\n"
        ."<ul>\n  <li>Las horas ocupadas se muestran en rojo y no se pueden "
        ."seleccionar.</li>\n  <li>Las horas libres se muestran en verde y "
        ."se pueden seleccionar</li>\n  <li>Las horas que usted ha seleccionado "
        ."se muestran en blanco</li>\n</ul>\n"; 
    $fecha = recoge_para_consulta($db, 'fecha', date('Y-m-d'));
    calendario($fecha, 'anyadir');
    pie();
}
?>
