@extends('admin.layouts.index')

@section('title', 'User Profile')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2>User Profile</h2>
            </div>
            <div class="card-body text-center">
                @php
                $firstProfile = $profile->first(); // Ambil elemen pertama
                @endphp

                @if($firstProfile)
                <!-- Profile Picture -->
                <img src="{{ asset('assets/images/user1.jpg') }}" 
                alt="Profile Picture" 
                class="img-thumbnail rounded-circle" 
                style="width: 150px; cursor: pointer;" 
                data-bs-toggle="modal" 
                data-bs-target="#profileDetailModal">
                <h3 class="mt-3">{{$firstProfile->name}}</h3>
                <p class="text-muted">{{$firstProfile->email}}</p>
                
                <!-- Modal for Profile Details -->
                <div class="modal fade" id="profileDetailModal" tabindex="-1" aria-labelledby="profileDetailModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="profileDetailModalLabel">Profile Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('assets/images/user1.jpg') }}" 
                                    alt="Profile Picture" 
                                    class="img-thumbnail rounded-circle" 
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Name:</strong> {{$firstProfile->name}}</li>
                                    <li class="list-group-item"><strong>Email:</strong> {{$firstProfile->email}}</li>
                                    <li class="list-group-item"><strong>Phone:</strong> {{$firstProfile->nomor_hp}}</li>
                                    <li class="list-group-item"><strong>Address:</strong> {{$firstProfile->alamat}}</li>
                                    <li class="list-group-item"><strong>Birth Date:</strong> {{$firstProfile->tanggal_lahir}}</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <p>No profiles found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
