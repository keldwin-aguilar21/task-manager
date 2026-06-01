<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h1>Edit Task</h1>
                <form
                    action="{{ route('tasks.update', $task) }}"
                    method="POST"
                    class="form_main"
                >
                    @csrf
                    @method('PUT')
                    <div>
                        <label>Title</label>
                        <input
                            type="text"
                            name="title"
                            value="{{ old('title', $task->title) }}"
                            required
                        >
                    </div>
                    <br>
                    <div>
                        <label>Description</label>
                        <textarea name="description">{{ old('description', $task->description) }}</textarea>
                    </div>
                    <br>
                    <div>
                        <label>Status</label>
                        <select name="status">
                            <option
                                value="pending"
                                {{ $task->status == 'pending' ? 'selected' : '' }}
                            >
                                Pending
                            </option>
                            <option
                                value="completed"
                                {{ $task->status == 'completed' ? 'selected' : '' }}
                            >
                                Completed
                            </option>
                        </select>
                    </div>
                    <br>
                    <button class="form-button" type="submit">
                        Update Task
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
