<x-app-layout>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Modifier le Partenaire</h1>

        <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-lg p-6 shadow-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="logo">Logo du Partenaire :</label>
                <input type="file" id="logo" name="logo"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="entreprise">Nom de l'Entreprise :</label>
                <input type="text" id="entreprise" name="entreprise" value="{{ $partner->entreprise }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="domaine">Domaine d'Activité :</label>
                <input type="text" id="domaine" name="domaine" value="{{ $partner->domaine }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>

            <!-- Add other partner fields as needed -->

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer
                    Modifications</button>
                <a href="{{ route('partners.index') }}"
                    class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Annuler</a>
            </div>
        </form>

    </div>

</x-app-layout>
