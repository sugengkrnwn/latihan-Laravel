@extends('template')

@section('main')
<div class="siswa">
    <h2>Tambah Siswa</h2>
{!! Form::open(['url'=> 'siswa']) !!}
    <div class="form-group">
        {{--  <label for="nisn" class="control-label">NISN</label>
        <input name="nisn" id ="nisn" type="text" class="form-control">  --}}
{!! Form::label('nisn', 'NISN:', ['class' => 'control-label']) !!}
{!! Form::text('nisn', null, ['class' => 'form-control']) !!}        
    </div>
    <div class="form-group">
        {{--  <label for="nama_siswa" class="control-label">Nama</label>
        <input name="nama_siswa" id ="nama_siswa" type="text" class="form-control">  --}}
        {!! Form::label('nama_siswa', 'Nama:', ['class' => 'control-label']) !!}
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {{--  <label for="tanggal_lahir" class="control-label">Tgl Lahir</label>
        <input name="tanggal_lahir" id ="tanggal_lahir" type="date" class="form-control">  --}}
        {!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal_lahir', null, ['class' => 'form-control','id'=> 'tanggal_lahir']) !!}
    </div>
    <div class="form-group">
        {{--  <label for="jenis_kelamin" class="control-label">Jenis kelamin</label>
        <div class="radio">
            <label><input name="jenis_kelamin" type="radio" value="L" id="jenis_kelamin">Laki-Laki </label>
        </div>
        <div class="radio">
            <label><input name="jenis_kelamin" type="radio" value="P" id="jenis_kelamin">Perempuan </label>
        </div>  --}}
        {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin','L') !!} Laki-laki</label>
        </div>
        <div class="radio">
                <label>{!! Form::radio('jenis_kelamin','P') !!} Perempuan</label>
        </div>
    </div>
    <div class="form-group">
    {{--  <input class="btn btn-primary form-control" type="submit" value="Tambah Siswa">  --}}
    {!! Form::submit('Tambah Siswa', ['class'=> 'btn btn-primary form-control']) !!}    
    </div>

{!! Form::close() !!}
</div>
@stop

@section('footer')
    <div id="footer">
            <p>&copy;2018 laravel by Sugeng Kurniawan </p>
    </div>
@stop