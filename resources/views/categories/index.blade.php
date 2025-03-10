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
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        
        <tr>
            <td>{{$category->category_name}}</td>
            <td>Leigh Bardugo</td>
            <td>Fantasy</td>
        </tr>
        @endforeach
    </tbody>
</table>

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
