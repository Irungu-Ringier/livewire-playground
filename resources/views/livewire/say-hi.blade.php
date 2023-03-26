<div>
    Hi <strong>{{ $name }}</strong> : {{ now() }}
    <button wire:click="$emitUp('foo')">Refresh</button>
</div>
