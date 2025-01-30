@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <h1>Index of products</h1>
    
            <div>
                <a href="{{ route('admin.perfumes.create') }}" class="btn btn-outline-info">
                    <i class="fa-icon fa-plus"></i> New product
                </a>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perfumes as $perfume)
                    <tr>
                        <td>{{ $perfume->id }}</td>
                        <td>
                            @if (Str::startsWith($perfume->image, 'http'))
                                {{-- for seeders img --}}
                                <img src="{{ $perfume->image }}" alt="Immagine di {{ $perfume->name }}" class="index-product-img">
                            @else
                                {{-- for uploaded img --}}
                                <img src="{{ asset('storage/' . $perfume->image) }}" alt="Immagine di {{ $perfume->name }}" class="index-product-img">
                            @endif
                        </td>
                        <td>{{ $perfume->name }}</td>
                        <td>{{ $perfume->brand }}</td>
                        <td>{{ $perfume->price }} €</td>
                        <td>{{ $perfume->description }}</td>
                        <td class="text-center align-middle">
                            <a href="{{ route('admin.perfumes.show', $perfume->id) }}" class="btn btn-outline-info">
                                <i class="fa-solid fa-eye"></i> Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection