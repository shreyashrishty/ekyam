<nav class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <div class="flex items-center gap-8 text-lg font-medium">
      <a href="/" class="hover:text-blue-600 transition">Home</a>
      <a href="/about" class="hover:text-blue-600 transition">About</a>
      <a href="/projects" class="hover:text-blue-600 transition">Projects</a>
      <a href="/resources" class="hover:text-blue-600 transition">Resources</a>
      <a href="/communities" class="hover:text-blue-600 transition">Communities</a>
      <a href="/contact" class="hover:text-blue-600 transition">Contact</a>
    </div>
    <div class="flex gap-4">
      @auth
        <a href="/dashboard" class="hover:text-blue-600 transition">Dashboard</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="hover:text-red-600 transition">Logout</button>
        </form>
      @else
        <a href="{{ route('login') }}" class="hover:text-blue-600 transition">Login</a>
        <a href="{{ route('register') }}" class="hover:text-blue-600 transition">Sign Up</a>
      @endauth
    </div>
  </div>
</nav>
