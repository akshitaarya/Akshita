@extends('layout')

@section('content')

<h1>Edit Task</h1>

<form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
    <div class="field">
        <label class="label" for="title">Task</label>

        <div class="control">  
            <input type="text" class="input" name="Task" placeholder="Task" value="{{ $project->title }}">
        </div>
    </div>

    <div class="field">
    <label class="label" for="description">Taskdescription</label>

    <div class="control">
        <textarea name="Taskdescription" class="textarea">{{ $project->description }}</textarea>
        </div>
        </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Update Task</button>
        </div>
        </div>
                    
</form>
<form method="POST" action="/projects/{{ $project->id }}">
{{ method_field('DELETE') }}
{{ csrf_field() }}
<div class="field">
<div class="control">
<button type="submit" class="button">Delete Task</button>
</div>
</div>
</form>




@endsection    