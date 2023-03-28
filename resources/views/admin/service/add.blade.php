<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset ($service))
                <form action="/admin/service/{{ $service->id }}" method="POST">
                    @method('PUT')
                @else
                <form action="/admin/service" method="POST">
                @endif
                    @csrf
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
                        <label for="">Deksripsi</label>
                        <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{ isset($service) ? $service->desc : old('desc')}}</textarea>
                        @error('desc')
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
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
