<x-app-layout>
   <div class="note-container single-note">
       <h1 style="text-align: center">Edit Your Note</h1>
       <form action="{{route("note.update", $note)}}" method="POST" class="note">
        {{-- csrf token : to allow form submission from our website only --}}
        @csrf
        {{-- HTML form directly not support put, patch or delete methods --}}
        @method("PUT")
           <textarea name="note" id="note" rows="10" class="note-body" placeholder="Enter your note here">{{$note->note}}</textarea>
           <div class="note-buttons">
               <a href="{{route("note.index")}}" class="note-cancel-button">Cancel</a>
               <button class="note-submit-button">Submit</button>
           </div>
       </form>
   </div>
</x-app-layout>
