<?php
date_default_timezone_set('America/Costa_Rica');
include_once '../intercambiador.php';



 ?>


<div id="editProductModal" class="modal fade" spellcheck="true">
		<div class="modal-dialog  modal-lg">
			<div class="modal-content ">
				<form name="edit_product" id="edit_product" autocomplete="off" >
					<div class="modal-header ">						
						<h4 class="modal-title"> Marginación de <b><font color="#121c4e">Matrimonio</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body ui-front">
				 
					<table width="100%">
					    <tr>
					      <td colspan="5"><p> Seleccione la marginación a crear:&nbsp;&nbsp;
							
							  <input type="radio"  id="tipo1" name="gender" value="male"  required />
					   
					        <label for="tipo1">El&nbsp;&nbsp;</label>
					        <input type="radio"  id="tipo2" name="gender" value="female" required />
					        <label for="tipo2">Ella&nbsp;&nbsp;</label>
					        <input type="radio"  id="tipo3" name="gender" value="other" required />
					        <label for="tipo3">Ambos</label>
					        </p>
						
						
							
							
							</td>
				        </tr>
						</table>
							
							 <input type="hidden" name="edit_id" id="edit_id" >
				  <input type="hidden" name="margpdf" id="margpdf" >
					<input type="hidden" name="librofolioa" id="librofolioa" >
							
							<table  name="matri1" id="matri1" style="display: " width="100%">
						
						
						
					    <tr>
					      <td colspan="5" align="center"><h4><span class="label label-primary">Nombres y Apellidos de El</span></h4></td>
				        </tr>
					    <tr>
					      <td width="14%">Nombres El:</td>
					      <td width="35%"><input type="text" class="form-control" name="edit_el2" required id="edit_el" value=""  style="text-transform: uppercase; " onKeyPress="return soloLetras(event);">
					        </td>
					      <td rowspan="2" width="2%"></td>
					      <td width="14%">1er Apellido:</td>
					      <td width="35%" ><input type="text" class="form-control" name="apellidoel1" required id="apellidoel1" value=""  style="text-transform: uppercase" onKeyPress="return soloLetras(event);"></td>
				        </tr>
					    <tr>
					      <td ><input type="checkbox"  value="2doapeel" name="OptionRA2" onChange="apellidoel.disabled = !this.checked;apellidoel.focus()" checked id="Rvalue2" onClick="apellidoel.value=''">
					        <label for="Rvalue2">2do Apellido:&nbsp;&nbsp;&nbsp;</label></td>
					      <td ><input id="apellidoelid" type="text" class="form-control" name="apellidoel"   onKeyPress="return soloLetras(event);" style="text-transform: uppercase" required></td>
					      <td ><input type="checkbox"  value="conocidoel" name="conocido1" onChange="conotxt.disabled = !this.checked;conotxt.focus()" id="conocido1" onClick="conotxt.value=''">
					        <label for="conocido1">Conocido por:&nbsp;&nbsp;&nbsp;</label></td>
					      <td ><input id="conotxt" type="text" class="form-control" name="conotxt"  onKeyPress="return soloLetras(event);" style="text-transform: uppercase" required disabled></td>
				        </tr>
					    <tr>
					      <td colspan="5" align="center"> 
							  
							<h4>  <span class="label label-primary">
							 
								Nombres y Apellidos de Ella</span></h4></td>
				        </tr>
					    <tr>
					      <td>Nombres Ella:</td>
					      <td ><input type="text" class="form-control" name="Nellamat" id="Nellamat"  style="text-transform: uppercase" onKeyPress="return soloLetras(event);" required></td>
					      <td rowspan="2" width="2%"></td>
					      <td >1er Apellido:</td>
					      <td ><input type="text" class="form-control" name="apellidoella1" required id="apellidoella1" value="" style="text-transform: uppercase" onKeyPress="return soloLetras(event);"></td>
				        </tr>
					    <tr>
					      <td ><input type="checkbox"  value="2doapeella" name="OptionRA3" onChange="apellidoella.disabled = !this.checked;apellidoella.focus()" checked id="Rvalue3" onClick="apellidoella.value=''">
					        <label for="Rvalue3">2do Apellido:&nbsp;&nbsp;&nbsp;</label></td>
					      <td ><input id="apellidoellaid" type="text" class="form-control" name="apellidoella"   onKeyPress="return soloLetras(event);" style="text-transform: uppercase" required></td>
					      <td ><input type="checkbox"  value="conocidoella" name="conocido2" onChange="conotxt2.disabled = !this.checked;conotxt2.focus()" id="conocido2" onClick="conotxt2.value=''">
					        <label for="conocido2">Conocida por:&nbsp;&nbsp;&nbsp;</label></td>
					      <td ><input id="conotxt2" type="text" class="form-control" name="conotxt2"   onKeyPress="return soloLetras(event);" style="text-transform: uppercase" required disabled></td>
				        </tr>
					    <tr>
					      <td colspan="5" align="center">
							 
							  <h4>
							  
							  <span class="label label-primary">Datos del Matrimonio</span></h4></td>
				        </tr>
					    <tr>
					      <td>Fecha:</td>
					      <td ><input type="date" class="max-today form-control" name="FechaB"  id="FechaB" required placeholder="YYYY-MM-DD" style="width: auto" /></td>
							<td rowspan="4" width="2%"></td>
					      <td>Lugar Boda:</td>
					      <td ><input type="text" class="form-control" name="LugarB" id="LugarB"  width="300px" onKeyPress="return soloLetras(event);" required></td>
				        </tr>
					    <tr>
					      <td><input type="checkbox"  value="ccargo" name="ccargo" id="ccargo" onChange="optionsbo.disabled = !this.checked;optionsbo.focus()" checked  onClick="optionsbo.value=''"><label for="ccargo">Cargo Funcionario:</label></td>
					      <td  ><input type="text" class="form-control" name="optionsbo" id="options" onKeyPress="return soloLetras(event);" required></td>
					      <td><input type="checkbox"  value="mnombre" name="mnombre" id="mnombre" onChange="Nnotario.disabled = !this.checked;Nnotario.focus()" checked  onClick="Nnotario.value=''"><label for="mnombre">Nombre:</label></td>
					      <td ><input type="text" class="form-control" name="Nnotario" id="Nnotario"  style="text-transform: uppercase" onKeyPress="return soloLetras(event);" required></td>
				        </tr>
					    <tr>
					      <td ><input type="checkbox"  value="Rvalue" name="OptionRA" id="OptionRA" onChange="RegimenB.disabled = !this.checked;RegimenB.focus()" checked  onClick="RegimenB.value=''">
					        <label for="OptionRA">Régimen:&nbsp;&nbsp;&nbsp;</label></td>
					      <td ><input id="treg" type="text" class="form-control" name="RegimenB"  onKeyPress="return soloLetras(event);"  required></td>
							<td colspan="2"></td>
							
				        </tr>
					    <tr>
					      <td ><input type="checkbox"  value="Avalue" name="OptionAA" onChange="usoA.disabled = !this.checked;usoA.focus();otroapellido.disabled = !this.checked;otroapellido.disabled = !this.unchecked" checked id="Avalue" >
					        <label for="Avalue">Uso Apellidos:&nbsp;&nbsp;</label></td>
					      <td ><select name="usoA" class="form-control seleccion" id="usoA" required >
					        <option value="conde">Con "De"</option>
					        <option value="sinde" >Sin "De"</option>
					        <option value="soltera">Soltera</option>
					        <option value="otro">Otro</option>
					        </select></td>
							
					      <td colspan="2" ><input type="text" class="form-control" name="otroapellido" id="otroapellido" style="text-transform: uppercase" onKeyPress="return soloLetras(event);"  required disabled></td>
				        </tr>
						</table>
						
						<table name="foliacionmatr" id="foliacionmatr" style="display: none" width="100%">
						
					    <tr>
					      <td colspan="5" align="center">
							
							  <h4>
							  <span class="label label-primary">Digita los datos de folicación de la partida a marginar El</span></h4></td>
				        </tr>
					    <tr>
					      <td width="14%">Año:</td>
					      <td  width="35%"><input type="text" class="form-control validar" name="edit_anioe3" maxlength="4" id="edit_anioe"  onBlur="return validarRango(this);" required></td>
					      
							<td rowspan="2" width="2%"></td>
							<td width="14%">Libro:</td>
					      <td width="35%"><input type="text" class="form-control" name="edit_libro3" id="edit_libro" maxlength="4" style="text-transform: uppercase;" value=""  required></td>
				        </tr>
					    <tr>
					      <td >Num. Partida:</td>
					      <td ><input type="text" class="form-control" name="edit_npartida3" maxlength="5" id="edit_npartida" style="text-transform: uppercase;" value=""    required></td>
					      <td  >Tipo:</td>
					      <td ><select name="tipopar" class="form-control seleccion" id="tipopar" required >
					        <?php
	include ("conexion_modal.php");
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");

          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
					        </select>
					        <input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
				        </tr>
				      
				  </table>
						
						
			<table name="foliacionmatr2" id="foliacionmatr2" style="display: none" width="100%">
						
					    <tr>
					      <td colspan="5" align="center">
							
							  <h4>
							  <span class="label label-primary">Digita los datos de folicación de la partida a marginar Ella</span></h4></td>
				        </tr>
					    <tr>
					      <td width="14%">Año:</td>
					      <td  width="35%"><input type="text" class="form-control validar" name="edit_anioe2" id="edit_anioe2" maxlength="4" onblur="return validarRango(this);"   required disabled></td>
					      
							<td rowspan="2" width="2%"></td>
							<td width="14%">Libro:</td>
					      <td width="35%"><input type="text" class="form-control" name="edit_libro2" maxlength="4" id="edit_libro2"  style="text-transform: uppercase;" required disabled></td>
				        </tr>
					    <tr>
					      <td >Num. Partida:</td>
					      <td ><input type="text" class="form-control" name="edit_npartida2" id="edit_npartida2" maxlength="5" required disabled></td>
					      <td  >Tipo:</td>
					      <td ><SELECT name="tipopar2" class="form-control seleccion" id="tipopar2" required >
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					        
				        </tr>
				      
				  </table>			
						
						
						
						
						
						
						
					<table name="partidad2" id="partida2" style="display:none" width="100%">
					  <tr><td colspan="5"><font size="1"><b>Nota: has seleccionado crear ambas partidas, la primera será la de él y la segunda la de ella; agrega la foliación en ese orden</b></font></td></tr>
				  
				  </table>
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>



	</div>




<div id="divorcios" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="enviardivorcios" id="enviardivorcios" autocomplete="off">
					<div class="modal-header">						
						<h4 class="modal-title"> Marginación de <b><font color="#121c4e">Divorcio</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table >
            <tr><td colspan="4"> <p>Seleccione la Marginación a crear: </td></tr>
             <tr><td colspan="4">     <input type="radio"  id="tipo1d" name="gender2" value="n_el" required />
  <label for="tipo1d">El&nbsp;&nbsp;</label>
  <input type="radio"  id="tipo2d" name="gender2" value="n_ella" required />
  <label for="tipo2d">Ella&nbsp;&nbsp;</label>
  <input type="radio"  id="tipo3d" name="gender2" value="matrim" required />
				<label for="tipo3d">Matri.</label>
				<input type="radio"  id="tipo4d" name="gender2" value="el_ella" required />
				<label for="tipo4d">El/Ella</label>				
					
				
			<input type="radio"  id="tipo5d" name="gender2" value="el_matri" required />
				<label for="tipo5d">El/Matr.</label>				
						<input type="radio"  id="tipo6d" name="gender2" value="ella_matri" required />
				<label for="tipo6d">Ella/Matr.</label>	
						<input type="radio"  id="tipo7d" name="gender2" value="el_ella_matri" required />
				<label for="tipo7d">El/Ella/Matr.</label>		
   <input type="hidden" name="edit_id2" id="edit_id2" ><input type="hidden" name="margpdfdiv" id="margpdfdiv" ><input type="hidden" name="librofolioadiv" id="librofolioadiv"></td></tr> 
				  
 </table>

	   <table width="100%" name="nombres" id="nombres" style="display: none">
			<tr>
           <td width="20%">El:</td>
				<td colspan="3"><input type="text" class="form-control" placeholder="Nombre completo de El" name="edit_el" required id="edit_el2" style="text-transform: uppercase">
            
		   
          </td>
            </tr>
            <tr>
				
                <td colspan="1">Ella:</td>
				<td colspan="3"><input type="text" class="form-control" placeholder="Nombre completo de Ella" name="Nella"  id="Nella" style="text-transform: uppercase" required disabled></td>
            </tr>
				  </table>
						<p>
			<table with="100%">	  
				  
            <tr>
				<td colspan="4">
				  <input type="checkbox" class="form-check-input ecuvar1" value="resoluexterior" name="valuediv" id="valuediv" ><label for="valuediv">&nbsp;&nbsp;Fecha y Lugar de Resolución Exterior</label></td></tr>
				</table>
					<p>
				<table width="100%" name="decreext" id="decreext" style="display: none">
            <tr><td rowspan="2" width="10%"></td> <td width="15%"><input type="checkbox" class="form-check-input flat-red1" value="decreval" name="decreval" onchange="timedecre.disabled = !this.checked"  id="decreval" ><label for="decreval">&nbsp;Hora:&nbsp;</label></td>
				<td width="20%"><input type="time" style="width: auto" class="form-control" required name="timedecre" id="timedecre" disabled ></td>
				<td width="15%"><input type="checkbox" class="form-check-input flat-red1" value="decreval2" name="decreval2" onchange="fechadecre.disabled = !this.checked"  id="decreval2" ><label for="decreval2">&nbsp;Fecha:&nbsp;</label></td>
				<td><input type="date" class="max-today form-control" name="fechadecre" id="fechadecre" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td width="15%">
					
				    <input type="checkbox" class="form-check-input flat-red1" value="por_ext" name="por_ext" onchange="txt_por_ext.disabled = !this.checked"  id="por_ext" ><label for="por_ext">&nbsp;Por:&nbsp;</label></td>
				  <td colspan="3" width="80%">
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="txt_por_ext" id="txt_por_ext" onkeypress="return soloLetras(event);" disabled>
					</td>
				  </tr>	
					
				</table>
				<table with="100%">	  
				  
            <tr>
								<td colspan="4">
		          <input type="checkbox" class="form-check-input ecuvar2" value="resolucioncsj" name="valuedivn" id="valuedivn" ><label for="valuedivn">&nbsp;&nbsp;Fecha y Lugar de Resolución CSJ</label></td></tr>
				</table>
						<p>
				<table width="100%" name="decreextn" id="decreextn" style="display: none">
            <tr><td rowspan="2" width="10%"></td> <td width="15%"><input type="checkbox" class="form-check-input flat-red2" value="decrevaln" name="decrevaln" onchange="timedecren.disabled = !this.checked" id="decrevaln" ><label for="decrevaln">&nbsp;Hora:&nbsp;</label></td>
				<td width="20%"><input type="time" style="width: auto" class="form-control" required name="timedecren" id="timedecren" disabled></td>
				<td width="15%"><input type="checkbox" class="form-check-input flat-red2" value="decreval2n" name="decreval2n" onchange="fechadecren.disabled = !this.checked"  id="decreval2n" ><label for="decreval2n">&nbsp;Fecha:&nbsp;</label></td>
				<td><input type="date" class="max-today form-control" name="fechadecren" id="fechadecren" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td width="15%">
						    <input type="checkbox" class="form-check-input flat-red2" value="por_csj" name="por_csj" onchange="txt_por_csj.disabled = !this.checked"  id="por_csj" ><label for="por_csj">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" width="80%">
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="txt_por_csj" id="txt_por_csj" onkeypress="return soloLetras(event);" disabled>
					</td>
				  </tr>	
					
				</table>		
						
					<table with="100%">	  
				  
            <tr>
				<td colspan="4">
		          <input type="checkbox" class="form-check-input ecuvar3" value="resolucionjuz" name="valuedivnj" id="valuedivnj" ><label for="valuedivnj">&nbsp;&nbsp;Fecha y Lugar de Resolución Juzgado</label></td></tr>
				</table>
					<p>
				  <table width="100%" name="decreextnj" id="decreextnj" style="display: none">
            <tr><td rowspan="2" width="10%"></td>  <td width="15%"><input type="checkbox" class="form-check-input flat-red3" value="decrevalnj" name="decrevalnj" onchange="timedecrenj.disabled = !this.checked" id="decrevalnj" ><label for="decrevalnj">&nbsp;Hora:&nbsp;</label></td>
				<td width="20%"><input type="time" style="width: auto" class="form-control" required name="timedecrenj" id="timedecrenj" disabled></td>
				<td width="15%"><input type="checkbox" class="form-check-input flat-red3" value="decreval2nj" name="decreval2nj" onchange="fechadecrenj.disabled = !this.checked"  id="decreval2nj" ><label for="decreval2nj">&nbsp;Fecha:&nbsp;</label></td>
				<td><input type="date" class="max-today form-control" name="fechadecrenj"  id="fechadecrenj" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td width="15%">
					 <input type="checkbox" class="form-check-input flat-red3" value="por_rjuzgado" name="por_rjuzgado" onchange="txt_por_rjuz.disabled = !this.checked"  id="por_rjuz" ><label for="por_rjuz">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" width="80%">
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="txt_por_rjuz" id="txt_por_rjuz" onkeypress="return soloLetras(event);" disabled>
					</td>
				  </tr>	
					
				</table>	
						
						
					<table with="100%">	  
				  
            <tr>
				<td colspan="4">
		          <input type="checkbox" class="form-check-input ecuvar4" value="resolucionofi" name="valuedivofi" id="valuedivofi" ><label for="valuedivofi">&nbsp;&nbsp;Fecha y Lugar de Oficio</label></td></tr>
				</table>
					<p>
				 <table width="100%" name="decreextofi" id="decreextofi" style="display:none">
            <tr><td rowspan="3" width="6%"></td> <td width="15%"><input type="checkbox" class="form-check-input flat-red4" value="decrevalofi" name="decrevalofi" onchange="timedecreofi.disabled = !this.checked"  id="decrevalofi" ><label for="decrevalofi">&nbsp;Hora:&nbsp;</label></td>
				<td width="15%"><input type="checkbox" class="form-check-input flat-red4" value="decreval2ofi" name="decreval2ofi" onchange="fechadecreofi.disabled = !this.checked"  id="decreval2ofi" ><label for="decreval2ofi">&nbsp;Fecha:&nbsp;</label></td>
				<td width="15%"> <input type="checkbox" class="form-check-input flat-red4" value="por_ofi" name="por_ofi" onchange="txt_por_ofi.disabled = !this.checked" id="por_ofi" ><label for="por_ofi">&nbsp;# Oficio:&nbsp;</label></td>
				</tr>
	 <tr><td><input type="time" style="width: auto" class="form-control" required name="timedecreofi" id="timedecreofi" disabled></td><td><input type="date" class="max-today form-control" name="fechadecreofi"  id="fechadecreofi" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td><td><input type="text" class="form-control validar" placeholder="# de oficio" name="txt_por_ofi" id="txt_por_ofi" disabled maxlength="6"></td></tr>
				<tr>
				  <td colspan="3">
					
				    <input type="checkbox" class="form-check-input flat-red4" value="por_rofi" name="por_rofi" onchange="txt_por_rofi.disabled = !this.checked" id="por_rofi" ><label for="por_rofi">&nbsp;Por:&nbsp;</label>
					
					  &nbsp;&nbsp;
					  <input type="text" class="form-control" placeholder="Nombre de la Institución" name="txt_por_rofi" id="txt_por_rofi" onkeypress="return soloLetras(event);" disabled>
					</td>
				  </tr>	
					
				</table>
						
						
						
						
						
						
						
						
					<table with="100%">	  
				  
            <tr>
				<td colspan="4">
	              <input type="checkbox" class="form-check-input ecuvar5" value="sentenciajuz" name="valuedivnjs" id="valuedivnjs" ><label for="valuedivnjs">&nbsp;&nbsp;Fecha y Lugar de Sentencia Juzgado</label></td></tr>
				</table>
					<p>	
				<table width="100%" name="decreextnjs" id="decreextnjs" style="display:none">
            <tr><td rowspan="2" width="10%"></td> <td width="15%"><input type="checkbox" class="form-check-input flat-red5" value="decrevalnjs" name="decrevalnjs" onchange="timedecrenjs.disabled = !this.checked"  id="decrevalnjs" ><label for="decrevalnjs">&nbsp;Hora:&nbsp;</label></td>
				<td width="20%"><input type="time" style="width: auto" class="form-control" required name="timedecrenjs" id="timedecrenjs" disabled></td>
				<td width="15%"><input type="checkbox" class="form-check-input flat-red5" value="decreval2nj" name="decreval2njs" onchange="fechadecrenjs.disabled = !this.checked"  id="decreval2njs" ><label for="decreval2njs">&nbsp;Fecha:&nbsp;</label></td>
				<td><input type="date" class="max-today form-control" name="fechadecrenjs"  id="fechadecrenjs" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td width="15%">
					
				    <input type="checkbox" class="form-check-input flat-red5" value="por_sjuzgado" name="por_sjuzgado" onchange="txt_por_sjuz.disabled = !this.checked" id="por_sjuz" ><label for="por_sjuz">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" width="80%">
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="txt_por_sjuz" id="txt_por_sjuz" onkeypress="return soloLetras(event);" disabled>
					</td>
				  </tr>	
					
				</table>	
						
						
						
						
						
						<table with="100%">	  
				  
            <tr>
				<td colspan="4">
	              <input type="checkbox" class="form-check-input ecuvar6" value="ejecutoriajuz" name="valuedivnjse" id="valuedivnjse" ><label for="valuedivnjse">&nbsp;&nbsp;Fecha y Lugar de Ejecutoría Juzgado</label></td></tr>
				</table>
				  <p>                    
				  <table width="100%" name="decreextnjse" id="decreextnjse" style="display: none">
            <tr><td rowspan="2" width="10%"></td> <td width="15%"><input type="checkbox" class="form-check-input flat-red6" value="decrevalnjse" name="decrevalnjse" onchange="timedecrenjse.disabled = !this.checked" id="decrevalnjse" ><label for="decrevalnjse">&nbsp;Hora:&nbsp;</label></td>
				<td width="20%"><input type="time" style="width: auto" class="form-control" required name="timedecrenjse" id="timedecrenjse" disabled></td>
				<td width="15%"><input type="checkbox" class="form-check-input flat-red6" value="decreval2nje" name="decreval2njse" onchange="fechadecrenjse.disabled = !this.checked"  id="decreval2njse" ><label for="decreval2njse">&nbsp;Fecha:&nbsp;</label></td>
				<td><input type="date" class="max-today form-control" name="fechadecrenjse" id="fechadecrenjse" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td width="15%">
					
				    <input type="checkbox" class="form-check-input flat-red6" value="por_ejuzgado" name="por_ejuzgado" onchange="txt_por_ejuz.disabled = !this.checked" placeholder="Nombre de la Institución" id="por_ejuz" ><label for="por_ejuz">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" width="80%">
					
					<input type="text" class="form-control" name="txt_por_ejuz" id="txt_por_ejuz" onkeypress="return soloLetras(event);" disabled>
					</td>
				  </tr>	
					
				</table>
						
						
						
				
						<table  name="foliacion_el_ella" id="foliacion_el_ella" style="display: none" width="100%">
			<tr><td colspan="4" align="center"><span class="label label-primary">Digita los datos de folicación de la partida a marginar</span></td><tr>
			<tr>  
			<td width="20%">Año:</td>
				<td width="29%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="edit_anioe" onblur="return validarRango(this);"  maxlength="4" id="edit_anioe_div1" required disabled></td>
			<td width="15%" align="center">Libro:</td>
				<td width="36%"><input type="text" class="form-control" name="edit_libro" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="edit_libro_div1" required disabled></td>
            </tr>
				<tr>  
			<td width="20%">Num. Partida:</td>
				<td width="29%"><input type="text" class="form-control" maxlength="5" name="edit_npartida" id="edit_npartida_div1" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td width="15%" align="center">Tipo:</td>
				<td width="36%"><SELECT name="tipodivel" class="form-control seleccion" id="tipodivel" required >
   <?php
	include ("conexion_modal.php");
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");

          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
   
    </SELECT><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>
						<table  name="partidadiv" id="partidadiv" style="display: none" width="100%">
			<tr><td colspan="4" align="center"><span class="label label-primary">Digita los datos de folicación de la segunda partida a marginar</span></td><tr>
			<tr>  
			<td width="20%">Año P. Ella:</td>
				<td width="29%" ><input type="text" class="form-control validar" maxlength="4" name="edit_anioe2d" id="edit_anioe2d" onblur="return validarRango(this);"  placeholder="Año de Libro" required disabled></td>
			<td width="15%" align="center">Libro P. Ella:</td>
				<td width="36%"><input type="text" class="form-control" maxlength="4" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="edit_libro2d" id="edit_libro2d" required disabled></td>
            </tr>
				<tr>  
			<td width="20%">Num. P. Ella:</td>
				<td width="29%"><input type="text" class="form-control" maxlength="5" style="text-transform:uppercase;" value="" placeholder="# de Partida"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="edit_npartida2d" id="edit_npartida2d" required disabled></td><td width="15%" align="center">Tipo:</td>
				<td width="36%"><SELECT name="tipodivella" class="form-control seleccion" id="tipodivella" required >
  <?php
	include ("conexion_modal.php");
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");

          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
   
    </SELECT></td>
			
            </tr>
			
				  </table>
			<table  name="partidadivmatri" id="partidadivmatri" style="display: none" width="100%">
			<tr><td colspan="4" align="center"><span class="label label-primary">Digita los datos de folicación de la tercera partida a marginar</span></td><tr>
			<tr>  
			<td width="20%">Año P. Matri:</td>
				<td width="29%" ><input type="text" class="form-control validar" maxlength="4" name="edit_anioe2dm" id="edit_anioe2dm" onblur="return validarRango(this);"  placeholder="Año de Libro" required disabled></td>
			<td width="15%" align="center">Libro P. Matri:</td>
				<td width="36%"><input type="text" class="form-control" maxlength="4" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" name="edit_libro2dm" placeholder="# de Libro" id="edit_libro2dm" required disabled></td>
            </tr>
				<tr>  
			<td width="20%">Num. P. Matri:</td>
				<td width="29%"><input type="text" class="form-control" maxlength="5" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" name="edit_npartida2dm" placeholder="# de Partida" id="edit_npartida2dm" required disabled></td><td width="15%" align="center">Tipo:</td>
				<td width="36%"><SELECT name="tipodivmatri" class="form-control seleccion" id="tipodivmatri" required >
