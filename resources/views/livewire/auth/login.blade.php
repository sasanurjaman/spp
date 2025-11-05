<div class="container d-flex justify-content-center align-items-center vh-100">
    {{-- The whole world belongs to you. --}}

    <div class="card rounded-4 shadow-lg" style="max-width: 20rem;">
        <div class="card-body">
            <h3 class="card-title text-center">Login</h3>
            <form class="row g-3 needs-validation" novalidate wire:submit.prevent="submit">
                @csrf
                <label for="email" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <input wire:model="email" type="text"
                        class="form-control rounded-5 @error('email') is-invalid @enderror" id="email" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <label for="password" class="form-label">Password</label>
                <div class="input-group has-validation">
                    <input wire:model="password" type="password"
                        class="form-control rounded-start-5 @error('password') is-invalid @enderror" id="password"
                        autocomplete="off" required>
                    <label class="input-group-text rounded-end-5" for="password" id="icon-eye"><i
                            class="bi bi-eye-slash"></i></label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                old('remember') ? 'checked' : '' }} id="rememberMe">
                            <label class="form-check-label" for="remember">Ingat saya</label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary rounded-5" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>