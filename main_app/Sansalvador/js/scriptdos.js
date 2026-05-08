 $(function() {
			load(1);
		});
		function load(page){
$(".page-wrapper").removeClass("toggled");
			var query=$("#q").val();
			var per_page=4;
			var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/listar_productos.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		};


jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});







////////////// cerrar menú si se da click fuera de el
$(".container").click(function() {
  $(".page-wrapper").removeClass("toggled");
});


$(document).ready(function(){
           $(".modal").on('show.bs.modal', function () {
           $(".page-wrapper").removeClass("toggled");
    });
});



//////////////////////// MENU CAROUSSEL
$(document).ready(function() {
	var nStep = 5;
	var firstTab = $(".tab-pane:first-child").attr("id");
	var prevTab = $(".tab-pane.active")
		.prev()
		.attr("id");
	var nextTab = $(".tab-pane.active")
		.next()
		.attr("id");
	var lastTab = $(".tab-pane:last-child").attr("id");

	$(".progress-bar").text("Paso 1 de " + nStep);
	$(".back, .first, .submit").hide();

	$(".next").click(function() {
		var nextId = $(".tab-pane.active")
			.next()
			.attr("id");
		// alert(nextId + ' ? ' + lastTab);
		$('[href="#' + nextId + '"]').tab("show");

		$(".back, .first").css("display", "unset");
		if (nextId == lastTab) {
			$(".next").hide();
			$(".submit").css("display", "unset");
			// show submit button
		}

		return false;
	});

	$(".back").click(function() {
		var backId = $(".tab-pane.active")
			.prev()
			.attr("id");
		// alert(backId);
		$('[href="#' + backId + '"]').tab("show");

		$(".next").css("display", "unset");
		if (backId === "step1") {
			$(".back, .first").css("display", "none");
		}

		return false;
	});

	$(".nav-tabs li:first-child").click(function() {
		$(".back, .first").css("display", "none");
		$(".next").css("display", "unset");
	});

	$(".nav-tabs li:not(:first-child)").click(function() {
		$(".back, .first").css("display", "unset");
	});

	$(".nav-tabs li:last-child").click(function() {
		$(".next").css("display", "none");
		$(".submit").css("display", "unset");
	});

	$(".nav-tabs li:not(:last-child)").click(function() {
		$(".next").css("display", "unset");
	});

	$('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
		var step = $(e.target).data("step");
		var percent = parseInt(step) / nStep * 100;

		$(".progress-bar").css({ width: percent + "%" });
		$(".progress-bar").text("Paso " + step + " de " + nStep);
	});

	$(".first").click(function() {
		$('[href="#' + firstTab + '"]').tab("show");
		$(".back, .first").css("display", "none");
		$(".next").css("display", "unset");
	});
});




















$('#cambiarc').click(function() {
    document.getElementById("cambiarcontrafrm").reset(); 
	
	
 });

$('#btncargo').click(function() {
    document.getElementById("frmcargo").reset(); 
	
	
 });

$('#btnregimenedi').click(function() {
    document.getElementById("frmregimen").reset(); 
	
	
 });
$('#btntipoagre').click(function() {
    document.getElementById("frmtipopartida").reset(); 
	
	
 });

$('#btntipoagreedi').click(function() {
    document.getElementById("frmtipopartidaedi").reset(); 
	
	
 });






$(document).ready(function(){
$("#pdfimpdiv").hover(function(){
 var impresion=document.getElementById("tipoimpre").value;

   if (impresion === "nombre") {
	$('#imprealerta').modal('show');
	  $('#imprealerta').modal({backdrop: 'static', keyboard: false});   
 document.getElementById("lname").value =  '0';
 document.getElementById("nummar").value =  '0';
	
 document.getElementById("lname2").value =  '0';
 document.getElementById("nummar2").value = '0';
	
 document.getElementById("lname3").value =  '0';
 document.getElementById("nummar3").value =  '0';
	
 document.getElementById("lname4").value =  '0';
 document.getElementById("nummar4").value =  '0';  
	   
	
   }
});
});

	


	$("#marcador").on("click", function() {  
	$("#encabchk").prop("checked", this.checked);
  	$("#margchk1").prop("checked", this.checked);
	 $("#margchk2").prop("checked", this.checked);
	 $("#margchk3").prop("checked", this.checked);
	 $("#margchk4").prop("checked", this.checked);
});





$(document).ready(function(){
$("#variasdiv").hover(function(){
   if ($('.flat-red:checked').length == 0 & $('.ecuvar1:checked').length !== 0) {
     $('#alerta5').modal('show');
	  $('#alerta5').modal({backdrop: 'static', keyboard: false});
	   document.getElementById("senvar1").style.display = 'none';
	   $("#ejecuvar1").attr("checked", false);
   }else if ($('.flat-red2:checked').length == 0 & $('.ecuvar2:checked').length !== 0) {
      $('#alerta6').modal('show');
	  $('#alerta6').modal({backdrop: 'static', keyboard: false});
	   document.getElementById("senvar2").style.display = 'none';
	   $("#ejecuvar2").attr("checked", false);
   }
});
});


$(document).ready(function(){
$("#uniregdiv").hover(function(){
   if ($('.flat-red:checked').length == 0 & $('.ecuvar1:checked').length !== 0) {
     $('#alerta5').modal('show');
	  $('#alerta5').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("decrereg1").style.display = 'none';
	   $("#valuedivnjsr").attr("checked", false);
   }else if ($('.flat-red2:checked').length == 0 & $('.ecuvar2:checked').length !== 0) {
      $('#alerta6').modal('show');
	  $('#alerta6').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("decrereg2").style.display = 'none';
	   $("#valuedivnjser").attr("checked", false);
   }
});
});

$(document).ready(function(){
$("#autodiv").hover(function(){
   if ($('.flat-red:checked').length == 0 & $('.ecuvar1:checked').length !== 0) {
     $('#alerta5').modal('show');
	  $('#alerta5').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("sentuto").style.display = 'none';
	   $("#ejecututo1").attr("checked", false);
   }else if ($('.flat-red2:checked').length == 0 & $('.ecuvar2:checked').length !== 0) {
      $('#alerta6').modal('show');
	  $('#alerta6').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("ejetuto").style.display = 'none';
	   $("#ejecututo2").attr("checked", false);
   }
});
});



$(document).ready(function(){
$("#autoprnac").hover(function(){
   if ($('.flat-red:checked').length == 0 & $('.ecuvar1:checked').length !== 0) {
     $('#alerta5').modal('show');
	  $('#alerta5').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("senprnac").style.display = 'none';
	   $("#chksentenciaprnac").attr("checked", false);
   }else if ($('.flat-red2:checked').length == 0 & $('.ecuvar2:checked').length !== 0) {
      $('#alerta6').modal('show');
	  $('#alerta6').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("senprnac").style.display = 'none';
	   $("#chksentenciaprnac").attr("checked", false);
   }
});
});
































$(document).ready(function(){
$("#divorciodiv").hover(function(){
   if ($('.flat-red1:checked').length == 0 & $('.ecuvar1:checked').length !== 0) {
     $('#alerta1').modal('show');
	  $('#alerta1').modal({backdrop: 'static', keyboard: false});
	   document.getElementById("decreext").style.display = 'none';
	   $("#valuediv").attr("checked", false);
   }else if ($('.flat-red2:checked').length == 0 & $('.ecuvar2:checked').length !== 0) {
      $('#alerta2').modal('show');
	  $('#alerta2').modal({backdrop: 'static', keyboard: false});
	   document.getElementById("decreextn").style.display = 'none';
	   $("#valuedivn").attr("checked", false);
   }else if ($('.flat-red3:checked').length == 0 & $('.ecuvar3:checked').length !== 0) {
      $('#alerta3').modal('show');
	  $('#alerta3').modal({backdrop: 'static', keyboard: false});
	   document.getElementById("decreextnj").style.display = 'none';
	   $("#valuedivnj").attr("checked", false);
   }else if ($('.flat-red4:checked').length == 0 & $('.ecuvar4:checked').length !== 0) {
      $('#alerta4').modal('show');
	  $('#alerta4').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("decreextofi").style.display = 'none';
	   $("#valuedivofi").attr("checked", false);
   }else if ($('.flat-red5:checked').length == 0 & $('.ecuvar5:checked').length !== 0) {
      $('#alerta5').modal('show');
	  $('#alerta5').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("decreextnjs").style.display = 'none';
	   $("#valuedivnjs").attr("checked", false);
   }else if ($('.flat-red6:checked').length == 0 & $('.ecuvar6:checked').length !== 0) {
      $('#alerta6').modal('show');
	  $('#alerta6').modal({backdrop: 'static', keyboard: false});
	    document.getElementById("decreextnjse").style.display = 'none';
	   $("#valuedivnjse").attr("checked", false);
   }
});
});



function validarRango(elemento){
  var numero = parseInt(elemento.value,10);
  //Validamos que se haya ingresado solo numeros
 
var fecha = new Date();
var ano = fecha.getFullYear();
  //Validamos que se cumpla el rango
  if(numero<1880 || numero>ano){
	  elemento.focus();
   elemento.value = ""; 
    $('#alertaanio').modal('show');
	$('#alertaanio').modal({backdrop: 'static', keyboard: false});
   
  }
  return true;
}

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});



$( function() {
    $("#options").change( function() {
        if ($(this).val() === "") {
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        } else if ($(this).val() === "Notario en "){
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        }else if ($(this).val() === "Alcalde Municipal en "){
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        }else if ($(this).val() === "Alcaldesa Municipal en "){
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        }else if ($(this).val() === "Gobernador en "){
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        }else if ($(this).val() === "Procurador en "){
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        }else if ($(this).val() === "Procurador Auxiliar en "){
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        }else if ($(this).val() === "Procuradora en "){
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        }else if ($(this).val() === "Procuradora Auxiliar en "){
            $("#edit_notro").prop("disabled", true);
			document.getElementById("edit_notro").value = "";
        }else if ($(this).val() === "."){
            $("#edit_notro").prop("disabled", false);
			document.getElementById("edit_notro").focus();
			
        }
    });
});

//////////////funcio de fecha maximo este dia

$(function(){
    $('[type="date"].max-today').prop('max', function(){
        var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
$('[type="date"].max-today').prop('max', today);		
		
		
    });
});

$( function() {
    $("#usoA").change( function() {
       if ($(this).val() === "conde"){
            $("#otroapellido").prop("disabled", true);
			document.getElementById("otroapellido").value = "";
        }else if ($(this).val() === "sinde"){
            $("#otroapellido").prop("disabled", true);
			document.getElementById("otroapellido").value = "";
        }else if ($(this).val() === "soltera"){
            $("#otroapellido").prop("disabled", true);
			document.getElementById("otroapellido").value = "";
       }else if ($(this).val() === "otro"){
            $("#otroapellido").prop("disabled", false);
			document.getElementById("otroapellido").focus();
			
        }
    });
});






$( function() {
      $("#decreval").click(function () {
		$("#timedecre").prop("disabled", false);
		  	   document.getElementById("timedecre").focus();
	  });
});
$( function() {
  $("#decreval2").click(function () {
		$("#fechadecre").prop("disabled", false);
	  	   document.getElementById("fechadecre").focus();
	  });
});
$( function() {
 $("#por_ext").click(function () {
	   	$("#txt_por_ext").prop("disabled", false);
	 document.getElementById("txt_por_ext").focus();
	  });
});





$( function() {
      $("#decrevaln").click(function () {
		$("#timedecren").prop("disabled", false);
		  	   document.getElementById("timedecren").focus();
	  });
});
$( function() {
  $("#decreval2n").click(function () {
		$("#fechadecren").prop("disabled", false);
	  	   document.getElementById("fechadecren").focus();
	  });
});
$( function() {
 $("#por_csj").click(function () {
	   	$("#txt_por_csj").prop("disabled", false);
	 document.getElementById("txt_por_csj").focus();
	  });
});


$( function() {
      $("#decrevalnj").click(function () {
		$("#timedecrenj").prop("disabled", false);
		  	   document.getElementById("timedecrenj").focus();
	  });
});
$( function() {
  $("#decreval2nj").click(function () {
		$("#fechadecrenj").prop("disabled", false);
	  	   document.getElementById("fechadecrenj").focus();
	  });
});

$( function() {
 $("#por_rjuz").click(function () {
	   	$("#txt_por_rjuz").prop("disabled", false);
	 document.getElementById("txt_por_rjuz").focus();
	  });
});


$( function() {
      $("#decrevalofi").click(function () {
		$("#timedecreofi").prop("disabled", false);
		  	   document.getElementById("timedecreofi").focus();
	  });
});
$( function() {
  $("#decreval2ofi").click(function () {
		$("#fechadecreofi").prop("disabled", false);
	  	   document.getElementById("fechadecreofi").focus();
	  });
});
$( function() {
 $("#por_rofi").click(function () {
	   	$("#txt_por_rofi").prop("disabled", false);
	 document.getElementById("txt_por_rofi").focus();
	  });
});
$( function() {
 $("#por_ofi").click(function () {
	   	$("#txt_por_ofi").prop("disabled", false);
	 document.getElementById("txt_por_ofi").focus();
	  });
});


$( function() {
      $("#decrevalnjs").click(function () {
		$("#timedecrenjs").prop("disabled", false);
		  	   document.getElementById("timedecrenjs").focus();
	  });
});
$( function() {
  $("#decreval2njs").click(function () {
		$("#fechadecrenjs").prop("disabled", false);
	  	   document.getElementById("fechadecrenjs").focus();
	  });
});
$( function() {
 $("#por_sjuz").click(function () {
	   	$("#txt_por_sjuz").prop("disabled", false);
	 document.getElementById("txt_por_sjuz").focus();
	  });
});


$( function() {
      $("#decrevalnjse").click(function () {
		$("#timedecrenjse").prop("disabled", false);
		  	   document.getElementById("timedecrenjse").focus();
	  });
});
$( function() {
  $("#decreval2njse").click(function () {
		$("#fechadecrenjse").prop("disabled", false);
	  	   document.getElementById("fechadecrenjse").focus();
	  });
});
$( function() {
 $("#por_ejuz").click(function () {
	   	$("#txt_por_ejuz").prop("disabled", false);
	 document.getElementById("txt_por_ejuz").focus();
	  });
});



$( function() {
      $("#horaprnac").click(function () {
		$("#timeprnac").prop("disabled", false);
		  	   document.getElementById("timeprnac").focus();
	  });
});
$( function() {
  $("#fechaprnac").click(function () {
		$("#fechaprnacdate").prop("disabled", false);
	  	   document.getElementById("fechaprnacdate").focus();
	  });
});
$( function() {
 $("#porprnac").click(function () {
	   	$("#porprnactxt").prop("disabled", false);
	 document.getElementById("porprnactxt").focus();
	  });
});








////////////art 17
$( function() {
 $("#17tipop").click(function () {
	   	$("#tipopart").prop("disabled", false);
document.art17form.tipopart.options[0].selected = true;
	 document.art17form.tipopart.focus();
	  });
});


$( function() {
 $("#17nombre").click(function () {
	   	$("#nombre17").prop("disabled", false);
	 document.getElementById("nombre17").focus();
	  });
});

$( function() {
 $("#17tipop2").click(function () {
	   	$("#tipopart2").prop("disabled", false);
document.art17form.tipopart2.options[0].selected = true;
	 document.art17form.tipopart2.focus();
	  });
});


$( function() {
 $("#17nombre2").click(function () {
	   	$("#nombre172").prop("disabled", false);
	 document.getElementById("nombre172").focus();
	  });
});



    $("#inhusuario").change(function () {
  var cntrol = $(this);

  document.getElementById("idusuarioinha").value = cntrol.val();

 });



    $("#dusuario").change(function () {
  var cntrol = $(this);
  
  document.getElementById("ndusuariodelete").value = cntrol.find(':selected').data('nombre2');
  document.getElementById("usuarioudelete").value = cntrol.find(':selected').data('usuario2');
  document.getElementById("passudelete").value = cntrol.find(':selected').data('password2');
  document.getElementById("tipoudelete").value = cntrol.find(':selected').data('tipo2');
  document.getElementById("inicialesudelete").value = cntrol.find(':selected').data('iniciales2');
  document.getElementById("estadodelete").value = cntrol.find(':selected').data('estado2');	
  document.getElementById("idusuariodelete").value = cntrol.val();

 } );

	 $("#eusuario").change(function () {
  var cntrol = $(this);
  
  document.getElementById("ndusuarioedit").value = cntrol.find(':selected').data('nombre');
  document.getElementById("usuariouedit").value = cntrol.find(':selected').data('usuario');
  document.getElementById("passuedit").value = cntrol.find(':selected').data('password');
  document.getElementById("tipouedit").value = cntrol.find(':selected').data('tipo');
  document.getElementById("inicialesuedit").value = cntrol.find(':selected').data('iniciales');
  document.getElementById("idusuarioedit").value = cntrol.val();

 });
	

	
	
	 $("#usuariofolio").change(function () {
  var cntrol = $(this);
  
  document.getElementById("inicialesfolio").value = cntrol.find(':selected').data('iniciales3');
  document.getElementById("idusuariofolio").value = cntrol.val();

 });
	
		 $("#usuariofoliom").change(function () {
  var cntrol = $(this);
  
  document.getElementById("inicialesfoliom").value = cntrol.find(':selected').data('iniciales4');
  document.getElementById("idusuariofoliom").value = cntrol.val();

 });
	


		$('#editProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var anio = button.data('librof') 
		  $('#librofolioa').val(anio)
		  var libropa = button.data('libro') 
		  $('#edit_libro').val(libropa)
		  var numpartida = button.data('npartida') 
		  $('#edit_npartida').val(numpartida)
		  var iniciales = button.data('iniciales1') 
		  $('#edit_ini').val(iniciales)
		  var price = button.data('price') 
		  $('#edit_price').val(price)
		  var id = button.data('id') 
		  $('#edit_id').val(id)
			 var nmarg = button.data('nmar') 
		  $('#margpdf').val(nmarg)
		})

		
		$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		
		
		$( '#edit_product' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#editProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		})
		

		$( '#notario' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_funcionario.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#notarios').modal('hide');
				  }
			});
		  event.preventDefault();
		})


	$( '#notarioedi' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_funcionario.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#notariosedi').modal('hide');
				  }
			});
		  event.preventDefault();
		})




$( '#lugara' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_municipios.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#lugares').modal('hide');
				  }
			});
		  event.preventDefault();
		})


$( '#lugaraedi' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_municipio.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#lugaresedi').modal('hide');
				  }
			});
		  event.preventDefault();
		})


$( '#frmcargo' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_cargo.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#cargoedi').modal('hide');
				  }
			});
		  event.preventDefault();
		})









$( '#cargoa' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_nombramientos.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#cargosj').modal('hide');
				  }
			});
		  event.preventDefault();
		})


$( '#regimena' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_regimenes.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#regimenesp').modal('hide');
				  }
			});
		  event.preventDefault();
		})


$( '#frmregimen' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_regimen.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#regimenedit').modal('hide');
				  }
			});
		  event.preventDefault();
		})



		$( '#tipoestado' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/cambioestado.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#cambioestado').modal('hide');
				  }
			});
		  event.preventDefault();
		})


	$( '#sinefectoform' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/sinefecto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#sinefecto').modal('hide');
				  }
			});
		  event.preventDefault();
		})

	$( '#vaciarform' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/vaciar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#vaciar').modal('hide');
				  }
			});
		  event.preventDefault();
		})












	$( '#frmtipopartida' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_tipopartida.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#tipopartida').modal('hide');
				  }
			});
		  event.preventDefault();
		})

	$( '#frmtipopartidaedi' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_tipopartida.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#tipopartidaedi').modal('hide');
				  }
			});
		  event.preventDefault();
		})










		

$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});








		
$( '#revform' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#revision').modal('hide');
				  }
			});
		  event.preventDefault();
		})
$( '#revform2' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#control').modal('hide');
				  }
			});
		  event.preventDefault();
		})






		$( '#crearusuario' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_usuario.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#addusuario').modal('hide');
				  }
			});
		  event.preventDefault();
		})
		
$( '#editarusuario' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_usuario.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#editusuario').modal('hide');
				  }
			});
		  event.preventDefault();
		})

$( '#borrararusuario' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/eliminar_usuario.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#deleteusuario').modal('hide');
				  }
			});
		  event.preventDefault();
		})



$('#confirm-submit').on('show.bs.modal', function (event) {
		 
		})
		
$( '#agregarlibro' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_libro.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#libromarginaciones').modal('hide');
				  }
			});
		  event.preventDefault();
		})

$( '#foliousuario' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/asignar_folio.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#asignarfolio').modal('hide');
				  }
			});
		  event.preventDefault();
		})

$( '#art17form' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#art17').modal('hide');
				  }
			});
		  event.preventDefault();
		})


$( '#foliousuariom' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/asignar_marg.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#asignarmarginacion').modal('hide');
				  }
			});
		  event.preventDefault();
		})

		
				
		


$( '#cancexdef' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#cancedef').modal('hide');
				  }
			});
		  event.preventDefault();
		})
		
$( '#recuperacon' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/enviarcorreo.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#recuperarcontra').modal('hide');
				  }
			});
		  event.preventDefault();
		})


//////////////////////////// Codigo de revision

$('#control').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var idrev2 = button.data('idrevision2') 
		  $('#editidrev2').val(idrev2)
			 var txtrevision2 = button.data('textrevision2') 
		  $('#textorev2').val(txtrevision2)
		  var npartidarev2 = button.data('npartidarevi2') 
		  $('#numrev2').val(npartidarev2)
		  var nlibrorev2 = button.data('nlibrev2') 
		  $('#librorev2').val(nlibrorev2)
		  var aniorevp2 = button.data('anior2') 
		  $('#aniorev2').val(aniorevp2)
		  var tiporevp2 = button.data('tipoparrev2') 
		  $('#tiporev2').val(tiporevp2)

		})



$('#revision').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var idrev = button.data('idrevision') 
		  $('#editidrev').val(idrev)
			 var txtrevision = button.data('textrevision') 
		  $('#textorev').val(txtrevision)
		  var npartidarev = button.data('npartidarevi') 
		  $('#numrev').val(npartidarev)
		  var nlibrorev = button.data('nlibrev') 
		  $('#librorev').val(nlibrorev)
		  var aniorevp = button.data('anior') 
		  $('#aniorev').val(aniorevp)
		  var tiporevp = button.data('tipoparrev') 
		  $('#tiporev').val(tiporevp)

		})
























$('#cancedef').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idcd') 
		  $('#edit_idcan').val(id)
			 var nmarg = button.data('nmarcd') 
		  $('#margpdfcandef').val(nmarg)
		})

$( '#identidad' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#identidades').modal('hide');
				  }
			});
		  event.preventDefault();
		})

$( '#variasfrm' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#varias').modal('hide');
				  }
			});
		  event.preventDefault();
		})




$( '#otroform' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#otras').modal('hide');
				  }
			});
		  event.preventDefault();
		})



$( '#tutoria' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#tutorias').modal('hide');
				  }
			});
		  event.preventDefault();
		})



$( '#perrecnacform' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#perdidanac').modal('hide');
				  }
			});
		  event.preventDefault();
		})












$( '#regimen' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#regimenes').modal('hide');
				  }
			});
		  event.preventDefault();
		})



$( '#adecuacion' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#adecuaciones').modal('hide');
				  }
			});
		  event.preventDefault();
		})

$( '#cambiarcontrafrm' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/cambiar_contra.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#cambiarcontra').modal('hide');
				  }
			});
		  event.preventDefault();
		})




$('#varias').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idvar') 
		  $('#edit_idvar').val(id)
			 var nmarg = button.data('nvar') 
		  $('#margpdfvar').val(nmarg)
		})

$('#otras').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idotr') 
		  $('#edit_idotr').val(id)
			 var nmarg = button.data('notr') 
		  $('#margpdfotr').val(nmarg)
		})



$('#identidades').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('ididen') 
		  $('#edit_ididen').val(id)
			 var nmarg = button.data('niden') 
		  $('#margpdfiden').val(nmarg)
		})


$('#regimenes').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idreg') 
		  $('#edit_idreg').val(id)
			 var nmarg = button.data('nreg') 
		  $('#margpdfreg').val(nmarg)
		})

$('#tutorias').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idaut') 
		  $('#edit_idaut').val(id)
			 var nmarg = button.data('naut') 
		  $('#margpdfaut').val(nmarg)
		})


$('#perdidanac').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idprnac') 
		  $('#edit_idprnac').val(id)
			 var nmarg = button.data('nprnac') 
		  $('#margpdfprnac').val(nmarg)
		})





$('#adecuaciones').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idadec') 
		  $('#edit_idadec').val(id)
			 var nmarg = button.data('nadec') 
		  $('#margpdfadec').val(nmarg)
		})



$('#regimenes').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idreg') 
		  $('#edit_idreg').val(id)
			 var nmarg = button.data('nreg') 
		  $('#margpdfreg').val(nmarg)
		})




$('#art17').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id17') 
		  $('#edit_id17').val(id)
			 var nmarg = button.data('nmar17') 
		  $('#margpdf17').val(nmarg)
		})


$('#btnusuario').click(function() {
    document.getElementById("crearusuario").reset(); 
 });

$('#btnafuncionario').click(function() {
    document.getElementById("notario").reset(); 
 });

$('#btnefuncionario').click(function() {
    document.getElementById("notarioedi").reset(); 
 });

$('#btnamunicipio').click(function() {
    document.getElementById("lugara").reset(); 
 });

$('#btnlugar').click(function() {
    document.getElementById("lugaraedi").reset(); 
 });




$('#btnusuarioedit').click(function() {
    document.getElementById("editarusuario").reset(); 
   				document.getElementById("inhauser").style.display = 'none';
				document.getElementById("edituser").style.display = 'none';
				
				$("#inhusuario").prop("disabled", true);
				$("#estadouser").prop("disabled", true);
				
				$("#eusuario").prop("disabled", true);
				$("#ndusuarioedit").prop("disabled", true);
				$("#usuariouedit").prop("disabled", true);
				$("#passuedit").prop("disabled", true);
				$("#verificaruedit").prop("disabled", true);
				$("#tipouedit").prop("disabled", true);
				$("#inicialesuedit").prop("disabled", true);

});









$('#btnusuariodelete').click(function() {
    document.getElementById("borrararusuario").reset(); 
  

});
$('#btnusuariof').click(function() {
    document.getElementById("foliousuario").reset(); 
  

});
$('#btnusuariom').click(function() {
    document.getElementById("foliousuariom").reset(); 
  

});
$('#btnestado').click(function() {
    document.getElementById("tipoestado").reset(); 
  

});
$('#btnsinefecto').click(function() {
    document.getElementById("sinefectoform").reset(); 
  

});

$('#btnvaciar').click(function() {
    document.getElementById("vaciarform").reset(); 
  

});


function crearlibro() {
	 
 document.getElementById("librou").value =  document.getElementById("ulibro").value;
 document.getElementById("librou2").value =  document.getElementById("ulibro2").value;

}


function imprimirdatos() {
	
	
	
 document.getElementById("lname").value =  document.getElementById("lastname").value;
 document.getElementById("nummar").value =  document.getElementById("marginum").value;
	

 document.getElementById("lname2").value =  document.getElementById("lastname1").value;
 document.getElementById("nummar2").value =  document.getElementById("marginum2").value;
	
 document.getElementById("lname3").value =  document.getElementById("lastname2").value;
 document.getElementById("nummar3").value =  document.getElementById("marginum3").value;
	
 document.getElementById("lname4").value =  document.getElementById("lastname3").value;
 document.getElementById("nummar4").value =  document.getElementById("marginum4").value;
	
 document.getElementById("tipoimpre").value =  document.getElementById("tipoimpresion").value;	
	
	$("#marcador").attr("checked", false);
		$("#encabchk").attr("checked", false);
		$("#margchk1").attr("checked", false);
		$("#margchk2").attr("checked", false);
		$("#margchk3").attr("checked", false);
		$("#margchk4").attr("checked", false);
	

	$('#lname').text($('#lastname').val());
     $('#lname1').text($('#lastname1').val());
	 $('#lname2').text($('#lastname2').val());
     $('#lname3').text($('#lastname3').val());
	
	
document.getElementById("tipoimpresion").value = "revisado1".selected;
	
	
		
}

	$(function(){
    $('#btnrepo').click(function(){
     
      $('#reportemensual').modal('hide')
      /*
      $.post('http://path/to/post', 
         $('#myForm').serialize(), 
         function(data, status, xhr){
           // do something here with response;
         });
      */
    });
});

