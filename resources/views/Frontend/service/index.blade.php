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
                    <p class="text-center">{{ $item->title }}</p>
                    <p>{!! Illuminate\Support\Str::limit($item->desc, 30) !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
