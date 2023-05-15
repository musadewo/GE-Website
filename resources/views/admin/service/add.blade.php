<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if (isset ($service))
                <form action="/admin/service/{{ $service->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @else
                    <form action="/admin/service" method="POST" enctype="multipart/form-data">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Usertitle" value="{{ isset($service) ? $service->title : old('title')}}">
                                    @error('title')
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
                                    @if (isset($service))
                                        <img src="/{{ $service->gambar }}" width="100%" class="mt-2" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Deksripsi</label>
                                    <textarea name="desc" id="summernote" class="form-control">{{ isset($service) ? $service->desc : old('desc')}}</textarea>
                                    @error('desc')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk mr-2"></i>Simpan</button>
                    <a href="/admin/service" class="btn btn-primary ml-2"><i class="fa-solid fa-arrow-left mr-2"></i>Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
