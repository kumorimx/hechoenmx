@include('layout.header', array())

<section>
    <div class="mainwrapper">
        @include('layout.menu', array())

        <div class="mainpanel">

            <div class="pageheader">
                <div class="row">
                    <div class="col-md-6">
                        <div class="media col-md-6">
                            <div class="pageicon pull-left">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""></a></li>
                                    <li>Perfil</li>
                                </ul>
                                <h4>Perfil</h4>
                            </div>
                        </div><!-- media -->
                    </div>
                    <div class="col-md-6">
                        <div class="media col-md-11">
                            @include('layout.menuRapido', array())
                        </div><!-- media -->
                    </div>
                </div>
            </div><!-- pageheader -->

            <div class="contentpanel">

                <div class="row">
                    <div class="col-sm-5 col-md-4">
                        <div class="text-center">
                            <img src="../images/photos/profile-big.jpg" class="img-circle img-offline img-responsive img-profile" alt="" />
                            <h4 class="profile-name mb5">Kumori</h4>
                            <div><i class="fa fa-map-marker"></i> Mazatlán, SIN</div>
                            <div><i class="fa fa-briefcase"></i> Desarrollo de software <a href="">Company, Inc.</a></div>

                            <div class="mb20"></div>

                            <div style="color: gold; font-size: 25px;">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                            </div>
                            <p>(Reputacion 4.5 de 1000 calificaciones)</p>
                        </div><!-- text-center -->

                        <br />

                        <h5 class="md-title">Descripción</h5>
                        <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat... <a href="">Mostrar más</a></p>

                        <h5 class="md-title">Conectar</h5>
                        <ul class="list-unstyled social-list">
                            <li><i class="fa fa-globe"></i> <a href="http://kumori.mx" target="_blank">www.kumori.mx</a></li>
                            <li><i class="fa fa-twitter"></i> <a href="">twitter.com/kumori</a></li>
                            <li><i class="fa fa-facebook"></i> <a href="">facebook.com/kumori</a></li>
                            <li><i class="fa fa-youtube"></i> <a href="">youtube.com/kumori</a></li>
                            <li><i class="fa fa-linkedin"></i> <a href="">linkedin.com/kumori</a></li>
                            <li><i class="fa fa-pinterest"></i> <a href="">pinterest.com/kumori</a></li>
                            <li><i class="fa fa-instagram"></i> <a href="">instagram.com/kumori</a></li>
                        </ul>

                        <div class="mb30"></div>

                        <h5 class="md-title">Direccion</h5>
                        <address>
                            Aguascalientes, 518 1-Altos<br>
                            Mazatlán, SIN 8203<br>
                            <abbr title="Phone">P:</abbr> (669) 176 84 83
                        </address>

                    </div><!-- col-sm-4 col-md-3 -->

                    <div class="col-sm-7 col-md-8">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-line">
                            <li class="active"><a href="#activities" data-toggle="tab"><strong>Informacion General</strong></a></li>
                            <li><a href="#followers" data-toggle="tab" class=""><strong>Informacion Adicional</strong></a></li>
                            <li><a href="#following" data-toggle="tab"><strong>Accesos</strong></a></li>
                            <li><a href="#events" data-toggle="tab"><strong>Validar Cuenta</strong></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content nopadding noborder">
                            <div class="tab-pane active" id="activities">
                                <form role="form">
                                    <div class="form-group">
                                        <label class="control-label" for="email-01">RFC:</label>
                                        <input class="form-control" id="email-01" placeholder="" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="email-01">Razon Social:</label>
                                        <input class="form-control" id="email-01" placeholder="" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="email-01">Regimen Fiscal:</label>
                                        <input class="form-control" id="email-01" placeholder="" type="text">
                                    </div>

                                    <div class="checkbox pull-right">
                                        <label>
                                            <input type="checkbox">
                                            <a href="#">Acepto los términos y condiciones</a>
                                        </label>
                                    </div>
                                    <button class="btn btn-primary pull-right" type="submit" style="clear: both;">Enviar</button>
                                </form>
                            </div><!-- tab-pane -->

                            <div class="tab-pane" id="followers">

                                <div class="follower-list">
                                    <div class="checkbox block"><label><input type="checkbox"> Deseo Importar mis productos y servicios</label></div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Idiomas para tu perfil</label>
                                        <div class="col-md-12">
                                            <select id="select2_sample2" class="form-control select2" multiple>
                                                <option>Español</option>
                                                <option>Ingles</option>
                                                <option>Frances</option>
                                                <option>Portugues</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--follower-list -->
                            </div><!-- tab-pane -->

                            <div class="tab-pane" id="following">

                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="password-03">Contraseña Actual:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="password-03" placeholder="Contraseña" type="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="password-03">Contraseña Nueva:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="password-03" placeholder="Contraseña" type="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="password-03">Repetir Contraseña Nueva:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="password-03" placeholder="Contraseña" type="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Enviarme la contraseña a mi correo electronico (contacto@kumori.mx)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button class="btn btn-primary pull-right" type="submit">Cambiar contraseña</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- tab-pane -->

                            <div class="tab-pane" id="events">
                                <div class="alert alert-info">
                                    El proceso de validación de cuenta, se da por medio de la FIEL.<br />
                                    Logra mayor <strong>confianza</strong> verificando tu cuenta.
                                </div>

                                <div class="alert alert-success">
                                    <strong>¡Felicidades!</strong>
                                    Tu cuenta ya ha sido verificada.
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="file-01">Cargar archivo:</label>
                                    <input id="file-01" type="file">
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="password-01">Contraseña FIEL</label>
                                    <input class="form-control" id="password-01" placeholder="Contraseña" type="password">
                                </div>

                                <button class="btn btn-primary pull-right" type="submit" style="clear: both;">Validar Cuenta</button>

                            </div><!-- tab-pane -->

                        </div><!-- tab-content -->

                    </div><!-- col-sm-9 -->
                </div><!-- row -->

            </div><!-- contentpanel -->

        </div>
    </div><!-- mainwrapper -->
</section>

@include('layout.script', array())