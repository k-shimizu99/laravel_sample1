<!-- <a href="{{ route('samples.create') }}">新規登録</a> <br> -->

@if(session('flash_message'))
  <div>{{ session('flash_message') }}</div>
@endif


@foreach($texts as $text)
<a href="{{ route('samples.show', [ 'id' => $text->id ] ) }}">
  {{ $text->id}}</a>
  
  : {{ $text->title }} : {{ $text->content }} <br>
@endforeach