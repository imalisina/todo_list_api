<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- TailwindCSS CDN URL --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <style>
        * {
            background-color: black !important;
        }
    </style>
    <title>Todo API | @imalisina</title>
</head>
<body>
    <div class="pt-20 mt-20 w-100 text-center justify-center">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-100 md:text-5xl lg:text-6xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-pink-600 from-red-400">Simple Todo API</span>
        With Laravel !</h1>
        <p class="text-lg font-normal text-gray-400 lg:text-xl">
            Use this API with your Front End !
            You can also use my ReactJs To-do App which uses this API.
        </p>
        <a href="https://github.com/imalisina?tab=repositories" type="button" class="mt-5 text-white bg-gradient-to-r from-pink-600 to-red-400 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-red-400 dark:focus:ring-pink-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Check ReactJs Todo App
        </a>
        <a href="/api/tasks" type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Check JSON Data 
        </a>
    </div>
</body>
</html>