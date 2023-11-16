@extends('layout')

@section('content')
    <h1 class="mb-0">Add Book</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="col">
                <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

