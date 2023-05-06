<nav>
    <div class="navbar">
        <div>
            <a  href="{{ route('generics.index') }}">
                <img src="images/heol_logo.png" alt="heol logo" class="img-navbar">
            </a>
        </div>
        <div class="menu-navbar">
            <a class="philosopher" href="{{ route('articles.index') }}">
                Nos articles
            </a>
            <a class="philosopher" href="{{ route('generics.about_us') }}">
                A propos de nous
            </a>
            <div class="navbar-fa-div">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle dropdown-toggle-no-caret" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="philosopher">
                                @if(Auth::check())
                                    {{ Auth::user()->name }}
                                @else
                                    Se connecter
                                @endif
                            </div>
                            <i class="fas fa-user fa-navbar fa-user-margin"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        @if(Auth::check())
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Se déconnecter</button>
                            </form>
                        @else
                            <a class="dropdown-item philosopher" href="{{ route('login') }}">Se connecter</a>
                            <a class="dropdown-item philosopher" href="{{ route('register') }}">S'inscrire</a>
                        @endif
                    </div>
                </div>
                <a href="{{ Auth::check() ? route('delivery.index') : route('register') }}" id="cart-icon">
                    <i class="fas fa-shopping-bag fa-color fa-navbar"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="bottom-line-navbar">
    </div>
</nav>