<x-layout>
    <h2>{{ $note->title }}</h2>
    <div @class(['highlight' => $note->important, 'bg-gray-200 p-4 rounded'])>
        <p>{{ $note->content }}</p>
    </div>

    <div>
        <form action='{{ route("notes.destroy", $note->id)  }}' method="POST">
            @csrf
            @method('DELETE')

            <button type='submit' class='btn my-4 p-4'>Delete Note</button>
        </form>
    </div>
</x-layout>
