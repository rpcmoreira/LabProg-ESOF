<nav class="navbar fixed-top navbar-expand-md navbar-light navbar-laravel">
<a class="navbar-brand">Empregos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/pesquisa')}}" class="nav-link">Pesquisar</a>
          </li>
        </ul>
        
        <li class="nav-item">
            <a href="{{url('/registar')}}" class="nav-link">Registar</a>
        </li>
        <li class="nav-item">
            <a href="{{url('/login')}}" class="nav-link">Login</a>
        </li>
        
      </div>
    </nav> 