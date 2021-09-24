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
<form action = "{{route('livres.update', $livre->id)}}"  method = "post"> 
        @csrf
        <p>
            <label for = "titre" class = 'left'>Titre :</label>
             <input  name = "titre" id = "titre" type = "text" value= "{{$livre->titre}}" size="30" /> 
        </p>
        <p>
            <label for = "auteur" class = 'left'>Auteur :</label>
            <input  name = "auteur" id = "title" type = "text" value= "{{$livre->auteur}}" size="30" /> 
        </p>
        <p>
            <label for = "resume" class = 'left'>Resume :</label>
            <input  name = "resume" id = "resume" type = "text" value= "{{$livre->resume}}" size="30" /> 
        </p>
        <p>
            <label for = "isbn" class = 'left'>Isbn :</label>
            <input  name = "isbn" id = "isbn" type = "text" value= "{{$livre->isbn}}" size="30" /> 
        </p>
        <p>
            <label for = "prix" class = 'left'>Prix :</label>
            <input  name = "prix" id = "prix" type = "text" value= "{{$livre->prix}}" size="30" /> 
        </p>
        <p>
            <label for = "eidteur" class = 'left'>Editeur :</label>
            <input  name = "editeur" id = "title" type = "text" value= "{{$livre->editeur}}" size="30" /> 
        </p>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>