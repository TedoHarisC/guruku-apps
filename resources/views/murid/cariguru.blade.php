@extends('murid.layouts.app')

@section('content')
    <!-- Halaman Nav (Sorting) -->
    @include('murid.cariGuru.section.navigation')
    <!-- Halaman Searching Guru -->
    @include('murid.cariGuru.section.listGuru')   
@endsection