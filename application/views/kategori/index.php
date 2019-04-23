<?php $this->load->view('_layout/header') ?>

<div class="jumbotron">
    <h1 class="display-4">Data Kategori</h1>
    <p class="lead">List Data Kategori</p>
    
</div>
<!-- end jumbotron -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="py-3">
            <a href="<?php echo site_url('kategori/tambah');?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data </a>
            </div>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>                               
                <th scope="col">Aksi</th>
                </tr>
            </thead>        
                <?php
                    $no += 1;
                    foreach($data as $value){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $value->nama_kategori; ?></td>            

                <td>
                    <a  class="btn btn-warning" href="<?php echo site_url('kategori/edit/'.$value->id);?>"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-danger" href="<?php echo site_url('kategori/hapus/'.$value->id);?>"><i class="fas fa-trash"></i>Hapus</a>
                </td>
                    </tr>
                <?php } ?>
            </tbody>
            </table>
            <!-- memanggil controllers pagination -->
            <?php 
            echo $this->pagination->create_links();
            ?>

        </div>
    </div> 
</div> 
<!-- end row -->

<?php $this->load->view('_layout/footer') ?>     
