 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Main content -->
     <div class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col">
                     <div class="card">
                         <div class="card-header">
                             Detail Berita
                         </div>
                         <?php
                            foreach ($berita as $pmj) : ?>
                         <div class="card mb-3">
                             <img src="<?= base_url('assets/foto_berita/') . $pmj->foto_berita ?>" class="card-img-top">
                             <div class="card-body">
                                 <h5 class="card-title"><?= $pmj->judul ?></h5>
                                 <p class="card-text"><?= $pmj->keterangan ?></p>
                                 <p class="card-text"><small class="text-muted"><?= $pmj->tanggal ?></small>
                                 </p>
                             </div>
                             <br>
                             <a href="<?= base_url("admin/berita/");?>" class="btn btn-primary">Kembali</a>
                         </div>
                     </div>
                     <?php endforeach ?>

                     <!-- /.card-body -->
                 </div>
             </div>
         </div>
         <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
 </div>