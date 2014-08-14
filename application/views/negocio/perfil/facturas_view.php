<div class="titulo_seccion_admin">
<div class="perrito_perfil">
<img src="<?php echo base_url();?>images/factura_perfil.png" />
</div>
<div class="admin_title"> Mis facturas </div>
</div>
</br>
<table class="tabla_perfil" width="795"> 
<tr> 
<th width="137"> Código Compra </th>
<th width="348"> Resumen </th>
<th width="105"> Total </th>
<th width="185"> Fecha </th>
</tr>
<?php if ($facturas != null) {?>

<?php foreach ($facturas as $factura) {?>
<tr> 
<td><?php echo $factura->compraID ?> </td>
<td> <?php echo $factura->detalle?></td>
<td> <?php echo $factura->total ?> </td>
<td> <?php echo $factura->fecha ?> </td>
</tr>
 

<?php }?>

<?php }?>
</table>
    
    

    
      </div>
	  