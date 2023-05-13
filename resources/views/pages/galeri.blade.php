@extends('pages.master')

@section('content')
    <section class="galeri mb-5">
        <h2 class="text-center header-page mt-3 container">GALERI</h2>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-between">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-8">
                                <img src="{{ asset('assets/images/dokum1.png') }}" alt="dokum1" class="w-100 h-100">
                            </div>
                            <div class="col-sm-4">
                                <img src="{{ asset('assets/images/dokum2.png') }}" alt="dokum2" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-5">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('assets/images/dokum3.png') }}" alt="dokum3" class="w-100 h-100">
                            </div>
                            <div class="col-sm-4">
                                <img src="{{ asset('assets/images/dokum4.png') }}" alt="dokum4" class="w-100 h-100">
                            </div>
                            <div class="col-sm-4">
                                <img src="{{ asset('assets/images/dokum5.png') }}" alt="dokum5" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ asset('assets/images/dokum6.png') }}" alt="dokum6" class="w-100 h-100">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('assets/images/dokum7.png') }}" alt="dokum7" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection