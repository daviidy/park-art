<h3>Login</h3>

<form action="login" method="post">
    @csrf

    <label for="">Email</label>
    <input type="email" name="email" id="">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <label for="">Mot de passe</label>
    <input type="password" name="password">
    @error('password')
        <p>{{ $message }}</p>
    @enderror
    <button type="submit">Connexion</button>
</form>