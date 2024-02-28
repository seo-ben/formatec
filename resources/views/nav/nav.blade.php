<div id="app" >
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mt-3  p-md-2">
        <div class="container">
            <a class="navbar-brand lien" href="{{ url('/') }}">
                <img src="{{ asset('assets/librairie/image/formatac.jfif') }}" class=" h-100" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarSupportedContent" aria-labelledby="navbarSupportedContentLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="navbarSupportedContentLabel">
                        <a class="navbar-brand lien" href="{{ url('/') }}">
                         <img src="{{ asset('assets/librairie/image/formatac.jfif') }}" class=" h-100" alt="Logo" height="30">
                        </a>
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link lien" href="{{ route('home') }}"><i class="fas fa-home "></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien" href="{{ route('events') }}"><i class="fas fa-calendar-alt"></i> Événements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien" href="{{ route('cultural-week') }}"><i class="fas fa-theater-masks"></i> Semaine Culturelle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien" href="{{ route('contact') }}"><i class="fas fa-phone-alt"></i> Contact</a>
                        </li>
                   
                        @auth
                        @if(auth()->user()->role == 'admin')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle lien" href="" id="adminDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-cog"></i> Administration
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="adminDropdown" style="background-color: #1aabe9; /* bleu */ ">
                                <li><a class="dropdown-item lien" href="{{ route('vote.miss') }}"><i class="fas fa-crown"></i> Miss</a></li>
                                <li><a class="dropdown-item lien" href="{{ route('vote.misters') }}"><i class="fas fa-user-tie"></i> Mister</a></li>
                                <li><a class="dropdown-item lien" href="{{ route('admin.candidates.create') }}"><i class="fas fa-user-plus"></i> Ajouter un candidat</a></li>
                                <li><a class="dropdown-item lien" href="{{ route('admin.candidates.index') }}"><i class="fas fa-users"></i> Voir tous les candidats</a></li>
                                <li><a class="dropdown-item lien" href="{{ route('vote.vote') }}"><i class="fas fa-trophy"></i> Votes remportés</a></li>
                            </ul>
                        </li>
                        @elseif(auth()->user()->role == 'participant')
                        <li class="nav-item dropdown text-start float-start float-left ">
                            <a class="nav-link dropdown-toggle lien" href="" id="participantDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-vote-yea"></i> Vote
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="participantDropdown" style="background-color: #1aabe9; /* bleu */ ">
                                <li><a class="dropdown-item lien" href="{{ route('pa.vote.miss') }}"><i class="fas fa-crown"></i> Miss</a></li>
                                <li><a class="dropdown-item lien" href="{{ route('pa.vote.misters') }}"><i class="fas fa-user-tie"></i> Mister</a></li>
                            </ul>
                        </li>
                        @endif
                        @endauth
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link lien" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Se connecter') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link lien" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> {{ __('Inscription') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown lien" class="nav-link dropdown-toggle lien" href="" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user"></i> {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item lien" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Deconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
