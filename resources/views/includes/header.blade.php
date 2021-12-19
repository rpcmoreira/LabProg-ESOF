<nav class="navbar fixed-top navbar-expand-md navbar-light navbar-laravel" style="background-color: #f5f5f5;">
<a class="navbar-brand"><img src="{{URL::asset('/img/EternoCandidato.png')}}" alt="logo" height="50" width="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/candidato/')}}" class="nav-link">Pesquisar</a>
          </li>
          </ul>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{url('/candidato/registar')}}" class="nav-link">Registar</a>
            </li>    
            <li class="nav-item">
                <a href="{{url('/login')}}" class="nav-link">Login</a>
            </li>
           </ul>
      </div>
</nav> 