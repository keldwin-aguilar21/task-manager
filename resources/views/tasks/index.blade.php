<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                     @if(session('success'))
                        <div class="alert">
                            <span
                                class="closebtn"
                                onclick="this.parentElement.style.display='none';">
                                    &times;
                            </span>
                             {{ session('success') }}
                        </div>
                        <br>
                    @endif
                    <a class="btn add_btn" href="{{ route('tasks.create') }}">Add Task</a>
                    <h1>List Tasks</h1>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Task</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td><h3>{{ $task->title }}</h3></td>
                                    <td><small>{{ $task->description }}</small></td>
                                    <td>{{ ucfirst($task->status) }}</td>
                                    <td>
                                        <a class="btn edit_btn" href="{{ route('tasks.edit', $task) }}">
                                            Edit
                                        </a>
                                         <form
                                            action="{{ route('tasks.destroy', $task) }}"
                                            method="POST"
                                            style="display:inline;"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn del_btn">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>
