<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema v.3.0 GAMP <?php  echo date('Y');?></title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('images/logo.ico')}}">
    <!-- Text spinners style -->
    <link href="{{asset('css/plugins/textSpinners/spinners.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-treeview.min.css')}}" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

<!---------------------------------------------------------------------------------------------------------------->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{asset('images/user.png')}}" width="48"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{Auth::user()->username}}</span>
                        </a>

                    </div>
                    <div class="logo-element">
                        v3.0
                    </div>
                </li>
                <li>
                    <a href="{{asset('index.php/home')}}"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                </li>
                <li @yield("menu1")>
                <li  @yield("institucion")>
                    <a href="{{asset('/index.php/Institucion')}}"><i class="fa fa-bank"></i> <span class="nav-label">Instituciones</span></a>
                </li>

                <li @yield("menu2")>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Casos COVID</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                      <li @yield("submenu21")>
                          <a href="{{asset('/index.php/Enfermedad')}}">Enfermedad</a>
                      </li>
                      <li @yield("submenu22")>
                          <a href="{{asset('/index.php/Estado')}}">Estado</a>
                      </li>
                      <li @yield("submenu23")>
                          <a href="{{asset('/index.php/Paciente')}}">Paciente</a>
                      </li>
	              <li @yield("laboratorio")>
        	          <a href="{{asset('/index.php/Prueba')}}">Pruebas de Laboratorio</span></a>
                      </li>
                      <li @yield("submenu24")>
                          <a href="{{asset('/index.php/Laboratorio')}}">Datos Clinicos Paciente</a>
                      </li>
                      <li @yield("submenu25")>
                          <a href="{{asset('/index.php/monitoreoexteriorlist')}}">Ingreso personas exterior</a>
                      </li>
                      <li @yield("submenu26")>
                          <a href="{{asset('/index.php/consentimientolist')}}">Consentimiento cuarentena</a>
                      </li>
                      <li @yield("submenu27")>
                          <a href="{{asset('/index.php/tarjetamonitoreo')}}">Tarjeta monitoreo individual</a>
                      </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
<!---------------------------------------------------------------------------------------------------------------->



        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-arrow-circle-o-left"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"><i class="fa fa-cogs"></i> Sistema Covid-19</span>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#"><i class="fa fa-angle-double-down"></i></a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Datos
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> Cambiar Contraseña
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                          <a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Salir</a>
                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                          </form>
                        </li>
                    </ul>
                </li>

            </ul>

        </nav>
        </div>

      @yield("ruta")
      <!----------------------------------------------------------------------------->
      @yield('contenido')
      <!----------------------------------------------------------------------------->
        <div class="footer">
            <div class="float-right">
              ...
            </div>
            <div>
                <strong>Developed</strong> on G.A.M.P. &copy; <?php echo date('Y');?>
            </div>
        </div>

        </div>
        </div>

@yield('modal')

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

    <!-- Password meter -->
    <script src="{{asset('js/plugins/pwstrength/pwstrength-bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/pwstrength/zxcvbn.js')}}"></script>

    <script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/plugins/fullcalendar/moment.min.js')}}"></script>
    <script src="{{asset('js/plugins/fullcalendar/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('js/plugins/fullcalendar/bootstrap-treeview.min.js')}}"></script>
    <!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
    <script>
      /*tinymce.init({
        selector: '#mytextarea'
      });*/
    </script>

@yield('js')

</body>

</html>
