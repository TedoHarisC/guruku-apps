@extends('cariGuru.app')

@section('content')
    <!-- Heading -->
    @include('cariGuru.section.bukaKelas')
    
    <!-- List Kelas yang di buka -->
    @include('cariGuru.section.list')

    <!-- List Murid yang pesan -->
    @include('cariGuru.section.listMurid')
@endsection