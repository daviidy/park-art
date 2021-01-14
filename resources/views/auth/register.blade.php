<h3>Inscription</h3>

<form action="register" method="post">
    @csrf
    
    
    <label for="">Votre nom</label>
    <input type="name" name="name" id="">
    @error('name')
    <p>{{ $message }}</p>
    @enderror
    <label for="">Email</label>
    <input type="email" name="email" id="">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <label for="">Mot de passe</label>
    <input type="password" name="password">

    <label for="">Mot de passe confirmaton</label>
    <input type="password" name="password_confirmation">
    @error('password')
        <p>{{ $message }}</p>
    @enderror

    <label for="client">
        Je suisn client 
    </label>
    <input type="radio" value="1" name="role_id" id="client">

    <label for="freelance">
        Je suis freelancer
    </label>
    <input type="radio" value="2" name="role_id" id="freelance">

    @error('role_id')
        <p>{{ $message }}</p>
    @enderror
    <button type="submit">S'enregister</button>
</form>