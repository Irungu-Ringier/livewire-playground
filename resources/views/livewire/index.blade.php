<div>
    @foreach($users as $user)
        @livewire('say-hi', ['name' => $user->name, 'email' => $user->email], key($user->id))
    @endforeach
</div>
