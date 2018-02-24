<div class="post-preview">
  <a href="{{ url('/post/' . $post->slug) }}">
    <h2 class="post-title">
    {{ $post->title }}
    </h2>
    <h3 class="post-subtitle">
    {{ $post->excerpt }}
    </h3>
  </a>
  <p class="post-meta">Publicado por <a href="#">{{ $post->author->name }}</a> em {{ $post->created_at->format('d/m/Y') }}</p>
</div>
<hr>