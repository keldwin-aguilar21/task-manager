<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h1>Create Task</h1>
                <form class="form_main" action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                        <div>
                            <label>Title</label>
                            <input
                                type="text"
                                name="title"
                                value="{{ old('title') }}"
                                required
                            >
                        </div>
                        <br>
                        <div>
                            <label>Description</label>
                            <textarea name="description">{{ old('description') }}</textarea>
                        </div>
                        <br>
                        <button class="form-button" type="submit">Save Task</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
