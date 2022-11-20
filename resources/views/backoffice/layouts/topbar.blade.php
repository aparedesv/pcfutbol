<div id="backoffice-topbar" class="p-0 m-0 bg-light border-bottom">

    <nav class="navbar navbar-light border-bottom">

        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('backoffice.dashboard') }}">

                <img
                    src="{{ asset('storage/img/ball.png') }}"
                    class="img-fluid"
                    alt="logo"
                >

            </a>

            <div class="d-flex align-items-center text-uppercase text-dark fs-2">

                <span>backoffice</span>

            </div>

            <div class="d-flex align-items-center pe-3">

                <div class="d-none d-sm-block">
                    <span class="text-dark">
                        {{ ucwords(Auth::user()->name) }}
                    </span>
                </div>

                <div class="ms-4">

                    @if(Request::segment(1) == config('constants.BACKOFFICE_PROFILE') && !Request::segment(2))


                        <a
                            class="text-decoration-none text-white ps-2"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        >
                            <i class="bi bi-box-arrow-right text-dark h2"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    @else

                        <a href="{{ route('backoffice.profile') }}" class="btn btn-link">
                            <i class="bi bi-person text-dark h2"></i>
                        </a>

                    @endif

                </div>

            </div>
        </div>
    </nav>

</div>
