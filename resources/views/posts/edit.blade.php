<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            index
        </x-slot>
        <body>
            <h1>投稿編集画面</h1>
            <form action="/posts" method="POST">
                @csrf
                @method('PUT')
                <div class='content_categories'>
                    <select id='category'>
                        @foreach($categories as $category)
                        <option value={{ $category->id}}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='content_subcategories'>
                    <select id='subcategory'>
                        @foreach($subcategories as $subcategory)
                        <option value={{ $subcategory->id}}>{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='content__liquer'>
                    <h2>お酒の名前を編集</h2>
                    <input type='text' name='post[title]' value="{{ $post->liquer }}">
                </div>
                <div class='content__body'>
                    <h2>お酒の感想を編集</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <div class='content__evaluation'>
                    <h2>5段階評価</h2>
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5">5</label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4">4</label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3">3</label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2">2</label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1">1</label>
                </div>
                <input type="submit" value="保存"/>
            </form>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
            <script>
            var select = document.querySelector('#category');
            console.log(select);
            select.addEventListener('change', function(){
                console.log(this.value);
                foreach($subcategories as $subcategory){
                    if(this.value == $subcategory->id){
                        
                    }
                }
            });
            </script>
        </body>
    </x-app-layout>
</html>