<?php
	include ("conexion_modal.php");
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '3'");

          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>


					</SELECT></td>
			
            </tr>
	
				  </table>	
						<table name="nota1" id="nota1" style="display: none">
						<tr><td colspan="4"><font size="1"><b>Nota: has seleccionado crear ambas partidas (El / Matrimonio), la primera será la de el y la segunda la de Matrimonio; agrega la foliación en ese orden</b></font></td></tr>		
						</table>
						
						<table name="nota2" id="nota2" style="display: none">
						<tr><td colspan="4"><font size="1"><b>Nota: has seleccionado crear ambas partidas (Ella / Matrimonio), la primera será la de ella y la segunda la de Matrimonio; agrega la foliación en ese orden</b></font></td></tr>		
						</table>
			<table name="nota3" id="nota3" style="display: none">
						<tr><td colspan="4"><font size="1"><b>Nota: has seleccionado crear ambas partidas (El / Ella), la primera será la de el y la segunda la de ella; agrega la foliación en ese orden</b></font></td></tr>		
						</table>
					<table name="nota4" id="nota4" style="display: none">
						<tr><td colspan="4"><font size="1"><b>Nota: has seleccionado crear tres partidas (El / Ella / Matrimonio), la primera será la de el, la segunda la de ella y la tercera la de matrimonio; agrega la foliación en ese orden</b></font></td></tr>		
						</table>
		
			<div class="modal-footer" id="divorciodiv">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal2" value="Guardar Datos">
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>

	
	</div>


	<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
			<form role="form" id="formfield" name="formfield" action="beforeprint.php" method="post"  enctype="multipart/form-data"  target="_blank" >
            <div class="modal-header">
                <h4 class="modal-title"> Selecciona las Marginaciones a <b><font color="#121c4e">Imprimir</font></b></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
            </div>
            <div class="modal-body">
                Seleccione las marginaciones/encabezado para generar el archivo PDF 
				<table class="table">
                    <tr>
					<td>Seleccione el tipo de Impresión:</td><td colspan="3">
	<SELECT name="tipoimpresion" class="form-control seleccion" id="tipoimpresion" required >
    <OPTION Value="revisado2">Revisión Marginaciones</OPTION>
    <OPTION value="revisado3" >Revisión Control de Calidad</OPTION>
    <OPTION value="completo">Folio Original</OPTION>
     </SELECT></td>
					</tr>
					
					<tr><td></td><td colspan="3" align="left"><input type="checkbox"  id="marcador" name="todos"/><label for="marcador">Seleccionar todos</label></td>
					  </tr>
					  <tr>
                       
                        <td rowspan=6 width="30%">
						<IMG src="folioprev.png">
						</td>
  </tr>
                  
					  
  <tr>
                        <th ><input  type="checkbox"  name="encabchk" id="encabchk" onclick="todos.checked = false" value="encabezadopdf"><label for="encabchk">Encabezado:</label></th>
                        <td id="" name="" width="30%"><b><font color="#121c4e">Encabezado del folio</font></b></td>
                 					</tr>
  <tr>
                        <th><input  type="checkbox"  name="margchk1" id="margchk1" onclick="todos.checked = false" value="margin1"><label for="margchk1">Marginación:</label></th>
                        <td><input id="lname" type="hidden" name="lname" value="">
							<b><input id="nummar" type="text" class="form-control line vld draw" name="nummar" value="" style="Background-color: #121c4e;color:#efb810;font-size: 25px;text-align: center;" readonly></b>
	 </td>
							
							</tr>
                  
					<tr>
                        <th><input type="checkbox"  name="margchk2" id="margchk2" onclick="todos.checked = false" value="margin2"><label for="margchk2">Marginación:</label></th>
                      <td id=""><input id="lname2" type="hidden" name="lname2" value=""><b><input id="nummar2" type="text" class="form-control line vld draw" name="nummar2" value="" style="Background-color: #121c4e;color:#efb810;font-size: 25px;text-align: center;" readonly></b></td>
						
                    </tr>
					<tr>
                        <th><input type="checkbox"  name="margchk3" id="margchk3" onclick="todos.checked = false" value="margin3"><label for="margchk3">Marginación:</label></th>
                      <td id=""><input id="lname3" type="hidden" name="lname3" value=""><b><input id="nummar3" type="text" class="form-control line vld draw"  name="nummar3" value="" style="Background-color: #121c4e;color:#efb810;font-size: 25px;text-align: center;" readonly></b></td>
                    </tr>
					<tr>
                        <th><input  type="checkbox"  name="margchk4" id="margchk4" onclick="todos.checked = false" value="margin4"><label for="margchk4">Marginación:</label></th>
                      <td id=""><input id="lname4" type="hidden" name="lname4" value=""><b><input id="nummar4" type="text" class="form-control line vld draw"  name="nummar4" value="" style="Background-color: #121c4e;color:#efb810;font-size: 25px;text-align: center;" readonly></b></td>
                    </tr>
                   <input id="tipoimpre" type="hidden"  name="tipoimpre" value="">
					
				<tr><td>Jefe/a del Registro:</td><td colspan="2">
					<SELECT name="nombrejefe" class="form-control seleccion" id="nombrejefe" required >
    <OPTION Value="jefe1">Juan José Armando Azucena Catán</OPTION>
    <OPTION value="jefe2" >Yeny Carina Cruz Díaz</OPTION>
</td></tr>	
				<tr><td >Cargo:</td><td colspan="2">
					<SELECT name="cargos" class="form-control seleccion" id="cargos" required >
    <OPTION Value="cargo1">Jefe del Registro del Estado Familiar</OPTION>
    <OPTION value="cargo2" >Jefa del Registro del Estado Familiar</OPTION>
	<OPTION value="cargo3" >Jefe Interino del Registro del Estado Familiar</OPTION>
	<OPTION value="cargo4" >Jefa Interino del Registro del Estado Familiar</OPTION>
	<OPTION value="cargo5" >Jefe Interino adHonorem del Registro del Estado Familiar</OPTION>
	<OPTION value="cargo6" >Jefa Interino adHonorem del Registro del Estado Familiar</OPTION>
</td></tr>				
					
					
                </table>


	

				
				
            </div>
            <div class="modal-footer" id="pdfimpdiv">
                 
				<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
				<input type="submit" class="btn btn-primary cerrarModal3" value="PDF" name="pdfimp" id="pdfimp" >
				
				</form>
				
				
				
				
            </div>
        </div>
    </div>
</div>	

	</div>

<div id="libromarginaciones" class="modal fade" >
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="agregarlibro" id="agregarlibro" >
				  <div class="modal-header">						
						<h4 class="modal-title"> Agregar nuevo libro de <b><font color="#121c4e">Marginaciones</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table >
            <tr><td width="50%" align="center"><b> Último Libro:</td><td width="50%" align="center"><b>Siguiente Libro:</b></td></tr>
 
   
              <tr>
		
				<td ><input id="librou" type="text" class="form-control line vld draw"  name="librou"  style="Background-color: #121c4e;color:#efb810;font-size: 25px;text-align: center;" ></td><td><input id="librou2" type="text" class="form-control line vld draw"  name="librou2" style="Background-color: #121c4e;color:#efb810;font-size: 25px;text-align: center;" ></td>			  
					
          
            </tr>
			
				  </table>
				  
				 
				 
			
			
       
			<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal4" value="Crear Libro" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	
	</div>



<div id="addusuario" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="crearusuario" id="crearusuario" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Agregar nuevo <b><font color="#121c4e">Usuario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            
   
              <tr>
				<td width="10%">Nombre:</td>
				<td width="38%" ><input type="text" class="form-control" name="nombreu" required id="nombreu" value="" placeholder="Nombres y Apellidos"  onkeypress="return soloLetras(event);">
			    </td>
          
           <td width="5%" rowspan="5"></td>
                <td width="10%">Usuario:</td>
				<td width="37%"><input type="text" class="form-control lowercase" name="usuariou" placeholder="Iniciales de Nombres + un apellido"  onkeypress="return soloLetras(event);" required></td>
            </tr>
            <tr>
             <td>Password:</td>
				<td ><input type="password" class="form-control" name="passu" placeholder="Password"  required ></td>
			
		
             <td>Verificar:</td>
				<td ><input type="password" class="form-control" name="verificaru" placeholder="Repite Password" required ></td>
			
			</tr>
			<tr>
                <td>Tipo:</td>
				<td > 
				<SELECT name="tipou" class="form-control"  required>
    <OPTION value="">Seleccione</OPTION>
    <OPTION Value="Admin">Administrador&nbsp;&nbsp;&nbsp;&nbsp;</OPTION>
    <OPTION value="Usuario">Marginador</OPTION>
      <OPTION Value="CCMarginacion">Control Marginaciones&nbsp;&nbsp;</OPTION>
    <OPTION value="CCalidad">Control de Calidad</OPTION>
    
    </SELECT>
				</td>
				
				<td >Iniciales:</td>
                
				<td ><input type="text" class="form-control" name="inicialesu" placeholder="Iniciales del Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4"  onkeypress="return soloLetras(event);" required></td>
				
				
              
            </tr>
			<tr>
				  <td>Pregunta de Seguridad:</td><td><SELECT name="preguntas" id="preguntas" class="form-control"  required>
    <OPTION value="">Seleccione</OPTION>
    <OPTION Value="1">¿Cuál era el nombre de tu primera mascota?</OPTION>
    <OPTION value="2">¿Cuál era el nombre de tu mejor amigo/a de la infancia?</OPTION>
	<OPTION value="3">¿Cuál era tu apodo de pequeño/a?</OPTION>
	<OPTION value="4">¿Cuál es tu comida favorita?</OPTION>
	<OPTION value="5">¿En que país te gustaría vivir?</OPTION>
    <OPTION value="6">¿Cómo se llamaba la primera escuela a la que asististe?</OPTION>
    </SELECT></td>
				  
			
				  <td>Respuesta:</td><td><input type="text" class="form-control" name="respuesta" placeholder="respuesta" required></td></tr>	  
			<tr>
				  <td>Email:</td><td><input type="mail" class="form-control" name="correo" placeholder="correo" required></td><td colspan="2"></td></tr>		  
		
				

			
				  </table>				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal5" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	
	
	</div>

<div id="editusuario" class="modal fade" spellcheck="true">
	
	
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="editarusuario" id="editarusuario" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Editar datos de <b><font color="#121c4e">Usuario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
<table width="100%">
            <tr><td colspan="4"> <p>Seleccione Editar o Deshabilitar</td></tr>
             <tr><td colspan="4">     <input type="radio"  id="tipo1user" name="tipouser" value="tipo1user" required />
  
      <label for="tipo1user">Editar&nbsp;</label>
  <input type="radio"  id="tipo2user" name="tipouser" value="tipo2user" required/>
  <label for="tipo2user">Deshabilitar</label>
  				
				</td></tr>
				  
				 
 </table>
			 <table width="100%" name="inhauser" id="inhauser" style="display:none">
           
   <tr>
     <td width="16%">Usuario a Modificar:</td><td width="45%">
			
			
			
				  <select class="form-control"   name="inhusuario" id="inhusuario"  disabled required>
        <option value="0">Seleccione Usuario:</option>
				    <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM usuarios");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[id].'">'.$valores2[nombre].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
				  </select><input type="hidden"  name="idusuarioinha" id="idusuarioinha" >
				</td><td width="5%"><td><td width="9%">Estado: </td><td width="25%"><select class="form-control" name="estadouser" id="estadouser" disabled required>
        <option value="0">Seleccione:&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<option value="Activo">Activo</option>
		<option value="Inactivo">Inactivo</option>	</select></td></tr>
              
				 </table>	

				
			  <table width="100%" name="edituser" id="edituser" style="display: none">
            
   <tr>
     <td >Colaborador:</td><td colspan="3">
				  
	
				  
				
				  
				  
				  <select class="form-control" name="eusuario" id="eusuario" disabled  required >
        <option value="0" >Seleccione Usuario:</option>
				    <?php
					  
					  
          $query = $mysqli -> query ("SELECT * FROM usuarios WHERE estado='Activo'");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'" data-nombre="'.$valores[nombre].'" data-usuario="'.$valores[usuario].'" data-password="'. $valores[password].'" data-tipo="'.$valores[tipo].'" data-iniciales="'.$valores[iniciales].'">'.$valores[nombre].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
				  </select>
				</td><td></td></tr>
              <tr>
		
				  
				  
				<td width="10%">Nombre:</td>
				<td width="40%"><input type="text" class="form-control" name="ndusuarioedit" id="ndusuarioedit" placeholder="Nombres y Apellidos" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled required><input type="hidden"  name="idusuarioedit" id="idusuarioedit" >
			    </td>
          <td rowspan="3"width="5%"></td>
				
                <td width="10%">Usuario:</td>
				<td width="40%"><input type="text" class="form-control lowercase" name="usuariouedit" id="usuariouedit" placeholder="Iniciales de Nombres + un apellido" style="text-transform: lowercase" onkeypress="return soloLetras(event);" disabled required></td>
            </tr>
            <tr>
                 <td>Password:</td>
				<td ><input type="password" class="form-control" name="passuedit" id="passuedit" placeholder="Password" readonly></td>
		
             <td>Verificar:</td>
				<td ><input type="password" class="form-control" name="verificaruedit" id="verificaruedit" placeholder="Repite Password"  disabled required></td>
			
			</tr>
			<tr>
                <td>Tipo:</td>
				<td > 
				<SELECT name="tipouedit" id="tipouedit" class="form-control"  disabled required>
    <OPTION value="">Seleccione:</OPTION>
    <OPTION Value="Admin">Administrador&nbsp;&nbsp;&nbsp;&nbsp;</OPTION>
    <OPTION value="Usuario">Marginador</OPTION>
      <OPTION Value="CCMarginacion">Control Marginaciones&nbsp;&nbsp;</OPTION>
    <OPTION value="CCalidad">Control de Calidad</OPTION>
    
    </SELECT>
				</td>
              
           
				<td >Iniciales:</td>
                
				<td ><input type="text" class="form-control" name="inicialesuedit" id="inicialesuedit" placeholder="Iniciales del Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4"   onkeypress="return soloLetras(event);" disabled required></td>
            </tr>
			
				  </table>	
						
			<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal6" value="Guardar Cambios" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	
	
	</div>

