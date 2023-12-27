@extends('layouts.appUser')


<style>
  /* Menambahkan spasi ke bawah menggunakan margin-top */
  .col-lg-8 {
    margin-top: 200px; /* Atur nilai sesuai dengan kebutuhan Anda */
  }
 
  
</style>


<div class="col-lg-8">
    <form method="POST" enctype="multipart/form-data" action="{{ route('createvendor.store') }}">
        @csrf
        <div>
            <h1 class="h2">POSTING RESTO ANDA!</h1>
        </div>
        <div class="form-group">
            <label for="title">Nama Restoran</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="city">Kota</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="image_path">Gambar</label>
            <input type="file" class="form-control-file" id="image_path" name="image_path">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
