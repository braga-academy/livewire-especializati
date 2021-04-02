<div>
    <h2>Atualizar Foto do Perfil</h2>

    <form method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        @error('photo') {{ $message }} @enderror
        <button type="submit">Upload</button>
    </form>
</div>
