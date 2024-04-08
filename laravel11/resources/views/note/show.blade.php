<x-app-layout>
    <div class="note-container single-note py-10">
        <div class="note-header">
            <h1 class="text-lg text-gray-400 px-4">Note : {{$note->created_at}}</h1>
            <div class="note-buttons">
                <a href="{{route("note.edit", $note)}}" class="note-edit-button">Edit</a>
                <form action="{{route("note.destroy", $note)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{$note->note}}
            </div>
        </div>
    </div>
</x-app-layout>
