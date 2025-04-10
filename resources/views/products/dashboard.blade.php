{{-- resources/views/welcome.blade.php
@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-8">Product Catalog huhuhuh</h1>

        @auth
            <!-- Link to create a new product -->
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white p-2 rounded mb-4 inline-block">
                Add New Product
            </a>
        @endauth

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($products as $product)
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                    <p class="text-gray-600">${{ $product->price }}</p>
                    <p class="text-sm mt-2 text-gray-700">{{ $product->description }}</p>
                </div>
            @empty
                <p>No products available.</p>
            @endforelse
        </div>
    </div>
@endsection --}}
