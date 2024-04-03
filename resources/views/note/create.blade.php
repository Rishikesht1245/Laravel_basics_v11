<x-app-layout>
    <div class="note-container single-note">
        <h1 style="text-align: center">Create New Note</h1>
        {{-- submitting form : it needs to go to the proper root --}}
        <form action="{{route("note.store")}}" method="POST" class="note">
            {{-- csrf : cross site request forgery : to prevent form 
            submission from somebody else website to our website --}}
            @csrf
            <textarea name="note" id="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{route("note.index")}}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
