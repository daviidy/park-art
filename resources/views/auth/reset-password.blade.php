<form action="/reset-password" method="post">
    @csrf
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
    <div>
        <label for="">Entrée votre adresse e-mail</label>
        <input type="email" name="email">
        @error('email')
            {{ $message }}
        @enderror
    </div>
    <div>
        <label for="">Entrée votre nouveau mot de passe</label>
        <input type="password" name="password">
        @error('password')
            {{ $message }}
        @enderror
    </div>
    <div>
        <label for="">Confirmer votre nouveau mot de passe</label>
        <input type="password" name="password_confirmation">
        @error('password_confirmation')
            {{ $message }}
        @enderror
    </div>

    <input type="hidden" name="token" value="{{ request()->route('token') }}">
    <div>
        <button type="submit">Changer de mot de passe</button>
    </div>
</form>
