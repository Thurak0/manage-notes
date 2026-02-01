<x-layout>
    <h2>All available notes</h2>

    <ul>
        @foreach($notes as $note)
            <li>
                <x-note href='{{ route("notes.show", $note->id) }}' :important='$note->important === true'>
                    <h3>{{ $note->title }}</h3>
                </x-note>

            </li>
        @endforeach

        {{ $notes->links() }}
    </ul>

</x-layout>
