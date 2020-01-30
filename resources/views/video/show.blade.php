<h1>The name of the video is {{ $video->name }}</h1>


<ul>
  @foreach($video->comments as $comment)
  <li>{{ $comment->body }}</li>
  @endforeach
</ul>
