
<div>
    <input type="text" wire:model="todo" placeholder="Todo...">

    <button wire:click="add">Add Todo</button>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>

{{-- For example, we can use $wire to show a live character count of the todo input field: --}}
{{-- Accessing properties from JavaScript --}}
<div>
    <input type="text" wire:model="todo">

    Todo character length: <h2 x-text="$wire.todo.length"></h2>
</div>

<div>
    <input type="text" wire:model="todo">

    Todo character length: <h2 x-text="$wire.todo.length"></h2>
</div>

<div>
    <input type="text" wire:model="todo">

    <button x-on:click="$wire.todo = ''">Clear</button>
</div>

{{-- Notice, inside your views, you can only access computed properties on the $this object like so: $this->todos --}}

<ul>
    @foreach ($this->todos as $todo)
        <li>{{ $todo }}</li>
    @endforeach
</ul>
