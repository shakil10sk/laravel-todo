<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ✏️ Edit Task
        </h2>
    </x-slot>

    <div class="py-6 max-w-xl mx-auto">
        <form action="{{ route('tasks.update', $task) }}" method="POST" class="bg-white p-6 shadow rounded space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" value="{{ old('title', $task->title) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $task->description) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Due Date</label>
                <input type="date" name="due_date" value="{{ old('due_date', $task->due_date) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="is_completed" value="1" class="rounded border-gray-300" {{ $task->is_completed ? 'checked' : '' }}>
                    <span class="ml-2 text-sm text-gray-700">Mark as Completed</span>
                </label>
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Update Task
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
