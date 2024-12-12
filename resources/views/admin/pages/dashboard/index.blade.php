@extends('admin.layouts.index')

@section('title', 'Dashboard Management')

@section('content')
    <div class="container-fluid">
        <!-- Row 1: Statistics -->
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Statistics</h5>
                        <p>Members: <strong>{{ $memberCount }}</strong></p>
                        <p>Certified: <strong>7,929</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Name Quotient</h5>
                        <p>Character Reader</p>
                        <div class="d-flex">
                            <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                            <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                            <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                            <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Avatar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Inventory</h5>
                        <p>Voucher</p>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Book</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Baru -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">New Card</h5>
                        <p>Additional content here</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Row 2: Member Progress -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Member Progress</h5>
                        <!-- Chart Container -->
                        <canvas id="memberProgressChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Activity Log</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark text-white">Member Add - Saidah Mulyanti (07 May, 2022)</li>
                            <li class="list-group-item bg-dark text-white">Mail sent to HR and Admin (06 May, 2022)</li>
                            <li class="list-group-item bg-dark text-white">Certificate Printing (01 May, 2022)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Member Level and Stats -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Member by Level</h5>
                        <p>Platinum</p>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Gold</p>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Free</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 15%;" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Followers</h5>
                        <p class="h3">31.6K</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Referrals</h5>
                        <p class="h3">1,900</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('memberProgressChart').getContext('2d');
    const memberProgressChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                    label: 'Direct',
                    data: [50, 60, 70, 80, 90, 100, 110, 100, 90, 80, 70, 60],
                    backgroundColor: '#6c63ff',
                },
                {
                    label: 'Organic',
                    data: [30, 40, 50, 60, 70, 80, 90, 80, 70, 60, 50, 40],
                    backgroundColor: '#ff8a65',
                }
            ]
        },
        options: {
            responsive: true,
        }
    });
</script>