$(function(){
    $('#btnaper2').click(function(){
     
      $('#apercierre').modal('hide')
      /*
      $.post('http://path/to/post', 
         $('#myForm').serialize(), 
         function(data, status, xhr){
           // do something here with response;
         });
      */
    });
});


$(function(){
    $('#pdfimp').click(function(){
     
      $('#confirm-submit').modal('hide')
      /*
      $.post('http://path/to/post', 
         $('#myForm').serialize(), 
         function(data, status, xhr){
           // do something here with response;
         });
      */
    });
});

	
	
	$(function(){
    $('#guardar').click(function(){
     
      $('#confirm-submit').modal('hide')
      /*
      $.post('http://path/to/post', 
         $('#myForm').serialize(), 
         function(data, status, xhr){
           // do something here with response;
         });
      */
    });
});
	
	$(function(){
    $('#btnlibro').click(function(){
     
      $('#libromarginaciones').modal('hide')
      /*
      $.post('http://path/to/post', 
         $('#myForm').serialize(), 
         function(data, status, xhr){
           // do something here with response;
         });
      */
    });
});
	
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZêôûïÊÔÛäöüßÄÖÜẞçëÇËāīūḍḏðǧġḫḥšṣṭẓĀĪŪḌḎĐǦĠḪḤŠṢṬẒḷḷḥčćěłńóřšžČĆĚŁŃÓŘŠŽşĞŞðæøÆØαв¢∂єfgнιנкℓмиσρqяѕтυνωχуzДÆΆẶẮÄẪÅÃÀÁÂĄẴΆΑĀẰAÂÀÁÃÄÅÅÆдΛ∂ǼΔАλдΛªaãðâẫåæªäåắãâằẳǻǽàæąάαâáàãЪЂВβß฿ļЗвBbßьВвБβЂЪЫЬъыьЪЂßß฿lЗвŒœĎďĐđDdÐðĎđďÇ¢çςсСŒœ©כċĆćςсСŒœ©כċĆćςĈĉĊċČčÇ¢çςŒœτ©CcÇ⊂çç©¢ĒēĔĕĖėĘęĚěӘәЭзеЁΈΕEeëêξÊÈÉ€ËéèפЄ€ξ∑∑ẾЕỀỂỄéèέєЄeعЭєзэεэёĘF₣ƒſfƒ₣ƒFfƒךּדּ∫GGggGGĜĝĞğĠġĢģĠĜğģĢĞGgⓖHĤĥĦħΉŀlΗHhHhΉћђђЋҢнңнЊњΉŀļĦĥĤħђнHhнІЇϊΪίιÏїΊΙIIΊ¡ϊïîÍíÌìÎîIIIΐIĨĩĪīĬĭĮįłİIĨĵЈפֿ∂ĴkќĸкҚқкҜҝЌЌКĶķĸκĿLLLLclLlŀl£lĹĺĻļĽľĿŀŁł₤ζ£ммММΜИΠпמПπⁿΝИийηñחÑЙŊŋήήηnийNŃńŅņŇňŉŊŋЮюОםטοΌΟоόΘФΦǾǿффσόθθΘθóòÓÒÔôÖöÕõΌØøỢợỌọớờOoоỞỜỚỔổỞỢŌōŎŏŐőЃГҐґΓЯЯ®RRяrгŔŕŖŗŘřяѓÞρpþЅ§šŠ§SѕsSsSsŚśŜŝŞşŠšЏUỤỦỨỪỬỮỰuΰÚúÙùÛûÜüµυЏЏUựữửừuцŨũŪūŬŭŮůŰűŲųΰυϋύϋύџμЦцν٧√ШЩẀẁẂẃẄẅωώώшщẀẁẂẃẄẅШЩWwωώωшщŴŵУ¥Чч¥ỲỳỴЎўỵуỶỷУЧўчЎ¥ÿΎÝŸ¥ΎÿýΫΎγŶŷΥŸỲỳҸҹעץŹźŻżŽžZZzŽZzžΖζΞΟΠΡΣΤΥΦΧΨΩΪΫЁЂЃЄЅІЇЈЉЊЋЌЎЏАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯάέήίΰαβγδεζηθικλμνξοπρςστυφχψωϊϋόύώбвгдеж'-.,;:_`´";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6, 92]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){

        return false;
      }
}

function soloLetrasmarg(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "0123456789-";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){

        return false;
      }
}




function soloLetras2(e) {
	
  key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZêôûïÊÔÛäöüßÄÖÜẞçëÇËāīūḍḏðǧġḫḥšṣṭẓĀĪŪḌḎĐǦĠḪḤŠṢṬẒḷḷḥčćěłńóřšžČĆĚŁŃÓŘŠŽşĞŞðæøÆØαв¢∂єfgнιנкℓмиσρqяѕтυνωχуzДÆΆẶẮÄẪÅÃÀÁÂĄẴΆΑĀẰAÂÀÁÃÄÅÅÆдΛ∂ǼΔАλдΛªaãðâẫåæªäåắãâằẳǻǽàæąάαâáàãЪЂВβß฿ļЗвBbßьВвБβЂЪЫЬъыьЪЂßß฿lЗвŒœĎďĐđDdÐðĎđďÇ¢çςсСŒœ©כċĆćςсСŒœ©כċĆćςĈĉĊċČčÇ¢çςŒœτ©CcÇ⊂çç©¢ĒēĔĕĖėĘęĚěӘәЭзеЁΈΕEeëêξÊÈÉ€ËéèפЄ€ξ∑∑ẾЕỀỂỄéèέєЄeعЭєзэεэёĘF₣ƒſfƒ₣ƒFfƒךּדּ∫GGggGGĜĝĞğĠġĢģĠĜğģĢĞGgⓖHĤĥĦħΉŀlΗHhHhΉћђђЋҢнңнЊњΉŀļĦĥĤħђнHhнІЇϊΪίιÏїΊΙIIΊ¡ϊïîÍíÌìÎîIIIΐIĨĩĪīĬĭĮįłİIĨĵЈפֿ∂ĴkќĸкҚқкҜҝЌЌКĶķĸκĿLLLLclLlŀl£lĹĺĻļĽľĿŀŁł₤ζ£ммММΜИΠпמПπⁿΝИийηñחÑЙŊŋήήηnийNŃńŅņŇňŉŊŋЮюОםטοΌΟоόΘФΦǾǿффσόθθΘθóòÓÒÔôÖöÕõΌØøỢợỌọớờOoоỞỜỚỔổỞỢŌōŎŏŐőЃГҐґΓЯЯ®RRяrгŔŕŖŗŘřяѓÞρpþЅ§šŠ§SѕsSsSsŚśŜŝŞşŠšЏUỤỦỨỪỬỮỰuΰÚúÙùÛûÜüµυЏЏUựữửừuцŨũŪūŬŭŮůŰűŲųΰυϋύϋύџμЦцν٧√ШЩẀẁẂẃẄẅωώώшщẀẁẂẃẄẅШЩWwωώωшщŴŵУ¥Чч¥ỲỳỴЎўỵуỶỷУЧўчЎ¥ÿΎÝŸ¥ΎÿýΫΎγŶŷΥŸỲỳҸҹעץŹźŻżŽžZZzŽZzžΖζΞΟΠΡΣΤΥΦΧΨΩΪΫЁЂЃЄЅІЇЈЉЊЋЌЎЏАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯάέήίΰαβγδεζηθικλμνξοπρςστυφχψωϊϋόύώбвгдеж'-.,;:_`´";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){

        return false;
      }

}

function soloLetrascontra(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "0123456789áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZêôûïÊÔÛäöüßÄÖÜẞçëÇËāīūḍḏðǧġḫḥšṣṭẓĀĪŪḌḎĐǦĠḪḤŠṢṬẒḷḷḥčćěłńóřšžČĆĚŁŃÓŘŠŽşĞŞðæøÆØαв¢∂єfgнιנкℓмиσρqяѕтυνωχуzДÆΆẶẮÄẪÅÃÀÁÂĄẴΆΑĀẰAÂÀÁÃÄÅÅÆдΛ∂ǼΔАλдΛªaãðâẫåæªäåắãâằẳǻǽàæąάαâáàãЪЂВβß฿ļЗвBbßьВвБβЂЪЫЬъыьЪЂßß฿lЗвŒœĎďĐđDdÐðĎđďÇ¢çςсСŒœ©כċĆćςсСŒœ©כċĆćςĈĉĊċČčÇ¢çςŒœτ©CcÇ⊂çç©¢ĒēĔĕĖėĘęĚěӘәЭзеЁΈΕEeëêξÊÈÉ€ËéèפЄ€ξ∑∑ẾЕỀỂỄéèέєЄeعЭєзэεэёĘF₣ƒſfƒ₣ƒFfƒךּדּ∫GGggGGĜĝĞğĠġĢģĠĜğģĢĞGgⓖHĤĥĦħΉŀlΗHhHhΉћђђЋҢнңнЊњΉŀļĦĥĤħђнHhнІЇϊΪίιÏїΊΙIIΊ¡ϊïîÍíÌìÎîIIIΐIĨĩĪīĬĭĮįłİIĨĵЈפֿ∂ĴkќĸкҚқкҜҝЌЌКĶķĸκĿLLLLclLlŀl£lĹĺĻļĽľĿŀŁł₤ζ£ммММΜИΠпמПπⁿΝИийηñחÑЙŊŋήήηnийNŃńŅņŇňŉŊŋЮюОםטοΌΟоόΘФΦǾǿффσόθθΘθóòÓÒÔôÖöÕõΌØøỢợỌọớờOoоỞỜỚỔổỞỢŌōŎŏŐőЃГҐґΓЯЯ®RRяrгŔŕŖŗŘřяѓÞρpþЅ§šŠ§SѕsSsSsŚśŜŝŞşŠšЏUỤỦỨỪỬỮỰuΰÚúÙùÛûÜüµυЏЏUựữửừuцŨũŪūŬŭŮůŰűŲųΰυϋύϋύџμЦцν٧√ШЩẀẁẂẃẄẅωώώшщẀẁẂẃẄẅШЩWwωώωшщŴŵУ¥Чч¥ỲỳỴЎўỵуỶỷУЧўчЎ¥ÿΎÝŸ¥ΎÿýΫΎγŶŷΥŸỲỳҸҹעץŹźŻżŽžZZzŽZzžΖζΞΟΠΡΣΤΥΦΧΨΩΪΫЁЂЃЄЅІЇЈЉЊЋЌЎЏАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯάέήίΰαβγδεζηθικλμνξοπρςστυφχψωϊϋόύώбвгдеж'-.,;:_`´";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){

        return false;
      }
}

$(document).ready( function () {
 $(".lowercase").on("keypress", function () {
  $input=$(this);
  setTimeout(function () {
   $input.val($input.val().toLowerCase());
  },50);
 })
})




$('#btnaper').click(function() {
    document.getElementById("frmapertura").reset(); 
   			 document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
				
	
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
							
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);

});



$(document).ready(function () {
        $("#tipo1ac").click(function () {
            if ($("tipoapercie").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
	
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
							
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
						
				document.querySelectorAll('[id=tipo1ac]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("tipoapercie").style.display = '';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", false);
				$("#aper2").prop("disabled", false);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
			
			}
        });
    });

$(document).ready(function () {
        $("#tipo2ac").click(function () {
            if ($("tipoapercie2").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
							
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
						
				document.querySelectorAll('[id=tipo2ac]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = '';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", false);
				$("#aper21").prop("disabled", false);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
					
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
			}
        });
    });

$(document).ready(function () {
        $("#tipo3ac").click(function () {
            if ($("tipoapercie3").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
							
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
						
				document.querySelectorAll('[id=tipo3ac]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = '';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", false);
				$("#aper22").prop("disabled", false);
				
							
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
			}
        });
    });

$(document).ready(function () {
        $("#tipo4ac").click(function () {
            if ($("tipoapercie4").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
							
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
												
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
						
				document.querySelectorAll('[id=tipo4ac]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = '';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", false);
				$("#aper22").prop("disabled", false);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
			}
        });
    });

$(document).ready(function () {
        $("#tipo5ac").click(function () {
            if ($("tipoapercie3").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
							
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
										
								
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);		
				document.querySelectorAll('[id=tipo5ac]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = '';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", false);
				$("#aper22").prop("disabled", false);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
			}
        });
    });

$(document).ready(function () {
        $("#tipo6ac").click(function () {
            if ($("tipoapercie2").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);

				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
							
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
										
								
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);		
				document.querySelectorAll('[id=tipo6ac]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = '';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", false);
				$("#aper21").prop("disabled", false);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
			}
        });
    });


$(document).ready(function () {
        $("#tipo7ac").click(function () {
            if ($("tipoapercie").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
							
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
										
								
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);		
				document.querySelectorAll('[id=tipo7ac]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("tipoapercie").style.display = '';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", false);
				$("#aper2").prop("disabled", false);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
			}
        });
    });

$(document).ready(function () {
        $("#tipo8ac").click(function () {
            if ($("tipoapercie3").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
							
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
								
								
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);		
				document.querySelectorAll('[id=tipo8ac]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("tipoapercie").style.display = 'none';
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = '';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", false);
				$("#aper22").prop("disabled", false);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
				$("#aper1").attr("checked", false);
				$("#aper2").attr("checked", false);
				
				$("#aper11").attr("checked", false);
				$("#aper21").attr("checked", false);
				
				$("#aper12").attr("checked", false);
				$("#aper22").attr("checked", false);
			}
        });
    });




$(document).ready(function () {
        $("#aper1").click(function () {
            if ($("numerolibro").is(":visible")) {
                document.getElementById("tipoapercie").style.display = ''; 
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", false);
				$("#aper2").prop("disabled", false);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
						
				document.querySelectorAll('[id=aper1]').forEach((x) => x.checked = false);
            }
            else {
               	document.getElementById("tipoapercie").style.display = ''; 
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = '';
				document.getElementById("fechainicio").style.display = '';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", false);
				$("#Fechanac1").prop("disabled", false);
				
				$("#aper1").prop("disabled", false);
				$("#aper2").prop("disabled", false);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
			}
        });
    });

$(document).ready(function () {
        $("#aper2").click(function () {
            if ($("tblefectiva").is(":visible")) {
				document.getElementById("tipoapercie").style.display = ''; 
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", false);
				$("#aper2").prop("disabled", false);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", false);
				$("#ninhabilitado").prop("disabled", false);
				
				document.getElementById("nsinefecto").value = "0";
				document.getElementById("ninhabilitado").value = "0";
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
						
				document.querySelectorAll('[id=aper2]').forEach((x) => x.checked = false);
            }
            else {
				document.getElementById("tipoapercie").style.display = ''; 
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = '';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = '';
				document.getElementById("datosnac").style.display = '';
				document.getElementById("fechafinal").style.display = '';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", false);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", false);
				$("#aper2").prop("disabled", false);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", false);
				$("#ninhabilitado").prop("disabled", false);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", false);
				$("#chkpadre2").prop("disabled", false);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", false);
				$("#sexonac2").prop("disabled", false);
				$("#nmenor1").prop("disabled", false);
				$("#madre1").prop("disabled", false);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", false);
				$("#sexonac4").prop("disabled", false);
				$("#nmenor2").prop("disabled", false);
				$("#madre2").prop("disabled", false);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", false);
			
			}
        });
    });

$(document).ready(function () {
        $("#aper11").click(function () {
            if ($("numerolibro").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none'; 
				document.getElementById("tipoapercie2").style.display = '';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", false);
				$("#aper21").prop("disabled", false);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
						
				document.querySelectorAll('[id=aper11]').forEach((x) => x.checked = false);
            }
            else {
               	document.getElementById("tipoapercie").style.display = 'none'; 
				document.getElementById("tipoapercie2").style.display = '';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = '';
				document.getElementById("fechainicio").style.display = '';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", false);
				$("#Fechanac1").prop("disabled", false);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", false);
				$("#aper21").prop("disabled", false);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
			}
        });
    });

$(document).ready(function () {
        $("#aper21").click(function () {
            if ($("tbldef").is(":visible")) {
				document.getElementById("tipoapercie").style.display = 'none'; 
				document.getElementById("tipoapercie2").style.display = '';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = '';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", false);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", false);
				$("#aper21").prop("disabled", false);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
						
				document.querySelectorAll('[id=aper21]').forEach((x) => x.checked = false);
            }
            else {
				document.getElementById("tipoapercie").style.display = 'none'; 
				document.getElementById("tipoapercie2").style.display = '';
				document.getElementById("tipoapercie3").style.display = 'none';
				document.getElementById("numerolibro").style.display = '';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = '';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = '';
				document.getElementById("tbldef").style.display = '';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", false);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", false);
				$("#aper21").prop("disabled", false);
				
				$("#aper12").prop("disabled", true);
				$("#aper22").prop("disabled", true);
				
				
				$("#nsinefecto").prop("disabled", false);
				$("#ninhabilitado").prop("disabled", false);
				
				document.getElementById("nsinefecto").value = "0";
				document.getElementById("ninhabilitado").value = "0";
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", false);
				$("#npdef2").prop("disabled", false);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", false);
			
			}
        });
    });


$(document).ready(function () {
        $("#aper12").click(function () {
            if ($("numerolibro").is(":visible")) {
                document.getElementById("tipoapercie").style.display = 'none'; 
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = '';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", false);
				$("#aper22").prop("disabled", false);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
						
				document.querySelectorAll('[id=aper12]').forEach((x) => x.checked = false);
            }
            else {
               	document.getElementById("tipoapercie").style.display = 'none'; 
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = '';
				document.getElementById("numerolibro").style.display = '';
				document.getElementById("fechainicio").style.display = '';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", false);
				$("#Fechanac1").prop("disabled", false);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", false);
				$("#aper22").prop("disabled", false);
				
				
				$("#nsinefecto").prop("disabled", true);
				$("#ninhabilitado").prop("disabled", true);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
			
			}
        });
    });

$(document).ready(function () {
        $("#aper22").click(function () {
            if ($("tblmat").is(":visible")) {
				document.getElementById("tipoapercie").style.display = 'none'; 
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = '';
				document.getElementById("numerolibro").style.display = 'none';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = 'none';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = 'none';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = 'none';
				
				
				$("#nlibronac").prop("disabled", true);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", false);
				$("#aper22").prop("disabled", false);
				
				
				$("#nsinefecto").prop("disabled", false);
				$("#ninhabilitado").prop("disabled", false);
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
								
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", true);
				$("#npmat2").prop("disabled", true);
				$("#npmat3").prop("disabled", true);
				$("#npmat4").prop("disabled", true);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", true);
				
						
				document.querySelectorAll('[id=aper22]').forEach((x) => x.checked = false);
            }
            else {
				document.getElementById("tipoapercie").style.display = 'none'; 
				document.getElementById("tipoapercie2").style.display = 'none';
				document.getElementById("tipoapercie3").style.display = '';
				document.getElementById("numerolibro").style.display = '';
				document.getElementById("fechainicio").style.display = 'none';
				document.getElementById("tblefectiva").style.display = '';
				document.getElementById("datosnac").style.display = 'none';
				document.getElementById("fechafinal").style.display = '';
				document.getElementById("tbldef").style.display = 'none';
				document.getElementById("tblmat").style.display = '';
				document.getElementById("tblmat").style.display = '';
				
				
				$("#nlibronac").prop("disabled", false);
				$("#Fechanac1").prop("disabled", true);
				
				$("#aper1").prop("disabled", true);
				$("#aper2").prop("disabled", true);
				
				$("#aper11").prop("disabled", true);
				$("#aper21").prop("disabled", true);
				
				$("#aper12").prop("disabled", false);
				$("#aper22").prop("disabled", false);
				
				
				$("#nsinefecto").prop("disabled", false);
				$("#ninhabilitado").prop("disabled", false);
				
				document.getElementById("nsinefecto").value = "0";
				document.getElementById("ninhabilitado").value = "0";
				
				$("#chkpadre1").attr("checked", false);
				$("#chkpadre2").attr("checked", false);
				
				$("#chkpadre1").prop("disabled", true);
				$("#chkpadre2").prop("disabled", true);
				
				$("#npdef1").prop("disabled", true);
				$("#npdef2").prop("disabled", true);
				
				$("#npmat1").prop("disabled", false);
				$("#npmat2").prop("disabled", false);
				$("#npmat3").prop("disabled", false);
				$("#npmat4").prop("disabled", false);
				
				$("#sexonac1").prop("disabled", true);
				$("#sexonac2").prop("disabled", true);
				$("#nmenor1").prop("disabled", true);
				$("#madre1").prop("disabled", true);
				$("#padre1").prop("disabled", true);
				
				$("#sexonac3").prop("disabled", true);
				$("#sexonac4").prop("disabled", true);
				$("#nmenor2").prop("disabled", true);
				$("#madre2").prop("disabled", true);
				$("#padre2").prop("disabled", true);
				
				$("#Fechanac2").prop("disabled", false);
			
			}
        });
    });

$( function() {
 $("#chkpadre1").click(function () {
	   	$("#padre1").prop("disabled", false);
	 document.getElementById("padre1").focus();
	  });
});

$( function() {
 $("#chkpadre2").click(function () {
	   	$("#padre2").prop("disabled", false);
	 document.getElementById("padre2").focus();
	  });
});






		
$('#divorcios').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var anio = button.data('librofdiv') 
		  $('#librofolioadiv').val(anio)
		  var libropa = button.data('libro') 
		  $('#edit_libro_div1').val(libropa)
		  var numpartida = button.data('npartida') 
		  $('#edit_npartida_div1').val(numpartida)
		  var iniciales = button.data('iniciales1') 
		  $('#edit_ini_div1').val(iniciales)
		   var id = button.data('id2') 
		  $('#edit_id2').val(id)
		var nmarg = button.data('nmar2') 
		  $('#margpdfdiv').val(nmarg)
		})
		
		$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		
		
		$( '#enviardivorcios' ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#divorcios').modal('hide');
				  }
			});
		  event.preventDefault();
		})
		

$('#imprimir').on('show.bs.modal', function (event) {
		  
	var button = $(event.relatedTarget) // Button that triggered the modal
		  var anio = button.data('anioimp') 
		  $('#edit_anio_imp').val(anio)
		  var text = button.data('textimp') 
		  $('#edit_el_imp').val(text)
		  var libropa = button.data('libroimp') 
		  $('#edit_libro_imp').val(libropa)
		  var numpartida = button.data('partidaimp') 
		  $('#edit_npartida_imp').val(numpartida)
		  var iniciales = button.data('inicialesimp') 
		  $('#edit_ini_imp').val(iniciales)
		   var id = button.data('idimp') 
		  $('#edit_id_imp').val(id)
		})
	

$('#btnreporte').click(function() {
    document.getElementById("repofrm").reset(); 
   	

});
	
$('#btncargos').click(function() {
    document.getElementById("cargoa").reset(); 
   	

});

