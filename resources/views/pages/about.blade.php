@extends('layout.master')

@section('content')
    <div class="alert alert-info">
        <h3>Perkenalkan</h3>
        <p>Nama: {{ $nama }}</p>
        <p>Kelas: {{ $kelas }}</p>
        <p>NIM: {{ $nim }}</p>
    </div>
@endsection