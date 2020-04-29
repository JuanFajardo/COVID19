<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Iniciar Session Sistema Transporte GAMP v.3.0</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}" type="text/css" media="all">
    <!-- onlinefonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Custom-Stylesheet-Links -->
</head>

<body>
    <header>
        <h1 class="title-agile text-center">...</h1>
    </header>
    <!-- //header -->
    <section class="login-wrap" style="margin-top:-50px;">
        <div class="main_w3agile">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Iniciar Session</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab"></label>
            <div class="login-form">
                <!-- signin form -->
                <div class="signin_wthree">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <div class="group">
                            <label for="user" class="label">Usuario</label>
                            <input id="user" type="text" class="input" name="username" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Contraseña</label>
                            <input id="pass" type="password" class="input" data-type="password" name="password" required>
                        </div>
                        <div class="group">
                            .
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Ingresar">
                        </div>
                        <div class="hr"></div>

                    </form>
                </div>
                <!-- //signin form -->
            </div>
        </div>
    </section>
    <!-- //section -->
    <footer>
        <div class="copy-wthree text-center">
            <p>© <?php echo date('Y');?>  GAMP <a href="http://potosi.bo"> web</a>
            </p>
        </div>
    </footer>
</body>
<!-- //Body -->

</html>
