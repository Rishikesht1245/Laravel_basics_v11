<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // fetching 
        $notes = Note::query()->orderBy("created_at", "desc")->paginate(15);

        // Dumb and Die : Dumbs the data and immediately ends script execution.
        // dd($notes);

        // Passing value to the note.index view : as key value pair
        return view('note.index', ['notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // server side validation -> body contains the note data
        $data = $request->validate([
            'note' => ['required', 'string']
        ]);

        // hard coding user_id
        $data['user_id'] = 1;

        // returns the note data saved in the DB.
        $note = Note::create($data);

        // redirecting to show page with $note data to display the newly created note.
        // message : session message -> can be used in the layout file
        return to_route('note.show', $note)->with('notification', 'Not was created.');
    }

    /**
     * Display the specified resource.
     */
    // $note will be accessed from the url.
    public function show(Note $note)
    {
        return view('note.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('note.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    // we will get the $note object passed from UI 
    public function update(Request $request, Note $note)
    {
         // server side validation -> body contains the note data
         $data = $request->validate([
            'note' => ['required', 'string']
        ]);


        // invoking the update method to update the
       $note->update($data);
       echo "updated";

        // redirecting to show page with $note data to display the newly created note.
        // message : session message -> can be used in the layout file
        return to_route('note.show', $note)->with('notification', 'Not was updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return to_route('note.index')->with("notification", "Not was deleted");
    }
}
