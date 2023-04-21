<?php

$album =     [
    'id' => 1,
    'nome' => "Minhas fotos",
    'descricao_curta' => "Teste",
    'descricao' => 'Teste',
    'imagem_inicial' => 'floresta.jpg'
];
?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light"><?= $album['nome'] ?> <a> Voltar</a></h1>
            <p class="lead text-muted"><?= $album['descricao_curta'] ?></p>
            <p>
                <a href="<?= route('') ?>" class="btn btn-primary my-2">Voltar Ao inicio</a>
                <a href="<?= route('album.edit', $album['id']) ?>" class="btn btn-secondary my-2">Editar</a>
                <a href="<?= route('album.delete', $album['id']) ?>" class="btn btn-danger my-2">Excluir</a>
            </p>
        </div>
    </div>
</section>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="targets-wrapper">
            <a href="https://stephanwagner.me/img/jBox/demo/image1.jpg" title='<?= $album['nome'] ?>' data-jbox-image="gallery1" class="demo-img"><img src="https://stephanwagner.me/img/jBox/demo/image1-preview.jpg" alt=""></a>
            <a href="https://stephanwagner.me/img/jBox/demo/image1.jpg" data-jbox-image="gallery1" class="demo-img"><img src="https://stephanwagner.me/img/jBox/demo/image1-preview.jpg" alt=""></a>
            <a href="https://stephanwagner.me/img/jBox/demo/image1.jpg" data-jbox-image="gallery1" class="demo-img"><img src="https://stephanwagner.me/img/jBox/demo/image1-preview.jpg" alt=""></a>
            <a href="https://stephanwagner.me/img/jBox/demo/image1.jpg" data-jbox-image="gallery1" class="demo-img"><img src="https://stephanwagner.me/img/jBox/demo/image1-preview.jpg" alt=""></a>
            <a href="https://stephanwagner.me/img/jBox/demo/image1.jpg" data-jbox-image="gallery1"></a>
        </div>

    </div>
</div>