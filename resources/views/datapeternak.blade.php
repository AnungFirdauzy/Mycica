@extends('layouts.main')
@section('container')

    <div class="container pt-5">
        <h1>Data peternak</h1>
        <div class="container">
            <div class="row">
                <div class="col border"><strong>ID</strong></div>
                <div class="col border"><strong>Nama Petrnakan</strong></div>
                <div class="col border"><strong>Nama</strong></div>
                <div class="col border"><strong>Nik</strong></div>
                <div class="col border"><strong>Npwp</strong></div>
                <div class="col border"><strong>Email</strong></div>
            </div>
            @foreach ($data as $data)
            <a href="/detail/peternak/{{ $data->id }}" style="text-decoration: none; color:black;"><div class="row">
                <div class="col border">{{ $data->id }}</div>
                <div class="col border">{{ $data->company }}</div>
                <div class="col border">{{ $data->ownerName }}</div>
                <div class="col border">{{ $data->nik }}</div>
                <div class="col border">{{ $data->npwp }}</div>
                <div class="col border">{{ $data->email }}</div>
            </div></a>
            @endforeach
        </div>
        <table>
            {{-- <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Email</th>
            </tr>
            @foreach ($data as $data)
            <a href=""><tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->email }}</td>
            </tr></a>
            @endforeach
        </table> --}}
    </div>
    
@endsection
@section('script')
@endsection