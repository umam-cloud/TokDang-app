<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL?>/css/bootstrap.css">
    <title><?= $data['judul'] ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-5 py-3">
        <a class="navbar-brand fw-semibold" href="<?=BASEURL?>">PHP-MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="<?=BASEURL?>">Home</a>
            <a class="nav-link" href="<?=BASEURL?>/Mahasiswa">Mahasiswa</a>
            <a class="nav-link" href="<?=BASEURL?>/about">About</a>
        </div>
        </div>
    </div>
    </nav>