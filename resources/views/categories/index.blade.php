<!-- content.blade.php -->
@extends('template.main')

@section('content')

<!-- Header Row -->
<div class="row d-flex justify-content-center">
    <div class="col-md-9 col-lg-12 col-xl-12 text-center grid-item fw-bold fs-3">
        Inventory
    </div>
</div>

<!-- Large Screen Table Format -->
<div class="d-none d-md-block">
    <div class="row justify-content-center">
        <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Title</div>
        <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Author</div>
        <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Genre</div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Six of Crows</div>
        <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Leigh Bardugo</div>
        <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Fantasy</div>
    </div>
</div>

<!-- Small Screen Table Format (Separate Tables) -->
<div class="d-block d-md-none">
    <div class="row">
        <div class="col-12 text-center grid-item fw-bold">Title</div>
        <div class="col-12 text-center grid-item">Six of Crows</div>
    </div>
    <div class="row">
        <div class="col-12 text-center grid-item fw-bold">Author</div>
        <div class="col-12 text-center grid-item">Leigh Bardugo</div>
    </div>
    <div class="row">
        <div class="col-12 text-center grid-item fw-bold">Genre</div>
        <div class="col-12 text-center grid-item">Fantasy</div>
    </div>
</div>

@endsection
