<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            index
        </x-slot>
        <body>
            <h1>酒呑みの広場</h1>
            <form action="/posts" method="POST">
                @csrf
                <div class='categories'>
                    <select id='category'>
                        @foreach($categories as $category)
                        <option value={{ $category->id}}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='subcategories'>
                    <select id='subcategory'>
                        @foreach($subcategories as $subcategory)
                        <option value={{ $subcategory->id}}>{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='liquer'>
                    <h2>Liquer name</h2>
                    <input type="text" name="post[liquer]" placeholder="お酒の名前"/>
                </div>
                <div class='body'>
                    <h2>body</h2>
                    <textarea name="post[body]" placeholder="お酒の感想を入力"></textarea>
                </div>
                <div class='evaluation'>
                    <select>
                        <option>1</option>
                    </select>
                </div>
                <input type="submit" value="store"/>
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