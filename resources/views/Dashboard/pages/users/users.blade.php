@extends('Dashboard.layout.master')
@section('title', 'Kullanıcılar')
@section('content')
    <div class="col-sm-12 card">
        <div class="card-header">
            <h4>Kullanıcılar</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="usersTable" class="table">
                    <thead>
                        <tr>
                            <th>E-Posta</th>
                            <th>İsim Soyisim</th>
                            <th>Durum</th>
                            <th>Tip</th>
                            <th>İşlemler</th>
                            <th>Oluşturulma tarihi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name_surname }}</td>
                                <td>
                                    @if ($user->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-danger">Pasif</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($user->is_admin)
                                        <span class="badge bg-success">Admin</span>
                                    @else
                                        <span class="badge bg-danger">Kullanıcı</span>
                                    @endif
                                </td>
                                <td style="min-width:400px">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="{{ url("/dashboard/users/$user->user_id/edit") }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fa-solid fa-pen-to-square"></i> Düzenle
                                            </a>
                                        </li>
                                        <li class="nav-item ms-2">
                                            <a href="{{ url("/dashboard/users/$user->user_id/change-password") }}"
                                                class="btn btn-sm btn-info">
                                                <i class="fa-solid fa-lock"></i>
                                                Şifre Değiştir
                                            </a>
                                        </li>
                                        <li class="nav-item ms-2">
                                            <button type="button" class="btn btn-sm btn-danger list-delete-item"
                                                data-url="{{ url("/dashboard/users/$user->user_id") }}">
                                                <i class="fa-solid fa-trash"></i> Sil
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $('table#usersTable').DataTable();
        });
    </script>
@endpush
