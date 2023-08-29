@extends('layouts/dashboard-layout')

@section('title', 'Task Manger - Edit Task')

@section('content')


      <h1 class="mb-6 text-7xl font-bold font-heading leading-normal">Edit Task</h1>
      <form method="POST" action="/tasks/{{$task->id}}">
        @csrf
        @method('PUT')
        <label class="block mb-5">
          <input
            class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
            id="signInInput2-1" type="text" placeholder="Task Title" value="{{old('title', $task->title)}}" name="title"> <span style="color: red;"> @error('title'){{ $message }}@enderror</span>
        </label>
        <label class="relative block mb-5">

          <textarea 
            class="px-4 pr-36 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300" name="description"
            id="signInInput2-2" placeholder="Description"   autocomplete="off"> {{old('description', $task->description)}}</textarea><span style="color: red;"> @error('description'){{ $message }}@enderror</span>
        </label>
        <button
          class="mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200"
          type="submit">Save</button>

      </form>
 

@endsection