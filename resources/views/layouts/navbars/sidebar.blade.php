<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">

        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h4 class="text-overflow m-0">{{ __('Bem Vindo!') }}</h4>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('Meu Perfil') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Configurações') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                        placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <h6 class="navbar-heading text-muted">Paginas de Acesso</h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fa fa-home" aria-hidden="true"></i> {{ __('Inicio') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contrato') }}">
                        <i class="fa fa-address-card" aria-hidden="true"></i> {{ __('Contrato') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('unidade') }}">
                        <i class="fa fa-heartbeat" aria-hidden="true"></i> {{ __('Unidade') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('atestado') }}">
                        <i class="fa fa-book" aria-hidden="true"></i> {{ __('Atestado') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuario') }}">
                        <i class="fa fa-user-circle" aria-hidden="true"></i></i> {{ __('Usuário') }}
                    </a>
                </li>
                <hr class="my-2">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"> </i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </li>
                <hr class="my-2">
            </ul>
            <!-- Divider -->
            <hr class="my-2">
        </div>
    </div>

</nav>
