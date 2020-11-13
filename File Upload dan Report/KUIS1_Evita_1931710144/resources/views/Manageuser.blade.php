@extends('layouts.Master')
@section('title', 'Manage User')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar User </h3>
        </div>
        
        </br>
        </br>  
        <div class="card body">    
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($user as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->created_at}}</td>
                        <td>
                            <a href="user/edit/{{ $a->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#87CEEB">Edit</a> &nbsp &nbsp
                            <a href="user/delete/{{ $a->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#FF7F50">Hapus</a>
                        <td>
                    </tr>
                    @endforeach
                 </tbody>
            </table>
        </div>
        <br>
        <a href="manageuser/add" class="btn btn-primary">Tambah Data</a>
        <br>
    </div>
</div>    
@endsection