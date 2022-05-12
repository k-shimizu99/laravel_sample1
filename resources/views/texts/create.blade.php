<a href="{{route('texts.index')}}">top</a>
クリエイトページです。


@if($errors->any())
@foreach($errors->all() as $error)
<div>{{$error}}</div>
@endforeach

@endif

<form method="post" action="{{route('texts.store')}}">
  @csrf
  <label>タイトル</label>
  <input type="text" name="title" value="{{old('title')}}"><br>
  <label>内容</label>
  <input type="text" name="content" value="{{old('content')}}"><br>
  <label>メール</label>
  <input type="email" name="email" value="{{old('email')}}"><br>
  <label>料金</label>
  <input type="number" name="price" value="{{old('price')}}"><br>
  <input id="visible" checked type="radio" name="is_visible" value=1>
  <label for="visible">表示する</label>
  <input id="non_visible" type="radio" name="is_visible" value=0>
  <label for="non_visible">非表示する</label>
  <button>作成</button>
</form>