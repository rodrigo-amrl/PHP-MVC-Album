<div class="col">
    <div class="card shadow-sm">
        <img src="<?= asset_url('imagens/albuns/' . $album['imagem_inicial']) ?>" />

        <div class="card-body">
            <h5><?= $album['nome'] ?></h5>
            <p class="card-text"><?= $album['descricao_curta'] ?></p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="<?= route('album.show', $album['id']) ?>" class="btn btn-sm btn-outline-secondary">View</a>
                    <a href="<?= route('album.edit', $album['id']) ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
                <small class="text-muted">9 mins</small>
            </div>
        </div>
    </div>
</div>