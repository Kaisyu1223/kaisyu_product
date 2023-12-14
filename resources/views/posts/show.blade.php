<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            index
        </x-slot>
        <body>
            <h1>酒呑みの広場</h1>
            <div class='posts'>
                <div class='post'>
                    <h1 class='liquer'>
                        {{ $post->liquer }}
                    </h1>
                    <div class='content'>
                        <div class='content_post'>
                            <a href="">{{ $post->subcategory->name }}</a>
                            <p>{{ $post->body }}</p>
                            <p>{{ $post->evaluation}}</p>
                        </div>
                    </div>    
            </div>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>