@extends('admin.layouts.index')

@section('title', 'User Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User List</h4>
                    <form action="{{ route('user.index') }}" method="GET">
                        <!-- Kirimkan ke route user.index -->
                        <div class="input-group search-area">
                            <input type="text" name="search" class="form-control" placeholder="Search here..."
                                value="{{ request('search') }}">
                            <!-- Isi input dengan kata kunci pencarian -->
                            <span class="input-group-text">
                                <button type="submit" style="border: none; background: none;">
                                    <i class="flaticon-381-search-2"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Role ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Email Verified At</th>
                                    <th>Action - Verify Email</th> <!-- Kolom baru -->
                                    <th>Google ID</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Referral ID</th>
                                    <th>Referral Code</th>
                                    <th>Referral From</th>
                                    <th>Nomor HP</th>
                                    <th>Alamat</th>
                                    <th>Kode Voucher</th>
                                    <th>Kode Paket</th>
                                    <th>Expired</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->role_id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->email_verified_at ?? '-' }}</td>
                                        <td>
                                            @if (!$user->email_verified_at)
                                                <form action="{{ route('user.verify.email', $user->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Mark Verified
                                                    </button>
                                                </form>
                                            @else
                                                <span class="badge bg-success">Already Verified</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->google_id ?? '-' }}</td>
                                        <td>{{ $user->tanggal_lahir ?? '-' }}</td>
                                        <td>{{ $user->referal_id ?? '-' }}</td>
                                        <td>{{ $user->referal_code ?? '-' }}</td>
                                        <td>{{ $user->referal_from ?? '-' }}</td>
                                        <td>{{ $user->nomor_hp ?? '-' }}</td>
                                        <td>{{ $user->alamat ?? '-' }}</td>
                                        <td>{{ $user->kode_voucher ?? '-' }}</td>
                                        <td>{{ $user->kode_paket ?? '-' }}</td>
                                        <td>{{ $user->expired ?? '-' }}</td>
                                        <td>
                                            <a href="{{ route('user.edit', $user->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="18" class="text-center">No Users Found</td>
                                    </tr>
                                @endforelse
                            </tbody>


                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $users->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
