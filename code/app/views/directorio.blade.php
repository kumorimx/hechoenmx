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
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-users"></i></a></li>
                                    <li>Directorio Empresarial</li>
                                </ul>
                                <h4>Directorio Empresarial</h4>
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
                        <ul class="nav nav-pills nav-stacked nav-contacts">
                            <li class="active">
                                <a href="">
                                    Todas las empresas
                                    <span class="badge pull-right">300+</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Empresas amigas
                                    <span class="badge pull-right">141</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Empresas Aliadas
                                    <span class="badge pull-right">12</span>
                                </a>
                            </li>
                        </ul>

                        <br />

                        <h5 class="md-title">Mis favoritas</h5>
                        <div class="list-group people-group">
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-online" src="../images/photos/user1.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Weno Carasbong</h4>
                                        <small>Ingeniero de Software</small>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="../images/photos/user2.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Renov Leonga</h4>
                                        <small>Ingeniero de Software</small>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="../images/photos/user3.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Zaham Sindilmaca</h4>
                                        <small>Ingeniero de Software</small>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="../images/photos/user4.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Nusja Nawancali</h4>
                                        <small>Ingeniero de Software</small>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->
                        </div><!-- list-group -->

                    </div><!-- col-sm-3 -->
                    <div class="col-sm-9">

                        <div class="well mt10">
                            <div class="row">
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Que es lo que estas buscando?" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <select id="search-type" class="form-control width100p" data-placeholder="Search Type">
                                        <option value="">Selecciona uno</option>
                                        <option value="Full Name" selected>Todo</option>
                                        <option value="Full Name" selected>Nombre</option>
                                        <option value="Position">Position</option>
                                        <option value="Company">Company</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- well -->

                        <br />

                        <div class="pull-right">
                            <ul class="pagination pagination-split pagination-sm pagination-contact">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <h3 class="xlg-title">Todas las empresas</h3>

                        <div class="list-group contact-group">
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-online" src="../images/photos/user1.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Weno Carasbong <small>Ingeniero de Software en Apple, Inc.</small></h4>
                                        <div class="media-content">
                                            <i class="fa fa-map-marker"></i> Parque Industrial Cebu, Ciudad de Cebu, Philippines
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-skype"></i> weno.carasbong</li>
                                                <li><i class="fa fa-mobile"></i> +63 934 345 3433</li>
                                                <li><i class="fa fa-envelope-o"></i> weno.carasbong@email.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->

                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="../images/photos/user2.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Renov Leonga <small>Ingeniero de Software at Sun Microsystems, Inc.</small></h4>
                                        <div class="media-content">
                                            <i class="fa fa-map-marker"></i> Mercado Central, San Francisco CA
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-skype"></i> renov.leonga</li>
                                                <li><i class="fa fa-mobile"></i> +63 934 345 3433</li>
                                                <li><i class="fa fa-envelope-o"></i> renov.leonga@email.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->

                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="../images/photos/user3.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Zaham Sindilmaca <small>Chief Executive at GMA Network, Inc.</small></h4>
                                        <div class="media-content">
                                            <i class="fa fa-map-marker"></i> Metro Manila, Philippines
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-skype"></i> zaham.sindilmaca</li>
                                                <li><i class="fa fa-mobile"></i> +63 934 345 3433</li>
                                                <li><i class="fa fa-envelope-o"></i> zaham.sindilmaca@email.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->

                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-online" src="../images/photos/user4.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Weno Carasbong <small>Ingeniero de Software en Apple, Inc.</small></h4>
                                        <div class="media-content">
                                            <i class="fa fa-map-marker"></i> Parque Industrial Cebu, Ciudad de Cebu, Philippines
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-skype"></i> weno.carasbong</li>
                                                <li><i class="fa fa-mobile"></i> +63 934 345 3433</li>
                                                <li><i class="fa fa-envelope-o"></i> weno.carasbong@email.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->

                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-offline" src="../images/photos/user5.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Renov Leonga <small>Ingeniero de Software at Sun Microsystems, Inc.</small></h4>
                                        <div class="media-content">
                                            <i class="fa fa-map-marker"></i> Mercado Central, San Francisco CA
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-skype"></i> renov.leonga</li>
                                                <li><i class="fa fa-mobile"></i> +63 934 345 3433</li>
                                                <li><i class="fa fa-envelope-o"></i> renov.leonga@email.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->

                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-circle img-online" src="../images/photos/user1.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Zaham Sindilmaca <small>Chief Executive at GMA Network, Inc.</small></h4>
                                        <div class="media-content">
                                            <i class="fa fa-map-marker"></i> Metro Manila, Philippines
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-skype"></i> zaham.sindilmaca</li>
                                                <li><i class="fa fa-mobile"></i> +63 934 345 3433</li>
                                                <li><i class="fa fa-envelope-o"></i> zaham.sindilmaca@email.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- media -->
                            </a><!-- list-group -->

                        </div><!-- list-group -->




                    </div><!-- col-sm-9 -->
                </div><!-- row -->

            </div><!-- contentpanel -->

        </div>
    </div><!-- mainwrapper -->
</section>

@include('layout.script', array())