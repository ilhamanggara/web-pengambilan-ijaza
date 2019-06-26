<?php 
include "header_login.php"; 
include "koneksi.php";
$npm = $_SESSION['npm'];

$sql = "SELECT * FROM tb_upload WHERE npm = '$npm'";
$query = mysqli_query($con,$sql);
$data = mysqli_fetch_array($query);
$status_upload = mysqli_num_rows($query);
$verf_perpus = $data['verf_perpus'];
$verf_baa = $data['ver_baa'];
?>
	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 service-box-text">
                    <h2>Status Pengambilan Ijazah</h2>
                    <br>
                    <?php 
                        if ($status_upload <= 0) {
                            echo "<h4 style='color:red;'>Anda Belum Upload Dokumen !</h4>";
                        }                    ?>
					<div class="row">
                        <div class="col-md-8">
                            <h3>Verifikasi Perpus</h3>
                        </div>
                        <div class="col-md-2">
                            <?php 
                            if ($verf_perpus=="y") {
                                echo '<img src="img/y.png" width="40">';
                            }else{
                                echo '<img src="img/t.png" width="40">';
                            }
                            ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Verifikasi BAA</h3>
                        </div>
                        <div class="col-md-2">
                        <?php 
                            if ($verf_baa=="y") {
                                echo '<img src="img/y.png" width="40">';
                            }else{
                                echo '<img src="img/t.png" width="40">';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 service-box-text">
                    <img src="img/logo_ubl.png" class="img-responsive" width="3000">
                </div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
<?php include "footer.php"; ?>