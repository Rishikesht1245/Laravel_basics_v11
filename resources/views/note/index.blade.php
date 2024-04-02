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
                <a href="{{route('note.show', $note)}}" class="note-edit-button">View</a>
                <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
                <button class="note-delete-button">Delete</button>
            </div>
        </div>
        @endforeach
        {{-- PHP ENDS HERE --}}
    </div>
   </div>
</x-layout>
