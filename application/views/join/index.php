<div class="container">
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Anggota</th>
                        <th>ID Unit</th>
                        <th>Name</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Ket</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $a) : ?>
                        <tr>
                            <th>#</th>
                            <td><?= $a['id_anggota']; ?></td>
                            <td><?= $a['id_unit']; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['jenis_kelamin']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td><?= $a['no_hp']; ?></td>
                            <td><?= $a['ket']; ?></td>
                            <td>
                                <a href="" class="badge bg-warning">detail</a>
                                <a href="" class="badge bg-success">edit</a>
                                <a href="" class="badge bg-danger">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Simpanan</th>
                        <th>ID Anggota</th>
                        <th>Jumlah Simpanan</th>
                        <th>Tanggal Simpanan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($simpanan as $s) : ?>
                        <tr>
                            <th>#</th>
                            <td><?= $s['id_simpanan']; ?></td>
                            <td><?= $s['id_anggota']; ?></td>
                            <td><?= $s['jumlah_simpanan']; ?></td>
                            <td><?= $s['tgl_simp']; ?></td>
                            <td>
                                <a href="" class="badge bg-warning">detail</a>
                                <a href="" class="badge bg-success">edit</a>
                                <a href="" class="badge bg-danger">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jumlah Simpanan</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($join_table as $j) { ?>
                        <tr>
                            <th>#</th>
                            <td><?= $j['id_anggota']; ?></td>
                            <td><?= $j['nama']; ?></td>
                            <td><?= $j['jumlah_simpanan']; ?></td>
                            <td><?= $j['tgl_simp']; ?></td>
                            <td>
                                <a href="" class="badge bg-warning">detail</a>
                                <a href="" class="badge bg-success">edit</a>
                                <a href="" class="badge bg-danger">delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>