<div id="deleteusuario" class="modal fade" >
	
	
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="borrararusuario" id="borrararusuario" >
				  <div class="modal-header">						
						<h4 class="modal-title">Eliminar datos de <b><font color="#121c4e">Usuario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            
   <tr>
     <td colspan="2" >Seleccione el usuario a eliminar</td></tr><tr><td colspan="2">
				  
	
				  <select class="form-control" style="width: auto" name="dusuario" id="dusuario"  required>
        <option value="0">Seleccione Usuario:</option>
				    <?php
          $query = $mysqli -> query ("SELECT * FROM usuarios");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'" data-nombre2="'.$valores[nombre].'" data-usuario2="'.$valores[usuario].'" data-password2="'.$valores[password].'" data-tipo2="'.$valores[tipo].'" data-iniciales2="'.$valores[iniciales].'">'.$valores[nombre].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
				  </select>
				</td></tr>
              <tr>
		
				  
				  
				<td >Nombre:</td>
				<td ><input type="text" class="form-control" name="ndusuariodelete" id="ndusuariodelete" placeholder="Nombres y Apellidos" readonly><input type="hidden"  name="idusuariodelete" id="idusuariodelete" >
			    </td>
          
            </tr>
            <tr>
				
                <td>Usuario:</td>
				<td ><input type="text" class="form-control" name="usuarioudelete" id="usuarioudelete" placeholder="Iniciales de Nombres + un apellido" readonly></td>
            </tr>
            <tr>
             <td>Password:</td>
				<td ><input type="password" class="form-control" name="passudelete" id="passudelete" placeholder="Password" readonly></td>
			
			
			</tr>
			
			
			<tr>
                <td>Tipo:</td>
				<td > <input type="text" class="form-control" name="tipoudelete" id="tipoudelete" placeholder="Tipo de usuario" readonly>
				
				</td>
              
            </tr>
			
			<tr>
				<td ><label >Iniciales:</label></td>
                
				<td ><input type="text" class="form-control" name="inicialesudelete" id="inicialesudelete" placeholder="Iniciales del Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4"  style="width: auto" readonly></td>
            </tr>
			
				  </table>	
						<p  class="text-warning"><small>¿Quieres eliminar este registro?</small></p>
						<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
			<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-danger cerrarModal7" value="Eliminar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
			
	</div>





<div id="asignarfolio" class="modal fade" >
	
	
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="foliousuario" id="foliousuario" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Asignación de  <b><font color="#121c4e">Folios</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            
   <tr><td >Seleccione el usuario para acreditar Folios</td><td width="5%" rowspan="2"></td><td>Digita libro-Folio</td></tr><tr><td >
				  
	
				  <select class="form-control"  name="usuariofolio" id="usuariofolio"  required>
        <option value="0" >Seleccione Usuario:</option>
				    <?php
          $query = $mysqli -> query ("SELECT * FROM usuarios WHERE estado='Activo'");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'" data-iniciales3="'.$valores[iniciales].'">'.$valores[nombre].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
				  </select></td><td><input type="text" class="form-control" name="librofolio" id="librofolio" placeholder="Libro - Folio"  maxlength="7" required onkeypress="return soloLetrasmarg(event);"> <input type="hidden"  name="idusuariofolio" id="idusuariofolio" ><input type="hidden"  name="inicialesfolio" id="inicialesfolio">
				</td></tr>
              <tr>
		
				  
				  
				<td colspan="3" >* Debes de seleccionar el usuario y luego asignar el libro y folio. (000-0)</td>
				
          
            </tr>
			
				  </table>	
						
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal8" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	
	</div>



<div id="asignarmarginacion" class="modal fade" >
	
	
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="foliousuariom" id="foliousuariom" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Asignación de  <b><font color="#121c4e">Marginación</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            
   <tr><td><medium>Seleccione el usuario para acreditar Marginación</medium></td>
   <td>Digita libro-Folio:</td><td>Número de Marginación:</td></tr><tr><td >
				  
				
				  <select class="form-control"  name="usuariofoliom" id="usuariofoliom"  required>
        <option value="0" >Seleccione Usuario:</option>
				    <?php
          $query = $mysqli -> query ("SELECT * FROM usuarios WHERE estado='Activo'");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'" data-iniciales4="'.$valores[iniciales].'">'.$valores[nombre].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
				  </select></td><td><input type="text" class="form-control" name="librofoliom" id="librofoliom" placeholder="Libro - Folio"  maxlength="7" required onkeypress="return soloLetrasmarg(event);"><input type="hidden"  name="idusuariofoliom" id="idusuariofoliom" ><input type="hidden"  name="inicialesfoliom" id="inicialesfoliom">
				</td><td><input type="text" class="form-control validar" name="nmargm" id="nmargm" placeholder="# Marginación"  maxlength="4" required></td></tr>
				  
              <tr>
		
				  
				  
				<td colspan="3" >* Debes de seleccionar el usuario y luego asignar el libro y folio. (000-0) y el número de marginación entre 1 y 2000</td>
				
          
            </tr>
			
				  </table>	
						
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	
	</div>


<div id="art17" class="modal fade"  spellcheck="true">
		<div class="modal-dialog  modal-lg">
			<div class="modal-content" >
				<form name="art17form" id="art17form" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Marginación Artículo <b><font color="#121c4e">Quince, Diecisiete y Rectificaciones</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            <tr><td > <p> Seleccione la marginación a crear:</td></tr>

            	<tr><td>
  <input type="radio"  id="art15_1" name="art1517" value="15_1" required />
  <label for="art15_1">Art. 15&nbsp;</label>
  <input type="radio"  id="art17_1" name="art1517" value="17_1" required />
  <label for="art17_1">Art. 17&nbsp;</label>
  <input type="radio"  id="art15_2" name="art1517" value="15_2" required />
	<label for="art15_2">Art. 15 (x2)&nbsp;</label>
	<input type="radio"  id="art17_2" name="art1517" value="17_2" required />
	<label for="art17_2"> Art. 17 (x2)&nbsp;</label>
	<input type="radio"  id="art17_3" name="art1517" value="17_3" required />
	<label for="art17_3">Rectificación Notario</label></td></tr>

 </table><input type="hidden" name="edit_id17" id="edit_id17" >
				  <input type="hidden" name="margpdf17" id="margpdf17" >
						<table name="art151" id="art151" style="display: none" width="100%">
             
			    
					
			  	   <tr><td >Sexo:</td>
					   <td colspan="4">
					 <input type="radio"  id="art15_1s" name="sexo" value="female" disabled required />
  <label for="art15_1s">Femenino&nbsp;&nbsp;</label>
  <input type="radio"  id="art15_2s" name="sexo" value="male" disabled required />
  <label for="art15_2s">Masculino&nbsp;&nbsp;</label>
					   
					   </td></tr>
            <tr>
				
                <td width="14%">Nombre correcto:</td>
				<td width="56%"><input type="text" class="form-control" name="nombre151" id="nombre151" placeholder="Nombres y Apellidos" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled required></td>
            <td width="2%"></td>
             <td width="14%">Fecha Resolución:</td>
				<td><input type="date" class="max-today form-control" name="Fecha151" id="Fecha151"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
		  </tr>
				  </table>
						<table name="art152" id="art152" style="display: none" width="100%">
             
			    
					<tr><td colspan="5"><hr></td></tr>
			  	   <tr><td >Sexo:</td>
					   <td colspan="4">
					 <input type="radio"  id="art15_1_1s" name="sexo2" value="female" disabled required/>
  <label for="art15_1_1s">Femenino&nbsp;&nbsp;</label>
  <input type="radio"  id="art15_2_1s" name="sexo2" value="male" disabled required />
  <label for="art15_2_1s">Masculino&nbsp;&nbsp;</label>
					   
					   </td></tr>
            <tr>
				
                <td width="14%">Nombre correcto:</td>
				<td width="56%"><input type="text" class="form-control" name="nombre152" id="nombre152" placeholder="Nombres y Apellidos" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled required></td>
          
         <td width="2%"></td>
             <td width="14%">Fecha Resolución:</td>
				<td ><input type="date" class="max-today form-control" name="Fecha152" id="Fecha152"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
		  </tr>
				  </table>
   <table name="art171" id="art171" style="display: none" width="100%">
              <tr>
				<td width="14%"><input type="checkbox"  onchange="tipopart.disabled = !this.checked"  name="17tipop" id="17tipop" value="spartida" checked disabled><label for="17tipop">Tipo de Partida:</label></td>
				<td colspan="4">
					
					<select class="form-control" style="width: auto" name="tipopart" id="tipopart" required disabled>
					
					 <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[tipo_unico].'" data-value = '.$valores2[iniciales_partida].'>'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
   						
					</select>
					
		
			    </td>
          
            </tr>
	   <tr><td ><input type="checkbox"  name="17nombre" id="17nombre" value="nombres17" onchange="nombre17.disabled = !this.checked"  checked disabled><label for="17nombre">A nombre de:</label></td>
		   <td colspan="4"><input type="text" class="form-control" style="text-transform: uppercase" name="nombre17" id="nombre17" placeholder="Nombres y Apellidos" disabled required ></td></tr>
            <tr>
				
                <td  >En el sentido que:</td>
				<td width="56%"><textarea class="form-control" onkeypress="return soloLetras(event);" rows="5" cols="33" disabled name="sentido17" id="sentido17" required></textarea></td>
          <td width="2%"></td>
             <td width="14%" >Fecha de resolución ó escritura:</td>
				<td ><input type="date" class="max-today form-control" name="Fecha171" id="Fecha171"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
		  </tr>
				  </table>
						
						 <table name="art172" id="art172" style="display: none" width="100%">
							 
				<tr><td colspan="5"><hr></td></tr>			 
							 
              <tr>
				<td width="14%"><input type="checkbox"  onchange="tipopart2.disabled = !this.checked" name="17tipop2" id="17tipop2" value="spartida2"  checked disabled><label for="17tipop2">Tipo de Partida:</label></td>
				<td colspan="4">
					
						<select class="form-control" style="width: auto" name="tipopart2" id="tipopart2" required disabled>
				 <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[tipo_unico].'" data-value3 = '.$valores2[iniciales_partida].'>'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
						
					</select>
					
			
			    </td>
          
            </tr>
	   <tr><td ><input type="checkbox"  name="17nombre2" id="17nombre2" value="nombres172" onchange="nombre172.disabled = !this.checked" checked disabled ><label for="17nombre2">A nombre de:</label></td>
		   <td colspan="4"><input type="text" class="form-control" name="nombre172" id="nombre172" style="text-transform: uppercase" placeholder="Nombres y Apellidos" disabled required></td></tr>
            <tr>
				
                <td  >En el sentido que:</td>
				<td width="56%"><textarea class="form-control" onkeypress="return soloLetras(event);" rows="5" cols="33" disabled name="sentido172" id="sentido172" required></textarea></td>
         <td width="2%" rowspan="2"></td>
             <td width="14%" >Fecha Resolución:</td>
				<td ><input type="date" class="max-today form-control" name="Fecha172" id="Fecha172"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
		  </tr>
				  </table>



	<table width="100%" name="datosnotrecti" id="datosnotrecti" style="display: none">  
					<tr><td width="14%">Ante:</td><td width="35%"><input type="text" class="form-control" name="cargorecti" required id="cargorecti" placeholder="Cargo del funcionario" onkeypress="return soloLetras(event);" value="Notario" disabled></td>
							
						<td rowspan="2" width="2%"></td>
						<td width="14%">Nombre Funcionario:</td><td width="35%"><input type="text" class="form-control" name="nombrerecti" required id="nombrerecti"  placeholder="Nombre del funcionario" onkeypress="return soloLetras(event);" disabled></td>
							</tr>					
				<tr><td>Lugar de Escritura:</td><td><input type="text" class="form-control" name="lugarrecti" required id="lugarrecti"  placeholder="Lugar de Escrituración" onkeypress="return soloLetras(event);" disabled></td>
							
					
							
							</tr>				
							
							</table>	





						
			
			<table name="partida171" id="partida171"  style="display: none" width="100%">
				<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar Art. 15</span></h4></td></tr>
			<tr>  
			<td width="14%">Año Part.:</td>
				<td width="35%" ><input type="text" class="form-control  validar" name="edit_anio1517" id="edit_anio1517" onblur="return validarRango(this);"  maxlength="4" placeholder="Año de Libro" required disabled></td>
			
				<td width="2%" rowspan="2"></td>
				<td width="14%" >Libro Part.:</td>
				<td width="35%"><input type="text" class="form-control" name="edit_libro1517" maxlength="4" id="edit_libro1517" placeholder="# de Libro" style="text-transform: uppercase;" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" name="edit_npartida1517" id="edit_npartida1517" maxlength="5" placeholder="# de Partida" style="text-transform: uppercase;" required disabled><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
				<td >Tipo:</td><td >
					
					<select class="form-control" style="width: auto" name="tipopart17" id="tipopart17" required disabled>
			 <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'" >'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
					</select>
					
					
					</td>
				</tr>
				
				  </table>
			<table name="partida172" id="partida172" style="display: none" width="100%">
				<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la segunda partida a marginar Art. 15 (x2)</span> </h4></td></tr>
			  <tr>  
			<td width="14%">Año Part. 2:</td>
				<td width="35%" ><input type="text" class="form-control validar" name="edit_anio15172" id="edit_anio15172" onblur="return validarRango(this);"  maxlength="4" placeholder="Año de Libro" required disabled></td>
			<td width="2%" rowspan="2"></td>
				  
				  <td width="14%" >Libro Part. 2:</td>
				<td width="35%"><input type="text" class="form-control" name="edit_libro15172" maxlength="4" id="edit_libro15172" placeholder="# de Libro" style="text-transform: uppercase;" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida 2:</td>
				<td><input type="text" class="form-control" name="edit_npartida15172" id="edit_npartida15172" maxlength="5" placeholder="# de Partida" style="text-transform: uppercase;" required disabled></td>
				<td>Tipo:</td><td>
					
						<select class="form-control" style="width: auto" name="tipopart172" id="tipopart172" required disabled>
	 <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
					</select>
					
					
				</td>
				</tr>
			
			</table>
						
			<table name="partida173" id="partida173" style="display: none" width="100%">
				<tr><h4>
				  <td colspan="5" align="center">
					  
					<h4>  <span class="label label-primary">Digita los datos de folicación de la partida a marginar Art. 17</span></h4></td></tr>
			<tr>  
			<td width="14%">Año Part.:</td>
				<td width="35%" ><input type="text" class="form-control  validar" name="edit_anio15173" id="edit_anio15173" onblur="return validarRango(this);"  maxlength="4" placeholder="Año de Libro" required disabled></td>
			<td width="2%" rowspan="2"></td>
				
				<td width="14%" >Libro Part.:</td>
				<td width="35%"><input type="text" class="form-control" name="edit_libro15173" maxlength="4" id="edit_libro15173" placeholder="# de Libro" style="text-transform: uppercase;" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Part.:</td>
				<td ><input type="text" class="form-control" name="edit_npartida15173" id="edit_npartida15173" maxlength="5" placeholder="# de Partida" style="text-transform: uppercase;" required disabled><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
				<td >Tipo:</td><td >
					
					<select class="form-control" style="width: auto" name="tipopart173" id="tipopart173" required disabled>
			    		 <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
					</select>
					
					
					</td>
				</tr>
				
				  </table>			
						
				<table name="partida174" id="partida174" style="display: none" width="100%">
				<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la segunda partida a marginar Art. 17 (x2)</span></h4></td></tr>
			  <tr>  
			<td width="14%">Año Part. 2:</td>
				<td width="35%" ><input type="text" class="form-control validar" name="edit_anio15174" id="edit_anio15174" onblur="return validarRango(this);"  maxlength="4" placeholder="Año de Libro" required disabled></td>
			
				  <td width="2%" rowspan="2"></td>
				  <td width="14%" >Libro Part. 2:</td>
				<td width="35%"><input type="text" class="form-control" name="edit_libro15174" maxlength="4" id="edit_libro15174" placeholder="# de Libro" style="text-transform: uppercase;" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Part. 2:</td>
				<td ><input type="text" class="form-control" name="edit_npartida15174" id="edit_npartida15174" maxlength="5" placeholder="# de Partida" style="text-transform: uppercase;" required disabled></td>
				<td >Tipo</td><td>
					
						<select class="form-control" style="width: auto" name="tipopart174" id="tipopart174" required disabled>
				 	 <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
						
					</select>
					
					
				</td>
				</tr>
			
			</table>	
						
						
			









						
						
						
						
						
				<table name="nota171" id="nota171" style="display: none ">  
		<tr><td colspan="4"><font size="1"><b>Nota: debes de digitar los datos de foliación en el orden correspondiente 1ra y 2da partida</b></font></td></tr>
				  
				  </table>
				 <table name="nota172" id="nota172" style="display: none ">  
		<tr><td colspan="4"><font size="1"><b>Nota: debes de digitar los datos de foliación en el orden correspondiente 1ra y 2da partida</b></font></td></tr>
				  
				  </table>
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	
	</div>


