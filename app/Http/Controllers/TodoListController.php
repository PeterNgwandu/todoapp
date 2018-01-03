<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatationRequest;
use App\TodoList;
use Illuminate\Http\Request;
use function Sodium\compare;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = TodoList::all();
        if ($todo->count() != 0){
            return view('todo.index', compact('todo'));
        }else{
            return view('todo.alert', compact('todo'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'todo_name'   => 'required',
            'deadline'    => 'required',
            'description' => 'required'
        ]);

        $todo = TodoList::create([
            'todo_name' => $request->input('todo_name'),
            'deadline' => $request->input('deadline'),
            'description' => $request->input('description'),
        ]);

        if (isset($todo)){
            return view('todo.success');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = TodoList::findOrFail($id);

        if (isset($todo)){
            return view('todo.show', compact('todo'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = TodoList::findOrFail($id);
        if (isset($todo)){
            return view('todo.edit', compact('todo'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidatationRequest $request, $id)
    {

        $todo = TodoList::findOrFail($id);

        if (isset($todo)){
            $todo->update([
                'todo_name'   => $request->input('todo_name'),
                'deadline'    => $request->input('deadline'),
                'description' => $request->input('description')
            ]);

            return view('todo.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = TodoList::findOrFail($id);

        if (isset($todo)){
            $todo->delete();

            return view('todo.delete', compact('todo'));
        }
    }

    public function showTodo($id){
        $todo = TodoList::findOrFail($id);

        if (isset($todo)){
            return view('todo.show', compact('todo'));
        }
    }

    public function upload(){
        return view('todo.upload');
    }

    public function fileUpload(Request $request){
        $file = $request->file('file');

        if (isset($file)){
            return $file->getClientOriginalName(). " " . $file->getClientSize();
        }
    }
}
