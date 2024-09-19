<!doctype html>
<html lang="en" class="h-full bg-gray-50">
<!-- START head.blade.php -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @inertiaHead
</head>
<!-- END head.blade.php -->
<!-- START body -->
<body class="h-full">
@inertia
</body>
<!-- END body -->
</html>
