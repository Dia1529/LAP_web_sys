@extends('layouts.app')

@section('content')
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="/welcome" class="rounded-md bg-pink-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
    </div>
    <div class="container">
    <h1 class="text-3xl font-semibold mb-4 text-center">Boba List</h1>


        <!-- Display Boba Items in a Paragraph-like Style -->
        @foreach($boba as $bobaItem)
            <div class="flex items-start justify-between border-b mb-4">
                <div class="flex-1 pr-4">
                    <h2 class="text-lg font-semibold">{{ $bobaItem->name }}</h2>
                    <p>{{ $bobaItem->description }}</p>
                </div>
                <div class="flex items-center">
                    <p class="mr-4">${{ $bobaItem->price }}</p>
                    <div class="flex space-x-2">
                        <form method="POST" action="{{ route('boba.edit', $bobaItem) }}">
                            <button class="bg-blue-500 text-white py-1 px-3 rounded">Edit</button>
                        </form>
                        <form method="POST" action="{{ route('boba.destroy', $bobaItem) }}">
                            <button class="bg-red-500 text-white py-1 px-3 rounded">Delete</button>
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- Create Boba Form -->
        <div class="mt-6 p-4 border border-gray-300 rounded">
            <h2 class="text-2xl font-semibold mb-4">Create New Boba</h2>
            <form method="POST" action="{{ route('boba.store') }}" class="flex items-center space-x-4">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" required class="border border-gray-300 p-2 rounded">
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea name="description" required class="border border-gray-300 p-2 rounded"></textarea>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" required class="border border-gray-300 p-2 rounded">
                </div>
                <button type="submit" class="bg-pink-600 text-white py-2 px-4 rounded hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">Create</button>
            </form>
        </div>
    </div>
@endsection