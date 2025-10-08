@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h2 class="text-3xl font-semibold border-l-4 border-yellow-400 pl-3 mb-6">Contact Us</h2>
    
    <form class="bg-white shadow-md rounded-lg p-6 space-y-4 max-w-lg">
        <div>
            <label class="block text-gray-700 font-semibold">Name</label>
            <input type="text" class="w-full border border-gray-300 rounded-md p-2 focus:border-yellow-400 focus:ring focus:ring-yellow-200 outline-none">
        </div>

        <div>
            <label class="block text-gray-700 font-semibold">Email</label>
            <input type="email" class="w-full border border-gray-300 rounded-md p-2 focus:border-yellow-400 focus:ring focus:ring-yellow-200 outline-none">
        </div>

        <div>
            <label class="block text-gray-700 font-semibold">Message</label>
            <textarea rows="4" class="w-full border border-gray-300 rounded-md p-2 focus:border-yellow-400 focus:ring focus:ring-yellow-200 outline-none"></textarea>
        </div>

        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-md">
            Send
        </button>
    </form>
@endsection