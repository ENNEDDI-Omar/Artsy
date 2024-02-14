<x-app-layout>

    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold">Liste des Partenaires</h1>
            <a href="{{ route('partners.create') }}"
                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer
                un Partenaire</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($partners as $partner)
                <div class="bg-white rounded-lg p-6 shadow-md mb-4">
                    <img src="{{ $partner->getFirstMediaUrl('partners')) }}"
                        alt="{{ $partner->entreprise }}" class="w-full h-32 object-cover mb-4 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">{{ $partner->entreprise }}</h2>
                    <p class="text-gray-600">{{ $partner->domaine }}</p>

                    <div class="mt-4 flex items-center space-x-4">
                        <a href="{{ route('partners.show', $partner->id) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Voir</a>
                        <a href="{{ route('partners.edit', $partner->id) }}"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Modifier</a>
                        <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce partenaire?')">Supprimer</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</x-app-layout>
