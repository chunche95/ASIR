<?php
/**
 * Veterinaria - validar3.php
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
if (!isset($_SESSION['vet_cliente'])) {
    header('Location:index.php');
    exit();
} else {
    $db = conecta_db();
    $NumHistorial = recoge('NumHistorial');
    $Tipo = recoge('Tipo');
    
// FALTARIA COMPROBAR EL NUMHISTORIAL RECIBIDO CORRESPONDE AL CLIENTE

    $_SESSION['vet_NumHistorial'] = $NumHistorial;
    $_SESSION['vet_Tipo'] = $Tipo;
    $_SESSION['vet_ok_identificacion'] = 1;
    header('Location:anyadir1.php', $_SESSION['vet_ok_identificacion']);
}
?>
