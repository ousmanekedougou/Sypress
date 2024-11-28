<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('utilisateur.index') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Sypress</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a class="{{ set_active_roote('utilisateur.index') }}" href="{{ route('utilisateur.index') }}">Acceuil</a></li>
          <li><a class="{{ set_active_roote('utilisateur.about') }}" href="{{ route('utilisateur.about') }}">A Propos</a></li>
          <li><a class="{{ set_active_roote('utilisateur.security') }}" href="{{ route('utilisateur.security') }}">Sécurité</a></li>
          <li><a class="{{ set_active_roote('utilisateur.environnement') }}" href="{{ route('utilisateur.environnement') }}">Environnement</a></li>
          <li><a class="{{ set_active_roote('utilisateur.transport') }}" href="{{ route('utilisateur.transport') }}">Transport</a></li>
          <li><a class="{{ set_active_roote('utilisateur.negoce') }}" href="{{ route('utilisateur.negoce') }}">Négoce</a></li>
          <li><a class=" {{ set_active_roote('utilisateur.contact.index') }}" href="{{ route('utilisateur.contact.index') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>