<div id="cancedef" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="cancexdef" id="cancexdef" autocomplete="off">
					<div class="modal-header">						
						<h4 class="modal-title"> Cancelaciones de Partidas por <b><font color="#121c4e">Defunción</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">

				
			  <table width="100%">
            <tr><td colspan="4"> <p>Seleccione la Marginación de cancelación a crear: </td></tr>
             <tr><td colspan="4">     <input type="radio"  id="tipo1cd" name="scandef" value="nacdef" required />
  
      <label for="tipo1cd">Cance. Naci.&nbsp;</label>
  <input type="radio"  id="tipo2cd" name="scandef" value="viudef" required/>
  <label for="tipo2cd">Viudez&nbsp;&nbsp;</label>
  <input type="radio"  id="tipo3cd" name="scandef" value="matdef" required />
				
			   <label for="tipo3cd">Cance. Matri.</label>
				
   <input type="hidden" name="edit_idcan" id="edit_idcan" ><input type="hidden" name="margpdfcandef" id="margpdfcandef" >
				
				</td></tr>
				  
				  <tr><td colspan="4"><input type="radio"  id="tipo4cd" name="scandef" value="nacviu" required />
				<label for="tipo4cd">Cance. Naci./Viudez&nbsp;</label>				
					<input type="radio"  id="tipo5cd" name="scandef" value="nacmat" required />
				<label for="tipo5cd">Cance. Naci./Cance. 
				Matri.&nbsp;</label>				
						<input type="radio"  id="tipo6cd" name="scandef" value="viumat" required />
				
				<label for="tipo6cd">Viudez/Cance. 
				Matri.&nbsp;</label>	
						<input type="radio"  id="tipo7cd" name="scandef" value="nacviumat" required />
				<label for="tipo7cd">Cance. Naci./Viudez/Cance. 
				Matri.</label>		</td></tr>
 </table>
		
						
						

						
						
						
	   <table width="100%" name="nombrescandef" id="nombrescandef" style="display: none">
			<tr><td align="center" colspan="2"><h4><span class="label label-success">Marginación de Cancelación de Nacimiento</span></h4></td></tr>
		   
           <tr>
		    <td width="15%">Lugar de Defunción:</td>
		    <td><textarea class="form-control" name="lugarcf" id="lugarcf" placeholder="Lugar de defunción" onkeypress="return soloLetras2(event);" disabled required></textarea></td></tr>
			</table>
						
						
						
				
		
			<table width="100%" name="datosviu" id="datosviu" style="display: none">
				<tr><td align="center" colspan="2"><h4><span class="label label-success">Marginación de Viudez</span></h4></td></tr>
	
					
							<tr><td width="15%">Sexo del/la viud@</td><td>
					 <input type="radio"  id="sexocd1" name="sexocd" value="female" disabled required />
  <label for="sexocd1">Femenino&nbsp;&nbsp;</label>
  <input type="radio"  id="sexocd2" name="sexocd" value="male" disabled required />
  <label for="sexocd2">Masculino&nbsp;&nbsp;</label></td></tr>
						
				
				<tr><td >Viud@:&nbsp;&nbsp;</td><td><input type="text" class="form-control" name="viudo" required id="viudo" placeholder="Nombre de la persona viud@" onkeypress="return soloLetras(event);" style="text-transform:uppercase;" disabled></td></tr>
				
				 	<tr>
					<td ><input type="checkbox"  value="conocidoscandef1" name="conocidocandef1" onchange="conotxtcandef1.disabled = !this.checked;conotxtcandef1.focus()" id="conocidocandef1" onClick="conotxtcandef1.value=''"><label for="conocidocandef1">Conocid@ por:&nbsp;&nbsp;&nbsp;</label></td>
                
				<td colspan="3"><input id="conotxtcandef1" type="text" class="form-control" name="conotxtcandef1" placeholder="Conocido Social UNO"  onkeypress="return soloLetras(event);" style="text-transform: uppercase" required disabled></td>
					</tr>
				  
				
				
						</table>
					
			
						
						<table width="100%" name="datosmat" id="datosmat" style="display: none">
							
							<tr><td align="center" colspan="2"><h4><span class="label label-success">Marginación de Cancelación de Matrimonio</span></h4></td></tr></table>
							
							
							
							<table width="100%" name="datosmat2" id="datosmat2" style="display: none">
							<tr><td width="15%">Sexo del/la fallecid@</td><td>
					 <input type="radio"  id="sexocd12" name="sexocdfa" value="female" disabled required />
  <label for="sexocd12">Femenino&nbsp;&nbsp;</label>
  <input type="radio"  id="sexocd22" name="sexocdfa" value="male" disabled required />
  <label for="sexocd22">Masculino&nbsp;&nbsp;</label></td></tr>
						
				
						</table>
						<table name="nombrefallecido" id="nombrefallecido" style="display: none" width="100%">
						
							<tr>
           <td width="15%">Nombre Fallecid@:</td>
				<td ><input type="text" class="form-control" name="edit_ncd" required id="edit_ncd" style="text-transform:uppercase;"placeholder="Nombre de la persona fallecida" onkeypress="return soloLetras(event);"  disabled>
            
		   
          </td>
            </tr>
				 	<tr>
					<td ><input type="checkbox"  value="conocidoscandef2" name="conocidocandef" onchange="conotxtcandef2.disabled = !this.checked;conotxtcandef2.focus()" id="conocidocandef" onClick="conotxtcandef2.value=''"><label for="conocidocandef">Conocid@ por:&nbsp;&nbsp;&nbsp;</label></td>
                
				<td colspan="3"><input id="conotxtcandef2" type="text" class="form-control" name="conotxtcandef2" placeholder="Conocido Social DOS"  onkeypress="return soloLetras(event);" style="text-transform: uppercase" required disabled></td>
					</tr>
				  			
							
							
							</table>
						
						
					<table name="dechadef" id="fechadef" style="display: none" width="100%">
						 <tr>
             <td width="15%">Fecha de Defunción:</td>
				<td ><input type="date" class="max-today form-control" name="Fechacd" id="Fechacd"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
		  </tr>
						
						</table>
						
						
						
				 <table name="cdfolio" id="cdfolio" style="display: none" width="100%">
			  <tr><td colspan="2"><b>Selecciona el tipo de foliación</b></td></tr>
			   <tr>
			     <td><input type="radio"  name="tipofcd" id="stfolio" value="ss" required disabled><label for="stfolio">&nbsp;Foliación (Año/Libro/Folio/Número Partida):&nbsp;&nbsp;&nbsp;</label><input type="radio"  name="tipofcd" id="stfolio2" value="ss2" required disabled><label for="stfolio2">&nbsp;Otro tipo de foliación:&nbsp;</label></td></tr>
		</table>
						
						
		   <table name="datosfcd" id="datosfcd" style="display: none" width="100%">
			<tr>
			  <td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida de defunción</span></h4></td></tr>
			<tr>  
			<td width="15%">Año:</td>
				<td width="34%%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="edefanio" maxlength="4" onblur="return validarRango(this);" id="edefanio" required disabled></td>
			
			  <td rowspan="2" width="2%"></td>
			  <td width="" >Libro:</td>
				<td width=""><input type="text" class="form-control" name="librodef" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librodef" required disabled></td>
				<td rowspan="2" width="2%"></td>

<td ><input type="checkbox"  value="Tipo de Libro" name="chklibrotipo" onchange="librotipo.disabled = !this.checked;librotipo.focus()" id="chklibrotipo" onClick="librotipo.value=''"><label for="chklibrotipo">Tipo:&nbsp;&nbsp;&nbsp;</label></td>
                
				<td colspan="3"><input id="librotipo" type="text" class="form-control" name="librotipo" placeholder="Tipo de Libro o Letra"  onkeypress="return soloLetras(event);" required disabled></td>









            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numdef" id="numdef" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Folio:</td>
				<td ><input type="text" class="form-control" maxlength="4" name="foliodef" id="foliodef" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></tr>
					<tr><td >Alcaldia:</td><td colspan="4"><div ><input type="text" class="form-control"  name="alcaldiadef" required id="alcaldiadef" onkeypress="return soloLetras2(event);" placeholder="Nombre del Municipio de la Alcaldía que la emitio" disabled></div></td></tr>
				
				  </table>	
					<table width="100%" name="datosfcd2" id="datosfcd2" style="display: none">
			<tr>
			  <td colspan="2" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida de defunción</span></h4></td></tr>
			<tr>  
			<td width="15%">Foliación:&nbsp;&nbsp;</td>
				<td  ><textarea class="form-control" name="foliodef2" id="foliodef2" onkeypress="return soloLetras2(event);" disabled required placeholder="Debes de iniciar con la palabra número seguido de este y los demas datos de foliación"></textarea></td>
			
            </tr>
					<tr><td >Alcaldia:&nbsp;&nbsp;</td><td colspan="3"><div ><input type="text" class="form-control" name="alcaldiadefdos" required id="alcaldiadefdos"  placeholder="Nombre del Municipio de la Alcaldía que la emitio" onkeypress="return soloLetras2(event);" disabled></div></td></tr>
				
				  </table>	
						
						
						
				
						<table  name="foliacion1" id="foliacion1" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar (Cance. de Nacimiento)</span></h4></td><tr>
			<tr>  
			<td width="15%">Año:</td>
				<td width="34%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="aniopart1" onblur="return validarRango(this);"  maxlength="4" id="aniopart1" required disabled></td>
			<td rowspan="2" width="2%"></td>
				<td width="15%" >Libro:</td>
				<td width="34%"><input type="text" class="form-control" name="librodef1" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librodef1" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numdef1" id="numdef1" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Tipo:</td>
				<td >
				<SELECT name="tipoparcandef" class="form-control seleccion" id="tipoparcandef" required >
    
			 <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
				
								
				
    </SELECT>
					
					
					
					<input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>
						<table  name="foliacion2" id="foliacion2" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar (Marg. por Viudez)</span></h4></td><tr>
			<tr>  
			<td width="15%">Año:</td>
				<td width="34%" ><input type="text" class="form-control validar" maxlength="4" name="aniopart2" id="aniopart2" onblur="return validarRango(this);"  placeholder="Año de Libro" required disabled></td>
			
				<td rowspan="2" width="2%"></td>
				<td width="15%" >Libro:</td>
				<td width="34%"><input type="text" class="form-control" maxlength="4" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="librodef2" id="librodef2" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td><input type="text" class="form-control" maxlength="5" style="text-transform:uppercase;" value="" placeholder="# de Partida"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="numdef2" id="numdef2" required disabled></td>
			
				<td>Tipo:</td>
				<td >
				<SELECT name="tipoparviudez" class="form-control seleccion" id="tipoparviudez" required >
    
			 <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
				
								
				
    </SELECT>
					
					
				</td>	
					
					
					
					
            </tr>
			
				  </table>
			<table  name="foliacion3" id="foliacion3" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar (Cance. de Matrimonio)</span></h4></td><tr>
			<tr>  
			<td width="15%">Año:</td>
				<td width="34%" ><input type="text" class="form-control validar" maxlength="4" name="aniopart3" id="aniopart3" onblur="return validarRango(this);"  placeholder="Año de Libro" required disabled></td>
			<td width="2%" rowspan="2"></td>
				
				<td width="15%" >Libro:</td>
				<td width="34%"><input type="text" class="form-control" maxlength="4" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" name="librodef3" placeholder="# de Libro" id="librodef3" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" name="numdef3" placeholder="# de Partida" id="numdef3" required disabled></td>
			
            
				<td >Tipo:</td>
				<td >
				<SELECT name="tipoparcanmat" class="form-control seleccion" id="tipoparcanmat" required >
    
			 <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '3'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
				
								
				
    </SELECT>
					
					
				</td>	
				
				
				</tr>
	
				  </table>	
						
		
			<div class="modal-footer">
			
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	</div>
	
	<div id="identidades" class="modal fade" spellcheck="true">
		<div class="modal-dialog  modal-lg">
			<div class="modal-content">
				<form name="identidad" id="identidad" autocomplete="off">
					<div class="modal-header">						
						<h4 class="modal-title">Marginación por <b><font color="#121c4e">Identidad</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body ui-front">

				
			  <table width="100%">
            <tr><td colspan="4"> <p>Seleccione la Marginación de identidad a crear: </td></tr>
             <tr><td colspan="4">     <input type="radio"  id="tipo1id" name="siden" value="idenac" required />
  
      <label for="tipo1id">Nacimiento&nbsp;</label>
  <input type="radio"  id="tipo2id" name="siden" value="idedef" required/>
  <label for="tipo2id">Defunción&nbsp;&nbsp;</label>
  <input type="radio"  id="tipo3id" name="siden" value="idenacdef" required />
				<label for="tipo3id">Ambas</label>
				
   <input type="hidden" name="edit_ididen" id="edit_ididen" ><input type="hidden" name="margpdfiden" id="margpdfiden" >
				
				</td></tr>
				  
	
 </table>
		
									
				  <table width="100%" name="datosidesex" id="datosidesex" style="display: none">
							

					<tr>
					  <td>Sexo:</td><td>
					 <input type="radio"  id="sexoid1" name="sexoid" value="female" disabled required />
  <label for="sexoid1">Femenino&nbsp;&nbsp;</label>
  <input type="radio"  id="sexoid2" name="sexoid" value="male" disabled required />
  <label for="sexoid2">Masculino&nbsp;&nbsp;</label></td></tr>
		</table>
				 <table width="100%" name="datoside1" id="datoside1" style="display: none">	  
					  
							<tr>
           <td width="14%">Nombre Propio:</td>
				<td ><input type="text" class="form-control" name="edit_nid" required id="edit_nid" style="text-transform: uppercase" placeholder="Nombre completo de la persona" onkeypress="return soloLetras(event);" disabled>
           		              </td>
            </tr>
								 
			<tr>
			  <td>Conocid@ por:</td>
			  <td><textarea class="form-control" name="conoid" id="conoid" placeholder="Todos los nombres según escritura, seprados por coma (,)" required onkeypress="return soloLetras2(event);" disabled></textarea></td>
							</tr></table>
						<table width="100%" name="datoside2" id="datoside2" style="display: none">	  
					  
							<tr>
           <td width="14%">Nombre  Partida Def.:</td>
				<td ><input type="text" class="form-control" name="edit_nid2" required id="edit_nid2" style="text-transform: uppercase" placeholder="Nombre completo de la persona" onkeypress="return soloLetras(event);" disabled>
           		              </td>
            </tr>
								 
			<tr>
			  <td>Conocid@ por:</td>
			  <td><textarea class="form-control" name="conoid2" id="conoid2" required placeholder="Todos los nombres según escritura, seprados por coma (,)" onkeypress="return soloLetras2(event);" disabled></textarea></td>
							</tr></table>
						
						
				  <table width="100%" name="datoside" id="datoside" style="display: none">	  
						
						
					</table>	
						
					  
							<table width="100%" name="datoside3" id="datoside3" style="display: none">  
					<tr><td width="14%">Ante:</td><td width="35%"><input type="text" class="form-control" name="cargoid" required id="cargoid" placeholder="Cargo del funcionario" onkeypress="return soloLetras(event);" value="Notario" disabled></td>
							
						<td rowspan="2" width="2%"></td>
						<td width="14%">Nombre Funcionario:</td><td width="35%"><input type="text" class="form-control" name="nombrefid" required id="nombrefid"  placeholder="Nombre del funcionario" onkeypress="return soloLetras(event);" disabled></td>
							</tr>					
				<tr><td>Lugar de Escritura:</td><td><input type="text" class="form-control" name="lugarid" required id="lugarid"  placeholder="Lugar de Escrituración" onkeypress="return soloLetras(event);" disabled></td>
							
				<td >Fecha de Escritura:</td>
				<td ><input type="date" class="max-today form-control" name="Fechaid" id="Fechaid"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>			
							
							</tr>				
							
							</table>
					
				
						<table  name="foliacion1ide" id="foliacion1ide" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar (Nacimiento)</span></h4></td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="aniopart1ide" onblur="return validarRango(this);"  maxlength="4" id="aniopart1ide" required disabled></td>
			<td rowspan="2" width="2%"></td>
				
				<td width="14%" >Libro:</td>
				<td width="35%"><input type="text" class="form-control" name="librodef1ide" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librodef1ide" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numdef1ide" id="numdef1ide" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Tipo</td>
				<td >
					
					<SELECT name="tipoparidenac" class="form-control seleccion" id="tipoparidenac" required >
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					
					
					<input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>
						<table  name="foliacion2ide" id="foliacion2ide" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar (Defunción)</span></h4></td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" maxlength="4" name="aniopart2ide" id="aniopart2ide" onblur="return validarRango(this);"  placeholder="Año de Libro" required disabled></td>
			
				<td rowspan="2" width="2%"></td>
				<td width="14%" >Libro:</td>
				<td width="35%"><input type="text" class="form-control" maxlength="4" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="librodef2ide" id="librodef2ide" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" style="text-transform:uppercase;" value="" placeholder="# de Partida"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="numdef2ide" id="numdef2ide" required disabled></td>
			
				<td >Tipo</td>
				<td >
					
					<SELECT name="tipoparidedef" class="form-control seleccion" id="tipoparidedef" required >
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '2'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					
			</td>
					
					
            </tr>
			
				  </table>
			
						
		
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
</div>


<div id="adecuaciones" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="adecuacion" id="adecuacion" autocomplete="off">
					<div class="modal-header">						
						<h4 class="modal-title"> Marginaciones por <b><font color="#121c4e">Adecuación</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">

				
			  <table width="100%">
            <tr><td colspan="4"> <p>Seleccione la Marginación de adecuación a crear: </td></tr>
             <tr><td colspan="4">     <input type="radio"  id="tipo1ad" name="sadec" value="adec" required />
  
      <label for="tipo1ad">Adecuación&nbsp;</label>
  <input type="radio"  id="tipo2ad" name="sadec" value="adecextesc" required/>
  <label for="tipo2ad">Adec. Exten. Escritura&nbsp;</label>
  <input type="radio"  id="tipo3ad" name="sadec" value="adecextpart" required />
				<label for="tipo3ad">Adec. Exte. Partida&nbsp;</label>
<input type="radio"  id="tipo4ad" name="sadec" value="adecmatri" required />
				<label for="tipo4ad">Adec. Matrimonio&nbsp;</label>
<input type="radio"  id="tipo5ad" name="sadec" value="adecmatripadres" required />
				<label for="tipo5ad">Madre o Padre en Matri.</label>
				<input type="hidden" name="edit_idadec" id="edit_idadec" ><input type="hidden" name="margpdfadec" id="margpdfadec" >
				
				</td></tr>
				  
				 
 </table>
		
		<table width="100%" name="datosadec" id="datosadec" style="display: none">
						
							<tr>
							  <td width="14%">Sexo:</td>
							  <td width="25%">
					 <input type="radio"  id="sexoad1" name="sexoad" value="female" disabled required />
  <label for="sexoad1">Femenino&nbsp;&nbsp;</label>
  <input type="radio"  id="sexoad2" name="sexoad" value="male" disabled required />
  <label for="sexoad2">Masculino&nbsp;&nbsp;</label></td>
								<td rowspan="2" width="2%"></td>
								
								<td width="14%">Nombre:&nbsp;&nbsp;</td><td width="45%"><input type="text" class="form-control" name="nombreadec" required id="nombreadec" placeholder="Nombre de la persona a adecuar" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>
				
									
							<tr>
							  <td>Quién adecua:</td>
							  <td>
					 <input type="radio"  id="padresad1" name="padresad" value="madre" disabled required />
  <label for="padresad1">Madre&nbsp;&nbsp;</label>
  <input type="radio"  id="padresad2" name="padresad" value="padre" disabled required />
  <label for="padresad2">Padre&nbsp;&nbsp;</label></td>
           <td >Nombre Adecuado:</td>
				<td ><input type="text" class="form-control" name="nombre_padres" required id="nombre_padres" style="text-transform: uppercase" placeholder="Nombre adecuado de la madre o del padre" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
            </tr>
							
							<tr>
           <td >Apellidos a usar:</td>
				<td colspan="2" ><input type="text" class="form-control" name="apeadec" required id="apeadec" style="text-transform: uppercase" placeholder="Apellidos a usar" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
								
								
            </tr>
				  </table>				
						

<table width="100%" name="datosadecmatri" id="datosadecmatri" style="display: none">
						
			
									
								
							<tr>
           <td >Apellidos a usar:</td>
				<td colspan="2" ><input type="text" class="form-control" name="apeadecmatri" required id="apeadecmatri" style="text-transform: uppercase" placeholder="Apellidos a usar" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
								
								
            </tr>
				  </table>	





						
				  <table name="funcioadec" id="funcioadec" style="display: none" width="100%">
						 <tr>
             <td width="14%">Fecha de Escritura:</td>
				<td width="35%"><input type="date" class="max-today form-control" name="Fechaad" id="Fechaad"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
		<td rowspan="2" width="2%"></td>
           <td width="14%">Cargo Funcionario:</td>
				<td width="35%"><input type="text" class="form-control" name="cargo_adec" required id="cargo_adec"  value="Notario" placeholder="Cargo del Funcionario" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
            </tr>
							
							<tr>
           <td >Nombre Funcionario:</td>
				<td ><input type="text" class="form-control" name="nfunadec" required id="nfunadec" style="text-transform: uppercase" placeholder="Nombre del Funcionario" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
         
           <td >Lugar de Escrituración:</td>
				<td ><input type="text" class="form-control" name="lugaradec" required id="lugaradec" placeholder="Lugar donde se Escrituro" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
            </tr>
				  </table>	





			
						
				 <table name="adfolio" id="adfolio" style="display: none" width="100%">
			  <tr><td ><b>Selecciona el tipo de foliación</b></td></tr>
			   <tr>
			     <td><input type="radio"  name="tipofad" id="stadfolio" value="ssad" required disabled><label for="stadfolio">&nbsp;Foliación (Año/Libro/Folio/Número Partida):&nbsp;&nbsp;&nbsp;</label><input type="radio"  name="tipofad" id="stadfolio2" value="ssad2" required disabled><label for="stadfolio2">&nbsp;Otro tipo de foliación:&nbsp;</label></td></tr>
		</table>
						
						
		   <table name="datosfad" id="datosfad" style="display: none" width="100%">
			<tr>
			  <td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida que contiene la adecuación</span></h4></td></tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="adefanio" maxlength="4" onblur="return validarRango(this);" id="adefanio" required disabled></td>
			
				<td rowspan="2" width="2%"></td>
				<td width="" >Libro:</td>
				<td width=""><input type="text" class="form-control validar" name="librodefad" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librodefad" required disabled></td>
				
				
				<td rowspan="2" width="2%"></td>

<td ><input type="checkbox"  value="Tipo de Libro" name="chklibrotipoade" onchange="librotipoade.disabled = !this.checked;librotipoade.focus()" id="chklibrotipoade" onClick="librotipoade.value=''"><label for="chklibrotipoade">Tipo:&nbsp;&nbsp;&nbsp;</label></td>
                
				<td colspan="3"><input id="librotipoade" type="text" class="form-control" name="librotipoade" placeholder="Tipo de Libro o Letra"  onkeypress="return soloLetras(event);" required disabled></td>
				
				
				
				
				
				
				
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control validar"  maxlength="5" name="numdefad" id="numdefad" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Folio:</td>
				<td ><input type="text" class="form-control validar" maxlength="4" name="foliodefad" id="foliodefad" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td></tr>
					<tr><td >Alcaldia:</td><td colspan="4"><input type="text" class="form-control" name="alcaldiadefad" required id="alcaldiadefad" onkeypress="return soloLetras2(event);" placeholder="Nombre del Municipio de la Alcaldía que la emitio" ></td></tr>
				
				  </table>	
					<table width="100%" name="datosfad2" id="datosfad2" style="display: none">
			<tr>
			  <td colspan="2" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida de defunción</span></h4></td></tr>
			<tr>  
			<td width="14%">Foliación:&nbsp;&nbsp;</td>
				<td width="86%"><textarea class="form-control" name="foliodefad2" id="foliodefad2" onkeypress="return soloLetras2(event);" disabled placeholder="Debes de iniciar con la palabra número seguido de este y los demas datos de foliación"></textarea></td>
			
            </tr>
					<tr><td >Alcaldia:&nbsp;&nbsp;</td><td ><input type="text" class="form-control" name="alcaldiadefad2" required id="alcaldiadefad2" placeholder="Nombre del Municipio de la Alcaldía que la emitio" onkeypress="return soloLetras2(event);"  disabled></td></tr>
				
				  </table>	
						
						
						
				
						<table  name="foliacion1ad" id="foliacion1ad" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar (Adecuación de Nacimiento)</span></h4></td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="aniopartad1" onblur="return validarRango(this);"  maxlength="4" id="aniopartad1" required disabled></td>
			
				<td rowspan="2" width="2%"></td>
				<td width="" >Libro:</td>
				<td width=""><input type="text" class="form-control" name="librodefad1" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librodefad1" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numdefad1" id="numdefad1" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Tipo:</td>
				<td >
					
					<SELECT name="tipoparadenac" class="form-control seleccion" id="tipoparadenac" required >
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					
					
					<input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>


<table  name="foliacionadenac" id="foliacionadenac" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar (Adecuación de Matrimonio)</span></h4></td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="aniopartad1mat" onblur="return validarRango(this);"  maxlength="4" id="aniopartad1mat" required disabled></td>
			
				<td rowspan="2" width="2%"></td>
				<td width="" >Libro:</td>
				<td width=""><input type="text" class="form-control" name="librodefad1mat" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librodefad1mat" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numdefad1mat" id="numdefad1mat" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Tipo:</td>
				<td >
					
					<SELECT name="tipoparadenacmat" class="form-control seleccion" id="tipoparadenacmat" required >
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '3'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					
					
					<input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>






















				  <div class="modal-footer">
					  
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	</div>


<div id="regimenes" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="regimen" id="regimen" autocomplete="off">
					<div class="modal-header">						
						<h4 class="modal-title"> Marginación de <b><font color="#121c4e">Unión no Matrimonial y Régimen</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            <tr><td > <p> Seleccione la marginación a crear:&nbsp;&nbsp;</td></tr><tr><td>
  <input type="radio" id="reg1" name="regim" value="uni"   required />
  <label for="reg1">Unión No Matrimonial&nbsp;</label>
  <input type="radio"  id="reg2" name="regim" value="creg"   required />
  <label for="reg2">Consti. de Régimen&nbsp;</label>
  <input type="radio"  id="reg3" name="regim" value="sreg"   required />
			  <label for="reg3">Sustitu. de Régimen</label> </td></tr>
 </table><table name="nombrereg" id="nombrereg" width="100%" style="display: ">
   
              <tr>
				<td width="14%">Nombre de El:&nbsp;&nbsp;</td>
				<td colspan="3"><input type="text" class="form-control" name="edit_elreg" required id="edit_elreg" value="" placeholder="Nombre completo de El" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled>
			    <input type="hidden" name="edit_idreg" id="edit_idreg" >
				  <input type="hidden" name="margpdfreg" id="margpdfreg" >
					
				  </td>
          
            </tr>
				<tr>
					<td ><input type="checkbox"  value="unioncono" name="unioncono" onchange="edit_elreg2.disabled = !this.checked;edit_elreg2.focus()" id="unioncono" onClick="edit_elreg2.value=''"><label for="unioncono">Conocid@ por:&nbsp;&nbsp;&nbsp;</label></td>
                
				<td colspan="3"><input id="edit_elreg2" type="text" class="form-control" name="edit_elreg2" placeholder="Conocido Social"  onkeypress="return soloLetras(event);" style="text-transform: uppercase" required disabled></td>
					</tr>	
						
						
            <tr>
				
                <td >Nombre de Ella:&nbsp;&nbsp;</td>
				<td colspan="3"><input type="text" class="form-control" name="edit_ellareg" placeholder="Nombre completo de Ella" style="text-transform: uppercase" id="edit_ellareg" onkeypress="return soloLetras(event);" required disabled></td>
            </tr>
				<tr>
					<td ><input type="checkbox"  value="unioncono2" name="unioncono2" onchange="edit_elreg3.disabled = !this.checked;edit_elreg3.focus()" id="unioncono2" onClick="edit_elreg3.value=''"><label for="unioncono2">Conocid@ por:&nbsp;&nbsp;&nbsp;</label></td>
                
				<td colspan="3"><input id="edit_elreg3" type="text" class="form-control" name="edit_elreg3" placeholder="Conocido Social"  onkeypress="return soloLetras(event);" style="text-transform: uppercase" required disabled></td>
					</tr>		
						
						</table>
					
			<table name="fechareg2" id="fechareg2" width="100%" style="display: ">
   
              <tr>
				<td width="14%">Fecha Rég. Anterior:&nbsp;&nbsp;</td>
				  <td>
				<input type="date" class="max-today form-control" name="Fecharegs2" id="Fecharegs2"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
          
            </tr>
            </table>		
						
						
			<table name="newreg" id="newreg" width="100%" style="display: ">
   
              <tr>
				<td width="14%">Nuevo Régimen:&nbsp;&nbsp;</td>
				<td colspan="3"><input type="text" class="form-control" name="nreg" required id="nreg" value="" placeholder="Régimen elegido"  onkeypress="return soloLetras(event);" disabled>
			    <input type="hidden" name="edit_id" id="edit_id" >
				 
				  </td>
          
            </tr>
            </table>					
					
					
						
						
						
		<table width="100%" name="sentencia" id="sentencia" style="display: ">	  
				  
            <tr>
				<td >
	              <input type="checkbox" class="form-check-input ecuvar1" value="ejecutoriajuzreg1" name="valuedivnjsr" id="valuedivnjsr" disabled><label for="valuedivnjsr">&nbsp;Fecha y Lugar de Sentencia Juzgado:&nbsp;</label></td></tr>
				</table>
					
				<table width="100%" name="decrereg1" id="decrereg1" style="display: ">
            <tr><td rowspan="2" width="14%"> <td width="8%"><input type="checkbox" class="form-check-input flat-red" value="decrevalnjsr" name="decrevalnjsr" onchange="timedecrenjsr.disabled = !this.checked"  id="decrevalnjsr" disabled><label for="decrevalnjsr">&nbsp;Hora:&nbsp;</label></td>
				<td width="10%"><input type="time" class="form-control" required name="timedecrenjsr" id="timedecrenjsr" disabled style="width: auto"></td>
				<td width="8%"><input type="checkbox" class="form-check-input flat-red" value="decreval2njr" name="decreval2njsr" onchange="fechadecrenjsr.disabled = !this.checked"  id="decreval2njsr" disabled ><label for="decreval2njsr">&nbsp;Fecha:&nbsp;</label></td>
				<td width="55%"><input type="date" class="max-today form-control" name="fechadecrenjsr"  id="fechadecrenjsr" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td >
				 <input type="checkbox" class="form-check-input flat-red" value="por_sjuzgador" name="por_sjuzgador" onchange="txt_por_sjuzr.disabled = !this.checked" id="por_sjuzr" disabled ><label for="por_sjuzr">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" >
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="txt_por_sjuzr" id="txt_por_sjuzr" onkeypress="return soloLetras(event);" required disabled>
					</td>
				  </tr>	
					
				</table>	
						
						
						
						
						
				  <table width="100%" name="ejecutoria" id="ejecutoria" style="display: ">	  
				  
            <tr>
				<td >
	              <input type="checkbox" class="form-check-input ecuvar2" value="ejecutoriajuzreg2" name="valuedivnjser" id="valuedivnjser" disabled><label for="valuedivnjser">&nbsp;Fecha y Lugar de Ejecutoría Juzgado:&nbsp;</label></td></tr>
				</table>
				                   
				  <table width="100%" name="decrereg2" id="decrereg2" style="display: ">
            <tr><td rowspan="2" width="14%"> <td width="8%"><input type="checkbox" class="form-check-input flat-red2" value="decrevalnjser" name="decrevalnjser" onchange="timedecrenjser.disabled = !this.checked" id="decrevalnjser" disabled ><label for="decrevalnjser">&nbsp;Hora:&nbsp;</label></td>
				<td width="10%"><input type="time" name="timedecrenjser" required class="form-control" id="timedecrenjser" disabled style="width: auto"></td>
				<td width="8%"><input type="checkbox" class="form-check-input flat-red2" value="decreval2njer" name="decreval2njser" onchange="fechadecrenjser.disabled = !this.checked"  id="decreval2njser" disabled><label for="decreval2njser">&nbsp;Fecha:&nbsp;</label></td>
				<td width="55%"><input type="date" class="max-today form-control" name="fechadecrenjser" id="fechadecrenjser" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td >
					
				    <input type="checkbox" class="form-check-input flat-red2" value="por_ejuzgador" name="por_ejuzgador" onchange="txt_por_ejuzr.disabled = !this.checked" placeholder="Nombre de la Institución" id="por_ejuzr" disabled ><label for="por_ejuzr">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" >
					
					<input type="text" class="form-control" name="txt_por_ejuzr" id="txt_por_ejuzr" onkeypress="return soloLetras(event);" placeholder="Nombre de la Institución" required disabled>
					</td>
				  </tr>	
					
				</table>				
				 
					
				  <table name="funcioreg" id="funcioreg" style="display: " width="100%">
						 <tr>
             <td width="14%">Fecha de Escritura:</td>
				<td width="35%"><input type="date" class="max-today form-control" name="Fecharegs" id="Fecharegs"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
		 <td rowspan="2" width="2%"></td>
           <td width="14%">Cargo Funcionario</td>
				<td width="35%"><input type="text" class="form-control" name="cargo_reg" required id="cargo_reg" value="Notario" placeholder="Cargo del Funcionario" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
            </tr>
							
							<tr>
           <td >Nombre Funcionario:</td>
				<td ><input type="text" class="form-control" name="nfunreg" required id="nfunreg" style="text-transform: uppercase" placeholder="Nombre del Funcionario" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
        
           <td >Lugar de Escrituración:</td>
				<td ><input type="text" class="form-control" name="lugarreg" required id="lugarreg"  placeholder="Lugar donde se Escrituro" onkeypress="return soloLetras(event);" disabled>
            
		   
          </td>
            </tr>
				  </table>	
				

				  </table>
				  <table name="partidareg1" id="partidareg1" style="display: " width="100%">
		  <tr>
					  <td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la  partida a marginar (Unión no Matrimonial)</span></h4></td><tr>
		<tr>  
			<td width="14%">Año Partida:</td>
				<td width="35%" ><input type="text" class="form-control" name="edit_anioreg1" id="edit_anioreg1" maxlength="4" onblur="return validarRango(this);"  placeholder="Año de Libro" required disabled></td>
			<td rowspan="2" width="2%"></td>
			<td width="14%" >Libro Partida:</td>
				<td width="35%"><input type="text" class="form-control" name="edit_libroreg1" maxlength="4" id="edit_libroreg1" placeholder="# de Libro" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" name="edit_npartidareg1" id="edit_npartidareg1" maxlength="5" placeholder="# de Partida" required disabled><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
			<td >Tipo:</td>
				<td >
					
					<SELECT name="tipoparreg" class="form-control seleccion" id="tipoparreg" required >
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT></td></tr>
					
				
				  </table>
				 
			
			<div class="modal-footer" id="uniregdiv">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>


<div id="tutorias" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="tutoria" id="tutoria" autocomplete="off">
					<div class="modal-header">	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>					
						<h4 class="modal-title">Marginaciones de <b><font color="#121c4e">Tutorias, Autoridad Parental y Representación Legal</font></b></h4>
						
					</div>
					<div class="modal-body">

				
			  <table width="100%">
            <tr><td colspan="4"> <p>Seleccione la Marginación a crear: </td></tr>
             <tr><td colspan="4">     <input type="radio"  id="tipo1au" name="autori"  value="tutoria" required />
  
      <label for="tipo1au">Tutorias&nbsp;</label>
  <input type="radio" id="tipo2au" name="autori" value="autoridad"   required/>
  <label for="tipo2au">Autoridad Parental&nbsp;</label>
  <input type="radio" id="tipo3au" name="autori" value="todas"   required />
<label for="tipo3au">Guarda./C. Personal/Repre. Legal</label>
  <input type="hidden" name="edit_idaut" id="edit_idaut" ><input type="hidden" name="margpdfaut" id="margpdfaut" >
				
				</td></tr>
				  
				 
 </table>
						
						
						
				  <table width="100%" name="tuto" id="tuto" style="display: none">
					  <tr><td width="14%">Tipo de Tutoria:</td>

					  	<td>

					  		<input type="radio" required  name="inifinal" id="inifinal" value="inicio" disabled><label for="inifinal">&nbsp;Inicio&nbsp;&nbsp;</label>
					  		<input type="radio" required  name="inifinal" id="inifinal2" value="final" disabled><label for="inifinal2">&nbsp;Final&nbsp;&nbsp;</label>
							  <input type="radio" required  name="inifinal" id="inifinal3" value="ampliar" disabled><label for="inifinal3">&nbsp;Ampliar&nbsp;&nbsp;</label>
					  </td>

					</tr>



							<tr><td >Cargo Tutor/a:</td><td><input type="text" required id="cargot" name="cargot" class="form-control" placeholder="Cargo Tutor/a" disabled></td></tr>
							<tr><td >Nombre Tutor/a:</td><td><textarea class="form-control" required name="ntutor" id="ntutor" style="text-transform: uppercase" placeholder="Nombre o Nombres de los Tutores" disabled></textarea></td></tr>
							<tr><td >Respecto de:</td><td><input type="text" id="nrespecto" name="nrespecto" style="text-transform: uppercase" class="form-control" required placeholder="Nombre de la persona a cargo" disabled></td></tr>
							
							</table>





<table width="100%" name="reestablece" id="reestablece" style="display: none">
	<tr><td >para:</td><td colspan="4"><textarea class="form-control" required name="tutorpara" id="tutorpara"  placeholder="causa del reestablecimiento" disabled></textarea></td></tr>
<tr>
	<td width="10%">N. oficio:</td><td width="39%"><input type="text" class="form-control validar" maxlength="4" name="ofituto" id="ofituto"  placeholder="# de oficio" required disabled></td>
	<td rowspan="2" width="2%"></td>
	<td width="10%">&nbsp;&nbsp;Fecha:&nbsp;&nbsp;</td><td width="39%"><input type="date" class="max-today form-control" name="fechartuto"  id="fechartuto" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
</tr>
		<tr>
                <td>por:</td>
			<td ><input type="text" class="form-control" name="portuto" id="portuto" onKeyPress="return soloLetras(event);" placeholder="Juez"  required disabled> 
				
			</td>
               <td >lugar:</td>
         
				<td ><input type="text" class="form-control" disabled name="lugartuto" id="lugartuto" placeholder="Lugar de Juzgado"  onkeypress="return soloLetras(event);" required></td>
               
            








</tr>


