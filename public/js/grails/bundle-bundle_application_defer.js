var openFormLogin=function(){
		
//	document.getElementById("modalLogin").style.zIndex=($.maxZIndex()+1)
//	document.getElementById("modalLogin").style.display="block"
		$('#modalLogin').modal('show')
//	var $modal = $('#modalLogin');
//	$modal.modal();
}
var closeFormLogin=function(){
	
//	document.getElementById("modalLogin").style.display="none"
		$('#modalLogin').modal('hide')
		
			
}

var tabLimpia=function(form){
	console.log("form",form)
	jQuery(".tab-pane",form).each(function(index,value){
		
        tabId    = value.id,
        $icon    = $('a[href="#' + tabId + '"][data-toggle="tab"]')
                    .parent()
                    .find('i')
                    .removeClass('fa-check fa-times');
		
	})
}

var tabValida=function(data){
	 // data.fv      --> The FormValidation instance
    // data.element --> The field element

    var $tabPane = data.element.parents('.tab-pane'),
        tabId    = $tabPane.attr('id'),
        $icon    = $('a[href="#' + tabId + '"][data-toggle="tab"]')
                    .parent()
                    .find('i')
                    .removeClass('fa-check fa-times');

    // Check if all fields in tab are valid
    var isValidTab = data.fv.isValidContainer($tabPane);
    if (isValidTab !== null) {
        $icon.addClass(isValidTab ? 'fa-check' : 'fa-times');
    }
}


var tabInvalida=function(data){
	// data.element --> The field element

    var $tabPane = data.element.parents('.tab-pane'),
        tabId    = $tabPane.attr('id');

    $('a[href="#' + tabId + '"][data-toggle="tab"]')
        .parent()
        .find('i')
        .removeClass('fa-check')
        .addClass('fa-times');
}

var formatoCadena = function(params) {
		if(!params.cadena){
			alert("necesitas ingresar una cadena")
			return
		}
		if(!params.argumentos){
			alert("necesitas ingresar por lo menos un argumento para la cadena en el formato '{numero}'")
			return
		}
		
		for (var i = 0; i < params.argumentos.length; i++) {
			params.cadena = params.cadena.replace(RegExp("\\{" + (i ) + "\\}", "gm"), params.argumentos[i]);
		}
		
		return params.cadena
	};


/**
 * Validacion y muestreo de los errores  de procesamiento de un formulario
 * @param        string:data      valores en formato JSON o HTML 
 * @param        string:update  	ubicacion donde se realizara la actualizacion
 **/    
       
var formValidation= function(dato){
	console.log("datoFormValidation",dato)
if(dato.data || dato.update){
	var data=dato.data
	var update=dato.update
	var fijo=(dato.fijo)?dato.fijo:false
			if(data.mensajeError){
				muestraMensaje({mensaje:data.mensajeError,tipoMensaje:'info',fijo:fijo})

			}
if(!data.error && !data.warning && !data.info){
//sino hay error lo muestra
jQuery('#'+update).html(data)


}
	
else if(data.warning){
	muestraMensaje({mensaje:data.warning,tipoMensaje:'warning',fijo:fijo})

}
else if(data.info){
	muestraMensaje({mensaje:data.info,tipoMensaje:'info',fijo:fijo})

}

else if(data.error[0].errors){
//error en una sola instancia  

for (var i in data.error[0].errors)
{


muestraMensaje({mensaje:data.error[0].errors[i].message,tipoMensaje:'danger',fijo:fijo})
}


}
else if(data.error.length==1){
	for (var i in data.error)
	{
		muestraMensaje({mensaje:data.error[i].message,tipoMensaje:'danger',fijo:fijo})
	}

}
else if(data.error instanceof Array){
	  //error en multiples Instancias
	  var mensaje="";
	  for (var i in data.error)
	  {
	    for (var e in data.error[i])
	  {
	    mensaje=data.error[i][e];
	    var nuevo = mensaje[0];
	    for(var m in nuevo.errors){
	    	muestraMensaje({mensaje:"<strong>"+e+" : </strong>"+nuevo.errors[m].message,tipoMensaje:'danger',fijo:fijo})

	    }
	    
	  }

	}
	} 
else if(data.error){
	//error simple

	muestraMensaje({mensaje:data.error,tipoMensaje:'danger',fijo:fijo})

	}

}else{
	alert("Te hace falta un parametro puede ser update o data")
}
}


