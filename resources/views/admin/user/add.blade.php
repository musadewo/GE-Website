<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset ($user))
                <form action="/admin/user/{{ $user->id }}" method="POST">
                    @method('PUT')
                @else
                <form action="/admin/user" method="POST">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{ isset($user) ? $user->name : old('name')}}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ isset($user) ? $user->username : old('username')}}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ isset($user) ? $user->email : old('email')}}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password')}}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Re-Password</label>
                        <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror" placeholder="Password" value="{{ old('re_password')}}">
                        @error('re_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk mr-2"></i>Simpan</button>
                    <a href="/admin/user" class="btn btn-primary ml-2"><i class="fa-solid fa-arrow-left mr-2"></i>Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
