@extends('Dashboard.layout.master')
@section('title', 'Kullanıcının şifresini değiştir')
@section('content')
    <div class="col-sm-12 card">
        <div class="card-header">
            <h4>Kullanıcının şifresini değiştir</h4>
        </div>
        <div class="card-body">
            <form action="{{ url("/dashboard/users/$user->user_id/change-password") }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                <div class="row">
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
