<x-app-layout>

    <h1>admin->project->index</h1>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Liste des Projets</h1>
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Succès!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 5.348 5.652a.5.5 0 1 0-.707.708L9.293 10l-4.652 4.652a.5.5 0 0 0 .707.708L10 10.707l4.652 4.652a.5.5 0 0 0 .707-.708L10.707 10l4.652-4.652a.5.5 0 0 0 0-.706z"/></svg>
            </span>
        </div>
    @endif
        <div class="flex justify-end mb-4">
            <a href="{{ route('projects.create') }}"
                class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Créer un Projet</a>
        </div>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="p-2 border border-gray-300">ID</th>
                    <th class="p-2 border border-gray-300">Affiche</th>
                    <th class="p-2 border border-gray-300">Titre</th>
                    <th class="p-2 border border-gray-300">Artistes Assigné</th>
                    <th class="p-2 border border-gray-300">Statut</th>
                    <th class="p-2 border border-gray-300">Budget</th>
                    <th class="p-2 border border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td class="p-2 border border-gray-300">{{ $project->id }}</td>
                        <td class="p-2 border border-gray-300">
                            <img src="{{ $project->getFirstMediaUrl('projects') }}" alt="Affiche"
                                class="w-40 h-20 object-cover">
                        </td>
                        <td class="p-2 border border-gray-300">{{ $project->titre }}</td>
                        <td class="p-2 border border-gray-300">
                            @foreach ($project->users as $user )
                                {{$user->nom}}
                            @endforeach
                        </td>
                        <td class="p-2 border border-gray-300">{{ $project->statut }}</td>
                        <td class="p-2 border border-gray-300">{{ $project->budget }}</td>
                        <td class="p-2 border border-gray-300">
                            <a href="{{ route('projects.show', $project->id) }}"
                                class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Voir</a>
                            <a href="{{ route('projects.edit', $project->id) }}"
                                class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Modifier</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex items-center justify-between">
            <a href="{{ route('Dash.index') }}"
                class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour</a>
        </div>
    </div>

</x-app-layout>
