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
                <!-- Profile Picture -->
                <img src="{{ asset('assets/images/user1.jpg') }}" 
                     alt="Profile Picture" 
                     class="img-thumbnail rounded-circle" 
                     style="width: 150px; cursor: pointer;" 
                     data-bs-toggle="modal" 
                     data-bs-target="#profileDetailModal">

                <h3 class="mt-3">Name</h3>
                <p class="text-muted">Email</p>

                <!-- Optional: Additional summary information -->
                <p>Your Bio Here</p>
            </div>
        </div>

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
                            <li class="list-group-item"><strong>Name:</strong> Name</li>
                            <li class="list-group-item"><strong>Email:</strong> Email@mail.com</li>
                            <li class="list-group-item"><strong>Phone:</strong> 087654321 or Not Provided</li>
                            <li class="list-group-item"><strong>Address:</strong> Address or Not Provided</li>
                            <li class="list-group-item"><strong>Joined At:</strong> Date d-M-Y</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
