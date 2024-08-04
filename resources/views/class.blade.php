<div>
    {{-- title --}}
    <div class="text-center">
        <h2 class="fw-bold">Lebih dari 2000+ Learning Video</h2>
        <p class="mx-5">
            Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum
            profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi
        </p>
    </div>

    <div class="d-flex justify-content-center my-5">
        <ul class="nav nav-pills mb-3 overflow-auto flex-nowrap" id="pills-tab" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-kelascom-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-kelascom" type="button" role="tab" aria-controls="pills-kelascom"
                    aria-selected="true">Kelas.com</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-kelaswork-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-kelaswork" type="button" role="tab" aria-controls="pills-kelaswork"
                    aria-selected="false">Kelas.work</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link txt-btn-nowrap " id="pills-bootcamp-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-bootcamp" type="button" role="tab" aria-controls="pills-bootcamp"
                    aria-selected="false">Bootcamp</button>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="pills-tabContent">
        {{-- content kelascom --}}
        <div class="tab-pane fade show active" id="pills-kelascom" role="tabpanel" aria-labelledby="pills-kelascom-tab"
            tabindex="0">

            {{-- hide jika ukuran md --}}
            <div class="class-carousel owl-carousel owl-theme d-sm-none d-md-block ">
                @for ($i = 0; $i < 9; $i++)
                    <div class="item px-3">
                        {{-- <a class="owl-video" href="https://www.youtube.com/watch?v=NNWMh_ZsYFg"></a> --}}
                        <div class="card" style="width: 18rem;">
                            <img src="{{ 'assets/img/class_img.png' }}" alt="">
                            <div class="card-body">
                                <h5 class="fw-bold">Public Speaking : Merdeka Dalam Bicara</h5>
                                <span class="fw-bold card-text">Pandji Pragiwaksono</span>
                                <p class="card-text">Presenter Televisi & Komika</p>
                            </div>
                        </div>
                    </div>
                @endfor


            </div>

            {{-- tampilkan jika ukuran sm --}}
            <div class="row d-md-none">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-sm-6 p-2">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ 'assets/img/class_img.png' }}" alt="">
                            <div class="card-body">
                                <h6 class="fw-bold">Public Speaking : Merdeka Dalam Bicara</h6>
                                <span class="fw-bold card-text">Pandji Pragiwaksono</span>
                                <p class="card-text">Presenter Televisi & Komika</p>
                            </div>
                        </div>

                    </div>
                @endfor
            </div>


        </div>

        {{-- content kelaswork --}}
        <div class="tab-pane fade" id="pills-kelaswork" role="tabpanel" aria-labelledby="pills-kelaswork-tab"
            tabindex="0">
            ini kelaswork
        </div>

        {{-- content bootcamp learning --}}
        <div class="tab-pane fade" id="pills-bootcamp" role="tabpanel" aria-labelledby="pills-bootcamp-tab"
            tabindex="0">ini
            bootcamp
        </div>

        {{-- content inquiry learning --}}
        <div class="tab-pane fade" id="pills-learning" role="tabpanel" aria-labelledby="pills-learning-tab"
            tabindex="0">
            learning</div>
    </div>

</div>
