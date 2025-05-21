@extends('layout')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Book Details</h1>
        <p><strong>Title:</strong> {{ $book->title }}</p>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Year:</strong> {{ $book->year }}</p>
        <a href="{{ route('books.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
    </div>
@endsection