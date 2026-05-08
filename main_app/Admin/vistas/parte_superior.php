<?php
date_default_timezone_set('America/Costa_Rica');

 ?>

<link rel="stylesheet" type="text/css" href="css/sb-admin-222.css">


   
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
   <h4><font size="+3" color="#FFFFFF"> <i class="fas fa-bars"></i></font></h4>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Menú</a>
        <div id="close-sidebar">
          <i class="far fa-times-circle"></i>
        </div>
      </div>
      
      <!-- sidebar-header  -->
      
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Administrador</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-users"></i>
              <span>Usuarios</span>
             
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnusuario" id="btnusuario" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#addusuario"><i class="fas fa-user-plus" style="color: #FFFFFF; ">&nbsp;Agregar Usuario</i></span></button></a>
                </li>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnusuarioedit" id="btnusuarioedit" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#editusuario">
			<i class="fas fa-user-edit" style="color: #FFFFFF; ">&nbsp;Editar Usuario</i></spam></button></a>
                </li>
           
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-users-cog"></i>
              <span>Asignación</span>
           
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btn" id="submitBtn" data-toggle="tooltip" data-placement="bottom" onclick="crearlibro()"><span class="stretched-link" data-toggle="modal" data-target="#libromarginaciones"><i class="fas fa-book" style="color: #FFFFFF; font-size: 12px" >&nbsp;Nuevo Libro</i></spam></button></a>
                </li>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnusuariof" id="btnusuariof" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#asignarfolio"><i class="fas fa-file-signature" style="color: #FFFFFF; font-size: 12px">&nbsp;Asignar Folio</i></spam></button></a>
                </li>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnusuariom" id="btnusuariom" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#asignarmarginacion"><i class="fas fa-file-invoice" style="color: #FFFFFF; font-size: 12px">&nbsp;Asignar Marginación</i></spam></button></a>
                </li>
				  <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnestado" id="btnestado" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#cambioestado"><i class="fas fa-file-invoice" style="color: #FFFFFF; font-size: 12px">&nbsp;Cambio de Área</i></spam></button></a>
                </li>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnsinefecto" id="btnsinefecto" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#sinefecto"><i class="fas fa-file-invoice" style="color: #FFFFFF; font-size: 12px">&nbsp;Sin Efecto</i></spam></button></a>
                </li>
                 <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnvaciar" id="btnvaciar" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#vaciar"><i class="fas fa-file-invoice" style="color: #FFFFFF; font-size: 12px">&nbsp;Vaciar no Procede</i></spam></button></a>
                </li>

              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-file-contract"></i>
              <span>Varios Documentos</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                 <a href="#"><button class="btn btn-link" type="button" name="btnreporte" id="btnreporte" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#reportemensual"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 12px">&nbsp;Reporte por Fecha</i></spam></button></a>
                </li>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnaper" id="btnaper" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#apercierre"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 12px">&nbsp;Aperturas y Cierres</i></spam></button></a>
                </li>
               
              </ul>
            </div>
          </li>
         
 
          <li class="header-menu">
            <span>Catálogos</span>
          </li>
                 <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-gavel"></i>
              <span>Funcionarios</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnafuncionario" id="btnafuncionario" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#notarios"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Agregar Funcionarios</i></spam></button></a>
                </li>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnefuncionario" id="btnefuncionario" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#notariosedi"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Editar Funcionarios</i></spam></button></a>
                </li>
              </ul>
            </div>
          </li>
      <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-map-marked-alt"></i>
              <span>Municipios</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnamunicipio" id="btnamunicipio" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#lugares"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Agregar Municipio</i></spam></button></a>
                </li>
                <li>
                 <a href="#"><button class="btn btn-link" type="button" name="btnlugar" id="btnlugar" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#lugaresedi"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Editar Municipios</i></spam></button></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-balance-scale"></i>
              <span>Cargos Jurídicos</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btncargos" id="btncargos" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#cargosj"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Agregar Cargo Jurídico</i></spam></button></a>
                </li>
                <li>
                 <a href="#"><button class="btn btn-link" type="button" name="btncargo" id="btncargo" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#cargoedi"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Editar Cargo Jurídico</i></spam></button></a>
                </li>
              </ul>
            </div>
          </li>
			          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-file-invoice-dollar"></i>
              <span>Regímenes Patrimoniales</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btnregimen" id="btnregimen" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#regimenesp"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Agregar Régimen Patrimonial</i></spam></button></a>
                </li>
                <li>
                  	<a href="#"><button class="btn btn-link" type="button" name="btnregimenedi" id="btnregimenedi" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#regimenedit"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Editar Régimen Patrimonial</i></spam></button></a>
                </li>
              </ul>
            </div>
          </li>
			          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-file-alt"></i>
              <span>Tipos de Partidas</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#"><button class="btn btn-link" type="button" name="btntipoagre" id="btntipoagre" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#tipopartida"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Agregar Tipo de Partida</i></spam></button></a>
                </li>
                <li>
                <a href="#"><button class="btn btn-link" type="button" name="btntipoagreedi" id="btntipoagreedi" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#tipopartidaedi"><i class="fas fa-file-alt" style="color: #FFFFFF; font-size: 11px">&nbsp;Editar Tipo de Partida</i></spam></button></a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>

  </nav>
  