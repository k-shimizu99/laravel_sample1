editページです。<br>
@if($errors->any())
@foreach($errors->all() as $error)
<div>{{$error}}</div>
@endforeach

@endif
<a href="{{route('texts.show',['id'=>$text->id])}}">戻る</a>
<form method="post" action="{{route('texts.update',$text->id)}}">
  @csrf
  <label>タイトル</label>
  <input type="text" name="title" value="{{$text->title}}"><br>
  <label>内容</label>
  <input type="text" name="content" value="{{$text->content}}"><br>
  <label>メールアドレスは変更できません</label>
  {{$text->email}}<br>
  <label>料金</label>
  <input type="number" name="price" value="{{$text->price}}"><br>
  <input id="visible" checked type="radio" name="is_visible" value=1>
  <label for="visible">表示する</label>
  <input id="non_visible" type="radio" name="is_visible" value=0>
  <label for="non_visible">非表示にする</label>
  <button>更新する</button>
</form>