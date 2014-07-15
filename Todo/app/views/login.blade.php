@extends('layouts.main')

@section('content')


{{Form::open(array('autocomplete' => 'off'))}}


@if($errors->has('invalid_creds'))
<p class="error">{{$errors->first('invalid_creds')}}</p>
@endif

@if($errors->has('username'))
<p class="error">{{$errors->first('username')}}</p>
@endif
<input type="text" name="username" placeholder="Username" />
@if($errors->has('password'))
<p class="error">{{$errors->first('password')}}</p>
@endif
<input type="password" name="password" placeholder="Password" />
<input type="submit" value="Sign in" />

{{Form::close()}}
@stop