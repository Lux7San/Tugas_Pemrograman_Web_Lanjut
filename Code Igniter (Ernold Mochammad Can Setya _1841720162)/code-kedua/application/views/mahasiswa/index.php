<div class="container">
<div class="row mt-3">
    <div class="col-md-6">
        <h2>Dasar Mahasiswa</h2>
    <ul class="list-group">
        <?php foreach($mahasiswa as $mhs):?>
            <li class="list-group-item"><?= $mhs['nama'];?></li>
        <?php endforeach;?>
        <!-- <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li> -->
    </ul>
    </div>
</div>
</div>