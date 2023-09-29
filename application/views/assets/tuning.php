<?php
$tuning = $this->db->get('tuning')->row();

?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Tuning Senar Gitar
                </div>
                <div class="card-body table-responsive">
                    <form action="main/settuning" id="save" method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class='table'>
                                <tr>
                                    <td>Tuning Senar Gitar</td>
                                    <td>
										<textarea rows="10" name="tuning"  class="" cols="10" style=" min-width:500px; max-width:100%;min-height:50px;height:100%;width:100%;"><?php echo $tuning->tuning ?></textarea>
                                    </td>
                                </tr>
								<tr>
									<td></td>
									<td></td>
								</tr>
                                <tr>
									<td>Foto tuning</td>
                                    <td>
                                        <center> <img id="blah" class='img img-fluid mb-3' width='280'
                                                src="image/<?php echo $tuning->gambar ?>" alt="your image" />
                                        </center>
                                        <input type="file" name="gambar" class="form-control mb-3"
                                            onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                                        <span class="badge badge-warning"><strong>Informasi</strong>
                                            Input Gambar Hanya Bisa Bertype JPG,JPEG,PNG Dan Maksimal
                                            2mb !</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
									<td>
										<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</button>
									</td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>