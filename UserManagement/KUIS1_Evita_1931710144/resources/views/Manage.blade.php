@extends('layouts.Master')
@section('title', 'Manage')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar Artikel </h3>
        </div>
        
        </br>
        </br>  
        <div class="card body">    
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Negara</th>
                    <th>Benua</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($article as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->title}}</td>
                        <td>{{$a->continent}}</td>
                        <td>{{$a->created_at}}</td>
                        <td>
                            <a href="article/edit/{{ $a->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#87CEEB">Edit</a> &nbsp &nbsp
                            <a href="article/delete/{{ $a->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#FF7F50">Hapus</a>
                        <td>
                    </tr>
                    @endforeach
                 </tbody>
            </table>
        </div>
        <br>
        <a href="manage/add" class="btn btn-primary">Tambah Data</a>
        <br>


    <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
      
<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-append">
      <a href="https://www.google.com">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
          <a href="https://www.liputan6.com/lifestyle/read/2264201/6-destinasi-wisata-keluarga-terindah-di-dunia">With Family</a>
          </li>
          <li>
            <a href="https://www.skyscanner.co.id/berita/10-destinasi-seru-untuk-liburan-bersama-teman-teman">With Best Friend</a>
          </li>
          <li>
            <a href="https://www.idntimes.com/travel/destination/reza-iqbal/20-wisata-paling-romantis-di-dunia/3">With Lover</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="https://tempatwisataunik.com/wisata-dunia/wisata-pantai-terbaik-dunia">Beach</a>
          </li>
          <li>
            <a href="https://travel.kompas.com/read/2019/09/16/060100227/15-tempat-wisata-di-malang-dan-batu-cocok-untuk-keluarga?page=all">Park</a>
          </li>
          <li>
            <a href="https://tempatwisataunik.com/wisata-dunia/wisata-gunung-dunia">Mountain</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
<h5 class="card-header">Warning!!!</h5>
  <div class="card-body">
  if you want to travel, then you have to work hard so that what you dream can be achieved without causing trouble to other people. Spirit, effort will not betray results!
  </div>
</div>
</div>

    </div>
    <!-- /.row -->

  </div>
    </div>
</div>    
@endsection