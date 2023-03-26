{{-- Hero Section --}}
<div class="container col-xxl-8 px-1 py-2">
    <div class="row flex-lg-row-reverse align-items-center g-3 py-3">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ asset('assets/img/Featured-tv-screen-repair-cost.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-6 fw-bold lh-1 mb-3">BUTUH JASA SERVICE ELEKTRONIK?</h1>
            <p class="lead">Perangkat Elektronik Anda Rusak? Serahkan pada Ahlinya!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Hubungi Kami</button>
            </div>
        </div>
    </div>
</div>

{{-- Service Section --}}
<div class="container my-4">
    <div class="text-center">
        <h4>Services</h4>
        <p>Pelayanan Yang Kami Sediakan.</p>
    </div>
    <div class="row">
        @for ($i = 0; $i < 4; $i++)
        <div class="col-md-3">
            <img src="{{ asset('assets/img/stb1.jpg')}}" class="img-fluid">
            <p class="text-center">STB</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minus laborum, nobis quis excepturi quaerat? Id laboriosam odit dolorum est enim voluptatibus necessitatibus nam recusandae.</p>
        </div>
        @endfor
    </div>
    <div class="text-center mt-2">
        <a href="" class="btn btn-primary px-5">Service Lainnya <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

{{-- About Section --}}
<div class="container mt-5">
    <div class="text-center">
        <h4>About</h4>
        <p>Tentang Toko Kami</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/stb1.jpg')}}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, non? Et minima maiores neque perspiciatis quaerat natus ut non tempora vel, eligendi aliquam inventore vitae! Consequatur pariatur aliquam rerum similique. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, saepe expedita. Necessitatibus, corporis ducimus, omnis aut eaque fuga ab nesciunt porro suscipit saepe iusto soluta accusamus ratione quidem veritatis repudiandae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat aperiam quam ratione eos. Hic, eos iusto saepe, fugiat reiciendis odio quasi aperiam sunt cumque inventore magnam! Labore, nesciunt eum.</p>
        </div>
    </div>
</div>

{{-- Contact Section --}}
<div class="container my-5">
    <div class="text-center">
        <h4>Hubungi Kami</h4>
        <p>Anda Dapat Bertanya Langsung ke Kami</p>
        <a href="" class="btn btn-primary px-5" target="blank"><i class="fas fa-phone"></i> Hubungi Kami di Whatsapp</a>
    </div>
</div>
