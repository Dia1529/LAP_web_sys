<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: linear-gradient(to top right, #ff80b5, #9089fc);
            color: #fff;
            text-align: center;
            padding: 6rem 0;
        }
        h1 {
            font-size: 4rem;
        }
        .container {
            max-width: 2xl;
            margin: 0 auto;
            padding: 6rem;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        p {
            font-size: 1.5rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Ladii's Boba House.</h1>
    </header>
  

    <h2>Best Boba :<b> {{$best_boba}}</b></h2>
    <div class="mt-8 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-2">
    <span> 
        @foreach ($boba as $boba)
        <h2>{{ $boba->name }}</h2>
        <p>{{ $boba->description }}</p>
        <p>Price: ${{ $boba->price }}</p>
        <br><br>
        <hr>
        @endforeach
    </span>
    <a href="/welcome" class="rounded-md bg-pink-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
            <!--<a href="/boba" class="text-sm font-semibold leading-6 text-gray-900">Tap for Boba<span aria-hidden="true">→</span></a>-->
            </div>
</div> 
</body>
</html>