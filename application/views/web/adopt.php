<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-key title-icon"></i>Formulir Open Adopt</h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="#"><span class="lightblue">Formulir Open Adopt</span></a></div>
      </div>
    </div>
  </div>
</div>
<!-- Page heading ends -->


<!-- Content starts -->
<div class="content">

  <!-- Content starts -->
  <div class="content">
    <div class="container">

      <div class="contact">

                        <div class="row">
                                    <?php
echo $this->session->flashdata('msg');
?>
                           <div class="col-md-3 col-sm-3"></div>
                           <div class="col-md-6 col-sm-6">
                             
                                 <!-- Contact form -->
                                    <h3 class="title">Formulir Open Adopt</h3>
                          
                                    <div class="form">

                     
                   
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="col-md-12">
                
                <div class="form-group">
  <label class="control-label col-lg-2">Kategori</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="id_kat" required>
                    
                      <option value="">-- Pilih Kategori Hewan --</option>
                      <?php
foreach ($v_kat->result() as $baris) { ?>
                        <option value="<?php echo $baris->id_kat; ?>"><?php echo $baris->nama_kat; ?></option>
                      <?php
}?>
                    </select>
                  </div>
                  </div>
                
                <div class="form-group">
                  <label class="control-label col-lg-2">Varian</label>
                  <div class="col-lg-10">
                    <textarea name="varian" class="form-control" rows="2" cols="80" required placeholder="cth:Anggora"></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-lg-2">Warna</label>
                  <div class="col-lg-10">
                    <input type="text" name="warna" class="form-control" value="" placeholder="cth: Hitam" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Status</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="status" required>
                      <option value="">-- Pilih Status --</option>
                      <option value="DI JUAL">DI JUAL</option>
                    </select>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="control-label col-lg-2">Deskripsi</label>
                  <div class="col-lg-10">
                    <textarea name="deskripsi" class="form-control" rows="4" cols="80" placeholder="Deskripsi"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Harga</label>
                  <div class="col-lg-10">
                    <input type="number" name="harga" class="form-control" value="" placeholder="Harga" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto" class="form-control" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 2</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto2" class="form-control" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 3</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto3" class="form-control" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 4</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto4" class="form-control" value="" required>
                  </div>
                </div>
              </div>
              <div align="center">
              <button type="submit" name="btnsimpan" class="btn btn-primary">Simpan</button>
            </div>
            </div>

            
        

          </form>
        
                                    </div>
                                 
                           </div>

                        </div>

                     </div>

    </div>
  </div>
  <!-- Content ends -->



</div>
<!-- Content ends -->
