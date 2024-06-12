<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un plat</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <h1>Modification du plat : {{$dish->name}}</h1>
    <form class="form" action="{{url('/ajout')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom *</label>
            <input type="text" name="name" id="name" 
            class="@error('name') is-invalid @enderror"
            value="{{old('name',$dish->name)}}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category">Catégorie *</label>
            <input type="text" name="category" id="category" 
            class="@error('category') is-invalid @enderror"
            value="{{old('category',$dish->category)}}">
            @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="ingredients">Ingrédients *</label>
            <textarea name="ingredients" id="ingredients" cols="30" rows="10" 
            class="@error('ingredients') is-invalid @enderror">{{ old('ingredients',$dish->ingredients)}}</textarea>
            @error('ingredients')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 
        <div class="form-group">
            <label for="price">Prix *</label>
            <input type="number" name="price" id="price" min="0.00" max="999.99" step="0.01"
            class="@error('price') is-invalid @enderror"
            value="{{ old('price',$dish->price)}}">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description *</label>
            <textarea name="description" id="description" cols="30" rows="10" 
            class="@error('description') is-invalid @enderror">{{ old('description',$dish->description)}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 
        
        <div class="form-group">
            <button type="submit" name="subFormCreate" class="add">Enregistrer</button>
        </div>
        <div class="form-group">
        <a href="/" class=add>Retour</a></div>
    </form>
</body>
</html>