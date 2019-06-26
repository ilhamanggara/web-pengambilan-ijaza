<?php 

include "header_login.php";

?>
<section class="domain-search-section sc-about-page">
    <div class="container">
        <div class="domain-form-warp">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h2>Form Pengambilan Ijazah</h2>
                    <br>
                    <form enctype="multipart/form-data" action="proses_upload.php" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Masukan File Skripsi Anda *PDF</h5><br>
                            </div>
                            <div class="div-col-md-6">
                                <input name="skripsi" type="file" placeholder="Skripsi Anda (*PDF)">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Masukan File Poster *PDF</h5><br>
                            </div>
                            <div class="div-col-md-6">
                                <input name="poster" type="file">
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <h5>Masukan File Jurnal *PDF</h5><br>
                            </div>
                            <div class="div-col-md-6">
                                <input name="jurnal" type="file">
                            </div>
                        </div>

                        <br><br>

                        <div class="row">
                            <div class="col-md-4">
                                <h5>Masukan File E-Book *PDF</h5><br>
                            </div>
                            <div class="div-col-md-6">
                                <input name="ebook" type="file">
                            </div>
                        </div>

                        <br><br>

                        <div class="row">
                            <div class="col-md-4">
                                <h5>Masukan File Kwitansi *PDF</h5><br>
                            </div>
                            <div class="div-col-md-6">
                                <input name="kwitansi" type="file">
                            </div>
                        </div>

                        <br><br>

                        <div class="row">
                            <div class="col-md-4">
                                <h5>Masukan File Buku *PDF</h5><br>
                            </div>
                            <div class="div-col-md-6">
                                <input name="buku" type="file">
                            </div>
                        </div>

                        <br><br>

                        <button type="submit" class="site-btn">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br><br>
<?php include "footer.php"; ?>