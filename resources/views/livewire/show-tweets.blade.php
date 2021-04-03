<div class="container pt-4 mx-auto">
    <h1 class="mb-5 text-2xl font-bold uppercase">Tweets</h1>

    <div class="container p-4 bg-white rounded shadow-lg">
        Tweet
        <form method="post" wire:submit.prevent="create">
            <div class="flex flex-col">
                @error('content')
                    <div class="p-2 my-4 bg-yellow-200 rounded">
                        {{ $message }}
                    </div>
                @enderror

                <textarea class="rounded" name="content" placeholder="O que você está pensando agora?" id="content" wire:model="content"></textarea>
                <button type="submit" class="w-20 py-2 my-4 text-white bg-blue-500 rounded">Tweet</button>
            </div>
        </form>
    </div>

    <hr>

    @foreach ($tweets as $tweet)
        <div class="container flex p-4 my-2 bg-white rounded shadow-lg">
            <div class="w-2/8">
                @if ($tweet->user->photo)
                    <img class="w-8 rounded rounded-full" src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{ $tweet->user->name }}">
                @else
                    <img class="w-8 rounded rounded-full" src="{{ url('img/no-image.png') }}" alt="{{ $tweet->user->name }}">
                @endif
            </div>
            <div class="flex-1 px-4">
                {{ $tweet->content }}
            </div>
            <div class="w-20">
                @if ($tweet->likes->count())
                    <a href="#" wire:click.prevent="unlike({{ $tweet->id }})" class="block py-1 text-center text-white bg-red-500 rounded">Unlike</a>
                @else
                <a href="#" wire:click.prevent="like({{ $tweet->id }})" class="block py-1 text-center text-white bg-blue-500 rounded">Like</a>
                @endif
            </div>
        </div>
    @endforeach

    <hr>

    <div>
        {{ $tweets->links() }}
    </div>

</div>
