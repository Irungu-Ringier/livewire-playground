<div>
    @foreach($users as $user)
        @livewire('say-hi', ['name' => $user->name, 'email' => $user->email], key($user->id))
        <br><br>
    @endforeach

    <hr>
        Parent: {{ now() }}
    <button wire:click="$emit('refreshChildren')">Refresh Parent</button>
</div>
