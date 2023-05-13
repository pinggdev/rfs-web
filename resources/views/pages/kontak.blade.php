@extends('pages.master')

@section('content')
    <section class="kontak mb-5">
        <h2 class="text-center header-page mt-3 container">KONTAK</h2>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-between">
                    <div class="col-sm-5 align-self-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('assets/images/wa.png') }}" alt="wa" class="w-0">
                                    </div>
                                    <div class="col-sm-10 align-self-center">
                                        <p>0852 – 7738 – 8005 WA/TELP</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('assets/images/location.png') }}" alt="location" class="w-0">
                                    </div>
                                    <div class="col-sm-10 align-self-center">
                                        <p>Jalan Pasar 1 Tembung , Tambak Rejo Desa Amplas 20371</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <img src="{{ asset('assets/images/kontak.png') }}" alt="kontak" class="w-100 h-100">
                    </div>
                </div>
            </div>
    </section>
@endsection