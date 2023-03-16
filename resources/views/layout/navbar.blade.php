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
                <a href="" class="connect-display">
                    <p class="philosopher">
                        Se connecter
                    </p>
                    <i class="fas fa-user fa-navbar fa-user-margin"></i>
                </a>
                <a href="{{ route('payment.checkout') }}">
                    <i class="fas fa-shopping-bag fa-color fa-navbar" href="{{ route('payment.checkout') }}"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="bottom-line-navbar">
    </div>
</nav>