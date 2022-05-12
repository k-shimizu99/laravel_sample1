



<h1>一覧ページ</h1>

@if(session('flash_message'))
<div>{{session('flash_message')}}</div>
@endif



@foreach($allpost as $post)

<div><a href="{{route('texts.show',['id'=>$post->id])}}">{{$post->id}}</a>:{{$post->title}}:{{$post->price}}</div><br>

@endforeach


<h2>非表示の投稿</h2><br>
@foreach($allpost as $post)
@if($post->is_visible==0)
<div><a href="{{route('texts.show',['id'=>$post->id])}}">{{$post->id}}</a>:{{$post->title}}:{{$post->price}}</div><br>
@endif
@endforeach


<a href="{{route('texts.create')}}">新規作成</a>