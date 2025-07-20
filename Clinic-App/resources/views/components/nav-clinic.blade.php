<nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="./index.html">VCare</a>
        </div>
        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                @if(!isset($_SESSION['user']))
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('home') }}">Home</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ url('/majors') }}">majors</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ url('./doctor-home') }}">Doctors</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ url('./history') }}">History</a>
                @else
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('login') }}">login</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('register') }}">Register</a>
                @endif
            </div>
        </div>
    </div>
</nav>