</table>






				  <table width="100%" name="auto" id="auto" style="display: none">
					  <tr>
					    <td width="14%">Tipo Autoridad Parental</td><td><input type="radio" required  name="perdida" id="perdida1" value="perdida" disabled><label for="perdida1">&nbsp;Perdida&nbsp;&nbsp;</label><input type="radio" required  name="perdida" id="perdida2" value="restablece" disabled><label for="perdida2">&nbsp;Restablecimiento</label>


					    </td></tr>
					  
					  <tr><td>Pierde autoridad:</td><td><input type="text" required name="nperdida" id="nperdida" placeholder="Nombre del Padre/Madre" style="text-transform: uppercase"  class="form-control" disabled></td></tr>
							<tr><td>Respecto de:</td><td><input type="radio" required   name="hijos" id="hijos1" value="hijo" disabled><label for="hijos1">&nbsp;Hijo&nbsp;&nbsp;</label><input type="radio" required name="hijos" id="hijos2"   value="hija" disabled><label for="hijos2">&nbsp;Hija</label></td></tr>
 <tr><td>Nombre menor:</td><td><input type="text" required name="nautoridadnombre" id="nautoridadnombre" placeholder="Nombre del menor" style="text-transform: uppercase"  class="form-control" disabled></td></tr>
 <tr><td><input type="checkbox"  value="chkauto" name="chkauto" onChange="autoridadpor.disabled = !this.checked;autoridadpor.focus()" id="chkauto" onClick="autoridadpor.value=''">
					        <label for="chkauto">Por:&nbsp;&nbsp;&nbsp;</label>



 </td><td><input type="text" required name="autoridadpor" id="autoridadpor" placeholder="causa del restablecimiento"  class="form-control" disabled></td></tr>

							</table>
						
						<table width="100%" name="repre" id="repre" style="display: none">
							<tr><td width="14%">Tipo de R. Legal</td><td colspan="3"><input type="radio" required  name="decrep" id="decrep1" value="decretase" disabled><label for="decrep1">Decretase&nbsp;</label><input type="radio" required  name="decrep" id="decrep2" value="confierase" disabled><label for="decrep2">&nbsp;Confiérase</label></td></tr>
							<tr><td>Respecto de</td><td colspan="3"><input type="radio" required   name="hijosr" id="hijosr1" value="hijo" disabled><label for="hijosr1">&nbsp;Hijo&nbsp;&nbsp;</label><input type="radio" required name="hijosr" id="hijosr2"   value="hija" disabled><label for="hijosr2">&nbsp;Hija</label></td></tr>
							<tr><td>Nombre hij@</td><td colspan="3"><input type="text" required name="nhijo" id="nhijo" class="form-control" style="text-transform: uppercase" placeholder="Nombre del hijo/a" disabled></td></tr>
							<tr>
							  <td >Lo ejercerá</td>
							  <td width="25%" ><input type="radio"  required name="padresp" id="padresp1" value="madre" disabled>
							  <label for="padresp1">Madre&nbsp;&nbsp;</label>
							  <input type="radio"  name="padresp" required id="padresp2" value="padre" disabled><label for="padresp2">Padre&nbsp;&nbsp;</label><input type="radio"  name="padresp" required id="padresp3" value="otro" disabled><label for="padresp3">Otro </label></td><td width="20%"><input type="text" required name="notrore" id="notrore" class="form-control"  placeholder="Parentesco" disabled></td><td width="41%"></td></tr>
								<tr><td>Nombre:</td><td colspan="3"><input type="text" required name="npadre" id="npadre" class="form-control" style="text-transform: uppercase" placeholder="Nombre del padre/madre" disabled></td></tr>
							
							</table>
						
						
						
					<table width="100%" name="sentenciatu" id="sentenciatu" style="display: none">	  
				  
            <tr>
				<td colspan="4">
	              <input type="checkbox" class="form-check-input ecuvar1" value="ejecututo1" name="ejecututo1" id="ejecututo1" disabled><label for="ejecututo1">&nbsp;Fecha y Lugar de Sentencia Juzgado:&nbsp;</label></td></tr>
				</table>
					
				<table width="100%" name="sentuto" id="sentuto" style="display: none">
            <tr><td rowspan="2" width="14%"></td> <td width="8%"><input type="checkbox" class="form-check-input flat-red" value="horatu1" name="horatu1" onchange="timetu1.disabled = !this.checked"  id="horatu1" disabled><label for="horatu1">&nbsp;Hora:&nbsp;</label></td>
				<td width="10%"><input type="time" class="form-control" required name="timetu1" id="timetu1" disabled style="width: auto"></td>
				<td width="8%"><input type="checkbox" class="form-check-input flat-red" value="fechatu1" name="fechatu1" onchange="fechatuto1.disabled = !this.checked"  id="fechatu1"  disabled ><label for="fechatu1">&nbsp;Fecha:&nbsp;</label></td>
				<td width="55%"><input type="date" class="max-today form-control" name="fechatuto1"  id="fechatuto1" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td >
					  <input type="checkbox" class="form-check-input flat-red" value="portu1" name="portu1" onchange="portutxt1.disabled = !this.checked" id="portu1" disabled ><label for="portu1">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" >
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="portutxt1" id="portutxt1" onkeypress="return soloLetras(event);" required disabled>
					</td>
				  </tr>	
					
				</table>	
						
						
						
						
						
				  <table width="100%" name="ejecutoriatu" id="ejecutoriatu" style="display: none">	  
				  
            <tr>
				<td colspan="4">
	              <input type="checkbox" class="form-check-input ecuvar2" value="ejecututo2" name="ejecututo2" id="ejecututo2" disabled><label for="ejecututo2">&nbsp;Fecha y Lugar de Ejecutoría Juzgado:&nbsp;</label></td></tr>
				</table>
				                   
				 <table width="100%" name="ejetuto" id="ejetuto" style="display: none">
            <tr><td rowspan="2" width="14%"></td> <td width="8%"><input type="checkbox" class="form-check-input flat-red2" value="horatu2" name="horatu2" onchange="timetu2.disabled = !this.checked"  id="horatu2" disabled><label for="horatu2">&nbsp;Hora:&nbsp;</label></td>
				<td width="10%"><input type="time" class="form-control" required name="timetu2" id="timetu2" disabled style="width: auto"></td>
				<td width="8%"><input type="checkbox" class="form-check-input flat-red2" value="fechatu2" name="fechatu2" onchange="fechatuto2.disabled = !this.checked"  id="fechatu2"  disabled ><label for="fechatu2">&nbsp;Fecha:&nbsp;</label></td>
				<td width="55%"><input type="date" class="max-today form-control" name="fechatuto2" id="fechatuto2" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td >
					 <input type="checkbox" class="form-check-input flat-red2" value="portu2" name="portu2" onchange="portutxt2.disabled = !this.checked"  id="portu2" disabled ><label for="portu2">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" >
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="portutxt2" id="portutxt2" onkeypress="return soloLetras(event);" required disabled>
					</td>
				  </tr>	
					
				</table>
						
						
						
						
				  <table  name="foliaciont1" id="foliaciont1" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar </span></h4></td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="aniotu" onblur="return validarRango(this);"  maxlength="4" id="aniotu" required disabled></td>
			<td rowspan="2" width="2%"></td>
				
				<td width="14%" >Libro:</td>
				<td width="365"><input type="text" class="form-control" name="librotu" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librotu" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numtuto" id="numtuto" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Tipo:</td>
				<td >
					
					
					<SELECT name="tipopartuto" class="form-control seleccion" id="tipopartuto" required >
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					
					
					
					<input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>
			  <div class="modal-footer" id="autodiv">
				  
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	</div>


<div id="varias" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="variasfrm" id="variasfrm" autocomplete="off" >
					<div class="modal-header">						
						<h4 class="modal-title"> Marginación <b><font color="#121c4e">Varias</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%" name="variastb" id="variastb">
            <tr><td > <p> Seleccione la marginación a crear:&nbsp;&nbsp;</td></tr>
			<tr><td>	  
  <input type="radio"  id="tipo1var" name="variastipo" value="recono" required />
  <label for="tipo1var">Reconocimientos&nbsp;&nbsp;</label>
  <input type="radio"  id="tipo2var" name="variastipo" value="subsi" required />
  <label for="tipo2var">Impugnación&nbsp;&nbsp;</label>
  <input type="radio"  id="tipo3var" name="variastipo" value="adop" required />
				<label for="tipo3var">Adopciones&nbsp;&nbsp;</label> 	  
  <input type="radio"  id="tipo4var" name="variastipo" value="legiti" required />

  <label for="tipo4var">Legitimación&nbsp;&nbsp;</label>
  <input type="radio"  id="tipo5var" name="variastipo" value="repo" required />
  <label for="tipo5var">Reposición Acuerdo / Acta&nbsp;&nbsp;</label><input type="hidden" name="edit_idvar" id="edit_idvar" >
				  <input type="hidden" name="margpdfvar" id="margpdfvar" >
   </td></tr>			  
				  
 </table>
		<table width="100%"  name="foliacionvar1" id="foliacionvar1" style="display: none">
			<tr><td colspan="4">&nbsp;</td></tr>
			<tr>
			  <td colspan="5" >Digita los datos de la nueva partida</td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="aniovar" value="2022" onblur="return validarRango(this);"  maxlength="4" id="aniovar" required disabled></td>
			
				<td rowspan="2" width="2%"></td>
				<td width="14%">Libro:</td>
				<td width="35%"><input type="text" class="form-control validar" name="librovar" placeholder="# de Libro"  maxlength="3" id="librovar" required disabled></td>
            </tr>
				<tr>  
			<td >Folio:</td>
				<td ><input type="text" class="form-control validar" maxlength="3" name="folvar" id="folvar"  placeholder="# de Folio"  required disabled></td>
			<td >Num. Partida</td>
				<td ><input type="text" class="form-control validar" maxlength="3" name="numvar" id="numvar"  placeholder="# de Partida" required disabled></td>
            </tr>
			<tr>  
			<td >Tipo:</td>
				<td ><SELECT name="optionsnad" class="form-control" id="optionsnad" required>
  					<option value="Nacimiento">Nacimiento</option>
					<option value="Defunción">Defunción</option>
					<option value="Matrimonio">Matrimonio</option>
					<option value="Divorcio">Divorcio</option>
					<option value="Régimen Patrimonial">Régimen Patrimo.</option>
					<option value="Acta Matrimonial">Acta Matrimonial</option>
   
    </SELECT></td></tr>
				  </table>		
					
<table width="100%" name="sentenciavar" id="sentenciavar" style="display: none">	  
			<tr><td colspan="4">&nbsp;</td></tr>	  
            <tr>
				<td colspan="4">
	              <input type="checkbox" class="form-check-input ecuvar1" value="ejecuvar" name="ejecuvar1" id="ejecuvar1" disabled><label for="ejecuvar1">&nbsp;Fecha y Lugar de Sentencia Juzgado:&nbsp;</label></td></tr>
				</table>
					
				<table width="100%" name="senvar1" id="senvar1" style="display: none">
            <tr><td rowspan="2" width="14%"></td> <td width="8%"><input type="checkbox" class="form-check-input flat-red" value="horavar1" name="horavar1" onchange="timevar1.disabled = !this.checked"  id="horavar1" disabled><label for="horavar1">&nbsp;Hora:&nbsp;</label></td>
				<td width="10%"><input type="time" class="form-control" required name="timevar1" id="timevar1" disabled style="width: auto"></td>
				<td width="8%"><input type="checkbox" class="form-check-input flat-red" value="fechavar1" name="fechavar1" onchange="fechavari1.disabled = !this.checked"  id="fechavar1"  disabled ><label for="fechavar1">&nbsp;Fecha:&nbsp;</label></td>
				<td width="55%"><input type="date" class="max-today form-control" name="fechavari1"  id="fechavari1" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td >
					
				    <input type="checkbox" class="form-check-input flat-red" value="porvar1" name="porvar1" onchange="porvartxt1.disabled = !this.checked" id="porvar1" disabled ><label for="porvar1">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" >
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="porvartxt1" id="porvartxt1" onkeypress="return soloLetras(event);" required disabled>
					</td>
				  </tr>	
					
				</table>
			
				  <table width="100%" name="ejecutoriavar" id="ejecutoriavar" style="display:none">	  
				  
            <tr>
				<td colspan="4">
	              <input type="checkbox" class="form-check-input ecuvar2" value="ejecuvar2" name="ejecuvar2" id="ejecuvar2" disabled><label for="ejecuvar2">&nbsp;Fecha y Lugar de Ejecutoría Juzgado:&nbsp;</label></td></tr>
				</table>
							
		<table width="100%" name="senvar2" id="senvar2" style="display: none">
            <tr><td rowspan="2" width="14%"></td> <td width="8%"><input type="checkbox" class="form-check-input flat-red2" value="horavar2" name="horavar2" onchange="timevar2.disabled = !this.checked"  id="horavar2" disabled><label for="horavar2">&nbsp;Hora:&nbsp;</label></td>
				<td width="10%"><input type="time" class="form-control" required name="timevar2" id="timevar2" disabled style="width: auto"></td>
				<td width="8%"><input type="checkbox" class="form-check-input flat-red2" value="fechavar2" name="fechavar2" onchange="fechavari2.disabled = !this.checked"  id="fechavar2"  disabled ><label for="fechavar2">&nbsp;Fecha:&nbsp;</label></td>
				<td width="55%"><input type="date" class="max-today form-control" name="fechavari2"  id="fechavari2" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td >
					
				    <input type="checkbox" class="form-check-input flat-red2" value="porvar2" name="porvar2" onchange="porvartxt2.disabled = !this.checked" id="porvar2" disabled ><label for="porvar2">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" >
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="porvartxt2" id="porvartxt2" onkeypress="return soloLetras(event);" required disabled>
					</td>
				  </tr>	
					
				</table>                  
				
						
						
<table width="100%" name="fechaacu" id="fechaacu" style="display: none">
	 <tr><td colspan="7">&nbsp;</td></tr>
<tr>
  <td  width="14%">Reposición por: </td><td width="20%">
    <input type="radio"  id="tipovar1" name="tipoaa" value="acuerdo" required />
  <label for="tipovar1">Acuerdo&nbsp;&nbsp;</label>
  <input type="radio"  id="tipovar2" name="tipoaa" value="acta" required />

  <label for="tipovar2">Acta&nbsp;&nbsp;</label> </td><td width="10%">Número:</td><td width="15%"><input type="text" class="form-control validar" maxlength="4" name="acuer" id="acuer"  placeholder="# de Folio" required disabled></td>
	<td rowspan="2" width="2%"></td>
	<td width="10%">&nbsp;&nbsp;Fecha:&nbsp;&nbsp;</td><td width="29%"><input type="date" class="max-today form-control" name="fechavaracu1"  id="fechavaracu1" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td></tr>	
	
</table>	
			
	  <table width="100%" name="dmatri" id="dmatri" style="display:none">
		  <tr><td colspan="5">&nbsp;</td></tr>
		  <tr><td width="14%">Sexo:</td><td width="15%"><input type="radio" required   name="hijosvar" id="hijosvar1" value="hijo" disabled><label for="hijosvar1">&nbsp;Hijo&nbsp;&nbsp;</label><input type="radio" required name="hijosvar" id="hijosvar2"   value="hija" disabled><label for="hijosvar2">&nbsp;Hija</label></td>
				
			  <td width="2%"></td>
			  <td width="10%">Menor:</td>
				<td  width="59%"><input type="text" class="form-control" name="nmenor" required id="nmenor" value="" placeholder="Nombre completo Hijo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled>
			    				  </td>
            </tr>
              <tr>
				<td>Madre:</td>
				<td colspan="4" width="86%"><input type="text" class="form-control" name="madrevar" required id="madrevar" value="" placeholder="Nombre completo Madre" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled>
			   
				  </td>
            </tr>
            <tr>
	 <td >Padre:</td>
				<td colspan="4" width="86%"><input type="text" class="form-control" name="padrevar" id="padrevar" placeholder="Nombre completo Padre" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled required></td>
            </tr>
		  </table>
		  
		   <table width="100%" name="dmatri2" id="dmatri2" style="display: none">
            <tr>
             <td width="14%">Fecha boda:</td>
				<td width="30%"><input type="date" class="max-today form-control" name="fechabvar" id="fechabvar"  min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}" style="width: auto" disabled></td>
			<td rowspan="2" width="2%">
           <td width="14">Lugar Boda:</td>
				<td width="40%"><input type="text" class="form-control" name="lugarvar" id="lugarvar" placeholder="Lugar de la Boda" style="text-transform: none" onkeypress="return soloLetras(event);" required disabled></td>
            </tr>
		<tr>
                <td>Quién caso:</td>
			<td ><input type="text" class="form-control" name="txtotrovar" id="txtotrovar" onKeyPress="return soloLetras(event);" placeholder="Cargo"  required disabled> 
				
			</td>
               <td >Nombre:</td>
         
				<td ><input type="text" class="form-control" disabled name="notariovar" id="notariovar" placeholder="Nombre del celebrante" style="text-transform: uppercase" onkeypress="return soloLetras(event);" required></td>
               
            </tr>
							  </table>	
						
	<table width="100%" name="foliacionvar3" id="foliacionvar3" style="display:none">
			<tr>
		  <td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de la partida a Marginar</span></h4></td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="aniovar2" onblur="return validarRango(this);"  maxlength="4" id="aniovar2" required disabled></td>
			<td rowspan="2" width="2%"></td>
				<td width="14%" >Libro:</td>
				<td width="35%"><input type="text" class="form-control" name="librovar2" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librovar2" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numvar2" id="numvar2" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Tipo:</td>
				<td >
					
					<SELECT name="tipopartuto3" class="form-control seleccion" id="tipopartuto3" required disabled>
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					
					
					<input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>						
	
						
			  </table>	
						
	<table width="100%"  name="foliacionvar4" id="foliacionvar4" style="display: none">


			<tr>
			  <td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de la partida a Marginar (Reposición)</span></h4></td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="aniovar3" onblur="return validarRango(this);"  maxlength="4" id="aniovar3" required disabled></td>
			
				<td rowspan="2" width="2%"></td>
			  <td width="14%" >Libro:</td>
				<td width="35%"><input type="text" class="form-control" name="librovar3" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="librovar3" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numvar3" id="numvar3" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Tipo:</td>
				<td >
					
					<SELECT name="tipopartuto2" class="form-control seleccion" id="tipopartuto2" required disabled>
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida ");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					
					
					<input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>				
						
						
						
						
			  <div class="modal-footer" id="variasdiv">
			
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	


	</div>







<div id="perdidanac" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="perrecnacform" id="perrecnacform" autocomplete="off">
					<div class="modal-header">	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>					
						<h4 class="modal-title">Marginaciones de <b><font color="#121c4e">Pérdida o Recuperación de Nacionalidad</font></b></h4>
						
					</div>
					<div class="modal-body">

				
			  <table width="100%">
            <tr><td colspan="4"> <p>Seleccione la Marginación a crear: </td></tr>
             <tr><td colspan="4">     <input type="radio"  id="tipo1pr" name="perdinac"  value="perdida" required />
  
      <label for="tipo1pr">Pérdida&nbsp;</label>
  <input type="radio" id="tipo2pr" name="perdinac" value="recuperacion"   required/>
  <label for="tipo2pr">Recuperación&nbsp;</label>

<input type="hidden" name="edit_idprnac" id="edit_idprnac" ><input type="hidden" name="margpdfprnac" id="margpdfprnac" >
				
				</td></tr>
				  
				 
 </table>
						
						
						
				  <table width="100%" name="perrecnac1" id="perrecnac1" style="display: none">

<tr>

<td width="25%">Sexo:</td>

