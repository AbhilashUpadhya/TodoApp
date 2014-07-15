@extends('layouts.main')

@section('content')
<small class="diff"><a  href="{{URL::route('logout')}}">log out</a></small>
<h1>Your Tasks <small><a href="{{URL::route('new')}}">(New Task)</a></small></h1>

<ul>
@foreach($items as $item)

<li>
{{Form::open()}}

<input type="checkbox" name="id" onClick="this.form.submit()" value="{{$item->id}}"  {{$item->done ? 'checked': ''}}/> 
{{e($item->name)}} <small> <a href="{{URL::route('delete', $item->id)}}">(x)</a> </small>

<input type="hidden"  name="id" value="{{$item->id}}"/>
{{Form::close()}}
</li>
@endforeach
</ul>
@stop