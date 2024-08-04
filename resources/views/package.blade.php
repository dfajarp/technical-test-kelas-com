<div>
    <div class="text-center py-5">
        <h2>Pilihan Paket Untuk Perusahaan di Kelas Center</h2>
    </div>

    <div class="package-carousel owl-carousel">

        @for ($i = 0; $i < 4; $i++)
            {{-- The current value is {{ $i }} --}}
            <div class="border border-1 mx-2 rounded-4 bg-gray1 card-package">
                <div class="p-4 d-flex">
                    <div class="me-4">logo</div>
                    <h4 class="fw-bold">Starter</h4>
                </div>
                <div class="px-4 mb-4">Kelebihan</div>
                <div style="" class="px-4 border-bottom">
                    @for ($x = 0; $x < 9; $x++)
                        <div class="d-flex">
                            <span class="me-2"><i class="fa-solid fa-check"></i></span>
                            <p>LMS + kelas by Kelas.Center</p>
                        </div>
                    @endfor
                </div>
                <div class="px-4 py-2">
                    <span class=" text-info-emphasis">Rp.187.500</span>
                    <div class="d-flex">
                        <h3>Rp.187.500</h3>/bulan
                    </div>
                </div>

                <div class="d-grid px-4 pb-4">
                    <button class="btn btn-package">Pilih Paket</button>
                </div>
            </div>
        @endfor
    </div>

    <div class="py-3 bg-brown rounded-5 rounded-top-0 ">
        <div class="d-md-flex justify-content-between">
            <div class="d-md-inline-flex align-items-center text-white">
                <div class="d-inline-flex align-items-center gap-2 px-4 mt-sm-2">
                    <i class="fa-regular fa-building fa-2xl"></i>
                    <span>
                        <h4>Enterprise</h4>
                    </span>
                </div>
                
                <div class=" me-md-2 m-sm-4 align-items-center">
                    <i class="fa-solid fa-check"></i>
                    <span class="ms-2">>100 users</span>
                </div>
                <div class=" me-md-2 m-sm-4 align-items-center">
                    <i class="fa-solid fa-check"></i>
                    <span class="ms-2">All Access Class</span>
                </div>
                <div class=" me-md-2 m-sm-4 align-items-center">
                    <i class="fa-solid fa-check"></i>
                    <span class="ms-2">More Features</span>
                </div>
            </div>
            <div class="me-md-4 m-sm-4 d-sm-grid">
                <button class="btn btn-contact">Contact Us</button>
            </div>
        </div>
    </div>
</div>