$('#btnregimen').click(function() {
    document.getElementById("regimena").reset(); 
   	

});
	






		
		$( "#add_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#addProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});



		
		$( "#delete_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/eliminar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#deleteProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});

$(document).ready(function () {
        $("#tipo1user").click(function () {
            if ($("#inhauser").is(":visible")) {
                document.getElementById("inhauser").style.display = 'none';
				document.getElementById("edituser").style.display = 'none';
				
				$("#inhusuario").prop("disabled", true);
				$("#estadouser").prop("disabled", true);
				
				$("#eusuario").prop("disabled", true);
				$("#ndusuarioedit").prop("disabled", true);
				$("#usuariouedit").prop("disabled", true);
				$("#passuedit").prop("disabled", true);
				$("#verificaruedit").prop("disabled", true);
				$("#tipouedit").prop("disabled", true);
				$("#inicialesuedit").prop("disabled", true);
				
						
				document.querySelectorAll('[id=tipo1user]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("inhauser").style.display = 'none';
				document.getElementById("edituser").style.display = '';
				
				$("#inhusuario").prop("disabled", true);
				$("#estadouser").prop("disabled", true);
				
				$("#eusuario").prop("disabled", false);
				$("#ndusuarioedit").prop("disabled", false);
				$("#usuariouedit").prop("disabled", false);
				$("#passuedit").prop("disabled", false);
				$("#verificaruedit").prop("disabled", false);
				$("#tipouedit").prop("disabled", false);
				$("#inicialesuedit").prop("disabled", false);
			
			}
        });
    });

$(document).ready(function () {
        $("#tipo2user").click(function () {
            if ($("#deleteuser").is(":visible")) {
                 document.getElementById("inhauser").style.display = 'none';
				document.getElementById("edituser").style.display = 'none';
				
				$("#inhusuario").prop("disabled", true);
				$("#estadouser").prop("disabled", true);
				
				$("#eusuario").prop("disabled", true);
				$("#ndusuarioedit").prop("disabled", true);
				$("#usuariouedit").prop("disabled", true);
				$("#passuedit").prop("disabled", true);
				$("#verificaruedit").prop("disabled", true);
				$("#tipouedit").prop("disabled", true);
				$("#inicialesuedit").prop("disabled", true);
						
				document.querySelectorAll('[id=tipo2user]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("inhauser").style.display = '';
				document.getElementById("edituser").style.display = 'none';
				
				$("#inhusuario").prop("disabled", false);
				$("#estadouser").prop("disabled", false);
				
				$("#eusuario").prop("disabled", true);
				$("#ndusuarioedit").prop("disabled", true);
				$("#usuariouedit").prop("disabled", true);
				$("#passuedit").prop("disabled", true);
				$("#verificaruedit").prop("disabled", true);
				$("#tipouedit").prop("disabled", true);
				$("#inicialesuedit").prop("disabled", true);
			
			}
        });
    });








$(document).ready(function () {
        $("#tipo3").click(function () {
            if ($("#partida2").is(":visible")) {
               document.getElementById("matri1").style.display = 'none';
				
				$("#edit_el").prop("disabled", true);
				$("#apellidoel1").prop("disabled", true);
				$("#apellidoelid").prop("disabled", true);
				$("#conotxt").prop("disabled", true);
				
				$("#Rvalue2").prop("disabled", true);
				$("#conocido1").prop("disabled", true);
				
				
				$("#Nellamat").prop("disabled", true);
				$("#apellidoella1").prop("disabled", true);
				$("#apellidoellaid").prop("disabled", true);
				$("#conotxt2").prop("disabled", true);
				
				$("#Rvalue3").prop("disabled", true);
				$("#conocido2").prop("disabled", true);
				
				$("#FechaB").prop("disabled", true);
				$("#LugarB").prop("disabled", true);
				$("#options").prop("disabled", true);
				$("#Nnotario").prop("disabled", true);
				
							
				$("#treg").prop("disabled", true);
				$("#usoA").prop("disabled", true);
				$("#otroapellido").prop("disabled", true);
				
				$("#OptionRA").prop("disabled", true);
				$("#Avalue").prop("disabled", true);
				
				$("#ccargo").prop("disabled", true);
				$("#mnombre").prop("disabled", true);
				
				$("#ccargo").attr("checked", false);
				$("#mnombre").attr("checked", false);
				
				
				
				
				
				
				document.getElementById("foliacionmatr").style.display = 'none';
				
				$("#edit_anioe").prop("disabled", true);
				$("#edit_libro").prop("disabled", true);
				$("#edit_npartida").prop("disabled", true);
				$("#tipopar").prop("disabled", true);
				
				document.getElementById("foliacionmatr2").style.display = 'none';
				
				$("#edit_anioe2").prop("disabled", true);
				$("#edit_libro2").prop("disabled", true);
				$("#edit_npartida2").prop("disabled", true);
				$("#tipopar2").prop("disabled", true);
				
			
				$("#Rvalue2").attr("checked", false);
				$("#conocido1").attr("checked", false);
				$("#Rvalue3").attr("checked", false);
				$("#conocido2").attr("checked", false);
				$("#OptionRA").attr("checked", false);
				$("#Avalue").attr("checked", false);
				
				
				
				
				 document.getElementById("partida2").style.display = 'none';
				
				document.querySelectorAll('[id=tipo3]').forEach((x) => x.checked = false);
            }
            else {
                 document.getElementById("matri1").style.display = '';
				
				$("#edit_el").prop("disabled", false);
				$("#apellidoel1").prop("disabled", false);
				$("#apellidoelid").prop("disabled", false);
				$("#conotxt").prop("disabled", true);
				
				$("#Rvalue2").prop("disabled", false);
				$("#conocido1").prop("disabled", false);
				
				
				$("#Nellamat").prop("disabled", false);
				$("#apellidoella1").prop("disabled", false);
				$("#apellidoellaid").prop("disabled", false);
				$("#conotxt2").prop("disabled", true);
				
				$("#Rvalue3").prop("disabled", false);
				$("#conocido2").prop("disabled", false);
				
				$("#FechaB").prop("disabled", false);
				$("#LugarB").prop("disabled", false);
				$("#options").prop("disabled", false);
				$("#Nnotario").prop("disabled", false);
				
							
				$("#treg").prop("disabled", false);
				$("#usoA").prop("disabled", false);
				$("#otroapellido").prop("disabled", true);
				
				$("#OptionRA").prop("disabled", false);
				
				
				$("#ccargo").prop("disabled", false);
				$("#mnombre").prop("disabled", false);
				
				$("#ccargo").attr("checked", true);
				$("#mnombre").attr("checked", true);
				
				
				$("#Avalue").prop("disabled", false);
				
				document.getElementById("foliacionmatr").style.display = '';
				
				$("#edit_anioe").prop("disabled", false);
				$("#edit_libro").prop("disabled", false);
				$("#edit_npartida").prop("disabled", false);
				$("#tipopar").prop("disabled", false);
				
				document.getElementById("foliacionmatr2").style.display = '';
				
				$("#edit_anioe2").prop("disabled", false);
				$("#edit_libro2").prop("disabled", false);
				$("#edit_npartida2").prop("disabled", false);
				$("#tipopar2").prop("disabled", false);
				
			
				$("#Rvalue2").attr("checked", true);
				$("#conocido1").attr("checked", false);
				$("#Rvalue3").attr("checked", true);
				$("#conocido2").attr("checked", false);
				$("#OptionRA").attr("checked", true);
				$("#Avalue").attr("checked", true);
				
				
				
				
				 document.getElementById("partida2").style.display = '';
			
			}
        });
    });



$(document).ready(function () {
        $("#tipo1").click(function () {
            if ($("#partida2").is(":visible")) {
               

				 document.getElementById("matri1").style.display = 'none';
				
				$("#edit_el").prop("disabled", true);
				$("#apellidoel1").prop("disabled", true);
				$("#apellidoelid").prop("disabled", true);
				$("#conotxt").prop("disabled", true);
				
				$("#Rvalue2").prop("disabled", true);
				$("#conocido1").prop("disabled", true);
				
				
				$("#Nellamat").prop("disabled", true);
				$("#apellidoella1").prop("disabled", true);
				$("#apellidoellaid").prop("disabled", true);
				$("#conotxt2").prop("disabled", true);
				
				$("#Rvalue3").prop("disabled", true);
				$("#conocido2").prop("disabled", true);
				
				$("#FechaB").prop("disabled", true);
				$("#LugarB").prop("disabled", true);
				$("#options").prop("disabled", true);
				$("#Nnotario").prop("disabled", true);
				
							
				$("#treg").prop("disabled", true);
				$("#usoA").prop("disabled", true);
				$("#otroapellido").prop("disabled", true);
				
				$("#OptionRA").prop("disabled", true);
				
				$("#ccargo").prop("disabled", true);
				$("#mnombre").prop("disabled", true);
				
				$("#ccargo").attr("checked", false);
				$("#mnombre").attr("checked", false);
				
				
				
				$("#Avalue").prop("disabled", true);
				
				document.getElementById("foliacionmatr").style.display = 'none';
				
				$("#edit_anioe").prop("disabled", true);
				$("#edit_libro").prop("disabled", true);
				$("#edit_npartida").prop("disabled", true);
				$("#tipopar").prop("disabled", true);
				
				document.getElementById("foliacionmatr2").style.display = 'none';
				
				$("#edit_anioe2").prop("disabled", true);
				$("#edit_libro2").prop("disabled", true);
				$("#edit_npartida2").prop("disabled", true);
				$("#tipopar2").prop("disabled", true);
				
			
				$("#Rvalue2").attr("checked", false);
				$("#conocido1").attr("checked", false);
				$("#Rvalue3").attr("checked", false);
				$("#conocido2").attr("checked", false);
				$("#OptionRA").attr("checked", false);
				
			
				
				$("#Avalue").attr("checked", false);
				
				
				
				
				 document.getElementById("partida2").style.display = 'none';
				
				document.querySelectorAll('[id=tipo1]').forEach((x) => x.checked = false);
			
            }
            else {
				
				
                document.getElementById("matri1").style.display = '';
				
				$("#edit_el").prop("disabled", false);
				$("#apellidoel1").prop("disabled", false);
				$("#apellidoelid").prop("disabled", false);
				$("#conotxt").prop("disabled", true);
				
				$("#Rvalue2").prop("disabled", false);
				$("#conocido1").prop("disabled", false);
				
				
				$("#Nellamat").prop("disabled", false);
				$("#apellidoella1").prop("disabled", false);
				$("#apellidoellaid").prop("disabled", false);
				$("#conotxt2").prop("disabled", true);
				
				$("#Rvalue3").prop("disabled", false);
				$("#conocido2").prop("disabled", false);
				
				$("#FechaB").prop("disabled", false);
				$("#LugarB").prop("disabled", false);
				$("#options").prop("disabled", false);
				$("#Nnotario").prop("disabled", false);
				
							
				$("#treg").prop("disabled", false);
				$("#usoA").prop("disabled", false);
				$("#otroapellido").prop("disabled", true);
				
				$("#OptionRA").prop("disabled", false);
				$("#Avalue").prop("disabled", false);
				
				document.getElementById("foliacionmatr").style.display = '';
				
				$("#edit_anioe").prop("disabled", false);
				$("#edit_libro").prop("disabled", false);
				$("#edit_npartida").prop("disabled", false);
				$("#tipopar").prop("disabled", false);
				
				document.getElementById("foliacionmatr2").style.display = 'none';
				
				$("#edit_anioe2").prop("disabled", true);
				$("#edit_libro2").prop("disabled", true);
				$("#edit_npartida2").prop("disabled", true);
				$("#tipopar2").prop("disabled", true);
				
			
				$("#Rvalue2").attr("checked", true);
				$("#conocido1").attr("checked", false);
				$("#Rvalue3").attr("checked", true);
				$("#conocido2").attr("checked", false);
				$("#OptionRA").attr("checked", true);
				
				
				$("#ccargo").prop("disabled", false);
				$("#mnombre").prop("disabled", false);
				
				$("#ccargo").attr("checked", true);
				$("#mnombre").attr("checked", true);
				
				
				
				$("#Avalue").attr("checked", true);
				
				
				
				
				 document.getElementById("partida2").style.display = 'none';
				
				
			
			}
        });
    });




$(document).ready(function () {
        $("#tipo2").click(function () {
            if ($("#partida2").is(":visible")) {
             document.getElementById("matri1").style.display = 'none';
				
				$("#edit_el").prop("disabled", true);
				$("#apellidoel1").prop("disabled", true);
				$("#apellidoelid").prop("disabled", true);
				$("#conotxt").prop("disabled", true);
				
				$("#Rvalue2").prop("disabled", true);
				$("#conocido1").prop("disabled", true);
				
				
				$("#Nellamat").prop("disabled", true);
				$("#apellidoella1").prop("disabled", true);
				$("#apellidoellaid").prop("disabled", true);
				$("#conotxt2").prop("disabled", true);
				
				$("#Rvalue3").prop("disabled", true);
				$("#conocido2").prop("disabled", true);
				
				$("#FechaB").prop("disabled", true);
				$("#LugarB").prop("disabled", true);
				$("#options").prop("disabled", true);
				$("#Nnotario").prop("disabled", true);
				
							
				$("#treg").prop("disabled", true);
				$("#usoA").prop("disabled", true);
				$("#otroapellido").prop("disabled", true);
				
				$("#OptionRA").prop("disabled", true);
				
			
				
				$("#Avalue").prop("disabled", true);
				
				document.getElementById("foliacionmatr").style.display = 'none';
				
				$("#edit_anioe").prop("disabled", true);
				$("#edit_libro").prop("disabled", true);
				$("#edit_npartida").prop("disabled", true);
				$("#tipopar").prop("disabled", true);
				
				document.getElementById("foliacionmatr2").style.display = 'none';
				
				$("#edit_anioe2").prop("disabled", true);
				$("#edit_libro2").prop("disabled", true);
				$("#edit_npartida2").prop("disabled", true);
				$("#tipopar2").prop("disabled", true);
				
			
				$("#Rvalue2").attr("checked", false);
				$("#conocido1").attr("checked", false);
				$("#Rvalue3").attr("checked", false);
				$("#conocido2").attr("checked", false);
				$("#OptionRA").attr("checked", false);
				
				
				$("#ccargo").prop("disabled", true);
				$("#mnombre").prop("disabled", true);
				
				$("#ccargo").attr("checked", false);
				$("#mnombre").attr("checked", false);
				
				
				$("#Avalue").attr("checked", false);
				
				
				
				
				 document.getElementById("partida2").style.display = 'none';
				
				document.querySelectorAll('[id=tipo2]').forEach((x) => x.checked = false);
				

            }
            else {
               
				  document.getElementById("matri1").style.display = '';
				
				$("#edit_el").prop("disabled", false);
				$("#apellidoel1").prop("disabled", false);
				$("#apellidoelid").prop("disabled", false);
				$("#conotxt").prop("disabled", true);
				
				$("#Rvalue2").prop("disabled", false);
				$("#conocido1").prop("disabled", false);
				
				
				$("#Nellamat").prop("disabled", false);
				$("#apellidoella1").prop("disabled", false);
				$("#apellidoellaid").prop("disabled", false);
				$("#conotxt2").prop("disabled", true);
				
				$("#Rvalue3").prop("disabled", false);
				$("#conocido2").prop("disabled", false);
				
				$("#FechaB").prop("disabled", false);
				$("#LugarB").prop("disabled", false);
				$("#options").prop("disabled", false);
				$("#Nnotario").prop("disabled", false);
				
							
				$("#treg").prop("disabled", false);
				$("#usoA").prop("disabled", false);
				$("#otroapellido").prop("disabled", true);
				
				$("#OptionRA").prop("disabled", false);
				
			
				$("#Avalue").prop("disabled", false);
				
				document.getElementById("foliacionmatr").style.display = 'none';
				
				$("#edit_anioe").prop("disabled", true);
				$("#edit_libro").prop("disabled", true);
				$("#edit_npartida").prop("disabled", true);
				$("#tipopar").prop("disabled", true);
				
				document.getElementById("foliacionmatr2").style.display = '';
				
				$("#edit_anioe2").prop("disabled", false);
				$("#edit_libro2").prop("disabled", false);
				$("#edit_npartida2").prop("disabled", false);
				$("#tipopar2").prop("disabled", false);
				
			
				$("#Rvalue2").attr("checked", true);
				$("#conocido1").attr("checked", false);
				$("#Rvalue3").attr("checked", true);
				$("#conocido2").attr("checked", false);
				$("#OptionRA").attr("checked", true);
				
			$("#ccargo").prop("disabled", false);
				$("#mnombre").prop("disabled", false);
				
				$("#ccargo").attr("checked", true);
				$("#mnombre").attr("checked", true);
		
				
				
				$("#Avalue").attr("checked", true);
				
				
				
				
				 document.getElementById("partida2").style.display = 'none';
				

			
			}
        });
    });






// Pgramacion de select radio de divorcios

// este codigo habilita los campos para poder digitar los nombres de los divorciados

$(document).ready(function () {
        $("#tipo1d").click(function () {
            if ($("#nombres").is(":visible")) {
                document.getElementById("nombres").style.display = 'none';
				 document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				$("#edit_el2").prop("disabled", true);
				$("#Nella").prop("disabled", true);
				$("#edit_anioe_div1").prop("disabled", true);
				$("#edit_libro_div1").prop("disabled", true);
				$("#edit_npartida_div1").prop("disabled", true);
				$("#edit_ini_div1").prop("disabled", true);
				$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);

						$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);

				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
								
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
				
				
				
				document.querySelectorAll('[id=tipo1d]').forEach((x) => x.checked = false);
            }
            else {
                document.getElementById("nombres").style.display = '';
				document.getElementById("foliacion_el_ella").style.display = '';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				 $("#edit_el2").prop("disabled", false);
				$("#Nella").prop("disabled", false);
				$("#edit_anioe_div1").prop("disabled", false);
				$("#edit_libro_div1").prop("disabled", false);
				$("#edit_npartida_div1").prop("disabled", false);
				$("#edit_ini_div1").prop("disabled", false);
				$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);

					$("#tipodivel").prop("disabled", false);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);
				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
				
				
			}
        });
    });


$(document).ready(function () {
        $("#tipo2d").click(function () {
            if ($("#nombres").is(":visible")) {
                document.getElementById("nombres").style.display = 'none';
				 document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				$("#edit_el2").prop("disabled", true);
				$("#Nella").prop("disabled", true);
				$("#edit_anioe_div1").prop("disabled", true);
				$("#edit_libro_div1").prop("disabled", true);
				$("#edit_npartida_div1").prop("disabled", true);
				$("#edit_ini_div1").prop("disabled", true);
				$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);


					$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);
				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				document.querySelectorAll('[id=tipo2d]').forEach((x) => x.checked = false);
            }
            else {
                document.getElementById("nombres").style.display = '';
				document.getElementById("foliacion_el_ella").style.display = '';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
						 $("#edit_el2").prop("disabled", false);
				$("#Nella").prop("disabled", false);
					$("#edit_anioe_div1").prop("disabled", false);
				$("#edit_libro_div1").prop("disabled", false);
				$("#edit_npartida_div1").prop("disabled", false);
				$("#edit_ini_div1").prop("disabled", false);
				$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);


					$("#tipodivel").prop("disabled", false);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);
				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
				
			}
        });
    });






$(document).ready(function () {
        $("#tipo3d").click(function () {
            if ($("#foliacion_el_ella").is(":visible")) {
                 document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("nombres").style.display = 'none';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				$("#edit_el2").prop("disabled", true);
				$("#Nella").prop("disabled", true);
				$("#edit_anioe_div1").prop("disabled", true);
				$("#edit_libro_div1").prop("disabled", true);
				$("#edit_npartida_div1").prop("disabled", true);
				$("#edit_ini_div1").prop("disabled", true);
					$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);


					$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);
		
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				document.querySelectorAll('[id=tipo3d]').forEach((x) => x.checked = false);
            }
            else {
              	document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("nombres").style.display = 'none';
				document.getElementById("partidadivmatri").style.display = '';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
						 $("#edit_el2").prop("disabled", true);
				$("#Nella").prop("disabled", true);
					$("#edit_anioe_div1").prop("disabled", true);
				$("#edit_libro_div1").prop("disabled", true);
				$("#edit_npartida_div1").prop("disabled", true);
				$("#edit_ini_div1").prop("disabled", true);
				$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", false);
				$("#edit_libro2dm").prop("disabled", false);
				$("#edit_npartida2dm").prop("disabled", false);


					$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", false);
				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
			
			}
        });
    });



$(document).ready(function () {
        $("#tipo4d").click(function () {
            if ($("#nota4").is(":visible")) {
                document.getElementById("nombres").style.display = 'none';
				 document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
					document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				$("#edit_el2").prop("disabled", true);
				$("#Nella").prop("disabled", true);
				$("#edit_anioe_div1").prop("disabled", true);
				$("#edit_libro_div1").prop("disabled", true);
				$("#edit_npartida_div1").prop("disabled", true);
				$("#edit_ini_div1").prop("disabled", true);
				$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);
						$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);


					$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);
				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
				document.querySelectorAll('[id=tipo4d]').forEach((x) => x.checked = false);
            }
            else {
                document.getElementById("nombres").style.display = '';
				document.getElementById("foliacion_el_ella").style.display = '';
					document.getElementById("partidadiv").style.display = '';
					document.getElementById("partidadivmatri").style.display = 'none';
					document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = '';
				document.getElementById("nota4").style.display = 'none';
						 $("#edit_el2").prop("disabled", false);
				$("#Nella").prop("disabled", false);
					$("#edit_anioe_div1").prop("disabled", false);
				$("#edit_libro_div1").prop("disabled", false);
				$("#edit_npartida_div1").prop("disabled", false);
				$("#edit_ini_div1").prop("disabled", false);
					$("#edit_anioe2d").prop("disabled", false);
				$("#edit_libro2d").prop("disabled", false);
				$("#edit_npartida2d").prop("disabled", false);
					$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);


					$("#tipodivel").prop("disabled", false);
				$("#tipodivella").prop("disabled", false);
				$("#tipodivmatri").prop("disabled", true);
				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
				
			}
        });
    });

$(document).ready(function () {
        $("#tipo5d").click(function () {
            if ($("#nombres").is(":visible")) {
                document.getElementById("nombres").style.display = 'none';
				 document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				$("#edit_el2").prop("disabled", true);
				$("#Nella").prop("disabled", true);
				$("#edit_anioe_div1").prop("disabled", true);
				$("#edit_libro_div1").prop("disabled", true);
				$("#edit_npartida_div1").prop("disabled", true);
				$("#edit_ini_div1").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);
					$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);

					$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);
							
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);			
				document.querySelectorAll('[id=tipo5d]').forEach((x) => x.checked = false);
            }
            else {
                document.getElementById("nombres").style.display = '';
				document.getElementById("foliacion_el_ella").style.display = '';
					document.getElementById("partidadivmatri").style.display = '';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = '';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
						 $("#edit_el2").prop("disabled", false);
				$("#Nella").prop("disabled", false);
					$("#edit_anioe_div1").prop("disabled", false);
				$("#edit_libro_div1").prop("disabled", false);
				$("#edit_npartida_div1").prop("disabled", false);
				$("#edit_ini_div1").prop("disabled", false);
					$("#edit_anioe2dm").prop("disabled", false);
				$("#edit_libro2dm").prop("disabled", false);
				$("#edit_npartida2dm").prop("disabled", false);
					$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);

					$("#tipodivel").prop("disabled", false);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", false);
							
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
				
			}
        });
    });

$(document).ready(function () {
        $("#tipo6d").click(function () {
            if ($("#nombres").is(":visible")) {
                document.getElementById("nombres").style.display = 'none';
				 document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				$("#edit_el2").prop("disabled", true);
				$("#Nella").prop("disabled", true);
				$("#edit_anioe_div1").prop("disabled", true);
				$("#edit_libro_div1").prop("disabled", true);
				$("#edit_npartida_div1").prop("disabled", true);
				$("#edit_ini_div1").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);
					$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);


					$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);
				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				document.querySelectorAll('[id=tipo6d]').forEach((x) => x.checked = false);
            }
            else {
                document.getElementById("nombres").style.display = '';
				document.getElementById("foliacion_el_ella").style.display = '';
					document.getElementById("partidadivmatri").style.display = '';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = '';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
						 $("#edit_el2").prop("disabled", false);
				$("#Nella").prop("disabled", false);
					$("#edit_anioe_div1").prop("disabled", false);
				$("#edit_libro_div1").prop("disabled", false);
				$("#edit_npartida_div1").prop("disabled", false);
				$("#edit_ini_div1").prop("disabled", false);
					$("#edit_anioe2dm").prop("disabled", false);
				$("#edit_libro2dm").prop("disabled", false);
				$("#edit_npartida2dm").prop("disabled", false);
					$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);

					$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", false);
				$("#tipodivmatri").prop("disabled", false);
				
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
				
			}
			
        });
    });


$(document).ready(function () {
        $("#tipo7d").click(function () {
            if ($("#nombres").is(":visible")) {
                document.getElementById("nombres").style.display = 'none';
				 document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				$("#edit_el2").prop("disabled", true);
				$("#Nella").prop("disabled", true);
				$("#edit_anioe_div1").prop("disabled", true);
				$("#edit_libro_div1").prop("disabled", true);
				$("#edit_npartida_div1").prop("disabled", true);
				$("#edit_ini_div1").prop("disabled", true);
				$("#edit_anioe2dm").prop("disabled", true);
				$("#edit_libro2dm").prop("disabled", true);
				$("#edit_npartida2dm").prop("disabled", true);
					$("#edit_anioe2d").prop("disabled", true);
				$("#edit_libro2d").prop("disabled", true);
				$("#edit_npartida2d").prop("disabled", true);


					$("#tipodivel").prop("disabled", true);
				$("#tipodivella").prop("disabled", true);
				$("#tipodivmatri").prop("disabled", true);
							
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);			
				document.querySelectorAll('[id=tipo7d]').forEach((x) => x.checked = false);
            }
            else {
                document.getElementById("nombres").style.display = '';
				document.getElementById("foliacion_el_ella").style.display = '';
					document.getElementById("partidadivmatri").style.display = '';
				document.getElementById("partidadiv").style.display = '';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = '';
						 $("#edit_el2").prop("disabled", false);
				$("#Nella").prop("disabled", false);
					$("#edit_anioe_div1").prop("disabled", false);
				$("#edit_libro_div1").prop("disabled", false);
				$("#edit_npartida_div1").prop("disabled", false);
				$("#edit_ini_div1").prop("disabled", false);
					$("#edit_anioe2dm").prop("disabled", false);
				$("#edit_libro2dm").prop("disabled", false);
				$("#edit_npartida2dm").prop("disabled", false);
					$("#edit_anioe2d").prop("disabled", false);
				$("#edit_libro2d").prop("disabled", false);
				$("#edit_npartida2d").prop("disabled", false);


					$("#tipodivel").prop("disabled", false);
				$("#tipodivella").prop("disabled", false);
				$("#tipodivmatri").prop("disabled", false);
							
		document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextofi").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
				
				$("#valuediv").attr("checked", false);
				$("#valuedivn").attr("checked", false);
				$("#valuedivnj").attr("checked", false);
				$("#valuedivnjs").attr("checked", false);
				$("#valuedivnjse").attr("checked", false);
				$("#valuedivofi").attr("checked", false);
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
				
				
			}
        });
    });


$(document).ready(function () {
        $("#art17_1").click(function () {
            if ($("#art171").is(":visible")) {
          document.getElementById("art171").style.display = 'none';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
				
				document.getElementById("partida173").style.display = 'none';
				document.getElementById("partida174").style.display = 'none';
				document.getElementById("datosnotrecti").style.display = 'none';
				
				$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);



				
				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';
				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
				
				
				$("#edit_anio15173").prop("disabled", true);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", true);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", true);
				$("#edit_npartida15174").prop("disabled", true);
				
				
				
				
				
				
				$("#tipopart").prop("disabled", true);
				$("#nombre17").prop("disabled", true);
				$("#sentido17").prop("disabled", true);
				$("#Fecha171").prop("disabled", true);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				
				$("#tipopart173").prop("disabled", true);
				$("#tipopart174").prop("disabled", true);
				
				
				
				$("#17tipop").prop("disabled", true);
				$("#17nombre").prop("disabled", true);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", false);
				$("#17nombre").attr("checked", false);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
				
				
				document.querySelectorAll('[id=art17_1]').forEach((x) => x.checked = false);
            }
            else {
             document.getElementById("art171").style.display = '';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
				document.getElementById("datosnotrecti").style.display = 'none';
				
				
				document.getElementById("partida173").style.display = '';
				document.getElementById("partida174").style.display = 'none';
				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';

$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);


				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
				
				
				$("#edit_anio15173").prop("disabled", false);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", false);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", false);
				$("#edit_npartida15174").prop("disabled", true);
				
				
				
				$("#tipopart").prop("disabled", false);
				$("#nombre17").prop("disabled", false);
				$("#sentido17").prop("disabled", false);
				$("#Fecha171").prop("disabled", false);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				
					$("#tipopart173").prop("disabled", false);
				$("#tipopart174").prop("disabled", true);
				
				
				$("#17tipop").prop("disabled", false);
				$("#17nombre").prop("disabled", false);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", true);
				$("#17nombre").attr("checked", true);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
			}
        });
    });

$(document).ready(function () {
        $("#art17_2").click(function () {
            if ($("#art172").is(":visible")) {
               document.getElementById("art171").style.display = 'none';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
				document.getElementById("datosnotrecti").style.display = 'none';
				
				
				document.getElementById("partida173").style.display = 'none';
				document.getElementById("partida174").style.display = 'none';

				$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);

				
				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';
				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
				
				
					$("#edit_anio15173").prop("disabled", true);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", true);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", true);
				$("#edit_npartida15174").prop("disabled", true);
				
				
			
				$("#tipopart").prop("disabled", true);
				$("#nombre17").prop("disabled", true);
				$("#sentido17").prop("disabled", true);
				$("#Fecha171").prop("disabled", true);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				
					$("#tipopart173").prop("disabled", true);
				$("#tipopart174").prop("disabled", true);
				
				
				$("#17tipop").prop("disabled", true);
				$("#17nombre").prop("disabled", true);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", false);
				$("#17nombre").attr("checked", false);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
				
				document.querySelectorAll('[id=art17_2]').forEach((x) => x.checked = false);
            }
            else {
     document.getElementById("art171").style.display = 'none';
				  document.getElementById("art171").style.display = '';
				 document.getElementById("art172").style.display = '';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
				
				document.getElementById("partida173").style.display = '';
				document.getElementById("partida174").style.display = '';
				document.getElementById("datosnotrecti").style.display = 'none';
				

				$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);

				
				
				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = '';
				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
				
				
					$("#edit_anio15173").prop("disabled", false);
				$("#edit_anio15174").prop("disabled", false);
				$("#edit_libro15173").prop("disabled", false);
				$("#edit_libro15174").prop("disabled", false);
				$("#edit_npartida15173").prop("disabled", false);
				$("#edit_npartida15174").prop("disabled", false);
				
				
				
					
				$("#tipopart").prop("disabled", false);
				$("#nombre17").prop("disabled", false);
				$("#sentido17").prop("disabled", false);
				$("#Fecha171").prop("disabled", false);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				
					$("#tipopart173").prop("disabled", false);
				$("#tipopart174").prop("disabled", false);
				
				
				
				$("#17tipop").prop("disabled", false);
				$("#17nombre").prop("disabled", false);
				
				$("#tipopart2").prop("disabled", false);
				$("#nombre172").prop("disabled", false);
				$("#sentido172").prop("disabled", false);
				$("#Fecha172").prop("disabled", false);
				$("#17tipop2").prop("disabled", false);
				$("#17nombre2").prop("disabled", false);
			
			$("#17tipop").attr("checked", true);
				$("#17nombre").attr("checked", true);
				$("#17tipop2").attr("checked", true);
				$("#17nombre2").attr("checked", true);
				
			}
        });
    });


$(document).ready(function () {
        $("#art17_3").click(function () {
            if ($("#art171").is(":visible")) {
          document.getElementById("art171").style.display = 'none';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
				
				document.getElementById("partida173").style.display = 'none';
				document.getElementById("partida174").style.display = 'none';
				document.getElementById("datosnotrecti").style.display = 'none';
				
				$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);

				
				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';
				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
				
				
				$("#edit_anio15173").prop("disabled", true);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", true);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", true);
				$("#edit_npartida15174").prop("disabled", true);
				
				
				
				
				
				
				$("#tipopart").prop("disabled", true);
				$("#nombre17").prop("disabled", true);
				$("#sentido17").prop("disabled", true);
				$("#Fecha171").prop("disabled", true);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				
				$("#tipopart173").prop("disabled", true);
				$("#tipopart174").prop("disabled", true);
				
				
				
				$("#17tipop").prop("disabled", true);
				$("#17nombre").prop("disabled", true);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", false);
				$("#17nombre").attr("checked", false);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
				
				
				document.querySelectorAll('[id=art17_3]').forEach((x) => x.checked = false);
            }
            else {
             document.getElementById("art171").style.display = '';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
				document.getElementById("datosnotrecti").style.display = '';
				
				
				document.getElementById("partida173").style.display = '';
				document.getElementById("partida174").style.display = 'none';
				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';


$("#cargorecti").prop("disabled", false);
				$("#nombrerecti").prop("disabled", false);
				$("#lugarrecti").prop("disabled", false);






				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
				
				
				$("#edit_anio15173").prop("disabled", false);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", false);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", false);
				$("#edit_npartida15174").prop("disabled", true);
				
				
				
				$("#tipopart").prop("disabled", false);
				$("#nombre17").prop("disabled", false);
				$("#sentido17").prop("disabled", false);
				$("#Fecha171").prop("disabled", false);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				
					$("#tipopart173").prop("disabled", false);
				$("#tipopart174").prop("disabled", true);
				
				
				$("#17tipop").prop("disabled", false);
				$("#17nombre").prop("disabled", false);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", true);
				$("#17nombre").attr("checked", true);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
			}
        });
    });






$(document).ready(function () {
        $("#art15_1").click(function () {
            if ($("#art151").is(":visible")) {
                document.getElementById("art171").style.display = 'none';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
				
				document.getElementById("partida173").style.display = 'none';
				document.getElementById("partida174").style.display = 'none';

				document.getElementById("datosnotrecti").style.display = 'none';

			
$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);





				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';
				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
				
					$("#edit_anio15173").prop("disabled", true);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", true);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", true);
				$("#edit_npartida15174").prop("disabled", true);
				
				
			
				$("#tipopart").prop("disabled", true);
				$("#nombre17").prop("disabled", true);
				$("#sentido17").prop("disabled", true);
				$("#Fecha171").prop("disabled", true);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				
					$("#tipopart173").prop("disabled", true);
				$("#tipopart174").prop("disabled", true);
				
				$("#17tipop").prop("disabled", true);
				$("#17nombre").prop("disabled", true);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", false);
				$("#17nombre").attr("checked", false);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
				
				document.querySelectorAll('[id=art15_1]').forEach((x) => x.checked = false);
            }
            else {
                 document.getElementById("art171").style.display = 'none';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = '';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = '';
				document.getElementById("partida172").style.display = 'none';
				document.getElementById("datosnotrecti").style.display = 'none';
				
				document.getElementById("partida173").style.display = 'none';
				document.getElementById("partida174").style.display = 'none';
				
				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';


$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);


			$("#nombre151").prop("disabled", false);
				$("#nombre152").prop("disabled", true);
				$("#Fecha151").prop("disabled", false);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", false);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", false);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", false);
				$("#edit_npartida15172").prop("disabled", true);
				
				
					$("#edit_anio15173").prop("disabled", true);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", true);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", true);
				$("#edit_npartida15174").prop("disabled", true);
				
				
				$("#art15_1s").prop("disabled", false);
				$("#art15_2s").prop("disabled", false);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				
				$("#tipopart").prop("disabled", true);
				$("#nombre17").prop("disabled", true);
				$("#sentido17").prop("disabled", true);
				$("#Fecha171").prop("disabled", true);
				$("#tipopart17").prop("disabled", false);
				$("#tipopart172").prop("disabled", true);
				
					$("#tipopart173").prop("disabled", true);
				$("#tipopart174").prop("disabled", true);
				
				
				$("#17tipop").prop("disabled", true);
				$("#17nombre").prop("disabled", true);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", false);
				$("#17nombre").attr("checked", false);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
			}
        });
    });

$(document).ready(function () {
        $("#art15_2").click(function () {
            if ($("#art152").is(":visible")) {
                document.getElementById("art171").style.display = 'none';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
				document.getElementById("datosnotrecti").style.display = 'none';
				
				document.getElementById("partida173").style.display = 'none';
				document.getElementById("partida174").style.display = 'none';
				
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';



$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);


				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
				
					$("#edit_anio15173").prop("disabled", true);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", true);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", true);
				$("#edit_npartida15174").prop("disabled", true);
				
				
				
					$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				
				$("#tipopart").prop("disabled", true);
				$("#nombre17").prop("disabled", true);
				$("#sentido17").prop("disabled", true);
				$("#Fecha171").prop("disabled", true);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				
					$("#tipopart173").prop("disabled", true);
				$("#tipopart174").prop("disabled", true);
				
				$("#17tipop").prop("disabled", true);
				$("#17nombre").prop("disabled", true);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", false);
				$("#17nombre").attr("checked", false);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
				document.querySelectorAll('[id=art15_2]').forEach((x) => x.checked = false);
            }
            else {
                 document.getElementById("art171").style.display = 'none';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = '';
				 document.getElementById("art152").style.display = '';
				document.getElementById("partida171").style.display = '';
				document.getElementById("partida172").style.display = '';
				document.getElementById("datosnotrecti").style.display = 'none';
				
				
				document.getElementById("partida173").style.display = 'none';
				document.getElementById("partida174").style.display = 'none';
				
				
				
				
				document.getElementById("nota171").style.display = '';
				document.getElementById("nota172").style.display = 'none';




$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);


				$("#nombre151").prop("disabled", false);
				$("#nombre152").prop("disabled", false);
				$("#Fecha151").prop("disabled", false);
				$("#Fecha152").prop("disabled", false);
				$("#edit_anio1517").prop("disabled", false);
				$("#edit_anio15172").prop("disabled", false);
				$("#edit_libro1517").prop("disabled", false);
				$("#edit_libro15172").prop("disabled", false);
				$("#edit_npartida1517").prop("disabled", false);
				$("#edit_npartida15172").prop("disabled", false);
				
				
					$("#edit_anio15173").prop("disabled", true);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", true);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", true);
				$("#edit_npartida15174").prop("disabled", true);
				
				
				$("#art15_1s").prop("disabled", false);
				$("#art15_2s").prop("disabled", false);
				$("#art15_1_1s").prop("disabled", false);
				$("#art15_2_1s").prop("disabled", false);
		
				$("#tipopart").prop("disabled", true);
				$("#nombre17").prop("disabled", true);
				$("#sentido17").prop("disabled", true);
				$("#Fecha171").prop("disabled", true);
				$("#tipopart17").prop("disabled", false);
				$("#tipopart172").prop("disabled", false);
				
				$("#tipopart173").prop("disabled", true);
				$("#tipopart174").prop("disabled", true);
				
				$("#17tipop").prop("disabled", true);
				$("#17nombre").prop("disabled", true);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
				$("#17tipop").attr("checked", false);
				$("#17nombre").attr("checked", false);
				$("#17tipop2").attr("checked", false);
				$("#17nombre2").attr("checked", false);
			}
        });
    });






$(document).ready(function () {
        $("#busqnombre").click(function () {
            if ($("#decreext").is(":visible")) {
                document.getElementById("decreext").style.display = 'none';
				
            }
            else {
                document.getElementById("decreext").style.display = '';
	
			}
        });
    });




$(document).ready(function () {
        $("#valuediv").click(function () {
            if ($("#decreext").is(":visible")) {
                document.getElementById("decreext").style.display = 'none';
				
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
				
            }
            else {
                document.getElementById("decreext").style.display = '';
	
				
				$("#decreval").attr("checked", false);
				$("#timedecre").prop("disabled", true);
				$("#decreval2").attr("checked", false);
				$("#fechadecre").prop("disabled", true);
				$("#por_ext").attr("checked", false);
				$("#txt_por_ext").prop("disabled", true);
				
			
			}
        });
    });


$(document).ready(function () {
        $("#valuedivn").click(function () {
            if ($("#decreextn").is(":visible")) {
                document.getElementById("decreextn").style.display = 'none';
				
				
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
				
            }
            else {
                document.getElementById("decreextn").style.display = '';
	
				$("#decrevaln").attr("checked", false);
				$("#timedecren").prop("disabled", true);
				$("#decreval2n").attr("checked", false);
				$("#fechadecren").prop("disabled", true);
				$("#por_csj").attr("checked", false);
				$("#txt_por_csj").prop("disabled", true);
				
			}
        });
    });

$(document).ready(function () {
        $("#valuedivnj").click(function () {
            if ($("#decreextnj").is(":visible")) {
                document.getElementById("decreextnj").style.display = 'none';
			
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
				
				
            }
            else {
                document.getElementById("decreextnj").style.display = '';
	
				
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
			
			}
        });
    });

$(document).ready(function () {
        $("#valuedivnjs").click(function () {
            if ($("#decreextnjs").is(":visible")) {
                document.getElementById("decreextnjs").style.display = 'none';
				
				
				
				$("#decrevalnjs").attr("checked", false);
				$("#timedecrenjs").prop("disabled", true);
				$("#decreval2njs").attr("checked", false);
				$("#fechadecrenjs").prop("disabled", true);
				$("#por_sjuz").attr("checked", false);
				$("#txt_por_sjuz").prop("disabled", true);
				
			
            }
            else {
                document.getElementById("decreextnjs").style.display = '';
	
				
				
				$("#decrevalnj").attr("checked", false);
				$("#timedecrenj").prop("disabled", true);
				$("#decreval2nj").attr("checked", false);
				$("#fechadecrenj").prop("disabled", true);
				$("#por_rjuz").attr("checked", false);
				$("#txt_por_rjuz").prop("disabled", true);
			
			}
        });
    });

$(document).ready(function () {
        $("#valuedivofi").click(function () {
            if ($("#decreextofi").is(":visible")) {
                document.getElementById("decreextofi").style.display = 'none';
				
				
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
            }
            else {
                document.getElementById("decreextofi").style.display = '';
	
				
				
				$("#decrevalofi").attr("checked", false);
				$("#timedecreofi").prop("disabled", true);
				$("#decreval2ofi").attr("checked", false);
				$("#fechadecreofi").prop("disabled", true);
				$("#por_rofi").attr("checked", false);
				$("#txt_por_rofi").prop("disabled", true);
				$("#por_ofi").attr("checked", false);
				$("#txt_por_ofi").prop("disabled", true);
			}
        });
    });



$(document).ready(function () {
        $("#valuedivnjse").click(function () {
            if ($("#decreextnjse").is(":visible")) {
                document.getElementById("decreextnjse").style.display = 'none';
				
				
				
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
			
            }
            else {
                document.getElementById("decreextnjse").style.display = '';
	
								
				$("#decrevalnjse").attr("checked", false);
				$("#timedecrenjse").prop("disabled", true);
				$("#decreval2njse").attr("checked", false);
				$("#fechadecrenjse").prop("disabled", true);
				$("#por_ejuz").attr("checked", false);
				$("#txt_por_ejuz").prop("disabled", true);
				
		
			}
        });
    });









function myFunction() {
  document.getElementById("edit_product").reset();

	 document.getElementById("matri1").style.display = 'none';
				
				$("#edit_el").prop("disabled", true);
				$("#apellidoel1").prop("disabled", true);
				$("#apellidoelid").prop("disabled", true);
				$("#conotxt").prop("disabled", true);
				
				$("#Rvalue2").prop("disabled", true);
				$("#conocido1").prop("disabled", true);
				
				
				$("#Nellamat").prop("disabled", true);
				$("#apellidoella1").prop("disabled", true);
				$("#apellidoellaid").prop("disabled", true);
				$("#conotxt2").prop("disabled", true);
				
				$("#Rvalue3").prop("disabled", true);
				$("#conocido2").prop("disabled", true);
				
				$("#FechaB").prop("disabled", true);
				$("#LugarB").prop("disabled", true);
				$("#options").prop("disabled", true);
				$("#Nnotario").prop("disabled", true);
				
							
				$("#treg").prop("disabled", true);
				$("#usoA").prop("disabled", true);
				$("#otroapellido").prop("disabled", true);
				
				$("#OptionRA").prop("disabled", true);
	
	$("#ccargo").prop("disabled", true);
				$("#mnombre").prop("disabled", true);
				
				$("#ccargo").attr("checked", false);
				$("#mnombre").attr("checked", false);
	
	
	
	
	
	
	
	
	
				$("#Avalue").prop("disabled", true);
				
				document.getElementById("foliacionmatr").style.display = 'none';
				
				$("#edit_anioe").prop("disabled", true);
				$("#edit_libro").prop("disabled", true);
				$("#edit_npartida").prop("disabled", true);
				$("#tipopar").prop("disabled", true);
				
				document.getElementById("foliacionmatr2").style.display = 'none';
				
				$("#edit_anioe2").prop("disabled", true);
				$("#edit_libro2").prop("disabled", true);
				$("#edit_npartida2").prop("disabled", true);
				$("#tipopar2").prop("disabled", true);
				
			
				$("#Rvalue2").attr("checked", false);
				$("#conocido1").attr("checked", false);
				$("#Rvalue3").attr("checked", false);
				$("#conocido2").attr("checked", false);
				$("#OptionRA").attr("checked", false);
	

	
				$("#Avalue").attr("checked", false);
				
				
				
				
				 document.getElementById("partida2").style.display = 'none';
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}

function myFunction2() {
  document.getElementById("enviardivorcios").reset();
	 document.getElementById("nombres").style.display = 'none';
				 document.getElementById("foliacion_el_ella").style.display = 'none';
				document.getElementById("partidadivmatri").style.display = 'none';
				document.getElementById("partidadiv").style.display = 'none';
				document.getElementById("nota1").style.display = 'none';
				document.getElementById("nota2").style.display = 'none';
				document.getElementById("nota3").style.display = 'none';
				document.getElementById("nota4").style.display = 'none';
				document.getElementById("decreext").style.display = 'none';
				document.getElementById("decreextn").style.display = 'none';
				document.getElementById("decreextnj").style.display = 'none';
				document.getElementById("decreextnjs").style.display = 'none';
				document.getElementById("decreextnjse").style.display = 'none';
	document.getElementById("decreextofi").style.display = 'none';
	document.getElementById("timedecre").disabled = 'true';
	document.getElementById("fechadecre").disabled = 'true';
	document.getElementById("timedecren").disabled = 'true';
	document.getElementById("fechadecren").disabled = 'true';
	document.getElementById("timedecrenj").disabled = 'true';
	document.getElementById("fechadecrenj").disabled = 'true';
		document.getElementById("timedecrenjs").disabled = 'true';
	document.getElementById("fechadecrenjs").disabled = 'true';
	document.getElementById("timedecrenjse").disabled = 'true';
	document.getElementById("fechadecrenjse").disabled = 'true';
	document.getElementById("txt_por_ext").disabled = 'true';
	document.getElementById("txt_por_csj").disabled = 'true';
	document.getElementById("txt_por_rjuz").disabled = 'true';
		document.getElementById("txt_por_sjuz").disabled = 'true';
		document.getElementById("txt_por_ejuz").disabled = 'true';
		document.getElementById("txt_por_rofi").disabled = 'true';
	document.getElementById("timedecreofi").disabled = 'true';
	document.getElementById("fechadecreofi").disabled = 'true';
	document.getElementById("txt_por_ofi").disabled = 'true';
}

	function myFunction4() {
  document.getElementById("art17form").reset();
		 document.getElementById("art171").style.display = 'none';
				 document.getElementById("art172").style.display = 'none';
				 document.getElementById("art151").style.display = 'none';
				 document.getElementById("art152").style.display = 'none';
				document.getElementById("partida171").style.display = 'none';
				document.getElementById("partida172").style.display = 'none';
		
				document.getElementById("partida173").style.display = 'none';
				document.getElementById("partida174").style.display = 'none';
				$("#tipopart173").prop("disabled", true);
				$("#tipopart174").prop("disabled", true);


$("#cargorecti").prop("disabled", true);
				$("#nombrerecti").prop("disabled", true);
				$("#lugarrecti").prop("disabled", true);

document.getElementById("datosnotrecti").style.display = 'none';



		
				document.getElementById("nota171").style.display = 'none';
				document.getElementById("nota172").style.display = 'none';
				$("#nombre151").prop("disabled", true);
				$("#nombre152").prop("disabled", true);
				$("#art15_1s").prop("disabled", true);
				$("#art15_2s").prop("disabled", true);
				$("#art15_1_1s").prop("disabled", true);
				$("#art15_2_1s").prop("disabled", true);
				$("#Fecha151").prop("disabled", true);
				$("#Fecha152").prop("disabled", true);
				$("#edit_anio1517").prop("disabled", true);
				$("#edit_anio15172").prop("disabled", true);
				$("#edit_libro1517").prop("disabled", true);
				$("#edit_libro15172").prop("disabled", true);
				$("#edit_npartida1517").prop("disabled", true);
				$("#edit_npartida15172").prop("disabled", true);
		
				$("#edit_anio15173").prop("disabled", true);
				$("#edit_anio15174").prop("disabled", true);
				$("#edit_libro15173").prop("disabled", true);
				$("#edit_libro15174").prop("disabled", true);
				$("#edit_npartida15173").prop("disabled", true);
				$("#edit_npartida15174").prop("disabled", true);
		
		
		
		
			
				$("#tipopart").prop("disabled", true);
				$("#nombre17").prop("disabled", true);
				$("#sentido17").prop("disabled", true);
				$("#Fecha171").prop("disabled", true);
				$("#tipopart17").prop("disabled", true);
				$("#tipopart172").prop("disabled", true);
				$("#17tipop").prop("disabled", true);
				$("#17nombre").prop("disabled", true);
				
				$("#tipopart2").prop("disabled", true);
				$("#nombre172").prop("disabled", true);
				$("#sentido172").prop("disabled", true);
				$("#Fecha172").prop("disabled", true);
				$("#17tipop2").prop("disabled", true);
				$("#17nombre2").prop("disabled", true);
				
	}
	
	
	




	$(function(){
    $(".validar").keydown(function(event){
        //alert(event.keyCode);
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
});

// $(document).ready(function(){
 // $('#salir').popover({title: "<code>Salir</code>", content: "<a href='../salir.php'><i class='fas fa-sign-out-alt' style='font-size: 25px; color: indianred'></i></a><br/>prueba", html: true, placement: "bottom"}); 
// });


// codigo de las opciones de cancelacion por defuncion

$(document).ready(function () {
        $("#tipo1cd").click(function () {
            if ($("#nombrescandef").is(":visible")) {
                document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = 'none';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
				
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = 'none';
				document.getElementById("fechadef").style.display = 'none';
				document.getElementById("nombrefallecido").style.display = 'none';
				
			
				
				
				
				$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", true);
				$("#sexocd22").prop("disabled", true);
				
				
				$("#edit_ncd").prop("disabled", true);
				$("#Fechacd").prop("disabled", true);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", true);
				$("#stfolio2").prop("disabled", true);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);
				
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				////////////
			
				$("#viudo").prop("disabled", true);
			
							
				////////////
			
				
						
				$("#sexocd1").prop("disabled", true);
				$("#sexocd1").prop("disabled", true);
				
								
				document.querySelectorAll('[id=tipo1cd]').forEach((x) => x.checked = false);
            }
            else {
				
				document.getElementById("nombrescandef").style.display = '';
				document.getElementById("cdfolio").style.display = '';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = '';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
				document.getElementById("nombrefallecido").style.display = '';
				
				document.getElementById("datosmat").style.display = 'none';
				
				document.getElementById("datosmat2").style.display = '';
				document.getElementById("fechadef").style.display = '';
				
	
				
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", false);
				$("#sexocd22").prop("disabled", false);
				
				
               	$("#edit_ncd").prop("disabled", false);
				$("#Fechacd").prop("disabled", false);
				$("#lugarcf").prop("disabled", false);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", false);
				$("#librodef1").prop("disabled", false);
				$("#numdef1").prop("disabled", false);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				
				$("#tipoparcandef").prop("disabled", false);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				
				
				
				////////////
			
				$("#viudo").prop("disabled", true);
			
						
			
					////////////
			
$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
			}
        });
    });


$(document).ready(function () {
        $("#tipo2cd").click(function () {
            if ($("#nombres").is(":visible")) {
              document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = 'none';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
			
				document.getElementById("nombrefallecido").style.display = 'none';
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = 'none';
				
				
				document.getElementById("fechadef").style.display = 'none';
			
				
				
				
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", true);
				$("#sexocd22").prop("disabled", true);
				
					$("#edit_ncd").prop("disabled", true);
				$("#Fechacd").prop("disabled", true);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				
				////////////
				
				$("#viudo").prop("disabled", true);
				
			
	$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
					////////////
			
			
	
				document.querySelectorAll('[id=tipo2cd]').forEach((x) => x.checked = false);
            }
            else {
              document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = '';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = '';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = '';
				document.getElementById("nombrefallecido").style.display = '';
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = '';
				
				document.getElementById("fechadef").style.display = '';
			
				$("#sexocd1").prop("disabled", false);
				$("#sexocd2").prop("disabled", false);
				
				$("#sexocd12").prop("disabled", false);
				$("#sexocd22").prop("disabled", false);
				
					$("#edit_ncd").prop("disabled", false);
				$("#Fechacd").prop("disabled", false);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);
				
				$("#aniopart2").prop("disabled", false);
				$("#librodef2").prop("disabled", false);
				$("#numdef2").prop("disabled", false);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", false);
				$("#tipoparcanmat").prop("disabled", true);
				
				
				
				////////////
			
				$("#viudo").prop("disabled", false);
				
				
					////////////
			
$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
				
			}
        });
    });






$(document).ready(function () {
        $("#tipo3cd").click(function () {
            if ($("#foliacion_el_ella").is(":visible")) {
              
				 document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = 'none';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
				document.getElementById("nombrefallecido").style.display = 'none';
				
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = 'none';
				
				document.getElementById("fechadef").style.display = 'none';
			
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", true);
				$("#sexocd22").prop("disabled", true);
				
					$("#edit_ncd").prop("disabled", true);
				$("#Fechacd").prop("disabled", true);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				////////////
				
				$("#viudo").prop("disabled", true);
				
	
				
					////////////
			
				
				$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				document.querySelectorAll('[id=tipo3cd]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = '';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = '';
				document.getElementById("nombrefallecido").style.display = '';

				document.getElementById("datosviu").style.display = 'none';
			
			document.getElementById("datosmat").style.display = '';
				document.getElementById("datosmat2").style.display = '';
				
				document.getElementById("fechadef").style.display = '';
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", false);
				$("#sexocd22").prop("disabled", false);
				
				
					$("#edit_ncd").prop("disabled", false);
				$("#Fechacd").prop("disabled", false);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", false);
				$("#librodef3").prop("disabled", false);
				$("#numdef3").prop("disabled", false);
				
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", false);
				
				////////////
			
				$("#viudo").prop("disabled", true);
				
		
				
					////////////
			
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
			
			}
        });
    });



$(document).ready(function () {
        $("#tipo4cd").click(function () {
            if ($("#nombrescandef").is(":visible")) {
               document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = 'none';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
			
				document.getElementById("nombrefallecido").style.display = 'none';
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = 'none';
				
				
				document.getElementById("fechadef").style.display = 'none';
				
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", true);
				$("#sexocd22").prop("disabled", true);
				
				$("#edit_ncd").prop("disabled", true);
				$("#Fechacd").prop("disabled", true);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);	
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				////////////
			
				$("#viudo").prop("disabled", true);
			
					////////////
			
			
				
			
				document.querySelectorAll('[id=tipo4cd]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("nombrescandef").style.display = '';
				document.getElementById("cdfolio").style.display = '';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = '';
				document.getElementById("foliacion2").style.display = '';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = '';
				
				document.getElementById("nombrefallecido").style.display = '';
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = '';
				
				document.getElementById("fechadef").style.display = '';
				
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				$("#sexocd1").prop("disabled", false);
				$("#sexocd2").prop("disabled", false);
				
				$("#sexocd12").prop("disabled", false);
				$("#sexocd22").prop("disabled", false);
				
				
					$("#edit_ncd").prop("disabled", false);
				$("#Fechacd").prop("disabled", false);
				$("#lugarcf").prop("disabled", false);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", false);
				$("#librodef1").prop("disabled", false);
				$("#numdef1").prop("disabled", false);	
				
				$("#aniopart2").prop("disabled", false);
				$("#librodef2").prop("disabled", false);
				$("#numdef2").prop("disabled", false);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				
				$("#tipoparcandef").prop("disabled", false);
				$("#tipoparviudez").prop("disabled", false);
				$("#tipoparcanmat").prop("disabled", true);
				
				////////////
			
				$("#viudo").prop("disabled", false);
			
				
					////////////
			
				
		
				
			
			}
        });
    });

$(document).ready(function () {
        $("#tipo5cd").click(function () {
            if ($("#nombres").is(":visible")) {
              document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = 'none';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
				
				document.getElementById("nombrefallecido").style.display = 'none';
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = 'none';
				
				document.getElementById("fechadef").style.display = 'none';
			
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", true);
				$("#sexocd22").prop("disabled", true);
				
					$("#edit_ncd").prop("disabled", true);
				$("#Fechacd").prop("disabled", true);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				////////////
			
				$("#viudo").prop("disabled", true);
			
					////////////
				
		
				
				
				document.querySelectorAll('[id=tipo5cd]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("nombrescandef").style.display = '';
				document.getElementById("cdfolio").style.display = '';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = '';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = '';
				
				document.getElementById("datosviu").style.display = 'none';
				
				document.getElementById("nombrefallecido").style.display = '';
				document.getElementById("datosmat").style.display = '';
				document.getElementById("datosmat2").style.display = '';
				
				document.getElementById("fechadef").style.display = '';
				
			
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				
				$("#sexocd12").prop("disabled", false);
				$("#sexocd22").prop("disabled", false);
				
				
					$("#edit_ncd").prop("disabled", false);
				$("#Fechacd").prop("disabled", false);
				$("#lugarcf").prop("disabled", false);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", false);
				$("#librodef1").prop("disabled", false);
				$("#numdef1").prop("disabled", false);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", false);
				$("#librodef3").prop("disabled", false);
				$("#numdef3").prop("disabled", false);
				
				$("#tipoparcandef").prop("disabled", false);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", false);
				
				////////////
			
				$("#viudo").prop("disabled", true);
				
		
					////////////
			
				
			
				
			}
        });
    });

$(document).ready(function () {
        $("#tipo6cd").click(function () {
            if ($("#nombres").is(":visible")) {
               document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = 'none';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
				document.getElementById("nombrefallecido").style.display = 'none';
				
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = 'none';
				
				
				document.getElementById("fechadef").style.display = 'none';
			
				$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", true);
				$("#sexocd22").prop("disabled", true);
				
					$("#edit_ncd").prop("disabled", true);
				$("#Fechacd").prop("disabled", true);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);	
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				////////////
				
				$("#viudo").prop("disabled", true);
			
		
					////////////
			
		
			
				document.querySelectorAll('[id=tipo6cd]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = '';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = '';
				document.getElementById("foliacion3").style.display = '';
				
				document.getElementById("datosviu").style.display = '';
				
				document.getElementById("nombrefallecido").style.display = '';
				document.getElementById("datosmat").style.display = '';
				document.getElementById("datosmat2").style.display = '';
				
				document.getElementById("fechadef").style.display = '';
				
				
				$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
				
				$("#sexocd1").prop("disabled", false);
				$("#sexocd2").prop("disabled", false);
				
				$("#sexocd12").prop("disabled", false);
				$("#sexocd22").prop("disabled", false);
				
				
					$("#edit_ncd").prop("disabled", false);
				$("#Fechacd").prop("disabled", false);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);	
				
				$("#aniopart2").prop("disabled", false);
				$("#librodef2").prop("disabled", false);
				$("#numdef2").prop("disabled", false);
				
				$("#aniopart3").prop("disabled", false);
				$("#librodef3").prop("disabled", false);
				$("#numdef3").prop("disabled", false);
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", false);
				$("#tipoparcanmat").prop("disabled", false);
				
				
				
				////////////
			
				$("#viudo").prop("disabled", false);
						
		
					////////////
				
		
			
			}
        });
    });


$(document).ready(function () {
        $("#tipo7cd").click(function () {
            if ($("#nombres").is(":visible")) {
               document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = 'none';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
				document.getElementById("fechadef").style.display = 'none';
				document.getElementById("nombrefallecido").style.display = 'none';
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = 'none';
				
				
					$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", true);
				$("#sexocd22").prop("disabled", true);
				
					$("#edit_ncd").prop("disabled", true);
				$("#Fechacd").prop("disabled", true);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				////////////
			
				$("#viudo").prop("disabled", true);
			
			
					////////////
	
			
							
				document.querySelectorAll('[id=tipo7cd]').forEach((x) => x.checked = false);
            }
            else {
               document.getElementById("nombrescandef").style.display = '';
				document.getElementById("cdfolio").style.display = '';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = '';
				document.getElementById("foliacion2").style.display = '';
				document.getElementById("foliacion3").style.display = '';
				
				document.getElementById("datosviu").style.display = '';
				
				document.getElementById("nombrefallecido").style.display = '';
				document.getElementById("datosmat").style.display = '';
				document.getElementById("datosmat2").style.display = '';
				
				document.getElementById("fechadef").style.display = '';
			
				$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
				
				
				$("#sexocd1").prop("disabled", false);
				$("#sexocd2").prop("disabled", false);
				
				$("#sexocd12").prop("disabled", false);
				$("#sexocd22").prop("disabled", false);
				
					$("#edit_ncd").prop("disabled", false);
				$("#Fechacd").prop("disabled", false);
				$("#lugarcf").prop("disabled", false);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", false);
				$("#librodef1").prop("disabled", false);
				$("#numdef1").prop("disabled", false);
				
				$("#aniopart2").prop("disabled", false);
				$("#librodef2").prop("disabled", false);
				$("#numdef2").prop("disabled", false);
				
				$("#aniopart3").prop("disabled", false);
				$("#librodef3").prop("disabled", false);
				$("#numdef3").prop("disabled", false);
				
				
				$("#tipoparcandef").prop("disabled", false);
				$("#tipoparviudez").prop("disabled", false);
				$("#tipoparcanmat").prop("disabled", false);
				
				////////////
				
				$("#viudo").prop("disabled", false);
			
				
					////////////
	
			
				
			}
        });
    });


$(document).ready(function () {
        $("#stfolio").click(function () {
            if ($("#datosfcd").is(":visible")) {
              document.getElementById("datosfcd").style.display = 'none';
			  document.getElementById("datosfcd2").style.display = 'none';	
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				
				
							
				document.querySelectorAll('[id=stfolio]').forEach((x) => x.checked = false);
            }
            else {
              document.getElementById("datosfcd").style.display = '';
			  document.getElementById("datosfcd2").style.display = 'none';	
				$("#edefanio").prop("disabled", false);
				document.getElementById("edefanio").focus();
				$("#librodef").prop("disabled", false);
				$("#numdef").prop("disabled", false);
				$("#foliodef").prop("disabled", false);
				$("#alcaldiadef").prop("disabled", false);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);			
				
			}
        });
    });

