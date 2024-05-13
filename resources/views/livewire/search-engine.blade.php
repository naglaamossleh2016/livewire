<div class="w-50 m-auto mt-5">
    <input type="text" class="form-control mb-5 mt-5" wire:model.live="search">
    @if (count($posts))
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->name }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
