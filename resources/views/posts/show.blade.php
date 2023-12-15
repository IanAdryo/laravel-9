
<x-layouts.app
    :title="$post->title"
    meta-description="Blog meta description"
>
<h1>{{ $post->title }}</h1>
<h2>{{ $post->body }}</h2>

<a href="{{ route('post.index') }}">regresar</a>


</x-layouts.app>
