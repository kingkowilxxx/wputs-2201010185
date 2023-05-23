<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">List User</h5>
                            <h2 class="card-title">Total Daftar User <b>
                                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbUSER");
                                    echo mysqli_num_rows($stt); ?></b></h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area h-auto">
                        <div class="container konten">
                            <?php $stt = mysqli_query($cnn, "SELECT * FROM tbUSER");
                            echo mysqli_num_rows($stt); ?>
                            <table class="table text-center m-auto">
                                <thead class="border-bottom">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col"><a href="./datauser.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM tbuser ORDER BY nama;";
                                    $hasil = mysqli_query($cnn, $sql);
                                    $cx = 0;
                                    while ($h = mysqli_fetch_assoc($hasil)) {
                                        $cx++;
                                    ?>
                                        <tr>
                                            <td scope="row"><?= $cx ?></td>
                                            <td><?= $h["nama"] ?></td>
                                            <td><?= $h["email"] ?></td>
                                            <td><?= $h["passkey"] ?></td>
                                            <td><a href="./datauser.php?aksi=edit&p1=<?= $h["iduser"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                                                <a href="./datauser.php?aksi=del&p1=<?= $h["iduser"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>