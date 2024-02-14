<x-app-layout>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ $project->titre }}</h1>

        <div class="mb-8">
            <img src="{{ $project->getFirstMediaUrl('projects') }}" alt="{{ $project->titre }}" class="w-full shadow-lg">
        </div>

        <div class="bg-white rounded-lg p-6 shadow-md">
            <p class="text-gray-700 text-lg font-semibold mb-4">Description du Projet :</p>
            <p class="text-gray-600">{{ $project->description }}</p>

            <!-- Display other project details as needed -->

            <div class="mt-6 flex items-center justify-between">
                <a href="{{ route('projects.index') }}"
                    class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour
                    à la Liste</a>
            </div>
        </div>
    </div>

</x-app-layout>