<td><input type="radio"  id="sexonac1prnac" name="sexo1prnac" value="femenino" required disabled />
  <label for="sexonac1prnac">Femenino&nbsp;</label>
  <input type="radio"  id="sexonac2prnac" name="sexo1prnac" value="masculino" required disabled />
  <label for="sexonac2prnac">Masculino&nbsp;</label></td>








					 </tr>


					
							<tr><td >Nombre:</td><td><input type="text" class="form-control" disabled name="nombreprnac" id="nombreprnac" placeholder="Nombre del inscrito" style="text-transform: uppercase" onkeypress="return soloLetras(event);" required></td></tr>
							<tr>
 <td ><input type="checkbox"  value="conocidoprnac" name="conocidoprnac" onChange="conotxtprnac.disabled = !this.checked;conotxtprnac.focus()" id="conocidoprnac" onClick="conotxtprnac.value=''">
					        <label for="conocidoprnac">Conocid@ por:&nbsp;&nbsp;&nbsp;</label></td>
					      <td ><input id="conotxtprnac" type="text" class="form-control" name="conotxtprnac"  onKeyPress="return soloLetras(event);" style="text-transform: uppercase" required disabled></td>



							</tr>


						</table>
							
					<table width="100%" name="sentenciaprnac" id="sentenciaprnac" style="display: none">	  
				  
            <tr>
				<td colspan="4">
	              <input type="checkbox" class="form-check-input ecuvar1" value="sentenciaprnac1" name="chksentenciaprnac" id="chksentenciaprnac" disabled><label for="chksentenciaprnac">&nbsp;Fecha y Lugar de Sentencia RREE:&nbsp;</label></td></tr>
				</table>
					
				<table width="100%" name="senprnac" id="senprnac" style="display: none">
            <tr><td rowspan="2" width="14%"></td> <td width="8%"><input type="checkbox" class="form-check-input flat-red" value="horaprnac" name="horaprnac" onchange="timeprnac.disabled = !this.checked"  id="horaprnac" disabled><label for="horaprnac">&nbsp;Hora:&nbsp;</label></td>
				<td width="10%"><input type="time" class="form-control" required name="timeprnac" id="timeprnac" disabled style="width: auto"></td>
				<td width="8%"><input type="checkbox" class="form-check-input flat-red" value="fechaprnac" name="fechaprnac" onchange="fechaprnacdate.disabled = !this.checked"  id="fechaprnac"  disabled ><label for="fechaprnac">&nbsp;Fecha:&nbsp;</label></td>
				<td width="55%"><input type="date" class="max-today form-control" name="fechaprnacdate"  id="fechaprnacdate" min="1900-01-01" max="2030-12-31" required pattern="\d{4}-\d{2}-\d{2}"  style="width: auto" disabled></td>
				</tr>
				<tr>
				  <td >
					  <input type="checkbox" class="form-check-input flat-red" value="porprnac" name="porprnac" onchange="porprnactxt.disabled = !this.checked" id="porprnac" disabled ><label for="porprnac">&nbsp;Por:&nbsp;</label>
					</td>
				  <td colspan="3" >
					
					<input type="text" class="form-control" placeholder="Nombre de la Institución" name="porprnactxt1" id="porprnactxt" onkeypress="return soloLetras(event);" required disabled>
					</td>
				  </tr>	
					
				</table>	
						
						
						
		
						
						
						
				  <table  name="foliacionprnac" id="foliacionprnac" style="display: none" width="100%">
			<tr><td colspan="5" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la partida a marginar </span></h4></td><tr>
			<tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" placeholder="Año de Libro" name="anioprnac" onblur="return validarRango(this);"  maxlength="4" id="anioprnac" required disabled></td>
			<td rowspan="2" width="2%"></td>
				
				<td width="14%" >Libro:</td>
				<td width="365"><input type="text" class="form-control" name="libroprnac" style="text-transform:uppercase;" value="" placeholder="# de Libro"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="4" id="libroprnac" required disabled></td>
            </tr>
				<tr>  
			<td >Num. Partida:</td>
				<td ><input type="text" class="form-control" maxlength="5" name="numprnac" id="numprnac" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# de Partida" required disabled></td>
			<td >Tipo:</td>
				<td >
					
					
					<SELECT name="tipoparprnac" class="form-control seleccion" id="tipoparprnac" required >
    <?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida where grupo_partida = '1'");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
    </SELECT>
					
					
					
					<input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>
			  <div class="modal-footer" id="autoprnac">
				  
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	</div>



































<div id="otras" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="otroform" id="otroform" autocomplete="off">
					<div class="modal-header">						
						<h4 class="modal-title"> Marginación <b><font color="#121c4e">Vacia (Otro)</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            <tr><td colspan="4">Utiliza este opción cuando la marginación no este contemplada en este sistema
  </td></tr></table>
 
   <table name="tableotr" id="tableotr" style="display:" width="100%">
	   <tr>
	   <td width="14%">Tipo de Marginación:</td>
		   
		   
		   
		   
		   <td width="86%">
		   <select class="form-control"  name="tipomargvacia" id="tipomargvacia" required >
					    <?php
  $query2 = $mysqli -> query ("SELECT * FROM tipo_marginacion");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[codigo].'" >'.$valores2[tipo].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
			   
			   
			   
					</select>
		   
		   
		   
		   </td>
	   
	   
	   
	   </tr>
	  
	   
	   
              <tr>
				<td width="20%">Texto:</td>
				<td ><textarea class="form-control" name="txtotra" id="txtotra" placeholder="Digita el texto de la marginación sin punto final, sin datos de alcaldía ni fecha de creación" onkeypress="return soloLetras(event);" rows="5" cols="33" required></textarea>
			    <input type="hidden" name="edit_idotr" id="edit_idotr" >
				  <input type="hidden" name="margpdfotr" id="margpdfotr" >
					
				  </td>
          
            </tr>
			<tr>
				<td><th ><input  type="checkbox"  name="chkfecha" id="chkfecha" value="chkfecha"><label for="chkfecha">Con fecha Actual</label></th></td>

<tr><td></td>

				<td colspan="3">. Alcaldía de San Salvador.........................</td>
				
            </tr></table>
			 <table name="tableotra" id="tableotra" style="display:" width="100%">
				<tr><td colspan="4" align="center"><h4><span class="label label-primary">Digita los datos de folicación de la  partida a marginar</span></h4></td><tr>
			  <tr>  
			<td width="25%">Año:</td>
				<td width="25%" ><input type="text" class="form-control validar" name="aniootr" id="aniootr" onblur="return validarRango(this);"  maxlength="4" placeholder="Año de Libro" required></td>
			<td width="25%" align="center">Libro Part.:</td>
				<td width="30%"><input type="text" class="form-control" name="librootr" maxlength="4" id="librootr" placeholder="# de Libro" style="text-transform: uppercase;" required ></td>
            </tr>
				<tr>  
			<td width="25%">Num. Part.:</td>
				<td width="30%"><input type="text" class="form-control" name="numotr" id="numotr" maxlength="5" placeholder="# de Partida" style="text-transform: uppercase;" required></td>
				<td align="center">Tipo:</td>
				<td><select class="form-control" style="width: auto" name="tipootr" id="tipootr" required >
					<?php

          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida ");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>
						
					</select><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
				</tr>
			
			</table>
						
						
				 
			
			
       
			<div class="modal-footer">

						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>

<div id="reportemensual" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form role="form" name="repofrm" id="repofrm" autocomplete="off" action="ajax/reportepdf.php" method="post"  enctype="multipart/form-data"  target="_blank" >
				  <div class="modal-header">						
						<h4 class="modal-title"> Reporte <b><font color="#121c4e">Mensual</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


			
			  <table name="fechas" id="fechas" style="display:">
<tr><td colspan="4">Selecciona el rango de fechas en las que desear generar el reporte:</td></tr>
              <tr>
				<td width="20%">Inicio:</td>
				<td ><input type="date" class="max-today form-control" name="Fechaini"  required placeholder="YYYY-MM-DD" style="width: auto">
			
				  </td><td width="20%">&nbsp;&nbsp;Final:</td><td width="91%" colspan="3"><input type="date" class="max-today form-control" name="Fechafin"  required placeholder="YYYY-MM-DD" style="width: auto">
          
            </tr>
			</table>
				 
						
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Crear PDF" id="btnrepo" name="btnrepo">

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>

 <div id="alerta5"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">Debes de seleccionar al menos una de las opciones de Sentencia Juzgado</font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>
</div>
	<div id="alerta6"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">Debes de seleccionar al menos una de las opciones de Ejecutoría Juzgado</font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>

<div id="alerta1"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">Debes de seleccionar al menos una de las opciones de Resolución Exterior</font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>
</div>
</div>
<div id="alerta2"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">Debes de seleccionar al menos una de las opciones de Resolución de la Corte Suprema de Justicia</font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>

<div id="alerta3"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">Debes de seleccionar al menos una de las opciones de Resolución Juzgado</font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>

<div id="alerta4"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">Debes de seleccionar al menos una de las opciones de Resolución por Oficio</font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>

<div id="alertaanio"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">Debes de digitar un año comprendido en el rango entre 1880 y <?php echo date("Y");?></font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>


<div id="imprealerta"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">No puedes imprimir si haces busqueda por nombre ó si el campo buscar esta vacio, para poder imprimir un folio debes de hacer una consulta bajo el formato Libro-Folio (000-00)</font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>


<div id="apercierre" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="frmapertura" id="frmapertura" role="form" autocomplete="off" action="ajax/aperturapdf.php" method="post"  enctype="multipart/form-data"  target="_blank" >
					<div class="modal-header">						
						<h4 class="modal-title"> Crear <b><font color="#121c4e">Aperturas y Cierres</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body ui-front">


				
			  <table >
            <tr><td > <p> Seleccione el tipo de partida:&nbsp;&nbsp;</td ></tr>
				  <tr><td >
  <input type="radio"  id="tipo1ac" name="apercier" value="nacimiento" required />
  <label for="tipo1ac">Nacimiento&nbsp;</label>
  <input type="radio"  id="tipo2ac" name="apercier" value="defuncion" required />
  <label for="tipo2ac">Defunción&nbsp;</label>
  <input type="radio"  id="tipo3ac" name="apercier" value="matrimonio" required />
  <label for="tipo3ac">Matrimonio&nbsp;</label>
	 <input type="radio"  id="tipo4ac" name="apercier" value="divorcio" required />
  <label for="tipo4ac">Divorcio&nbsp;</label>				  
					  
					  </td></tr>
	<tr><td >
  <input type="radio"  id="tipo5ac" name="apercier" value="regimen" required />
  <label for="tipo5ac">Regímen&nbsp;</label>
  <input type="radio"  id="tipo6ac" name="apercier" value="reposicion" required />
  <label for="tipo6ac">Reposiciones&nbsp;</label>
  <input type="radio"  id="tipo7ac" name="apercier" value="reservado" required />
    <label for="tipo7ac">Reservado</label>
	 <input type="radio"  id="tipo8ac" name="apercier" value="actas" required />
  <label for="tipo8ac">Actas&nbsp;</label>				  
					  
					  </td></tr>			  
				  
 </table>
						

	   <table name="tipoapercie" id="tipoapercie" style="display: none">
		   <tr><td colspan="2">&nbsp;</td></tr>
	    <tr>
		<td>Seleccione:&nbsp;&nbsp;&nbsp;</td><td><input type="radio"  id="aper1" name="tipoac1" value="apertura1" required disabled />
  <label for="aper1">Apertura&nbsp;</label>
  <input type="radio" class="form-check-input cierre" id="aper2" name="tipoac1" value="cierre1" required disabled />
  <label for="aper2">Cierre&nbsp;</label></td>
		
          </tr>
		   </table>
						
		<table name="tipoapercie2" id="tipoapercie2" style="display: none">
		   <tr><td colspan="2">&nbsp;</td></tr>
	    <tr>
		<td>Seleccione:&nbsp;&nbsp;&nbsp;</td><td><input type="radio"  id="aper11" name="tipoac11" value="apertura11" required disabled />
  <label for="aper11">Apertura&nbsp;</label>
  <input type="radio" class="form-check-input cierre" id="aper21" name="tipoac11" value="cierre11" required disabled />
  <label for="aper21">Cierre&nbsp;</label></td>
		
          </tr>
		   </table>				
	
<table name="tipoapercie3" id="tipoapercie3" style="display: none">
		   <tr><td colspan="2">&nbsp;</td></tr>
	    <tr>
		<td>Seleccione:&nbsp;&nbsp;&nbsp;</td><td><input type="radio"  id="aper12" name="tipoac12" value="apertura12" required disabled />
  <label for="aper12">Apertura&nbsp;</label>
  <input type="radio" class="form-check-input cierre" id="aper22" name="tipoac12" value="cierre12" required disabled />
  <label for="aper22">Cierre&nbsp;</label></td>
		
          </tr>
		   </table>						

	
						
						
						
						
	   <table width="100%" name="numerolibro" id="numerolibro" style="display: none">
              <tr>
				<td width="25%">Número de Libro:</td>
				<td ><input type="text" class="form-control validar" name="nlibronac" required id="nlibronac" value="" placeholder="Número de Libro" style="width: 146px" maxlength="3" disabled>
			    				  </td>
          
            </tr>
		   </table>
		   <table width="100%" name="fechainicio" id="fechainicio" style="display: none">
            <tr>
				
                <td width="25%">Fecha de Inicio:</td>
				<td ><input type="date" class="max-today form-control" name="Fechanac1" id="Fechanac1" required placeholder="YYYY-MM-DD" style="width: auto" disabled /></td>
            </tr>
		   </table>
			<table width="100%" name="tblefectiva" id="tblefectiva" style="display:none">
			
			<tr><td align="center">Sin Efecto:&nbsp;<input type="text" class="form-control validar" name="nsinefecto" id="nsinefecto" value="0" placeholder="# Marginación" style="width: 100px" maxlength="3" required disabled></td>
			<td align="center">Inhabilitados:&nbsp;
			    <input type="text" class="form-control validar" name="ninhabilitado" value="0" id="ninhabilitado" placeholder="# Marginación" style="width: 100px" maxlength="3" required disabled></td></tr>	
			</table>
			<br>			
			<table width="100%" name="datosnac" id="datosnac" style="display:none ">
				<tr><td colspan="2"><b>Datos de la primera Partida de Nacimiento</b></td></tr>	
				<tr><td width="25%">Sexo:</td><td><input type="radio"  id="sexonac1" name="sexo1nac" value="femenino" required disabled />
  <label for="sexonac1">Femenino&nbsp;</label>
  <input type="radio"  id="sexonac2" name="sexo1nac" value="masculino" required disabled />
  <label for="sexonac2">Masculino&nbsp;</label></td></tr>		
				<tr>
				  <td>Nombre Menor:</td><td><input type="text" class="form-control" name="nmenor1" required id="nmenor1" value="" placeholder="Nombre completo del menor" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>			
				<tr>
				  <td>Nombre Madre:</td><td><input type="text" class="form-control" name="madre1" required id="madre1" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>	
				<tr>
				  <td><input type="checkbox"  name="chkpadre1" id="chkpadre1"  value="padre1" onchange="padre1.disabled = !this.checked" disabled><label for="chkpadre1">Nombre Padre:</label></td><td><input type="text" class="form-control" name="padre1" required id="padre1" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>	
				<tr><td colspan="2"><b>Datos de la última Partida de Nacimiento</b></td></tr>	
				<tr><td>Sexo:</td><td><input type="radio"  id="sexonac3" name="sexo2nac" value="apertura1" required disabled />
  <label for="sexonac3">Femenino&nbsp;</label>
  <input type="radio"  id="sexonac4" name="sexo2nac" value="sexonac4" required disabled />
  <label for="sexonac4">Masculino&nbsp;</label></td></tr>		
				<tr>
				  <td>Nombre Menor:</td><td><input type="text" class="form-control" name="nmenor2" required id="nmenor2" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>			
				<tr>
				  <td>Nombre Madre:</td><td><input type="text" class="form-control" name="madre2" required id="madre2" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>	
				<tr>
				  <td><input type="checkbox"  onchange="padre2.disabled = !this.checked" name="chkpadre2" id="chkpadre2" value="padre2" disabled><label for="chkpadre2">Nombre Padre:</label></td><td><input type="text" class="form-control" name="padre2" required id="padre2" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>			
						</table>			
				
	<table width="100%" name="tbldef" id="tbldef" style="display:none ">
			<tr><td width="25%">Primera Partida:</td><td><input type="text" class="form-control" name="npdef1" required id="npdef1" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>			
			<tr><td>Última Partida:</td><td><input type="text" class="form-control" name="npdef2" required id="npdef2" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>			
						
						
						
						</table>					
						
		<table width="100%" name="tblmat" id="tblmat" style="display:none">
			<tr><td colspan="2"><b>Datos de la primera Partida</b></td></tr>
			<tr><td width="25%">Nombre de Ella:</td><td><input type="text" class="form-control" name="npmat1" required id="npmat1" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>	
			<tr><td width="25%">Nombre de El:</td><td><input type="text" class="form-control" name="npmat2" required id="npmat2" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>	
			<td colspan="2"><b>Datos de la última Partida</b></td></tr>
			<tr><td>Nombre de Ella:</td><td><input type="text" class="form-control" name="npmat3" required id="npmat3" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>			
			<tr><td width="25%">Nombre de El:</td><td><input type="text" class="form-control" name="npmat4" required id="npmat4" value="" placeholder="Nombre completo" style="text-transform: uppercase" onkeypress="return soloLetras(event);" disabled></td></tr>				
						
						
						</table>				
						
						
						
						
			 <table width="100%" name="fechafinal" id="fechafinal" style="display: none">
            <tr>
				
                <td width="25%">Fecha de Finalización:</td>
				<td ><input type="date" class="max-today form-control" name="Fechanac2" id="Fechanac2" required placeholder="YYYY-MM-DD" style="width: auto" disabled /></td>
            </tr>
		   </table>	 
			
			
       
			<div class="modal-footer" id="apernac">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Crear PDF" id="btnaper2" name="btnaper2">

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>

<div id="alertanac"  data-backdrop="static" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: ;">
		<div class="modal-dialog ">
			<div class="modal-content">
					  <div class="modal-header">						
						<h4 class="modal-title"> Revisa el <b><font color="#121c4e">Formulario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">
					<center>	<big><big><big><font color="#34495e">Debes de seleccionar al menos una de las siguientes opciones: <br>
				    Sin Efecto -- Inhabilitados</font></big></big></big></center>
						
				  <div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" >

				  </div>

			</div>
		</div>
	</div>
		</div>
</div>

<div id="cambiarcontra" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="cambiarcontrafrm" id="cambiarcontrafrm" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Cambiar <b><font color="#121c4e"> Contraseña</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            <tr>
             <td width="30%">Contraseña anterior:</td>
				<td ><input type="password" class="form-control" name="passanterior" placeholder="Password"  required ></td>
			
			
			</tr><tr>
             <td>Nueva Contraseña:</td>
				<td ><input type="password" class="form-control" name="newcontra" placeholder="Repite Password"   required ></td>
			
			</tr>	  
				  
			
			<tr>
				<td >Verificar:</td>
                
				<td ><input type="password" class="form-control" name="verificarcambiar" id="verificarcambiar" placeholder="Repetir Password"   required ><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>				 
			
			
       
			<div class="modal-footer">
			
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	
	
	</div>

