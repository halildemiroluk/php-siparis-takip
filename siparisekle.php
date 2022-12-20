<?php include 'header.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Sipariş Ekle</h5>
		</div>
		<div class="card-body">
			<form action="islemler/islem.php" method="POST">
			<div class="form-row">
				<div class="coll-md-6">
					<label>İsim Soyisim</label>
					<input type="text" class="form-control" name="musteri_isim" placeholder="Müşteri İsim">
				</div> 
				<div class="coll-md-6">
					<label>Mail Adresi</label>
					<input type="email" class="form-control" name="musteri_mail" placeholder="Müşteri Mail Adres">
				</div>
			</div>
			<div class="form-row mt-3">
				<div class="coll-md-6">
					<label>Telefon Numarası</label>
					<input type="number" class="form-control" name="musteri_telefon" placeholder="Müşteri Telefon">
				</div>
				<div class="coll-md-6">
					<label>Siprariş Başlığı</label>
					<input type="text" class="form-control" name="sip_baslik" placeholder="Sipariş Başlığı">
				</div>
			</div>
			<div class="form-row mt-3">
			<div class="form-group coll-md-6">
			<label>Sipariş Durumu</label>
			<select required name="sip_durum" class="form-control">
				<option>Yeni Başladı</option>
				<option>Devam Ediyor</option>
				<option>Bitti</option>


			</select>
			</div>
			<div class="form-group coll-md-6">
				<label>Ücret (TL)</label>
					<input type="number" class="form-control" required name="sip_ucret" placeholder="Sipariş Ücreti">
			</div>
			</div>
			<div class="form-row mt-3">
			<div class="form-group col-md-6">
                <label>Teslim Tarihi</label>
                <input type="date" class="form-control" required name="sip_teslim_tarihi" placeholder="Teslim Tarihi">
              </div>

              <div class="form-group col-md-6">
                <label>Aciliyet</label>
                <select required name="sip_aciliyet" class="form-control">
                  <option>Acil</option>
                  <option>Normal</option>
                  <option>Acelesi Yok</option>
                </select>
              </div>
              </div>

              <div class="form-row">
              <div class="form-group col-md-12">
                <textarea class="form-control" required name="sip_detay" id="editor"></textarea>
              </div>
            </div>
             <button type="submit" name="siparisekle" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Kaydet</button>
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