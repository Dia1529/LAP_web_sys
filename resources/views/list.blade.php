<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/welcome" class="rounded-md bg-pink-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
            <!--<a href="/boba" class="text-sm font-semibold leading-6 text-gray-900">Tap for Boba<span aria-hidden="true">→</span></a>-->
            </div>
<div class="container">
        <h1>Boba List</h1>
        
        <!-- Display Boba Items -->
        <ul>
            @foreach($boba as $boba)
                <li>
                    <strong>{{ $boba->name }}</strong>
                    <p>{{ $boba->description }}</p>
                    <p>{{ $boba->price }}</p>
                 
                    <form method="POST" action="{{ route('boba.destroy', $boba) }}">
                       <button><a href="{{ route('boba.edit', $boba) }}">Edit</a></button>
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <!-- Create Boba Form -->
        <h2>Create New Boba</h2>
        <form method="POST" action="{{ route('boba.store') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <br>
            <label for="description">Description:</label>
            <textarea name="description" required></textarea><br>
            <label for="price">Price :</label>
            <textarea name="price" required></textarea>
            <br>
            <button type="submit">Create</button>
        </form>


</body>
</html>


  