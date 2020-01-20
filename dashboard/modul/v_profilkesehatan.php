
            <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Profilkesehatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
<?php
// proses hapus data
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID  yang akan dihapus
		$id = $_GET['id'];
        // proses hapus data berdasarkan ID
        $sql=$mysqli->query("DELETE FROM profilkesehatan WHERE `id`= '$id'");
		echo "<script>document.location='?page=profilkesehatan';</script>";

	 } elseif ($_GET['aksi'] == 'tambah' || $_GET['aksi'] == 'edit') {
		 $id = $_GET['id'];
		if($id==''){$button="Save";}else{$button='Update';}
		 $query="SELECT * FROM profilkesehatan WHERE `id`= '$id'";
		$result= $mysqli->query($query);
		$data=$result->fetch_assoc();
		?>

        <form action="?page=profilkesehatan&aksi=prosesSubmit" method="post" class="form-horizontal">
		 <div class="form-body">
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Tahun </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $data["tahun"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Provinsi </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?php echo $data["provinsi"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Kota </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" value="<?php echo $data["kota"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Luas Wilayah </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="luas_wilayah" id="luas_wilayah" placeholder="Luas Wilayah" value="<?php echo $data["luas_wilayah"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Desa </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_desa" id="jumlah_desa" placeholder="Jumlah Desa" value="<?php echo $data["jumlah_desa"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kelurahan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kelurahan" id="jumlah_kelurahan" placeholder="Jumlah Kelurahan" value="<?php echo $data["jumlah_kelurahan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Desa Dan Kelurahan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_desa_dan_kelurahan" id="jumlah_desa_dan_kelurahan" placeholder="Jumlah Desa Dan Kelurahan" value="<?php echo $data["jumlah_desa_dan_kelurahan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Penduduk </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_penduduk" id="jumlah_penduduk" placeholder="Jumlah Penduduk" value="<?php echo $data["jumlah_penduduk"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Rumah Tangga </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_rumah_tangga" id="jumlah_rumah_tangga" placeholder="Jumlah Rumah Tangga" value="<?php echo $data["jumlah_rumah_tangga"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Rata Rata Jiwa Rumah Tangga </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="rata_rata_jiwa_rumah_tangga" id="rata_rata_jiwa_rumah_tangga" placeholder="Rata Rata Jiwa Rumah Tangga" value="<?php echo $data["rata_rata_jiwa_rumah_tangga"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Kepadatan Penduduk </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="kepadatan_penduduk" id="kepadatan_penduduk" placeholder="Kepadatan Penduduk" value="<?php echo $data["kepadatan_penduduk"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Angka Kelahiran Hidup </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_angka_kelahiran_hidup" id="jumlah_angka_kelahiran_hidup" placeholder="Jumlah Angka Kelahiran Hidup" value="<?php echo $data["jumlah_angka_kelahiran_hidup"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Angka Kelahiran Mati </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_angka_kelahiran_mati" id="jumlah_angka_kelahiran_mati" placeholder="Jumlah Angka Kelahiran Mati" value="<?php echo $data["jumlah_angka_kelahiran_mati"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Angka Kelahiran Hidup Dan Mati </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_angka_kelahiran_hidup_dan_mati" id="jumlah_angka_kelahiran_hidup_dan_mati" placeholder="Jumlah Angka Kelahiran Hidup Dan Mati" value="<?php echo $data["jumlah_angka_kelahiran_hidup_dan_mati"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kematian Bayi </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kematian_bayi" id="jumlah_kematian_bayi" placeholder="Jumlah Kematian Bayi" value="<?php echo $data["jumlah_kematian_bayi"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kematian Neonatal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kematian_neonatal" id="jumlah_kematian_neonatal" placeholder="Jumlah Kematian Neonatal" value="<?php echo $data["jumlah_kematian_neonatal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kematian Anak Balita </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kematian_anak_balita" id="jumlah_kematian_anak_balita" placeholder="Jumlah Kematian Anak Balita" value="<?php echo $data["jumlah_kematian_anak_balita"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kematian Ibu Hamil </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kematian_ibu_hamil" id="jumlah_kematian_ibu_hamil" placeholder="Jumlah Kematian Ibu Hamil" value="<?php echo $data["jumlah_kematian_ibu_hamil"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kematian Ibu Bersalin </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kematian_ibu_bersalin" id="jumlah_kematian_ibu_bersalin" placeholder="Jumlah Kematian Ibu Bersalin" value="<?php echo $data["jumlah_kematian_ibu_bersalin"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kematian Ibu Nifas </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kematian_ibu_nifas" id="jumlah_kematian_ibu_nifas" placeholder="Jumlah Kematian Ibu Nifas" value="<?php echo $data["jumlah_kematian_ibu_nifas"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kematian Ibu </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kematian_ibu" id="jumlah_kematian_ibu" placeholder="Jumlah Kematian Ibu" value="<?php echo $data["jumlah_kematian_ibu"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Baru Tb Bta Plus </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_baru_tb_bta_plus" id="jumlah_kasus_baru_tb_bta_plus" placeholder="Jumlah Kasus Baru Tb Bta Plus" value="<?php echo $data["jumlah_kasus_baru_tb_bta_plus"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Seluruh Kasus Tb </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_seluruh_kasus_tb" id="jumlah_seluruh_kasus_tb" placeholder="Jumlah Seluruh Kasus Tb" value="<?php echo $data["jumlah_seluruh_kasus_tb"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Kasus Tb Anak </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="kasus_tb_anak" id="kasus_tb_anak" placeholder="Kasus Tb Anak" value="<?php echo $data["kasus_tb_anak"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Tb Paru Persentase Terhadap Suspek </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="tb_paru_persentase_terhadap_suspek" id="tb_paru_persentase_terhadap_suspek" placeholder="Tb Paru Persentase Terhadap Suspek" value="<?php echo $data["tb_paru_persentase_terhadap_suspek"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Angka Kesembuhan Bta Plus </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_angka_kesembuhan_bta_plus" id="jumlah_angka_kesembuhan_bta_plus" placeholder="Jumlah Angka Kesembuhan Bta Plus" value="<?php echo $data["jumlah_angka_kesembuhan_bta_plus"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Angka Pengobatan Lengkap Bta Plus </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_angka_pengobatan_lengkap_bta_plus" id="jumlah_angka_pengobatan_lengkap_bta_plus" placeholder="Jumlah Angka Pengobatan Lengkap Bta Plus" value="<?php echo $data["jumlah_angka_pengobatan_lengkap_bta_plus"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Angka Keberhasilan Pengobatan Succes Rate Bta Plus </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="angka_keberhasilan_pengobatan_succes_rate_bta_plus" id="angka_keberhasilan_pengobatan_succes_rate_bta_plus" placeholder="Angka Keberhasilan Pengobatan Succes Rate Bta Plus" value="<?php echo $data["angka_keberhasilan_pengobatan_succes_rate_bta_plus"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kematian Selama Pengobatan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kematian_selama_pengobatan" id="jumlah_kematian_selama_pengobatan" placeholder="Jumlah Kematian Selama Pengobatan" value="<?php echo $data["jumlah_kematian_selama_pengobatan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Balita </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_balita" id="jumlah_balita" placeholder="Jumlah Balita" value="<?php echo $data["jumlah_balita"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Pneumonia Balita Ditemukan Dan Ditangani </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_pneumonia_balita_ditemukan_dan_ditangani" id="jumlah_pneumonia_balita_ditemukan_dan_ditangani" placeholder="Jumlah Pneumonia Balita Ditemukan Dan Ditangani" value="<?php echo $data["jumlah_pneumonia_balita_ditemukan_dan_ditangani"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Pendonor Darah </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_pendonor_darah" id="jumlah_pendonor_darah" placeholder="Jumlah Pendonor Darah" value="<?php echo $data["jumlah_pendonor_darah"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Donor Darah Positif Hiv </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_donor_darah_positif_hiv" id="jumlah_donor_darah_positif_hiv" placeholder="Jumlah Donor Darah Positif Hiv" value="<?php echo $data["jumlah_donor_darah_positif_hiv"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Perkiraan Kasus Diare </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_perkiraan_kasus_diare" id="jumlah_perkiraan_kasus_diare" placeholder="Jumlah Perkiraan Kasus Diare" value="<?php echo $data["jumlah_perkiraan_kasus_diare"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Diare Ditangani </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_diare_ditangani" id="jumlah_diare_ditangani" placeholder="Jumlah Diare Ditangani" value="<?php echo $data["jumlah_diare_ditangani"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Baru Kusta Pb Dan Mb </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_baru_kusta_pb_dan_mb" id="jumlah_kasus_baru_kusta_pb_dan_mb" placeholder="Jumlah Kasus Baru Kusta Pb Dan Mb" value="<?php echo $data["jumlah_kasus_baru_kusta_pb_dan_mb"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Tercatat Kusta Pb Dan Mb </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_tercatat_kusta_pb_dan_mb" id="jumlah_kasus_tercatat_kusta_pb_dan_mb" placeholder="Jumlah Kasus Tercatat Kusta Pb Dan Mb" value="<?php echo $data["jumlah_kasus_tercatat_kusta_pb_dan_mb"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Penderita Kusta Rft Pb </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_penderita_kusta_rft_pb" id="jumlah_penderita_kusta_rft_pb" placeholder="Jumlah Penderita Kusta Rft Pb" value="<?php echo $data["jumlah_penderita_kusta_rft_pb"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Penderita Kusta Rft Mb </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_penderita_kusta_rft_mb" id="jumlah_penderita_kusta_rft_mb" placeholder="Jumlah Penderita Kusta Rft Mb" value="<?php echo $data["jumlah_penderita_kusta_rft_mb"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Afp Rate </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_afp_rate" id="jumlah_kasus_afp_rate" placeholder="Jumlah Kasus Afp Rate" value="<?php echo $data["jumlah_kasus_afp_rate"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Difteri </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_difteri" id="jumlah_kasus_difteri" placeholder="Jumlah Kasus Difteri" value="<?php echo $data["jumlah_kasus_difteri"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Difteri Meninggal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_difteri_meninggal" id="jumlah_kasus_difteri_meninggal" placeholder="Jumlah Kasus Difteri Meninggal" value="<?php echo $data["jumlah_kasus_difteri_meninggal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Pertusis </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_pertusis" id="jumlah_kasus_pertusis" placeholder="Jumlah Kasus Pertusis" value="<?php echo $data["jumlah_kasus_pertusis"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Pertusis Meninggal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_pertusis_meninggal" id="jumlah_kasus_pertusis_meninggal" placeholder="Jumlah Kasus Pertusis Meninggal" value="<?php echo $data["jumlah_kasus_pertusis_meninggal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Tetanus Nonneoratorum </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_tetanus_nonneoratorum" id="jumlah_kasus_tetanus_nonneoratorum" placeholder="Jumlah Kasus Tetanus Nonneoratorum" value="<?php echo $data["jumlah_kasus_tetanus_nonneoratorum"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Tetanus Nonneoratum Meninggal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_tetanus_nonneoratum_meninggal" id="jumlah_kasus_tetanus_nonneoratum_meninggal" placeholder="Jumlah Kasus Tetanus Nonneoratum Meninggal" value="<?php echo $data["jumlah_kasus_tetanus_nonneoratum_meninggal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Tetanus Neoratum </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_tetanus_neoratum" id="jumlah_kasus_tetanus_neoratum" placeholder="Jumlah Kasus Tetanus Neoratum" value="<?php echo $data["jumlah_kasus_tetanus_neoratum"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Tetanus Neoratum Meninggal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_tetanus_neoratum_meninggal" id="jumlah_kasus_tetanus_neoratum_meninggal" placeholder="Jumlah Kasus Tetanus Neoratum Meninggal" value="<?php echo $data["jumlah_kasus_tetanus_neoratum_meninggal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Polio </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_polio" id="jumlah_kasus_polio" placeholder="Jumlah Kasus Polio" value="<?php echo $data["jumlah_kasus_polio"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Campak </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_campak" id="jumlah_kasus_campak" placeholder="Jumlah Kasus Campak" value="<?php echo $data["jumlah_kasus_campak"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Campak Meninggal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_campak_meninggal" id="jumlah_kasus_campak_meninggal" placeholder="Jumlah Kasus Campak Meninggal" value="<?php echo $data["jumlah_kasus_campak_meninggal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Hepatitis B </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_hepatitis_b" id="jumlah_kasus_hepatitis_b" placeholder="Jumlah Kasus Hepatitis B" value="<?php echo $data["jumlah_kasus_hepatitis_b"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Dbd </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_dbd" id="jumlah_kasus_dbd" placeholder="Jumlah Kasus Dbd" value="<?php echo $data["jumlah_kasus_dbd"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Dbd Meninggal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_dbd_meninggal" id="jumlah_kasus_dbd_meninggal" placeholder="Jumlah Kasus Dbd Meninggal" value="<?php echo $data["jumlah_kasus_dbd_meninggal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Dbd Cfr </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="dbd_cfr" id="dbd_cfr" placeholder="Dbd Cfr" value="<?php echo $data["dbd_cfr"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Sediaan Darah Diperiksa Malaria </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_sediaan_darah_diperiksa_malaria" id="jumlah_sediaan_darah_diperiksa_malaria" placeholder="Jumlah Sediaan Darah Diperiksa Malaria" value="<?php echo $data["jumlah_sediaan_darah_diperiksa_malaria"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Positif Malaria </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_positif_malaria" id="jumlah_kasus_positif_malaria" placeholder="Jumlah Kasus Positif Malaria" value="<?php echo $data["jumlah_kasus_positif_malaria"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kasus Malaria Meninggal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kasus_malaria_meninggal" id="jumlah_kasus_malaria_meninggal" placeholder="Jumlah Kasus Malaria Meninggal" value="<?php echo $data["jumlah_kasus_malaria_meninggal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Dilakukan Pengukuran Darah </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_dilakukan_pengukuran_darah" id="jumlah_dilakukan_pengukuran_darah" placeholder="Jumlah Dilakukan Pengukuran Darah" value="<?php echo $data["jumlah_dilakukan_pengukuran_darah"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Dilakukan Pemeriksaan Obesitas </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_dilakukan_pemeriksaan_obesitas" id="jumlah_dilakukan_pemeriksaan_obesitas" placeholder="Jumlah Dilakukan Pemeriksaan Obesitas" value="<?php echo $data["jumlah_dilakukan_pemeriksaan_obesitas"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Klb Di Desa Atau Kelurahan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_klb_di_desa_atau_kelurahan" id="jumlah_klb_di_desa_atau_kelurahan" placeholder="Jumlah Klb Di Desa Atau Kelurahan" value="<?php echo $data["jumlah_klb_di_desa_atau_kelurahan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ibu Hamil K1 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ibu_hamil_k1" id="jumlah_ibu_hamil_k1" placeholder="Jumlah Ibu Hamil K1" value="<?php echo $data["jumlah_ibu_hamil_k1"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ibu Hamil K2 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ibu_hamil_k2" id="jumlah_ibu_hamil_k2" placeholder="Jumlah Ibu Hamil K2" value="<?php echo $data["jumlah_ibu_hamil_k2"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ibu Bersalin Atau Nifas </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ibu_bersalin_atau_nifas" id="jumlah_ibu_bersalin_atau_nifas" placeholder="Jumlah Ibu Bersalin Atau Nifas" value="<?php echo $data["jumlah_ibu_bersalin_atau_nifas"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ibu Bersalin Ditolong Nakes </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ibu_bersalin_ditolong_nakes" id="jumlah_ibu_bersalin_ditolong_nakes" placeholder="Jumlah Ibu Bersalin Ditolong Nakes" value="<?php echo $data["jumlah_ibu_bersalin_ditolong_nakes"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ibu Bersalin Mendapatkan Yankes Nifas </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ibu_bersalin_mendapatkan_yankes_nifas" id="jumlah_ibu_bersalin_mendapatkan_yankes_nifas" placeholder="Jumlah Ibu Bersalin Mendapatkan Yankes Nifas" value="<?php echo $data["jumlah_ibu_bersalin_mendapatkan_yankes_nifas"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ibu Bersalin Mendapatkan Vit A </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ibu_bersalin_mendapatkan_vit_a" id="jumlah_ibu_bersalin_mendapatkan_vit_a" placeholder="Jumlah Ibu Bersalin Mendapatkan Vit A" value="<?php echo $data["jumlah_ibu_bersalin_mendapatkan_vit_a"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Imunisasi Tetanus Ibu Hamil Tt1 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_imunisasi_tetanus_ibu_hamil_tt1" id="jumlah_imunisasi_tetanus_ibu_hamil_tt1" placeholder="Jumlah Imunisasi Tetanus Ibu Hamil Tt1" value="<?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt1"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Imunisasi Tetanus Ibu Hamil Tt2 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_imunisasi_tetanus_ibu_hamil_tt2" id="jumlah_imunisasi_tetanus_ibu_hamil_tt2" placeholder="Jumlah Imunisasi Tetanus Ibu Hamil Tt2" value="<?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt2"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Imunisasi Tetanus Ibu Hamil Tt3 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_imunisasi_tetanus_ibu_hamil_tt3" id="jumlah_imunisasi_tetanus_ibu_hamil_tt3" placeholder="Jumlah Imunisasi Tetanus Ibu Hamil Tt3" value="<?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt3"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Imunisasi Tetanus Ibu Hamil Tt4 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_imunisasi_tetanus_ibu_hamil_tt4" id="jumlah_imunisasi_tetanus_ibu_hamil_tt4" placeholder="Jumlah Imunisasi Tetanus Ibu Hamil Tt4" value="<?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt4"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Imunisasi Tetanus Ibu Hamil Tt5 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_imunisasi_tetanus_ibu_hamil_tt5" id="jumlah_imunisasi_tetanus_ibu_hamil_tt5" placeholder="Jumlah Imunisasi Tetanus Ibu Hamil Tt5" value="<?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt5"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ibu Hamil Mendapat Fe 3 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ibu_hamil_mendapat_fe_3" id="jumlah_ibu_hamil_mendapat_fe_3" placeholder="Jumlah Ibu Hamil Mendapat Fe 3" value="<?php echo $data["jumlah_ibu_hamil_mendapat_fe_3"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Penanganank Komplikasi Kebidanan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_penanganank_komplikasi_kebidanan" id="jumlah_penanganank_komplikasi_kebidanan" placeholder="Jumlah Penanganank Komplikasi Kebidanan" value="<?php echo $data["jumlah_penanganank_komplikasi_kebidanan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Penanganan Komplikasi Neonatal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_penanganan_komplikasi_neonatal" id="jumlah_penanganan_komplikasi_neonatal" placeholder="Jumlah Penanganan Komplikasi Neonatal" value="<?php echo $data["jumlah_penanganan_komplikasi_neonatal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Peserta Kb Baru Mkjp Non Mkjp </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_peserta_kb_baru_mkjp_non_mkjp" id="jumlah_peserta_kb_baru_mkjp_non_mkjp" placeholder="Jumlah Peserta Kb Baru Mkjp Non Mkjp" value="<?php echo $data["jumlah_peserta_kb_baru_mkjp_non_mkjp"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kb Aktif </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kb_aktif" id="jumlah_kb_aktif" placeholder="Jumlah Kb Aktif" value="<?php echo $data["jumlah_kb_aktif"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Bayi Baru Lahir Di Timbang </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_bayi_baru_lahir_di_timbang" id="jumlah_bayi_baru_lahir_di_timbang" placeholder="Jumlah Bayi Baru Lahir Di Timbang" value="<?php echo $data["jumlah_bayi_baru_lahir_di_timbang"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Berat Badan Bayi Lahir Rendah </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_berat_badan_bayi_lahir_rendah" id="jumlah_berat_badan_bayi_lahir_rendah" placeholder="Jumlah Berat Badan Bayi Lahir Rendah" value="<?php echo $data["jumlah_berat_badan_bayi_lahir_rendah"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kunjungan Neonatus Kn1 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kunjungan_neonatus_kn1" id="jumlah_kunjungan_neonatus_kn1" placeholder="Jumlah Kunjungan Neonatus Kn1" value="<?php echo $data["jumlah_kunjungan_neonatus_kn1"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kunjungan Neonatus 3 Kn Lengkap </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kunjungan_neonatus_3_kn_lengkap" id="jumlah_kunjungan_neonatus_3_kn_lengkap" placeholder="Jumlah Kunjungan Neonatus 3 Kn Lengkap" value="<?php echo $data["jumlah_kunjungan_neonatus_3_kn_lengkap"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Bayi </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_bayi" id="jumlah_bayi" placeholder="Jumlah Bayi" value="<?php echo $data["jumlah_bayi"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Bayi Yang Diberi Asi Eksklusif </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_bayi_yang_diberi_asi_eksklusif" id="jumlah_bayi_yang_diberi_asi_eksklusif" placeholder="Jumlah Bayi Yang Diberi Asi Eksklusif" value="<?php echo $data["jumlah_bayi_yang_diberi_asi_eksklusif"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Pelayanan Kesehatan Bayi </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_pelayanan_kesehatan_bayi" id="jumlah_pelayanan_kesehatan_bayi" placeholder="Jumlah Pelayanan Kesehatan Bayi" value="<?php echo $data["jumlah_pelayanan_kesehatan_bayi"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Desa Atau Kelurahan Ucl </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_desa_atau_kelurahan_ucl" id="jumlah_desa_atau_kelurahan_ucl" placeholder="Jumlah Desa Atau Kelurahan Ucl" value="<?php echo $data["jumlah_desa_atau_kelurahan_ucl"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Bayi Imunisasi Bcg </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_bayi_imunisasi_bcg" id="jumlah_bayi_imunisasi_bcg" placeholder="Jumlah Bayi Imunisasi Bcg" value="<?php echo $data["jumlah_bayi_imunisasi_bcg"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Bayi Munisasi Polio4 </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_bayi_munisasi_polio4" id="jumlah_bayi_munisasi_polio4" placeholder="Jumlah Bayi Munisasi Polio4" value="<?php echo $data["jumlah_bayi_munisasi_polio4"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Bayi Imunisasi Campak </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_bayi_imunisasi_campak" id="jumlah_bayi_imunisasi_campak" placeholder="Jumlah Bayi Imunisasi Campak" value="<?php echo $data["jumlah_bayi_imunisasi_campak"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Bayi Imunisasi Dasar Lengkap </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_bayi_imunisasi_dasar_lengkap" id="jumlah_bayi_imunisasi_dasar_lengkap" placeholder="Jumlah Bayi Imunisasi Dasar Lengkap" value="<?php echo $data["jumlah_bayi_imunisasi_dasar_lengkap"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Bayi Mendapat Vit A </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_bayi_mendapat_vit_a" id="jumlah_bayi_mendapat_vit_a" placeholder="Jumlah Bayi Mendapat Vit A" value="<?php echo $data["jumlah_bayi_mendapat_vit_a"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Anak Balita Mendapat Vit A </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_anak_balita_mendapat_vit_a" id="jumlah_anak_balita_mendapat_vit_a" placeholder="Jumlah Anak Balita Mendapat Vit A" value="<?php echo $data["jumlah_anak_balita_mendapat_vit_a"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Balita Mendapat Vit A </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_balita_mendapat_vit_a" id="jumlah_balita_mendapat_vit_a" placeholder="Jumlah Balita Mendapat Vit A" value="<?php echo $data["jumlah_balita_mendapat_vit_a"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Baduta Ditimbang </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_baduta_ditimbang" id="jumlah_baduta_ditimbang" placeholder="Jumlah Baduta Ditimbang" value="<?php echo $data["jumlah_baduta_ditimbang"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Baduta Berat Badan Di Bawah Garis Merah </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_baduta_berat_badan_di_bawah_garis_merah" id="jumlah_baduta_berat_badan_di_bawah_garis_merah" placeholder="Jumlah Baduta Berat Badan Di Bawah Garis Merah" value="<?php echo $data["jumlah_baduta_berat_badan_di_bawah_garis_merah"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Anak Balita 1259 Mendapat Pelayanan Kesehatan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan" id="jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan" placeholder="Jumlah Anak Balita 1259 Mendapat Pelayanan Kesehatan" value="<?php echo $data["jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Balita Ditimbang D </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_balita_ditimbang_d" id="jumlah_balita_ditimbang_d" placeholder="Jumlah Balita Ditimbang D" value="<?php echo $data["jumlah_balita_ditimbang_d"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Balita Gizi Buruk Di Temukan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_balita_gizi_buruk_di_temukan" id="jumlah_balita_gizi_buruk_di_temukan" placeholder="Jumlah Balita Gizi Buruk Di Temukan" value="<?php echo $data["jumlah_balita_gizi_buruk_di_temukan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Balita Gizi Buruk Mendapat Perawatan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_balita_gizi_buruk_mendapat_perawatan" id="jumlah_balita_gizi_buruk_mendapat_perawatan" placeholder="Jumlah Balita Gizi Buruk Mendapat Perawatan" value="<?php echo $data["jumlah_balita_gizi_buruk_mendapat_perawatan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Murid Sd Dan Setingkat </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_murid_sd_dan_setingkat" id="jumlah_murid_sd_dan_setingkat" placeholder="Jumlah Murid Sd Dan Setingkat" value="<?php echo $data["jumlah_murid_sd_dan_setingkat"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Mendapat Pelayanan Kesehatan Siswa Sd Dan Setingkat </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat" id="jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat" placeholder="Jumlah Mendapat Pelayanan Kesehatan Siswa Sd Dan Setingkat" value="<?php echo $data["jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Pelayanan Gigi Dan Mulut Tumpatan Gigi Tetap </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap" id="jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap" placeholder="Jumlah Pelayanan Gigi Dan Mulut Tumpatan Gigi Tetap" value="<?php echo $data["jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Pelayanan Gigi Dan Mulut Pencabutan Gigi Tetap </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap" id="jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap" placeholder="Jumlah Pelayanan Gigi Dan Mulut Pencabutan Gigi Tetap" value="<?php echo $data["jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Pelayanan Gigi Dan Mulut Rasio Tumpatan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="pelayanan_gigi_dan_mulut_rasio_tumpatan" id="pelayanan_gigi_dan_mulut_rasio_tumpatan" placeholder="Pelayanan Gigi Dan Mulut Rasio Tumpatan" value="<?php echo $data["pelayanan_gigi_dan_mulut_rasio_tumpatan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Murid Sdmi Melakukan Sikat Gigi Massal </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_murid_sdmi_melakukan_sikat_gigi_massal" id="jumlah_murid_sdmi_melakukan_sikat_gigi_massal" placeholder="Jumlah Murid Sdmi Melakukan Sikat Gigi Massal" value="<?php echo $data["jumlah_murid_sdmi_melakukan_sikat_gigi_massal"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Murid Sdmi Diperiksa Ukgs </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_murid_sdmi_diperiksa_ukgs" id="jumlah_murid_sdmi_diperiksa_ukgs" placeholder="Jumlah Murid Sdmi Diperiksa Ukgs" value="<?php echo $data["jumlah_murid_sdmi_diperiksa_ukgs"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Murid Sdmi Perlu Perawatan Ukgs </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_murid_sdmi_perlu_perawatan_ukgs" id="jumlah_murid_sdmi_perlu_perawatan_ukgs" placeholder="Jumlah Murid Sdmi Perlu Perawatan Ukgs" value="<?php echo $data["jumlah_murid_sdmi_perlu_perawatan_ukgs"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Usia 60 Plus </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_usia_60_plus" id="jumlah_usia_60_plus" placeholder="Jumlah Usia 60 Plus" value="<?php echo $data["jumlah_usia_60_plus"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Usia 60 Plus Mendapatkan Pelayanan Kesehatan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan" id="jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan" placeholder="Jumlah Usia 60 Plus Mendapatkan Pelayanan Kesehatan" value="<?php echo $data["jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Rumah Tangga Dipantau </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_rumah_tangga_dipantau" id="jumlah_rumah_tangga_dipantau" placeholder="Jumlah Rumah Tangga Dipantau" value="<?php echo $data["jumlah_rumah_tangga_dipantau"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Persentase Rumah Tangga Dipantau </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="persentase_rumah_tangga_dipantau" id="persentase_rumah_tangga_dipantau" placeholder="Persentase Rumah Tangga Dipantau" value="<?php echo $data["persentase_rumah_tangga_dipantau"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Rumah Tangga Berphbs </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_rumah_tangga_berphbs" id="jumlah_rumah_tangga_berphbs" placeholder="Jumlah Rumah Tangga Berphbs" value="<?php echo $data["jumlah_rumah_tangga_berphbs"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Persentase Rumah Tangga Berphbs </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="persentase_rumah_tangga_berphbs" id="persentase_rumah_tangga_berphbs" placeholder="Persentase Rumah Tangga Berphbs" value="<?php echo $data["persentase_rumah_tangga_berphbs"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Seluruh Rumah </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_seluruh_rumah" id="jumlah_seluruh_rumah" placeholder="Jumlah Seluruh Rumah" value="<?php echo $data["jumlah_seluruh_rumah"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Rumah Belum Memenuhi Syarat </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_rumah_belum_memenuhi_syarat" id="jumlah_rumah_belum_memenuhi_syarat" placeholder="Jumlah Rumah Belum Memenuhi Syarat" value="<?php echo $data["jumlah_rumah_belum_memenuhi_syarat"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Rumah Dibina </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_rumah_dibina" id="jumlah_rumah_dibina" placeholder="Jumlah Rumah Dibina" value="<?php echo $data["jumlah_rumah_dibina"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Rumah Dibina Memenuhi Syarat </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_rumah_dibina_memenuhi_syarat" id="jumlah_rumah_dibina_memenuhi_syarat" placeholder="Jumlah Rumah Dibina Memenuhi Syarat" value="<?php echo $data["jumlah_rumah_dibina_memenuhi_syarat"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Rumah Memenuhi Syarat Rumah Sehat </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_rumah_memenuhi_syarat_rumah_sehat" id="jumlah_rumah_memenuhi_syarat_rumah_sehat" placeholder="Jumlah Rumah Memenuhi Syarat Rumah Sehat" value="<?php echo $data["jumlah_rumah_memenuhi_syarat_rumah_sehat"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Persentase Rumah Memenuhi Syarat Rumah Sehat </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="persentase_rumah_memenuhi_syarat_rumah_sehat" id="persentase_rumah_memenuhi_syarat_rumah_sehat" placeholder="Persentase Rumah Memenuhi Syarat Rumah Sehat" value="<?php echo $data["persentase_rumah_memenuhi_syarat_rumah_sehat"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Penyelenggara Air Minum Memenuhi Syarat </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_penyelenggara_air_minum_memenuhi_syarat" id="jumlah_penyelenggara_air_minum_memenuhi_syarat" placeholder="Jumlah Penyelenggara Air Minum Memenuhi Syarat" value="<?php echo $data["jumlah_penyelenggara_air_minum_memenuhi_syarat"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Penduduk Dengan Akses Air Minum Layak </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_penduduk_dengan_akses_air_minum_layak" id="jumlah_penduduk_dengan_akses_air_minum_layak" placeholder="Jumlah Penduduk Dengan Akses Air Minum Layak" value="<?php echo $data["jumlah_penduduk_dengan_akses_air_minum_layak"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Penduduk Yang Memiliki Akses Sanitasi Layak </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_penduduk_yang_memiliki_akses_sanitasi_layak" id="jumlah_penduduk_yang_memiliki_akses_sanitasi_layak" placeholder="Jumlah Penduduk Yang Memiliki Akses Sanitasi Layak" value="<?php echo $data["jumlah_penduduk_yang_memiliki_akses_sanitasi_layak"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Desa Stbm </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_desa_stbm" id="jumlah_desa_stbm" placeholder="Jumlah Desa Stbm" value="<?php echo $data["jumlah_desa_stbm"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Tempat Umum Memenuhi Syarat Kesehatan </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_tempat_umum_memenuhi_syarat_kesehatan" id="jumlah_tempat_umum_memenuhi_syarat_kesehatan" placeholder="Jumlah Tempat Umum Memenuhi Syarat Kesehatan" value="<?php echo $data["jumlah_tempat_umum_memenuhi_syarat_kesehatan"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Tpm Yang Memenuhi Syarat Higenie Sanitasi </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi" id="jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi" placeholder="Jumlah Tpm Yang Memenuhi Syarat Higenie Sanitasi" value="<?php echo $data["jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Tpm Yang Tidak Memenuhi Syarat </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_tpm_yang_tidak_memenuhi_syarat" id="jumlah_tpm_yang_tidak_memenuhi_syarat" placeholder="Jumlah Tpm Yang Tidak Memenuhi Syarat" value="<?php echo $data["jumlah_tpm_yang_tidak_memenuhi_syarat"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Tpm Yang Memenuhi Syarat Diuji Petik </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_tpm_yang_memenuhi_syarat_diuji_petik" id="jumlah_tpm_yang_memenuhi_syarat_diuji_petik" placeholder="Jumlah Tpm Yang Memenuhi Syarat Diuji Petik" value="<?php echo $data["jumlah_tpm_yang_memenuhi_syarat_diuji_petik"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Tpm Dibina </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_tpm_dibina" id="jumlah_tpm_dibina" placeholder="Jumlah Tpm Dibina" value="<?php echo $data["jumlah_tpm_dibina"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Strata Posyandu </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_strata_posyandu" id="jumlah_strata_posyandu" placeholder="Jumlah Strata Posyandu" value="<?php echo $data["jumlah_strata_posyandu"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Posyandu Aktif </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_posyandu_aktif" id="jumlah_posyandu_aktif" placeholder="Jumlah Posyandu Aktif" value="<?php echo $data["jumlah_posyandu_aktif"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Persentase Posyandu Aktif </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="persentase_posyandu_aktif" id="persentase_posyandu_aktif" placeholder="Persentase Posyandu Aktif" value="<?php echo $data["persentase_posyandu_aktif"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ukbm Poskesdas </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ukbm_poskesdas" id="jumlah_ukbm_poskesdas" placeholder="Jumlah Ukbm Poskesdas" value="<?php echo $data["jumlah_ukbm_poskesdas"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ukbm Polindes </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ukbm_polindes" id="jumlah_ukbm_polindes" placeholder="Jumlah Ukbm Polindes" value="<?php echo $data["jumlah_ukbm_polindes"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ukbm Posbindu </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ukbm_posbindu" id="jumlah_ukbm_posbindu" placeholder="Jumlah Ukbm Posbindu" value="<?php echo $data["jumlah_ukbm_posbindu"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ukbm Posmaldes </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ukbm_posmaldes" id="jumlah_ukbm_posmaldes" placeholder="Jumlah Ukbm Posmaldes" value="<?php echo $data["jumlah_ukbm_posmaldes"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Ukbm Pos Tb Desa </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_ukbm_pos_tb_desa" id="jumlah_ukbm_pos_tb_desa" placeholder="Jumlah Ukbm Pos Tb Desa" value="<?php echo $data["jumlah_ukbm_pos_tb_desa"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Jumlah Kelurahan Per Desa Siaga </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="jumlah_kelurahan_per_desa_siaga" id="jumlah_kelurahan_per_desa_siaga" placeholder="Jumlah Kelurahan Per Desa Siaga" value="<?php echo $data["jumlah_kelurahan_per_desa_siaga"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="decimal" class="col-sm-3 control-label">Persentasse Kelurahan Per Desa Siaga </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="persentasse_kelurahan_per_desa_siaga" id="persentasse_kelurahan_per_desa_siaga" placeholder="Persentasse Kelurahan Per Desa Siaga" value="<?php echo $data["persentasse_kelurahan_per_desa_siaga"]; ?>" />
        </div>
		</div>
	   </div>
        			<div class="form-actions">
					<div class="row">
					<div class="col-md-offset-3 col-md-9">
	    <input type="hidden" name="id" value="<?php echo $data["id"]; ?>" /> 
	    <input type="hidden" name="statusTombol" value="<?php echo $button ?>" /> 
	    <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-save'></span> <?php echo $button ?></button> 
	    <a class='btn btn-danger' onclick=self.history.back() ><span class='glyphicon glyphicon-arrow-left'></span> Kembali</a>
	</div>
				</div>
              </div>
			  </form>
   
   <?php } elseif ($_GET['aksi'] == 'detail') {
	    $id = $_GET['id'];
		 	
		 $query="SELECT * FROM profilkesehatan WHERE `id`= '$id'";
		$result= $mysqli->query($query);
		$data=$result->fetch_assoc();
		?>

        <table class="table table-bordered table-striped table-condensed flip-content">
	    <tr><td>Tahun</td><td><?php echo $data["tahun"]; ?></td></tr>
	    <tr><td>Provinsi</td><td><?php echo $data["provinsi"]; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $data["kota"]; ?></td></tr>
	    <tr><td>Luas Wilayah</td><td><?php echo $data["luas_wilayah"]; ?></td></tr>
	    <tr><td>Jumlah Desa</td><td><?php echo $data["jumlah_desa"]; ?></td></tr>
	    <tr><td>Jumlah Kelurahan</td><td><?php echo $data["jumlah_kelurahan"]; ?></td></tr>
	    <tr><td>Jumlah Desa Dan Kelurahan</td><td><?php echo $data["jumlah_desa_dan_kelurahan"]; ?></td></tr>
	    <tr><td>Jumlah Penduduk</td><td><?php echo $data["jumlah_penduduk"]; ?></td></tr>
	    <tr><td>Jumlah Rumah Tangga</td><td><?php echo $data["jumlah_rumah_tangga"]; ?></td></tr>
	    <tr><td>Rata Rata Jiwa Rumah Tangga</td><td><?php echo $data["rata_rata_jiwa_rumah_tangga"]; ?></td></tr>
	    <tr><td>Kepadatan Penduduk</td><td><?php echo $data["kepadatan_penduduk"]; ?></td></tr>
	    <tr><td>Jumlah Angka Kelahiran Hidup</td><td><?php echo $data["jumlah_angka_kelahiran_hidup"]; ?></td></tr>
	    <tr><td>Jumlah Angka Kelahiran Mati</td><td><?php echo $data["jumlah_angka_kelahiran_mati"]; ?></td></tr>
	    <tr><td>Jumlah Angka Kelahiran Hidup Dan Mati</td><td><?php echo $data["jumlah_angka_kelahiran_hidup_dan_mati"]; ?></td></tr>
	    <tr><td>Jumlah Kematian Bayi</td><td><?php echo $data["jumlah_kematian_bayi"]; ?></td></tr>
	    <tr><td>Jumlah Kematian Neonatal</td><td><?php echo $data["jumlah_kematian_neonatal"]; ?></td></tr>
	    <tr><td>Jumlah Kematian Anak Balita</td><td><?php echo $data["jumlah_kematian_anak_balita"]; ?></td></tr>
	    <tr><td>Jumlah Kematian Ibu Hamil</td><td><?php echo $data["jumlah_kematian_ibu_hamil"]; ?></td></tr>
	    <tr><td>Jumlah Kematian Ibu Bersalin</td><td><?php echo $data["jumlah_kematian_ibu_bersalin"]; ?></td></tr>
	    <tr><td>Jumlah Kematian Ibu Nifas</td><td><?php echo $data["jumlah_kematian_ibu_nifas"]; ?></td></tr>
	    <tr><td>Jumlah Kematian Ibu</td><td><?php echo $data["jumlah_kematian_ibu"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Baru Tb Bta Plus</td><td><?php echo $data["jumlah_kasus_baru_tb_bta_plus"]; ?></td></tr>
	    <tr><td>Jumlah Seluruh Kasus Tb</td><td><?php echo $data["jumlah_seluruh_kasus_tb"]; ?></td></tr>
	    <tr><td>Kasus Tb Anak</td><td><?php echo $data["kasus_tb_anak"]; ?></td></tr>
	    <tr><td>Tb Paru Persentase Terhadap Suspek</td><td><?php echo $data["tb_paru_persentase_terhadap_suspek"]; ?></td></tr>
	    <tr><td>Jumlah Angka Kesembuhan Bta Plus</td><td><?php echo $data["jumlah_angka_kesembuhan_bta_plus"]; ?></td></tr>
	    <tr><td>Jumlah Angka Pengobatan Lengkap Bta Plus</td><td><?php echo $data["jumlah_angka_pengobatan_lengkap_bta_plus"]; ?></td></tr>
	    <tr><td>Angka Keberhasilan Pengobatan Succes Rate Bta Plus</td><td><?php echo $data["angka_keberhasilan_pengobatan_succes_rate_bta_plus"]; ?></td></tr>
	    <tr><td>Jumlah Kematian Selama Pengobatan</td><td><?php echo $data["jumlah_kematian_selama_pengobatan"]; ?></td></tr>
	    <tr><td>Jumlah Balita</td><td><?php echo $data["jumlah_balita"]; ?></td></tr>
	    <tr><td>Jumlah Pneumonia Balita Ditemukan Dan Ditangani</td><td><?php echo $data["jumlah_pneumonia_balita_ditemukan_dan_ditangani"]; ?></td></tr>
	    <tr><td>Jumlah Pendonor Darah</td><td><?php echo $data["jumlah_pendonor_darah"]; ?></td></tr>
	    <tr><td>Jumlah Donor Darah Positif Hiv</td><td><?php echo $data["jumlah_donor_darah_positif_hiv"]; ?></td></tr>
	    <tr><td>Jumlah Perkiraan Kasus Diare</td><td><?php echo $data["jumlah_perkiraan_kasus_diare"]; ?></td></tr>
	    <tr><td>Jumlah Diare Ditangani</td><td><?php echo $data["jumlah_diare_ditangani"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Baru Kusta Pb Dan Mb</td><td><?php echo $data["jumlah_kasus_baru_kusta_pb_dan_mb"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Tercatat Kusta Pb Dan Mb</td><td><?php echo $data["jumlah_kasus_tercatat_kusta_pb_dan_mb"]; ?></td></tr>
	    <tr><td>Jumlah Penderita Kusta Rft Pb</td><td><?php echo $data["jumlah_penderita_kusta_rft_pb"]; ?></td></tr>
	    <tr><td>Jumlah Penderita Kusta Rft Mb</td><td><?php echo $data["jumlah_penderita_kusta_rft_mb"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Afp Rate</td><td><?php echo $data["jumlah_kasus_afp_rate"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Difteri</td><td><?php echo $data["jumlah_kasus_difteri"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Difteri Meninggal</td><td><?php echo $data["jumlah_kasus_difteri_meninggal"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Pertusis</td><td><?php echo $data["jumlah_kasus_pertusis"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Pertusis Meninggal</td><td><?php echo $data["jumlah_kasus_pertusis_meninggal"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Tetanus Nonneoratorum</td><td><?php echo $data["jumlah_kasus_tetanus_nonneoratorum"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Tetanus Nonneoratum Meninggal</td><td><?php echo $data["jumlah_kasus_tetanus_nonneoratum_meninggal"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Tetanus Neoratum</td><td><?php echo $data["jumlah_kasus_tetanus_neoratum"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Tetanus Neoratum Meninggal</td><td><?php echo $data["jumlah_kasus_tetanus_neoratum_meninggal"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Polio</td><td><?php echo $data["jumlah_kasus_polio"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Campak</td><td><?php echo $data["jumlah_kasus_campak"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Campak Meninggal</td><td><?php echo $data["jumlah_kasus_campak_meninggal"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Hepatitis B</td><td><?php echo $data["jumlah_kasus_hepatitis_b"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Dbd</td><td><?php echo $data["jumlah_kasus_dbd"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Dbd Meninggal</td><td><?php echo $data["jumlah_kasus_dbd_meninggal"]; ?></td></tr>
	    <tr><td>Dbd Cfr</td><td><?php echo $data["dbd_cfr"]; ?></td></tr>
	    <tr><td>Jumlah Sediaan Darah Diperiksa Malaria</td><td><?php echo $data["jumlah_sediaan_darah_diperiksa_malaria"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Positif Malaria</td><td><?php echo $data["jumlah_kasus_positif_malaria"]; ?></td></tr>
	    <tr><td>Jumlah Kasus Malaria Meninggal</td><td><?php echo $data["jumlah_kasus_malaria_meninggal"]; ?></td></tr>
	    <tr><td>Jumlah Dilakukan Pengukuran Darah</td><td><?php echo $data["jumlah_dilakukan_pengukuran_darah"]; ?></td></tr>
	    <tr><td>Jumlah Dilakukan Pemeriksaan Obesitas</td><td><?php echo $data["jumlah_dilakukan_pemeriksaan_obesitas"]; ?></td></tr>
	    <tr><td>Jumlah Klb Di Desa Atau Kelurahan</td><td><?php echo $data["jumlah_klb_di_desa_atau_kelurahan"]; ?></td></tr>
	    <tr><td>Jumlah Ibu Hamil K1</td><td><?php echo $data["jumlah_ibu_hamil_k1"]; ?></td></tr>
	    <tr><td>Jumlah Ibu Hamil K2</td><td><?php echo $data["jumlah_ibu_hamil_k2"]; ?></td></tr>
	    <tr><td>Jumlah Ibu Bersalin Atau Nifas</td><td><?php echo $data["jumlah_ibu_bersalin_atau_nifas"]; ?></td></tr>
	    <tr><td>Jumlah Ibu Bersalin Ditolong Nakes</td><td><?php echo $data["jumlah_ibu_bersalin_ditolong_nakes"]; ?></td></tr>
	    <tr><td>Jumlah Ibu Bersalin Mendapatkan Yankes Nifas</td><td><?php echo $data["jumlah_ibu_bersalin_mendapatkan_yankes_nifas"]; ?></td></tr>
	    <tr><td>Jumlah Ibu Bersalin Mendapatkan Vit A</td><td><?php echo $data["jumlah_ibu_bersalin_mendapatkan_vit_a"]; ?></td></tr>
	    <tr><td>Jumlah Imunisasi Tetanus Ibu Hamil Tt1</td><td><?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt1"]; ?></td></tr>
	    <tr><td>Jumlah Imunisasi Tetanus Ibu Hamil Tt2</td><td><?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt2"]; ?></td></tr>
	    <tr><td>Jumlah Imunisasi Tetanus Ibu Hamil Tt3</td><td><?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt3"]; ?></td></tr>
	    <tr><td>Jumlah Imunisasi Tetanus Ibu Hamil Tt4</td><td><?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt4"]; ?></td></tr>
	    <tr><td>Jumlah Imunisasi Tetanus Ibu Hamil Tt5</td><td><?php echo $data["jumlah_imunisasi_tetanus_ibu_hamil_tt5"]; ?></td></tr>
	    <tr><td>Jumlah Ibu Hamil Mendapat Fe 3</td><td><?php echo $data["jumlah_ibu_hamil_mendapat_fe_3"]; ?></td></tr>
	    <tr><td>Jumlah Penanganank Komplikasi Kebidanan</td><td><?php echo $data["jumlah_penanganank_komplikasi_kebidanan"]; ?></td></tr>
	    <tr><td>Jumlah Penanganan Komplikasi Neonatal</td><td><?php echo $data["jumlah_penanganan_komplikasi_neonatal"]; ?></td></tr>
	    <tr><td>Jumlah Peserta Kb Baru Mkjp Non Mkjp</td><td><?php echo $data["jumlah_peserta_kb_baru_mkjp_non_mkjp"]; ?></td></tr>
	    <tr><td>Jumlah Kb Aktif</td><td><?php echo $data["jumlah_kb_aktif"]; ?></td></tr>
	    <tr><td>Jumlah Bayi Baru Lahir Di Timbang</td><td><?php echo $data["jumlah_bayi_baru_lahir_di_timbang"]; ?></td></tr>
	    <tr><td>Jumlah Berat Badan Bayi Lahir Rendah</td><td><?php echo $data["jumlah_berat_badan_bayi_lahir_rendah"]; ?></td></tr>
	    <tr><td>Jumlah Kunjungan Neonatus Kn1</td><td><?php echo $data["jumlah_kunjungan_neonatus_kn1"]; ?></td></tr>
	    <tr><td>Jumlah Kunjungan Neonatus 3 Kn Lengkap</td><td><?php echo $data["jumlah_kunjungan_neonatus_3_kn_lengkap"]; ?></td></tr>
	    <tr><td>Jumlah Bayi</td><td><?php echo $data["jumlah_bayi"]; ?></td></tr>
	    <tr><td>Jumlah Bayi Yang Diberi Asi Eksklusif</td><td><?php echo $data["jumlah_bayi_yang_diberi_asi_eksklusif"]; ?></td></tr>
	    <tr><td>Jumlah Pelayanan Kesehatan Bayi</td><td><?php echo $data["jumlah_pelayanan_kesehatan_bayi"]; ?></td></tr>
	    <tr><td>Jumlah Desa Atau Kelurahan Ucl</td><td><?php echo $data["jumlah_desa_atau_kelurahan_ucl"]; ?></td></tr>
	    <tr><td>Jumlah Bayi Imunisasi Bcg</td><td><?php echo $data["jumlah_bayi_imunisasi_bcg"]; ?></td></tr>
	    <tr><td>Jumlah Bayi Munisasi Polio4</td><td><?php echo $data["jumlah_bayi_munisasi_polio4"]; ?></td></tr>
	    <tr><td>Jumlah Bayi Imunisasi Campak</td><td><?php echo $data["jumlah_bayi_imunisasi_campak"]; ?></td></tr>
	    <tr><td>Jumlah Bayi Imunisasi Dasar Lengkap</td><td><?php echo $data["jumlah_bayi_imunisasi_dasar_lengkap"]; ?></td></tr>
	    <tr><td>Jumlah Bayi Mendapat Vit A</td><td><?php echo $data["jumlah_bayi_mendapat_vit_a"]; ?></td></tr>
	    <tr><td>Jumlah Anak Balita Mendapat Vit A</td><td><?php echo $data["jumlah_anak_balita_mendapat_vit_a"]; ?></td></tr>
	    <tr><td>Jumlah Balita Mendapat Vit A</td><td><?php echo $data["jumlah_balita_mendapat_vit_a"]; ?></td></tr>
	    <tr><td>Jumlah Baduta Ditimbang</td><td><?php echo $data["jumlah_baduta_ditimbang"]; ?></td></tr>
	    <tr><td>Jumlah Baduta Berat Badan Di Bawah Garis Merah</td><td><?php echo $data["jumlah_baduta_berat_badan_di_bawah_garis_merah"]; ?></td></tr>
	    <tr><td>Jumlah Anak Balita 1259 Mendapat Pelayanan Kesehatan</td><td><?php echo $data["jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan"]; ?></td></tr>
	    <tr><td>Jumlah Balita Ditimbang D</td><td><?php echo $data["jumlah_balita_ditimbang_d"]; ?></td></tr>
	    <tr><td>Jumlah Balita Gizi Buruk Di Temukan</td><td><?php echo $data["jumlah_balita_gizi_buruk_di_temukan"]; ?></td></tr>
	    <tr><td>Jumlah Balita Gizi Buruk Mendapat Perawatan</td><td><?php echo $data["jumlah_balita_gizi_buruk_mendapat_perawatan"]; ?></td></tr>
	    <tr><td>Jumlah Murid Sd Dan Setingkat</td><td><?php echo $data["jumlah_murid_sd_dan_setingkat"]; ?></td></tr>
	    <tr><td>Jumlah Mendapat Pelayanan Kesehatan Siswa Sd Dan Setingkat</td><td><?php echo $data["jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat"]; ?></td></tr>
	    <tr><td>Jumlah Pelayanan Gigi Dan Mulut Tumpatan Gigi Tetap</td><td><?php echo $data["jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap"]; ?></td></tr>
	    <tr><td>Jumlah Pelayanan Gigi Dan Mulut Pencabutan Gigi Tetap</td><td><?php echo $data["jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap"]; ?></td></tr>
	    <tr><td>Pelayanan Gigi Dan Mulut Rasio Tumpatan</td><td><?php echo $data["pelayanan_gigi_dan_mulut_rasio_tumpatan"]; ?></td></tr>
	    <tr><td>Jumlah Murid Sdmi Melakukan Sikat Gigi Massal</td><td><?php echo $data["jumlah_murid_sdmi_melakukan_sikat_gigi_massal"]; ?></td></tr>
	    <tr><td>Jumlah Murid Sdmi Diperiksa Ukgs</td><td><?php echo $data["jumlah_murid_sdmi_diperiksa_ukgs"]; ?></td></tr>
	    <tr><td>Jumlah Murid Sdmi Perlu Perawatan Ukgs</td><td><?php echo $data["jumlah_murid_sdmi_perlu_perawatan_ukgs"]; ?></td></tr>
	    <tr><td>Jumlah Usia 60 Plus</td><td><?php echo $data["jumlah_usia_60_plus"]; ?></td></tr>
	    <tr><td>Jumlah Usia 60 Plus Mendapatkan Pelayanan Kesehatan</td><td><?php echo $data["jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan"]; ?></td></tr>
	    <tr><td>Jumlah Rumah Tangga Dipantau</td><td><?php echo $data["jumlah_rumah_tangga_dipantau"]; ?></td></tr>
	    <tr><td>Persentase Rumah Tangga Dipantau</td><td><?php echo $data["persentase_rumah_tangga_dipantau"]; ?></td></tr>
	    <tr><td>Jumlah Rumah Tangga Berphbs</td><td><?php echo $data["jumlah_rumah_tangga_berphbs"]; ?></td></tr>
	    <tr><td>Persentase Rumah Tangga Berphbs</td><td><?php echo $data["persentase_rumah_tangga_berphbs"]; ?></td></tr>
	    <tr><td>Jumlah Seluruh Rumah</td><td><?php echo $data["jumlah_seluruh_rumah"]; ?></td></tr>
	    <tr><td>Jumlah Rumah Belum Memenuhi Syarat</td><td><?php echo $data["jumlah_rumah_belum_memenuhi_syarat"]; ?></td></tr>
	    <tr><td>Jumlah Rumah Dibina</td><td><?php echo $data["jumlah_rumah_dibina"]; ?></td></tr>
	    <tr><td>Jumlah Rumah Dibina Memenuhi Syarat</td><td><?php echo $data["jumlah_rumah_dibina_memenuhi_syarat"]; ?></td></tr>
	    <tr><td>Jumlah Rumah Memenuhi Syarat Rumah Sehat</td><td><?php echo $data["jumlah_rumah_memenuhi_syarat_rumah_sehat"]; ?></td></tr>
	    <tr><td>Persentase Rumah Memenuhi Syarat Rumah Sehat</td><td><?php echo $data["persentase_rumah_memenuhi_syarat_rumah_sehat"]; ?></td></tr>
	    <tr><td>Jumlah Penyelenggara Air Minum Memenuhi Syarat</td><td><?php echo $data["jumlah_penyelenggara_air_minum_memenuhi_syarat"]; ?></td></tr>
	    <tr><td>Jumlah Penduduk Dengan Akses Air Minum Layak</td><td><?php echo $data["jumlah_penduduk_dengan_akses_air_minum_layak"]; ?></td></tr>
	    <tr><td>Jumlah Penduduk Yang Memiliki Akses Sanitasi Layak</td><td><?php echo $data["jumlah_penduduk_yang_memiliki_akses_sanitasi_layak"]; ?></td></tr>
	    <tr><td>Jumlah Desa Stbm</td><td><?php echo $data["jumlah_desa_stbm"]; ?></td></tr>
	    <tr><td>Jumlah Tempat Umum Memenuhi Syarat Kesehatan</td><td><?php echo $data["jumlah_tempat_umum_memenuhi_syarat_kesehatan"]; ?></td></tr>
	    <tr><td>Jumlah Tpm Yang Memenuhi Syarat Higenie Sanitasi</td><td><?php echo $data["jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi"]; ?></td></tr>
	    <tr><td>Jumlah Tpm Yang Tidak Memenuhi Syarat</td><td><?php echo $data["jumlah_tpm_yang_tidak_memenuhi_syarat"]; ?></td></tr>
	    <tr><td>Jumlah Tpm Yang Memenuhi Syarat Diuji Petik</td><td><?php echo $data["jumlah_tpm_yang_memenuhi_syarat_diuji_petik"]; ?></td></tr>
	    <tr><td>Jumlah Tpm Dibina</td><td><?php echo $data["jumlah_tpm_dibina"]; ?></td></tr>
	    <tr><td>Jumlah Strata Posyandu</td><td><?php echo $data["jumlah_strata_posyandu"]; ?></td></tr>
	    <tr><td>Jumlah Posyandu Aktif</td><td><?php echo $data["jumlah_posyandu_aktif"]; ?></td></tr>
	    <tr><td>Persentase Posyandu Aktif</td><td><?php echo $data["persentase_posyandu_aktif"]; ?></td></tr>
	    <tr><td>Jumlah Ukbm Poskesdas</td><td><?php echo $data["jumlah_ukbm_poskesdas"]; ?></td></tr>
	    <tr><td>Jumlah Ukbm Polindes</td><td><?php echo $data["jumlah_ukbm_polindes"]; ?></td></tr>
	    <tr><td>Jumlah Ukbm Posbindu</td><td><?php echo $data["jumlah_ukbm_posbindu"]; ?></td></tr>
	    <tr><td>Jumlah Ukbm Posmaldes</td><td><?php echo $data["jumlah_ukbm_posmaldes"]; ?></td></tr>
	    <tr><td>Jumlah Ukbm Pos Tb Desa</td><td><?php echo $data["jumlah_ukbm_pos_tb_desa"]; ?></td></tr>
	    <tr><td>Jumlah Kelurahan Per Desa Siaga</td><td><?php echo $data["jumlah_kelurahan_per_desa_siaga"]; ?></td></tr>
	    <tr><td>Persentasse Kelurahan Per Desa Siaga</td><td><?php echo $data["persentasse_kelurahan_per_desa_siaga"]; ?></td></tr>
	    <tr><td></td><td><a href="?page=profilkesehatan" class="btn btn-info"><i class="fa fa-reply"></i> Kembali</a></td></tr>
	</table>
       
<?php } elseif ($_GET['aksi'] == 'prosesSubmit') {
	   
	  $id = $_POST['id'];
	  $tahun = $_POST['tahun'];
	  $provinsi = $_POST['provinsi'];
	  $kota = $_POST['kota'];
	  $luas_wilayah = $_POST['luas_wilayah'];
	  $jumlah_desa = $_POST['jumlah_desa'];
	  $jumlah_kelurahan = $_POST['jumlah_kelurahan'];
	  $jumlah_desa_dan_kelurahan = $_POST['jumlah_desa_dan_kelurahan'];
	  $jumlah_penduduk = $_POST['jumlah_penduduk'];
	  $jumlah_rumah_tangga = $_POST['jumlah_rumah_tangga'];
	  $rata_rata_jiwa_rumah_tangga = $_POST['rata_rata_jiwa_rumah_tangga'];
	  $kepadatan_penduduk = $_POST['kepadatan_penduduk'];
	  $jumlah_angka_kelahiran_hidup = $_POST['jumlah_angka_kelahiran_hidup'];
	  $jumlah_angka_kelahiran_mati = $_POST['jumlah_angka_kelahiran_mati'];
	  $jumlah_angka_kelahiran_hidup_dan_mati = $_POST['jumlah_angka_kelahiran_hidup_dan_mati'];
	  $jumlah_kematian_bayi = $_POST['jumlah_kematian_bayi'];
	  $jumlah_kematian_neonatal = $_POST['jumlah_kematian_neonatal'];
	  $jumlah_kematian_anak_balita = $_POST['jumlah_kematian_anak_balita'];
	  $jumlah_kematian_ibu_hamil = $_POST['jumlah_kematian_ibu_hamil'];
	  $jumlah_kematian_ibu_bersalin = $_POST['jumlah_kematian_ibu_bersalin'];
	  $jumlah_kematian_ibu_nifas = $_POST['jumlah_kematian_ibu_nifas'];
	  $jumlah_kematian_ibu = $_POST['jumlah_kematian_ibu'];
	  $jumlah_kasus_baru_tb_bta_plus = $_POST['jumlah_kasus_baru_tb_bta_plus'];
	  $jumlah_seluruh_kasus_tb = $_POST['jumlah_seluruh_kasus_tb'];
	  $kasus_tb_anak = $_POST['kasus_tb_anak'];
	  $tb_paru_persentase_terhadap_suspek = $_POST['tb_paru_persentase_terhadap_suspek'];
	  $jumlah_angka_kesembuhan_bta_plus = $_POST['jumlah_angka_kesembuhan_bta_plus'];
	  $jumlah_angka_pengobatan_lengkap_bta_plus = $_POST['jumlah_angka_pengobatan_lengkap_bta_plus'];
	  $angka_keberhasilan_pengobatan_succes_rate_bta_plus = $_POST['angka_keberhasilan_pengobatan_succes_rate_bta_plus'];
	  $jumlah_kematian_selama_pengobatan = $_POST['jumlah_kematian_selama_pengobatan'];
	  $jumlah_balita = $_POST['jumlah_balita'];
	  $jumlah_pneumonia_balita_ditemukan_dan_ditangani = $_POST['jumlah_pneumonia_balita_ditemukan_dan_ditangani'];
	  $jumlah_pendonor_darah = $_POST['jumlah_pendonor_darah'];
	  $jumlah_donor_darah_positif_hiv = $_POST['jumlah_donor_darah_positif_hiv'];
	  $jumlah_perkiraan_kasus_diare = $_POST['jumlah_perkiraan_kasus_diare'];
	  $jumlah_diare_ditangani = $_POST['jumlah_diare_ditangani'];
	  $jumlah_kasus_baru_kusta_pb_dan_mb = $_POST['jumlah_kasus_baru_kusta_pb_dan_mb'];
	  $jumlah_kasus_tercatat_kusta_pb_dan_mb = $_POST['jumlah_kasus_tercatat_kusta_pb_dan_mb'];
	  $jumlah_penderita_kusta_rft_pb = $_POST['jumlah_penderita_kusta_rft_pb'];
	  $jumlah_penderita_kusta_rft_mb = $_POST['jumlah_penderita_kusta_rft_mb'];
	  $jumlah_kasus_afp_rate = $_POST['jumlah_kasus_afp_rate'];
	  $jumlah_kasus_difteri = $_POST['jumlah_kasus_difteri'];
	  $jumlah_kasus_difteri_meninggal = $_POST['jumlah_kasus_difteri_meninggal'];
	  $jumlah_kasus_pertusis = $_POST['jumlah_kasus_pertusis'];
	  $jumlah_kasus_pertusis_meninggal = $_POST['jumlah_kasus_pertusis_meninggal'];
	  $jumlah_kasus_tetanus_nonneoratorum = $_POST['jumlah_kasus_tetanus_nonneoratorum'];
	  $jumlah_kasus_tetanus_nonneoratum_meninggal = $_POST['jumlah_kasus_tetanus_nonneoratum_meninggal'];
	  $jumlah_kasus_tetanus_neoratum = $_POST['jumlah_kasus_tetanus_neoratum'];
	  $jumlah_kasus_tetanus_neoratum_meninggal = $_POST['jumlah_kasus_tetanus_neoratum_meninggal'];
	  $jumlah_kasus_polio = $_POST['jumlah_kasus_polio'];
	  $jumlah_kasus_campak = $_POST['jumlah_kasus_campak'];
	  $jumlah_kasus_campak_meninggal = $_POST['jumlah_kasus_campak_meninggal'];
	  $jumlah_kasus_hepatitis_b = $_POST['jumlah_kasus_hepatitis_b'];
	  $jumlah_kasus_dbd = $_POST['jumlah_kasus_dbd'];
	  $jumlah_kasus_dbd_meninggal = $_POST['jumlah_kasus_dbd_meninggal'];
	  $dbd_cfr = $_POST['dbd_cfr'];
	  $jumlah_sediaan_darah_diperiksa_malaria = $_POST['jumlah_sediaan_darah_diperiksa_malaria'];
	  $jumlah_kasus_positif_malaria = $_POST['jumlah_kasus_positif_malaria'];
	  $jumlah_kasus_malaria_meninggal = $_POST['jumlah_kasus_malaria_meninggal'];
	  $jumlah_dilakukan_pengukuran_darah = $_POST['jumlah_dilakukan_pengukuran_darah'];
	  $jumlah_dilakukan_pemeriksaan_obesitas = $_POST['jumlah_dilakukan_pemeriksaan_obesitas'];
	  $jumlah_klb_di_desa_atau_kelurahan = $_POST['jumlah_klb_di_desa_atau_kelurahan'];
	  $jumlah_ibu_hamil_k1 = $_POST['jumlah_ibu_hamil_k1'];
	  $jumlah_ibu_hamil_k2 = $_POST['jumlah_ibu_hamil_k2'];
	  $jumlah_ibu_bersalin_atau_nifas = $_POST['jumlah_ibu_bersalin_atau_nifas'];
	  $jumlah_ibu_bersalin_ditolong_nakes = $_POST['jumlah_ibu_bersalin_ditolong_nakes'];
	  $jumlah_ibu_bersalin_mendapatkan_yankes_nifas = $_POST['jumlah_ibu_bersalin_mendapatkan_yankes_nifas'];
	  $jumlah_ibu_bersalin_mendapatkan_vit_a = $_POST['jumlah_ibu_bersalin_mendapatkan_vit_a'];
	  $jumlah_imunisasi_tetanus_ibu_hamil_tt1 = $_POST['jumlah_imunisasi_tetanus_ibu_hamil_tt1'];
	  $jumlah_imunisasi_tetanus_ibu_hamil_tt2 = $_POST['jumlah_imunisasi_tetanus_ibu_hamil_tt2'];
	  $jumlah_imunisasi_tetanus_ibu_hamil_tt3 = $_POST['jumlah_imunisasi_tetanus_ibu_hamil_tt3'];
	  $jumlah_imunisasi_tetanus_ibu_hamil_tt4 = $_POST['jumlah_imunisasi_tetanus_ibu_hamil_tt4'];
	  $jumlah_imunisasi_tetanus_ibu_hamil_tt5 = $_POST['jumlah_imunisasi_tetanus_ibu_hamil_tt5'];
	  $jumlah_ibu_hamil_mendapat_fe_3 = $_POST['jumlah_ibu_hamil_mendapat_fe_3'];
	  $jumlah_penanganank_komplikasi_kebidanan = $_POST['jumlah_penanganank_komplikasi_kebidanan'];
	  $jumlah_penanganan_komplikasi_neonatal = $_POST['jumlah_penanganan_komplikasi_neonatal'];
	  $jumlah_peserta_kb_baru_mkjp_non_mkjp = $_POST['jumlah_peserta_kb_baru_mkjp_non_mkjp'];
	  $jumlah_kb_aktif = $_POST['jumlah_kb_aktif'];
	  $jumlah_bayi_baru_lahir_di_timbang = $_POST['jumlah_bayi_baru_lahir_di_timbang'];
	  $jumlah_berat_badan_bayi_lahir_rendah = $_POST['jumlah_berat_badan_bayi_lahir_rendah'];
	  $jumlah_kunjungan_neonatus_kn1 = $_POST['jumlah_kunjungan_neonatus_kn1'];
	  $jumlah_kunjungan_neonatus_3_kn_lengkap = $_POST['jumlah_kunjungan_neonatus_3_kn_lengkap'];
	  $jumlah_bayi = $_POST['jumlah_bayi'];
	  $jumlah_bayi_yang_diberi_asi_eksklusif = $_POST['jumlah_bayi_yang_diberi_asi_eksklusif'];
	  $jumlah_pelayanan_kesehatan_bayi = $_POST['jumlah_pelayanan_kesehatan_bayi'];
	  $jumlah_desa_atau_kelurahan_ucl = $_POST['jumlah_desa_atau_kelurahan_ucl'];
	  $jumlah_bayi_imunisasi_bcg = $_POST['jumlah_bayi_imunisasi_bcg'];
	  $jumlah_bayi_munisasi_polio4 = $_POST['jumlah_bayi_munisasi_polio4'];
	  $jumlah_bayi_imunisasi_campak = $_POST['jumlah_bayi_imunisasi_campak'];
	  $jumlah_bayi_imunisasi_dasar_lengkap = $_POST['jumlah_bayi_imunisasi_dasar_lengkap'];
	  $jumlah_bayi_mendapat_vit_a = $_POST['jumlah_bayi_mendapat_vit_a'];
	  $jumlah_anak_balita_mendapat_vit_a = $_POST['jumlah_anak_balita_mendapat_vit_a'];
	  $jumlah_balita_mendapat_vit_a = $_POST['jumlah_balita_mendapat_vit_a'];
	  $jumlah_baduta_ditimbang = $_POST['jumlah_baduta_ditimbang'];
	  $jumlah_baduta_berat_badan_di_bawah_garis_merah = $_POST['jumlah_baduta_berat_badan_di_bawah_garis_merah'];
	  $jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan = $_POST['jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan'];
	  $jumlah_balita_ditimbang_d = $_POST['jumlah_balita_ditimbang_d'];
	  $jumlah_balita_gizi_buruk_di_temukan = $_POST['jumlah_balita_gizi_buruk_di_temukan'];
	  $jumlah_balita_gizi_buruk_mendapat_perawatan = $_POST['jumlah_balita_gizi_buruk_mendapat_perawatan'];
	  $jumlah_murid_sd_dan_setingkat = $_POST['jumlah_murid_sd_dan_setingkat'];
	  $jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat = $_POST['jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat'];
	  $jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap = $_POST['jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap'];
	  $jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap = $_POST['jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap'];
	  $pelayanan_gigi_dan_mulut_rasio_tumpatan = $_POST['pelayanan_gigi_dan_mulut_rasio_tumpatan'];
	  $jumlah_murid_sdmi_melakukan_sikat_gigi_massal = $_POST['jumlah_murid_sdmi_melakukan_sikat_gigi_massal'];
	  $jumlah_murid_sdmi_diperiksa_ukgs = $_POST['jumlah_murid_sdmi_diperiksa_ukgs'];
	  $jumlah_murid_sdmi_perlu_perawatan_ukgs = $_POST['jumlah_murid_sdmi_perlu_perawatan_ukgs'];
	  $jumlah_usia_60_plus = $_POST['jumlah_usia_60_plus'];
	  $jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan = $_POST['jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan'];
	  $jumlah_rumah_tangga_dipantau = $_POST['jumlah_rumah_tangga_dipantau'];
	  $persentase_rumah_tangga_dipantau = $_POST['persentase_rumah_tangga_dipantau'];
	  $jumlah_rumah_tangga_berphbs = $_POST['jumlah_rumah_tangga_berphbs'];
	  $persentase_rumah_tangga_berphbs = $_POST['persentase_rumah_tangga_berphbs'];
	  $jumlah_seluruh_rumah = $_POST['jumlah_seluruh_rumah'];
	  $jumlah_rumah_belum_memenuhi_syarat = $_POST['jumlah_rumah_belum_memenuhi_syarat'];
	  $jumlah_rumah_dibina = $_POST['jumlah_rumah_dibina'];
	  $jumlah_rumah_dibina_memenuhi_syarat = $_POST['jumlah_rumah_dibina_memenuhi_syarat'];
	  $jumlah_rumah_memenuhi_syarat_rumah_sehat = $_POST['jumlah_rumah_memenuhi_syarat_rumah_sehat'];
	  $persentase_rumah_memenuhi_syarat_rumah_sehat = $_POST['persentase_rumah_memenuhi_syarat_rumah_sehat'];
	  $jumlah_penyelenggara_air_minum_memenuhi_syarat = $_POST['jumlah_penyelenggara_air_minum_memenuhi_syarat'];
	  $jumlah_penduduk_dengan_akses_air_minum_layak = $_POST['jumlah_penduduk_dengan_akses_air_minum_layak'];
	  $jumlah_penduduk_yang_memiliki_akses_sanitasi_layak = $_POST['jumlah_penduduk_yang_memiliki_akses_sanitasi_layak'];
	  $jumlah_desa_stbm = $_POST['jumlah_desa_stbm'];
	  $jumlah_tempat_umum_memenuhi_syarat_kesehatan = $_POST['jumlah_tempat_umum_memenuhi_syarat_kesehatan'];
	  $jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi = $_POST['jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi'];
	  $jumlah_tpm_yang_tidak_memenuhi_syarat = $_POST['jumlah_tpm_yang_tidak_memenuhi_syarat'];
	  $jumlah_tpm_yang_memenuhi_syarat_diuji_petik = $_POST['jumlah_tpm_yang_memenuhi_syarat_diuji_petik'];
	  $jumlah_tpm_dibina = $_POST['jumlah_tpm_dibina'];
	  $jumlah_strata_posyandu = $_POST['jumlah_strata_posyandu'];
	  $jumlah_posyandu_aktif = $_POST['jumlah_posyandu_aktif'];
	  $persentase_posyandu_aktif = $_POST['persentase_posyandu_aktif'];
	  $jumlah_ukbm_poskesdas = $_POST['jumlah_ukbm_poskesdas'];
	  $jumlah_ukbm_polindes = $_POST['jumlah_ukbm_polindes'];
	  $jumlah_ukbm_posbindu = $_POST['jumlah_ukbm_posbindu'];
	  $jumlah_ukbm_posmaldes = $_POST['jumlah_ukbm_posmaldes'];
	  $jumlah_ukbm_pos_tb_desa = $_POST['jumlah_ukbm_pos_tb_desa'];
	  $jumlah_kelurahan_per_desa_siaga = $_POST['jumlah_kelurahan_per_desa_siaga'];
	  $persentasse_kelurahan_per_desa_siaga = $_POST['persentasse_kelurahan_per_desa_siaga'];
	switch($_POST['statusTombol']) {
	case 'Save':
			$query=$mysqli->query("INSERT INTO profilkesehatan (`id`,`tahun`,`provinsi`,`kota`,`luas_wilayah`,`jumlah_desa`,`jumlah_kelurahan`,`jumlah_desa_dan_kelurahan`,`jumlah_penduduk`,`jumlah_rumah_tangga`,`rata_rata_jiwa_rumah_tangga`,`kepadatan_penduduk`,`jumlah_angka_kelahiran_hidup`,`jumlah_angka_kelahiran_mati`,`jumlah_angka_kelahiran_hidup_dan_mati`,`jumlah_kematian_bayi`,`jumlah_kematian_neonatal`,`jumlah_kematian_anak_balita`,`jumlah_kematian_ibu_hamil`,`jumlah_kematian_ibu_bersalin`,`jumlah_kematian_ibu_nifas`,`jumlah_kematian_ibu`,`jumlah_kasus_baru_tb_bta_plus`,`jumlah_seluruh_kasus_tb`,`kasus_tb_anak`,`tb_paru_persentase_terhadap_suspek`,`jumlah_angka_kesembuhan_bta_plus`,`jumlah_angka_pengobatan_lengkap_bta_plus`,`angka_keberhasilan_pengobatan_succes_rate_bta_plus`,`jumlah_kematian_selama_pengobatan`,`jumlah_balita`,`jumlah_pneumonia_balita_ditemukan_dan_ditangani`,`jumlah_pendonor_darah`,`jumlah_donor_darah_positif_hiv`,`jumlah_perkiraan_kasus_diare`,`jumlah_diare_ditangani`,`jumlah_kasus_baru_kusta_pb_dan_mb`,`jumlah_kasus_tercatat_kusta_pb_dan_mb`,`jumlah_penderita_kusta_rft_pb`,`jumlah_penderita_kusta_rft_mb`,`jumlah_kasus_afp_rate`,`jumlah_kasus_difteri`,`jumlah_kasus_difteri_meninggal`,`jumlah_kasus_pertusis`,`jumlah_kasus_pertusis_meninggal`,`jumlah_kasus_tetanus_nonneoratorum`,`jumlah_kasus_tetanus_nonneoratum_meninggal`,`jumlah_kasus_tetanus_neoratum`,`jumlah_kasus_tetanus_neoratum_meninggal`,`jumlah_kasus_polio`,`jumlah_kasus_campak`,`jumlah_kasus_campak_meninggal`,`jumlah_kasus_hepatitis_b`,`jumlah_kasus_dbd`,`jumlah_kasus_dbd_meninggal`,`dbd_cfr`,`jumlah_sediaan_darah_diperiksa_malaria`,`jumlah_kasus_positif_malaria`,`jumlah_kasus_malaria_meninggal`,`jumlah_dilakukan_pengukuran_darah`,`jumlah_dilakukan_pemeriksaan_obesitas`,`jumlah_klb_di_desa_atau_kelurahan`,`jumlah_ibu_hamil_k1`,`jumlah_ibu_hamil_k2`,`jumlah_ibu_bersalin_atau_nifas`,`jumlah_ibu_bersalin_ditolong_nakes`,`jumlah_ibu_bersalin_mendapatkan_yankes_nifas`,`jumlah_ibu_bersalin_mendapatkan_vit_a`,`jumlah_imunisasi_tetanus_ibu_hamil_tt1`,`jumlah_imunisasi_tetanus_ibu_hamil_tt2`,`jumlah_imunisasi_tetanus_ibu_hamil_tt3`,`jumlah_imunisasi_tetanus_ibu_hamil_tt4`,`jumlah_imunisasi_tetanus_ibu_hamil_tt5`,`jumlah_ibu_hamil_mendapat_fe_3`,`jumlah_penanganank_komplikasi_kebidanan`,`jumlah_penanganan_komplikasi_neonatal`,`jumlah_peserta_kb_baru_mkjp_non_mkjp`,`jumlah_kb_aktif`,`jumlah_bayi_baru_lahir_di_timbang`,`jumlah_berat_badan_bayi_lahir_rendah`,`jumlah_kunjungan_neonatus_kn1`,`jumlah_kunjungan_neonatus_3_kn_lengkap`,`jumlah_bayi`,`jumlah_bayi_yang_diberi_asi_eksklusif`,`jumlah_pelayanan_kesehatan_bayi`,`jumlah_desa_atau_kelurahan_ucl`,`jumlah_bayi_imunisasi_bcg`,`jumlah_bayi_munisasi_polio4`,`jumlah_bayi_imunisasi_campak`,`jumlah_bayi_imunisasi_dasar_lengkap`,`jumlah_bayi_mendapat_vit_a`,`jumlah_anak_balita_mendapat_vit_a`,`jumlah_balita_mendapat_vit_a`,`jumlah_baduta_ditimbang`,`jumlah_baduta_berat_badan_di_bawah_garis_merah`,`jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan`,`jumlah_balita_ditimbang_d`,`jumlah_balita_gizi_buruk_di_temukan`,`jumlah_balita_gizi_buruk_mendapat_perawatan`,`jumlah_murid_sd_dan_setingkat`,`jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat`,`jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap`,`jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap`,`pelayanan_gigi_dan_mulut_rasio_tumpatan`,`jumlah_murid_sdmi_melakukan_sikat_gigi_massal`,`jumlah_murid_sdmi_diperiksa_ukgs`,`jumlah_murid_sdmi_perlu_perawatan_ukgs`,`jumlah_usia_60_plus`,`jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan`,`jumlah_rumah_tangga_dipantau`,`persentase_rumah_tangga_dipantau`,`jumlah_rumah_tangga_berphbs`,`persentase_rumah_tangga_berphbs`,`jumlah_seluruh_rumah`,`jumlah_rumah_belum_memenuhi_syarat`,`jumlah_rumah_dibina`,`jumlah_rumah_dibina_memenuhi_syarat`,`jumlah_rumah_memenuhi_syarat_rumah_sehat`,`persentase_rumah_memenuhi_syarat_rumah_sehat`,`jumlah_penyelenggara_air_minum_memenuhi_syarat`,`jumlah_penduduk_dengan_akses_air_minum_layak`,`jumlah_penduduk_yang_memiliki_akses_sanitasi_layak`,`jumlah_desa_stbm`,`jumlah_tempat_umum_memenuhi_syarat_kesehatan`,`jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi`,`jumlah_tpm_yang_tidak_memenuhi_syarat`,`jumlah_tpm_yang_memenuhi_syarat_diuji_petik`,`jumlah_tpm_dibina`,`jumlah_strata_posyandu`,`jumlah_posyandu_aktif`,`persentase_posyandu_aktif`,`jumlah_ukbm_poskesdas`,`jumlah_ukbm_polindes`,`jumlah_ukbm_posbindu`,`jumlah_ukbm_posmaldes`,`jumlah_ukbm_pos_tb_desa`,`jumlah_kelurahan_per_desa_siaga`,`persentasse_kelurahan_per_desa_siaga`) VALUES ('$id','$tahun','$provinsi','$kota','$luas_wilayah','$jumlah_desa','$jumlah_kelurahan','$jumlah_desa_dan_kelurahan','$jumlah_penduduk','$jumlah_rumah_tangga','$rata_rata_jiwa_rumah_tangga','$kepadatan_penduduk','$jumlah_angka_kelahiran_hidup','$jumlah_angka_kelahiran_mati','$jumlah_angka_kelahiran_hidup_dan_mati','$jumlah_kematian_bayi','$jumlah_kematian_neonatal','$jumlah_kematian_anak_balita','$jumlah_kematian_ibu_hamil','$jumlah_kematian_ibu_bersalin','$jumlah_kematian_ibu_nifas','$jumlah_kematian_ibu','$jumlah_kasus_baru_tb_bta_plus','$jumlah_seluruh_kasus_tb','$kasus_tb_anak','$tb_paru_persentase_terhadap_suspek','$jumlah_angka_kesembuhan_bta_plus','$jumlah_angka_pengobatan_lengkap_bta_plus','$angka_keberhasilan_pengobatan_succes_rate_bta_plus','$jumlah_kematian_selama_pengobatan','$jumlah_balita','$jumlah_pneumonia_balita_ditemukan_dan_ditangani','$jumlah_pendonor_darah','$jumlah_donor_darah_positif_hiv','$jumlah_perkiraan_kasus_diare','$jumlah_diare_ditangani','$jumlah_kasus_baru_kusta_pb_dan_mb','$jumlah_kasus_tercatat_kusta_pb_dan_mb','$jumlah_penderita_kusta_rft_pb','$jumlah_penderita_kusta_rft_mb','$jumlah_kasus_afp_rate','$jumlah_kasus_difteri','$jumlah_kasus_difteri_meninggal','$jumlah_kasus_pertusis','$jumlah_kasus_pertusis_meninggal','$jumlah_kasus_tetanus_nonneoratorum','$jumlah_kasus_tetanus_nonneoratum_meninggal','$jumlah_kasus_tetanus_neoratum','$jumlah_kasus_tetanus_neoratum_meninggal','$jumlah_kasus_polio','$jumlah_kasus_campak','$jumlah_kasus_campak_meninggal','$jumlah_kasus_hepatitis_b','$jumlah_kasus_dbd','$jumlah_kasus_dbd_meninggal','$dbd_cfr','$jumlah_sediaan_darah_diperiksa_malaria','$jumlah_kasus_positif_malaria','$jumlah_kasus_malaria_meninggal','$jumlah_dilakukan_pengukuran_darah','$jumlah_dilakukan_pemeriksaan_obesitas','$jumlah_klb_di_desa_atau_kelurahan','$jumlah_ibu_hamil_k1','$jumlah_ibu_hamil_k2','$jumlah_ibu_bersalin_atau_nifas','$jumlah_ibu_bersalin_ditolong_nakes','$jumlah_ibu_bersalin_mendapatkan_yankes_nifas','$jumlah_ibu_bersalin_mendapatkan_vit_a','$jumlah_imunisasi_tetanus_ibu_hamil_tt1','$jumlah_imunisasi_tetanus_ibu_hamil_tt2','$jumlah_imunisasi_tetanus_ibu_hamil_tt3','$jumlah_imunisasi_tetanus_ibu_hamil_tt4','$jumlah_imunisasi_tetanus_ibu_hamil_tt5','$jumlah_ibu_hamil_mendapat_fe_3','$jumlah_penanganank_komplikasi_kebidanan','$jumlah_penanganan_komplikasi_neonatal','$jumlah_peserta_kb_baru_mkjp_non_mkjp','$jumlah_kb_aktif','$jumlah_bayi_baru_lahir_di_timbang','$jumlah_berat_badan_bayi_lahir_rendah','$jumlah_kunjungan_neonatus_kn1','$jumlah_kunjungan_neonatus_3_kn_lengkap','$jumlah_bayi','$jumlah_bayi_yang_diberi_asi_eksklusif','$jumlah_pelayanan_kesehatan_bayi','$jumlah_desa_atau_kelurahan_ucl','$jumlah_bayi_imunisasi_bcg','$jumlah_bayi_munisasi_polio4','$jumlah_bayi_imunisasi_campak','$jumlah_bayi_imunisasi_dasar_lengkap','$jumlah_bayi_mendapat_vit_a','$jumlah_anak_balita_mendapat_vit_a','$jumlah_balita_mendapat_vit_a','$jumlah_baduta_ditimbang','$jumlah_baduta_berat_badan_di_bawah_garis_merah','$jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan','$jumlah_balita_ditimbang_d','$jumlah_balita_gizi_buruk_di_temukan','$jumlah_balita_gizi_buruk_mendapat_perawatan','$jumlah_murid_sd_dan_setingkat','$jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat','$jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap','$jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap','$pelayanan_gigi_dan_mulut_rasio_tumpatan','$jumlah_murid_sdmi_melakukan_sikat_gigi_massal','$jumlah_murid_sdmi_diperiksa_ukgs','$jumlah_murid_sdmi_perlu_perawatan_ukgs','$jumlah_usia_60_plus','$jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan','$jumlah_rumah_tangga_dipantau','$persentase_rumah_tangga_dipantau','$jumlah_rumah_tangga_berphbs','$persentase_rumah_tangga_berphbs','$jumlah_seluruh_rumah','$jumlah_rumah_belum_memenuhi_syarat','$jumlah_rumah_dibina','$jumlah_rumah_dibina_memenuhi_syarat','$jumlah_rumah_memenuhi_syarat_rumah_sehat','$persentase_rumah_memenuhi_syarat_rumah_sehat','$jumlah_penyelenggara_air_minum_memenuhi_syarat','$jumlah_penduduk_dengan_akses_air_minum_layak','$jumlah_penduduk_yang_memiliki_akses_sanitasi_layak','$jumlah_desa_stbm','$jumlah_tempat_umum_memenuhi_syarat_kesehatan','$jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi','$jumlah_tpm_yang_tidak_memenuhi_syarat','$jumlah_tpm_yang_memenuhi_syarat_diuji_petik','$jumlah_tpm_dibina','$jumlah_strata_posyandu','$jumlah_posyandu_aktif','$persentase_posyandu_aktif','$jumlah_ukbm_poskesdas','$jumlah_ukbm_polindes','$jumlah_ukbm_posbindu','$jumlah_ukbm_posmaldes','$jumlah_ukbm_pos_tb_desa','$jumlah_kelurahan_per_desa_siaga','$persentasse_kelurahan_per_desa_siaga')");
	break;
	case 'Update':
			$query=$mysqli->query("UPDATE profilkesehatan set `id` = '$id',`tahun` = '$tahun',`provinsi` = '$provinsi',`kota` = '$kota',`luas_wilayah` = '$luas_wilayah',`jumlah_desa` = '$jumlah_desa',`jumlah_kelurahan` = '$jumlah_kelurahan',`jumlah_desa_dan_kelurahan` = '$jumlah_desa_dan_kelurahan',`jumlah_penduduk` = '$jumlah_penduduk',`jumlah_rumah_tangga` = '$jumlah_rumah_tangga',`rata_rata_jiwa_rumah_tangga` = '$rata_rata_jiwa_rumah_tangga',`kepadatan_penduduk` = '$kepadatan_penduduk',`jumlah_angka_kelahiran_hidup` = '$jumlah_angka_kelahiran_hidup',`jumlah_angka_kelahiran_mati` = '$jumlah_angka_kelahiran_mati',`jumlah_angka_kelahiran_hidup_dan_mati` = '$jumlah_angka_kelahiran_hidup_dan_mati',`jumlah_kematian_bayi` = '$jumlah_kematian_bayi',`jumlah_kematian_neonatal` = '$jumlah_kematian_neonatal',`jumlah_kematian_anak_balita` = '$jumlah_kematian_anak_balita',`jumlah_kematian_ibu_hamil` = '$jumlah_kematian_ibu_hamil',`jumlah_kematian_ibu_bersalin` = '$jumlah_kematian_ibu_bersalin',`jumlah_kematian_ibu_nifas` = '$jumlah_kematian_ibu_nifas',`jumlah_kematian_ibu` = '$jumlah_kematian_ibu',`jumlah_kasus_baru_tb_bta_plus` = '$jumlah_kasus_baru_tb_bta_plus',`jumlah_seluruh_kasus_tb` = '$jumlah_seluruh_kasus_tb',`kasus_tb_anak` = '$kasus_tb_anak',`tb_paru_persentase_terhadap_suspek` = '$tb_paru_persentase_terhadap_suspek',`jumlah_angka_kesembuhan_bta_plus` = '$jumlah_angka_kesembuhan_bta_plus',`jumlah_angka_pengobatan_lengkap_bta_plus` = '$jumlah_angka_pengobatan_lengkap_bta_plus',`angka_keberhasilan_pengobatan_succes_rate_bta_plus` = '$angka_keberhasilan_pengobatan_succes_rate_bta_plus',`jumlah_kematian_selama_pengobatan` = '$jumlah_kematian_selama_pengobatan',`jumlah_balita` = '$jumlah_balita',`jumlah_pneumonia_balita_ditemukan_dan_ditangani` = '$jumlah_pneumonia_balita_ditemukan_dan_ditangani',`jumlah_pendonor_darah` = '$jumlah_pendonor_darah',`jumlah_donor_darah_positif_hiv` = '$jumlah_donor_darah_positif_hiv',`jumlah_perkiraan_kasus_diare` = '$jumlah_perkiraan_kasus_diare',`jumlah_diare_ditangani` = '$jumlah_diare_ditangani',`jumlah_kasus_baru_kusta_pb_dan_mb` = '$jumlah_kasus_baru_kusta_pb_dan_mb',`jumlah_kasus_tercatat_kusta_pb_dan_mb` = '$jumlah_kasus_tercatat_kusta_pb_dan_mb',`jumlah_penderita_kusta_rft_pb` = '$jumlah_penderita_kusta_rft_pb',`jumlah_penderita_kusta_rft_mb` = '$jumlah_penderita_kusta_rft_mb',`jumlah_kasus_afp_rate` = '$jumlah_kasus_afp_rate',`jumlah_kasus_difteri` = '$jumlah_kasus_difteri',`jumlah_kasus_difteri_meninggal` = '$jumlah_kasus_difteri_meninggal',`jumlah_kasus_pertusis` = '$jumlah_kasus_pertusis',`jumlah_kasus_pertusis_meninggal` = '$jumlah_kasus_pertusis_meninggal',`jumlah_kasus_tetanus_nonneoratorum` = '$jumlah_kasus_tetanus_nonneoratorum',`jumlah_kasus_tetanus_nonneoratum_meninggal` = '$jumlah_kasus_tetanus_nonneoratum_meninggal',`jumlah_kasus_tetanus_neoratum` = '$jumlah_kasus_tetanus_neoratum',`jumlah_kasus_tetanus_neoratum_meninggal` = '$jumlah_kasus_tetanus_neoratum_meninggal',`jumlah_kasus_polio` = '$jumlah_kasus_polio',`jumlah_kasus_campak` = '$jumlah_kasus_campak',`jumlah_kasus_campak_meninggal` = '$jumlah_kasus_campak_meninggal',`jumlah_kasus_hepatitis_b` = '$jumlah_kasus_hepatitis_b',`jumlah_kasus_dbd` = '$jumlah_kasus_dbd',`jumlah_kasus_dbd_meninggal` = '$jumlah_kasus_dbd_meninggal',`dbd_cfr` = '$dbd_cfr',`jumlah_sediaan_darah_diperiksa_malaria` = '$jumlah_sediaan_darah_diperiksa_malaria',`jumlah_kasus_positif_malaria` = '$jumlah_kasus_positif_malaria',`jumlah_kasus_malaria_meninggal` = '$jumlah_kasus_malaria_meninggal',`jumlah_dilakukan_pengukuran_darah` = '$jumlah_dilakukan_pengukuran_darah',`jumlah_dilakukan_pemeriksaan_obesitas` = '$jumlah_dilakukan_pemeriksaan_obesitas',`jumlah_klb_di_desa_atau_kelurahan` = '$jumlah_klb_di_desa_atau_kelurahan',`jumlah_ibu_hamil_k1` = '$jumlah_ibu_hamil_k1',`jumlah_ibu_hamil_k2` = '$jumlah_ibu_hamil_k2',`jumlah_ibu_bersalin_atau_nifas` = '$jumlah_ibu_bersalin_atau_nifas',`jumlah_ibu_bersalin_ditolong_nakes` = '$jumlah_ibu_bersalin_ditolong_nakes',`jumlah_ibu_bersalin_mendapatkan_yankes_nifas` = '$jumlah_ibu_bersalin_mendapatkan_yankes_nifas',`jumlah_ibu_bersalin_mendapatkan_vit_a` = '$jumlah_ibu_bersalin_mendapatkan_vit_a',`jumlah_imunisasi_tetanus_ibu_hamil_tt1` = '$jumlah_imunisasi_tetanus_ibu_hamil_tt1',`jumlah_imunisasi_tetanus_ibu_hamil_tt2` = '$jumlah_imunisasi_tetanus_ibu_hamil_tt2',`jumlah_imunisasi_tetanus_ibu_hamil_tt3` = '$jumlah_imunisasi_tetanus_ibu_hamil_tt3',`jumlah_imunisasi_tetanus_ibu_hamil_tt4` = '$jumlah_imunisasi_tetanus_ibu_hamil_tt4',`jumlah_imunisasi_tetanus_ibu_hamil_tt5` = '$jumlah_imunisasi_tetanus_ibu_hamil_tt5',`jumlah_ibu_hamil_mendapat_fe_3` = '$jumlah_ibu_hamil_mendapat_fe_3',`jumlah_penanganank_komplikasi_kebidanan` = '$jumlah_penanganank_komplikasi_kebidanan',`jumlah_penanganan_komplikasi_neonatal` = '$jumlah_penanganan_komplikasi_neonatal',`jumlah_peserta_kb_baru_mkjp_non_mkjp` = '$jumlah_peserta_kb_baru_mkjp_non_mkjp',`jumlah_kb_aktif` = '$jumlah_kb_aktif',`jumlah_bayi_baru_lahir_di_timbang` = '$jumlah_bayi_baru_lahir_di_timbang',`jumlah_berat_badan_bayi_lahir_rendah` = '$jumlah_berat_badan_bayi_lahir_rendah',`jumlah_kunjungan_neonatus_kn1` = '$jumlah_kunjungan_neonatus_kn1',`jumlah_kunjungan_neonatus_3_kn_lengkap` = '$jumlah_kunjungan_neonatus_3_kn_lengkap',`jumlah_bayi` = '$jumlah_bayi',`jumlah_bayi_yang_diberi_asi_eksklusif` = '$jumlah_bayi_yang_diberi_asi_eksklusif',`jumlah_pelayanan_kesehatan_bayi` = '$jumlah_pelayanan_kesehatan_bayi',`jumlah_desa_atau_kelurahan_ucl` = '$jumlah_desa_atau_kelurahan_ucl',`jumlah_bayi_imunisasi_bcg` = '$jumlah_bayi_imunisasi_bcg',`jumlah_bayi_munisasi_polio4` = '$jumlah_bayi_munisasi_polio4',`jumlah_bayi_imunisasi_campak` = '$jumlah_bayi_imunisasi_campak',`jumlah_bayi_imunisasi_dasar_lengkap` = '$jumlah_bayi_imunisasi_dasar_lengkap',`jumlah_bayi_mendapat_vit_a` = '$jumlah_bayi_mendapat_vit_a',`jumlah_anak_balita_mendapat_vit_a` = '$jumlah_anak_balita_mendapat_vit_a',`jumlah_balita_mendapat_vit_a` = '$jumlah_balita_mendapat_vit_a',`jumlah_baduta_ditimbang` = '$jumlah_baduta_ditimbang',`jumlah_baduta_berat_badan_di_bawah_garis_merah` = '$jumlah_baduta_berat_badan_di_bawah_garis_merah',`jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan` = '$jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan',`jumlah_balita_ditimbang_d` = '$jumlah_balita_ditimbang_d',`jumlah_balita_gizi_buruk_di_temukan` = '$jumlah_balita_gizi_buruk_di_temukan',`jumlah_balita_gizi_buruk_mendapat_perawatan` = '$jumlah_balita_gizi_buruk_mendapat_perawatan',`jumlah_murid_sd_dan_setingkat` = '$jumlah_murid_sd_dan_setingkat',`jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat` = '$jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat',`jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap` = '$jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap',`jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap` = '$jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap',`pelayanan_gigi_dan_mulut_rasio_tumpatan` = '$pelayanan_gigi_dan_mulut_rasio_tumpatan',`jumlah_murid_sdmi_melakukan_sikat_gigi_massal` = '$jumlah_murid_sdmi_melakukan_sikat_gigi_massal',`jumlah_murid_sdmi_diperiksa_ukgs` = '$jumlah_murid_sdmi_diperiksa_ukgs',`jumlah_murid_sdmi_perlu_perawatan_ukgs` = '$jumlah_murid_sdmi_perlu_perawatan_ukgs',`jumlah_usia_60_plus` = '$jumlah_usia_60_plus',`jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan` = '$jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan',`jumlah_rumah_tangga_dipantau` = '$jumlah_rumah_tangga_dipantau',`persentase_rumah_tangga_dipantau` = '$persentase_rumah_tangga_dipantau',`jumlah_rumah_tangga_berphbs` = '$jumlah_rumah_tangga_berphbs',`persentase_rumah_tangga_berphbs` = '$persentase_rumah_tangga_berphbs',`jumlah_seluruh_rumah` = '$jumlah_seluruh_rumah',`jumlah_rumah_belum_memenuhi_syarat` = '$jumlah_rumah_belum_memenuhi_syarat',`jumlah_rumah_dibina` = '$jumlah_rumah_dibina',`jumlah_rumah_dibina_memenuhi_syarat` = '$jumlah_rumah_dibina_memenuhi_syarat',`jumlah_rumah_memenuhi_syarat_rumah_sehat` = '$jumlah_rumah_memenuhi_syarat_rumah_sehat',`persentase_rumah_memenuhi_syarat_rumah_sehat` = '$persentase_rumah_memenuhi_syarat_rumah_sehat',`jumlah_penyelenggara_air_minum_memenuhi_syarat` = '$jumlah_penyelenggara_air_minum_memenuhi_syarat',`jumlah_penduduk_dengan_akses_air_minum_layak` = '$jumlah_penduduk_dengan_akses_air_minum_layak',`jumlah_penduduk_yang_memiliki_akses_sanitasi_layak` = '$jumlah_penduduk_yang_memiliki_akses_sanitasi_layak',`jumlah_desa_stbm` = '$jumlah_desa_stbm',`jumlah_tempat_umum_memenuhi_syarat_kesehatan` = '$jumlah_tempat_umum_memenuhi_syarat_kesehatan',`jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi` = '$jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi',`jumlah_tpm_yang_tidak_memenuhi_syarat` = '$jumlah_tpm_yang_tidak_memenuhi_syarat',`jumlah_tpm_yang_memenuhi_syarat_diuji_petik` = '$jumlah_tpm_yang_memenuhi_syarat_diuji_petik',`jumlah_tpm_dibina` = '$jumlah_tpm_dibina',`jumlah_strata_posyandu` = '$jumlah_strata_posyandu',`jumlah_posyandu_aktif` = '$jumlah_posyandu_aktif',`persentase_posyandu_aktif` = '$persentase_posyandu_aktif',`jumlah_ukbm_poskesdas` = '$jumlah_ukbm_poskesdas',`jumlah_ukbm_polindes` = '$jumlah_ukbm_polindes',`jumlah_ukbm_posbindu` = '$jumlah_ukbm_posbindu',`jumlah_ukbm_posmaldes` = '$jumlah_ukbm_posmaldes',`jumlah_ukbm_pos_tb_desa` = '$jumlah_ukbm_pos_tb_desa',`jumlah_kelurahan_per_desa_siaga` = '$jumlah_kelurahan_per_desa_siaga',`persentasse_kelurahan_per_desa_siaga` = '$persentasse_kelurahan_per_desa_siaga' WHERE id='$id'");
	break;
	}
 echo "<script>document.location='?page=profilkesehatan';</script>";
    }
}else {// end aksi?>
	
							<a href="?page=profilkesehatan&aksi=tambah" class="btn btn-primary "><i class="fa fa-plus"></i> <span class="hidden-480">
								Tambah Data </span></a> 
<br><br>
                           
								
							
							<table class="table table-bordered table-striped table-condensed flip-content" id="mytable">
							<thead class="flip-content bg-blue">
                <tr>
                    <th width="8px">No</th>
		    <th>Tahun</th>
		    <th>Provinsi</th>
		    <th>Kota</th>
		    <th>Luas Wilayah</th>
		    <th>Jumlah Desa</th>
		    <th>Jumlah Kelurahan</th>
		    <th>Jumlah Desa Dan Kelurahan</th>
		    <th>Jumlah Penduduk</th>
		    <th>Jumlah Rumah Tangga</th>
		    <th>Rata Rata Jiwa Rumah Tangga</th>
		    <th>Kepadatan Penduduk</th>
		    <th>Jumlah Angka Kelahiran Hidup</th>
		    <th>Jumlah Angka Kelahiran Mati</th>
		    <th>Jumlah Angka Kelahiran Hidup Dan Mati</th>
		    <th>Jumlah Kematian Bayi</th>
		    <th>Jumlah Kematian Neonatal</th>
		    <th>Jumlah Kematian Anak Balita</th>
		    <th>Jumlah Kematian Ibu Hamil</th>
		    <th>Jumlah Kematian Ibu Bersalin</th>
		    <th>Jumlah Kematian Ibu Nifas</th>
		    <th>Jumlah Kematian Ibu</th>
		    <th>Jumlah Kasus Baru Tb Bta Plus</th>
		    <th>Jumlah Seluruh Kasus Tb</th>
		    <th>Kasus Tb Anak</th>
		    <th>Tb Paru Persentase Terhadap Suspek</th>
		    <th>Jumlah Angka Kesembuhan Bta Plus</th>
		    <th>Jumlah Angka Pengobatan Lengkap Bta Plus</th>
		    <th>Angka Keberhasilan Pengobatan Succes Rate Bta Plus</th>
		    <th>Jumlah Kematian Selama Pengobatan</th>
		    <th>Jumlah Balita</th>
		    <th>Jumlah Pneumonia Balita Ditemukan Dan Ditangani</th>
		    <th>Jumlah Pendonor Darah</th>
		    <th>Jumlah Donor Darah Positif Hiv</th>
		    <th>Jumlah Perkiraan Kasus Diare</th>
		    <th>Jumlah Diare Ditangani</th>
		    <th>Jumlah Kasus Baru Kusta Pb Dan Mb</th>
		    <th>Jumlah Kasus Tercatat Kusta Pb Dan Mb</th>
		    <th>Jumlah Penderita Kusta Rft Pb</th>
		    <th>Jumlah Penderita Kusta Rft Mb</th>
		    <th>Jumlah Kasus Afp Rate</th>
		    <th>Jumlah Kasus Difteri</th>
		    <th>Jumlah Kasus Difteri Meninggal</th>
		    <th>Jumlah Kasus Pertusis</th>
		    <th>Jumlah Kasus Pertusis Meninggal</th>
		    <th>Jumlah Kasus Tetanus Nonneoratorum</th>
		    <th>Jumlah Kasus Tetanus Nonneoratum Meninggal</th>
		    <th>Jumlah Kasus Tetanus Neoratum</th>
		    <th>Jumlah Kasus Tetanus Neoratum Meninggal</th>
		    <th>Jumlah Kasus Polio</th>
		    <th>Jumlah Kasus Campak</th>
		    <th>Jumlah Kasus Campak Meninggal</th>
		    <th>Jumlah Kasus Hepatitis B</th>
		    <th>Jumlah Kasus Dbd</th>
		    <th>Jumlah Kasus Dbd Meninggal</th>
		    <th>Dbd Cfr</th>
		    <th>Jumlah Sediaan Darah Diperiksa Malaria</th>
		    <th>Jumlah Kasus Positif Malaria</th>
		    <th>Jumlah Kasus Malaria Meninggal</th>
		    <th>Jumlah Dilakukan Pengukuran Darah</th>
		    <th>Jumlah Dilakukan Pemeriksaan Obesitas</th>
		    <th>Jumlah Klb Di Desa Atau Kelurahan</th>
		    <th>Jumlah Ibu Hamil K1</th>
		    <th>Jumlah Ibu Hamil K2</th>
		    <th>Jumlah Ibu Bersalin Atau Nifas</th>
		    <th>Jumlah Ibu Bersalin Ditolong Nakes</th>
		    <th>Jumlah Ibu Bersalin Mendapatkan Yankes Nifas</th>
		    <th>Jumlah Ibu Bersalin Mendapatkan Vit A</th>
		    <th>Jumlah Imunisasi Tetanus Ibu Hamil Tt1</th>
		    <th>Jumlah Imunisasi Tetanus Ibu Hamil Tt2</th>
		    <th>Jumlah Imunisasi Tetanus Ibu Hamil Tt3</th>
		    <th>Jumlah Imunisasi Tetanus Ibu Hamil Tt4</th>
		    <th>Jumlah Imunisasi Tetanus Ibu Hamil Tt5</th>
		    <th>Jumlah Ibu Hamil Mendapat Fe 3</th>
		    <th>Jumlah Penanganank Komplikasi Kebidanan</th>
		    <th>Jumlah Penanganan Komplikasi Neonatal</th>
		    <th>Jumlah Peserta Kb Baru Mkjp Non Mkjp</th>
		    <th>Jumlah Kb Aktif</th>
		    <th>Jumlah Bayi Baru Lahir Di Timbang</th>
		    <th>Jumlah Berat Badan Bayi Lahir Rendah</th>
		    <th>Jumlah Kunjungan Neonatus Kn1</th>
		    <th>Jumlah Kunjungan Neonatus 3 Kn Lengkap</th>
		    <th>Jumlah Bayi</th>
		    <th>Jumlah Bayi Yang Diberi Asi Eksklusif</th>
		    <th>Jumlah Pelayanan Kesehatan Bayi</th>
		    <th>Jumlah Desa Atau Kelurahan Ucl</th>
		    <th>Jumlah Bayi Imunisasi Bcg</th>
		    <th>Jumlah Bayi Munisasi Polio4</th>
		    <th>Jumlah Bayi Imunisasi Campak</th>
		    <th>Jumlah Bayi Imunisasi Dasar Lengkap</th>
		    <th>Jumlah Bayi Mendapat Vit A</th>
		    <th>Jumlah Anak Balita Mendapat Vit A</th>
		    <th>Jumlah Balita Mendapat Vit A</th>
		    <th>Jumlah Baduta Ditimbang</th>
		    <th>Jumlah Baduta Berat Badan Di Bawah Garis Merah</th>
		    <th>Jumlah Anak Balita 1259 Mendapat Pelayanan Kesehatan</th>
		    <th>Jumlah Balita Ditimbang D</th>
		    <th>Jumlah Balita Gizi Buruk Di Temukan</th>
		    <th>Jumlah Balita Gizi Buruk Mendapat Perawatan</th>
		    <th>Jumlah Murid Sd Dan Setingkat</th>
		    <th>Jumlah Mendapat Pelayanan Kesehatan Siswa Sd Dan Setingkat</th>
		    <th>Jumlah Pelayanan Gigi Dan Mulut Tumpatan Gigi Tetap</th>
		    <th>Jumlah Pelayanan Gigi Dan Mulut Pencabutan Gigi Tetap</th>
		    <th>Pelayanan Gigi Dan Mulut Rasio Tumpatan</th>
		    <th>Jumlah Murid Sdmi Melakukan Sikat Gigi Massal</th>
		    <th>Jumlah Murid Sdmi Diperiksa Ukgs</th>
		    <th>Jumlah Murid Sdmi Perlu Perawatan Ukgs</th>
		    <th>Jumlah Usia 60 Plus</th>
		    <th>Jumlah Usia 60 Plus Mendapatkan Pelayanan Kesehatan</th>
		    <th>Jumlah Rumah Tangga Dipantau</th>
		    <th>Persentase Rumah Tangga Dipantau</th>
		    <th>Jumlah Rumah Tangga Berphbs</th>
		    <th>Persentase Rumah Tangga Berphbs</th>
		    <th>Jumlah Seluruh Rumah</th>
		    <th>Jumlah Rumah Belum Memenuhi Syarat</th>
		    <th>Jumlah Rumah Dibina</th>
		    <th>Jumlah Rumah Dibina Memenuhi Syarat</th>
		    <th>Jumlah Rumah Memenuhi Syarat Rumah Sehat</th>
		    <th>Persentase Rumah Memenuhi Syarat Rumah Sehat</th>
		    <th>Jumlah Penyelenggara Air Minum Memenuhi Syarat</th>
		    <th>Jumlah Penduduk Dengan Akses Air Minum Layak</th>
		    <th>Jumlah Penduduk Yang Memiliki Akses Sanitasi Layak</th>
		    <th>Jumlah Desa Stbm</th>
		    <th>Jumlah Tempat Umum Memenuhi Syarat Kesehatan</th>
		    <th>Jumlah Tpm Yang Memenuhi Syarat Higenie Sanitasi</th>
		    <th>Jumlah Tpm Yang Tidak Memenuhi Syarat</th>
		    <th>Jumlah Tpm Yang Memenuhi Syarat Diuji Petik</th>
		    <th>Jumlah Tpm Dibina</th>
		    <th>Jumlah Strata Posyandu</th>
		    <th>Jumlah Posyandu Aktif</th>
		    <th>Persentase Posyandu Aktif</th>
		    <th>Jumlah Ukbm Poskesdas</th>
		    <th>Jumlah Ukbm Polindes</th>
		    <th>Jumlah Ukbm Posbindu</th>
		    <th>Jumlah Ukbm Posmaldes</th>
		    <th>Jumlah Ukbm Pos Tb Desa</th>
		    <th>Jumlah Kelurahan Per Desa Siaga</th>
		    <th>Persentasse Kelurahan Per Desa Siaga</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
			 $query="SELECT * FROM profilkesehatan order by `id` asc ";
		$result= $mysqli->query($query);
		while($profilkesehatan=$result->fetch_assoc())
		 {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $profilkesehatan["tahun"]; ?></td>
		    <td><?php echo $profilkesehatan["provinsi"]; ?></td>
		    <td><?php echo $profilkesehatan["kota"]; ?></td>
		    <td><?php echo $profilkesehatan["luas_wilayah"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_desa"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kelurahan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_desa_dan_kelurahan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_penduduk"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_rumah_tangga"]; ?></td>
		    <td><?php echo $profilkesehatan["rata_rata_jiwa_rumah_tangga"]; ?></td>
		    <td><?php echo $profilkesehatan["kepadatan_penduduk"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_angka_kelahiran_hidup"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_angka_kelahiran_mati"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_angka_kelahiran_hidup_dan_mati"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kematian_bayi"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kematian_neonatal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kematian_anak_balita"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kematian_ibu_hamil"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kematian_ibu_bersalin"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kematian_ibu_nifas"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kematian_ibu"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_baru_tb_bta_plus"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_seluruh_kasus_tb"]; ?></td>
		    <td><?php echo $profilkesehatan["kasus_tb_anak"]; ?></td>
		    <td><?php echo $profilkesehatan["tb_paru_persentase_terhadap_suspek"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_angka_kesembuhan_bta_plus"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_angka_pengobatan_lengkap_bta_plus"]; ?></td>
		    <td><?php echo $profilkesehatan["angka_keberhasilan_pengobatan_succes_rate_bta_plus"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kematian_selama_pengobatan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_balita"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_pneumonia_balita_ditemukan_dan_ditangani"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_pendonor_darah"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_donor_darah_positif_hiv"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_perkiraan_kasus_diare"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_diare_ditangani"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_baru_kusta_pb_dan_mb"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_tercatat_kusta_pb_dan_mb"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_penderita_kusta_rft_pb"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_penderita_kusta_rft_mb"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_afp_rate"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_difteri"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_difteri_meninggal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_pertusis"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_pertusis_meninggal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_tetanus_nonneoratorum"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_tetanus_nonneoratum_meninggal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_tetanus_neoratum"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_tetanus_neoratum_meninggal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_polio"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_campak"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_campak_meninggal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_hepatitis_b"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_dbd"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_dbd_meninggal"]; ?></td>
		    <td><?php echo $profilkesehatan["dbd_cfr"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_sediaan_darah_diperiksa_malaria"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_positif_malaria"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kasus_malaria_meninggal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_dilakukan_pengukuran_darah"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_dilakukan_pemeriksaan_obesitas"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_klb_di_desa_atau_kelurahan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ibu_hamil_k1"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ibu_hamil_k2"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ibu_bersalin_atau_nifas"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ibu_bersalin_ditolong_nakes"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ibu_bersalin_mendapatkan_yankes_nifas"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ibu_bersalin_mendapatkan_vit_a"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_imunisasi_tetanus_ibu_hamil_tt1"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_imunisasi_tetanus_ibu_hamil_tt2"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_imunisasi_tetanus_ibu_hamil_tt3"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_imunisasi_tetanus_ibu_hamil_tt4"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_imunisasi_tetanus_ibu_hamil_tt5"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ibu_hamil_mendapat_fe_3"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_penanganank_komplikasi_kebidanan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_penanganan_komplikasi_neonatal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_peserta_kb_baru_mkjp_non_mkjp"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kb_aktif"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_bayi_baru_lahir_di_timbang"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_berat_badan_bayi_lahir_rendah"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kunjungan_neonatus_kn1"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kunjungan_neonatus_3_kn_lengkap"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_bayi"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_bayi_yang_diberi_asi_eksklusif"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_pelayanan_kesehatan_bayi"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_desa_atau_kelurahan_ucl"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_bayi_imunisasi_bcg"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_bayi_munisasi_polio4"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_bayi_imunisasi_campak"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_bayi_imunisasi_dasar_lengkap"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_bayi_mendapat_vit_a"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_anak_balita_mendapat_vit_a"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_balita_mendapat_vit_a"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_baduta_ditimbang"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_baduta_berat_badan_di_bawah_garis_merah"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_anak_balita_1259_mendapat_pelayanan_kesehatan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_balita_ditimbang_d"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_balita_gizi_buruk_di_temukan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_balita_gizi_buruk_mendapat_perawatan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_murid_sd_dan_setingkat"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_mendapat_pelayanan_kesehatan_siswa_sd_dan_setingkat"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_pelayanan_gigi_dan_mulut_tumpatan_gigi_tetap"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_pelayanan_gigi_dan_mulut_pencabutan_gigi_tetap"]; ?></td>
		    <td><?php echo $profilkesehatan["pelayanan_gigi_dan_mulut_rasio_tumpatan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_murid_sdmi_melakukan_sikat_gigi_massal"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_murid_sdmi_diperiksa_ukgs"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_murid_sdmi_perlu_perawatan_ukgs"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_usia_60_plus"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_usia_60_plus_mendapatkan_pelayanan_kesehatan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_rumah_tangga_dipantau"]; ?></td>
		    <td><?php echo $profilkesehatan["persentase_rumah_tangga_dipantau"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_rumah_tangga_berphbs"]; ?></td>
		    <td><?php echo $profilkesehatan["persentase_rumah_tangga_berphbs"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_seluruh_rumah"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_rumah_belum_memenuhi_syarat"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_rumah_dibina"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_rumah_dibina_memenuhi_syarat"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_rumah_memenuhi_syarat_rumah_sehat"]; ?></td>
		    <td><?php echo $profilkesehatan["persentase_rumah_memenuhi_syarat_rumah_sehat"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_penyelenggara_air_minum_memenuhi_syarat"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_penduduk_dengan_akses_air_minum_layak"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_penduduk_yang_memiliki_akses_sanitasi_layak"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_desa_stbm"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_tempat_umum_memenuhi_syarat_kesehatan"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_tpm_yang_memenuhi_syarat_higenie_sanitasi"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_tpm_yang_tidak_memenuhi_syarat"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_tpm_yang_memenuhi_syarat_diuji_petik"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_tpm_dibina"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_strata_posyandu"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_posyandu_aktif"]; ?></td>
		    <td><?php echo $profilkesehatan["persentase_posyandu_aktif"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ukbm_poskesdas"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ukbm_polindes"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ukbm_posbindu"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ukbm_posmaldes"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_ukbm_pos_tb_desa"]; ?></td>
		    <td><?php echo $profilkesehatan["jumlah_kelurahan_per_desa_siaga"]; ?></td>
		    <td><?php echo $profilkesehatan["persentasse_kelurahan_per_desa_siaga"]; ?></td>
		    <td style="text-align:center" width="200px">
<a href="?page=profilkesehatan&aksi=detail&id=<?php echo $profilkesehatan["id"];?>" class="btn btn-primary btn-xs purple"><i class="fa fa-search"></i> Detail</a> 
<a href="?page=profilkesehatan&aksi=edit&id=<?php echo $profilkesehatan["id"];?>" class="btn btn-warning btn-xs purple"><i class="fa fa-edit"></i> Edit</a> 
<a href="?page=profilkesehatan&aksi=hapus&id=<?php echo $profilkesehatan["id"];?>" class="btn btn-danger btn-xs purple" onclick="javasciprt: return confirm('Are You Sure ?')"><i class="fa fa-trash-o"></i> Delete</a>
              
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
		

      <?php }?> 
	</div>
        </div>
        </div>
        </div>
        </section> 