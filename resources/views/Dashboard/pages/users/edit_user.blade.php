@extends('Dashboard.layout.master')
@section('title', 'Kullanıcı Düzenle')
@section('content')
    <div class="col-sm-12 card">
        <div class="card-header">
            <h4>Kullanıcı Düzenle</h4>
        </div>
        <div class="card-body">
            <form action="{{ url("/dashboard/users/$user->user_id") }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <label for="name_surname" class="form-label">İsim Soyisim</label>
                        <input id="name_surname" type="text"
                            class="form-control {{ $errors->has('name_surname') ? 'is-invalid' : '' }}" name="name_surname"
                            value="{{ old('name_surname', $user->name_surname) }}">
                        @error('name_surname')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="email" class="form-label">E-Posta</label>
                        <input id="email" type="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                            value="{{ old('email', $user->email) }}">
                        @error('email')
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
