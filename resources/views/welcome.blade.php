<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
<style>
    a.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  border-radius: 5px;
}
</style>
    <title>Bienvenue</title>
   
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur notre plateforme !</h1>
        <p>Inscrivez vous pour commencer à creer vos boutiques ou connectez vous pour acceder à votre espace</p>
        <a class="button" href="{{ route('register') }}" class="btn">S'inscrire</a>
        <a class= "button" href="{{ route('login') }}" class="btn">Se connecter</a>
    </div>
</body>
</html>