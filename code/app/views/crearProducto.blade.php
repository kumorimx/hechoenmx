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
                                <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-suitcase"></i></a></li>
                                    <li><a href="">Vitrina de Productos</a></li>
                                    <li>Crear Producto</li>
                                </ul>
                                <h4>Crear Producto</h4>
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
                    <div class="col-sm-12 col-md-12">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-line">
                            <li class="active"><a href="#activities" data-toggle="tab"><strong>Nuevo Producto</strong></a></li>
                            <li><a href="#followers" data-toggle="tab"><strong>Tus Producto</strong></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content nopadding noborder">
                            <div class="tab-pane active" id="activities">
                                <form role="form">
                                    <div class="form-group">
                                        <label class="control-label" for="email-01">Nombre del Producto:</label>
                                        <input class="form-control" id="email-01" placeholder="" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="email-01">Descripcion del Producto:</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group datepicker-group">
                                                <label class="control-label" for="calendar">Costo del Producto:</label>
                                                <input class="form-control" id="email-01" placeholder="" type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group datepicker-group">
                                                <label class="control-label" for="calendar">Unidad del Producto:</label>
                                                <select id="search-type" class="form-control width100p" data-placeholder="Search Type">
                                                    <option value="">Selecciona uno</option>
                                                    <option value="Full Name" selected>Unidad</option>
                                                    <option value="Full Name">Hora</option>
                                                    <option value="Full Name">Sesion</option>
                                                    <option value="Full Name">Proyecto</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="calendar">Categoria del Producto:</label>
                                        <select id="search-type" class="form-control width100p" data-placeholder="Search Type">
                                            <option value="">Selecciona uno</option>
                                            <option value="Full Name" selected>Desarrollo Software</option>
                                            <option value="Full Name">Consultoria</option>
                                            <option value="Full Name">Capacitación</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="calendar">Etiquetas del Producto:</label>
                                        <input name="tags" id="tags" class="form-control" value="iOS, android,windows phone" />
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="email-01">URL de la pagina Oficial:</label>
                                        <input class="form-control" id="email-01" placeholder="" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="file-01">Imagen del Producto:</label>
                                        <input id="file-01" type="file">
                                    </div>
                                    <div class="checkbox pull-right">
                                        <label>
                                            <input type="checkbox">
                                            <a href="#">Acepto los términos y condiciones</a>
                                        </label>
                                    </div>
                                    <div class="mb30"></div>
                                    <button class="btn btn-primary pull-right" type="submit" style="clear: both;">Crear Evento</button>
                                </form>
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

                                <div class="activity-list">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user2.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Chris Anthemum</strong> liked a photos<br />
                                            <small class="text-muted">Today at 12:30pm</small>

                                            <ul class="uploadphoto-list">
                                                <li><a href="images/photos/media5.png" data-rel="prettyPhoto"><img src="images/photos/media5.png" class="thumbnail img-responsive" alt="" /></a></li>
                                                <li><a href="images/photos/media4.png" data-rel="prettyPhoto"><img src="images/photos/media4.png" class="thumbnail img-responsive" alt="" /></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user1.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Ray Sin</strong> is now following to <strong>Chris Anthemum</strong>. <br />
                                            <small class="text-muted">Yesterday at 1:30pm</small>
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user4.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Frank Furter</strong> is now following to <strong>Ray Sin</strong>. <br />
                                            <small class="text-muted">3 days ago at 1:30pm</small>
                                        </div>
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user2.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Chris Anthemum</strong> liked a photos<br />
                                            <small class="text-muted">5 days ago at 12:30pm</small>

                                            <ul class="uploadphoto-list">
                                                <li><a href="images/photos/media6.png" data-rel="prettyPhoto"><img src="images/photos/media6.png" class="thumbnail img-responsive" alt="" /></a></li>
                                                <li><a href="images/photos/media7.png" data-rel="prettyPhoto"><img src="images/photos/media7.png" class="thumbnail img-responsive" alt="" /></a></li>
                                                <li><a href="images/photos/media2.png" data-rel="prettyPhoto"><img src="images/photos/media2.png" class="thumbnail img-responsive" alt="" /></a></li>
                                            </ul>
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user1.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Nusja Nawancali</strong> is now following to <strong>Zaham Sindilmaca</strong>. <br />
                                            <small class="text-muted">December 25 at 1:30pm</small>
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user4.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Frank Furter</strong> is now following to <strong>Zaham Sindilmaca</strong>. <br />
                                            <small class="text-muted">December 24 at 1:30pm</small>
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user3.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Nusja NawanCali</strong> posted a new blog. <br />
                                            <small class="text-muted">December 23 at 3:18pm</small>

                                            <div class="media blog-media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="images/photos/media3.png" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-title"><a href="">Ut Enim Ad Minim Veniam</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="">Read more</a></p>
                                                </div><!-- media-body -->
                                            </div><!-- media -->
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user4.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Mark Zonsion</strong> is now following to <strong>Weno Carasbong</strong>. <br />
                                            <small class="text-muted">December 23 at 1:30pm</small>
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="images/photos/user4.png" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <strong>Frank Furter</strong> is now following to <strong>Weno Carasbong</strong>. <br />
                                            <small class="text-muted">December 20 at 4:30pm</small>
                                        </div><!-- media-body -->
                                    </div><!-- media -->

                                </div><!-- activity-list -->
                                <button class="btn btn-white btn-block">Show More</button>
                            </div><!-- tab-pane -->

                            <div class="tab-pane" id="events">
                                <div class="events">
                                    <h5 class="lg-title mb20">Upcoming Events</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="holder.js/100x120" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="event-title"><a href="">Free Living Trust Seminar</a></h4>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i> Silicon Valley, San Francisco, CA</small>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Sunday, January 15, 2014 at 11:00am</small>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                                </div>
                                            </div><!-- media -->
                                        </div><!-- col-sm-6 -->

                                        <div class="col-sm-6">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="holder.js/100x120" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="event-title"><a href="">Serious Games Seminar</a></h4>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i> New York City</small>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Monday, January 14, 2014 at 8:00am</small>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                                </div>
                                            </div><!-- media -->
                                        </div><!-- col-sm-6 -->

                                        <div class="col-sm-6">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="holder.js/100x120" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="event-title"><a href="">Travel &amp; Adventure Show</a></h4>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i> Los Angeles, CA</small>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Friday, January 12, 2014 at 8:00am</small>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                                </div>
                                            </div><!-- media -->
                                        </div><!-- col-sm-6 -->

                                        <div class="col-sm-6">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="holder.js/100x120" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="event-title"><a href="">Mobile Games Summit</a></h4>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i> Bay Area, San Francisco</small>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Saturday, January 10, 2014 at 8:00am</small>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                                </div>
                                            </div><!-- media -->
                                        </div><!-- col-sm-6 -->
                                    </div><!-- row -->

                                    <br />

                                    <h5 class="lg-title mb20">Past Events</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="holder.js/100x120" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="event-title"><a href="">Free Living Trust Seminar</a></h4>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i> Silicon Valley, San Francisco, CA</small>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Sunday, January 15, 2014 at 11:00am</small>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                                </div>
                                            </div><!-- media -->
                                        </div><!-- col-sm-6 -->

                                        <div class="col-sm-6">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="holder.js/100x120" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="event-title"><a href="">Serious Games Seminar</a></h4>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i> New York City</small>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Monday, January 14, 2014 at 8:00am</small>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                                </div>
                                            </div><!-- media -->
                                        </div><!-- col-sm-6 -->

                                        <div class="col-sm-6">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="holder.js/100x120" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="event-title"><a href="">Travel &amp; Adventure Show</a></h4>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i> Los Angeles, CA</small>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Friday, January 12, 2014 at 8:00am</small>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                                </div>
                                            </div><!-- media -->
                                        </div><!-- col-sm-6 -->

                                        <div class="col-sm-6">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="holder.js/100x120" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="event-title"><a href="">Mobile Games Summit</a></h4>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i> Bay Area, San Francisco</small>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Saturday, January 10, 2014 at 8:00am</small>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                                </div>
                                            </div><!-- media -->
                                        </div><!-- col-sm-6 -->
                                    </div><!-- row -->
                                </div><!-- events -->
                            </div><!-- tab-pane -->

                        </div><!-- tab-content -->

                    </div><!-- col-sm-9 -->
                </div><!-- row -->

            </div><!-- contentpanel -->

        </div>
    </div><!-- mainwrapper -->
</section>

@include('layout.script', array())