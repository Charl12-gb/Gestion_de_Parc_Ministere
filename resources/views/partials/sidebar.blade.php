<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (Auth::user() && Auth::user()->role == 'Administrateur')
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clipboard-plus"></i><span>Ajout</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ url('structures') }}">
                            <i class="bi bi-circle"></i>
                            <span>Structures</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ url('assurance') }}">
                            <i class="bi bi-circle"></i>
                            <span>Assurances</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ url('voitures') }}">
                            <i class="bi bi-circle"></i>
                            <span>Voitures</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ url('missions') }}">
                            <i class="bi bi-circle"></i>
                            <span>Missions</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ url('chauffeurs') }}">
                            <i class="bi bi-circle"></i>
                            <span>Chauffeurs</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-wrench"></i><span>R??paration</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                    <a href="{{url('garages')}}">
                      <i class="bi bi-circle"></i><span>Ajouter un garage</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('pieces')}}">
                      <i class="bi bi-circle"></i><span>Ajouter une piece</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('listereparation')}}">
                      <i class="bi bi-circle"></i><span>Liste des reparations</span>
                    </a>
                  </li>
                </ul>
              </li>
        @endif
        @if (!Auth::user())
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('register') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('login') }}">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li>
        @endif
    </ul>
</aside>
