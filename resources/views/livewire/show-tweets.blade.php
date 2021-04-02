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
        <p><b>{{ $tweet->user->name }}</b> - {{ $tweet->content }}</p>
    @endforeach

</div>
