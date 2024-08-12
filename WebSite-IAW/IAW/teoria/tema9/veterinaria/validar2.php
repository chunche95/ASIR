<?php
/**
 * Veterinaria - validar2.php
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
    $consulta = "SELECT COUNT(*) AS numero_animales FROM $db_animales "
        ."WHERE Cliente = $_SESSION[vet_id_cliente]";
    $result = odbc_exec($db, $consulta);
    if (!$result) {
        session_destroy();
        header('Location:index.php?aviso=Error en la consulta.');
        exit();
    } else {
        $valor = odbc_fetch_array($result);
        if (!$valor['numero_animales']) {
            session_destroy();
            header('Location:index.php?aviso=En nuestra base de datos no '
                .'consta ning�n animal a su nombre. P�ngase en contacto '
                .'telef�nico con nosotros.</p>');
        } else {
            $consulta2 = "SELECT * FROM $db_animales WHERE Cliente = "
                ."$_SESSION[vet_id_cliente] ORDER BY NomAnimal ASC";
            $result2 = odbc_exec($db, $consulta2);
            if (!$result2) {
                session_destroy();
                header('Location:index.php?aviso=Error en la consulta.');
                exit();
            } else {
                cabecera('Identificaci�n 2', 'menu_principal');
                print "<form action=\"validar3.php\" method=\"get\">\n"
                    ."  <p>Indique el animal que va usted a traer a la consulta:\n"
                    ."    <select name=\"NumHistorial\">\n";
                while ($valor2 = odbc_fetch_array($result2)) {
                    print "      <option value=\"$valor2[NumHistorial]\">"
                        ."$valor2[NomAnimal]</option>\n";
                }
                print "    </select>\n  </p>\n"
                    ."  <p>Indique el tipo de consulta:\n"
                    ."    <select name=\"Tipo\">\n"
                    ."      <option value=\"R\">Revisi�n peri�dica</option>\n"
                    ."      <option value=\"V\">Vacunaci�n</option>\n"
                    ."      <option value=\"C\">Consulta</option>\n"
                    ."    </select>\n  </p>\n"
                    ."  <p><input type=\"submit\" value=\"Enviar\" /></p></form>";
                pie();
                
            }
        }
    }
}
?>
