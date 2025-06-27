<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">

    <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-full max-w-6xl flex min-h-screen relative">

        <!-- Tombol Kembali -->
        <button onclick="window.history.back()" class="absolute top-6 left-6 bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">
            Back to website
        </button>

        <!-- Sidebar Thumbnails -->
        <div class="flex flex-col items-center space-y-3 p-4">
        </div>

        <!-- Product Image -->
        <div class="flex-1 flex items-center justify-center p-6">
            <img src="{{ asset($product->picture) }}" alt="{{ $product->title }}" class="w-96 h-auto object-cover rounded-lg">
        </div>

        <!-- Product Details -->
        <div class="flex-1 p-6">
            <nav class="text-sm text-gray-500 mb-2">
                home / products / product detail / {{ $product->title }}
            </nav>
            <h1 class="text-3xl font-bold text-gray-900">{{ $product->title }}</h1>
            <span class="inline-block bg-orange-500 text-white text-xs uppercase font-semibold px-3 py-1 mt-3 rounded-lg">Best Seller</span>
            
            <h2 class="text-lg font-bold text-gray-900 mt-4">Yufa Tech</h2>
            <p class="text-gray-600 mt-2">{{ $product->description }}</p>
            
            <h3 class="text-gray-800 font-semibold mt-4">High Quality</h3>
            <p class="text-gray-600">Yufa Tech Product</p>

            <!-- Icons Section -->
            <div class="flex items-center space-x-6 mt-6">
                <div class="text-center">
                    <span class="block text-gray-700 text-3xl">⚙️</span>
                    <p class="text-gray-600 text-xs mt-1">Precision Engineering</p>
                </div>
                <div class="text-center">
                    <span class="block text-blue-700 text-3xl">🏭</span>
                    <p class="text-gray-600 text-xs mt-1">Industrial Grade</p>
                </div>
                <div class="text-center">
                    <span class="block text-yellow-600 text-3xl">🔧</span>
                    <p class="text-gray-600 text-xs mt-1">Easy Maintenance</p>
                </div>
                <div class="text-center">
                    <span class="block text-green-600 text-3xl">♻️</span>
                    <p class="text-gray-600 text-xs mt-1">Eco-Friendly</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
