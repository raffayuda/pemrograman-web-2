@extends('layout')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Add Book</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700">Author</label>
                <input type="text" name="author" id="author" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="year" class="block text-gray-700">Year</label>
                <input type="number" name="year" id="year" class="w-full border-gray-300 rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        </form>
    </div>
@endsection