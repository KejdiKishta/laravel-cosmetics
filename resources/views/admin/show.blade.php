@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Details</h1>
    
    @if($perfume)
        <div class="perfume-details">
            <div class="row">
                <div class="col-md-4">
                    @if (Str::startsWith($perfume->image, 'http'))
                                {{-- Seeders img --}}
                                <img src="{{ $perfume->image }}" alt="{{ $perfume->name }}" class="img-fluid">
                            @else
                                {{-- Uploaded img --}}
                                <img src="{{ asset('storage/' . $perfume->image) }}" alt="{{ $perfume->name }}" class="img-fluid">
                            @endif
                </div>
                <div class="col-md-8">
                    <h2>{{ $perfume->name }}</h2>
                    <p>Brand: {{ $perfume->brand }}</p>
                    <p>Price: {{ $perfume->price }} €</p>
                    <p>Description: {{ $perfume->description }}</p>
                    
                    {{-- Edit --}}
                    <a href="{{ route('admin.perfumes.edit', $perfume->id) }}" class="btn btn-outline-warning">
                        <i class="fa-solid fa-pen"></i> Edit
                    </a>
                    {{-- Delete --}}
                    <form action="{{ route('admin.perfumes.destroy', $perfume->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Sei sicuro di voler eliminare questo profumo?')">
                            <i class="fa-solid fa-trash-can"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <p>The product doesn't exist</p>
    @endif
</div>
@endsection