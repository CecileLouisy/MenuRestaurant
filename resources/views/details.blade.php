<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du plat</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <h1>{{$details->name}}</h1>
    <p>Prix : {{$details->price}} euros</p>
    <p>Catégorie : {{$details->category}}</p>
    <p>Description : {{$details->description}}</p>
    <p>Liste des ingrédients : {{$details->ingredients}}</p>
    <a href="/" class=add>Retour</a>

</body>
</html>