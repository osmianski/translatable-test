<form wire:submit.prevent="save">
    <p>
        <label for="author">{{ __('Author') }}</label>
        <input wire:model.defer="author" type="text" id="author">
    </p>
    <p>
        <label for="title">{{ __('Title') }}</label>
        <input wire:model.defer="title" type="text" id="title">
    </p>
    <p>
        <label for="content">{{ __('Content') }}</label>
        <textarea wire:model.defer="content" id="content" rows="5" cols="80"></textarea>
    </p>
    <button type="submit">Save</button>
</form>
