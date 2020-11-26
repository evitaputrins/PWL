@extends('layouts.Master')
@section('title','add')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3>Daftar Artikel</h3>
        </div>
        </br>
        </br>
        <form action="/create" method="post" enctype="multipart/form-data">

                @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control"required="required" name="title" placeholder="Add Title Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="continent">Continent</label>
                        <input type="text" class="form-control"required="required" name="continent" placeholder="Add Content Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control"required="required" name="content" placeholder="Add Content Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="imageurl">Image Url</label>
                        <input type="file" class="form-control"required="required" name="image" placeholder="Link Image Here"></br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah Data</button><br><br>
                </form>
</div>
</div>

@endsection