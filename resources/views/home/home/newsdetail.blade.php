<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>News Detail</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

  <div class="bg-white shadow-2xl rounded-3xl overflow-hidden w-full max-w-6xl flex flex-col md:flex-row relative">

    <!-- Tombol Kembali -->
    <button onclick="window.history.back()" class="absolute top-6 left-6 bg-red-600 hover:bg-red-700 text-white font-semibold px-5 py-2 rounded-xl shadow-md transition-all">
      ← Back to Website
    </button>

    <!-- Gambar Berita -->
    <div class="md:w-1/2 p-8 flex items-center justify-center bg-gray-50">
      <img src="{{ asset($news->cover) }}" alt="{{ $news->title }}" class="rounded-2xl shadow-md w-full max-w-md object-cover">
    </div>

    <!-- Konten Berita -->
    <div class="md:w-1/2 p-8 flex flex-col justify-between">
      <div>
        <nav class="text-sm text-gray-500 mb-4">
          home / news / <span class="text-gray-800 font-medium">{{ $news->title }}</span>
        </nav>

        <h1 class="text-4xl font-extrabold text-gray-900 mb-2">{{ $news->title }}</h1>
        <span class="inline-block bg-red-500 text-white text-xs font-semibold uppercase px-3 py-1 rounded-lg mb-4">Latest News</span>

        <div class="text-gray-700 leading-relaxed text-justify space-y-4">
          {!! $news->body !!}
        </div>
      </div>

      <!-- Metadata -->
      <div class="text-sm text-gray-500 mt-6">
        Published on: {{ \Carbon\Carbon::parse($news->created_at)->format('F d, Y') }}<br>
        By: {{ $news->author ?? 'Yufa Team' }}
      </div>
    </div>
  </div>

</body>
</html>
