<x-layouts.app 
    title="Home" 
    meta-description="Inicio"
    >
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Inicio
      </h1>
      @auth
      <div class="text-black">
        Authenticated User: {{ Auth::user()->name}}
      </div>
      @endauth
</x-layouts.app>