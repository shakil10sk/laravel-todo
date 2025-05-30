<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $task->title }}</h1>
        <p class="text-gray-600 text-lg">{{ $task->description }}</p>

        <div class="mt-6">
            <a href="{{ route('tasks.index') }}"
               class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                ← Back to list
            </a>
        </div>
    </div>
</x-app-layout>
