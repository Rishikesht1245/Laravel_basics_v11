<x-layout>
   <div class="note-container">
    <a href="{{route('note.create')}}" class="new-note-btn">
        New Note
    </a>
    <div class="notes">
        {{-- PHP STARTS HERE (Blade template) --}}
        @foreach ($notes as $note )      
        <div class="note">
            <div class="note-body">
                {{-- Limitting the words to 30 letters --}}
                {{ Str::words($note->note, 30)}}
            </div>
            <div class="note-buttons">
                {{-- Menitoning routes along with the data to be passed --}}
                {{-- $note will be passed to the show function in the controller --}}
                {{-- Primary key from $note will be attached to the route in the browser --}}
                <a href="{{route('note.show', $note)}}" class="note-edit-button">View</a>
                <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
                <form action="{{route("note.destroy", $note)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
        {{-- PHP ENDS HERE --}}
    </div>

    {{-- Pagination --}}

    {{-- links method in $notes will create all the necessary UI & functionality for pagination --}}
    {{-- By default styles looking for tailwind CSS --}}
    {{$notes->links()}}
   </div>
</x-layout>
