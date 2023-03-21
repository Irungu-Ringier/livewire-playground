<div>
    @foreach($users as $user)
        @livewire('say-hi', ['name' => $user->name, 'email' => $user->email], key($user->id))
        <button wire:click="delete({{$user}})">Delete</button>
        <br><br><br>
    @endforeach
</div>
