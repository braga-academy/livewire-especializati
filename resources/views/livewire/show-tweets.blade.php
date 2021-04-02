<div>
    Show Tweets!
    <p>
        {{ $message }}
    </p>

    <hr>

    @foreach ($tweets as $tweet)
        <p><b>{{ $tweet->user->name }}</b> - {{ $tweet->content }}</p>
    @endforeach

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="message" id="message" wire:model="message">
        <button type="submit">Tweet</button>
    </form>
</div>
