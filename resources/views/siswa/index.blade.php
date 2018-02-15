@extends('template')
@section('main')
<div id ="siswa">
    <h2>Siswa</h2>

@if (!empty($siswa_list))
    <table class="table">
        <thead>
            <tr>
                <td>NISN</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Jenis Kelamin</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($siswa_list as $siswa): ?>
            <tr>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->nama_siswa }}</td>
                <td>{{ $siswa->tanggal_lahir }}</td>
                <td>{{ $siswa->jenis_kelamin }}</td>
                <td>{{ link_to('siswa/'.$siswa->id,'Detail',['class' => 'btn btn-success btn-sm'])}}</td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @else
        <p>Tidak ada data</p>
    @endif
    <div class="pull-left">
        <strong>Jumlah Siswa : {{ $jumlah_siswa}}</strong>    
    </div>
</div>
@stop
@section('footer')
    <div id="footer">
            <p>&copy;2018 laravel by Sugeng Kurniawan </p>
    </div>
@stop
    
