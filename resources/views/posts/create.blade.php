<x-layouts.app title="Crear nuevo post" meta-description="Formuklario para crear un nuevo blog post">
    <h1>Create new post</h1>

    <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <label for="">
            Title<br>
            <input name="title" type="text">
        </label><br>
        <label>
            Body<br>
            <textarea name="body"> </textarea>
        </label><br>
        <button type="submit">Enviar</button><br>
    </form>



    <a href="{{ route('post.index') }}">regresar</a>


</x-layouts.app>
