<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0">Guru</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href=".">Home</a></li>
                <li class="breadcrumb-item active">Guru</li>
            </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header row">
                      <div class="card-title h3 col-8">Tambah Guru</div>
                        <div class="col-4">
                          <a href="?m=teacher&s=add" class="btn btn-large btn-secondary" style="float: right;"> <i class="fas fa-undo"> </i> &nbsp;Kembali</a>
                        </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form action="?m=teacher&s=save" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                          <span class="input-group-text"><i class="fas fa-address-card"></i></span> 
                        </div> 
                        <input type="number" name="nip" class="form-control" placeholder="Nomor Induk Guru (max 16 characters)*" required autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                          <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span> 
                        </div> 
                        <input type="text" name="name" class="form-control" placeholder="Nama Guru*" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                          <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span> 
                        </div> 
                        <input type="text" name="pob" class="form-control" placeholder="Tempat Lahir (Kabupaten/Kota)">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                          <span class="input-group-text"><i class="fas fa-calendar-day"></i></span> 
                        </div> 
                        <input type="date" name="dob" class="form-control" placeholder="Tanggal lahir" required>
                    </div> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                          <span class="input-group-text"><i class="fas fa-portrait"></i></span> 
                        </div> 
                        <input type="file" name="foto" accept=".jpeg" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                          <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span> 
                        </div> 
                        <input type="number" name="phone" class="form-control" placeholder="Nomor Handphone">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text"><i class="fa fa-book"></i></span>
                        </div>
                        <select name="subject_id" class="form-control" required>
                            <option value="">Mata Pelajaran*</option>
                            <?php 
                            include_once('config.php');
                            $sql = "SELECT * FROM subjects ORDER BY subject ASC";
                            $query = mysqli_query($config, $sql);
                            while ($row = mysqli_fetch_array($query)) {
                                echo "<option value='$row[id]'>$row[subject]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" name="save" class="btn btn-md btn-primary" value="Simpan">&nbsp;&nbsp;&nbsp;
                        <input type="reset" class="btn btn-md btn-warning">
                    </div>
                      </form>
                </div>
                  <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Man row -->


        <!-- /.row (main row) -->
   </div><!-- /.container-fluid -->
</section>
<!-- /.content -->