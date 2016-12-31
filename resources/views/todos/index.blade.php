@extends('default')

@section('content')
<div class="todos-index">
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
     
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('todos.store') }}">
 {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Todo</label>
    <input type="text" name="title" class="form-control" placeholder="Buy eggs...">
  </div>
  <button type="submit" class="btn btn-default">ADD</button>
</form>

  <ul class="todos-list">
  @foreach($todos as $todo)
    <li class="todo-item">
    {{ $todo->title }}
    </li>
  @endforeach
  </ul>
  </div>

</div>
 
</div>
@endsection

