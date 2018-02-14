@extends('template')
@section('main')
<div id ="siswa">
    <h2>Siswa</h2>
    {{--  <#?php if (!empty($siswa)):?>
    <ul>
        <#?php foreach($siswa as $anak): ?>
        <li><#?= $anak ?>
        <#?php endforeach ?>
    </ul>
<#?php else: ?>
    <p>Tidak ada data siswa</p>
<#?php endif ?>  --}}
@if (!empty($siswa))
    <ul>
        <?php foreach($siswa as $anak): ?>
        <li><?= $anak ?></li>
        <?php endforeach ?>
    </ul>
    @else 
        <p>Tidak ada siswa</p>
    @endif
@stop
@section('footer')
    <div id="footer">
            <p>&copy;2018 laravel by Sugeng Kurniawan </p>
    </div>
@stop
    
</div>