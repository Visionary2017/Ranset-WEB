<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>.: Iniciar Sesion :.</title>
    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled.min.css?ver=4.7.3">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>



<body>

    <!-- Start your project here-->


<!--Navigation & Intro-->
<header>

        <!--Navbar-->
        <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand waves-effect waves-light" href="index.html" target="_blank">Inicio</a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <!--<ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#best-features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#examples-of-use">Examples</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#contact">Contact</a>
                        </li>
                    </ul>-->
                    <!--Navbar icons-->
                    <ul class="nav navbar-nav nav-flex-icons ml-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->

        <!--Mask-->
        <div class="view hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <div class="row" id="home">

                        <!--First column-->
                        <div class="col-lg-6">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Ranse't</h2>
                                <hr class="hr-dark wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                <p class="wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                    Los esposos Castañeda iniciaron confeccionado jeans y ahora venden diversas prendas de vestir en sus cinco locales de Gamarra.
                                </p>
                                <br>
                                <a class="btn btn-outline-white btn-lg wow fadeInLeft waves-effect waves-light" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">Leer mas...</a>
                            </div>
                        </div>
                        <!--/.First column-->

                        <!--Second column-->
                        <div class="col-lg-6 div-login" style="display: block">
                            <!--Form-->
                            <div class="card wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="card-block">
                                    
                                    <!--Form without header-->
                                    <div class="card">
                                        <div class="card-block">

                                            <!--Header-->
                                            <div class="form-header   darken-4" style="background-color: #3F729B">
                                                <h3><i class="fa fa-lock"></i> Login:</h3>
                                            </div>

                                            <!--Body-->
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="text" id="form2" class="form-control validate">
                                                <label for="form2" data-error="error" data-success="correcto">Usuario / Email</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="password" id="form4" class="form-control validate">
                                                <label for="form4" data-error="error" data-success="correcto">Contraseña</label>
                                            </div>

                                            <div class="text-center"> 
                                                <button class="btn btn-ins" onclick="fnInicioSesion();">Ingresar</button>
                                            </div>

                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <div class="options">
                                                <p>No eres un miembro? <a href="javascript:" onclick="fnOnModal(1);">Registrate</a></p>
                                                <p>Haz olvidado <a href="javascript:" onclick="fnOnModal(3);">Contraseña?</a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/Form without header-->


                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->

                        <!--Second column-->
                        <div class="col-lg-6  div-registrate" style="display: none">
                            <!--Form-->
                            <div class="card wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="card-block">
                                    
                                    <!--Form without header-->
                                    <div class="card">
                                        <div class="card-block">

                                            <!--Header-->
                                            <div class="form-header   darken-4" style="background-color: #3F729B">
                                                <h3><i class="fa fa-lock"></i> Registrate:</h3>
                                            </div>

                                            
                                            <!--Body-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="md-form">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="form2" class="form-control validate">
                                                        <label for="form2"  data-error="error" data-success="correcto">Nombres</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="md-form">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="form4" class="form-control validate">
                                                        <label for="form4"  data-error="error" data-success="correcto">Apellidos</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="number" id="form8" class="form-control validate">
                                                        <label for="form8"  data-error="error" data-success="correcto">DNI</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="form6" class="form-control validate">
                                                        <label for="form6"  data-error="error" data-success="correcto">Direccion</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="number" id="form10" class="form-control validate">
                                                        <label for="form10"  data-error="error" data-success="correcto">Telefono</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="md-form">
                                                        <i class="fa fa-envelope prefix"></i>
                                                        <input type="email" id="form12" class="form-control">
                                                        <label for="form12" data-error="error" data-success="correcto">Email</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="form-inline">
                                                            <div class="md-form  form-group">
                                                                <i class="fa fa-user prefix"></i>
                                                            </div>
                                                            <div class="form-inline">
                                                                <fieldset class="form-group">
                                                                    <input name="group1" type="radio" id="radio11">
                                                                    <label for="radio11">Masculino</label>
                                                                </fieldset>

                                                                <fieldset class="form-group">
                                                                    <input name="group1" type="radio" id="radio21">
                                                                    <label for="radio21">Femenino</label>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="form14" class="form-control validate">
                                                        <label for="form14"  data-error="error" data-success="correcto">Usuario</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-lock prefix"></i>
                                                        <input type="password" id="form16" class="form-control validate">
                                                        <label for="form16" data-error="error" data-success="correcto">Contraseña</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button class="btn btn-ins">Registrar</button>
                                            </div>

                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <div class="options">
                                                <p>Ya tienes una cuenta? <a href="javascript:" onclick="fnOnModal(2);">Inicia Sesion</a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/Form without header-->


                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->

                        <!--Second column-->
                        <div class="col-lg-6 div-contrasena" style="display: none">
                            <!--Form-->
                            <div class="card wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="card-block">
                                    
                                    <!--Form without header-->
                                    <div class="card">
                                        <div class="card-block">

                                            <!--Header-->
                                            <div class="form-header   darken-4" style="background-color: #3F729B">
                                                <h3><i class="fa fa-lock"></i> Recuperar Contraseña:</h3>
                                            </div>

                                            <!--Body-->
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="email" id="form2" class="form-control">
                                                <label for="form2" data-error="error" data-success="correcto">Email</label>
                                            </div>

                                            <div class="text-center">
                                                <button class="btn btn-ins">Enviar</button>
                                            </div>

                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <div class="options">
                                                <p>Te acordates de tu contraseña? <a href="javascript:" onclick="fnOnModal(2);">Inicia Sesion</a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/Form without header-->


                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->

                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->

    </header>
<!--/Navigation & Intro-->


    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>
    <script type="text/javascript">
    
    $(document).ready(function(){
            fnOnPrueba();
    });

    function fnOnModal(valor){

        if(valor == 1 ){
            $(".div-registrate").fadeIn(800);
            $(".div-login").css("display","none");
            $(".div-registrate").css("display","block");
        }else if(valor == 2){
            $(".div-login").fadeIn(800);
            $(".div-registrate").css("display","none");
            $(".div-contrasena").css("display","none");
            $(".div-login").css("display","block");
        }else if(valor == 3){
            $(".div-contrasena").fadeIn(800);
            $(".div-login").css("display","none");
            $(".div-contrasena").css("display","block");
        }
        
    }


    function fnInicioSesion(){
        window.location.href = 'views/menu.php';

    }


    function fnOnPrueba () {
            // body...
            if(valor == 1){

                $.ajax({
                    async: true,
                    beforeSend: function (xhr) { /*$('#ranset-load').modal('show');*/ },
                    url: '/getPedidoDia.php', type: 'POST', dataType: 'json',
                    data: { __a: 0, __b: vperiodo },
                    success: function (response) {
                        /*$('#ranset-load').modal('hide');*/
                        /*$('.cls-tabla-canje-g1').replaceWith(response);*/
                        console.log(response);

                    },
                    complete: function () {
                        /*$('#ranset-load').modal('hide');*/
                    },
                    error: function (xhr) {
                        /*$('#ranset-load').modal('hide');*/
                        alert('Algo salió mal, por favor intente de nuevo. uno');
                    }
                });
            }
        }


    </script>
    <div class="hiddendiv common"></div>


    <table>
    <tr>
        <td>Nombres</td>
    </tr>

    <?php 

            foreach ($matrizPersonas as $registro) {
                echo "<tr><td>" . $registro["nombres"] . "</td></tr>";
            }

    ?>


</table>
        


</body>

</html>
