<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
  public function index()
  {
    $todos = Todo::all();
    return view('todos.index')->with('todos', $todos);
  }

  public function details(Todo $todo)
  {
    //for route model binding: 
    //*Make sure that the name of dynamic parameters in web.php is the lower case version of your model.
    //*Type hint in the method from controller that use dynamic routing
    // ==> Laravel will autmatically find the record from database and inject it. 
    return view('todos.details')->with('todo', $todo);
  }

  public function create()
  {
    return view('todos.create');
  }

  public function createPost()
  {
    $this->validate(request(), [
      'name' => 'required|min:6|max:12',
      'description' => 'required'
    ]);
    $data = request()->all();
    $todo = new Todo();
    $todo->name = $data['name'];
    $todo->description = $data['description'];
    $todo->completed = false;
    $todo->save();
    session()->flash('success', 'Todo is created successfully.');
    return redirect('/');
  }

  public function edit(Todo $todo)
  {
    //$todo = Todo::find($todoId);
    return view('todos.edit')->with('todo', $todo);
  }

  public function editPost()
  {
    $this->validate(request(), [
      'name' => 'required|min:6|max:12',
      'description' => 'required'
    ]);
    $data = request()->all();
    $todo = Todo::find($data['id']);
    $todo->name = $data['name'];
    $todo->description = $data['description'];
    if (isset($data['completed']))
      $todo->completed = true;
    else {
      $todo->completed = false;
    }
    $todo->save();
    session()->flash('success', 'Todo is updated successfully.');
    return redirect('/');
  }

  public function delete($todoId)
  {
    // Without refactoring 
    $todo = Todo::find($todoId);
    $todo->delete();
    session()->flash('success', 'Todo is deleted successfully.');
    return redirect('/');
  }

  public function Completed(Todo $todo)
  {
    $todo->completed = true;
    $todo->save();
    session()->flash('success', 'Todo is Completed successfully.');
    return redirect('/');
  }
}
