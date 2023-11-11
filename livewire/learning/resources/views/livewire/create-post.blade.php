<div>
    hello

    <h1>"{{$title}}"</h1>
</div>

<div>
    <h1>Title: "Post title..."</h1>
</div>

{{-- Sharing additional data with the view --}}

<div>
    <h1>Title: {{ $title }}</h1>

    <span>Author: {{ $author }}</span>
</div>

{{-- Binding inputs to properties --}}
<form>
    <label for="title">Title:</label>

    <input type="text" id="title" wire:model="title">
</form>

{{-- Calling actions --}}

<form wire:submit="save">
    <label for="title">Title:</label>

    <input type="text" id="title" wire:model="title">

    <button type="submit">Save</button>
</form>
