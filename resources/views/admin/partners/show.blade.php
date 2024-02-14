<x-app-layout>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ $partner->entreprise }}</h1>

        <div class="mb-4">
            <img src="{{ $partner->getFirstMediaUrl('partners', 'logo')) }}"
                alt="{{ $partner->entreprise }}" class="w-full">
        </div>

        <p class="text-gray-700 text-sm font-bold mb-2">Domaine d'Activité :</p>
        <p class="mb-4">{{ $partner->domaine }}</p>

        <!-- Display other partner details as needed -->

        <div class="flex items-center justify-between">
            <a href="{{ route('partners.index') }}"
                class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour
                à la Liste</a>
        </div>
    </div>

</x-app-layout>
