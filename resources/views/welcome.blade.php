<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-center mt-8 ">
    <div class="max-w-7xl mx-auto px-4 py-10">
        <img src="https://thumb.ac-illust.com/e2/e2cbae08aee6ed3c5fa742b33e936831_t.jpeg" alt="Logo" class="mx-auto mb-6">
        <h1 class="text-3xl font-bold mb-8">Welcome to Admin Dashboard</h1>

        @auth
            <!-- Link to create a new product -->
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white p-2 rounded mb-4 inline-block">
                Add New Product
            </a>
        @endauth

        {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($products as $product)
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                    <p class="text-gray-600">${{ $product->price }}</p>
                    <p class="text-sm mt-2 text-gray-700">{{ $product->description }}</p>
                </div>
            @empty
                <p>No products available.</p>
            @endforelse
        </div> --}}
    </div>
</body>
</html>
