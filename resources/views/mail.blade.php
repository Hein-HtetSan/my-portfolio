<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>
    <style>
        /* Tailwind CSS classes */
        .bg-gray-100 { background-color: #f3f4f6; }
        .p-6 { padding: 24px; }
        .max-w-2xl { max-width: 42rem; }
        .mx-auto { margin-right: auto; margin-left: auto; }
        .bg-white { background-color: #ffffff; }
        .rounded-md { border-radius: 0.375rem; }
        .shadow-md { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); }
        .text-2xl { font-size: 1.5rem; line-height: 2rem; }
        .font-semibold { font-weight: 600; }
        .mb-4 { margin-bottom: 1rem; }
        .text-gray-700 { color: #4b5563; }
        .text-lg { font-size: 1.125rem; line-height: 1.75rem; }
    </style>
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

