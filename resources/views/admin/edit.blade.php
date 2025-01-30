@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header bg-dark text-white text-center">
            <h1 class="m-0">Edit Product</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.perfumes.update', $perfume->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3 text-center">
                    <label class="form-label">Current Image</label>
                    <div>
                        @if ($perfume->image)
                            @if (Str::startsWith($perfume->image, 'http'))
                                <img src="{{ $perfume->image }}" alt="{{ $perfume->name }}" class="img-fluid rounded shadow-sm" width="200">
                            @else
                                <img src="{{ asset('storage/' . $perfume->image) }}" alt="{{ $perfume->name }}" class="img-fluid rounded shadow-sm" width="200">
                            @endif
                        @else
                            <p class="text-muted">No image available</p>
                        @endif
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">New Image (optional)</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $perfume->name) }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $perfume->brand) }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Price (€)</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $perfume->price) }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $perfume->description) }}</textarea>
                </div>
                
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <a href="{{ route('admin.perfumes.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
