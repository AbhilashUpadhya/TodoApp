@extends('layouts.main')

@section('content')
<h1>Create new task</h1>
@if($errors->has('name'))
           <p class="error">{{$errors->first('name')}}</p>

 @endif
 @if($errors->has('err'))
           <p class="error">{{$errors->first('err')}}</p>

 @endif

{{Form::open()}}
<input type="text" name="name" placeholder="Your new task" />
{{Form::submit('Create')}}
{{Form::close()}}

@endsection