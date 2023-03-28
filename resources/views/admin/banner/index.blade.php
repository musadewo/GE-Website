<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/banner/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Headline</td>
                        <td>Deksripsi</td>
                        <td>Gambar</td>
                    </tr>
                    @foreach ($banner as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->headline}}</td>
                        <td>{{ $item->desc}}</td>
                        <td><img src="/{{ $item->gambar }}" width="200px" alt=""></td>
                        <td>
                            <div class="d-flex">
                                <a href="/admin/banner/{{ $item->id }}/edit" class="btn btn-success mx-2"><i class="fas fa-edit"></i> Edit</a>
                                <form action="/admin/banner/{{ $item->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
