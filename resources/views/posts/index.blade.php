<x-layouts.app 
    title="Blog" 
    meta-description="Blog meta description"
    >

   

    <h1>Blog :DDDD</h1> 
    <a href="{{ route('posts.create')}}">Crear nuevo post</a>
    @foreach ($posts as $post)
        <h2> 
            <a href="{{ route('posts.show', ['post'=>$post])}}">
                {{ $post->title}}
            </a>
        </h2>
    @endforeach
</x-layouts.app>