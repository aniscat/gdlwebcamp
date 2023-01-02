(function () {
  'use strict';

  var regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', function () {

    //Para colocar el mapa de evento
    if (document.getElementById('mapa')) {
      var map = L.map('mapa').setView([20.67503, -103.34892], 16);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([20.67503, -103.34892]).addTo(map)
        .bindPopup('GDLWEBCAMP 2018<br> Boletos ya disponibles.')
        .openPopup()
      //  .bindTooltip('Un tooltip')
      //  .openTooltip();

    }

    //CAmpos datos usuario

    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    //Campos pases

    var pase_dia = document.getElementById('pase_dia');
    var pase_dosDia = document.getElementById('pase_dosdias');
    var pase_Completo = document.getElementById('pase_completo');

    //Botones y divs

    var viernes = document.getElementById('viernes');
    var sabado = document.getElementById('sabado');
    var domingo = document.getElementById('domingo');

    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var btnRegistro = document.getElementById('btnRegistro');
    var listaProductos = document.getElementById('lista_productos');
    var sumaTotal = document.getElementById('suma_total');

    //Extras
    var etiquetas = document.getElementById('etiqueta_evento');
    var camisas = document.getElementById('camisa_evento');
    if (document.getElementById('calcular')) {

      calcular.addEventListener('click', calcularMontos, false);

      pase_dia.addEventListener('blur', mostrar);
      pase_dosDia.addEventListener('blur', mostrar);
      pase_Completo.addEventListener('blur', mostrar);

      nombre.addEventListener('blur', validacion)
      apellido.addEventListener('blur', validacion);
      email.addEventListener('blur', validacion);
      email.addEventListener('blur', validarEmail);

      function calcularMontos(event) {
        event.preventDefault();
        if (regalo.value === '') {
          alert("Debes elegir un regalo");
          regalo.focus();
        } else {
          var pase_Dia = pase_dia.value;
          var pase_dosDias = pase_dosDia.value;
          var pase_completo = pase_Completo.value;
          var cantidadCamisas = camisas.value;
          var cantidadEtiquetas = etiquetas.value;

          var total = (pase_Dia * 30) + (pase_dosDias * 45) + (pase_completo * 50) + ((cantidadCamisas * 10) * .93) + (cantidadEtiquetas * 2);

          var listadoProductos = new Array();
          if (pase_Dia >= 1) {
            listadoProductos.push(pase_Dia + ' Pases por día');
          }
          if (pase_dosDias >= 1) {
            listadoProductos.push(pase_dosDias + ' Pases por dos días');
          }
          if (pase_completo >= 1) {
            listadoProductos.push(pase_completo + ' Pases completos');
          }
          if (cantidadCamisas >= 1) {
            listadoProductos.push(cantidadCamisas + ' Camisas');
          }
          if (cantidadEtiquetas >= 1) {
            listadoProductos.push(cantidadEtiquetas + ' Etiquetas');
          }

          listaProductos.style.display = 'block';
          listaProductos.innerHTML = '';
          for (let i = 0; i < listadoProductos.length; i++) {
            listaProductos.innerHTML += listadoProductos[i] + '<br>';
          }
          // console.log(listadoProductos);

          sumaTotal.innerHTML = '$' + total.toFixed(2);
          // console.log("$"+total);
        }

      }

      function mostrar() {
        var pase_Dia = pase_dia.value;
        var pase_dosDias = pase_dosDia.value;
        var pase_completo = pase_Completo.value;
        if (pase_Dia >= 1) {
          viernes.style.display = 'block';
        }
        if (pase_dosDias >= 1) {
          viernes.style.display = 'block';
          sabado.style.display = 'block';
        }
        if (pase_completo >= 1) {
          viernes.style.display = 'block';
          sabado.style.display = 'block';
          domingo.style.display = 'block';
        }

      }
      // function mostrarDatos(){
      //     var pase_Dia = pase_dia.value;
      //     var pase_dosDias = pase_dosDia.value;
      //     var pase_completo = pase_Completo.value;

      //     var diasElegidos = [];
      //     if(pase_Dia >=1){
      //         diasElegidos.push('viernes');
      //     }
      //     if(pase_dosDias >=1){
      //         diasElegidos.push('viernes', 'sabado');
      //     }
      //     if(pase_completo >=1){
      //         diasElegidos.push('viernes', 'sabado','domingo');
      //     }
      //     for(let i = 0; i<diasElegidos.length; i++){
      //         document.getElementById(diasElegidos[i]).style.display = 'block' ;
      //     }

      // }
      function validacion() {
        if (this.value == '') {
          errorDiv.style.display = 'block';
          errorDiv.innerHTML = "Este campo es obligatorio";
          this.style.border = '1px solid red';
          errorDiv.style.border = '1px solid red';
        } else {
          errorDiv.style.display = 'none';
          this.style.border = '1px solid #cccccc';
        }

      }

      function validarEmail() {
        if (this.value.indexOf("@") > -1) {
          errorDiv.style.display = 'none';
          this.style.border = '1px solid #cccccc';
        } else {
          errorDiv.style.display = 'block';
          errorDiv.innerHTML = "Introduce un email válido";
          this.style.border = '1px solid red';
          errorDiv.style.border = '1px solid red';
        }
      }
    }




  }) //DOM CONTENT LOADED

})();




$(function () {

  //Sticky nav
  var windowHeight = $(window).height();
  var barraAltura = $('.barra').innerHeight();

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > windowHeight) {
      $('.barra').addClass('fixed');
      $('body').css({
        'margin-top': barraAltura + 'px'
      })
    } else {
      $('.barra').removeClass('fixed');
      $('body').css({
        'margin-top': '0px'
      })
    }
  })

  //Menú responsivo

  $('.menu-movil').on('click', function () {
    $('.navegacion-principal').slideToggle();
  })


  //Programa de conferencias
  $('div.ocultar:first').show();
  $('.menu-programa a:first').addClass('activo');

  $('nav.menu-programa a').on('click', function () {
    $('nav.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);

    return false;
  })

  //Lettering 
  $('.nombre-sitio').lettering();

  //Animaciones para los números
  var resumenLista = jQuery('.resumen-evento');
  if (resumenLista.length > 0) {
    $('.resumen-evento').waypoint(function () {
      $('.resumen-evento li:nth-child(1) p').animateNumber({
        number: 6
      }, 1200);
      $('.resumen-evento li:nth-child(2) p').animateNumber({
        number: 15
      }, 1200);
      $('.resumen-evento li:nth-child(3) p').animateNumber({
        number: 3
      }, 1200);
      $('.resumen-evento li:nth-child(4) p').animateNumber({
        number: 9
      }, 1200);
    },{
        offset:'60%'

    });
  }




  //Cuenta regresiva

  $('.cuenta-regresiva').countdown('2022/12/10 09:00:00', function (event) {
    $('#dias').text(event.strftime('%D'))
    $('#horas').text(event.strftime('%H'))
    $('#minutos').text(event.strftime('%M'))
    $('#segundos').text(event.strftime('%S'))

  })

  //colorbox

  $('.invitado-info').colorbox({inline:true, width:"50%" })






});
