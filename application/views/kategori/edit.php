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
                    <a href="<?php echo site_url('kategori') ?>" class="btn btn-warning"><i class="fas fa-arrow-left"></i>Kembali</a>
                    </div>

                    <h1>Edit Data Buku</h1>
    <form action="<?php echo site_url('kategori/update');?>" method="post">
    <input type="hidden" name="id" value="<?php echo $data->id;?>">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Buku</label>
            <div class="col-sm-9">
            <input value="<?php echo $data->nama_kategori; ?>" type="text"  class="form-control" id="nama" name="nama">
            </div>
        </div>
                      <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                    </form>                    
                </div>
            </div> 
        </div> 
        <!-- end row -->

<?php $this->load->view('_layout/footer') ?>
