<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            📝 Your Tasks
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        <div class="mb-4 flex justify-between">
            <a href="{{ route('tasks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Task
            </a>
            @if (session('success'))
                <div class="text-green-600 font-medium">{{ session('success') }}</div>
            @endif
        </div>

        @forelse ($tasks as $task)
            <div class="bg-white shadow rounded p-4 mb-4 border-l-4 {{ $task->is_completed ? 'border-green-500' : 'border-yellow-500' }}">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold">{{ $task->title }}</h3>
                        <p class="text-gray-600 text-sm mb-1">Due: {{ $task->due_date ?? 'N/A' }}</p>
                        <p class="text-gray-800">{{ $task->description }}</p>
                        <p class="text-sm mt-1">
                            Status:
                            <span class="{{ $task->is_completed ? 'text-green-600' : 'text-yellow-600' }}">
                                {{ $task->is_completed ? 'Completed' : 'Pending' }}
                            </span>
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 hover:underline">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-600">You don’t have any tasks yet.</p>
        @endforelse
    </div>
</x-app-layout>
