<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
            <h1 class="text-center">Xtra Blog</h1>
        </div>
        <nav class="tm-nav" id="tm-nav">
            <ul>
                <script type="text/javascript">
                    document.title === 'Home' ? document.write('<li class="tm-nav-item active">') : document.write('<li class="tm-nav-item">');
                </script>
                <a href="{{ route('home') }}" class="tm-nav-link">
                    <i class="fas fa-home"></i>
                    Home
                </a></li>
                <script type="text/javascript">
                    document.title === 'Shop' ? document.write('<li class="tm-nav-item active">') : document.write('<li class="tm-nav-item">');
                </script>
                <a href="{{ route('shop') }}" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Shop
                </a></li>

                <script type="text/javascript">
                    document.title === 'Cart' ? document.write('<li class="tm-nav-item active">') : document.write('<li class="tm-nav-item">');
                </script>
                <a href="" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Cart
                </a></li>

                @auth('web')
                    <li class="tm-nav-item">
                        <a href="{{route('logout')}}" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Log out
                        </a></li>
                @endauth
                @guest('web')
                    <li class="tm-nav-item">
                        <a href="{{route('login')}}" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Login
                        </a></li>
                @endguest
            </ul>
        </nav>
        <div class="tm-mb-65">
            <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                <i class="fab fa-facebook tm-social-icon"></i>
            </a>
            <a href="https://twitter.com" class="tm-social-link">
                <i class="fab fa-twitter tm-social-icon"></i>
            </a>
            <a href="https://instagram.com" class="tm-social-link">
                <i class="fab fa-instagram tm-social-icon"></i>
            </a>
        </div>
        <p class="tm-mb-80 pr-5 text-white">
            Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
        </p>
    </div>
</header>
