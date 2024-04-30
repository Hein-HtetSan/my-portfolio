<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">New Message Received</h2>
        <div class="mb-4">
            <p class="text-gray-700">Sender's Email:</p>
            <p class="text-lg font-semibold">{{ $user_email }}</p>
        </div>
        <div>
            <p class="text-gray-700">Message:</p>
            <p class="text-lg">{{ $content }}</p>
        </div>
    </div>
</body>
</html>
