<!-- Image and text -->
{{--<style>--}}
{{--    #navbar {--}}
{{--        background-color: #002133 !important;--}}
{{--    }--}}

{{--    .navbar-brand,--}}
{{--    .navbar-login-logout {--}}
{{--        color: azure !important;--}}
{{--    }--}}
{{--</style>--}}
<nav class="navbar navbar-light bg-light" id="navbar">
  <a class="navbar-brand" href="#">
{{--    <img src="" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">--}}
      {{env('APP_NAME')}}
  </a>

    <a class="navbar-login-logout" href="#">Entrar</a>
</nav>
