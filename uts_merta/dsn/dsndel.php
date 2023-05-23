<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">List Dosen</h5>
                            <h2 class="card-title">Total Daftar Dosen <b>
                                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbDSN");
                                    echo mysqli_num_rows($stt); ?></b></h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area h-auto">
                        <div class="container konten">
                            <?php
                            $id_dosen = $_GET["p1"];
                            $sql = "SELECT * FROM tbDSN tu WHERE tu.id_dosen='$id_dosen';";
                            $hasil = mysqli_query($cnn, $sql);
                            if (mysqli_num_rows($hasil) > 0) {
                                $h = mysqli_fetch_assoc($hasil);
                            ?>
                                <h3>Ubah Data Dosen <?= $h["nama_dosen"] ?></h3>
                                <form method="POST" action="./datadsn.php">
                                    <input type="hidden" name="act" value="destroy">
                                    <input type="hidden" name="id_dosen" value="<?= $id_dosen ?>">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txNAMADSN" class="form-control" id="floatingInput" placeholder="Nama Dosen" value="<?= $h["nama_dosen"] ?>">
                                        <label for="floatingInput">Nama Lengkap Dosen</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txNIP" class="form-control" id="floatingInput" placeholder="NIP" value="<?= $h["nip"] ?>">
                                        <label for="floatingInput">NIP</label>
                                    </div>
                    
                                    <div class="form-floating mb-3">
                                        <input type="date" name="txTGL" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" value="<?= $h["ttl"] ?>">
                                        <label for="floatingInput">Tanggal Lahir</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Email" value="<?= $h["email"] ?>">
                                        <label for="floatingInput">email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txTLPN" class="form-control" id="floatingInput" placeholder="No Telepon" value="<?= $h["notlpn"] ?>">
                                        <label for="floatingInput">No Telepon</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        &nbsp;
                                    </div>
                                    <button type="submit" class="btn btn-primary"> Hapus Data Dosen </button>
                                    <a href="./datamhs.php" class="btn btn-secondary"> Batal </a>
                                </form>

                        </div>
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
                            } else {
                                echo "<script>window.location.href='./datamhs.php';</script>";
                            }
?>