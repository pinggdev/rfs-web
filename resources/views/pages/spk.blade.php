@extends('pages.master')

@section('content')
    <section class="analisis">
        <h2 class="text-center header-page mt-3 container">SPK</h2>
            <div class="container">
                <form>
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Skala</label>
                                <select class="form-control" id="skala">
                                    <option value="">Pilih Skala...</option>
                                    <option value="">Greenhouse (48m2)</option>
                                    <option value="">Perinstalasi (12m2)</option>
                                </select>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <small id="skalaHelp" class="form-text text-muted">Greenhouse (48m2) : <br>
                                            - Umur ekonomis usaha 5th <br>
                                            - Umur ekonomis usaha 10 th</small>
                                    </div>
                                    <div class="col-sm-6">
                                        <small id="skalaHelp" class="form-text text-muted">Perinstalasi (12m2) : <br>
                                            -Umur ekonomis usaha 5th <br>
                                            -Umur ekonomis usaha 10 th</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Analisis</label>
                                <select class="form-control" id="skala">
                                    <option value="">Pilih Analisis...</option>
                                    <option value="">NPV</option>
                                    <option value="">IRR</option>
                                    <option value="">NET B/C</option>
                                    <option value="">PBP</option>
                                    <option value="">BEP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
                </form>
                <div class="row mt-5 pt-5">
                    <h3 class="text-center  mt-3 container">Catatan</h3>
                    <div class="col-sm-5 mt-5">
                        <h5>Catatan dari hasil analisis untuk DFT Per Greenhouse: </h5>
                        <p>1. Berdasarkan analisis investasi per greenhouse, usaha yang nantinya dijalankan akan balik modal pada kurun waktu kurang lebih 15 bulan dengan modal investasi Rp. 56.590.000</p>
                        <p>2. Usaha yang nantinya dijalankan dengan kurun waktu 5 tahun sudah menguntungkan, akan tetapi lebih menguntungkan lagi jika terus berproduksi dalam jangka waktu 10 tahun. </p>
                        <ul>
                            <li>Usaha hidroponik ini menghasilkan keuntungan sebesar Rp. 154.708.714 selama umur ekonomis usaha 5 tahun.</li>
                            <li>Usaha hidroponik ini menghasilkan keuntungan sebesar Rp. 351.540.535 selama umur ekonomis usaha 10 tahun.</li>
                        </ul>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5 mt-5">
                        <h5>Catatan dari hasil analisis untuk DFT Per Instalasi: </h5>
                        <p>1. Berdasarkan analisis investasi per greenhouse, usaha yang nantinya dijalankan akan balik modal pada kurun waktu kurang lebih 4 bulan dengan modal investasi Rp. 4.450.000</p>
                        <p>2. Usaha yang nantinya dijalankan dengan kurun waktu 5 tahun sudah menguntungkan, akan tetapi lebih menguntungkan lagi jika terus berproduksi dalam jangka waktu 10 tahun. </p>
                        <ul>
                            <li>Usaha hidroponik ini menghasilkan keuntungan sebesar Rp. 48.374.679 selama umur ekonomis usaha 5 tahun.</li>
                            <li>Usaha hidroponik ini menghasilkan keuntungan sebesar Rp. 97.582.634 selama umur ekonomis usaha 10 tahun.</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5 pt-5">
                    <h3 class="text-center  mt-3 container">CATATAN PENTING PERBANDINGAN KEDUA ANALISIS</h3>
                    <div class="col-sm-12 mt-3">
                        <div class="d-flex justify-content-center">
                            <p class="w-75 ">Usahatani Hidroponik perinstalasi lebih menguntungkan dibandingkan Usahatani hidroponik dengan menggunakan Greenhouse. Hal ini dikarenakan tidak adanya biaya investasi untuk pembuatan greenhouse pada usahatani hidroponik peristalasi. Akan tetapi terdapat kelemahan dan kelebihan dari adanya perbedaan biaya investasi untuk keduanya. Antara lain :</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="w-75">1. Usahatani dengan greenhouse lebih minim terserang hama tumbuhan. Sementara usahatani dengan hanya perinstalasi lebih rentan untuk terserang hama tumbuhan seperti ulat, belalang, dan hewan lainnya</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="w-75">2. Usahatani dengan greenhouse memiliki hasil panen yang lebih bagus dan optimal pertumbuhannya dikarenakan suhu serta kelembaban didalam ruangan greenhouse bisa dikendalikan. Sementara pada  usahatani yang hanya perinstalasi tidak dapat dikendalikan suhu udara dan kelembaban sekitarnya, dikarenakan tidak adanya pembatas untuk cahaya matahari dan hujan.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection