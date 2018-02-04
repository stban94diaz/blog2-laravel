<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link
      rel="stylesheet"
      href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link
      rel="stylesheet"
      href="{{ asset('img/icons/styles.css')}}">

    <!--Icono pagina-->
    <link rel="shortcut icon" href="{{ asset('img/logo.png')}}">

  </head>
  <body>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col col-lg-10">
          @include('admin.template.partials.nav')

          <section>
            <div class="card">
              <div class="card-header">
                <h4>@yield('title_body', 'Default')</h4>
              </div>
              <div class="card-body">
                @include('flash::message')
                @yield('content')
              </div>
            </div>
          </section>

          @include('admin.template.partials.footer')
        </div>
      </div>
    </div>

    <script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
  </body>
</html>