/**
 * @param dato es un objeto que contiene
 * @param mensaje
 * @param icono clase o src 
 * @param tipoMensaje que  contiene info , warning, danger,success  
 * @param titulo titulo del mensaje
 * @param fijo true|false
 * @param ubicacion {from:'top|bottom',align:'right|left|center'}
 * */
var muestraMensaje=function(dato){
	console.log("dato",dato)
	var parametros=new Object()
	parametros.icono=(dato.icono)?dato.icono:''
	parametros.mensaje=(dato.mensaje)?dato.mensaje:'Sin mensaje recibido'
	parametros.tipoMensaje=(dato.tipoMensaje)?dato.tipoMensaje:'info'
	parametros.titulo=(dato.titulo)?dato.titulo:''
	parametros.fijo=(dato.fijo)?0:5000
	if(dato.ubicacion){
			parametros.ubicacion=new Object()
			parametros.ubicacion.from=(dato.ubicacion.from)?dato.ubicacion.from: 'top'
			parametros.ubicacion.align=(dato.ubicacion.align)?dato.ubicacion.align: 'right'
			
	}
	
	$.notify({
		icon: parametros.icono,
		title: parametros.titulo,
		message: parametros.mensaje
	},{
		z_index:$.maxZIndex()+1,
		delay:parametros.fijo,
		placement: dato.ubicacion,
		type: parametros.tipoMensaje
	});
	
}
$.maxZIndex = $.fn.maxZIndex = function(opt) {
	   
    var def = { inc: 10, group: "*" };
    $.extend(def, opt);    
    var zmax = 0;
    $(def.group).each(function() {
        var cur = parseInt($(this).css('z-index'));
        zmax = cur > zmax ? cur : zmax;
    });
    if (!this.jquery)
        return zmax;

    var index= this.each(function() {
        zmax += def.inc;
        $(this).css("z-index", zmax);
    });
    
    return index
}
var activaAjax=function(){
//	 document.getElementById("loading").style.zIndex=($.maxZIndex()+1)
//	 document.getElementById("loading").style.display="block"
//	$('.modal-scrollable').css('display','block');

//	$('#loading').modal('show')
//	 $('#loading').parent().css( "zIndex", ($.maxZIndex()+1) )
//	$('#loading').parent().css( "display", "block" )
	$('#backLoading').css( "zIndex", ($.maxZIndex()+1) )
		$('#backLoading').css( "display", "block" )

	 $('#loading').css( "zIndex", ($.maxZIndex()+1) )
	$('#loading').css( "display", "block" )
	
}
var desactivaAjax=function(){
	document.getElementById("loading").style.display="none"
		$('#backLoading').css( "display", "none" )
//	$('#loading').parent().css( "display", "none" )

//		$('#loading').modal('hide')
//		$('body').removeClass('modal-open');
//		$('.modal-backdrop').remove();
//		$('.modal-scrollable').css('display','none');
//		$('#loading').css( "display", "none" )

}


/**
 * Activa la imagen de carga por cada Peticion Ajax en Automatico
 */       
       jQuery(document).ajaxStart(
         function () {  
        	 
        	
        	 activaAjax()         	
         }
       )
           
       jQuery(document).ajaxStop(
         function () {  
        	 desactivaAjax()   
         }
         )
       
    
    	   
       
       jQuery( document ).ajaxComplete(function( event, xhr, settings ) {
    	  
    	   	   if(xhr.status==200){
   	
    	   		
    	   	   }
    		   if(xhr.status==401){
    			   openFormLogin()  			   
    		   }
    		   if(xhr.status==404){
    			   muestraMensaje({mensaje:"Error procesando su peticion: La aplicacion no encontro la URI dada",tipoMensaje:'warning'})	
    			  		  
    		   }
    		   if(xhr.status==500){
    			   muestraMensaje({mensaje:"La aplicacion causo un error Interno,consultar con el area de Sistemas para revision del error",tipoMensaje:'danger'})	
  			   
    		   }
    		   if(xhr.status==403){
    			   muestraMensaje({mensaje:"La aplicacion a la cual intento accesar esta Prohibida, consultar con el area de Sistemas para acceso",tipoMensaje:'danger'})
    			   
    			   
    		   }
    		  
    	    
    	   
    	 })
var serialize = function(obj, prefix) {
	// http://stackoverflow.com/questions/1714786/querystring-encoding-of-a-javascript-object
	var str = [];
	for(var p in obj) {
		var k = prefix ? prefix + "[" + p + "]" : p, v = obj[p];
		str.push(typeof v == "object" ? serialize(v, k) : encodeURIComponent(k) + "=" + encodeURIComponent(v));
  	}
	return str.join("&");
}

