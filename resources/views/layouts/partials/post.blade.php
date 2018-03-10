<div class="post-preview">
  <a href="{{ url('/blog/post/' . $post->slug) }}">
    <h2 class="post-title">
    {{ $post->title }}
    </h2>
    <h3 class="post-subtitle">
    {{ $post->excerpt }}
    </h3>
  </a>
  <p class="post-meta">Publicado por <a href="#">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
</div>
<hr>