<nav class="navbar fixed-top navbar-expand-md navbar-light navbar-laravel">
<a class="navbar-brand"></a>
      <div>
        <img src="<?php echo e(url('assets/img/ec.png')); ?>" width = 50px  height = 50px style = "padding-left = 15px; padding-right = 20px;">
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/pesquisa')); ?>" class="nav-link">Pesquisar</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/candidatos')); ?>" class="nav-link">Candidatos</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/candidatos/create')); ?>" class="nav-link">Criar</a>
          </li>
        </ul>

        
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="<?php echo e(url('/registar')); ?>" class="nav-link">Registar</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo e(url('/login')); ?>" class="nav-link">Login</a>
        </li>
        </ul>
        
      </div>
    </nav> <?php /**PATH C:\Users\Rui\Desktop\LabProg-ESOF-Ana\resources\views/includes/header.blade.php ENDPATH**/ ?>