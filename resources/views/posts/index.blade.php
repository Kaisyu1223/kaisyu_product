<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>酒呑みの広場</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>酒呑みの広場</h1>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='liquer'>{{ $post->liquer }}</h2>
                    <p class='subcategories'>{{ $post->subcategory_id}}</p>
                    <p class='body'>{{ $post->body }}</p>
                    <p class='evaluation'>{{ $post->evaluation }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>