@include('layout.header', array())

<section>
    <div class="mainwrapper">
        @include('layout.menu', array())

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                            <li>Perfil Publico</li>
                        </ul>
                        <h4>Perfil Publico</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="contentpanel">

                <div class="row">
                    <div class="col-sm-6 col-md-5">
                        <div class="text-center">

                            <img src="{{ asset('images/photos/profile-big.jpg') }}" class="img-circle img-offline img-responsive img-profile" alt="" />
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

                    <div class="col-sm-6 col-md-7">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-line">
                            <li class="active"><a href="#activities" data-toggle="tab"><strong>Recomendaciones</strong></a></li>
                            <li><a href="#followers" data-toggle="tab"><strong>Proyectos</strong></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content nopadding noborder">
                            <div class="tab-pane active" id="activities">
                                <div class="activity-list">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="{{ asset('images/photos/user1.png') }}" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Empresa TI Mexicana</strong>.
                                            <small class="text-muted pull-right">Diciembre 25 a las 3:18pm</small>

                                            <div class="media blog-media">
                                                <div class="media-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                                                </div>
                                            </div><!-- media -->
                                        </div>
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="{{ asset('images/photos/user2.png') }}" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Empresa TI Mexicana</strong>
                                            <small class="text-muted pull-right">Diciembre 25 a las 3:18pm</small>

                                            <div class="media blog-media">
                                                <div class="media-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                                                </div>
                                            </div><!-- media -->
                                        </div>
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="{{ asset('images/photos/user3.png') }}" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Empresa TI Mexicana</strong>
                                            <small class="text-muted pull-right">Diciembre 25 a las 3:18pm</small>

                                            <div class="media blog-media">
                                                <div class="media-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                                                </div>
                                            </div><!-- media -->
                                        </div>
                                    </div><!-- media -->
                                </div><!--follower-list -->
                            </div><!-- tab-pane -->

                            <div class="tab-pane" id="followers">

                                <div class="follower-list">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="holder.js/100x100" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <h3 class="follower-name">Ray Sin</h3>
                                            <div><i class="fa fa-map-marker"></i> San Francisco, California, USA</div>
                                            <div><i class="fa fa-briefcase"></i> Software Engineer at <a href="">SomeCompany, Inc.</a></div>

                                            <div class="mb20"></div>

                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-dark btn-xs"><i class="fa fa-envelope-o"></i> Send Message</button>
                                                </div><!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Following</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Followers</button>
                                                </div><!-- btn-group -->

                                            </div><!-- btn-toolbar -->
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="holder.js/100x100" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <h3 class="follower-name">Weno Carasbong</h3>
                                            <div><i class="fa fa-map-marker"></i> Cebu City, Philippines</div>
                                            <div><i class="fa fa-briefcase"></i> Software Engineer at <a href="">ITCompany, Inc.</a></div>

                                            <div class="mb20"></div>

                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-dark btn-xs"><i class="fa fa-envelope-o"></i> Send Message</button>
                                                </div><!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Following</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Followers</button>
                                                </div><!-- btn-group -->
                                            </div><!-- btn-toolbar -->
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="holder.js/100x100" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <h3 class="follower-name">Nusja Nawancali</h3>
                                            <div class="profile-location"><i class="fa fa-map-marker"></i> Madrid, Spain</div>
                                            <div class="profile-position"><i class="fa fa-briefcase"></i> CEO at <a href="">SomeCompany, Inc.</a></div>

                                            <div class="mb20"></div>

                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-dark btn-xs"><i class="fa fa-envelope-o"></i> Send Message</button>
                                                </div><!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Following</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Followers</button>
                                                </div><!-- btn-group -->
                                            </div><!-- btn-toolbar -->
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="holder.js/100x100" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <h3 class="follower-name">Zaham Sindilmaca</h3>
                                            <div><i class="fa fa-map-marker"></i> Bangkok, Thailand</div>
                                            <div><i class="fa fa-briefcase"></i> Java Developer at <a href="">ITCompany, Inc.</a></div>

                                            <div class="mb20"></div>

                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-dark btn-xs"><i class="fa fa-envelope-o"></i> Send Message</button>
                                                </div><!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Following</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Followers</button>
                                                </div><!-- btn-group -->
                                            </div><!-- btn-toolbar -->
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="holder.js/100x100" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <h3 class="follower-name">Christopher Atam</h3>
                                            <div class="profile-location"><i class="fa fa-map-marker"></i> Tokyo, Japan</div>
                                            <div class="profile-position"><i class="fa fa-briefcase"></i> QA Engineer at <a href="">SomeCompany, Inc.</a></div>

                                            <div class="mb20"></div>

                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-dark btn-xs"><i class="fa fa-envelope-o"></i> Send Message</button>
                                                </div><!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Following</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Followers</button>
                                                </div><!-- btn-group -->
                                            </div><!-- btn-toolbar -->
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="holder.js/100x100" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <h3 class="follower-name">Venro Leonga</h3>
                                            <div class="profile-location"><i class="fa fa-map-marker"></i> Paris, France</div>
                                            <div class="profile-position"><i class="fa fa-briefcase"></i> UX Designer at <a href="">ITCompany, Inc.</a></div>

                                            <div class="mb20"></div>

                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-dark btn-xs"><i class="fa fa-envelope-o"></i> Send Message</button>
                                                </div><!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Following</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-check"></i> Followers</button>
                                                </div><!-- btn-group -->
                                            </div><!-- btn-toolbar -->
                                        </div><!-- media-body -->
                                    </div><!-- media -->
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