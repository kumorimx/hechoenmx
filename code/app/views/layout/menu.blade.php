<div class="leftpanel">
    <div class="media profile-left">
        <a class="pull-left profile-thumb" href="profile.html">
            <img class="img-circle" src="{{ asset('images/photos/profile.jpg') }}" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Kumori</h4>
            <small class="text-muted">Desarrollo de Software</small>
        </div>
    </div><!-- media -->

    <h5 class="leftpanel-title">Navegación</h5>
    <ul class="nav nav-pills nav-stacked">
        <li class=""><a href="{{ route('Index') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="hide"><a href="{{ route('Mensajes') }}"><span class="pull-right badge">5</span><i class="fa fa-envelope-o"></i> <span>Mensajes</span></a></li>
        <li><a href="{{ route('Directorio') }}"><i class="fa fa-users"></i> <span>Directorio</span></a></li>
        <li class="hide"><a href="{{ route('Index') }}"><i class="fa fa-calendar"></i> <span>Eventos</span></a></li>
        <li class="hide"><a href="{{ route('Convocatoria') }}"><span class="pull-right badge">5</span><i class="fa fa-bullhorn"></i> <span>Convocatorias</span></a></li>
        <li><a href="{{ route('vitrinaProductos') }}"><i class="fa fa-suitcase"></i> <span>Vitrina de Productos</span></a></li>
    </ul>
    <h5 class="leftpanel-title">Tus acciones</h5>
    <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ route('crearEvento') }}"><i class="fa fa-calendar"></i> <span>Crear Evento</span></a></li>
        <li><a href="{{ route('crearConvocatoria') }}"><i class="fa fa-bullhorn"></i> <span>Crear Convocatoria</span></a></li>
        <li><a href="{{ route('crearProducto') }}"><i class="fa fa-suitcase"></i> <span>Tus Productos</span></a></li>
        <li><a href="{{ route('Perfil') }}"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
        <li><a href="{{ route('Perfil') }}"><i class="fa fa-sign-out"></i> <span>Desconectarse</span></a></li>
    </ul>
</div><!-- leftpanel -->
