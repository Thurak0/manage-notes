<x-layout>
    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        <h2>Edit Note</h2>

        <label for="title">Title:</label>
        <input
            type="text"
            id="title"
            name="title"
            value="{{ (old('title') !== null) ? old('title') : $note->title }}"
            required
        >

        <label for="content">Content:</label>
        <textarea
            rows="5"
            id="content"
            name="content"
            required
        >{{ (old('content') !== null) ? old('content') : $note->content }}</textarea>

        <label for="important">Important:</label>
        <select id="important" name="important">
            <option value="true" {{ $note->important === 'true' ? 'selected' : ''}}>Yes</option>
            <option value="false" {{ ((old('important') !== null) ? old('important') : $note->important) === 'false' | old('important') === null ? 'selected' : ''}}>No</option>
        </select>

        <button type="submit" class="btn mt-4">Save Note</button>

        <!-- validation errors -->
        @if($errors->any())
            <ul class='px-4 py.2 bg.red-100'>
                @foreach($errors->all() as $error)
                    <li class='my-2 text-red-500'>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif

    </form>
</x-layout>


