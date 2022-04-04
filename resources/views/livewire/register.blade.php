<div>
    <form wire:submit.prevent="register">
        <div>
            <label for="name">Nombre: </label>
            <input type="text" wire:model="name" id="name">
        </div>
        <div>
            <label for="email">Correo: </label>
            <input type="email" wire:model="email" id="email">
        </div>
        <div>
            <label for="password">Contraseña: </label>
            <input type="password" wire:model="password" id="password">
        </div>
        <div>
            <label for="confirmed">Confirmar Contraseña: </label>
            <input type="password" wire:model="confirmed" id="confirmed">
        </div>

        <input type="submit" value="Registrar">
    </form>
</div>
