<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- Dashboard Heading -->
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Admin Dashboard</h2>

                <!-- Dashboard Actions -->
                <div class="space-y-6">
                    <!-- Add New Product Button -->
                    <a href="{{ route('products.create') }}"
                       class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                        Add New Product
                    </a>

                    <!-- Manage Products Link -->
                    <div>
                        <a href="{{ route('products.index') }}" 
                           class="inline-block text-lg text-blue-600 hover:text-blue-800 font-medium transition duration-200">
                            Manage Products
                        </a>
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
