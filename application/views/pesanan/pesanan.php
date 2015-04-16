<?php
include 'head.php';
?>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-8 column bg-active">
			<h3 class="text-center">
				<u>Form Pemesanan Web  </u>
			</h3>
		</div>
        <div class="col-md-4 column">
			<h3 class="text-center">
				<u>Proses Pemesanan</u>
			</h3>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-8 column">
			<form action="<?php echo site_url('/utama/pesan');?>" method="post" role="form">
				<div class="form-group">
					<label>Paket</label><br>
                        <div class="col-md-4 column">
                            <dt class="bg-success"><input required type="radio" name="paket" value="1">Basic</input></dt>
                        </div>
                        <div class="col-md-4 column">
                            <dt class="bg-warning"><input  required type="radio" name="paket" value="2">Premium</input></dt>
                        </div>
                        <div class="col-md-4 column">
                            <dt class="bg-danger"><input required type="radio" name="paket" value="3">Exclusive</input></dt>
                        </div>
                    <br>
                    <label>Nama</label>
                    <input required class="form-control" name="nama" type="text" placeholder="Nama Pribadi / Intansi / Perusahaan">
                    <label>Alamat E-mail</label>
                    <input required class="form-control" name="email" type="email" placeholder="nama@contoh.com">
				    <label>No Telp.</label>
                    <input required class="form-control" name="notelp" type="tel" placeholder="Nomor Hp / Kantor / Rumah">
                    <label>Tanggal Kedatangan yang di harapkan</label>
                    <input required class="form-control" name="tanggal" type="date" id="datepicker">
                    <label>Pesan Khusus</label>
                    <textarea class="form-control" name="pesan" type="text"></textarea>
        <br>
                    <p>Pastikan anda memasukan data dengan benar!</p>
				</div>
				 <button type="submit" class="btn btn-primary">Lakukan Pemesanan</button>
			</form>
		</div>
		<div class="col-md-4 column text-bold">
			<dl>
				<dt class="bg-primary">
					1. Contact/Isi Form
				</dt>
				<dd class="text-left">
					<p>Anda Bisa Melakukan pemesanan web kami dengan mengisi <strong>Form</strong> atau menghubungi kami di :</p>
                    <p> <i class="glyphicon glyphicon-earphone"></i> : 0857-2010-8161</p>
                    <p> <i class="glyphicon glyphicon-envelope"></i> : info@naetalab.com</p>
				</dd>
				<dt class="bg-primary">
					2. Kami datang
				</dt>
				<dd class="text-justfy">
					<p class="glyphicon glyphicon-road">
				</p> : Kami akan datang sesuai pada waktu dan hari yang telah di jadwalkan. 
                </dd>
                <dt class="bg-primary">
					3. Get Deal
				</dt>
				<dd class="text-justify">
					<p class="glyphicon glyphicon-retweet">
				</p> : Setelah kami datang maka kami akan membicarakan dan meninjau spesifikasi sistem yang anda butuhkan. 
                </dd>
                <dt class="bg-primary">
					4. Do Project
				</dt>
				<dd class="text-justify">
					<p class="glyphicon glyphicon-ok">
				</p> : Kemudian setelah terjadi kesepakatan maka Project akan segera langsung dikerjakan. 
                </dd>
			</dl>
		</div>
	</div>
</div>