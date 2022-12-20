<?php include 'header.php';

if (isset($_POST['sip_id'])) {
  $siparissor=$db->prepare("SELECT * FROM siparis WHERE sip_id=:sip_id");
  $siparissor->execute(array(
      'sip_id'=>$_POST['sip_id']
));
$sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC);
} 

 ?>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Sipariş Düzenleme</h5>
		</div>
		<div class="card-body">
			<form action="islemler/islem.php" method="POST">
			<div class="form-row">
				<div class="coll-md-6">
					<label>İsim Soyisim</label>
					<input type="text" class="form-control" name="musteri_isim" value=" <?php echo $sipariscek['musteri_isim']?>">
				</div> 
				<div class="coll-md-6">
					<label>Mail Adresi</label>
					<input type="email" class="form-control" name="musteri_mail" value="<?php echo $sipariscek['musteri_mail']   ?>">
				</div>
			</div>
			<div class="form-row mt-3">
				<div class="coll-md-6">
					<label>Telefon Numarası</label>
					<input type="number" class="form-control" name="musteri_telefon" value="<?php echo $sipariscek['musteri_telefon']   ?>" >
				</div>
				<div class="coll-md-6">
					<label>Siprariş Başlığı</label>
					<input type="text" class="form-control" name="sip_baslik" value="<?php echo $sipariscek['sip_baslik']?>" >
				</div>
			</div>
			<div class="form-row mt-3">
			<div class="form-group coll-md-6">
			<label>Sipariş Durumu</label>
			<select required name="sip_durum" class="form-control">
				<option <?php if($sipariscek['sip_durum']=="Yeni Başladı"){echo "selected";} ?>>Yeni Başladı</option>
				<option <?php if($sipariscek['sip_durum']=="Devam Ediyor"){echo "selected";} ?>>Devam Ediyor</option>
				<option <?php if($sipariscek['sip_durum']=="Bitti"){echo "selected";} ?>>Bitti</option>


			</select>
			</div>
			<div class="form-group coll-md-6">
				<label>Ücret (TL)</label>
					<input type="number" class="form-control" required name="sip_ucret" value="<?php echo $sipariscek['sip_ucret']   ?>">
			</div>
			</div>
			<div class="form-row mt-3">
			<div class="form-group col-md-6">
                <label>Teslim Tarihi</label>
                <input type="date" class="form-control" required name="sip_teslim_tarihi" value="<?php echo $sipariscek['sip_teslim_tarihi'] ?>">
              </div>

              <div class="form-group col-md-6">
                <label>Aciliyet</label>
                <select required name="sip_aciliyet" class="form-control">
                  <option <?php if($sipariscek['sip_aciliyet']=="Acil"){echo "selected";} ?>>Acil</option>
                  <option <?php if($sipariscek['sip_aciliyet']=="Normal"){echo "selected";} ?>>Normal</option>
                  <option <?php if($sipariscek['sip_aciliyet']=="Acelesi Yok"){echo "selected";} ?>>Acelesi Yok</option>
                </select>
              </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-12">
			  <label>Details</label>
                <textarea class="form-control" required name="sip_detay" value=<?php echo $sipariscek['sip_detay'] ?> id="editor"></textarea>
              </div>
            </div>
             <button type="submit" name="siparisduzenle" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Kaydet</button>
		</form>
		</div>
	</div>
</div>





<?php include 'footer.php'; ?>