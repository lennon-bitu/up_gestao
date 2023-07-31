
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top " style='height:100px;'>
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('site.index') }}">
        <img
          src="{{ asset('img/logo.png') }}"
          height="25"
          alt="Up Gestao Logo"
          loading="lazy"
        />
      </a>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse bg-white" id="navbarSupportedContent">
      
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('site.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('site.sobrenos') }}">Sobre-nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('site.contato') }}">Contato</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="link-secondary me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->

      <!-- Avatar -->
          <a href="{{ route('login') }}"><span class='btn btn-primary'>Login</span></a>

        
      
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->














