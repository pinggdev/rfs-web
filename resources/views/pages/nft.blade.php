@extends('pages.master')

@section('content')
    <section class="nft">
        <h2 class="text-center header-page mt-3 container">HIDROPONIK NFT</h2>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-between">
                    <div class="col-sm-5 align-self-center">
                        <p>Hidroponik merupakan salah satu sistem pertanian masa depan karena dapat diusahakan di berbagai tempat, baik wilayah pedesaan, perkotaan, lahan terbuka, bahkan di atas apartemen sekalipun. Hidroponik dapat diusahakan sepanjang tahun tanpa mengenal adanya musim. Pemeliharaan tanaman hidroponik pun lebih mudah karena tempat budidayanya relatif bersih, media tanamnya steril, tanaman terlindung dari terpaan hujan, serangan hama dan penyakit yang relatif kecil, serta tanaman lebih sehat dan produktivitas lebih tinggi.
                        </p>
                        <p>Sistem Hidroponik Nutrient Film Technique (NFT) adalah sistem yang paling populer dibandingkan dengan sistem hidroponik lainnya. Hidroponik sistem NFT adalah salah satu sistem hidroponik yang menggunakan sistem sirkulasi nutrisi. NFT mensirkulasi aliran nutrisi tipis atau serupa dengan film. NFT bertujuan agar tanaman mendapatkan nutrisi, air dan oksigen secara bersamaan. NFT sangat efisien karena penggunaan aplikasi air dan nutrisi yang bersamaan dapat menghemat tenaga dan waktu kerja. Sistem NFT harus menggunakan listrik untuk pompa air yang berfungsi untuk sirkuasi nutrisi. Air dan nutrisi dipompa ke seluruh bagian akar tanaman dan dialirkan kembali ke dalam lubang tandon dan disirkulasikan kembali ke akar tanaman.</p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <img src="{{ asset('assets/images/nft1.png') }}" alt="nft1" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5 d-flex justify-content-between">
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <img src="{{ asset('assets/images/nft2.png') }}" alt="nft2" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5 align-self-center">
                        <p>Keuntungan pemakaian sistem tanam NFT :
                        <br>
                        1. Mudah pengendalian di daerah perakaran tanaman
                        <br>
                        2. Kebutuhan air dapat terpenuhi dengan baik dan mudah
                        <br>
                        3. Keseragaman nutrisi dan tingkat konsentrasi larutan nutrisi yang dibutuhkan oleh tanaman dapat disesuaikan dengan umur dan jenis tanaman
                        <br>
                        4. Tanaman dapat diusahakan beberapa kali dengan periode tanam yang pendek, Sangat baik untuk pelaksanaan penelitian dengan variable yang dapat terkontrol.
                        <br>
                        5. Tanaman memperoleh suplai air, oksigen, dan nutrisi secara terus menerus
                        <br>
                        6. Lebih menghemat air dan nutrisi</p>
                    </div>
                </div>
            </div>
    </section>
@endsection