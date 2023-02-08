<div>
    @if ($register) 
        <form wire:submit.prevent="register">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" wire:model="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" wire:model="password">
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
            <a href="#" wire:click="toggleRegister" class="btn btn-link">Already have an account? Login</a>
        </form>
    @else
        <form wire:submit.prevent="login">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" wire:model="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" wire:model="password">
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <a href="#" wire:click="toggleRegister" class="btn btn-link">Don't have an account? Register</a>
        </form>
    @endif
</div>
