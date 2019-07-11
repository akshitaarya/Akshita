<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Add a new task</h1>
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="Task" placeholder="Task" >
        <div>

        <div>
            <textarea name="Taskdescription" placeholder="description" ></textarea>
        </div>

        <div>
            <button type="submit">Create Task</button>
        </div>
        
        @if ($errors->any())
        <div class="notification is-danger">

    <ul>
        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>
@endif
</form>            
</body>
</html>
