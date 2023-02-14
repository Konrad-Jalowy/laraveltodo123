<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/js/app.js']) 
    </head>
    <body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Task Name</th>
        <th scope="col">Done</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
  <tbody>
    
    @forelse ($tasks as $task )
    <tr>
      <td>{{$task->task}}</td>
      @if($task->done ===0)
      <td>No</td>
      @else
      <td>Yes</td>
      @endif
      <td>
      <button class="btn btn-primary">Mark as done</button>
      <button class="btn btn-warning">Edit</button>
      <button class="btn btn-success">Delete</button>
      </td>
      </tr>
    @empty
    <tr>
        <td>No tasks available</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    @endforelse
      
    
  </tbody>
</table>
    </body>
</html>
