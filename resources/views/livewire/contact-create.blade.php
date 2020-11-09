<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1>Criar contato</h1>

    <div>
    <form method="post" wire:submit.prevent="create">

        <div>
            <label>Nome</label>

            <input type="text" wire:model="name">

            <div class="error-message">
                @error('name')
                    {{$message}}
                @enderror
            </div>
        </div>

        <div>
            <label>Email</label>

            <input type="email" wire:model="email">

            <div class="error-message">
                @error('email')
                    {{$message}}
                @enderror
            </div>
        </div>

        <div>
            <label>Telefone</label>

            <input type="text"  wire:model="phone">

            <div class="error-message">
                @error('phone')
                    {{$message}}
                @enderror
            </div>
        </div>

        <button type="submit">
            Adicionar Contato
        </button>
    </form>
</div>
