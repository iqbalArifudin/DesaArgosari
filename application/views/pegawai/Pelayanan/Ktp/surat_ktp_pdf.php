<html>

<head>

</head>

<style type="text/css">
.kop-surat {
    line-height: 50%;
}

table {
    margin: auto;


}
</style>

<body>
    <table>
        <tr>
            <td>
                <img src="<?php echo base_url('assets/images/logo kab.png') ?>" alt="logo" width=10%>
            </td>
            <td style=" text-align: center;">
                <div class="kop-surat">
                    <center>
                        <a><b>BAITI JANNATI</b></a>
                        <p>
                            <a>Dusun Bakalan 02, Bakalan, Kec. Bululawang, Malang, Jawa Timur 65171</a>
                        <p>
                            <a>Telp : (0341) 341618(0341)</a>
                        <p>
                            <a>Email : baitijannati@gmail.com</a>
                        <p>
                    </center>
                </div>
            </td>
        </tr>
    </table>
    <hr>

<body>
    <table id="dataTable" class="table table-striped">
        <thead class="table table-striped">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>TANGGAL MENGAJUKAN</th>
                <th>STATUS</th>
                <th>ALASAN</th>
                <th>Foto Copy KK</th>

            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($ktp as $ktp) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ktp->nama ?></td>
                    <td><?= $ktp->tanggal_buat ?></td>
                    <td><span class="badge badge-warning"><?= $ktp->status ?></span></td>
                    <td><?= $ktp->alasan ?></td>
                    <td><img src="<?= base_url('assets/foto_ktp/') . $ktp->fc_kk ?>" style="width:50px; height:50px;"></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>