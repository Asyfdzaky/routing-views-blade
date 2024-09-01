<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-gray-800 p-4">
        <div class="flex justify-between items-center">
          <a href="/" class="text-white text-xl font-bold">Logo</a>
          <div class="space-x-4">
            <a href="/" class="text-gray-300 hover:text-white">Home</a>
            <a href="/about" class="text-gray-300 hover:text-white">About</a>
            <a href="/contact" class="text-gray-300 hover:text-white">Contact</a>
          </div>
        </div>
      </nav>
    
      <main>
        {{ $slot }}
    </main>
</html>