$(document).ready(function () {
        $("#stfolio2").click(function () {
            if ($("#datosfcd2").is(":visible")) {
              document.getElementById("datosfcd").style.display = 'none';
			  document.getElementById("datosfcd2").style.display = 'none';	
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);	
				
				
							
				document.querySelectorAll('[id=stfolio2]').forEach((x) => x.checked = false);
            }
            else {
              document.getElementById("datosfcd").style.display = 'none';
			  document.getElementById("datosfcd2").style.display = '';	
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", false);
				document.getElementById("foliodef2").focus();
				$("#alcaldiadefdos").prop("disabled", false);				
				
			}
        });
    });



//////////////////////////////////// habilitar y deshabilitar opciones del formulario
/////////////// Identidades


$(document).ready(function () {
        $("#tipo1id").click(function () {
            if ($("#datoside1").is(":visible")) {
                document.getElementById("datoside1").style.display = 'none';
				document.getElementById("foliacion1ide").style.display = 'none';
				document.getElementById("foliacion2ide").style.display = 'none';
				
				document.getElementById("datosidesex").style.display = 'none';
				document.getElementById("datoside2").style.display = 'none';
				document.getElementById("datoside3").style.display = 'none';
				
			
				$("#sexoid1").prop("disabled", true);
				$("#sexoid2").prop("disabled", true);
				$("#edit_nid").prop("disabled", true);
				$("#conoid").prop("disabled", true);
				$("#cargoid").prop("disabled", true);
				$("#nombrefid").prop("disabled", true);
				$("#lugarid").prop("disabled", true);
				$("#Fechaid").prop("disabled", true);
				
				$("#aniopart1ide").prop("disabled", true);
				$("#librodef1ide").prop("disabled", true);
				$("#numdef1ide").prop("disabled", true);
				
				$("#tipoparidenac").prop("disabled", true);
				$("#tipoparidedef").prop("disabled", true);
				
				
				
				$("#aniopart2ide").prop("disabled", true);
				$("#librodef2ide").prop("disabled", true);
				$("#numdef2ide").prop("disabled", true);
				
				$("#edit_nid2").prop("disabled", true);
				$("#conoid2").prop("disabled", true);
								
				document.querySelectorAll('[id=tipo1id]').forEach((x) => x.checked = false);
            }
            else {
				
				 document.getElementById("datoside1").style.display = '';
				document.getElementById("foliacion1ide").style.display = '';
				document.getElementById("foliacion2ide").style.display = 'none';
				
				document.getElementById("datosidesex").style.display = '';
				document.getElementById("datoside2").style.display = 'none';
				document.getElementById("datoside3").style.display = '';
			
				$("#sexoid1").prop("disabled", false);
				$("#sexoid2").prop("disabled", false);
				$("#edit_nid").prop("disabled", false);
				$("#conoid").prop("disabled", false);
				$("#cargoid").prop("disabled", false);
				$("#nombrefid").prop("disabled", false);
				$("#lugarid").prop("disabled", false);
				$("#Fechaid").prop("disabled", false);
				
				$("#aniopart1ide").prop("disabled", false);
				$("#librodef1ide").prop("disabled", false);
				$("#numdef1ide").prop("disabled", false);
				
					$("#tipoparidenac").prop("disabled", false);
				$("#tipoparidedef").prop("disabled", true);
				
				
				
				$("#aniopart2ide").prop("disabled", true);
				$("#librodef2ide").prop("disabled", true);
				$("#numdef2ide").prop("disabled", true);
			
				$("#edit_nid2").prop("disabled", true);
				$("#conoid2").prop("disabled", true);
				
				
			}
        });
    });


$(document).ready(function () {
        $("#tipo2id").click(function () {
            if ($("#datoside2").is(":visible")) {
               document.getElementById("datoside1").style.display = 'none';
				document.getElementById("foliacion1ide").style.display = 'none';
				document.getElementById("foliacion2ide").style.display = 'none';
				
				document.getElementById("datosidesex").style.display = 'none';
				document.getElementById("datoside2").style.display = 'none';
				document.getElementById("datoside3").style.display = 'none';
				
			
				$("#sexoid1").prop("disabled", true);
				$("#sexoid2").prop("disabled", true);
				$("#edit_nid").prop("disabled", true);
				$("#conoid").prop("disabled", true);
				$("#cargoid").prop("disabled", true);
				$("#nombrefid").prop("disabled", true);
				$("#lugarid").prop("disabled", true);
				$("#Fechaid").prop("disabled", true);
				
				$("#aniopart1ide").prop("disabled", true);
				$("#librodef1ide").prop("disabled", true);
				$("#numdef1ide").prop("disabled", true);
				
					$("#tipoparidenac").prop("disabled", true);
				$("#tipoparidedef").prop("disabled", true);
				
				$("#aniopart2ide").prop("disabled", true);
				$("#librodef2ide").prop("disabled", true);
				$("#numdef2ide").prop("disabled", true);
				
				$("#edit_nid2").prop("disabled", true);
				$("#conoid2").prop("disabled", true);
								
			
	
				document.querySelectorAll('[id=tipo2id]').forEach((x) => x.checked = false);
            }
            else {
              document.getElementById("datoside1").style.display = 'none';
				document.getElementById("foliacion1ide").style.display = 'none';
				document.getElementById("foliacion2ide").style.display = '';
				
				document.getElementById("datosidesex").style.display = '';
				document.getElementById("datoside2").style.display = '';
				document.getElementById("datoside3").style.display = '';
			
				$("#sexoid1").prop("disabled", false);
				$("#sexoid2").prop("disabled", false);
				$("#edit_nid").prop("disabled", true);
				$("#conoid").prop("disabled", true);
				$("#cargoid").prop("disabled", false);
				$("#nombrefid").prop("disabled", false);
				$("#lugarid").prop("disabled", false);
				$("#Fechaid").prop("disabled", false);
				
				$("#aniopart1ide").prop("disabled", true);
				$("#librodef1ide").prop("disabled", true);
				$("#numdef1ide").prop("disabled", true);
				
					$("#tipoparidenac").prop("disabled", true);
				$("#tipoparidedef").prop("disabled", false);
				
				$("#aniopart2ide").prop("disabled", false);
				$("#librodef2ide").prop("disabled", false);
				$("#numdef2ide").prop("disabled", false);
			
				$("#edit_nid2").prop("disabled", false);
				$("#conoid2").prop("disabled", false);
				
			
			
				
			}
        });
    });






$(document).ready(function () {
        $("#tipo3id").click(function () {
            if ($("#foliacion2ide").is(":visible")) {
               document.getElementById("datoside1").style.display = 'none';
				document.getElementById("foliacion1ide").style.display = 'none';
				document.getElementById("foliacion2ide").style.display = 'none';
				
				document.getElementById("datosidesex").style.display = 'none';
				document.getElementById("datoside2").style.display = 'none';
				document.getElementById("datoside3").style.display = 'none';
				
			
				$("#sexoid1").prop("disabled", true);
				$("#sexoid2").prop("disabled", true);
				$("#edit_nid").prop("disabled", true);
				$("#conoid").prop("disabled", true);
				$("#cargoid").prop("disabled", true);
				$("#nombrefid").prop("disabled", true);
				$("#lugarid").prop("disabled", true);
				$("#Fechaid").prop("disabled", true);
				
				$("#aniopart1ide").prop("disabled", true);
				$("#librodef1ide").prop("disabled", true);
				$("#numdef1ide").prop("disabled", true);
				
					$("#tipoparidenac").prop("disabled", true);
				$("#tipoparidedef").prop("disabled", true);
				
				$("#aniopart2ide").prop("disabled", true);
				$("#librodef2ide").prop("disabled", true);
				$("#numdef2ide").prop("disabled", true);
				
				$("#edit_nid2").prop("disabled", true);
				$("#conoid2").prop("disabled", true);
								
			
			
				document.querySelectorAll('[id=tipo3id]').forEach((x) => x.checked = false);
            }
            else {
              	 document.getElementById("datoside1").style.display = '';
				document.getElementById("foliacion1ide").style.display = '';
				document.getElementById("foliacion2ide").style.display = '';
				
				document.getElementById("datosidesex").style.display = '';
				document.getElementById("datoside2").style.display = 'none';
				document.getElementById("datoside3").style.display = '';
			
				$("#sexoid1").prop("disabled", false);
				$("#sexoid2").prop("disabled", false);
				$("#edit_nid").prop("disabled", false);
				$("#conoid").prop("disabled", false);
				$("#cargoid").prop("disabled", false);
				$("#nombrefid").prop("disabled", false);
				$("#lugarid").prop("disabled", false);
				$("#Fechaid").prop("disabled", false);
				
				$("#aniopart1ide").prop("disabled", false);
				$("#librodef1ide").prop("disabled", false);
				$("#numdef1ide").prop("disabled", false);
				
				$("#aniopart2ide").prop("disabled", false);
				$("#librodef2ide").prop("disabled", false);
				$("#numdef2ide").prop("disabled", false);
				
					$("#tipoparidenac").prop("disabled", false);
				$("#tipoparidedef").prop("disabled", false);
			
				$("#edit_nid2").prop("disabled", true);
				$("#conoid2").prop("disabled", true);
				
					
			
			}
        });
    });


////////////////////////////////
/////////////////// Opciones de selección de adecuaciones


$(document).ready(function () {
        $("#tipo1ad").click(function () {
            if ($("#datosadec").is(":visible")) {
                document.getElementById("datosadec").style.display = 'none';
				document.getElementById("funcioadec").style.display = 'none';
				document.getElementById("foliacion1ad").style.display = 'none';
				
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
				document.getElementById("datosadecmatri").style.display = 'none';
				document.getElementById("foliacionadenac").style.display = 'none';



				$("#apeadecmatri").prop("disabled", true);

				$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);




				
			
				$("#sexoad1").prop("disabled", true);
				$("#sexoad2").prop("disabled", true);
				$("#nombreadec").prop("disabled", true);
				$("#padresad1").prop("disabled", true);
				$("#padresad2").prop("disabled", true);
				$("#nombre_padres").prop("disabled", true);
				$("#apeadec").prop("disabled", true);
				
				$("#Fechaad").prop("disabled", true);
				$("#cargo_adec").prop("disabled", true);
				$("#nfunadec").prop("disabled", true);
				$("#lugaradec").prop("disabled", true);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", true);
				$("#librodefad1").prop("disabled", true);
				$("#aniopartad1").prop("disabled", true);
				
				$("#tipoparadenac").prop("disabled", true);
				
						
				document.querySelectorAll('[id=tipo1ad]').forEach((x) => x.checked = false);
            }
            else {
				 document.getElementById("datosadec").style.display = '';
				document.getElementById("funcioadec").style.display = '';
				document.getElementById("foliacion1ad").style.display = '';
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = 'none';
document.getElementById("foliacionadenac").style.display = 'none';
				$("#apeadecmatri").prop("disabled", true);
				
			
$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);

				$("#sexoad1").prop("disabled", false);
				$("#sexoad2").prop("disabled", false);
				$("#nombreadec").prop("disabled", false);
				$("#padresad1").prop("disabled", false);
				$("#padresad2").prop("disabled", false);
				$("#nombre_padres").prop("disabled", false);
				$("#apeadec").prop("disabled", false);
				
				$("#Fechaad").prop("disabled", false);
				$("#cargo_adec").prop("disabled", false);
				$("#nfunadec").prop("disabled", false);
				$("#lugaradec").prop("disabled", false);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", false);
				$("#librodefad1").prop("disabled", false);
				$("#aniopartad1").prop("disabled", false);
				
				$("#tipoparadenac").prop("disabled", false);
				
				
				
				
				
				
			}
        });
    });


$(document).ready(function () {
        $("#tipo2ad").click(function () {
            if ($("#datosadec").is(":visible")) {
 document.getElementById("datosadec").style.display = 'none';
				document.getElementById("funcioadec").style.display = 'none';
				document.getElementById("foliacion1ad").style.display = 'none';
				
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = 'none';
document.getElementById("foliacionadenac").style.display = 'none';
				$("#apeadecmatri").prop("disabled", true);
				$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);
				
			
				$("#sexoad1").prop("disabled", true);
				$("#sexoad2").prop("disabled", true);
				$("#nombreadec").prop("disabled", true);
				$("#padresad1").prop("disabled", true);
				$("#padresad2").prop("disabled", true);
				$("#nombre_padres").prop("disabled", true);
				$("#apeadec").prop("disabled", true);
				
				$("#Fechaad").prop("disabled", true);
				$("#cargo_adec").prop("disabled", true);
				$("#nfunadec").prop("disabled", true);
				$("#lugaradec").prop("disabled", true);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", true);
				$("#librodefad1").prop("disabled", true);
				$("#aniopartad1").prop("disabled", true);
				
				$("#tipoparadenac").prop("disabled", true);
	
				document.querySelectorAll('[id=tipo2ad]').forEach((x) => x.checked = false);
            }
            else {
       
			 document.getElementById("datosadec").style.display = '';
				document.getElementById("funcioadec").style.display = '';
				document.getElementById("foliacion1ad").style.display = '';
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = 'none';
document.getElementById("foliacionadenac").style.display = 'none';
				$("#apeadecmatri").prop("disabled", true);
				$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);
				
			
				$("#sexoad1").prop("disabled", false);
				$("#sexoad2").prop("disabled", false);
				$("#nombreadec").prop("disabled", false);
				$("#padresad1").prop("disabled", false);
				$("#padresad2").prop("disabled", false);
				$("#nombre_padres").prop("disabled", false);
				$("#apeadec").prop("disabled", false);
				
				$("#Fechaad").prop("disabled", false);
				$("#cargo_adec").prop("disabled", false);
				$("#nfunadec").prop("disabled", false);
				$("#lugaradec").prop("disabled", false);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", false);
				$("#librodefad1").prop("disabled", false);
				$("#aniopartad1").prop("disabled", false);
				
				$("#tipoparadenac").prop("disabled", false);
			
				
			}
        });
    });






$(document).ready(function () {
        $("#tipo3ad").click(function () {
            if ($("#stadfolio").is(":visible")) {
				document.getElementById("datosadec").style.display = 'none';
				document.getElementById("funcioadec").style.display = 'none';
				document.getElementById("foliacion1ad").style.display = 'none';
				
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = 'none';
document.getElementById("foliacionadenac").style.display = 'none';
				$("#apeadecmatri").prop("disabled", true);
				$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);
				
			
				$("#sexoad1").prop("disabled", true);
				$("#sexoad2").prop("disabled", true);
				$("#nombreadec").prop("disabled", true);
				$("#padresad1").prop("disabled", true);
				$("#padresad2").prop("disabled", true);
				$("#nombre_padres").prop("disabled", true);
				$("#apeadec").prop("disabled", true);
				
				$("#Fechaad").prop("disabled", true);
				$("#cargo_adec").prop("disabled", true);
				$("#nfunadec").prop("disabled", true);
				$("#lugaradec").prop("disabled", true);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", true);
				$("#librodefad1").prop("disabled", true);
				$("#aniopartad1").prop("disabled", true);
				
				$("#tipoparadenac").prop("disabled", true);
	
				document.querySelectorAll('[id=tipo3ad]').forEach((x) => x.checked = false);
            }
            else {
				document.getElementById("datosadec").style.display = '';
				document.getElementById("funcioadec").style.display = 'none';
				document.getElementById("foliacion1ad").style.display = '';
				
				document.getElementById("adfolio").style.display = '';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = 'none';
document.getElementById("foliacionadenac").style.display = 'none';
				$("#apeadecmatri").prop("disabled", true);
				$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);
				
			
				$("#sexoad1").prop("disabled", false);
				$("#sexoad2").prop("disabled", false);
				$("#nombreadec").prop("disabled", false);
				$("#padresad1").prop("disabled", false);
				$("#padresad2").prop("disabled", false);
				$("#nombre_padres").prop("disabled", false);
				$("#apeadec").prop("disabled", false);
				
				$("#Fechaad").prop("disabled", true);
				$("#cargo_adec").prop("disabled", true);
				$("#nfunadec").prop("disabled", true);
				$("#lugaradec").prop("disabled", true);
				
				$("#stadfolio").prop("disabled", false);
				$("#stadfolio2").prop("disabled", false);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", false);
				$("#librodefad1").prop("disabled", false);
				$("#aniopartad1").prop("disabled", false);
				
				$("#tipoparadenac").prop("disabled", false);
			
			}
        });
    });


$(document).ready(function () {
        $("#tipo4ad").click(function () {
            if ($("#datosadec").is(":visible")) {
                document.getElementById("datosadec").style.display = 'none';
				document.getElementById("funcioadec").style.display = 'none';
				document.getElementById("foliacion1ad").style.display = 'none';
				
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = 'none';
document.getElementById("foliacionadenac").style.display = 'none';
				$("#apeadecmatri").prop("disabled", true);
				$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);
				

				
			
				$("#sexoad1").prop("disabled", true);
				$("#sexoad2").prop("disabled", true);
				$("#nombreadec").prop("disabled", true);
				$("#padresad1").prop("disabled", true);
				$("#padresad2").prop("disabled", true);
				$("#nombre_padres").prop("disabled", true);
				$("#apeadec").prop("disabled", true);
				
				$("#Fechaad").prop("disabled", true);
				$("#cargo_adec").prop("disabled", true);
				$("#nfunadec").prop("disabled", true);
				$("#lugaradec").prop("disabled", true);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", true);
				$("#librodefad1").prop("disabled", true);
				$("#aniopartad1").prop("disabled", true);
				
				$("#tipoparadenac").prop("disabled", true);
				
						
				document.querySelectorAll('[id=tipo4ad]').forEach((x) => x.checked = false);
            }
            else {
				 document.getElementById("datosadec").style.display = 'none';
				document.getElementById("funcioadec").style.display = '';
				document.getElementById("foliacion1ad").style.display = 'none';
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = '';
document.getElementById("foliacionadenac").style.display = '';
				$("#apeadecmatri").prop("disabled", false);
				$("#aniopartad1mat").prop("disabled", false);
				$("#librodefad1mat").prop("disabled", false);
				$("#numdefad1mat").prop("disabled", false);
				$("#tipoparadenacmat").prop("disabled", false);
			
				$("#sexoad1").prop("disabled", true);
				$("#sexoad2").prop("disabled", true);
				$("#nombreadec").prop("disabled", true);
				$("#padresad1").prop("disabled", true);
				$("#padresad2").prop("disabled", true);
				$("#nombre_padres").prop("disabled", true);
				$("#apeadec").prop("disabled", true);
				
				$("#Fechaad").prop("disabled", false);
				$("#cargo_adec").prop("disabled", false);
				$("#nfunadec").prop("disabled", false);
				$("#lugaradec").prop("disabled", false);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", true);
				$("#librodefad1").prop("disabled", true);
				$("#aniopartad1").prop("disabled", true);
				
				$("#tipoparadenac").prop("disabled", true);
				
				
				
				
				
				
			}
        });
    });



$(document).ready(function () {
        $("#tipo5ad").click(function () {
            if ($("#datosadec").is(":visible")) {
                document.getElementById("datosadec").style.display = 'none';
				document.getElementById("funcioadec").style.display = 'none';
				document.getElementById("foliacion1ad").style.display = 'none';
				
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
				document.getElementById("datosadecmatri").style.display = 'none';
				document.getElementById("foliacionadenac").style.display = 'none';



				$("#apeadecmatri").prop("disabled", true);

				$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);




				
			
				$("#sexoad1").prop("disabled", true);
				$("#sexoad2").prop("disabled", true);
				$("#nombreadec").prop("disabled", true);
				$("#padresad1").prop("disabled", true);
				$("#padresad2").prop("disabled", true);
				$("#nombre_padres").prop("disabled", true);
				$("#apeadec").prop("disabled", true);
				
				$("#Fechaad").prop("disabled", true);
				$("#cargo_adec").prop("disabled", true);
				$("#nfunadec").prop("disabled", true);
				$("#lugaradec").prop("disabled", true);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", true);
				$("#librodefad1").prop("disabled", true);
				$("#aniopartad1").prop("disabled", true);
				
				$("#tipoparadenac").prop("disabled", true);
				
						
				document.querySelectorAll('[id=tipo5ad]').forEach((x) => x.checked = false);
            }
            else {
				 document.getElementById("datosadec").style.display = '';
				document.getElementById("funcioadec").style.display = '';
				document.getElementById("foliacion1ad").style.display = 'none';
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = 'none';
document.getElementById("foliacionadenac").style.display = '';



$("#aniopartad1mat").prop("disabled", false);
				$("#librodefad1mat").prop("disabled", false);
				$("#numdefad1mat").prop("disabled", false);
				$("#tipoparadenacmat").prop("disabled", false);

				$("#sexoad1").prop("disabled", false);
				$("#sexoad2").prop("disabled", false);
				$("#nombreadec").prop("disabled", false);
				$("#padresad1").prop("disabled", false);
				$("#padresad2").prop("disabled", false);
				$("#nombre_padres").prop("disabled", false);
				$("#apeadec").prop("disabled", false);
				
				$("#Fechaad").prop("disabled", false);
				$("#cargo_adec").prop("disabled", false);
				$("#nfunadec").prop("disabled", false);
				$("#lugaradec").prop("disabled", false);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", true);
				$("#librodefad1").prop("disabled", true);
				$("#aniopartad1").prop("disabled", true);
				
				$("#tipoparadenac").prop("disabled", true);
				
				
				
				
				
				
			}
        });
    });











//////////////////////////////////////////////////
////////////// Opciones de Unión no M. y Régimen

$(document).ready(function () {
        $("#reg1").click(function () {
            if ($("#nombrereg").is(":visible")) {
                document.getElementById("nombrereg").style.display = 'none';
				document.getElementById("sentencia").style.display = 'none';
				document.getElementById("ejecutoria").style.display = 'none';
				document.getElementById("decrereg1").style.display = 'none';
				document.getElementById("decrereg2").style.display = 'none';
				document.getElementById("funcioreg").style.display = 'none';
				document.getElementById("partidareg1").style.display = 'none';
				document.getElementById("newreg").style.display = 'none';
				document.getElementById("fechareg2").style.display = 'none';
		
		
				$("#valuedivnjsr").attr("checked", false);
				$("#valuedivnjser").attr("checked", false);
				$("#decrevalnjsr").attr("checked", false);
				$("#decreval2njsr").attr("checked", false);
				$("#por_sjuzr").attr("checked", false);
				$("#decrevalnjser").attr("checked", false);
				$("#decreval2njser").attr("checked", false);
				$("#por_ejuzr").attr("checked", false);
				
							
				$("#nreg").prop("disabled", true);
				$("#Fecharegs").prop("disabled", true);
				$("#Fecharegs2").prop("disabled", true);
				
													
				$("#edit_elreg").prop("disabled", true);
				
				
				$("#unioncono").prop("disabled", true);
				$("#edit_elreg2").prop("disabled", true);
				$("#unioncon2").prop("disabled", true);
				$("#edit_elreg3").prop("disabled", true);
				
				
				
				
				$("#edit_ellareg").prop("disabled", true);
				$("#valuedivnjsr").prop("disabled", true);
				$("#valuedivnjser").prop("disabled", true);
				$("#decrevalnjsr").prop("disabled", true);
				$("#decreval2njsr").prop("disabled", true);
				$("#por_sjuzgador").prop("disabled", true);
				$("#decrevalnjser").prop("disabled", true);
				$("#decreval2njser").prop("disabled", true);
				$("#por_ejuzr").prop("disabled", true);
		
				$("#timedecrenjsr").prop("disabled", true);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#txt_por_sjuzr").prop("disabled", true);
				$("#timedecrenjser").prop("disabled", true);
				$("#fechadecrenjser").prop("disabled", true);
				$("#txt_por_ejuzr").prop("disabled", true);
				
				$("#Fechareg").prop("disabled", true);
				$("#cargo_reg").prop("disabled", true);
				$("#nfunreg").prop("disabled", true);
				$("#lugarreg").prop("disabled", true);
				
				$("#edit_anioreg1").prop("disabled", true);
				$("#edit_libroreg1").prop("disabled", true);
				$("#edit_npartidareg1").prop("disabled", true);
				
				$("#tipoparreg").prop("disabled", true);
				
				
						
				document.querySelectorAll('[id=reg1]').forEach((x) => x.checked = false);
            }
            else {
				
				document.getElementById("nombrereg").style.display = '';
				document.getElementById("sentencia").style.display = '';
				document.getElementById("ejecutoria").style.display = '';
				document.getElementById("decrereg1").style.display = 'none';
				document.getElementById("decrereg2").style.display = 'none';
				document.getElementById("funcioreg").style.display = 'none';
				document.getElementById("partidareg1").style.display = '';
				document.getElementById("newreg").style.display = 'none';
				document.getElementById("fechareg2").style.display = 'none';
	
						$("#valuedivnjsr").attr("checked", false);
				$("#valuedivnjser").attr("checked", false);
				$("#decrevalnjsr").attr("checked", false);
				$("#decreval2njsr").attr("checked", false);
				$("#por_sjuzr").attr("checked", false);
				$("#decrevalnjser").attr("checked", false);
				$("#decreval2njser").attr("checked", false);
				$("#por_ejuzr").attr("checked", false);
				
				$("#nreg").prop("disabled", true);
				$("#Fecharegs").prop("disabled", true);
				$("#Fecharegs2").prop("disabled", true);
				
													
				$("#edit_elreg").prop("disabled", false);
				
				
				$("#unioncono").prop("disabled", false);
				$("#edit_elreg2").prop("disabled", true);
				$("#unioncon2").prop("disabled", false);
				$("#edit_elreg3").prop("disabled", true);
				
				
				
				
				$("#edit_ellareg").prop("disabled", false);
				$("#valuedivnjsr").prop("disabled", false);
				$("#valuedivnjser").prop("disabled", false);
				$("#decrevalnjsr").prop("disabled", true);
				$("#decreval2njsr").prop("disabled", true);
				$("#por_sjuzgador").prop("disabled", true);
				$("#decrevalnjser").prop("disabled", true);
				$("#decreval2njser").prop("disabled", true);
				$("#por_ejuzr").prop("disabled", true);
		
				$("#timedecrenjsr").prop("disabled", true);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#txt_por_sjuzr").prop("disabled", true);
				$("#timedecrenjser").prop("disabled", true);
				$("#fechadecrenjser").prop("disabled", true);
				$("#txt_por_ejuzr").prop("disabled", true);
				
				$("#Fechareg").prop("disabled", true);
				$("#cargo_reg").prop("disabled", true);
				$("#nfunreg").prop("disabled", true);
				$("#lugarreg").prop("disabled", true);
				
				$("#edit_anioreg1").prop("disabled", false);
				$("#edit_libroreg1").prop("disabled", false);
				$("#edit_npartidareg1").prop("disabled", false);
				
				
				$("#tipoparreg").prop("disabled", false);
				
				
			}
        });
    });


$(document).ready(function () {
        $("#reg2").click(function () {
            if ($("#funcioreg").is(":visible")) {
				document.getElementById("nombrereg").style.display = 'none';
				document.getElementById("sentencia").style.display = 'none';
				document.getElementById("ejecutoria").style.display = 'none';
				document.getElementById("decrereg1").style.display = 'none';
				document.getElementById("decrereg2").style.display = 'none';
				document.getElementById("funcioreg").style.display = 'none';
				document.getElementById("partidareg1").style.display = 'none';
				document.getElementById("newreg").style.display = 'none';
				document.getElementById("fechareg2").style.display = 'none';
		
						$("#valuedivnjsr").attr("checked", false);
				$("#valuedivnjser").attr("checked", false);
				$("#decrevalnjsr").attr("checked", false);
				$("#decreval2njsr").attr("checked", false);
				$("#por_sjuzr").attr("checked", false);
				$("#decrevalnjser").attr("checked", false);
				$("#decreval2njser").attr("checked", false);
				$("#por_ejuzr").attr("checked", false);
				
				
				$("#nreg").prop("disabled", true);
				$("#Fecharegs").prop("disabled", true);
				
				
				$("#Fecharegs2").prop("disabled", true);
				
													
				$("#edit_elreg").prop("disabled", true);
				
				$("#unioncono").prop("disabled", true);
				$("#edit_elreg2").prop("disabled", true);
				$("#unioncon2").prop("disabled", true);
				$("#edit_elreg3").prop("disabled", true);
				
				
				$("#edit_ellareg").prop("disabled", true);
				$("#valuedivnjsr").prop("disabled", true);
				$("#valuedivnjser").prop("disabled", true);
				$("#decrevalnjsr").prop("disabled", true);
				$("#decreval2njsr").prop("disabled", true);
				$("#por_sjuzgador").prop("disabled", true);
				$("#decrevalnjser").prop("disabled", true);
				$("#decreval2njser").prop("disabled", true);
				$("#por_ejuzr").prop("disabled", true);
		
				$("#timedecrenjsr").prop("disabled", true);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#txt_por_sjuzr").prop("disabled", true);
				$("#timedecrenjser").prop("disabled", true);
				$("#fechadecrenjser").prop("disabled", true);
				$("#txt_por_ejuzr").prop("disabled", true);
				
				$("#Fechareg").prop("disabled", true);
				$("#cargo_reg").prop("disabled", true);
				$("#nfunreg").prop("disabled", true);
				$("#lugarreg").prop("disabled", true);
				
				$("#edit_anioreg1").prop("disabled", true);
				$("#edit_libroreg1").prop("disabled", true);
				$("#edit_npartidareg1").prop("disabled", true);
				
				
				$("#tipoparreg").prop("disabled", true);
	
				document.querySelectorAll('[id=reg2]').forEach((x) => x.checked = false);
            }
            else {
       			document.getElementById("nombrereg").style.display = '';
				document.getElementById("sentencia").style.display = 'none';
				document.getElementById("ejecutoria").style.display = 'none';
				document.getElementById("decrereg1").style.display = 'none';
				document.getElementById("decrereg2").style.display = 'none';
				document.getElementById("funcioreg").style.display = '';
				document.getElementById("partidareg1").style.display = '';
				document.getElementById("newreg").style.display = '';
				document.getElementById("fechareg2").style.display = 'none';
			
						$("#valuedivnjsr").attr("checked", false);
				$("#valuedivnjser").attr("checked", false);
				$("#decrevalnjsr").attr("checked", false);
				$("#decreval2njsr").attr("checked", false);
				$("#por_sjuzr").attr("checked", false);
				$("#decrevalnjser").attr("checked", false);
				$("#decreval2njser").attr("checked", false);
				$("#por_ejuzr").attr("checked", false);
				
				$("#nreg").prop("disabled", false);
				$("#Fecharegs").prop("disabled", false);
				
				
				$("#Fecharegs2").prop("disabled", true);
				
													
				$("#edit_elreg").prop("disabled", false);
				
			$("#unioncono").prop("disabled", false);
				$("#edit_elreg2").prop("disabled", true);
				$("#unioncon2").prop("disabled", false);
				$("#edit_elreg3").prop("disabled", true);
				
				
				$("#edit_ellareg").prop("disabled", false);
				$("#valuedivnjsr").prop("disabled", true);
				$("#valuedivnjser").prop("disabled", true);
				$("#decrevalnjsr").prop("disabled", true);
				$("#decreval2njsr").prop("disabled", true);
				$("#por_sjuzgador").prop("disabled", true);
				$("#decrevalnjser").prop("disabled", true);
				$("#decreval2njser").prop("disabled", true);
				$("#por_ejuzr").prop("disabled", true);
		
				$("#timedecrenjsr").prop("disabled", true);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#txt_por_sjuzr").prop("disabled", true);
				$("#timedecrenjser").prop("disabled", true);
				$("#fechadecrenjser").prop("disabled", true);
				$("#txt_por_ejuzr").prop("disabled", true);
				
				$("#Fechareg").prop("disabled", false);
				$("#cargo_reg").prop("disabled", false);
				$("#nfunreg").prop("disabled", false);
				$("#lugarreg").prop("disabled", false);
				
				$("#edit_anioreg1").prop("disabled", false);
				$("#edit_libroreg1").prop("disabled", false);
				$("#edit_npartidareg1").prop("disabled", false);
			
			
				$("#tipoparreg").prop("disabled", false);
				
			}
        });
    });






$(document).ready(function () {
        $("#reg3").click(function () {
            if ($("#newreg").is(":visible")) {
				document.getElementById("nombrereg").style.display = 'none';
				document.getElementById("sentencia").style.display = 'none';
				document.getElementById("ejecutoria").style.display = 'none';
				document.getElementById("decrereg1").style.display = 'none';
				document.getElementById("decrereg2").style.display = 'none';
				document.getElementById("funcioreg").style.display = 'none';
				document.getElementById("partidareg1").style.display = 'none';
				document.getElementById("newreg").style.display = 'none';
				document.getElementById("fechareg2").style.display = 'none';
			
						$("#valuedivnjsr").attr("checked", false);
				$("#valuedivnjser").attr("checked", false);
				$("#decrevalnjsr").attr("checked", false);
				$("#decreval2njsr").attr("checked", false);
				$("#por_sjuzr").attr("checked", false);
				$("#decrevalnjser").attr("checked", false);
				$("#decreval2njser").attr("checked", false);
				$("#por_ejuzr").attr("checked", false);
				
				$("#nreg").prop("disabled", true);
				$("#Fecharegs").prop("disabled", true);
				$("#Fecharegs2").prop("disabled", true);
				
													
				$("#edit_elreg").prop("disabled", true);
				
				
				$("#unioncono").prop("disabled", true);
				$("#edit_elreg2").prop("disabled", true);
				$("#unioncon2").prop("disabled", true);
				$("#edit_elreg3").prop("disabled", true);
				
				
				
				$("#edit_ellareg").prop("disabled", true);
				$("#valuedivnjsr").prop("disabled", true);
				$("#valuedivnjser").prop("disabled", true);
				$("#decrevalnjsr").prop("disabled", true);
				$("#decreval2njsr").prop("disabled", true);
				$("#por_sjuzgador").prop("disabled", true);
				$("#decrevalnjser").prop("disabled", true);
				$("#decreval2njser").prop("disabled", true);
				$("#por_ejuzr").prop("disabled", true);
		
				$("#timedecrenjsr").prop("disabled", true);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#txt_por_sjuzr").prop("disabled", true);
				$("#timedecrenjser").prop("disabled", true);
				$("#fechadecrenjser").prop("disabled", true);
				$("#txt_por_ejuzr").prop("disabled", true);
				
				$("#Fechareg").prop("disabled", true);
				$("#cargo_reg").prop("disabled", true);
				$("#nfunreg").prop("disabled", true);
				$("#lugarreg").prop("disabled", true);
				
				$("#edit_anioreg1").prop("disabled", true);
				$("#edit_libroreg1").prop("disabled", true);
				$("#edit_npartidareg1").prop("disabled", true);
				
				$("#tipoparreg").prop("disabled", true);
	

				document.querySelectorAll('[id=reg3]').forEach((x) => x.checked = false);
            }
            else {
				document.getElementById("nombrereg").style.display = '';
				document.getElementById("sentencia").style.display = 'none';
				document.getElementById("ejecutoria").style.display = 'none';
				document.getElementById("decrereg1").style.display = 'none';
				document.getElementById("decrereg2").style.display = 'none';
				document.getElementById("funcioreg").style.display = '';
				document.getElementById("partidareg1").style.display = '';
				document.getElementById("newreg").style.display = '';
				document.getElementById("fechareg2").style.display = '';
				
						$("#valuedivnjsr").attr("checked", false);
				$("#valuedivnjser").attr("checked", false);
				$("#decrevalnjsr").attr("checked", false);
				$("#decreval2njsr").attr("checked", false);
				$("#por_sjuzr").attr("checked", false);
				$("#decrevalnjser").attr("checked", false);
				$("#decreval2njser").attr("checked", false);
				$("#por_ejuzr").attr("checked", false);
				
				$("#nreg").prop("disabled", false);
				$("#Fecharegs").prop("disabled", false);
				$("#Fecharegs2").prop("disabled", false);
				
													
				$("#edit_elreg").prop("disabled", false);
				
				$("#unioncono").prop("disabled", false);
				$("#edit_elreg2").prop("disabled", true);
				$("#unioncon2").prop("disabled", false);
				$("#edit_elreg3").prop("disabled", true);
				
				
				$("#edit_ellareg").prop("disabled", false);
				$("#valuedivnjsr").prop("disabled", true);
				$("#valuedivnjser").prop("disabled", true);
				$("#decrevalnjsr").prop("disabled", true);
				$("#decreval2njsr").prop("disabled", true);
				$("#por_sjuzgador").prop("disabled", true);
				$("#decrevalnjser").prop("disabled", true);
				$("#decreval2njser").prop("disabled", true);
				$("#por_ejuzr").prop("disabled", true);
		
				$("#timedecrenjsr").prop("disabled", true);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#txt_por_sjuzr").prop("disabled", true);
				$("#timedecrenjser").prop("disabled", true);
				$("#fechadecrenjser").prop("disabled", true);
				$("#txt_por_ejuzr").prop("disabled", true);
				
				$("#Fechareg").prop("disabled", false);
				$("#cargo_reg").prop("disabled", false);
				$("#nfunreg").prop("disabled", false);
				$("#lugarreg").prop("disabled", false);
				
				$("#edit_anioreg1").prop("disabled", false);
				$("#edit_libroreg1").prop("disabled", false);
				$("#edit_npartidareg1").prop("disabled", false);
				
				$("#tipoparreg").prop("disabled", false);
			
			}
        });
    });





//////////////////////////////////////////////////
////////////// Opciones de tutorias

$(document).ready(function () {
        $("#tipo1au").click(function () {
            if ($("#tuto").is(":visible")) {
                document.getElementById("tuto").style.display = 'none';
				document.getElementById("auto").style.display = 'none';
				document.getElementById("repre").style.display = 'none';
				document.getElementById("sentenciatu").style.display = 'none';
				document.getElementById("ejecutoriatu").style.display = 'none';
				document.getElementById("sentuto").style.display = 'none';
				document.getElementById("ejetuto").style.display = 'none';
				document.getElementById("foliaciont1").style.display = 'none';
	
		document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);
			
			
				$("#inifinal").prop("disabled", true);
				$("#inifinal2").prop("disabled", true);
				$("#inifinal3").prop("disabled", true);
				$("#cargot").prop("disabled", true);
				$("#ntutor").prop("disabled", true);
				$("#nrespecto").prop("disabled", true);
				
				$("#perdida1").prop("disabled", true);
				$("#perdida2").prop("disabled", true);
				$("#nperdida").prop("disabled", true);
				$("#nautoridadnombre").prop("disabled", true);
				$("#autoridadpor").prop("disabled", true);

				$("#chkauto").attr("checked", false);
				
				$("#chkauto").prop("disabled", true);



				$("#hijos1").prop("disabled", true);
				$("#hijos2").prop("disabled", true);
				$("#hijosr1").prop("disabled", true);
				$("#hijosr2").prop("disabled", true);
					
				$("#decrep1").prop("disabled", true);
				$("#decrep2").prop("disabled", true);
				$("#nhijo").prop("disabled", true);
				$("#padresp1").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp3").prop("disabled", true);
				$("#notrore").prop("disabled", true);
				$("#npadre").prop("disabled", true);
				
				$("#ejecututo1").prop("disabled", true);
				$("#ejecututo2").prop("disabled", true);
				$("#ejecututo1").attr("checked", false);
				$("#ejecututo2").attr("checked", false);
				$("#horatu1").attr("checked", false);
				$("#horatu2").attr("checked", false);
				$("#fechatu1").attr("checked", false);
				$("#fechatu2").attr("checked", false);
				$("#portu1").attr("checked", false);
				$("#portu2").attr("checked", false);
				
				$("#horatu1").prop("disabled", true);
				$("#horatu2").prop("disabled", true);
				$("#timetu1").prop("disabled", true);
				$("#timetu2").prop("disabled", true);
				$("#fechatu1").prop("disabled", true);
				$("#fechatu2").prop("disabled", true);
				$("#fechatuto1").prop("disabled", true);
				$("#fechatuto2").prop("disabled", true);
				$("#portu1").prop("disabled", true);
				$("#portu2").prop("disabled", true);
				$("#portutxt1").prop("disabled", true);
				$("#portutxt2").prop("disabled", true);
				
				
				$("#aniotu").prop("disabled", true);
				$("#librotu").prop("disabled", true);
				$("#numtuto").prop("disabled", true);
				
				$("#tipopartuto").prop("disabled", true);
				
									
				document.querySelectorAll('[id=tipo1au]').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("tuto").style.display = '';
				document.getElementById("auto").style.display = 'none';
				document.getElementById("repre").style.display = 'none';
				document.getElementById("sentenciatu").style.display = '';
				document.getElementById("ejecutoriatu").style.display = '';
				document.getElementById("sentuto").style.display = 'none';
				document.getElementById("ejetuto").style.display = 'none';
				document.getElementById("foliaciont1").style.display = '';


					document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);
				
				$("#inifinal").prop("disabled", false);
				$("#inifinal2").prop("disabled", false);
				$("#inifinal3").prop("disabled", false);
				$("#cargot").prop("disabled", false);
				$("#ntutor").prop("disabled", false);
				$("#nrespecto").prop("disabled", false);
				
				$("#perdida1").prop("disabled", true);
				$("#perdida2").prop("disabled", true);
				$("#nperdida").prop("disabled", true);
				$("#nautoridadnombre").prop("disabled", true);
				$("#autoridadpor").prop("disabled", true);

				$("#chkauto").attr("checked", false);
				
				$("#chkauto").prop("disabled", true);

				$("#hijos1").prop("disabled", true);
				$("#hijos2").prop("disabled", true);
					$("#hijosr1").prop("disabled", true);
				$("#hijosr2").prop("disabled", true);
					
				$("#decrep1").prop("disabled", true);
				$("#decrep2").prop("disabled", true);
				$("#nhijo").prop("disabled", true);
				$("#padresp1").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp3").prop("disabled", true);
				$("#notrore").prop("disabled", true);
				$("#npadre").prop("disabled", true);
				
				$("#ejecututo1").prop("disabled", false);
				$("#ejecututo2").prop("disabled", false);
				$("#ejecututo1").attr("checked", false);
				$("#ejecututo2").attr("checked", false);
				$("#horatu1").attr("checked", false);
				$("#horatu2").attr("checked", false);
				$("#fechatu1").attr("checked", false);
				$("#fechatu2").attr("checked", false);
				$("#portu1").attr("checked", false);
				$("#portu2").attr("checked", false);
				
				$("#horatu1").prop("disabled", true);
				$("#horatu2").prop("disabled", true);
				$("#timetu1").prop("disabled", true);
				$("#timetu2").prop("disabled", true);
				$("#fechatu1").prop("disabled", true);
				$("#fechatu2").prop("disabled", true);
				$("#fechatuto1").prop("disabled", true);
				$("#fechatuto2").prop("disabled", true);
				$("#portu1").prop("disabled", true);
				$("#portu2").prop("disabled", true);
				$("#portutxt1").prop("disabled", true);
				$("#portutxt2").prop("disabled", true);
				
				$("#aniotu").prop("disabled", false);
				$("#librotu").prop("disabled", false);
				$("#numtuto").prop("disabled", false);
				
				$("#tipopartuto").prop("disabled", false);
				
			}
        });
    });


$(document).ready(function () {
        $("#tipo2au").click(function () {
            if ($("#auto").is(":visible")) {
                document.getElementById("tuto").style.display = 'none';
				document.getElementById("auto").style.display = 'none';
				document.getElementById("repre").style.display = 'none';
				document.getElementById("sentenciatu").style.display = 'none';
				document.getElementById("ejecutoriatu").style.display = 'none';
				document.getElementById("sentuto").style.display = 'none';
				document.getElementById("ejetuto").style.display = 'none';
				document.getElementById("foliaciont1").style.display = 'none';


					document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);
	
				
				$("#inifinal").prop("disabled", true);
				$("#inifinal2").prop("disabled", true);
				$("#inifinal3").prop("disabled", true);
				$("#cargot").prop("disabled", true);
				$("#ntutor").prop("disabled", true);
				$("#nrespecto").prop("disabled", true);
				
				$("#perdida1").prop("disabled", true);
				$("#perdida2").prop("disabled", true);
				$("#nperdida").prop("disabled", true);
				$("#nautoridadnombre").prop("disabled", true);
				$("#autoridadpor").prop("disabled", true);

$("#chkauto").attr("checked", false);
				
				$("#chkauto").prop("disabled", true);

				$("#hijos1").prop("disabled", true);
				$("#hijos2").prop("disabled", true);
					$("#hijosr1").prop("disabled", true);
				$("#hijosr2").prop("disabled", true);
					
				$("#decrep1").prop("disabled", true);
				$("#decrep2").prop("disabled", true);
				$("#nhijo").prop("disabled", true);
				$("#padresp1").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp3").prop("disabled", true);
				$("#notrore").prop("disabled", true);
				$("#npadre").prop("disabled", true);
				
				$("#ejecututo1").prop("disabled", true);
				$("#ejecututo2").prop("disabled", true);
				$("#ejecututo1").attr("checked", false);
				$("#ejecututo2").attr("checked", false);
				$("#horatu1").attr("checked", false);
				$("#horatu2").attr("checked", false);
				$("#fechatu1").attr("checked", false);
				$("#fechatu2").attr("checked", false);
				$("#portu1").attr("checked", false);
				$("#portu2").attr("checked", false);
				
				$("#horatu1").prop("disabled", true);
				$("#horatu2").prop("disabled", true);
				$("#timetu1").prop("disabled", true);
				$("#timetu2").prop("disabled", true);
				$("#fechatu1").prop("disabled", true);
				$("#fechatu2").prop("disabled", true);
				$("#fechatuto1").prop("disabled", true);
				$("#fechatuto2").prop("disabled", true);
				$("#portu1").prop("disabled", true);
				$("#portu2").prop("disabled", true);
				$("#portutxt1").prop("disabled", true);
				$("#portutxt2").prop("disabled", true);
				
				
				$("#aniotu").prop("disabled", true);
				$("#librotu").prop("disabled", true);
				$("#numtuto").prop("disabled", true);
				
				$("#tipopartuto").prop("disabled", true);
				
									
				document.querySelectorAll('[id=tipo2au]').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("tuto").style.display = 'none';
				document.getElementById("auto").style.display = '';
				document.getElementById("repre").style.display = 'none';
				document.getElementById("sentenciatu").style.display = '';
				document.getElementById("ejecutoriatu").style.display = '';
				document.getElementById("sentuto").style.display = 'none';
				document.getElementById("ejetuto").style.display = 'none';
				document.getElementById("foliaciont1").style.display = '';

					document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);
				
				$("#inifinal").prop("disabled", true);
				$("#inifinal2").prop("disabled", true);
				$("#inifinal3").prop("disabled", true);
				$("#cargot").prop("disabled", true);
				$("#ntutor").prop("disabled", true);
				$("#nrespecto").prop("disabled", true);
				
				$("#perdida1").prop("disabled", false);
				$("#perdida2").prop("disabled", false);
				$("#nperdida").prop("disabled", false);
				$("#nautoridadnombre").prop("disabled", false);
				$("#autoridadpor").prop("disabled", true);


$("#chkauto").attr("checked", false);
				
				$("#chkauto").prop("disabled", false);



				$("#hijos1").prop("disabled", false);
				$("#hijos2").prop("disabled", false);
					$("#hijosr1").prop("disabled", true);
				$("#hijosr2").prop("disabled", true);
					
				$("#decrep1").prop("disabled", true);
				$("#decrep2").prop("disabled", true);
				$("#nhijo").prop("disabled", true);
				$("#padresp1").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp3").prop("disabled", true);
				$("#notrore").prop("disabled", true);
				$("#npadre").prop("disabled", true);
				
				$("#ejecututo1").prop("disabled", false);
				$("#ejecututo2").prop("disabled", false);
				$("#ejecututo1").attr("checked", false);
				$("#ejecututo2").attr("checked", false);
				$("#horatu1").attr("checked", false);
				$("#horatu2").attr("checked", false);
				$("#fechatu1").attr("checked", false);
				$("#fechatu2").attr("checked", false);
				$("#portu1").attr("checked", false);
				$("#portu2").attr("checked", false);
				
				$("#horatu1").prop("disabled", true);
				$("#horatu2").prop("disabled", true);
				$("#timetu1").prop("disabled", true);
				$("#timetu2").prop("disabled", true);
				$("#fechatu1").prop("disabled", true);
				$("#fechatu2").prop("disabled", true);
				$("#fechatuto1").prop("disabled", true);
				$("#fechatuto2").prop("disabled", true);
				$("#portu1").prop("disabled", true);
				$("#portu2").prop("disabled", true);
				$("#portutxt1").prop("disabled", true);
				$("#portutxt2").prop("disabled", true);
				
				$("#aniotu").prop("disabled", false);
				$("#librotu").prop("disabled", false);
				$("#numtuto").prop("disabled", false);
				
				$("#tipopartuto").prop("disabled", false);
				
			}
        });
    });

