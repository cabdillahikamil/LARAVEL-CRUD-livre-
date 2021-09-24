@foreach ($posts as $post)
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
                    <th style="padding: 12px 15px;">title</th>
                    <th style="padding: 12px 15px;">body</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 12px 15px;">{{$post->id}}</td>
                    <td style="padding: 12px 15px;">{{$post->title}}</td>
                    <td style="padding: 12px 15px;">{!! nl2br(e($post->body)) !!}</td>
                    <a style="padding: 12px 15px;" href="{{route('posts.show', $post->id)}}">VOIR</a>
                    <a style="padding: 12px 15px;" href="{{route('posts.edit', $post->id)}}">MODIFIER</a>
                    <a style="padding: 12px 15px;" href="{{route('posts.delete', $post->id)}}">SUPPRIMER</a>
                </tr>
            </tbody>    
        </table>
    </div>
@endforeach    