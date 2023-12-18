
<x-layouts.app
    :title="$post->title"
    meta-description="Blog meta description"
>
<h1>Edit form</h1>

<form method="POST" action="{{ route('post.update', $post) }}" method="POST">
    @csrf @method('PATCH')
    <label for="">
        Title<br>
        <input name="title" type="text" value="{{ old('title', $post->title) }}">
        @error('title')
        <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label><br>
    <label>
        Body<br>
        <textarea name="body">{{ old('body', $post->body) }}</textarea>
        @error('body')
        <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label><br>
    <button type="submit">Enviar</button><br>
</form>

<a href="{{ route('post.index') }}">regresar</a>


</x-layouts.app>
