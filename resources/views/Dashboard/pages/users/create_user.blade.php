@extends('Dashboard.layout.master')
@section('title', 'Kullanıcı Oluştur')
@section('content')
    <div class="col-sm-12 card">
        <div class="card-header">
            <h4>Kullanıcı Oluştur</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <label for="name_surname" class="form-label">İsim Soyisim</label>
                        <input id="name_surname" type="text"
                            class="form-control {{ $errors->has('name_surname') ? 'is-invalid' : '' }}" name="name_surname"
                            value="{{ old('name_surname') }}">
                        @error('name_surname')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="email" class="form-label">E-Posta</label>
                        <input id="email" type="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="password" class="form-label">Şifre</label>
                        <input id="password" type="password"
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password"
                            value="{{ old('password') }}">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-12 mb-3">
                        <label for="password_confirmation" class="form-label">Şifre Doğrulama</label>
                        <input id="password_confirmation" type="password"
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                            name="password_confirmation" value="{{ old('password_confirmation') }}">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="is_active">Aktif</label>
                        <input id="is_active" type="checkbox" name="is_active" checked="checked" value="1">
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="is_admin">Admin</label>
                        <input id="is_admin" type="checkbox" name="is_admin" value="1">
                    </div>
                    <div class="col-sm-12">
                        <button class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script></script>
@endpush
