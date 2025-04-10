@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 bg-white shadow rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Product List</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-4 text-green-500 p-2 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Check if Products Exist -->
        @if($products->isEmpty())
            <p class="text-gray-600">No products available.</p>
        @else
            <!-- Table -->
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr>
                        <th class="text-center border px-4 py-2 text-sm font-medium text-gray-700">Product Name</th>
                        <th class="border px-4 py-2 text-center text-sm font-medium text-gray-700">Description</th>
                        <th class="border px-4 py-2 text-center text-sm font-medium text-gray-700">Price</th>
                        <th class="border px-4 py-2 text-center text-sm font-medium text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 text-sm text-gray-800">{{ $product->name }}</td>
                            <td class="border px-4 py-2 text-sm text-gray-600">{{ $product->description }}</td>
                            <td class="border px-4 py-2 text-sm text-gray-600">${{ number_format($product->price, 2) }}</td>
                            <td class="border px-4 py-2 text-sm text-center">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="text-blue-500 hover:text-blue-700">Edit</a>
                                &nbsp;&nbsp;&nbsp;
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <!-- Add New Product Button -->
        <div class="mt-6 text-right">
            <a href="{{ route('products.create') }}"
                class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Add New Product
            </a>
        </div>
    </div>
@endsection