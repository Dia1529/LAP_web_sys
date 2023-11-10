<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mx-auto">
<a href="/welcome" class="rounded-md bg-pink-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
            <!--<a href="/boba" class="text-sm font-semibold leading-6 text-gray-900">Tap for Boba<span aria-hidden="true">→</span></a>-->
            </div>
    <h1 class="text-2xl font-bold mb-4">Edit Boba</h1>

    @if(session('error'))
    <div class="bg-red-100 text-red-500 border border-red-400 px-4 py-2 rounded mb-4">
        {{ session('error') }}
    </div>
    @endif

    <form action="{{ route('boba.update', $boba->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="name" id="name" value="{{ $boba->name }}" class="w-full px-4 py-2 rounded border focus:outline-none focus:ring focus:ring-indigo-500">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full px-4 py-2 rounded border focus:outline-none focus:ring focus:ring-indigo-500">{{ $boba->description }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price:</label>
            <textarea name="price" id="price" rows="4" class="w-full px-4 py-2 rounded border focus:outline-none focus:ring focus:ring-indigo-500">{{ $boba->price }}</textarea>
            @error('price')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        

        <div class="mb-4">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update boba</button>
        </div>
    </form>
</div>

</body>
</html>
