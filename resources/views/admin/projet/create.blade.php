<x-app-layout>

    <h1>admin->projet->creat</h1>

    
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Créer un Nouveau Projet</h1>
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="affiche">Affiche du Projet :</label>
                <input type="file" id="affiche" name="affiche"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">Titre du Projet :</label>
                <input type="text" id="titre" name="titre"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description du Projet :</label>
                <textarea id="description" name="description"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="budget">Budget du Projet :</label>
                <input type="string" id="budget" name="budget"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer
                    Projet</button>
                <a href="{{ route('projects.index') }}"
                    class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Annuler</a>
            </div>
        </form>
    </div>
    
    
    
 
 </x-app-layout>