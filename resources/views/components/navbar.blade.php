<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/images/pulsechain_logo.png" alt="Pulse Chain Logo" style="height: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <!-- Login Form -->
            @auth
                <form action="/logout" method="POST" class="d-flex"> 
                    @csrf
                    <button class="btn btn-outline-light" type="submit">Logout</button>
                </form>
            @else
                <form action="/login" method="POST" class="d-flex">
                    @csrf
                    <input name="loginusername" class="form-control me-2" type="text" placeholder="Username" aria-label="Username">
                    <input name="loginpassword" class="form-control me-2" type="password" placeholder="Password" aria-label="Password">
                    <button class="btn btn-outline-light" type="submit">Login</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
