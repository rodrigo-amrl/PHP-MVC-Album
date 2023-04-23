<link href="<?= vite_url('css/admin/login.css') ?>" rel="stylesheet">



<main class="form-signin">
    <form action="<?= route('admin.login') ?>" method="post">
        <img class="mb-4" src="<?= asset_url('imagens/admin/login.gif') ?>">
        <h1 class="h3 mb-3 fw-normal">Faça seu login</h1>

        <div class="form-floating">
            <input type="email" name="email" required class="form-control">
            <label>Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="senha" required class="form-control">
            <label>Senha</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    </form>
</main>