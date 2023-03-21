<div>
    <input type="text" wire:model.debounce.500ms="name">
    <input type="checkbox" wire:model="status">
    <select wire:model="greeting" multiple>
        <option>Hey</option>
        <option>Haiya</option>
        <option>Sema</option>
    </select>
    {{ implode(', ', $greeting) }} - {{ $name }} @if($status) !!!!!! @endif

    <form action="#" wire:submit.prevent="resetName('Partner')">
        <button>Reset Name</button>
    </form>
</div>
