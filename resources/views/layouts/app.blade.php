<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Welcome to Ladii's Boba House</title>
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
    <div class="bg-white">
        <div class="bg-white">
            <!-- Your header content goes here -->
            <header class="relative inset-x-0 top-0 z-50">
                <!-- ... (header content) ... -->
            </header>

            <div class="relative isolate px-6 pt-14 lg:px-8">
                <!-- Your content for the home page can go here -->
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
