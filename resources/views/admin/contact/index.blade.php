<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/contact/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nomor Telepon</label>
                                <input type="text" name="nomor" class="form-control @error('nomor') is-invalid @enderror" placeholder="Nomor Telepon" value="{{ isset($contact) ? $contact->nomor : old('nomor')}}">
                                @error('nomor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ isset($contact) ? $contact->email : old('email')}}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">URL Google Map</label>
                                <textarea type="text" name="UrlGoogleMap" class="form-control" id="" cols="30" rows="10" >{{isset($contact) ? $contact->UrlGoogleMap : '' }}</textarea>
                                @error('UrlGoogleMap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" value="{{ isset($contact) ? $contact->alamat : old('alamat')}}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Waktu Buka</label>
                                <input type="text" name="waktu" class="form-control @error('waktu') is-invalid @enderror" placeholder="Waktu Buka" value="{{ isset($contact) ? $contact->waktu : old('waktu')}}">
                                @error('waktu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Note :</label>
                                <p>Untuk URL Google Map hanya memasukkan HTTPS saja, tidak perlu semua nya.</p>
                                <p>Contoh : <br>
                                src="https://www.google.com/maps/embed?pb=!1m18!17.d106.867655!3d-6.Global%20Elektronik!"</p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk mr-2"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
