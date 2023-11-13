<div>
    <form wire:submit="search">
        <input type="text" wire:model="query">

        <button type="submit">Search posts</button>
    </form>

    <div>
        @foreach ($posts as $post)
            <!-- ... -->
        @endforeach
    </div>

    {{ $posts->links() }}
</div>
