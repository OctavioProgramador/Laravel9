<x-layouts.app 
    title="Blog" 
    meta-description="Blog meta description"
    >
    <h1>Blog :DDDD</h1> 
    @foreach ($posts as $post)
        <h2> 
            <a href="/blog/{{ $post->id}}">
                {{ $post->title}}
            </a>
        </h2>
    @endforeach
</x-layouts.app>