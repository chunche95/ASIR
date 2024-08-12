<?php
/**
 * Veterinaria - anyadir2.php
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

$fecha = recoge_para_consulta($db, 'fecha');
$hora  = recoge_para_consulta($db, 'hora');

if (!isset($_SESSION['vet_ok_identificacion']) || !$fecha || !$hora ) {
    header('Location:index.php');
    exit();
} else {
    $consulta = "SELECT COUNT(*) AS num_consultas FROM $db_citas "
                ."WHERE Hora = $hora AND Fecha=#$fecha#";
    $result = odbc_exec($db,$consulta);
    if (!$result) {
        cabecera('Pedir cita 2', $_SESSION['vet_cliente']);
        print "<p>Error al reservar la cita. P�ngase en contacto con nosotros.</p>\n";
        pie();
    } else {
        $valor = odbc_fetch_array($result);
        if ($valor['num_consultas']) {
            $fecha2 = substr($fecha, 6, 4).'-'.substr($fecha, 0, 2).'-'
                .substr($fecha, 3, 2);
            header('Location:anyadir1.php?fecha='.$fecha2.'&aviso=La hora '
                .'solicitada ya se encuentra reservada. Por favor, elija otra.');
        } else {
            cabecera('Pedir cita 2', $_SESSION['vet_cliente']);
            $consulta = "INSERT INTO $db_citas values (#$fecha#, $hora, "
                ."'$_SESSION[vet_Tipo]', $_SESSION[vet_NumHistorial], 'Ninguna')";
            $result = odbc_exec($db,$consulta);
            if (!$result) {
                print "<p>Error al reservar la cita. P�ngase en contacto con nosotros.</p>\n";
            } else {
                print "<p>Reserva realizada correctamente. Gracias por su inter�s.</p>\n";
            }
            pie();
        }
    }
}
?>
