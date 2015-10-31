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
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""></a></li>
                                    <li>Mensajes</li>
                                </ul>
                                <h4>Mensajes</h4>
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
                    <div class="col-sm-3">

                        <h5 class="md-title">Contactos</h5>
                        <div class="well">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" placeholder="A quien estas buscando?" class="form-control">
                                </div>
                            </div>
                        </div><!-- well -->


                        <br />

                        <div class="list-group people-group">
                            <a href="#" class="list-group-item active">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-online" src="images/photos/user1.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Weno Carasbong</h4>
                                        <small>Desarrollo de Sistemas</small>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="images/photos/user2.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Renov Leonga</h4>
                                        <small>Facturación Electronica</small>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="images/photos/user3.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Zaham Sindilmaca</h4>
                                        <small>Desarrollo Movil</small>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="images/photos/user4.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Nusja Nawancali</h4>
                                        <small>Redes y Servidores</small>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->
                        </div><!-- list-group -->

                    </div><!-- col-sm-3 -->
                    <div class="col-sm-9">
                        <div class="media" style="margin-bottom: 30px;">
                            <a class="pull-left" href="#">
                                <img class="media-object img-circle" src="images/photos/profile.png" alt="" />
                            </a>
                            <div class="media-body">
                                <strong>Kumori</strong> <small class="text-muted pull-right">6 dias antes, a las 6:18am</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                            </div>
                        </div><!-- media -->

                        <div class="media" style="margin-bottom: 30px;">
                            <a class="pull-left" href="#">
                                <img class="media-object img-circle" src="images/photos/user1.png" alt="" style="width: 60px;"/>
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong> <small class="text-muted pull-right">6 dias antes, a las 6:18am</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                            </div>
                        </div><!-- media -->

                        <div class="media" style="margin-bottom: 30px;">
                            <a class="pull-left" href="#">
                                <img class="media-object img-circle" src="images/photos/profile.png" alt="" />
                            </a>
                            <div class="media-body">
                                <strong>Kumori</strong> <small class="text-muted pull-right">6 dias antes, a las 6:18am</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                            </div>
                        </div><!-- media -->

                        <textarea class="form-control" rows="5" style="background-image: none; background-position: 0% 0%; background-repeat: repeat; margin-top: 200px;">Escribe un comentario...</textarea>

                    </div><!-- col-sm-9 -->
                </div><!-- row -->

            </div><!-- contentpanel -->

        </div>
    </div><!-- mainwrapper -->
</section>

@include('layout.script', array())