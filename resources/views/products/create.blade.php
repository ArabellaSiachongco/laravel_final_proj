@extends('layouts.app')

@section('content')
    <div class="w-full max-w-xs mx-auto mt-10">
        <form action="{{ route('products.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">🛍️ Create a New Product</h1>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Product Name</label>
                <input type="text" id="name" name="name" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <div class="mb-6">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                <input type="number" id="price" name="price" step="0.01" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Create Product
                </button>
            </div>
        </form>

        <p class="text-center text-gray-500 text-xs">
            &copy;2025 Your Company. All rights reserved.
        </p>
    </div>
@endsection
