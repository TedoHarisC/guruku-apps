@extends('murid.layouts.app')

@section('content')
<!-- <div id="gurus"> -->
    <!-- Halaman Nav (Sorting) -->
    @include('murid.cariGuru.section.navigation')
    <!-- Halaman Searching Guru -->
    @include('murid.cariGuru.section.listGuru')
<!-- </div> -->
@endsection