<div id="recuperarcontra" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="recuperacon" id="recuperacon" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Recuperar <b><font color="#121c4e"> Contraseña</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
			  <table width="100%">
            
   
              <tr>
				<td width="20%">Pregunta secreta:</td>
				<td ><?php

           if($pregunta=='1'){
			   $preg = "¿Cuál era el nombre de tu primera mascota?";
			   }
		   if($pregunta=='2'){
			   $preg = "¿Cuál era el nombre de tu mejor amigo/a de la infancia?";
			   }
			 if($pregunta=='3'){
			   $preg = "¿Cuál era tu apodo de pequeño/a?";
			   }
			 if($pregunta=='4'){
			   $preg = "¿Cuál es tu comida favorita?";
			   }
			if($pregunta=='5'){
			   $preg = "¿En que país te gustaría vivir?";
			   }
			if($pregunta=='6'){
			   $preg = "¿Cómo se llamaba la primera escuela a la que asististe?";
			   }		
					
	echo $preg;
		
			
			
	?>
			    </td>
          
            </tr>
            <tr>
				
                <td>Respuesta:</td>
				<td ><input type="text" class="form-control lowercase" name="respuesta1" id="respuesta1" placeholder="Respuesta"  required><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
            </tr>
			
				  </table>				 
			
			
       
			<div class="modal-footer">

						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Datos" id="recuperac" name="recuperac">

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	
	
	</div>

<div id="revision" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="revform" id="revform" autocomplete="off">
					
					<div class="modal-header">						
						<h4 class="modal-title"> Revisión de <b><font color="#121c4e">Operador</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body ">

				
		 
   <table name="tablerev" id="tablerev" width="100%">
              <tr>
				<td width="14%">
Texto:</td>
				<td width="86"><textarea class="form-control" name="textorev" id="textorev" onkeypress="return soloLetras(event);" rows="5" cols="33" required></textarea>
			    <input type="hidden" name="editidrev" id="editidrev" >
			
					
				  </td>
          
            </tr>
			</table>
			 <table name="tablerev2" id="tablerev2" width="100%">
				<tr><td colspan="5" align="center"><h4><span class="label label-primary">Foliación de la partida a Marginar</span></h4></td><tr>
			  <tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" name="aniorev" id="aniorev" onblur="return validarRango(this);"  maxlength="4" placeholder="Año de Libro" required></td>
			<td rowspan="2" width="2%"></td>
				  
				  <td width="14%" >Libro Part.:</td>
				<td width="30%"><input type="text" class="form-control" name="librorev" maxlength="4" id="librorev" placeholder="# de Libro" style="text-transform: uppercase;" required ></td>
            </tr>
				<tr>  
			<td >Num. Part.:</td>
				<td ><input type="text" class="form-control" name="numrev" id="numrev" maxlength="5" placeholder="# de Partida" style="text-transform: uppercase;" required></td>
				<td >Tipo:</td>
				<td><select class="form-control" style="width: auto" name="tiporev" id="tiporev" required >
						    		 <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
						
					</select><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
				</tr>
			
			</table>
						
				
			<div class="modal-footer">

						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Revisión" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>
	
	
	
	<div id="control" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="revform2" id="revform2" autocomplete="off">
					<div class="modal-header">						
						<h4 class="modal-title"> Revisión de <b><font color="#121c4e">Control de Calidad</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body">


				
		 
   <table name="tablerev2" id="tablerev2" width="100%">
              <tr>
				<td width="14%">Texto:</td>
				<td width="86%"><textarea class="form-control" name="textorev2" id="textorev2" onkeypress="return soloLetras(event);" rows="5" cols="33" required></textarea>
			    <input type="hidden" name="editidrev2" id="editidrev2" >
				  <input type="hidden" name="margpdfrev2" id="margpdfrev2" >
					
				  </td>
          
            </tr>
			</table>
			 <table name="tablerev2" id="tablerev2" width="100%">
				<tr><td colspan="5" align="center"><h4><span class="label label-primary">Foliación de la partida a Marginar</span></h4></td><tr>
			  <tr>  
			<td width="14%">Año:</td>
				<td width="35%" ><input type="text" class="form-control validar" name="aniorev2" id="aniorev2" onblur="return validarRango(this);"  maxlength="4" placeholder="Año de Libro" required></td>
			
				  <td rowspan="2" width="2%"></td>
				  <td width="14%" >Libro Part.:</td>
				<td width="35%"><input type="text" class="form-control" name="librorev2" maxlength="4" id="librorev2" placeholder="# de Libro" style="text-transform: uppercase;" required ></td>
            </tr>
				<tr>  
			<td >Num. Part.:</td>
				<td ><input type="text" class="form-control" name="numrev2" id="numrev2" maxlength="5" placeholder="# de Partida" style="text-transform: uppercase;" required></td>
				<td >Tipo:</td>
				<td><select class="form-control" style="width: auto" name="tiporev2" id="tiporev2" required >
						    		 <?php
	
          $query2 = $mysqli -> query ("SELECT * FROM tipo_partida");
          while ($valores2 = mysqli_fetch_array($query2)) {
            echo '<option value="'.$valores2[iniciales_partida].'">'.$valores2[nombre_partida].'&nbsp;&nbsp;&nbsp;&nbsp;</option>';
          }
        ?>	
						
					</select><input type="hidden" value="<?php echo $inicialesuser?>" name="edit_ini" ></td>
				</tr>
			
			</table>
						
				
			<div class="modal-footer">

						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary" value="Guardar Revisión" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
			</div>
	

<div id="notarios" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="notario" id="notario" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Agregar <b><font color="#121c4e">Funcionario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body ui-front">


				
			  <table >

   
			
			<tr>
                <td>Cargo Jurídico:</td>
				<td ><input type="text" class="form-control" name="optionsboF" id="optionsF" placeholder="Cargo Jurídico"  onkeypress="return soloLetras(event);"  required></td>
               
            </tr>
				 
				  <tr>
                <td width="20%">Nombre Completo:</td>
				<td ><input type="text" class="form-control" name="NFnotario" id="NFnotario" placeholder="Nombre del Funcionario" onkeypress="return soloLetras(event);" required></td>
               
            </tr>
			
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>



<div id="notariosedi" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="notarioedi" id="notarioedi" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Editar <b><font color="#121c4e">Funcionario</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body ui-front">


				
			  <table >

				 <tr>
                <td width="20%">Funcionario a Editar:</td>
				<td ><input type="text" class="form-control" name="NFnotariob" id="NFnotariob" placeholder="Nombre del Funcionario" onkeypress="return soloLetras(event);" oninput="limpiar()" required></td>
               
            </tr>
			  
				  
				  
   
			
			<tr>
                <td>Cargo Jurídico:</td>
				<td ><input type="text" class="form-control" name="optionsboFe" id="optionsboFe" placeholder="Cargo Jurídico" onkeypress="return soloLetras(event);"  required></td>
            </tr>
				 
				  <tr>
                <td width="20%">Nombre Completo:</td>
				<td ><input type="text" class="form-control" name="NFnotarioe" id="NFnotarioe" placeholder="Nombre del Funcionario" onkeypress="return soloLetras(event);" required><input type="hidden" class="form-control" name="IDENOTARIO" id="IDENOTARIO" placeholder="Nombre del Funcionario" style="text-transform: uppercase"  required></td>
               
            </tr>
				  </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>


<div id="lugares" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="lugara" id="lugara" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Agregar <b><font color="#121c4e">Municipio/Estado</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table >

   
			
			<tr>
                <td >Lugar:&nbsp;&nbsp;</td>
				<td width="100%" ><input type="text" class="form-control" name="Lugare" id="Lugare" placeholder="Lugar a guardar" onkeypress="return soloLetras(event);"  required></td>
               
            </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>



<div id="lugaresedi" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="lugaraedi" id="lugaraedi" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Editar <b><font color="#121c4e">Municipio/Estado</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table >

   <tr>
                <td >Buscar:&nbsp;&nbsp;</td>
				<td width="100%" >
					
					
						<input type="text" class="form-control" name="Lugaredit" id="Lugaredit" placeholder="Lugar a buscar" onkeypress="return soloLetras(event);"  oninput="limpiarlugar()"  required>
	   
	   
	   </td>
               
            </tr>
			
			<tr>
                <td >Lugar:&nbsp;&nbsp;</td>
				<td width="100%" ><input type="text" class="form-control" name="editarlugar" id="editarlugar" placeholder="Lugar a guardar" onkeypress="return soloLetras(event);"  required><input type="hidden" class="form-control" name="IDELUGAR" id="IDELUGAR" placeholder="Nombre del Funcionario" style="text-transform: uppercase"  required></td>
               
            </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>



<div id="cargosj" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="cargoa" id="cargoa" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Agregar <b><font color="#121c4e">Cargos Jurídicos</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table >

   
			
			<tr>
                <td >Lugar:&nbsp;&nbsp;</td>
				<td width="100%" ><input type="text" class="form-control" name="cargoe" id="cargoe" placeholder="Lugar a guardar" onkeypress="return soloLetras(event);"  required></td>
               
            </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>



<div id="cargoedi" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="frmcargo" id="frmcargo" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Editar <b><font color="#121c4e">Cargos Jurídicos</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table >

   <tr>
                <td >Buscar:&nbsp;&nbsp;</td>
				<td width="100%" >
					
					
						<input type="text" class="form-control" name="cargotxt" id="cargotxt" placeholder="Cargo Jurídico a buscar" onkeypress="return soloLetras(event);" oninput="limpiarcargo()" required>
	   
	   
	   </td>
               
            </tr>
			
			<tr>
                <td >Lugar:&nbsp;&nbsp;</td>
				<td width="100%" ><input type="text" class="form-control" name="editcargo" id="editcargo" placeholder="Cargo Jurídico a editar" onkeypress="return soloLetras(event);"  required><input type="hidden" class="form-control" name="IDECARGO" id="IDECARGO" placeholder="Nombre del Funcionario" style="text-transform: uppercase"  required></td>
               
            </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>





<div id="regimenesp" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="regimena" id="regimena" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Agregar <b><font color="#121c4e">Régimen Patrimonial</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table >

   
			
			<tr>
                <td >Lugar:&nbsp;&nbsp;</td>
				<td width="100%" ><input type="text" class="form-control" name="regimenp" id="regimenp" placeholder="Régimen Patrimonial a guardar" onkeypress="return soloLetras(event);"  required></td>
               
            </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>



<div id="regimenedit" class="modal fade" spellcheck="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<form name="frmregimen" id="frmregimen" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title">Editar <b><font color="#121c4e">Régimen Patrimonial</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table >

   <tr>
                <td >Buscar:&nbsp;&nbsp;</td>
				<td width="100%" >
					
					
						<input type="text" class="form-control" name="regiedit" id="regiedit" placeholder="Régimen a buscar" onkeypress="return soloLetras(event);" oninput="limpiarregimen()" required>
	   
	   
	   </td>
               
            </tr>
			
			<tr>
                <td >Lugar:&nbsp;&nbsp;</td>
				<td width="100%" ><input type="text" class="form-control" name="regimened" id="regimened" placeholder="Régimen a editar" onkeypress="return soloLetras(event);"  required><input type="hidden" class="form-control" name="IDEREGIMEN" id="IDEREGIMEN" placeholder="Nombre del Funcionario" style="text-transform: uppercase"  required></td>
               
            </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>


<div id="cambioestado" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="tipoestado" id="tipoestado" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Editar Lugar de Revisión de<b><font color="#121c4e"> Marginación</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table width="100%">

   <tr>
                <td width="6%">Libro:&nbsp;&nbsp;</td>
				<td width="14%" >
					
					
						<input type="text" class="form-control validar" name="libestado" id="libestado" oninput="limpiarregimen()" maxlength="3" required>
	   
	   
	   </td>
               
          <td width="2%">
                <td width="10%">Marginación:&nbsp;&nbsp;</td>
				<td width="10%" ><input type="text" class="form-control validar" name="margestado" id="regimened" maxlength="4"   required></td>
              
	   <td width="2%">
	   
	   <td width="56%">
	   
	    						<input type="radio"  id="estado4" name="estadom" value="revisado1"  required />
					   
					        <label for="estado4">Rev. Operador&nbsp;&nbsp;</label>


	     					<input type="radio"  id="estado1" name="estadom" value="revisado2"  required />
					   
					        <label for="estado1">Rev. Marginaciones&nbsp;&nbsp;</label>
					        <input type="radio"  id="estado2" name="estadom" value="revisado3" required />
					        <label for="estado2">Rev. Control Calidad&nbsp;&nbsp;</label>
					        <input type="radio"  id="estado3" name="estadom" value="completo" required />
					        <label for="estado3">Completo&nbsp;&nbsp;</label>
					         
					        </p>
							
	   
	   
	   
	   
	   
	   
	   <td>
           
		 
				  </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>




<div id="sinefecto" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="sinefectoform" id="sinefectoform" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Cambiar el estado a<b><font color="#121c4e"> Sin Efecto</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table width="100%">

   <tr>
                <td width="6%">Libro:&nbsp;&nbsp;</td>
				<td width="14%" >
					
					
						<input type="text" class="form-control validar" name="libestadosf" id="libestadosf" oninput="limpiarregimen()" maxlength="3" required>
	   
	   
	   </td>
               
          <td width="2%">
                <td width="10%">Marginación:&nbsp;&nbsp;</td>
				<td width="10%" ><input type="text" class="form-control validar" name="margestadosf" id="margestadosf" maxlength="4"   required></td>
              
	   <td width="2%">
	   
	   <td width="56%">
	   
	     					<input type="radio"  id="estadose" name="estadoefecto" value="Sin_Efecto"  required />
					   
					        <label for="estadose">Sin efecto&nbsp;&nbsp;</label>
					        <input type="radio"  id="estadosa" name="estadoefecto" value="Activa" required />
					        <label for="estadosa">Activa&nbsp;&nbsp;</label>
					       
					        </p>
							
	   
	   
	   
	   
	   
	   
	   <td>
           
		 
				  </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>





<div id="validarccontrol" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="formvalidarccontrol" id="formvalidarccontrol" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Validar<b><font color="#121c4e"> Marginación</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table width="100%">

   <tr>
                
               
        
	   <td width="56%">Selecciona el tipo de validación:&nbsp;&nbsp;
	   
	     					<input type="radio"  id="validarmargiunoc" name="valimargic" value="error"  required />
					   
					        <label for="validarmargiunoc">Con error&nbsp;&nbsp;</label>
					        <input type="radio"  id="validarmargidosc" name="valimargic" value="activa" required />
					        <label for="validarmargidosc">OK - Validar&nbsp;&nbsp;</label>
					     <input type="hidden" value="" name="validaridc" id="validaridc">
					       <input type="hidden" value="" name="validariinidc" id="validariinidc">
					       <input type="hidden" value="" name="validaredidos" id="validaredidos">
					       <input type="hidden" value="" name="validarlugar" id="validarlugar">

					        </p>
							
	   
	   
	   
	   
	   
	   
	   <td>
           
		 
				  </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>



















<div id="vaciar" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="vaciarform" id="vaciarform" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Marginación no procede<b><font color="#121c4e"> Limpiar Datos</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
				  </div>
					<div class="modal-body ui-front">


				
			  <table width="100%">

   <tr>
                <td width="6%">Libro:&nbsp;&nbsp;</td>
				<td width="14%" >
					
					
						<input type="text" class="form-control validar" name="libestadovaciar" id="libestadovaciar" oninput="limpiarregimen()" maxlength="3" required>
	   
	   
	   </td>
               
          <td width="2%">
                <td width="10%">Marginación:&nbsp;&nbsp;</td>
				<td width="10%" ><input type="text" class="form-control validar" name="margestadovaciar" id="margestadovaciar" maxlength="4"   required></td>
              
	   <td width="2%">
	   
	   <td width="56%">
	   
	     					<input type="radio"  id="estadova" name="estadova" value="completo"  required />
					   
					        <label for="estadova">Limpiar Datos&nbsp;&nbsp;</label>
					       










					        </p>
							
	   
	   
	   
	   
	   
	   
	   <td>
           
		 
				  </tr>
				 
				
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>











<div id="tipopartida" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content ">
				<form name="frmtipopartida" id="frmtipopartida" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Agregar nuevo tipo de <b><font color="#121c4e">Partida</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body ui-front">


				
			  <table width="100%">

   
			
			<tr>
                <td width="14%">Nombre de Partida:</td>
				<td colspan="4"><input type="text" class="form-control" name="tipoagre" id="tipoagre"  onkeypress="return soloLetras(event);"  required></td>
               
            </tr>
				 
				  <tr>
                <td >Iniciales:</td>
				<td width="35%"><input type="text" class="form-control" name="tipoini" id="tipoini" onkeypress="return soloLetras(event);" required></td>
				<td width="2%"></td>	  
				<td width="14%">Grupo Único:</td>
				<td width="35%">
					
					
					
					<select name="grupouni" class="form-control seleccion" id="grupouni" required >
					        <option value="1">Nacimiento</option>
					        <option value="2" >Defunción</option>
					        <option value="3">Matrimonio</option>
					        <option value="5">Régimen Patrimonial</option>
							<option value="4">Divorcio</option>
					        <option value="7" >Acta de Matrimonio</option>
					        <option value="6">Unión no Matrimonial</option>
					       
					        </select></td>	  
					  
               
            </tr>
			
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>

<div id="tipopartidaedi" class="modal fade" spellcheck="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content ">
				<form name="frmtipopartidaedi" id="frmtipopartidaedi" autocomplete="off">
				  <div class="modal-header">						
						<h4 class="modal-title"> Editar tipo de <b><font color="#121c4e">Partida</font></b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="far fa-times-circle"></i></button>
					</div>
					<div class="modal-body ui-front">


				
			  <table width="100%">

   
			
			<tr>
                <td width="14%">Editar Partida:</td>
				<td colspan="4"><input type="text" class="form-control" name="tipoagreedibus" id="tipoagreedibus" onkeypress="return soloLetras(event);" oninput="limpiartipo()"  required><input type="hidden" class="form-control" name="idtipopartida" id="idtipopartida"  required></td>
               
            </tr>
				  <tr>
				  <td>Nombre de Partida:</td><td colspan="4"><input type="text" class="form-control" name="tipoagreedi" id="tipoagreedi" onkeypress="return soloLetras(event);"  required><input type="hidden" id="tipooculto" name="tipooculto"></td>
				  
				  </tr>
				 
				  <tr>
					 
                <td >Iniciales:</td>
				<td width="35%"><input type="text" class="form-control" name="tipoiniedi" id="tipoiniedi"  style="text-transform: uppercase" onkeypress="return soloLetras(event);" required></td>
				<td width="2%"></td>	  
				<td width="14%">Grupo Único:</td>
				<td width="35%">
					
					
					
					<select name="grupouniedi" class="form-control seleccion" id="grupouniedi" required >
					        <option value="1">Nacimiento</option>
					        <option value="2" >Defunción</option>
					        <option value="3">Matrimonio</option>
					        <option value="5">Régimen Patrimonial</option>
							<option value="4">Divorcio</option>
					        <option value="7" >Acta de Matrimonio</option>
					        <option value="6">Unión no Matrimonial</option>
					       
					        </select></td>	  
					  
               
            </tr>
			
	
			
				  </table>
	
					
				 
			
			
       
			<div class="modal-footer">
				
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
						<input type="submit" class="btn btn-primary cerrarModal" value="Guardar Datos" >

				
				
				  </div>
			  </form>
			
			</div>
		</div>
	</div>
	
	</div>
