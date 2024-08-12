<?php
/**
 * Veterinaria - validar1.php
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

include ("funciones.php");
$db = conecta_db();

$cliente  = recoge_para_consulta($db,'cliente');
$password = recoge_para_consulta($db,'password');

if (!$cliente || ($cliente == 'menu_principal')) {
    header('Location:index.php?aviso=Nombre de usuario no permitido');
    exit();
} else {
    $consulta = "SELECT * FROM $db_clientes WHERE NomCliente = '$cliente' "
        ."AND NIF = '$password'";
    $result = odbc_exec($db, $consulta);
    if (!$result) {
        header('Location:index.php?aviso=Error en la consulta.');
        exit();
    } else {
        $valor = odbc_fetch_array($result);
        if (isset($valor['NIF'])) {
            session_start();
            $_SESSION['vet_id_cliente'] = $valor['Codigo'];
            $_SESSION['vet_cliente']    = $valor['NomCliente'];
            header('Location:validar2.php');
            exit();
        } else {
            header('Location:index.php?aviso=Contrase�a incorrecta');
            exit();
        }
    }
}
?>
