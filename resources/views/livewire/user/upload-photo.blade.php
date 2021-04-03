<div class="p-5">
    <div class="container flex flex-col mx-auto mt-5 bg-white rounded shadow-lg">
        <h2 class="my-4 font-bold text-center">Atualizar Foto do Perfil</h2>
        @if($photo)
            <div class="m-5 mx-auto">
                <img class="w-48 rounded rounded-full shadow-lg" src="{{ $photo->temporaryUrl() }}">
            </div>
        @endif

        <form method="post" wire:submit.prevent="storagePhoto" class="text-center">
            <input type="file" wire:model="photo">
            @error('photo')
                <div class="w-1/3 p-2 mx-auto my-4 bg-yellow-200 rounded">
                    {{ $message }}
                </div>
            @enderror
            <div class="py-4">
                <button type="submit" class="px-4 py-2 text-white bg-indigo-600 rounded">Upload</button>
            </div>
        </form>
    </div>
</div>
