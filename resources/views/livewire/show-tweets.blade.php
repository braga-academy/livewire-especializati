<div>
    Show Tweets!
    <p>
        {{ $content }}
    </p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content'){{ $message }}@enderror
        <button type="submit">Tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        <div class="flex">
            <div class="w-2/8 ">
                @if ($tweet->user->photo)
                    <img class="rounded rounded-full w-8" src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{ $tweet->user->name }}">
                @else
                    <img class="rounded rounded-full w-8" src="{{ url('img/no-image.png') }}" alt="{{ $tweet->user->name }}">
                @endif
                <p><b>{{ $tweet->user->name }}</b><p>
            </div>
            <div class="w-6/8">
                {{ $tweet->content }}
                @if ($tweet->likes->count())
                    <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
                @else
                <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
                @endif
            </div>
        </div>
    @endforeach

    <hr>

    <div>
        {{ $tweets->links() }}
    </div>

</div>
