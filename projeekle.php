<?php include 'header.php'; ?>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h3 class="display-4" style="font-size: 3rem;">Proje Ekle</h3>
		</div>
		<div class="card-body">
			<form action="islemler/islem.php" method="POST">
				<div class="form-row">
					<div class="coll-md-6">
						<label>Poje Başlığı</label>
						<input type="text" name="proje_baslik" class="form-control" placeholder="Projenizin Başlığını Girin">
					</div>
					<div class="coll-md-6">
						<label>Bitiş Tarihi</label>
						<input type="date" name="proje_teslim_tarihi" class="form-control">
					</div>
				</div>
				<div class="form-row mt-2">
					<div class="coll-md-6">
						<label>Poje Aciliyeti</label>
						<select name="proje_aciliyet" class="form-control">
							<option value="Acil">Acil</option>
							<option value="Acelesi Yok">Acelesi Yok</option>
							<option value="Yeni Başladı">Normal</option>
						</select>
					</div>
					<div class="coll-md-6">
						<label>Proje Durumu</label>
						<select name="proje_durum" class="form-control">
							<option value="Acil">Yeni Başladı</option>
							<option value="Acelesi Yok">Devam Ediyor</option>
							<option value="Yeni Başladı">Bitti</option>
						</select>
					</div>
				</div>
				<div class="form-row mt-2">
					<div class="coll-md-6">
						<input type="file" name="proje_dosya" id="proje_dosya">
					</div>
				</div>
				<div class="form-row mt-2">
					<label>Proje Detayı</label>
				   <textarea name="proje_detay" class="form-control"></textarea>
				</div>
				<button name="projeekle" type="submit" class="btn btn-primary">Kaydet</button>
			</form>
		</div>
	</div>	
</div>


<?php include 'footer.php'; ?>

<script>
  $(document).ready(function () {
    $("#proje_dosya").fileinput({
      'theme': 'explorer-fas',
      'showUpload': false,
      'showCaption': true,
      showDownload: true,
      allowedFileExtensions: ["jpg", "png", "jpeg","mp4","zip","rar"],
    });
  });
</script>
