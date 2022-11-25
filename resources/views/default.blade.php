<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
'recipeCount': {{ $recipeCount }} <br>
@if($todaysRecipe)
'todaysRecipe': {{ $todaysRecipe->name }} <br>
@endif
@if($latestRecipes->count())
'latestRecipes': <br>
<ul>
@foreach($latestRecipes as $recipe)
    <li>{{ $recipe->name }}</li>
@endforeach
</ul>
@endif
</body>
</html>
