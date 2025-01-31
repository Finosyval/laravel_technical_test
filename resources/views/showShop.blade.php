<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.green.min.css"
>
    <title>Shop info</title>
</head>
<body>
   <!-- resources/views/shop/show.blade.php -->
<h1>Infos sur la boutique</h1>
<p>Nom: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>
<p>Âge: {{ $user->age }}</p>
 
</body>
</html>