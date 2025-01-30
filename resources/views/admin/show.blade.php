@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header bg-dark text-white text-center">
            <h1 class="m-0">Perfume Details</h1>
        </div>
        <div class="card-body">
            @if($perfume)
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        @if (Str::startsWith($perfume->image, 'http'))
                            <img src="{{ $perfume->image }}" alt="{{ $perfume->name }}" class="img-fluid rounded shadow-sm">
                        @else
                            <img src="{{ asset('storage/' . $perfume->image) }}" alt="{{ $perfume->name }}" class="img-fluid rounded shadow-sm">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-primary">{{ $perfume->name }}</h2>
                        <p class="text-muted mb-2"><strong>Brand:</strong> {{ $perfume->brand }}</p>
                        <p class="text-muted mb-2"><strong>Price:</strong> <span class="badge bg-success">{{ $perfume->price }} €</span></p>
                        <p class="text-muted"><strong>Description:</strong> {{ $perfume->description }}</p>
                        
                        <div class="mt-3">
                            <a href="{{ route('admin.perfumes.edit', $perfume->id) }}" class="btn btn-warning me-2">
                                <i class="fa-solid fa-pen"></i> Edit
                            </a>
                            <form action="{{ route('admin.perfumes.destroy', $perfume->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo profumo?')">
                                    <i class="fa-solid fa-trash-can"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <p class="text-center text-danger">The product doesn't exist</p>
            @endif
        </div>
    </div>
</div>
@endsection
