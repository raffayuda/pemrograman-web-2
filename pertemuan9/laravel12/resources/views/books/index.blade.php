
@extends('layout')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Books</h1>
        <a href="{{ route('books.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Book</a>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Year</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td class="border px-4 py-2">{{ $book->title }}</td>
                        <td class="border px-4 py-2">{{ $book->author }}</td>
                        <td class="border px-4 py-2">{{ $book->year }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('books.show', $book) }}" class="text-blue-500">View</a>
                            <a href="{{ route('books.edit', $book) }}" class="text-yellow-500">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection