<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body id='main'>
            <div class="col-12 col-centered">
                @if (Session::has('mensaje'))
                   <div id='mensaje_email' class="alert alert-success">{{ Session::get('mensaje') }}</div>
                @endif
            </div>


    

            <div class="navbar color_negro">
                <div class="navegador_escritorio">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-10 nav_escritorio align-self-center escritorio">
                                <div class="logo_empresa">
                                    <img src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-428.svg" alt="">
                                </div>
                                <div class='item-c-v'>¿QUIÉNES SOMOS?</div>
                                <div class='item-c-v'>SERVICIOS</div>
                                <div class='item-c-v'>GALERÍA</div>
                                <div class='item-c-v'>CONTACTO</div>
                            </div>
                            <div class="col-2 align-self-center ">
                                <div class="row">
                                    <div class='col-6'>
                                        <a href="">
                                            <img src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/svg-pegado-32x32.svg" alt="">
                                        </a>
                                    </div>
                                    <div class='col-6'>
                                        <a href="">
                                            <img src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/svg-pegado-32x322.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="wrap_navegador mobil">
                            <div class='navegador'>
                              <span id='abrir' >&#9776;</span>
                          </div>
                          <div id="mySidenav" class="sidenav">
                            <div class="logo_side">
                                <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-5338x395.svg" alt="">
                            </div>
                            <a href="javascript:void(0)" class="closebtn cerrar">&times;</a>
                            <a href="#">About</a>
                            <a href="#">Services</a>
                            <a href="#">Clients</a>
                            <a href="#">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="wrap_bloque1">
        <div class="bloque_1">
            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-siete/images/grayscale-trainstation-l.jpg" alt="">
            <p class='titulo_centrado'>
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-5 col-md-6 margen_20">
                <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/avs-album-packshot-final.jpg" alt="">
            </div>
            <div class="col-11 col-sm-7 col-md-6 margen_20">
                <div class="row">
                    <div class="col-7 align-self-end">
                        <h3 class='titulo_4'>
                            Lorem ipsum
                            dolor sit amet
                        </h3>
                        <div class="linea_blanca_amarilla alineado_izq">
                            
                        </div>
                    </div>
                    <div class="col-5 align-self-end alineado_der">
                        <img src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/bookmark.png" alt="">
                        
                    </div>
                </div>
                <div class="row">
                    <div class='col-12 margen_20'>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. <br>
 
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. <br>
 
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11">
                <div class="row margen_80">
                    <div class="col-sm-11 col-md-4 margen_30">
                        <div class="titulo_uno">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <h2 class="alineado_cent color_amarillo">
                                        Lorem ipsum dolot sit amet
                                    </h2>
                                    <p>
                                        Lorem ipsum dolot sit amet
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.
                                        
                                    </p>
                                    
                                </div>
                                <div class="col-12 col-sm-6 col-md-12">
                                    <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/1-u192-fr2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-4 margen_30">
                        <div class="titulo_uno">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/mg_0208_0147-u193-fr.jpg" alt="">
                                </div>
                                <div class="col-12 col-sm-6 col-md-12">
                                    <h2 class="alineado_cent color_amarillo">
                                        Lorem ipsum dolot sit amet
                                    </h2>
                                    <p>
                                        Lorem ipsum dolot sit amet
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-4 margen_30">
                        <div class="titulo_uno">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <h2 class="alineado_cent color_amarillo">
                                        Lorem ipsum dolot sit amet
                                    </h2>
                                    <p>
                                        Lorem ipsum dolot sit amet
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.
                                        
                                    </p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12">
                                    <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/drew-3-bw-adam-rozanas-photography-c-u196-fr2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

        </div>
    </div>

    <div class="container margen_50" id='galeria'>
        <div class="row justify-content-center margen_50">
            <div class="col-11 col-sm-4 col-md-3">
                <label for="exampleSelect2">Categoria</label>
                <select class="form-control" id="selectCatego">

                    <option disabled selected value> Selecciona una categoria </option>
                    @foreach($categorias as $categoria)
                    <option value='{{$categoria->id}}'>{{$categoria->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-11 col-sm-4 col-md-3">
                <label for="exampleSelect2">Sub Categoria</label>
                <select disabled class="form-control" id="subcate">
                  <option>Selecciona una subcategoria</option>
              </select>
            </div>
            <div class="col-11 col-sm-4 col-md-3">
                <label for="exampleSelect2">Producto</label>
                <select disabled class="form-control" id="seleProdu">
                    <option disabled selected value> Selecciona un producto </option>
                </select>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 ">
                <div class="row cambio">
                    @foreach($categorias as $categoria)
                    <div class="col seleccion">
                        <div class='al_100 alineado_cent'>
                            <img class="imagenes_galeria" src="{{asset($categoria->imagen)}}" data-idcate="{{$categoria->id}}" class="d-block img-fluid">
                        </div>
                        <div class="alineado_cent">
                            <h3>{{$categoria->nombre}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- carousel  -->   
        </div>
    </div>

    <div class="container-fluid">
        <div id="map">
            
        </div>
    </div>


    <div class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="row">
                        <div class="col alineado_cent">
                            <a href="www.facebook.com/loolollo">
                                <img class='icono_social' src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/facebook-normal.png" alt="">
                                <p class='margen_10'>www.facebook.com/loolollo</p>
                            </a>
                        </div>
                        <div class="col alineado_cent">
                            <a href="www.twitter.com/loololl">
                                <img src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/twitter-normal.png" alt="">
                                <p class='margen_10'>www.twitter.com/loolollo</p>
                            </a>
                        </div>
                        <div class="col alineado_cent">
                            <a href="hola@loolollo.com">
                                <img src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/mail-layer%201.png" alt="">
                                <p class='margen_10'>hola@loolollo.com</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between margen_50">
                <div class="col">
                    <img class='icono_social' src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/pin_direccion.png" alt="">
                    Dirección, Dirección, Dirección, Dirección, Direc.
                </div>
                <div class="col alineado_der">
                    <img class='icono_social' src="http://elebeweb.com/2016/emprendedor/layout-nueve/images/reloj.png" alt="">
                    Horario, Horario,Horario,Horario,Horario,Horario,Hr.
                </div>
                
            </div>
        </div>
        <div class='alineado_cent'>
            All rights reserved © 2017 Elebegraph.com
        </div>
    </div>


        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGV5GxIotfGKptiCdhNCWqVSpI2E9m9dk&callback=initMap">
            </script>
        <script src='{{asset('js/jquery.slides.min.js')}}'></script>
        <script src='{{asset('js/main.js')}}'></script>
    </body>
</html>
