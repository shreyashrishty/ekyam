<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title') — EKYAM</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col font-sans">
{{-- Flash message pop-up --}}
@if ($msg = session('success') ?? session('error') ?? session('status'))
  <div
    id="flash-message"
    class="fixed top-5 right-5 px-4 py-2 rounded shadow-lg text-white
      {{ session('success') ? 'bg-green-600' : 'bg-red-600' }}"
  >
    {{ $msg }}
  </div>
@endif

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const flash = document.getElementById('flash-message');
    if (!flash) return;
    // auto-fade after 3s
    setTimeout(() => {
      flash.style.transition = 'opacity 0.5s';
      flash.style.opacity = '0';
      setTimeout(() => flash.remove(), 500);
    }, 3000);
  });
</script>


  {{-- Navbar --}}
  @include('partials.navbar')

  {{-- Main content --}}
  <main class="flex-grow">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('partials.footer')

</body>
</html>
