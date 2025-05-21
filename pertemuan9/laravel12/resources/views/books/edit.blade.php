@extends('layout')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Edit Book</h1>
        <form action="{{ route('books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ $book->title }}" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700">Author</label>
                <input type="text" name="author" id="author" value="{{ $book->author }}" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="year" class="block text-gray-700">Year</label>
                <input type="number" name="year" id="year" value="{{ $book->year }}" class="w-full border-gray-300 rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection