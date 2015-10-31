<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mexico en TI</title>

    <link href="{{ asset('css/style.default.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="signin">


<section>

    <div class="panel panel-signup">
        <div class="panel-body">
            <div class="logo text-center hide">
                <img src="images/logo-primary.png" alt="Chain Logo" >
            </div>
            <div class="text-center">
                <img src="images/photos/profile-big.jpg" class="img-circle img-offline img-responsive img-profile" alt="">
                <h4 class="profile-name mb5">Kumori</h4>
                <div><i class="fa fa-map-marker"></i> San Francisco, California, USA</div>
                <div><i class="fa fa-briefcase"></i> Software Engineer at <a href="">Company, Inc.</a></div>
            </div>

            <br />
            <h4 class="text-center mb5">Recomendacion para Kumori</h4>
            <p class="text-center">Por favor llena los siguientes campos</p>

            <div class="mb30"></div>

            <form action="signin.html" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Nombre del Contacto">
                        </div><!-- input-group -->
                    </div>
                </div><!-- row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Razon Social">
                        </div><!-- input-group -->
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Telefono">
                        </div><!-- input-group -->
                    </div>
                </div><!-- row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Correo Electronico">
                        </div><!-- input-group -->
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <input type="password" class="form-control" placeholder="Sitio Web">
                        </div><!-- input-group -->
                    </div>
                </div><!-- row -->
                <hr />

                <h4 class="text-center mb5">Subir XML de la Factura</h4>
                <p class="text-center">*No guardaremos ninguna informacion privada de tu Factura</p>
                <div class="row">
                    <div class="col-md-12">
                        <a href="signin.html" class="btn btn-primary btn-block"><i class="fa fa-cloud-upload"></i> Cargar Factura</a>
                    </div>
                </div>

                <br />

                <div class="row">
                    <div class="col-sm-9">
                        <div class="input-group mb15">
                            Servicio al cliente
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            Calidad del producto final
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            Atención post venta
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            Precio
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            Fechas de entrega
                        </div><!-- input-group -->
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb15">
                            Estrellitas
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            Estrellitas
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            Estrellitas
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            Estrellitas
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            Estrellitas
                        </div><!-- input-group -->
                    </div>
                </div><!-- row -->

                <br />
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="ckbox ckbox-primary mt5">
                            <input type="checkbox" id="agree" value="1">
                            <label for="agree">Estoy de acuerdo con los <a href="">Terminos y condiciones</a></label>
                        </div>
                    </div>
                </div>
            </form>

        </div><!-- panel-body -->
        <div class="panel-footer">
            <a href="signin.html" class="btn btn-success btn-block">Enviar Recomendación</a>
        </div><!-- panel-footer -->
    </div><!-- panel -->

</section>

<div class="mb30"></div>
<div class="mb30"></div>

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/modernizr.min.js') }}"></script>
<script src="{{ asset('js/pace.min.js') }}"></script>
<script src="{{ asset('js/retina.min.js') }}"></script>
<script src="{{ asset('js/jquery.cookies.js') }}"></script>


<script src="{{ asset('js/jquery.tagsinput.min.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/holder.js') }}"></script>

<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
