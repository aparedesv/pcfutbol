@extends('backoffice.main')

@section('content')

    <div id="seccions" class="w-50">

        <div class="row">

            <div class="col-sm-12 col-md-6 border p-4 text-center">
                <a
                    class="btn btn-link text-decoration-none text-secondary"
                    href="{{ route('login') }}"
                >
                    ESTADÍSTIQUES
                </a>
            </div>
            <div class="col-sm-12 col-md-6 border p-4 text-center">
                <a
                    class="btn btn-link text-decoration-none text-secondary"
                    href="{{ route('register') }}"
                >
                    EQUIP
                </a>
            </div>
            <div class="col-sm-12 col-md-6 border p-4 text-center">
                <a
                    class="btn btn-link text-decoration-none text-secondary"
                    href="#"
                >
                    CLUB
                </a>
            </div>
            <div class="col-sm-12 col-md-6 border p-4 text-center">
                <a
                    class="btn btn-link text-decoration-none text-secondary"
                    href="#"
                >
                    MERCAT
                </a>
            </div>

        </div>


    </div>

@endsection
