@foreach ($livres as $livre)
    <div>
        <table style="border-collapse: collapse; margin: 25px 0;
                        font-size: 0.9em;
                        font-family: sans-serif;
                        min-width: 400px;
                        table-layout: fixed;
                        width : 100%;
                        border: 3px solid purple;
                        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
            <thead>
                <tr style="background-color: #009879;
                        color: #ffffff;
                        text-align: left;">
                    <th style="padding: 12px 15px;">id</th>
                    <th style="padding: 12px 15px;">titre</th>
                    <th style="padding: 12px 15px;">auteur</th>
                    <th style="padding: 12px 15px;">resume</th>
                    <th style="padding: 12px 15px;">isbn</th>
                    <th style="padding: 12px 15px;">prix</th>
                    <th style="padding: 12px 15px;">editeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 12px 15px;">{{$livre->id}}</td>
                    <td style="padding: 12px 15px;">{{$livre->titre}}</td>
                    <td style="padding: 12px 15px;">{{$livre->auteur}}</td>
                    <td style="padding: 12px 15px;">{{$livre->resume}}</td>
                    <td style="padding: 12px 15px;">{{$livre->isbn}}</td>
                    <td style="padding: 12px 15px;">{{$livre->prix}}</td>
                    <td style="padding: 12px 15px;">{{$livre->editeur}}</td>
                    <a style="padding: 12px 15px;" href="{{route('livres.show', $livre->id)}}">VOIR</a>
                    <a style="padding: 12px 15px;" href="{{route('livres.edit', $livre->id)}}">MODIFIER</a>
                    <a style="padding: 12px 15px;" href="{{route('livres.delete', $livre->id)}}">SUPPRIMER</a>
                    <a style="padding: 12px 15px;" href="{{route('livres.create', $livre->id)}}">AJOUTER</a>
                </tr>
            </tbody>    
        </table>
    </div>
@endforeach  