<?php $this->load->view('_layout/header') ?>
<div class="jumbotron">
            <h1 class="display-4">Data Buku</h1>
            <p class="lead">List Data Buku</p>
            
        </div>
        <!-- end jumbotron -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="py-3">
                        <a href="<?php echo site_url('buku') ?>" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>

                    <h1>Tambah Data Buku</h1>
                    <form action="<?php echo site_url('buku/simpan');?>" method="post">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Buku</label>
                            <div class="col-sm-9">
                            <input type="text"  class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <!-- id_kategori -->
                        <div class="form-group row">
                            <label for="id_kategori" class="col-sm-2 col-form-label">Kategori Buku</label>
                            <div class="col-sm-9">
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    <option value="">Pilih Kategori Buku</option>

                                    <!-- memanggil database kategori buku dengan variabel $value -->
                                <?php foreach($kategori_buku as $value) { ?>
                                    <option value="<?php echo $value->id?>"><?php echo $value->nama_kategori ?></option>
                                <?php } ?>
                            </select>                                  
                            </div>                        
                        </div>


                        <div class="form-group row">
                            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                            <div class="col-sm-9">
                            <input type="text"  class="form-control" id="penerbit" name="penerbit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                            <input type="text"  class="form-control" id="deskripsi" name="deskripsi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-9">
                            <input type="text"  class="form-control" id="harga" name="harga">
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