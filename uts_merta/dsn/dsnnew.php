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
                            <form method="POST" action="./datadsn.php">
                                <input type="hidden" name="act" value="store">
                                <div class="form-floating mb-3">
                                    <input type="text" name="txNAMADSN" class="form-control" id="floatingInput" placeholder="Nama Dosen">
                                    <label for="floatingInput">Nama Dosen</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txNIP" class="form-control" id="floatingInput" placeholder="NIP">
                                    <label for="floatingInput">NIP</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="date" name="txTGL" class="form-control" id="floatingInput" placeholder="Tanggal Lahir">
                                    <label for="floatingInput">Tanggal Lahir</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Email">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txTLPN" class="form-control" id="floatingInput" placeholder="No Telpon">
                                    <label for="floatingInput">No Telepon</label>
                                </div>
                                <div class="form-floating mb-3 mt-4">
                                    <button type="submit" class="btn btn-primary"> Buat Data Dosen </button>
                                    <a href="./datamhs.php" class="btn btn-secondary"> Batal </a>
                                </div>
                            </form>
                        </div>
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
