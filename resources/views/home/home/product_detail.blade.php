<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product Detail</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

  <div class="bg-white shadow-2xl rounded-3xl overflow-hidden w-full max-w-6xl flex flex-col md:flex-row relative">

    <!-- Tombol Kembali -->
    <button onclick="window.history.back()" class="absolute top-6 left-6 bg-red-600 hover:bg-red-700 text-white font-semibold px-5 py-2 rounded-xl shadow-md transition-all">
      ← Back to Website
    </button>

    <!-- Product Image -->
    <div class="md:w-1/2 p-8 flex items-center justify-center bg-gray-50">
      <img src="{{ asset($product->picture) }}" alt="{{ $product->title }}" class="rounded-2xl shadow-md w-full max-w-md object-cover">
    </div>

    <!-- Product Detail -->
    <div class="md:w-1/2 p-8 flex flex-col justify-between">
      <div>
        <nav class="text-sm text-gray-500 mb-4">home / products / product detail / <span class="text-gray-800 font-medium">{{ $product->title }}</span></nav>

        <h1 class="text-4xl font-extrabold text-gray-900 mb-2">{{ $product->title }}</h1>
        <span class="inline-block bg-orange-500 text-white text-xs font-semibold uppercase px-3 py-1 rounded-lg mb-4">Best Seller</span>

        <h2 class="text-lg font-bold text-gray-800 mb-1">Yufa Tech</h2>
        <p class="text-gray-700 mb-4 leading-relaxed">{{ $product->description }}</p>

        <div class="mb-4">
          <h3 class="text-gray-900 font-semibold">High Quality</h3>
          <p class="text-gray-600 text-sm">Yufa Tech Product</p>
        </div>
      </div>

      <!-- Icons Section -->
      <div class="grid grid-cols-2 gap-6 mt-6">
        <div class="text-center">
          <div class="text-4xl text-gray-700">⚙️</div>
          <p class="text-xs mt-2 text-gray-600">Precision Engineering</p>
        </div>
        <div class="text-center">
          <div class="text-4xl text-blue-600">🏭</div>
          <p class="text-xs mt-2 text-gray-600">Industrial Grade</p>
        </div>
        <div class="text-center">
          <div class="text-4xl text-yellow-500">🔧</div>
          <p class="text-xs mt-2 text-gray-600">Easy Maintenance</p>
        </div>
        <div class="text-center">
          <div class="text-4xl text-green-600">♻️</div>
          <p class="text-xs mt-2 text-gray-600">Eco-Friendly</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
