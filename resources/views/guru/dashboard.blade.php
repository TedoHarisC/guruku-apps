@extends('guru.layouts.app')

@section('content')
    <!-- Heading -->
    @include('guru.dashboard.section.bukaKelas')
    
    <!-- List Kelas yang di buka -->
    @include('guru.dashboard.section.list')

    <!-- List Murid yang pesan -->
    @include('guru.dashboard.section.listMurid')
@endsection