<x-app-layout>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ $project->titre }}</h1>

        <div class="mb-8">
            <img src="{{ $project->getFirstMediaUrl('projects') }}" alt="{{ $project->titre }}" class="w-full shadow-lg">
        </div>

        <div class="bg-white rounded-lg p-6 shadow-md">
            <p class="text-gray-700 text-lg font-semibold mb-4">Description du Projet :</p>
            <p class="text-gray-600">{{ $project->description }}</p>

            <div class="mt-6 flex items-center justify-between">
                <a href="{{ route('projects.index') }}"
                    class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour
                    à la Liste</a>
                {{-- <a href="#" id="assignArtistModalBtn" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Assigner</a> --}}
                <button data-modal-target="assignArtistModal" data-modal-toggle="assignArtistModal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Assigner l'Artiste
                </button>

                <div id="assignArtistModal" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="assignArtistModal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <!-- Your content for assigning artists here -->
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Assigner l'Artist au
                                    Projet</h3>
                                <form id="assignArtistForm" action="{{ route('projects.assignArtist') }}"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                    <label for="artist_id" class="block mb-2">Selectionner un ou plusieur Artistes:</label>
                                    <select name="artist_id[]" multiple class="w-full p-2 border rounded">
                                        @foreach ($users as $u)
                                            <option value="{{ $u->id }}">{{ $u->nom }}</option>
                                        @endforeach
                                    </select>
                                    <div class="mt-4 flex items-center justify-end">
                                        <button type="submit"
                                            class="bg-red-700 text-white font-bold py-2 px-4 rounded">Assigner</button>
                                        <button id="closeAssignArtistModal"
                                            class="ml-4 bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded"
                                            data-modal-hide="assignArtistModal">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Modal -->
            {{-- <div id="assignArtistModal" class="fixed inset-0 z-50 hidden overflow-auto bg-gray-800 bg-opacity-50">
                <div class="flex items-center justify-center min-h-screen">
                    <div class="bg-white p-6 rounded shadow-lg">
                        <form id="assignArtistForm" action="{{ route('projects.assignArtist', $project->id) }}"
                            method="POST">
                            @csrf
                            <label for="artist_id" class="block mb-2">Sélectionner un ou plusieurs artistes :</label>
                            <select name="artist_id[]" multiple class="w-full p-2 border rounded">


                                @foreach ($users as $u)
                                    <option value="{{ $u->id }}">
                                        @foreach ($u->roles as $role)
                                            @if ($role->nom == 'artiste')
                                                {{ $u->nom }}
                                            @endif
                                        @endforeach
                                    </option>
                                @endforeach

                            </select>
                            <div class="mt-4 flex items-center justify-end">
                                <button type="submit"
                                    class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Assigner</button>
                                <button id="closeAssignArtistModal"
                                    class="ml-4 bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">Fermer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}



</x-app-layout>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


<script>
    // document.getElementById('assignArtistModalBtn').addEventListener('click', function() {
    //     document.getElementById('assignArtistModal').classList.remove('hidden');
    // });

    // document.getElementById('closeAssignArtistModal').addEventListener('click', function() {
    //     document.getElementById('assignArtistModal').classList.add('hidden');
    // });

    // document.getElementById('assignArtistForm').addEventListener('submit', function(e) {
    //     e.preventDefault();
    //     document.getElementById('assignArtistModal').classList.add('hidden');
    // });
</script>
