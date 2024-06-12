<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>Menu du Cat's Eye</title>    
</head>
<body>
    <div class="containerPlats">
        <h1>Menu du Cat's Eye</h1>
        <div >
            <tr>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
            <ul>
                @foreach ($dishes as $dish)
                <li class="plats">
                    <div class="item category">{{$dish->category}}</div>
                    <div class="item name">{{$dish->name}}</div>  
                    <div class="item price">{{$dish->price}} €</div>
                    <div class="item"><a href="/details/{{$dish->id}}" class=voir>Voir</a></div>
                    <div class="item"><a href="/update/{{$dish->id}}" class=modif>Modifier</a></div>
                    <div class="item"><form action="/delete/{{$dish->id}}" method="post">
                                @csrf
                                @method("delete")
                            <button class=del>Supprimer</button>
                        </form>
                    </div>
                </li>
                @endforeach 
            </ul>       
        </div>
        <a href="/ajout" class=add>Ajouter un plat</a>
    </div>   
</body>
</html>