@extends('template')

@section('main')
<div class="siswa">
    <h2>Tambah Siswa</h2>
<form action="{{ url('siswa') }}"  method = "post">

    <div class="form-group">
        <label for="nisn" class="control-label">NISN</label>
        <input name="nisn" id ="nisn" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="nama_siswa" class="control-label">Nama</label>
        <input name="nama_siswa" id ="nama_siswa" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="tanggal_lahir" class="control-label">Tgl Lahir</label>
        <input name="tanggal_lahir" id ="tanggal_lahir" type="date" class="form-control">
    </div>
    <div class="form-group">
        <label for="jenis_kelamin" class="control-label">Jenis kelamin</label>
        <div class="radio">
            <label><input name="jenis_kelamin" type="radio" value="L" id="jenis_kelamin">Laki-Laki </label>
        </div>
        <div class="radio">
            <label><input name="jenis_kelamin" type="radio" value="P" id="jenis_kelamin">Perempuan </label>
        </div>
    </div>
    <div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Tambah Siswa">
    </div>
</form>
</div>
@stop

@section('footer')
    <div id="footer">
            <p>&copy;2018 laravel by Sugeng Kurniawan </p>
    </div>
@stop