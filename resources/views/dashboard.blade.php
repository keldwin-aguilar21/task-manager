<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h1>Dashboard</h1>
                <div class="dashboard-container">
                    <div class="stat-card">
                        <h3>Total Tasks</h3>
                        <p>{{ $totalTasks }}</p>
                    </div>

                    <div class="stat-card completed">
                        <h3>Completed</h3>
                        <p>{{ $completedTasks }}</p>
                    </div>

                    <div class="stat-card pending">
                        <h3>Pending</h3>
                        <p>{{ $pendingTasks }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
