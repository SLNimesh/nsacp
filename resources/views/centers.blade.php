<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>
<body>
    <x-top-right-coner></x-top-right-coner>
    <div class="flex flex-col items-center bg-gray-100">
        @auth
        <div>
            
        </div>
        @endauth
        <div class="grid grid-cols-5 gap-4"></div>
    </div>
</body>
</html>