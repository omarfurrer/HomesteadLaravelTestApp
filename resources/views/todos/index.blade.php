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

  <ul class="todos-list clearfix">
  @foreach($todos as $todo)
    <li class="todo-item">
    {{ $todo->title }}
<span class="todo-delete">
  
    <form onsubmit="return ConfirmDelete()" action="{{route('todos.destroy',$todo->id)}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-sm">
    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </button>
</form>
</span>

    </li>
  @endforeach
  </ul>
  </div>

</div>
 
</div>
@endsection

