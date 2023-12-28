<!-- resources/views/boba.blade.php -->

@extends('layouts.app')


@section('content')
    <div class="container mx-auto">
        @if (session('success'))
            <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                <strong>Success!</strong> {{ session('success') }}
            </div>
        @endif

    @if (session('error'))
        <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <strong>Error!</strong> {{ session('error') }}
        </div>
    @endif
    <h2>Best Boba :<b> {{ $best_boba }}</b></h2>
    <div class="mt-8 grid grid-cols-1 gap-10">
    <span>
        @foreach ($boba as $bobaItem)
            <h2>{{ $bobaItem->name }}</h2>
            <p>{{ $bobaItem->description }}</p>
            <p>Price: ${{ $bobaItem->price }}</p>
            <br><br>
            <hr>
        @endforeach
    </span>
    <div>
        <a href="/welcome" class="rounded-md bg-pink-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
    </div>
</div>

@endsection
