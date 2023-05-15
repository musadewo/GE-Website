<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/banner/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Headline</label>
                                <input type="text" name="headline" class="form-control @error('headline') is-invalid @enderror" placeholder="Headline" value="{{ isset($banner) ? $banner->headline : old('headline')}}">
                                @error('headline')
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
                                @if (isset($banner))
                                    <img src="/{{ $banner->gambar }}" width="100%" class="mt-2" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Deksripsi</label>
                                <textarea type="text" name="desc" class="form-control" id="summernote" >{{isset($banner) ? $banner->desc : '' }}</textarea>
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
