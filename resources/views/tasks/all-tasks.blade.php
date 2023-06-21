@extends('layouts/dashboard-layout')

@section('title', 'Task Manager - All Tasks')


@section('content')


<h1 class="mb-6 text-6xl font-bold font-heading leading-normal">All Tasks</h1>
@foreach ( $userTasks as $task )
<ul class="list-disc">
  <li><a href="/tasks/{{$task->id}}">{{$task->title}}</a></li>
</ul>

@endforeach

@endsection