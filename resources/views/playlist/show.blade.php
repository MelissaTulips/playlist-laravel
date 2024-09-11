<x-app-layout>
    <div class="w-full rounded overflow-hidden shadow-lg p-4 bg-white mb-4">
            <div class="flex justify-between">
                <div>       
                    <a class="font-bold text-xl mb-2" href="{{ route('playlist.show', $playlist->id) }}">
                        {{ $playlist->name }}
                    </a>
                    
                        <span class="inline-block shadow-lg bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $playlist->tag }}</span>
                    
                </div>
                <div>
                    <a href="{{ route('playlist.edit', $playlist->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Edit
                    </a>
                    <form action="{{ route('playlist.destroy', $playlist->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <div class="overflow-x-auto">
                    <table class="w-full table-auto mb-4">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Title</th>
                                <th class="border px-4 py-2">Artist</th>
                                <th class="border px-4 py-2">Genre</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($playlist->songs as $song)
                                <tr>
                                    <td class="border px-4 py-2">{{ $song->title }}</td>
                                    <td class="border px-4 py-2">{{ $song->artist }}</td>
                                    <td class="border px-4 py-2">{{ $song->genre }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
            <select>  
                <option value="Select">Select</option>
                    @foreach ($playlist->songs as $song)
                        <option value="{{ $song->title }}">{{ $song->title }}</option>  
                    @endforeach
        </select>   
    </div>
</x-app-layout>


