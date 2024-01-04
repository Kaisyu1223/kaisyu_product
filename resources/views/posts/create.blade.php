<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            index
        </x-slot>
        <body>
            <h1>酒呑みの広場</h1>
            <form action="/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <div class='categories'>
                    <select id='category'>
                        @foreach($categories as $category)
                        <option value={{ $category->id}}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='subcategories'>
                    <select id='subcategory' name=post[subcategory_id]>
                        @foreach($subcategories as $subcategory)
                        <option value={{ $subcategory->id}}>{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='liquer'>
                    <h2>Liquer name</h2>
                    <input type="text" name="post[liquer]" placeholder="お酒の名前を入力"value="{{ old('post.title') }}"/>
                    <p class="liquer__error" style="color:red">{{ $errors->first('post.liquer') }}</p>
                </div>
                <div class='body'>
                    <h2>body</h2>
                    <textarea name="post[body]" placeholder="お酒の感想を入力">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <div class='evaluation'>
                    <h2>5段階評価</h2>
                        <input type="radio" id="star5" name="post[evaluation]" value="5" />
                        <label for="star5">5</label>
                        <input type="radio" id="star4" name="post[evaluation]" value="4" />
                        <label for="star4">4</label>
                        <input type="radio" id="star3" name="post[evaluation]" value="3" />
                        <label for="star3">3</label>
                        <input type="radio" id="star2" name="post[evaluation]" value="2" />
                        <label for="star2">2</label>
                        <input type="radio" id="star1" name="post[evaluation]" value="1" />
                        <label for="star1">1</label>
                </div>
                <div class="image">
                    <input type="file" name="images[]" multiple>
                </div>
                <input type="submit" value="store"/>
            </form>
            <div class='back'>[<a href="/">back</a>]</div>
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