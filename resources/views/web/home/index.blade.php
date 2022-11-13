@extends('web.main')

@section('content')

    <div class="position-relative">

        <div id="seccions" class="w-50">

            <div class="row">

                <div class="col-sm-12 col-md-6 border p-4 text-center">
                    <a
                        class="btn btn-link text-decoration-none text-secondary"
                        href="{{ route('login') }}"
                    >
                        LOG IN
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 border p-4 text-center">
                    <a
                        class="btn btn-link text-decoration-none text-secondary"
                        href="{{ route('register') }}"
                    >
                        SIGN IN
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 border p-4 text-center">
                    <a
                        class="btn btn-link text-decoration-none text-secondary"
                        href="#"
                    >
                        COL·LABORADOR
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 border p-4 text-center">
                    <a
                        class="btn btn-link text-decoration-none text-secondary"
                        href="#"
                    >
                        ESPECTADOR
                    </a>
                </div>

            </div>


        </div>

    </div>

@endsection
