<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style1.css">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire</h1>
<form action = "{{route('posts.update', $post->id)}}"  method = "post"> 
        @csrf
        <p>
            <label for = "title" class = 'left'>Title:</label>
            <input  name = "title" id = "title" type = "text" value= "{{$post->title}}" size="30" /> 
        </p>
        <p>
            <label for = "body" class = 'left'>Body :</label>
            <textarea  name = "body" id = "body"  rows = "4" cols = "50">{!! nl2br(e($post->body)) !!}</textarea>
        </p>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>