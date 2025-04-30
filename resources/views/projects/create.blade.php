<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Project - EKYAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col">

    @include('partials.navbar')

    <main class="flex-grow max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6 text-center">Add New Project</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded mb-6">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('projects.store') }}" class="bg-white p-6 rounded shadow space-y-6">
            @csrf

            <div>
                <label class="block mb-2 font-semibold">Project Title</label>
                <input type="text" name="title" class="w-full p-2 border border-gray-300 rounded" value="{{ old('title') }}" required>
            </div>

            <div>
                <label class="block mb-2 font-semibold">Project Description</label>
                <textarea name="description" rows="5" class="w-full p-2 border border-gray-300 rounded">{{ old('description') }}</textarea>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('projects.index') }}" class="text-gray-600 hover:underline">
                    ← Back to Projects
                </a>
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    💾 Save Project
                </button>
            </div>
        </form>
    </main>

    @include('partials.footer')

</body>
</html>
