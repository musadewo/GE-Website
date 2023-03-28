<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/service/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Deksripsi</td>
                        <td>Gambar</td>
                    </tr>
                    @foreach ($service as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title}}</td>
                        <td>{{ $item->desc}}</td>
                        <td><img src="/{{ $item->gambar }}" width="200px" alt=""></td>
                        <td>
                            <div class="d-flex">
                                <a href="/admin/service/{{ $item->id }}/edit" class="btn btn-success mx-2"><i class="fas fa-edit"></i> Edit</a>
                                <form action="/admin/service/{{ $item->id }}" method="POST">
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
