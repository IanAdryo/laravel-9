<x-layouts.app title="Blog" meta-description="Blog meta description">

    <h1>Blog</h1>
    <a href="{{ route('post.create') }}">Create new post</a>

    @foreach ($posts as $post)
    <div style="display: flex; align-items:baseline">
        <h2>
            <a href="{{ route('post.show', $post->id) }}">
                {{ $post->title }}
            </a>
        </h2> &nbsp;
        <a href="{{ route('post.edit', $post) }}">Edit</a>
        &nbsp;
        <form action="{{ route('post.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        </form>

    </div>
    @endforeach
</x-layouts.app>
