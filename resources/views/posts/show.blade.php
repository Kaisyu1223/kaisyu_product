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
                            <a href="/subcategories/{{ $post->subcategory->id }}">{{ $post->subcategory->name }}</a>
                            <p>{{ $post->body }}</p>
                            <p>{{ $post->evaluation}}点</p>
                            <div>
                                @foreach($post->images as $image)
                                <img src="{{ $image->image_url }}" alt="画像が読み込めません。"/>
                                @endforeach
                            </div>
                        </div>
                    </div>    
            </div>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>