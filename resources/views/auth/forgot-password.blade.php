<h3>Mot de passse oublier</h3>

<div>
    <form action="forgot-password" method="post">
        @csrf
        <input type="email" name="email">
        <button type="submit">Envoyé</button>
    </form>
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif
</div>
