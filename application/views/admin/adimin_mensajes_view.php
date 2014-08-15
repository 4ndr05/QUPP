<?php $this -> load -> view('admin/menu_view.php') ?>

<div class="contenedor_central">
<div class="titulo_seccion">
ENVIO DE MENSAJES
</div>
<div class="contenedor_buscador">

</div>

<div class="subtitulo">
Administraci&oacute;n de mensajes
</div>

</br>


<div class="contenedor_modificaciones" id="contenedor_enviar_mensaje" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_enviar_mensaje');"/> </div>


<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
ENVIAR MENSAJE
</div>

<div class="contenido_intruciones">

<table> 
<tr>
<td> Mensaje ID</td>
<td> <select> <option> --- </option> </select> </td>
 </tr>
<tr> 
<td> Destinatario: </td>
<td>
<select> 
<option> TODOS </option>
<option> 1 </option> 
<option> 2 </option>
</select> </td>
</tr>

</table>


</div>
<ul class="morado_reg">
<li>
Enviar
</li>
</ul>

</div>

</div> <!-- Fin contenedor negro imagenes -->


<div class="contenedor_modificaciones" id="contenedor_mensaje" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_mensaje');"/> </div>


<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
MENSAJE
</div>
<div class="contenido_intruciones">
<table> 
<tr> 
<td>
Tipo:
 </td>
 <td> <select> 
 <option> --- </option> 
 <option> Oferta </option>
 <option> Alerta </option>
 <option> Informativo </option>
 </select> </td>
</tr>
<tr>
<td> Asunto: </td>
<td> <input type="text"/> </td>
 </tr>
 <tr> 
 <td> Contenido: </td>
 <td> <textarea> </textarea> </td>
 </tr>
</table>

</div>
<ul class="morado_reg">
<li>
Guardar
</li>
</ul>



</div>

</div> <!-- Fin contenedor negro imagenes -->

<table width="992" height="213" align="center" class="tabla_carrito"> 
<tr> 
<th width="66"> ID </th>
<th width="66"> Tipo </th>
<th width="131"> Asunto </th>
<th width="76"> Contenido </th>
<th width="37"> </th>
</tr>
<tr> 
<td height="74" bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> <img src="<?php echo base_url()?>images/agregar.png" onclick="muestra('contenedor_mensaje');"/> </td>
</tr>

<tr> 
<td height="74">1  </td>
<td height="74">Oferta  </td>
<td> Oferta del mes</td>
<td>Este mes gratis anuncio en el directorio por lanzamiento.
</td>
<td> <img src="<?php echo base_url()?>images/enviar_mail.png" onclick="muestra('contenedor_enviar_mensaje');"/>&nbsp;&nbsp;
<img src="<?php echo base_url()?>images/editar.png" onclick="muestra('contenedor_mensaje');"/> </td>
</tr>
</table>

</div>

</body>
