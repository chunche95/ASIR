<?php
/**
 * Veterinaria - index.php
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

if (isset($_SESSION['vet_ok_identificacion'])) {
    cabecera('Inicio', $_SESSION['vet_cliente']);
} else {
    cabecera('Identificaci�n', 'menu_principal');
    $aviso = recoge('aviso');
    if ($aviso) {
        print "<p class=\"aviso\">$aviso</p>\n";
    }
    print "  <form action=\"validar1.php\" method=\"get\">
    <p>Escriba su nombre de usuario y contrase�a:</p>
    <table>
      <tbody>
          <tr>
            <td>Nombre:</td>
            <td><input type=\"text\" name=\"cliente\" size=\"$tam_cliente\" id=\"cursor\" /></td>
          </tr>
          <tr>
            <td>Contrase�a:</td>
            <td><input type=\"password\" name=\"password\" size=\"$tam_password\" /></td>
          </tr>
        </tbody>
    </table>
    <p><input type=\"submit\" value=\"A�adir\" /></p>
    <p>Nota: Solamente podr� entrar como usuario si es usted cliente de 
      la cl�nica.</p>
  </form>";
}

pie();
?>
