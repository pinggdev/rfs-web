@extends('pages.master')

@section('content')
    <section class="tentang">
        <h2 class="text-center header-page mt-3 container">TENTANG KAMI</h2>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-between profil">
                    <div class="col-sm-5 align-self-center">
                        <h4>Profil</h4>
                        <p>
                            CV. Hidro Sinergi Utama adalah adalah Perusahaan ketahanan pangan mandiri dengan konsep holding company. Bersinergi dengan lebih dari 1000 petani dan pelaku UMKM berbasis komunitas di 20 kab/kota di Pulau Sumatera. Mengembangkan Hasil Sayur Fresh dan Olahan Sayur serta potensi agrowisata dan edu- wisata. Memiliki kebun produksi, kebun binaan, dan kebun edukasi budidaya hidroponik.
                            Greenfills Farm Hidroponik merupakan kebun binaan sekaligus kebun edukasi mengenai budidaya sayuran hidroponik yang berada dibawah naungan CV. Hidro Sinergi Utama yang berada di Jl. Pasar 1 Tambak Rejo,Kelurahan Medan Amplas, Kecamatan Percut Sei Tuan, Kabupaten Deli Serdang, Provinsi Sumatera Utara.
                            Kami memberikan solusi sayur sehat masyarakat dengan jargon “Fresh from farm to the table” di 20 Kab/ Kota dengan Me-Replikasi Bisnis ini di setiap Mitra Binaan Sayur sehat fresh berkualitas dari kebun langsung ke meja makan Konsumen.
                        </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <img src="{{ asset('assets/images/profil.png') }}" alt="profil" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visimisi">
                <div class="container">
                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-sm-12">
                            <h4 class="text-white text-center">Visi Misi</h4>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-center">
                            <img src="{{ asset('assets/images/visi1.png') }}" alt="visi1" class="w-0">
                        </div>
                        <div class="col-sm-12 d-flex justify-content-center">
                            <p class="text-center">Menjadi Perusahaan Ketahanan Pangan mandiri dengan Konsep Ekonomi Kerakyatan</p>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-center">
                            <img src="{{ asset('assets/images/visi2.png') }}" alt="visi2" class="w-0">
                        </div>
                        <div class="col-sm-12 d-flex justify-content-center">
                            <p class="text-center">Sebagai Perusahaan Pertanian Modern Yang Mempelopori Ekonomi Kerakyatan untuk Pembangunan Ekonomi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="founder mt-5 py-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="mb-5">PENDIRI</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{ asset('assets/images/founder.png') }}" alt="founder" class="w-0">
                        </div>
                        <div class="col-sm-7">
                            <p class="nama-founder">Muhammad Nazri Syahputra</p>
                            <div class="row">
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Ketua Komunitas Hidroponik Sumut 2015 – Sekarang</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Vendor & Petani Pakar Hidroponik KPW BI SUMUT</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Ketua Department wirausaha MTI Sumut</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Ketua Asosiasi Pengusaha Hidroponik</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Wirausaha Unggulan Bank Indonesia KPW BI SUMUT</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Direktur Cv Hidro Sinergi Utama (GreenFills Hidroponik)</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Vendor & Petani Pakar Hidroponik KPW BI SUMUT</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Sekretaris Wilayah IIBF (Indonesian Islamic Bussiness Forum)</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Mentor MANTAP ( Mandiri Taspen )</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Perintis Edukasi & Pengenalan Hidroponik di 20 Kab/kota di Sumut</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Pendiri Gerakan Muda Bertani dengan Binaan 5300 Se–Sumatera Utara</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Pelatih Hidroponik Indonesia dengan Angkatan Se-Indonesia ( 135 Angkatan ) 
                                        dari 2016 sd sekarang dengan Alumni +/- 800 an di luar Purna Bhakti dan Charity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fokusbisnisproduk mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <h4>FOKUS BISNIS DAN PRODUK</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <h5>FOKUS BISNIS</h5>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-sm-4">      
                                        <div class="card card-fokus-bisnis">
                                            <div class="card-body d-flex justify-content-center align-items-center">
                                                <div>         
                                                    <div class="d-flex justify-content-center">
                                                        <img src="{{ asset('assets/images/bisnis1.png') }}" alt="bisnis1" class="w-0">
                                                    </div>       
                                                    <p class="card-text text-center mt-2">Produk Sayur dan Olahan Pangan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">      
                                        <div class="card card-fokus-bisnis">
                                            <div class="card-body d-flex justify-content-center align-items-center">
                                                <div>         
                                                    <div class="d-flex justify-content-center">
                                                        <img src="{{ asset('assets/images/bisnis2.png') }}" alt="bisnis2" class="w-0">
                                                    </div>       
                                                    <p class="card-text text-center mt-2">Ekonomi kerakyatan Berbasis Masjid / Wakaf Produktif</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">      
                                        <div class="card card-fokus-bisnis">
                                            <div class="card-body d-flex justify-content-center align-items-center">
                                                <div>         
                                                    <div class="d-flex justify-content-center">
                                                        <img src="{{ asset('assets/images/bisnis3.png') }}" alt="bisnis3" class="w-0">
                                                    </div>       
                                                    <p class="card-text text-center mt-2">Desa Wisata Agro</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <h5>PRODUK</h5>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-sm-6">      
                                        <div class="card card-fokus-bisnis">
                                            <div class="card-body d-flex justify-content-center align-items-center">
                                                <div>         
                                                    <div class="d-flex justify-content-center">
                                                        <p class="font-weight-bolder">60%</p>
                                                    </div>       
                                                    <p class="card-text text-center mt-2">Sayuran Sehat</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">      
                                        <div class="card card-fokus-bisnis">
                                            <div class="card-body d-flex justify-content-center align-items-center">
                                                <div>         
                                                    <div class="d-flex justify-content-center">
                                                        <p class="font-weight-bolder">40%</p>
                                                    </div>       
                                                    <p class="card-text text-center mt-2">Olahan Sayur</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pencapaian mt-5 py-5 pb-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="text-white mb-5">PENCAPAIAN</h4>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">FIRST WINNER</h5>
                                            <p class="card-text text-center">Petani Pakar Bank Indonesia
                                                Program Pemberdayaan Pasantren 
                                                (Hebitren , komunitas Bisnis Pasantren)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">FIRST WINNER</h5>
                                            <p class="card-text text-center">Fesyar Festival Syariah 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">RUNNER UP</h5>
                                            <p class="card-text text-center">Wirausaha Muda Mandiri 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">BEST MENTOR</h5>
                                            <p class="card-text text-center">Mandiri Taspen & PT Taspen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">TOP FINALIS</h5>
                                            <p class="card-text text-center">Kemenparekraf 2021
                                                Program Pemberdayaan Pasantren 
                                                (Desa Agrowista Hidro 2021)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">TOP INOVASI SOCIAL PROGRAM </h5>
                                            <p class="card-text text-center">Kemitraan BUMN
                                                Rumah BUMN 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">TOP 10</h5>
                                            <p class="card-text text-center">Mentor Hidroponik BNSP</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">PENDIRI HIDROPONIK</h5>
                                            <p class="card-text text-center">Pada 20 Kabupaten kota di Sumatera Utara dengan Total Member komunitas 7000 dan +/- 500 Petani Plasma Profesional Binaan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="mitra mt-5 py-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <h4>MITRA</h4>
                        </div>
                        <div class="col-sm-12 mt-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="{{ asset('assets/images/mitra.png') }}" alt="mitra" class="w-0">
                                </div>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-5 align-self-center">
                                    <p>1. Instansi Pemerintahan ( Kementrian , BUMN , dInas, Pemko , Desa Dll )</p>
                                    <p>2. Petani Sayur Hidroponik/Plasma</p>
                                    <p>3. Pengepul</p>
                                    <p>4. UMKM Produksi Olahan Sayur</p>
                                    <p>5. Super Market</p>
                                    <p>6. Komunitas Vegetarian</p>
                                    <p>7. Rumah Sakit</p>
                                    <p>8. Cafe Sehat</p>
                                    <p>9. Hotel</p>
                                    <p>10. Resto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection