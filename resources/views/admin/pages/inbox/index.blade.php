@extends('admin.layouts.index')

@section('title', 'Inbox Log')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2>Inbox Log</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Sender</th>
                                <th>Subject</th>
                                <th>Received At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Iterasi data inbox logs --}}
                            {{-- @forelse ($inboxLogs as $index => $log) --}}
                                <tr>
                                    <td>index</td>
                                    <td>sender1</td>
                                    <td>subject1</td>
                                    <td>dd-mm-yyyy</td>
                                    <td>
                                        <!-- Detail Button -->
                                        <a href="#" class="btn btn-primary btn-sm">
                                            View
                                        </a>
                                        <!-- Delete Button -->
                                        <form action="#" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this message?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            {{-- @empty --}}
                                <tr>
                                    <td colspan="5" class="text-center">No messages found.</td>
                                </tr>
                            {{-- @endforelse --}}
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-3">
                    {{-- {{ $inboxLogs->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
