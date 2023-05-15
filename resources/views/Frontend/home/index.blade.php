{{-- Hero Section --}}
<div class="container col-xxl-8 px-1 py-2">
    <div class="row flex-lg-row-reverse align-items-center g-3 py-3">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/{{ $banner->gambar }}" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-6 fw-bold lh-1 mb-3">{{ $banner->headline }}</h1>
            <p>{!! $banner->desc !!}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Hubungi Kami</button>
            </div>
        </div>
    </div>
</div>

{{-- Service Section --}}
<div class="container my-4">
    <div class="text-center">
        <h4>Pelayanan</h4>
        <p>Yang Kami Sediakan.</p>
    </div>
    <div class="row">
        @foreach ($service as $item)
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="/{{ $item->gambar }}" class="img-fluid">
                <div class="p-3">
                    <p class="text-center"><b>{{ $item->title }}</b></p>
                    <p>{!! Illuminate\Support\Str::limit($item->desc, 100) !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-2">
        <a href="" class="btn btn-primary px-5">Service Lainnya <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

{{-- About Section --}}
<div class="container mt-5">
    <div class="text-center">
        <h4>Tentang</h4>
        <p>Global Elektronik</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/{{ $about->gambar }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>{!! $about->desc !!}</p>
            </div>
        </div>
    </div>
</div>

{{-- Contact Section --}}
<div class="container mt-5">
    <div class = "contact-bg">
        <h4>Kontak</h4>
        <p>Silahakan Hubungi Kami Bila Membutuhkan.</p>
    </div>
    <div class = "contact-body">
        <div class = "contact-info">
            <div>
                <span><i class = "fas fa-mobile-alt"></i></span>
                <span>No. Telpon</span>
                <span class = "text">{{ $contact->nomor }}</span>
            </div>
            <div>
                <span><i class = "fas fa-envelope-open"></i></span>
                <span>E-mail</span>
                <span class = "text">{{ $contact->email }}</span>
            </div>
            <div>
                <span><i class = "fas fa-map-marker-alt"></i></span>
                <span>Alamat</span>
                <span class = "text">{{ $contact->alamat }}</span>
            </div>
            <div>
                <span><i class = "fas fa-clock"></i></span>
                <span>Buka</span>
                <span class = "text">{{ $contact->waktu }}</span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="contact">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h4>Hubungi Kami</h4>
                    <p>Jangan ragu untuk menghubungi kami jika ada pertanyaan atau masalah. Kami siap membantu Anda kapan saja.</p>
                    <div class="contact-info-wa">
                      <a href="https://wa.me/{{ $contact->nomor }}" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h4 class="mt-2">Cek Resi</h4>
                    <input type="number" class="form-control" name="" id="" placeholder="Masukkan nomor resi yang diberikan">
                    <button class="btn btn-primary px-5 mt-2" type="submit">Cek</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
                <h4 class="text-center">Google Map</h4>
                <iframe src="{{ $contact->UrlGoogleMap }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
</div>
