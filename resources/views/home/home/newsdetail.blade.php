<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">

    <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-full max-w-6xl flex flex-col md:flex-row min-h-screen relative">

        <!-- Tombol Kembali -->
        <button onclick="window.history.back()" class="absolute top-6 left-6 bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">
            Back to Website
        </button>

        <!-- Gambar Berita -->
        <div class="flex-1 flex items-center justify-center p-6">
            <img src="{{ asset($news->cover) }}" alt="{{ $news->title }}" class="w-full max-w-md h-auto object-cover rounded-lg">
        </div>

        <!-- Konten Berita -->
        <div class="flex-1 p-6">
            <nav class="text-sm text-gray-500 mb-2">
                home / news / {{ $news->title }}
            </nav>
            <h1 class="text-3xl font-bold text-gray-900">{{ $news->title }}</h1>
            <span class="inline-block bg-red-500 text-white text-xs uppercase font-semibold px-3 py-1 mt-3 rounded-lg">Latest News</span>
            
            <div class="text-gray-600 mt-4 leading-relaxed text-justify">
                {!! $news->body !!}
            </div>

            <!-- Optional Metadata -->
            <div class="text-sm text-gray-500 mt-6">
                Published on: {{ \Carbon\Carbon::parse($news->created_at)->format('F d, Y') }}<br>
                By: {{ $news->author ?? 'Yufa Team' }}
            </div>
        </div>
    </div>

</body>
</html>
