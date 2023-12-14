<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            index
        </x-slot>
        <body>
            <h1>酒呑みの広場</h1>
            <div class='posts'>
                @foreach($posts as $post)
                    <div class='post'>
                        <h2 class='liquer'>
                            <a href="/posts/{{ $post->id }}">{{ $post->liquer }}</a>
                        </h2>
                        <a href="">{{ $post->subcategory->name }}</a>
                        <p class='body'>{{ $post->body }}</p>
                        <p class='evaluation'>{{ $post->evaluation }}</p>
                    </div>
                    ---------------------------------------------
                @endforeach
            </div>
            <div class='paginate'>
                {{ $posts->links() }}
            </div>
        </body>
    </x-app-layout>
</html>