$(document).ready(function () {
        $("#tipo3au").click(function () {
            if ($("#repre").is(":visible")) {
                document.getElementById("tuto").style.display = 'none';
				document.getElementById("auto").style.display = 'none';
				document.getElementById("repre").style.display = 'none';
				document.getElementById("sentenciatu").style.display = 'none';
				document.getElementById("ejecutoriatu").style.display = 'none';
				document.getElementById("sentuto").style.display = 'none';
				document.getElementById("ejetuto").style.display = 'none';
				document.getElementById("foliaciont1").style.display = 'none';

					document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);
	
				
				$("#inifinal").prop("disabled", true);
				$("#inifinal2").prop("disabled", true);
				$("#cargot").prop("disabled", true);
				$("#ntutor").prop("disabled", true);
				$("#nrespecto").prop("disabled", true);
				
				$("#perdida1").prop("disabled", true);
				$("#perdida2").prop("disabled", true);
				$("#nperdida").prop("disabled", true);
				$("#nautoridadnombre").prop("disabled", true);
				$("#autoridadpor").prop("disabled", true);

				$("#chkauto").attr("checked", false);
				
				$("#chkauto").prop("disabled", true);
				$("#hijos1").prop("disabled", true);
				$("#hijos2").prop("disabled", true);
					$("#hijosr1").prop("disabled", true);
				$("#hijosr2").prop("disabled", true);
					
				$("#decrep1").prop("disabled", true);
				$("#decrep2").prop("disabled", true);
				$("#nhijo").prop("disabled", true);
				$("#padresp1").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp3").prop("disabled", true);
				$("#notrore").prop("disabled", true);
				$("#npadre").prop("disabled", true);
				
				$("#ejecututo1").prop("disabled", true);
				$("#ejecututo2").prop("disabled", true);
				$("#ejecututo1").attr("checked", false);
				$("#ejecututo2").attr("checked", false);
				$("#horatu1").attr("checked", false);
				$("#horatu2").attr("checked", false);
				$("#fechatu1").attr("checked", false);
				$("#fechatu2").attr("checked", false);
				$("#portu1").attr("checked", false);
				$("#portu2").attr("checked", false);
				
				$("#horatu1").prop("disabled", true);
				$("#horatu2").prop("disabled", true);
				$("#timetu1").prop("disabled", true);
				$("#timetu2").prop("disabled", true);
				$("#fechatu1").prop("disabled", true);
				$("#fechatu2").prop("disabled", true);
				$("#fechatuto1").prop("disabled", true);
				$("#fechatuto2").prop("disabled", true);
				$("#portu1").prop("disabled", true);
				$("#portu2").prop("disabled", true);
				$("#portutxt1").prop("disabled", true);
				$("#portutxt2").prop("disabled", true);
				
				
				$("#aniotu").prop("disabled", true);
				$("#librotu").prop("disabled", true);
				$("#numtuto").prop("disabled", true);
				
				$("#tipopartuto").prop("disabled", true);
				
									
				document.querySelectorAll('[id=tipo3au]').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("tuto").style.display = 'none';
				document.getElementById("auto").style.display = 'none';
				document.getElementById("repre").style.display = '';
				document.getElementById("sentenciatu").style.display = '';
				document.getElementById("ejecutoriatu").style.display = '';
				document.getElementById("sentuto").style.display = 'none';
				document.getElementById("ejetuto").style.display = 'none';
				document.getElementById("foliaciont1").style.display = '';

					document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);
				
				$("#inifinal").prop("disabled", true);
				$("#inifinal2").prop("disabled", true);
				$("#cargot").prop("disabled", true);
				$("#ntutor").prop("disabled", true);
				$("#nrespecto").prop("disabled", true);
				
				$("#perdida1").prop("disabled", true);
				$("#perdida2").prop("disabled", true);
				$("#nperdida").prop("disabled", true);
				$("#nautoridadnombre").prop("disabled", true);
				$("#autoridadpor").prop("disabled", true);

				$("#chkauto").attr("checked", false);
				
				$("#chkauto").prop("disabled", true);
				$("#hijos1").prop("disabled", true);
				$("#hijos2").prop("disabled", true);
					$("#hijosr1").prop("disabled", false);
				$("#hijosr2").prop("disabled", false);
					
				$("#decrep1").prop("disabled", false);
				$("#decrep2").prop("disabled", false);
				$("#nhijo").prop("disabled", false);
				$("#padresp1").prop("disabled", false);
				$("#padresp2").prop("disabled", false);
				$("#padresp2").prop("disabled", false);
				$("#padresp3").prop("disabled", false);
				$("#notrore").prop("disabled", true);
				$("#npadre").prop("disabled", false);
				
				$("#ejecututo1").prop("disabled", false);
				$("#ejecututo2").prop("disabled", false);
				$("#ejecututo1").attr("checked", false);
				$("#ejecututo2").attr("checked", false);
				$("#horatu1").attr("checked", false);
				$("#horatu2").attr("checked", false);
				$("#fechatu1").attr("checked", false);
				$("#fechatu2").attr("checked", false);
				$("#portu1").attr("checked", false);
				$("#portu2").attr("checked", false);
				
				$("#horatu1").prop("disabled", true);
				$("#horatu2").prop("disabled", true);
				$("#timetu1").prop("disabled", true);
				$("#timetu2").prop("disabled", true);
				$("#fechatu1").prop("disabled", true);
				$("#fechatu2").prop("disabled", true);
				$("#fechatuto1").prop("disabled", true);
				$("#fechatuto2").prop("disabled", true);
				$("#portu1").prop("disabled", true);
				$("#portu2").prop("disabled", true);
				$("#portutxt1").prop("disabled", true);
				$("#portutxt2").prop("disabled", true);
				
				$("#aniotu").prop("disabled", false);
				$("#librotu").prop("disabled", false);
				$("#numtuto").prop("disabled", false);
				
				$("#tipopartuto").prop("disabled", false);
				
			}
        });
    });


////////////////// tutorias


$(document).ready(function () {
        $("#inifinal").click(function () {
            if ($("#reestablece").is(":visible")) {
          
			
				document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);


									
				document.querySelectorAll('[id=inifinal').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);

				
			}
        });
    });

$(document).ready(function () {
        $("#inifinal2").click(function () {
            if ($("#reestablece").is(":visible")) {
          
			
				document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);


									
				document.querySelectorAll('[id=inifinal2').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);

				
			}
        });
    });

$(document).ready(function () {
        $("#inifinal3").click(function () {
            if ($("#reestablece").is(":visible")) {
          
			
				document.getElementById("reestablece").style.display = 'none';
				$("#tutorpara").prop("disabled", true);
				$("#ofituto").prop("disabled", true);
				$("#fechartuto").prop("disabled", true);
				$("#portuto").prop("disabled", true);
				$("#lugartuto").prop("disabled", true);


									
				document.querySelectorAll('[id=inifinal3').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("reestablece").style.display = '';
				$("#tutorpara").prop("disabled", false);
				$("#ofituto").prop("disabled", false);
				$("#fechartuto").prop("disabled", false);
				$("#portuto").prop("disabled", false);
				$("#lugartuto").prop("disabled", false);

				
			}
        });
    });












/////////////////// perdina nacionalidad

$(document).ready(function () {
        $("#tipo1pr").click(function () {
            if ($("#perrecnac1").is(":visible")) {
                document.getElementById("perrecnac1").style.display = 'none';
				document.getElementById("sentenciaprnac").style.display = 'none';
				document.getElementById("senprnac").style.display = 'none';
				document.getElementById("foliacionprnac").style.display = 'none';
			
							
				$("#nombreprnac").prop("disabled", true);
				$("#chksentenciaprnac").attr("checked", false);
				$("#chksentenciaprnac").prop("disabled", true);
				$("#horaprnac").attr("checked", false);
				$("#horaprnac").prop("disabled", true);
				$("#timeprnac").prop("disabled", true);
				$("#fechaprnac").attr("checked", false);
				$("#fechaprnac").prop("disabled", true);
				$("#fechaprnacdate").prop("disabled", true);
				$("#porprnac").attr("checked", false);
				$("#porprnac").prop("disabled", true);
				$("#porprnactxt").prop("disabled", true);
				$("#anioprnac").prop("disabled", true);
				$("#libroprnac").prop("disabled", true);
				$("#numprnac").prop("disabled", true);
				$("#tipoparprna").prop("disabled", true);

				$("#sexonac1prnac").prop("disabled", true);
				$("#sexonac2prnac").prop("disabled", true);
				$("#conocidoprnac").attr("checked", false);
				$("#conocidoprnac").prop("disabled", true);
				$("#conotxtprnac").prop("disabled", true);




				
				document.querySelectorAll('[id=tipo1pr]').forEach((x) => x.checked = false);
            }


            else {
 				 document.getElementById("perrecnac1").style.display = '';
				document.getElementById("sentenciaprnac").style.display = '';
				document.getElementById("senprnac").style.display = 'none';
				document.getElementById("foliacionprnac").style.display = '';
			
							
				$("#nombreprnac").prop("disabled", false);
				$("#chksentenciaprnac").attr("checked", false);
				$("#chksentenciaprnac").prop("disabled", false);
				$("#horaprnac").attr("checked", false);
				$("#horaprnac").prop("disabled", true);
				$("#timeprnac").prop("disabled", true);
				$("#fechaprnac").attr("checked", false);
				$("#fechaprnac").prop("disabled", true);
				$("#fechaprnacdate").prop("disabled", true);
				$("#porprnac").attr("checked", false);
				$("#porprnac").prop("disabled", true);
				$("#porprnactxt").prop("disabled", true);
				$("#anioprnac").prop("disabled", false);
				$("#libroprnac").prop("disabled", false);
				$("#numprnac").prop("disabled", false);
				$("#tipoparprna").prop("disabled", false);
				
				$("#sexonac1prnac").prop("disabled", false);
				$("#sexonac2prnac").prop("disabled", false);
				$("#conocidoprnac").attr("checked", false);
				$("#conocidoprnac").prop("disabled", false);
				$("#conotxtprnac").prop("disabled", true);
				
			}
        });
    });

$(document).ready(function () {
        $("#tipo2pr").click(function () {
            if ($("#perrecnac1").is(":visible")) {
                document.getElementById("perrecnac1").style.display = 'none';
				document.getElementById("sentenciaprnac").style.display = 'none';
				document.getElementById("senprnac").style.display = 'none';
				document.getElementById("foliacionprnac").style.display = 'none';
			
							
				$("#nombreprnac").prop("disabled", true);
				$("#chksentenciaprnac").attr("checked", false);
				$("#chksentenciaprnac").prop("disabled", true);
				$("#horaprnac").attr("checked", false);
				$("#horaprnac").prop("disabled", true);
				$("#timeprnac").prop("disabled", true);
				$("#fechaprnac").attr("checked", false);
				$("#fechaprnac").prop("disabled", true);
				$("#fechaprnacdate").prop("disabled", true);
				$("#porprnac").attr("checked", false);
				$("#porprnac").prop("disabled", true);
				$("#porprnactxt").prop("disabled", true);
				$("#anioprnac").prop("disabled", true);
				$("#libroprnac").prop("disabled", true);
				$("#numprnac").prop("disabled", true);
				$("#tipoparprna").prop("disabled", true);
				$("#sexonac1prnac").prop("disabled", true);
				$("#sexonac2prnac").prop("disabled", true);
				$("#conocidoprnac").attr("checked", false);
				$("#conocidoprnac").prop("disabled", true);
				$("#conotxtprnac").prop("disabled", true);
				
				document.querySelectorAll('[id=tipo2pr]').forEach((x) => x.checked = false);
            }


            else {
 				 document.getElementById("perrecnac1").style.display = '';
				document.getElementById("sentenciaprnac").style.display = '';
				document.getElementById("senprnac").style.display = 'none';
				document.getElementById("foliacionprnac").style.display = '';
			
							
				$("#nombreprnac").prop("disabled", false);
				$("#chksentenciaprnac").attr("checked", false);
				$("#chksentenciaprnac").prop("disabled", false);
				$("#horaprnac").attr("checked", false);
				$("#horaprnac").prop("disabled", true);
				$("#timeprnac").prop("disabled", true);
				$("#fechaprnac").attr("checked", false);
				$("#fechaprnac").prop("disabled", true);
				$("#fechaprnacdate").prop("disabled", true);
				$("#porprnac").attr("checked", false);
				$("#porprnac").prop("disabled", true);
				$("#porprnactxt").prop("disabled", true);
				$("#anioprnac").prop("disabled", false);
				$("#libroprnac").prop("disabled", false);
				$("#numprnac").prop("disabled", false);
				$("#tipoparprna").prop("disabled", false);
			$("#sexonac1prnac").prop("disabled", false);
				$("#sexonac2prnac").prop("disabled", false);
				$("#conocidoprnac").attr("checked", false);
				$("#conocidoprnac").prop("disabled", false);
				$("#conotxtprnac").prop("disabled", true);
				
			}
        });
    });





/////////////// varias



$(document).ready(function () {
        $("#tipo1var").click(function () {
            if ($("#foliacionvar1").is(":visible")) {
                document.getElementById("foliacionvar1").style.display = 'none';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = 'none';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#folvar").prop("disabled", true);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				
				
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#nunvar").prop("disabled", true);
				$("#tipopartuto3").prop("disabled", true);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
				
		
				document.querySelectorAll('[id=tipo1var]').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("foliacionvar1").style.display = '';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = '';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", false);
				$("#librovar").prop("disabled", false);
				$("#folvar").prop("disabled", false);


document.getElementById("librovar").focus();





				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar2").prop("disabled", false);
				$("#librovar2").prop("disabled", false);
				$("#numvar2").prop("disabled", false);
				$("#tipopartuto3").prop("disabled", false);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
			}
        });
    });
$(document).ready(function () {
        $("#tipo2var").click(function () {
            if ($("#senvar1").is(":visible")) {
                document.getElementById("foliacionvar1").style.display = 'none';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = 'none';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#folvar").prop("disabled", true);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#nunvar").prop("disabled", true);
				$("#tipopartuto3").prop("disabled", true);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
		
				document.querySelectorAll('[id=tipo2var]').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("foliacionvar1").style.display = '';
				document.getElementById("sentenciavar").style.display = '';
				document.getElementById("ejecutoriavar").style.display = '';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = '';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", false);
				$("#librovar").prop("disabled", false);
				$("#folvar").prop("disabled", false);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", false);
				$("#ejecuvar2").prop("disabled", false);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar2").prop("disabled", false);
				$("#librovar2").prop("disabled", false);
				$("#numvar2").prop("disabled", false);
				$("#tipopartuto3").prop("disabled", false);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
			}
        });
    });

$(document).ready(function () {
        $("#tipo3var").click(function () {
            if ($("#senvar2").is(":visible")) {
                document.getElementById("foliacionvar1").style.display = 'none';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = 'none';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#folvar").prop("disabled", true);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#nunvar").prop("disabled", true);
				$("#tipopartuto3").prop("disabled", true);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
		
				document.querySelectorAll('[id=tipo3var]').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("foliacionvar1").style.display = 'none';
				document.getElementById("sentenciavar").style.display = '';
				document.getElementById("ejecutoriavar").style.display = '';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = '';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#folvar").prop("disabled", true);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", false);
				$("#ejecuvar2").prop("disabled", false);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar2").prop("disabled", false);
				$("#librovar2").prop("disabled", false);
				$("#numvar2").prop("disabled", false);
				$("#tipopartuto3").prop("disabled", false);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
			}
        });
    });

$(document).ready(function () {
        $("#tipo4var").click(function () {
            if ($("#dmatri").is(":visible")) {
                document.getElementById("foliacionvar1").style.display = 'none';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = 'none';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#folvar").prop("disabled", true);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#nunvar").prop("disabled", true);
				$("#tipopartuto3").prop("disabled", true);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
		
				document.querySelectorAll('[id=tipo4var]').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("foliacionvar1").style.display = 'none';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = '';
				document.getElementById("dmatri2").style.display = '';
				document.getElementById("foliacionvar3").style.display = '';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#folvar").prop("disabled", true);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", false);
				$("#hijosvar2").prop("disabled", false);
				$("#nmenor").prop("disabled", false);
				$("#madrevar").prop("disabled", false);
				$("#padrevar").prop("disabled", false);
				$("#fechabvar").prop("disabled", false);
				$("#lugarvar").prop("disabled", false);
				
				$("#txtotrovar").prop("disabled", false);
				$("#notariovar").prop("disabled", false);
				
				$("#aniovar2").prop("disabled", false);
				$("#librovar2").prop("disabled", false);
				$("#numvar2").prop("disabled", false);
				$("#tipopartuto3").prop("disabled", false);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
			}
        });
    });

$(document).ready(function () {
        $("#tipo5var").click(function () {
            if ($("#fechaacu").is(":visible")) {
                document.getElementById("foliacionvar1").style.display = 'none';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = 'none';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#folvar").prop("disabled", true);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#nunvar").prop("disabled", true);
				$("#tipopartuto3").prop("disabled", true);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
		
				document.querySelectorAll('[id=tipo5var]').forEach((x) => x.checked = false);
            }
            else {
 				document.getElementById("foliacionvar1").style.display = '';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = '';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = 'none';
				document.getElementById("foliacionvar4").style.display = '';
				
				$("#aniovar").prop("disabled", false);
				$("#librovar").prop("disabled", false);
				$("#folvar").prop("disabled", false);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", false);
				$("#tipovar2").prop("disabled", false);
				$("#acuer").prop("disabled", false);
				$("#fechavaracu1").prop("disabled", false);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar2").prop("disabled", true);
				$("#librovar2").prop("disabled", true);
				$("#numvar2").prop("disabled", true);
				$("#tipopartuto3").prop("disabled", true);
				
				$("#aniovar3").prop("disabled", false);
				$("#librovar3").prop("disabled", false);
				$("#numvar3").prop("disabled", false);
				$("#tipopartuto2").prop("disabled", false);
				
				
				
			}
        });
    });




$(document).ready(function () {
        $("#ejecuvar1").click(function () {
            if ($("#senvar1").is(":visible")) {
              document.getElementById("senvar1").style.display = 'none';
			
				$("#horavar1").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				
				$("#horavar1").attr("checked", false);
				$("#timevar1").prop("disabled", true);
				$("#fechavar1").attr("checked", false);
				$("#fechavari1").prop("disabled", true);
				$("#porvar1").attr("checked", false);
				$("#porvartxt1").prop("disabled", true);
				
				document.querySelectorAll('[id=ejecuvar1]').forEach((x) => x.checked = false);			
            }
            else {
               document.getElementById("senvar1").style.display = '';
			  
				
				$("#horavar1").prop("disabled", false);
				$("#fechavar1").prop("disabled", false);
				$("#porvar1").prop("disabled", false);
				
				$("#horavar1").attr("checked", false);
				$("#timevar1").prop("disabled", true);
				$("#fechavar1").attr("checked", false);
				$("#fechavari1").prop("disabled", true);
				$("#porvar1").attr("checked", false);
				$("#porvartxt1").prop("disabled", true);
			 				
			}
        });
    });

$(document).ready(function () {
        $("#ejecuvar2").click(function () {
            if ($("#senvar2").is(":visible")) {
              document.getElementById("senvar2").style.display = 'none';
			
				$("#horavar2").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				
				$("#horavar2").attr("checked", false);
				$("#timevar2").prop("disabled", true);
				$("#fechavar2").attr("checked", false);
				$("#fechavari2").prop("disabled", true);
				$("#porvar2").attr("checked", false);
				$("#porvartxt2").prop("disabled", true);
				document.querySelectorAll('[id=ejecuvar2]').forEach((x) => x.checked = false);			
            }
            else {
               document.getElementById("senvar2").style.display = '';
			  document.getElementById("senvar1").focus();
				$("#horavar2").prop("disabled", false);
				$("#fechavar2").prop("disabled", false);
				$("#porvar2").prop("disabled", false);
			 	
				$("#horavar2").attr("checked", false);
				$("#timevar2").prop("disabled", true);
				$("#fechavar2").attr("checked", false);
				$("#fechavari2").prop("disabled", true);
				$("#porvar2").attr("checked", false);
				$("#porvartxt2").prop("disabled", true);
			}
        });
    });

$( function() {
 $("#horavar1").click(function () {
	   	$("#timevar1").prop("disabled", false);
	 document.getElementById("timevar1").focus();
	  });
});

$( function() {
 $("#horavar2").click(function () {
	   	$("#timevar2").prop("disabled", false);
	 document.getElementById("timevar2").focus();
	  });
});

$( function() {
 $("#fechavar1").click(function () {
	   	$("#fechavari1").prop("disabled", false);
	 document.getElementById("fechavari1").focus();
	  });
});
$( function() {
 $("#fechavar2").click(function () {
	   	$("#fechavari2").prop("disabled", false);
	 document.getElementById("fechavari2").focus();
	  });
});

$( function() {
 $("#porvar1").click(function () {
	   	$("#porvartxt1").prop("disabled", false);
	 document.getElementById("porvartxt1").focus();
	  });
});

$( function() {
 $("#porvar2").click(function () {
	   	$("#porvartxt2").prop("disabled", false);
	 document.getElementById("porvartxt2").focus();
	  });
});










$(document).ready(function () {
        $("#ejecututo1").click(function () {
            if ($("#sentuto").is(":visible")) {
              document.getElementById("sentuto").style.display = 'none';
			
				$("#horatu1").prop("disabled", true);
				$("#fechatu1").prop("disabled", true);
				$("#portu1").prop("disabled", true);
				
				$("#horatu1").attr("checked", false);
				$("#timetu1").prop("disabled", true);
				$("#fechatu1").attr("checked", false);
				$("#fechatuto1").prop("disabled", true);
				$("#portu1").attr("checked", false);
				$("#portutxt1").prop("disabled", true);
				
				document.querySelectorAll('[id=ejecututo1]').forEach((x) => x.checked = false);			
            }
            else {
               document.getElementById("sentuto").style.display = '';
			  
				$("#horatu1").prop("disabled", false);
				$("#fechatu1").prop("disabled", false);
				$("#portu1").prop("disabled", false);
			 	
				$("#horatu1").attr("checked", false);
				$("#timetu1").prop("disabled", true);
				$("#fechatu1").attr("checked", false);
				$("#fechatuto1").prop("disabled", true);
				$("#portu1").attr("checked", false);
				$("#portutxt1").prop("disabled", true);
			}
        });
    });



$( function() {
 $("#horatu1").click(function () {
	   	$("#timetu1").prop("disabled", false);
	 document.getElementById("timetu1").focus();
	  });
});

$( function() {
 $("#horatu2").click(function () {
	   	$("#timetu2").prop("disabled", false);
	 document.getElementById("timetu2").focus();
	  });
});

$( function() {
 $("#fechatu1").click(function () {
	   	$("#fechatuto1").prop("disabled", false);
	 document.getElementById("fechatuto1").focus();
	  });
});
$( function() {
 $("#fechatu2").click(function () {
	   	$("#fechatuto2").prop("disabled", false);
	 document.getElementById("fechatuto2").focus();
	  });
});

$( function() {
 $("#portu1").click(function () {
	   	$("#portutxt1").prop("disabled", false);
	 document.getElementById("portutxt1").focus();
	  });
});

$( function() {
 $("#portu2").click(function () {
	   	$("#portutxt2").prop("disabled", false);
	 document.getElementById("portutxt2").focus();
	  });
});


$( function() {
 $("#padresp3").click(function () {
	   	$("#notrore").prop("disabled", false);
	 document.getElementById("notrore").focus();
	  });
});

$( function() {
 $("#padresp2").click(function () {
	   	$("#notrore").prop("disabled", true);
		  });
});
$( function() {
 $("#padresp1").click(function () {
	   	$("#notrore").prop("disabled", true);
		  });
});





$(document).ready(function () {
        $("#ejecututo2").click(function () {
            if ($("#ejetuto").is(":visible")) {
             
			  document.getElementById("ejetuto").style.display = 'none';
			
				$("#horatu2").prop("disabled", true);
				$("#fechatu2").prop("disabled", true);
				$("#portu2").prop("disabled", true);
				
				$("#horatu2").attr("checked", false);
				$("#timetu2").prop("disabled", true);
				$("#fechatu2").attr("checked", false);
				$("#fechatuto2").prop("disabled", true);
				$("#portu2").attr("checked", false);
				$("#portutxt2").prop("disabled", true);
					document.querySelectorAll('[id=ejecututo2]').forEach((x) => x.checked = false);
							
            }
            else {

			   document.getElementById("ejetuto").style.display = '';
								
				$("#horatu2").prop("disabled", false);
				$("#fechatu2").prop("disabled", false);
				$("#portu2").prop("disabled", false);
				
				$("#horatu2").attr("checked", false);
				$("#timetu2").prop("disabled", true);
				$("#fechatu2").attr("checked", false);
				$("#fechatuto2").prop("disabled", true);
				$("#portu2").attr("checked", false);
				$("#portutxt2").prop("disabled", true);
				
			 				
			}
        });
    });




////////////////////sentencia RREE


$(document).ready(function () {
        $("#chksentenciaprnac").click(function () {
            if ($("#senprnac").is(":visible")) {
             document.querySelectorAll('[id=chksentenciaprnac]').forEach((x) => x.checked = false);
			  document.getElementById("senprnac").style.display = 'none';
			
		

				$("#horaprnac").attr("checked", false);
				$("#horaprnac").prop("disabled", true);
				$("#timeprnac").prop("disabled", true);
				$("#fechaprnac").attr("checked", false);
				$("#fechaprnac").prop("disabled", true);
				$("#fechaprnacdate").prop("disabled", true);
				$("#porprnac").attr("checked", false);
				$("#porprnac").prop("disabled", true);
				$("#porprnactxt").prop("disabled", true);
		


					
							
            }
            else {

			   document.getElementById("senprnac").style.display = '';
								
				$("#horaprnac").attr("checked", false);
				$("#horaprnac").prop("disabled", false);
				$("#timeprnac").prop("disabled", true);
				$("#fechaprnac").attr("checked", false);
				$("#fechaprnac").prop("disabled", false);
				$("#fechaprnacdate").prop("disabled", true);
				$("#porprnac").attr("checked", false);
				$("#porprnac").prop("disabled", false);
				$("#porprnactxt").prop("disabled", true);
				
			 				
			}
        });
    });






























$(document).ready(function () {
        $("#valuedivnjsr").click(function () {
            if ($("#decrereg1").is(":visible")) {
              document.getElementById("decrereg1").style.display = 'none';
			 document.querySelectorAll('[id=valuedivnjsr]').forEach((x) => x.checked = false);
				
				$("#decrevalnjsr").prop("disabled", true);
				$("#decreval2njsr").prop("disabled", true);
				$("#por_sjuzr").prop("disabled", true);
				
				$("#decrevalnjsr").attr("checked", false);
				$("#timedecrenjsr").prop("disabled", true);
				$("#decreval2njsr").attr("checked", false);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#por_sjuzr").attr("checked", false);
				$("#txt_por_sjuzr").prop("disabled", true);
				
									
            }
            else {
              document.getElementById("decrereg1").style.display = '';
				$("#decrevalnjsr").prop("disabled", false);
				$("#decreval2njsr").prop("disabled", false);
				$("#por_sjuzr").prop("disabled", false);
			 				
				$("#decrevalnjsr").attr("checked", false);
				$("#timedecrenjsr").prop("disabled", true);
				$("#decreval2njsr").attr("checked", false);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#por_sjuzr").attr("checked", false);
				$("#txt_por_sjuzr").prop("disabled", true);
			}
        });
    });


$(document).ready(function () {
        $("#valuedivnjser").click(function () {
            if ($("#decrereg2").is(":visible")) {
               document.getElementById("decrereg2").style.display = 'none';	
				
				$("#decrevalnjser").prop("disabled", true);
				$("#decreval2njser").prop("disabled", true);
				$("#por_ejuzr").prop("disabled", true);
				
				$("#decrevalnjser").attr("checked", false);
				$("#timedecrenjser").prop("disabled", true);
				$("#decreval2njser").attr("checked", false);
				$("#fechadecrenjser").prop("disabled", true);
				$("#por_ejuzr").attr("checked", false);
				$("#txt_por_ejuzr").prop("disabled", true);
				
	
				document.querySelectorAll('[id=valuedivnjser]').forEach((x) => x.checked = false);
            }
            else {
              document.getElementById("decrereg2").style.display = '';	
				
				$("#decrevalnjser").prop("disabled", false);
				$("#decreval2njser").prop("disabled", false);
				$("#por_ejuzr").prop("disabled", false);
				
				$("#decrevalnjser").attr("checked", false);
				$("#timedecrenjser").prop("disabled", true);
				$("#decreval2njser").attr("checked", false);
				$("#fechadecrenjser").prop("disabled", true);
				$("#por_ejuzr").attr("checked", false);
				$("#txt_por_ejuzr").prop("disabled", true);
				
			}
        });
    });








$( function() {
      $("#decrevalnjsr").click(function () {
		$("#timedecrenjsr").prop("disabled", false);
		  	   document.getElementById("timedecrenjsr").focus();
	  });
});
$( function() {
  $("#decreval2njsr").click(function () {
		$("#fechadecrenjsr").prop("disabled", false);
	  	   document.getElementById("fechadecrenjsr").focus();
	  });
});
$( function() {
 $("#por_sjuzr").click(function () {
	   	$("#txt_por_sjuzr").prop("disabled", false);
	 document.getElementById("txt_por_sjuzr").focus();
	  });
});

$( function() {
      $("#decrevalnjser").click(function () {
		$("#timedecrenjser").prop("disabled", false);
		  	   document.getElementById("timedecrenjser").focus();
	  });
});
$( function() {
  $("#decreval2njser").click(function () {
		$("#fechadecrenjser").prop("disabled", false);
	  	   document.getElementById("fechadecrenjser").focus();
	  });
});
$( function() {
 $("#por_ejuzr").click(function () {
	   	$("#txt_por_ejuzr").prop("disabled", false);
	 document.getElementById("txt_por_ejuzr").focus();
	  });
});





$(document).ready(function () {
        $("#stadfolio").click(function () {
            if ($("#datosfad").is(":visible")) {
            document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				
				
							
				document.querySelectorAll('[id=stadfolio]').forEach((x) => x.checked = false);
            }
            else {
              document.getElementById("datosfad").style.display = '';
				document.getElementById("datosfad2").style.display = 'none';	
				$("#adefanio").prop("disabled", false);
				$("#librodefad").prop("disabled", false);
				$("#numdefad").prop("disabled", false);
				$("#foliodefad").prop("disabled", false);
				document.getElementById("adefanio").focus();
				$("#alcaldiadefad").prop("disabled", false);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				
				
			}
        });
    });

$(document).ready(function () {
        $("#stadfolio2").click(function () {
            if ($("#datosfad2").is(":visible")) {
             document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
			$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
							
				document.querySelectorAll('[id=stadfolio2]').forEach((x) => x.checked = false);
            }
            else {
             document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = '';
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", false);
				document.getElementById("foliodefad2").focus();
				$("#alcaldiadefad2").prop("disabled", false);
				
				
			}
        });
    });


function myFunction9() {
  document.getElementById("tutoria").reset();
		  document.getElementById("tuto").style.display = 'none';
				document.getElementById("auto").style.display = 'none';
				document.getElementById("repre").style.display = 'none';
				document.getElementById("sentenciatu").style.display = 'none';
				document.getElementById("ejecutoriatu").style.display = 'none';
				document.getElementById("sentuto").style.display = 'none';
				document.getElementById("ejetuto").style.display = 'none';
				document.getElementById("foliaciont1").style.display = 'none';
	
				
				$("#inifinal").prop("disabled", true);
				$("#inifinal2").prop("disabled", true);
				$("#inifinal3").prop("disabled", true);
				$("#cargot").prop("disabled", true);
				$("#ntutor").prop("disabled", true);
				$("#nrespecto").prop("disabled", true);
				
				$("#perdida1").prop("disabled", true);
				$("#perdida2").prop("disabled", true);
				$("#nperdida").prop("disabled", true);
				$("#nautoridadnombre").prop("disabled", true);
				$("#autoridadpor").prop("disabled", true);
				$("#hijos1").prop("disabled", true);
				$("#hijos2").prop("disabled", true);
				$("#hijosr1").prop("disabled", true);
				$("#hijosr2").prop("disabled", true);
					
				$("#decrep1").prop("disabled", true);
				$("#decrep2").prop("disabled", true);
				$("#nhijo").prop("disabled", true);
				$("#padresp1").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp2").prop("disabled", true);
				$("#padresp3").prop("disabled", true);
				$("#notrore").prop("disabled", true);
				$("#npadre").prop("disabled", true);
				
				$("#ejecututo1").prop("disabled", true);
				$("#ejecututo2").prop("disabled", true);
				
				$("#horatu1").prop("disabled", true);
				$("#horatu2").prop("disabled", true);
				$("#timetu1").prop("disabled", true);
				$("#timetu2").prop("disabled", true);
				$("#fechatu1").prop("disabled", true);
				$("#fechatu2").prop("disabled", true);
				$("#fechatuto1").prop("disabled", true);
				$("#fechatuto2").prop("disabled", true);
				$("#portu1").prop("disabled", true);
				$("#portu2").prop("disabled", true);
				$("#portutxt1").prop("disabled", true);
				$("#portutxt2").prop("disabled", true);
				
				
				$("#aniotu").prop("disabled", true);
				$("#librotu").prop("disabled", true);
				$("#numtuto").prop("disabled", true); 
			
	}

function myFunction10() {
  document.getElementById("variasfrm").reset();
		 document.getElementById("foliacionvar1").style.display = 'none';
				document.getElementById("sentenciavar").style.display = 'none';
				document.getElementById("ejecutoriavar").style.display = 'none';
				document.getElementById("senvar1").style.display = 'none';
				document.getElementById("senvar2").style.display = 'none';
				document.getElementById("fechaacu").style.display = 'none';
				document.getElementById("dmatri").style.display = 'none';
				document.getElementById("dmatri2").style.display = 'none';
				document.getElementById("foliacionvar3").style.display = 'none';
				document.getElementById("foliacionvar4").style.display = 'none';
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#folvar").prop("disabled", true);
				$("#numvar").prop("disabled", true);
				$("#optionsnad").prop("disabled", true);
				
				$("#ejecuvar1").prop("disabled", true);
				$("#ejecuvar2").prop("disabled", true);
				$("#ejecuvar1").attr("checked", false);
				$("#ejecuvar2").attr("checked", false);
				$("#horavar1").attr("checked", false);
				$("#horavar2").attr("checked", false);
				$("#fechavar1").attr("checked", false);
				$("#fechavar2").attr("checked", false);
				$("#porvar1").attr("checked", false);
				$("#porvar2").attr("checked", false);
				
				
				
				
				$("#horavar1").prop("disabled", true);
				$("#horavar2").prop("disabled", true);
				$("#timevar1").prop("disabled", true);
				$("#timevar2").prop("disabled", true);
				$("#fechavar1").prop("disabled", true);
				$("#fechavar2").prop("disabled", true);
				$("#fechavari1").prop("disabled", true);
				$("#fechavari2").prop("disabled", true);
				$("#porvar1").prop("disabled", true);
				$("#porvar2").prop("disabled", true);
				$("#porvartxt1").prop("disabled", true);
				$("#porvartxt2").prop("disabled", true);
				
				$("#tipovar1").prop("disabled", true);
				$("#tipovar2").prop("disabled", true);
				$("#acuer").prop("disabled", true);
				$("#fechavaracu1").prop("disabled", true);
				
				$("#hijosvar1").prop("disabled", true);
				$("#hijosvar2").prop("disabled", true);
				$("#nmenor").prop("disabled", true);
				$("#madrevar").prop("disabled", true);
				$("#padrevar").prop("disabled", true);
				$("#fechabvar").prop("disabled", true);
				$("#lugarvar").prop("disabled", true);
				
				$("#txtotrovar").prop("disabled", true);
				$("#notariovar").prop("disabled", true);
				
				$("#aniovar").prop("disabled", true);
				$("#librovar").prop("disabled", true);
				$("#nunvar").prop("disabled", true);
				$("#tipopartuto3").prop("disabled", true);
				
				$("#aniovar3").prop("disabled", true);
				$("#librovar3").prop("disabled", true);
				$("#numvar3").prop("disabled", true);
				$("#tipopartuto2").prop("disabled", true);
				
	
	
			
	}




function myFunction7() {
  document.getElementById("adecuacion").reset();
		  document.getElementById("datosadec").style.display = 'none';
				document.getElementById("funcioadec").style.display = 'none';
				document.getElementById("foliacion1ad").style.display = 'none';
				
				document.getElementById("adfolio").style.display = 'none';
				document.getElementById("datosfad").style.display = 'none';
				document.getElementById("datosfad2").style.display = 'none';
document.getElementById("datosadecmatri").style.display = 'none';
				document.getElementById("foliacionadenac").style.display = 'none';



				$("#apeadecmatri").prop("disabled", true);

				$("#aniopartad1mat").prop("disabled", true);
				$("#librodefad1mat").prop("disabled", true);
				$("#numdefad1mat").prop("disabled", true);
				$("#tipoparadenacmat").prop("disabled", true);
				
			
				$("#sexoad1").prop("disabled", true);
				$("#sexoad2").prop("disabled", true);
				$("#nombreadec").prop("disabled", true);
				$("#padresad1").prop("disabled", true);
				$("#padresad2").prop("disabled", true);
				$("#nombre_padres").prop("disabled", true);
				$("#apeadec").prop("disabled", true);
				
				$("#Fechaad").prop("disabled", true);
				$("#cargo_adec").prop("disabled", true);
				$("#nfunadec").prop("disabled", true);
				$("#lugaradec").prop("disabled", true);
				
				$("#stadfolio").prop("disabled", true);
				$("#stadfolio2").prop("disabled", true);
				$("#adefanio").prop("disabled", true);
				$("#librodefad").prop("disabled", true);
				$("#numdefad").prop("disabled", true);
				$("#foliodefad").prop("disabled", true);
				$("#alcaldiadefad").prop("disabled", true);
				
				$("#foliodefad2").prop("disabled", true);
				$("#alcaldiadefad2").prop("disabled", true);
				
				$("#numdefad1").prop("disabled", true);
				$("#librodefad1").prop("disabled", true);
				$("#aniopartad1").prop("disabled", true);
	
	
	
			
	}

function myFunction8() {
  document.getElementById("regimen").reset();
		  document.getElementById("nombrereg").style.display = 'none';
				document.getElementById("sentencia").style.display = 'none';
				document.getElementById("ejecutoria").style.display = 'none';
				document.getElementById("decrereg1").style.display = 'none';
				document.getElementById("decrereg2").style.display = 'none';
				document.getElementById("funcioreg").style.display = 'none';
				document.getElementById("partidareg1").style.display = 'none';
				document.getElementById("newreg").style.display = 'none';
				document.getElementById("fechareg2").style.display = 'none';
			
				
				$("#nreg").prop("disabled", true);
				$("#Fecharegs").prop("disabled", true);
				$("#Fecharegs2").prop("disabled", true);
				
													
				$("#edit_elreg").prop("disabled", true);
	$("#edit_elreg2").prop("disabled", true);
				$("#edit_ellareg").prop("disabled", true);
				$("#valuedivnjsr").prop("disabled", true);
				$("#valuedivnjser").prop("disabled", true);
				$("#decrevalnjsr").prop("disabled", true);
				$("#decreval2njsr").prop("disabled", true);
				$("#por_sjuzgador").prop("disabled", true);
				$("#decrevalnjser").prop("disabled", true);
				$("#decreval2njser").prop("disabled", true);
				$("#por_ejuzr").prop("disabled", true);
		
				$("#timedecrenjsr").prop("disabled", true);
				$("#fechadecrenjsr").prop("disabled", true);
				$("#txt_por_sjuzr").prop("disabled", true);
				$("#timedecrenjser").prop("disabled", true);
				$("#fechadecrenjser").prop("disabled", true);
				$("#txt_por_ejuzr").prop("disabled", true);
				
				$("#Fechareg").prop("disabled", true);
				$("#cargo_reg").prop("disabled", true);
				$("#nfunreg").prop("disabled", true);
				$("#lugarreg").prop("disabled", true);
				
				$("#edit_anioreg1").prop("disabled", true);
				$("#edit_libroreg1").prop("disabled", true);
				$("#edit_npartidareg1").prop("disabled", true);
	
			
	}











function myFunction5() {
  document.getElementById("cancexdef").reset();
		   document.getElementById("nombrescandef").style.display = 'none';
				document.getElementById("cdfolio").style.display = 'none';
				document.getElementById("datosfcd").style.display = 'none';
				document.getElementById("datosfcd2").style.display = 'none';
				document.getElementById("foliacion1").style.display = 'none';
				document.getElementById("foliacion2").style.display = 'none';
				document.getElementById("foliacion3").style.display = 'none';
				
				document.getElementById("datosviu").style.display = 'none';
				document.getElementById("fechadef").style.display = 'none';
				document.getElementById("nombrefallecido").style.display = 'none';
				document.getElementById("datosmat").style.display = 'none';
				document.getElementById("datosmat2").style.display = 'none';
				
				
					$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
				
				
				
				$("#sexocd1").prop("disabled", true);
				$("#sexocd2").prop("disabled", true);
				
				$("#sexocd12").prop("disabled", true);
				$("#sexocd22").prop("disabled", true);
				
					$("#edit_ncd").prop("disabled", true);
				$("#Fechacd").prop("disabled", true);
				$("#lugarcf").prop("disabled", true);
				$("#stfolio").prop("disabled", false);
				$("#stfolio2").prop("disabled", false);
				
				$("#edefanio").prop("disabled", true);
				$("#librodef").prop("disabled", true);
				$("#numdef").prop("disabled", true);
				$("#foliodef").prop("disabled", true);
				$("#alcaldiadef").prop("disabled", true);
				
				$("#foliodef2").prop("disabled", true);
				$("#alcaldiadefdos").prop("disabled", true);
				
				$("#aniopart1").prop("disabled", true);
				$("#librodef1").prop("disabled", true);
				$("#numdef1").prop("disabled", true);
				
				$("#aniopart2").prop("disabled", true);
				$("#librodef2").prop("disabled", true);
				$("#numdef2").prop("disabled", true);
				
				$("#aniopart3").prop("disabled", true);
				$("#librodef3").prop("disabled", true);
				$("#numdef3").prop("disabled", true);
				
				$("#tipoparcandef").prop("disabled", true);
				$("#tipoparviudez").prop("disabled", true);
				$("#tipoparcanmat").prop("disabled", true);
				
				////////////
			
				$("#viudo").prop("disabled", true);
			
			
					////////////
	
			
	}


function myFunction6() {
  document.getElementById("identidad").reset();
		  document.getElementById("datoside1").style.display = 'none';
				document.getElementById("foliacion1ide").style.display = 'none';
				document.getElementById("foliacion2ide").style.display = 'none';
				
				document.getElementById("datosidesex").style.display = 'none';
				document.getElementById("datoside2").style.display = 'none';
				document.getElementById("datoside3").style.display = 'none';
				
			
				$("#sexoid1").prop("disabled", true);
				$("#sexoid2").prop("disabled", true);
				$("#edit_nid").prop("disabled", true);
				$("#conoid").prop("disabled", true);
				$("#cargoid").prop("disabled", true);
				$("#nombrefid").prop("disabled", true);
				$("#lugarid").prop("disabled", true);
				$("#Fechaid").prop("disabled", true);
				
				$("#aniopart1ide").prop("disabled", true);
				$("#librodef1ide").prop("disabled", true);
				$("#numdef1ide").prop("disabled", true);
				
				$("#aniopart2ide").prop("disabled", true);
				$("#librodef2ide").prop("disabled", true);
				$("#numdef2ide").prop("disabled", true);
				
				$("#edit_nid2").prop("disabled", true);
				$("#conoid2").prop("disabled", true);
	
	}

function myFunction11() {
  document.getElementById("otroform").reset();
		  
	
	}
function myFunction12() {
  document.getElementById("revform").reset();
		  
	
	}

function myFunction13() {
  document.getElementById("revform2").reset();
		  
	
	}


function myFunction14() {
  document.getElementById("perrecnacform").reset();
		 document.getElementById("perrecnac1").style.display = 'none';
				document.getElementById("sentenciaprnac").style.display = 'none';
				document.getElementById("senprnac").style.display = 'none';
				document.getElementById("foliacionprnac").style.display = 'none';
			
							
				$("#nombreprnac").prop("disabled", true);
				$("#chksentenciaprnac").attr("checked", false);
				$("#chksentenciaprnac").prop("disabled", true);
				$("#horaprnac").attr("checked", false);
				$("#horaprnac").prop("disabled", true);
				$("#timeprnac").prop("disabled", true);
				$("#fechaprnac").attr("checked", false);
				$("#fechaprnac").prop("disabled", true);
				$("#fechaprnacdate").prop("disabled", true);
				$("#porprnac").attr("checked", false);
				$("#porprnac").prop("disabled", true);
				$("#porprnactxt").prop("disabled", true);
				$("#anioprnac").prop("disabled", true);
				$("#libroprnac").prop("disabled", true);
				$("#numprnac").prop("disabled", true);
				$("#tipoparprna").prop("disabled", true);

				("#sexonac1prnac").prop("disabled", true);
				$("#sexonac2prnac").prop("disabled", true);
				$("#conocidoprnac").attr("checked", false);
				$("#conocidoprnac").prop("disabled", true);
				$("#conotxtprnac").prop("disabled", true);



}





/////////////////////////////////////////////////

$(document).on('change', '#tipo1', function() {
    if(this.checked) {
        document.getElementById("edit_product").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo2', function() {
    if(this.checked) {
        document.getElementById("edit_product").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo3', function() {
    if(this.checked) {
        document.getElementById("edit_product").reset();
        this.checked = true;
    }
});


$(document).on('change', '#tipo1d', function() {
    if(this.checked) {
        document.getElementById("enviardivorcios").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo2d', function() {
    if(this.checked) {
        document.getElementById("enviardivorcios").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo3d', function() {
    if(this.checked) {
        document.getElementById("enviardivorcios").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo4d', function() {
    if(this.checked) {
        document.getElementById("enviardivorcios").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo5d', function() {
    if(this.checked) {
        document.getElementById("enviardivorcios").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo6d', function() {
    if(this.checked) {
        document.getElementById("enviardivorcios").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo7d', function() {
    if(this.checked) {
        document.getElementById("enviardivorcios").reset();
        this.checked = true;
    }
});


$(document).on('change', '#tipo1user', function() {
    if(this.checked) {
        document.getElementById("editarusuario").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo2user', function() {
    if(this.checked) {
        document.getElementById("editarusuario").reset();
        this.checked = true;
    }
});

$(document).on('change', '#art15_1', function() {
    if(this.checked) {
        document.getElementById("art17form").reset();
        this.checked = true;
    }
});

$(document).on('change', '#art15_2', function() {
    if(this.checked) {
        document.getElementById("art17form").reset();
        this.checked = true;
    }
});

$(document).on('change', '#art17_1', function() {
    if(this.checked) {
        document.getElementById("art17form").reset();
        this.checked = true;
    }
});

$(document).on('change', '#art17_2', function() {
    if(this.checked) {
        document.getElementById("art17form").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo1cd', function() {
    if(this.checked) {
        document.getElementById("cancexdef").reset();
		
		
		$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
		
		
        this.checked = true;
    }
});

$(document).on('change', '#tipo2cd', function() {
    if(this.checked) {
        document.getElementById("cancexdef").reset();
		
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
        this.checked = true;
    }
});

$(document).on('change', '#tipo3cd', function() {
    if(this.checked) {
        document.getElementById("cancexdef").reset();
		
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
        this.checked = true;
    }
});

$(document).on('change', '#tipo4cd', function() {
    if(this.checked) {
        document.getElementById("cancexdef").reset();
		
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
        this.checked = true;
    }
});

$(document).on('change', '#tipo5cd', function() {
    if(this.checked) {
        document.getElementById("cancexdef").reset();
		
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
        this.checked = true;
    }
});

$(document).on('change', '#tipo6cd', function() {
    if(this.checked) {
        document.getElementById("cancexdef").reset();
		
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
        this.checked = true;
    }
});

$(document).on('change', '#tipo7cd', function() {
    if(this.checked) {
        document.getElementById("cancexdef").reset();
		
			$("#conotxtcandef1").prop("disabled", true);
				$("#conotxtcandef2").prop("disabled", true);
				$("#conocidocandef1").attr("checked", false);
				$("#conocidocandef2").attr("checked", false);
        this.checked = true;
    }
});

$(document).on('change', '#tipo1id', function() {
    if(this.checked) {
        document.getElementById("identidad").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo2id', function() {
    if(this.checked) {
        document.getElementById("identidad").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo3id', function() {
    if(this.checked) {
        document.getElementById("identidad").reset();
        this.checked = true;
    }
});


$(document).on('change', '#tipo1ad', function() {
    if(this.checked) {
        document.getElementById("adecuacion").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo2ad', function() {
    if(this.checked) {
        document.getElementById("adecuacion").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo3ad', function() {
    if(this.checked) {
        document.getElementById("adecuacion").reset();
        this.checked = true;
    }
});

$(document).on('change', '#reg1', function() {
    if(this.checked) {
        document.getElementById("regimen").reset();
        this.checked = true;
    }
});

$(document).on('change', '#reg2', function() {
    if(this.checked) {
        document.getElementById("regimen").reset();
        this.checked = true;
    }
});

$(document).on('change', '#reg3', function() {
    if(this.checked) {
        document.getElementById("regimen").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo1au', function() {
    if(this.checked) {
        document.getElementById("tutoria").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo2au', function() {
    if(this.checked) {
        document.getElementById("tutoria").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo3au', function() {
    if(this.checked) {
        document.getElementById("tutoria").reset();
        this.checked = true;
    }
});



$(document).on('change', '#tipo1pr', function() {
    if(this.checked) {
        document.getElementById("perrecnacform").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo2pr', function() {
    if(this.checked) {
        document.getElementById("perrecnacform").reset();
        this.checked = true;
    }
});












$(document).on('change', '#tipo1var', function() {
    if(this.checked) {
        document.getElementById("variasfrm").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo2var', function() {
    if(this.checked) {
        document.getElementById("variasfrm").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo3var', function() {
    if(this.checked) {
        document.getElementById("variasfrm").reset();
        this.checked = true;
    }
});

$(document).on('change', '#tipo4var', function() {
    if(this.checked) {
        document.getElementById("variasfrm").reset();
        this.checked = true;
		
    }
});

$(document).on('change', '#tipo5var', function() {
    if(this.checked) {
        document.getElementById("variasfrm").reset();
        this.checked = true;
    }
});


// busqueda en los formularios

 $(function() {
    $( "#Nnotario" ).autocomplete({
      source: 'consulta.php'
    });
  });


 $(function() {
    $( "#LugarB" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });

 $(function() {
    $( "#lugartuto" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });




 
 $(function() {
    $( "#treg" ).autocomplete({
      source: 'consulta_reg.php'
    });
  });
 $(function() {
    $( "#options" ).autocomplete({
      source: 'consulta_cargo.php'
    });
  });
 $(function() {
    $( "#NFnotario" ).autocomplete({
      source: 'consulta.php'
    });
  });
  $(function() {
    $( "#optionsF" ).autocomplete({
      source: 'consulta_cargo.php'
    });
  });



$(function() {
            $("#NFnotariob").autocomplete({
                source: "consultados.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
					$('#NFnotariob').val(ui.item.nombrecargo);
                    $('#NFnotarioe').val(ui.item.nombre);
					$('#IDENOTARIO').val(ui.item.id_notario);
					$('#optionsboFe').val(ui.item.cargosjuridicos);
								
			     }
            });
		});


function limpiar() {
	 
	
 	document.getElementById("NFnotarioe").value =  '';
	 document.getElementById("IDENOTARIO").value =  '';
	 document.getElementById("optionsboFe").value =  '';
	

}


$(function() {
            $("#Lugaredit").autocomplete({
                source: "consultalugar.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
					$('#Lugaredit').val(ui.item.nombrelugar);
                    $('#IDELUGAR').val(ui.item.id_lugar);
					$('#editarlugar').val(ui.item.nombrelugar);
								
			     }
            });
		});




$(function() {
            $("#cargotxt").autocomplete({
                source: "consultacargo.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
					$('#cargotxt').val(ui.item.nombrecargo);
                    $('#IDECARGO').val(ui.item.id_cargo);
					$('#editcargo').val(ui.item.nombrecargo);
								
			     }
            });
		});



$(function() {
            $("#regiedit").autocomplete({
                source: "consultaregimen.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
					$('#regiedit').val(ui.item.nombreregimen);
                    $('#IDEREGIMEN').val(ui.item.id_regimen);
					$('#regimened').val(ui.item.nombreregimen);
								
			     }
            });
		});



$(function() {
            $("#tipoagreedibus").autocomplete({
                source: "consultatipo.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
					$('#tipoagreedibus').val(ui.item.nombre_partida);
					$('#tipoagreedi').val(ui.item.nombre_partida);
					$('#tipoiniedi').val(ui.item.iniciales_partida);
                    $('#idtipopartida').val(ui.item.id_tipo);
					$('#grupouniedi').val(ui.item.grupo_partida);
					$('#tipooculto').val(ui.item.grupo_partida);			
			     }
            });
		});






function limpiar() {
	 
	
 	document.getElementById("NFnotarioe").value =  '';
	 document.getElementById("IDENOTARIO").value =  '';
	 document.getElementById("optionsboFe").value =  '';
	

}
function limpiarlugar() {
	 
	
 	document.getElementById("editarlugar").value =  '';
	 document.getElementById("IDELUGAR").value =  '';
	
	

}

function limpiarcargo() {
	 
	
 	document.getElementById("editcargo").value =  '';
	 document.getElementById("IDECARGO").value =  '';
	
	

}

function limpiarregimen() {
	 	
 	document.getElementById("regimened").value =  '';
	 document.getElementById("IDEREGIMEN").value =  '';
		
}

function limpiartipo() {
	 	
 	document.getElementById("tipoagreedi").value =  '';
	 document.getElementById("tipoiniedi").value =  '';
	document.getElementById("idtipopartida").value =  '';
	 document.getElementById("grupouniedi").value =  '1';
		
}





 $(function() {
    $( "#alcaldiadefdos" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });



 $(function() {
    $( "#alcaldiadef" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });


document.getElementById('grupouniedi').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */
  var ocultotipo = document.getElementById('tipooculto');



  /* Asignamos cada dato a su input*/
  ocultotipo.value = this.value;


};


$(function() {
    $( "#cargot" ).autocomplete({
      source: 'consulta_cargo.php'
    });
  });


$(function() {
    $( "#cargorecti" ).autocomplete({
      source: 'consulta_cargo.php'
    });
  });











 $(function() {
    $( "#cargoe" ).autocomplete({
      source: 'consulta_cargo.php'
    });
  });

 $(function() {
    $( "#regimenp" ).autocomplete({
      source: 'consulta_reg.php'
    });
  });


$(function() {
    $( "#Lugare" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });


$(function() {
    $( "#lugarrecti" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });








$(function() {
    $( "#lugarid" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });


 $(function() {
    $( "#cargoid" ).autocomplete({
      source: 'consulta_cargo.php'
    });
  });

$(function() {
    $( "#nombrefid" ).autocomplete({
      source: 'consulta.php'
    });
	 });

$(function() {
    $( "#nombrerecti" ).autocomplete({
      source: 'consulta.php'
    });
	 });


$(function() {
    $( "#lugaradec" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });


 $(function() {
    $( "#cargo_adec" ).autocomplete({
      source: 'consulta_cargo.php'
    });
  });

$(function() {
    $( "#nfunadec" ).autocomplete({
      source: 'consulta.php'
    });
	 });

$(function() {
    $( "#alcaldiadefad" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });


$(function() {
    $( "#alcaldiadefad2" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });

 $(function() {
    $( "#nreg" ).autocomplete({
      source: 'consulta_reg.php'
    });
  });


 $(function() {
    $( "#cargo_reg" ).autocomplete({
      source: 'consulta_cargo.php'
    });
  });

$(function() {
    $( "#nfunreg" ).autocomplete({
      source: 'consulta.php'
    });
	 });

$(function() {
    $( "#lugarreg" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });

$(function() {
    $( "#lugarvar" ).autocomplete({
      source: 'consulta_municipios.php'
    });
  });

$(function() {
    $( "#txtotrovar" ).autocomplete({
      source: 'consulta_cargo.php'
    });
	 });

$(function() {
    $( "#notariovar" ).autocomplete({
      source: 'consulta.php'
    });
	 });

$(function() {
    $( "#tipoagre" ).autocomplete({
      source: 'consulta_tipopartida.php'
    });
	 });

$(function() {
    $( "#tipoini" ).autocomplete({
      source: 'consulta_inipartida.php'
    });
	 });

$(function() {
    $( "#tipoagreedi" ).autocomplete({
      source: 'consulta_tipopartida.php'
    });
	 });



$(function() {
    $( "#tipoiniedi" ).autocomplete({
      source: 'consulta_inipartida.php'
    });
	 });







$(document).ready(function () {
  $("#tipopart").on("change", function () {
   
	    var selectc = tipopart.selectedOptions[0].getAttribute("data-value")
		  $('#tipopart173').val(selectc)
	
  })
})

$(document).ready(function () {
  $("#tipopart2").on("change", function () {
   
	    var selectcdos = tipopart2.selectedOptions[0].getAttribute("data-value3")
		  $('#tipopart174').val(selectcdos)
	
  })
})

$(document).ready(function () {
  $("#tipomargvacia").on("change", function () {
   
	    var selectvacia = tipomargvacia.selectedOptions[0].getAttribute("data-value4")
		  $('#tipootr').val(selectvacia)
	
  })
})






