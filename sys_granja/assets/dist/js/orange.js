
$(function(){

});


function loading_dialog(msg){
       $( "#div_loading" ).dialog({
           modal: true,
           autoOpen: true,
           height: 210,
           width: 210,
           dialogClass:'class_dialog',
           closeOnEscape:false,
           resizable: false,
           create: function (event, ui){
               $(this).dialog("widget").find(".ui-dialog-titlebar").hide();
               $("#msg_loading").html(msg);
               $('#div_loading').css('overflow', 'hidden');
           },
       });
   }

   function close_loading_dialog(){
       jQuery("#div_loading").closest('.ui-dialog-content').dialog('destroy');
   }
function setLoadingSelect(divSelect){
   $("#"+divSelect).addClass("loadingSelect");
}

function quitLoadingSelect(divSelect){
   $("#"+divSelect).removeClass("loadingSelect");
}

function format_dollar( vlr, _smbl ){var r = '';if (vlr) {var vlr = typeof(vlr)!="undefined" ? vlr.toString() : '';vlr = vlr.replace(/€/g, '').replace(/$/g, '').replace(' ', '').replace(/,/g, '');var _smbl = _smbl ? _smbl : ( typeof(moneda_default)!='undefined' ? moneda_default : '$' );if (0==vlr.length) {r = _smbl + ' 00.00'; }else{valu = Number(vlr);if (valu) {var p = valu.toFixed(2).split(".");r = _smbl + " " + p[0].split("").reverse().reduce(function(acc, valu, i, orig) {return  valu + (i && !(i % 3) ? "," : "") + acc;}, "") + "." + p[1];}}}return r;}

//function clean_dollar( valor, simb ){var simbolo = typeof(simb)=="undefined" ? (typeof(moneda_default) != "undefined" ? moneda_default : "$") : simb; estevalor = replaceAll(simbolo,'',$.trim( valor ).replace(simbolo,'')); return Number( replaceAll(',','',estevalor) ); }
function clean_dollar(valor){
  let valorR = valor.replace('$','').replace(' ','').replace(',','').replace(',','').replace(',','');
  return valorR;
}

function set_input_date(){
   $(".date").mask("99-99-9999");
}

function fecha_normal(laFecha){
    var fecha = laFecha.split("-");
    var day   = fecha[2];
    var month = fecha[1];
    var year  = fecha[0];
    return day+'-'+month+'-'+year;
}

/*function set_input_money(simbolo){
   var this_moneda_default = typeof( moneda_default )!='undefined' ? moneda_default : '$';
   var simbolo             = simbolo || this_moneda_default;
   $('.money, .money-negative').autoNumeric('destroy');
   $('.money').attr('placeholder',simbolo).attr('data-a-sep',',').attr('data-a-dec','.').attr('data-a-sign', simbolo + ' ').autoNumeric('init', {aSign: simbolo+' '});
   $('.money-negative').attr('placeholder',simbolo).attr('data-a-sep',',').attr('data-a-dec','.').attr('data-a-sign', simbolo+' ').autoNumeric('init',{ aSign: simbolo+' ', vMin: '-999999999.999999',vMax: '999999999.999999'});
   $('.money, .money-negative, .percent, .percent_millar').addClass('der');
}*/

function showMensaje(mensaje,title,tipo){
    var alertas  =  {e:"tMError",w:"tMWarning",s:"tMSuccess"};
    var myButton =  {e:"buttonError",w:"buttonWarning",s:"buttonSuccess"};
    var icon = '<img src="http://localhost/orange/assets/img/'+tipo+'.png">';
    $("#div_mensajes").dialog({
        modal:true,
        width:450,
        resizable:false,
        dialogClass:alertas[tipo],
        buttons:{
            "Cerrar":function(){
                $(this).dialog("close");
            }
        },
        open:function(){
            $(this).closest('.ui-dialog').find('.ui-dialog-titlebar-close').hide();
            $(this).dialog('option', 'title',title);
            $("#sp_el_mensaje").html(mensaje);
            $("#tdIcon").html(icon);
            $(this).closest('.ui-dialog').find('.ui-button').addClass(myButton[tipo]);
            setTimeout(function () {
              $("#div_mensajes").dialog("close");
            }, 6000);
        }
    });
}

function esMayorFecha(dateOne,dateTwo){

    fechaUno      = dateOne.split("-");
    fechaDos      = dateTwo.split("-");

    var fechaUno  = new Date(fechaUno[2],(fechaUno[1]-1),fechaUno[0]);
    var fechaDos  = new Date(fechaDos[2],(fechaDos[1]-1),fechaDos[0]);

    if(fechaUno > fechaDos){
        return true;
    }else{
        return false;
    }
}

