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
                    {{-- <p>Members: <strong>123</strong></p> --}}
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
        <div class="col-md-6 col-lg-3">
            <div class="card bg-dark text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">New Card</h5>
                    <p>Additional content here</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2: Member Progress and Activity Log -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card bg-dark text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Member Progress</h5>
                    <div style="height: 300px;">
                        <canvas id="memberProgressChart"></canvas>
                    </div>
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
                    <p>Platinum: <strong>{{ $platinumCount }}</strong></p>
                    <p>Gold: <strong>{{ $goldCount }}</strong></p>
                    <p>Free: <strong>{{ $freeCount }}</strong></p>
                    {{-- <p>Platinum: <strong>123</strong></p>
                    <p>Gold: <strong>123</strong></p>
                    <p>Free: <strong>123</strong></p> --}}
                    <div style="height: 250px;">
                        <canvas id="packageChart"></canvas>
                    </div>
                    <!-- Legend -->
                    <div class="mt-3">
                        <span class="badge" style="background-color: #6c63ff; color: white;">Platinum</span>
                        <span class="badge" style="background-color: #ff8a65; color: white;">Gold</span>
                        <span class="badge" style="background-color: #ffc107; color: black;">Free</span>
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

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Destroy existing charts if they exist
    if (window.memberProgressChartInstance) {
        window.memberProgressChartInstance.destroy();
    }
    if (window.packageChartInstance) {
        window.packageChartInstance.destroy();
    }

    // Member Progress Chart
    const progressCtx = document.getElementById('memberProgressChart').getContext('2d');
    window.memberProgressChartInstance = new Chart(progressCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Direct',
                data: [50, 60, 70, 80, 90, 100, 110, 100, 90, 80, 70, 60],
                backgroundColor: '#6c63ff',
            }, {
                label: 'Organic',
                data: [30, 40, 50, 60, 70, 80, 90, 80, 70, 60, 50, 40],
                backgroundColor: '#ff8a65',
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            }
        }
    });

// Package Chart
const packageCtx = document.getElementById('packageChart').getContext('2d');
    window.packageChartInstance = new Chart(packageCtx, {
        type: 'bar',
        data: {
            labels: ['Platinum', 'Gold', 'Free'],
            datasets: [{
                data: [{{ $platinumCount }}, {{ $goldCount }}, {{ $freeCount }}],
                backgroundColor: ['#6c63ff', '#ff8a65', '#ffc107'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false // Menghilangkan legenda
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: 'white'
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                },
                y: {
                    ticks: {
                        color: 'white'
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                }
            }
        }
    });
});
</script>
@endpush
