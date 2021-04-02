<div>
    Show Tweets!
    <p>
        {{ $message }}
    </p>

    <hr>

    @foreach ($tweets as $tweet)
        <p><b>{{ $tweet->user->name }}</b> - {{ $tweet->content }}</p>
    @endforeach

    <input type="text" name="message" id="message" wire:model="message">
</div>
