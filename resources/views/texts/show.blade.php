showページ<br>

id:{{$text->id}}<br>
title:{{$text->title}}<br>
content:{{$text->content}}<br>
email:{{$text->email}}<br>
price:{{$text->price}}<br>


<a href="{{route('texts.index')}}">一覧へ</a>
<a href="{{route('texts.edit',['id'=>$text->id])}}">編集する</a>
<form method="post" action="{{route('texts.delete',['id'=>$text->id])}}">
  @csrf
  <button>削除する</button>
</form>