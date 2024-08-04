<div class="img-home position-relative" style="background-image: url('{{ asset('assets/img/image_home.png') }}');">
    <div class="text-overlay position-absolute top-50 start-50 translate-middle text-white">
        <h2 class="">Tingkatkan Performa Bisnis Anda</h2>
        <p>Semua solusi untuk mempermudah Training dan Upskilling karyawan di perusahaan Anda</p>

        <button class="btn btn-primary">Ajukan Demo</button>
    </div>
</div>
<div class="bg-gray2 text-center">
    <h3 class="fw-bold pt-5">Telah Dipercaya oleh 10.000+ Profesional User dari</h3>

    {{-- tampilkan di layar kecil --}}
    <div class="d-sm-block d-md-none py-20">
        <div class="client-carousel owl-carousel owl-theme">
            <div class="item">
                <div class="row d-inline-flex align-items-center">
                    <div class="col"><img src="{{ asset('assets/img/user1.svg') }}" alt=""></div>
                    <div class="col"><img src="{{ asset('assets/img/user2.svg') }}" alt=""></div>
                    <div class="col"><img src="{{ asset('assets/img/user3.svg') }}" alt=""></div>
                    <div class="col"><img src="{{ asset('assets/img/user4.svg') }}" alt=""></div>
                </div>
            </div>
            <div class="item">
                <div class="row d-inline-flex align-items-center">
                    <div class="col"><img src="{{ asset('assets/img/user5.svg') }}" alt=""></div>
                    <div class="col"><img src="{{ asset('assets/img/user6.svg') }}" alt=""></div>
                    <div class="col"><img src="{{ asset('assets/img/user7.svg') }}" alt=""></div>
                    <div class="col"><img src="{{ asset('assets/img/user8.svg') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    {{-- tampilkan di layar besar --}}
    <div class="d-md-block d-none py-5">
        <div class="row text-center">
            <div class="col"><img src="{{ asset('assets/img/user1.svg') }}" alt=""></div>
            <div class="col"><img src="{{ asset('assets/img/user2.svg') }}" alt=""></div>
            <div class="col"><img src="{{ asset('assets/img/user3.svg') }}" alt=""></div>
            <div class="col"><img src="{{ asset('assets/img/user4.svg') }}" alt=""></div>
            <div class="col"><img src="{{ asset('assets/img/user5.svg') }}" alt=""></div>
            <div class="col"><img src="{{ asset('assets/img/user6.svg') }}" alt=""></div>
            <div class="col"><img src="{{ asset('assets/img/user7.svg') }}" alt=""></div>
            <div class="col"><img src="{{ asset('assets/img/user8.svg') }}" alt=""></div>
        </div>
    </div>

</div>
