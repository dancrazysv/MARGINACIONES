

jQuery(document).on('submit','#formLg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'main_app/login.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  $('.botonlg').val('Validando....');
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                  if (respuesta.tipo=='Admin') {
                    location='../main_app/Admin/';
                  } else if (respuesta.tipo=='Usuario') {
                    location='../main_app/Usuario/';
                  }
                   else if (respuesta.tipo=='CCMarginacion') {
                    location='../main_app/CCalidadmarginaciones/';
                  }
                   else if(respuesta.tipo=='CCalidad') {
                    location='../main_app/ControlCalidad/';
                  }
                   else if(respuesta.tipo=='Cuscatancingo') {
                    location='../main_app/Cuscatancingo/';
                  }
                   else if(respuesta.tipo=='Ayutuxtepeque') {
                    location='../main_app/Ayutuxtepeque/';
                  }
                  else if(respuesta.tipo=='Mejicanos') {
                    location='../main_app/Mejicanos/';
                  }
                   else if(respuesta.tipo=='Ciudaddelgado') {
                    location='../main_app/Ciudaddelgado/';
                  }
                   else if(respuesta.tipo=='Sansalvador') {
                    location='../main_app/Sansalvador/';
                  }

                }else {
                  $('.error').slideDown('slow');
                  setTimeout(function(){
                  $('.error').slideUp('slow');
                },3000);
                $('.botonlg').val('Iniciar Sesión');
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });






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


