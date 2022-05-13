<div class="col-md-12">
    <h3>Daftar Matakuliah</h3>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($list_pkn as $pkn){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$pkn->nama?></td>
                    <td><?=$pkn->sks?></td>
                    <td><?=$pkn->kode?></td>
                </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
</div>