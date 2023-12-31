@extends('layouts.auth') @section('content')
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <a href="/">
                        <img src="https://media.istockphoto.com/id/1141244133/id/vektor/perbaikan-komputer-logo-komputer-digital-vektor-layanan-perbaikan-simbol.jpg?s=170667a&w=0&k=20&c=qi2rBC4ZP8h5SqAVlGBHlrJxkYJQlyA9dzoogLLpDm4=" alt="Logo" width="100" />
                    </a>
                </div>
                <p class="login-box-msg">Halaman Ganti Password</p>

                <form action="{{ route('ganti-password.update',request()->session()->get('user')['id']) }}" method="post">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" placeholder="Password Lama">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @if (session()->has('password_error'))
                            <span class="text-danger small">{{ session()->get('password_error') }}</span>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="new_password" class="form-control" placeholder="Password Baru">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" name="confirm_new_password" class="form-control"
                                placeholder="Konfirmasi Password Baru">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @if (session()->has('password_nosame'))
                            <span class="text-danger small">{{ session()->get('password_nosame') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn bg-navy btn-block">Ubah password</button>
                            <a href="{{ url()->previous() }}" class="btn btn-dark btn-block">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