var appMain = angular.module('AppMain', ['checklist-model','jcs-autoValidate','kendo.directives','ngMessages','ui.bootstrap.showErrors','datatables','datatables.bootstrap'])
appMain.filter('boolText',  function() {
    return function(input) {
        return input ? 'Si' : 'No';
    }
});
appMain.run([
      'defaultErrorMessageResolver',
      function (defaultErrorMessageResolver) {
          // passing a culture into getErrorMessages('fr-fr') will get the culture specific messages
          // otherwise the current default culture is returned.
//          defaultErrorMessageResolver.setI18nFileRootPath('${resource(dir:'js/angular-auto-validate-master/dist/lang',file:'jcs-auto-validate_es-co.json')}');
    	  
    	  defaultErrorMessageResolver.setCulture('es-co');
          defaultErrorMessageResolver.getErrorMessages().then(function (errorMessages) {
            errorMessages['myCustomError'] = 'My custom error message';
            errorMessages['anotherErrorMessage'] = 'An error message with the attribute value {0}';
          });
      }
  ]);

appMain.run([
      'bootstrap3ElementModifier',
      function (bootstrap3ElementModifier) {
//            bootstrap3ElementModifier.enableValidationStateIcons(true);
     }]);

//Make sure _ is invoked at runtime. This does nothing but force the "_" to
// be loaded after bootstrap. This is done so the "_" factory has a chance to
// "erase" the global reference to the lodash library.



appMain.run(
    function( _ ) {
        // ...
    }
);

// I provide an injectable (and exteded) version of the underscore / lodash lib.
appMain.factory(
    "_",
    function( $window ) {
        // Get a local handle on the global lodash reference.
        var _ = $window._;
        // OPTIONAL: Sometimes I like to delete the global reference to make sure
        // that no one on the team gets lazy and tried to reference the library
        // without injecting it. It's an easy mistake to make, and one that won't
        // throw an error (since the core library is globally accessible).
        // ALSO: See .run() block above.
        delete( $window._ );

        // Return the [formerly global] reference so that it can be injected
        // into other aspects of the AngularJS application.
        return( _ );
    }
);


appMain.config(['$httpProvider', function($httpProvider) {

 $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
// $httpProvider.defaults.headers.post["Content-Type"]   = "application/x-www-form-urlencoded; charset=UTF-8;"; // si se quiere utilizar para params
// $http.defaults.headers.common["Accept"]="*/*"

$httpProvider.interceptors.push(['$q', function($q) {
  return {
request: function(config) {
		activaAjax()
      if (config.data && typeof config.data === 'object') {

        // Before the request starts, 
        // the interceptor serializes the data object 
        // as a string.

      //  config.data = serialize(config.data); si se quiere utilizar para params
        // Check 
        // https://gist.github.com/brunoscopelliti/7492579 
        // for a possible implementation of serialize.

      }
      return config || $q.when(config);
    },
    response: function(response) {
    	desactivaAjax()
      // response.status === 200
//    	if(response.status===201){
    		if(response.data.success){
    			muestraMensaje({tipoMensaje:'success',mensaje:response.data.success})
    		}
//    	}
      return response || $q.when(response);
    },
    responseError: function(rejection) {
    	desactivaAjax()
      // Executed only when the XHR response 
      // has an error status code

      if (rejection.status === 401) {
    	  
        // The interceptor "blocks" the error;
        // and the success callback will be executed.
    	 openFormLogin()
//        rejection.data = {status: 401, descr: 'unauthorized'}
//        return rejection//.data;
      }
    	if (rejection.status === 403) {
    		muestraMensaje({tipoMensaje:'danger',mensaje:"La accion que usted intenta realizar esta prohibida para su Rol"})
    	}
if (rejection.status === 404) {

        // The interceptor "blocks" the error;
        // and the success callback will be executed.
	if(rejection.data.error || rejection.data.mensajeError){
//		muestraMensaje({tipoMensaje:'danger',mensaje:"Ha ocurrido un error"})
		formValidation({data:rejection.data})
	}
//	if(rejection.data.mensajeError){
//		muestraMensaje({tipoMensaje:'danger',mensaje:"Ha ocurrido un error"})
//		formValidation({data:rejection.data})
//	}
//        rejection.data = {status: 404, descr: 'notFound'}
//        return rejection.data;
      }

      // $q.reject creates a promise that is resolved as
      // rejected with the specified reason.
      // In this case the error callback will be executed.
      return $q.reject(rejection);
    }
  }
}]);
}])

