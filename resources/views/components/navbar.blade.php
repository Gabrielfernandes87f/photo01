<Style>
    #navbar {
        margin: 0 auto;
    }

</Style>
<div class="container d-flex align-items-center justify-content-between">
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="/albums">albums</a></li>
            <li><a class="nav-link scrollto" href="/eu">Sobre mim</a></li>
            <li><a class="nav-link scrollto" href="/#portfolio">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="/#footer">Contato</a></li>
            @auth

                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault();
                      this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                </li>
            @endauth
            @guest
                {{-- <li><a class="nav-link scrollto" href="/login">login</a></li> --}}
            @endguest

        </ul>
        <i class="bi bi-camera2  mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
</div>
