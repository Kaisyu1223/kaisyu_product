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
                        <p class='evaluation'>{{ $post->evaluation }}点</p>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                        </form>
                    </div>
                    ---------------------------------------------
                @endforeach
            </div>
            <div>
                <a href='/posts/create'>create</a>
            <div class='paginate'>
                {{ $posts->links() }}
            </div>
            <script>
                function deletePost(id) {
                    'use strict'
            
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>