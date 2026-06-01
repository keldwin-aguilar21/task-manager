<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h1>Star Wars Characters</h1>
                <table>

                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Height</th>
                            <th scope="col">Mass</th>
                            <th scope="col">Hair Color</th>
                            <th scope="col">Skin Color</th>
                            <th scope="col">Eye Color</th>
                            <th scope="col">Birth Year</th>
                            <th scope="col">Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($characters as $character)
                            <tr>
                                <td>{{ $character['name'] }}</td>
                                <td>{{ $character['height'] }}</td>
                                <td>{{ $character['mass'] }}</td>
                                <td>{{ $character['hair_color'] }}</td>
                                <td>{{ $character['skin_color'] }}</td>
                                <td>{{ $character['eye_color'] }}</td>
                                <td>{{ $character['birth_year'] }}</td>
                                <td>{{ $character['gender'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
