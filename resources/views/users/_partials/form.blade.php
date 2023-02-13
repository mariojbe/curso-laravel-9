@csrf
<div class="form-group mb-3">
    <label for="name" class="form-label">Nome</label>
    <input class="form-control" type="text" name="name" id="name" placeholder="Nome" autofocus
        value="{{ $user->name ?? old('name') }}">
</div>
<div class="form-group mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input class="form-control" type="email" name="email" id="email" placeholder="E-mail"
        value="{{ $user->email ?? old('email') }}">
</div>
<div class="form-group mb-3">
    <label for="password" class="form-label">Senha</label>
    <input class="form-control" type="password" name="password" id="password" placeholder="Senha" value="">
</div>
<div class="form-group mb-3">
    <label for="password" class="form-label">Imagem de Perfil</label>
    <input class="form-control" type="file" name="image" id="password" value="">
</div>
<div class="d-grid gap-2">
    <input type="submit" class="btn btn-success" value="Salvar">
</div>
