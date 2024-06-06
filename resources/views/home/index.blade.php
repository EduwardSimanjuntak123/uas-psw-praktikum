@extends('home.templates.index')

@section('page-content')
    <div class="hero-wrap" style="background-image: url('{{ asset('bg1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class=""></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animate d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Selamat Datang Di <span>Badminton bang Eduward</span>.</h1>
                        <p><a href="{{ url('home/lapangan') }}" class="btn btn-danger py-2 px-4">Lapangan Kami</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="ftco-section ftco-no-pb"> --}}
        
    {{-- </section> --}}
@endsection
