
<x-layouts.app
    :title="$post->title"
    meta-description="Blog meta description"
>
<h1>Edit form</h1>

<form method="POST" action="{{ route('post.update', $post) }}" method="POST">
    @csrf @method('PATCH')
    @include('posts.form-fields')
    <button type="submit">Enviar</button><br>
</form>

<a href="{{ route('post.index') }}">regresar</a>


</x-layouts.app>
