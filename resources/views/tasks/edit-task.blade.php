@extends('layouts/main-app')

@section('title', 'Task Manger - Edit Task')

@section('content')
<div class="container mx-auto px-4">
  <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <div class="w-full md:w-1/4 px-4 mb-4 md:mb-0">
      <h5 class="mb-6 text-xl font-bold font-heading leading-normal">Menu</h5>

      <div class="flex">
        <ul>
          <li>
            <a href="#"
              class=" py-3 px-5 w-full text-white font-semibold border border-indigo-700 rounded-xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200">Create
              New Task</a>
          </li>
          <li>
            <a href="#" class="mt-3 pt-3  w-full flex ">
              <span class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12">
                  </path>
                </svg></span>
              Throw Garbage out</a>
          </li>
          <li>
            <a href="#" class="pt-3 w-full flex">
              <span class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12">
                  </path>
                </svg></span>
              Throw Garbage out</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
      <h1 class="mb-6 text-7xl font-bold font-heading leading-normal">Create New Task</h1>
      <form>
        <label class="block mb-5">
          <input
            class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
            id="signInInput2-1" type="text" placeholder="Task Title" autocomplete="off">
        </label>
        <label class="relative block mb-5">

          <textarea
            class="px-4 pr-36 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
            id="signInInput2-2" placeholder="Description" autocomplete="off"></textarea>
        </label>
        <div class="">
          <div class="my-7 w-full">
            <a href="#"
              class="mr-3 mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200">
              Edit
            </a>
            <a href="#"
              class="mr-3
            mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200">
              Delete
            </a>
          </div>
        </div>
        <!-- <button class="mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200" type="button">Save</button> -->

      </form>
    </div>
  </div>
</div>
@endsection