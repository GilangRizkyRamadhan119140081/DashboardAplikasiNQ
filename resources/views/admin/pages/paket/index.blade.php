@extends('admin.layouts.index')

@section('title', 'Paket Management')

@section('content')
<div class="layout-px-spacing">
    
    <div class="middle-content container-xxl p-0">
        <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Paket List</h4>
                    </div>
        <div class="row">
                <div class="statbox widget box box-shadow">
                        <div class="table-responsive">
                        <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Paket ID</th>
                                    <th>Kode Paket</th>
                                    <th>Hari</th>
                                    <th>Harga</th>
                                    <th>Deskripsi 1</th>
                                    <th>Deskripsi 2</th>
                                    <th>Deskripsi 3</th>
                                    <th>Deskripsi 4</th>
                                    <th>Deskripsi 5</th>
                                    <th>Deskripsi 6</th>
                                    <th>Deskripsi 7</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @php $no = 0; @endphp
                                @foreach ($detail_paket as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['id_paket'] }}</td>
                                        <td>{{ $item['kode_paket'] }}</td>
                                        <td>{{ $item['hari'] }}</td>
                                        <td>{{ $item['harga'] }}</td>
                                        <td>{{ $item['deskripsi1'] }}</td>
                                        <td>{{ $item['deskripsi2'] }}</td>
                                        <td>{{ $item['deskripsi3'] }}</td>
                                        <td>{{ $item['deskripsi4'] }}</td>
                                        <td>{{ $item['deskripsi5'] }}</td>
                                        <td>{{ $item['deskripsi6'] }}</td>
                                        <td>{{ $item['deskripsi7'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                        {{-- <div class="d-flex justify-content-center">{{ $detail_paket->links() }}</div> --}}
                </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection
