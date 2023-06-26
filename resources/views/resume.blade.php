@extends('navbar')

@section('content')

<div class="flex flex-wrap justify-center py-8">
    <div class="text-center w-2/3 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="/resume">
            <h5 class="text-center mb-2 text-4xl font-serif tracking-tight text-gray-900 dark:text-white">My Resume</h5>
            <img src="test.r.jpg" alt="resume" class="rounded w-full">
        </a>

        <p class="text-center mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
        <a href="/resumeinfo" class="content-center inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-black rounded-lg hover:bg-[#e5ff00] hover:text-black focus:ring-4 focus:outline-none">
            Access full resume here
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>

@endsection