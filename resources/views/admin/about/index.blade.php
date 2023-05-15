<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/about/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Perusahaan</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Perusahaan" value="{{ isset($about) ? $about->name : old('name')}}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar')}}">
                                @error('gambar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                @if (isset($about))
                                    <img src="/{{ $about->gambar }}" width="100%" class="mt-2" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Deksripsi</label>
                                <textarea type="text" name="desc" class="form-control" id="summernote" >{{isset($about) ? $about->desc : '' }}</textarea>
                                @error('desc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk mr-2"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
