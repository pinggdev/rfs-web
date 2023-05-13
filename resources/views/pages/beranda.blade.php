@extends('pages.master')

@section('content')
    <section class="beranda">
        <div class="jumbo container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <div class="row jumbo-text">
                        <div class="col-sm-12">
                            <h1>CV HIDRO</h1>
                            <h1>SINERGI UTAMA</h1>
                            <p>Sinergi Dari Desa Untuk Indonesia</p>
                        </div>
                        <div class="col-sm-12 mt-5">
                            <a href="">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('assets/images/beranda.png') }}" alt="beranda" class="w-auto">
                </div>
            </div>
        </div>
    </section>
@endsection