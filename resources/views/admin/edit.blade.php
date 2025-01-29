@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit product</h1>

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

        {{-- Name --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $perfume->name) }}" required>
        </div>

        {{-- Brand --}}
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $perfume->brand) }}" required>
        </div>

        {{-- Price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price (€)</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $perfume->price) }}" required>
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $perfume->description) }}</textarea>
        </div>

        {{-- Current image --}}
        <div class="mb-3">
            <label class="form-label">Current image</label>
            <div>
                @if ($perfume->image)
                    <img src="{{ asset('storage/' . $perfume->image) }}" alt="Current image" width="100">
                @else
                    <p>No image available</p>
                @endif
            </div>
        </div>

        {{-- Upload new image --}}
        <div class="mb-3">
            <label for="image" class="form-label">New image (optional)</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.perfumes.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
