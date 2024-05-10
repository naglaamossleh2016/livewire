<div>
    I am Parent component
    @foreach ($childern as $child)
        @livewire('child-component', ['childname' => $child, key($child)])
    @endforeach
</div>
