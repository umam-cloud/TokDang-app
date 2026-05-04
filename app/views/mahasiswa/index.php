<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1>DAFTAR MAHASISWA</h1>
              <ul class="list-group">
                <?php foreach($data['mahasiswa'] as $mhs): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mhs['nama']?>
                        <a href="<?= BASEURL?>/mahasiswa/detail/<?=$mhs['id_mahasiswa']?>" class="btn btn-primary">Detail</a>
                    </li>
                <?php endforeach ?>
             </ul>
        </div>
    </div>
  
</div>