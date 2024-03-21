<div>
    <h1>Show Tweets</h1>
    <p>{{ $message }}</p>

    <input type="text" name="message" wire:model.blur="message" id="message">

    <hr>

    @foreach ($tweets as $tweet)
        <div>
            <p>{{ $tweet->user->name }} - {{ $tweet->content }}</p>
        </div>
    @endforeach
</div>
