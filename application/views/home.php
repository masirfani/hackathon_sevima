<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>FYI Covid-19</title>
		<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap_4/css/bootstrap.min.css") ?>">
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="#">FYI Covid-19</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#kasus">Jumlah Kasus</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#gejala">Gejala</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#kasus-daerah">Data Provinsi</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#grafik-pertumbuhan">Grafik Pertumbuhan</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#peta-penyebaran">Peta Penyebaran</a>
					</li>
				</ul>
			</div>
		</nav>
		<section class="bg-dark text-light p-3 mt-5" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="h3">
							Hai, Selamat datang di website For Your Information about Covid-19
						</h3>
					</div>
					<div class="w-100 m-2"></div>
					<div class="col-md-6">
						<p>Apasih Covid-19 itu?</p>
						<p class="pl-3">Masih belum tau ya?, Menurut kabar yang beredar Covid-19 adalah sebuah penyakit menular yang disebabkan oleh virus <b>Corona.</b> </p>
						<p>Haaaaaa?, apalagi itu virus corona?</p>
						<p class="pl-3">begini, jadi virus corona itu merupakan suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia, dan beberapa data menyebutkan bahwa yang diserang itu saluran pernafasan lhoooo</p>
						<p>Owh begitu, ya sudahlah mana mungkin virus berani menyerangku yang kuat ini </p>
						<p class="pl-3">Eitsss, jangan salah penyebaran virus ini sangat mudah sekali, dikarenakan virus menyebar melalui percikan air yang muncul dari mulut atau hidung seseorang yang terinfeksi.</p>
						<p>Ih kok gitu sih, udah hidup kek gini malah ada virus begini:(</p>
						<p class="pl-3">Jangan risau dan jangan takut, karena ada cara mengurangi penyebarang virusnya apa saja itu langsung cek skuy</p>
						<ol>
							<li>Tetap dirumah, keluar rumah jikalau penting saja</li>
							<li>Keluar rumah memakai masker</li>
							<li>Sering sering cuci tangan</li>
							<li>Kurangi menyentuh benda yang bukan milik kita</li>
						</ol>
					</div>
					<div class="col-md-6">
						<img src="https://fk.unair.ac.id/wp-content/uploads/2020/02/virus-corona-740x450.jpg" alt="" class="img-fluid rounded border border-light">
					</div>
				</div>
			</div>
		</section>
		<section class="my-5" id="kasus">
			<div class="container-fluid">
				<h3 class="text-center mb-3 text-grey">Data Jumlah Covid-19</h3>
				<div class="row">
					<div class="col-md-4 col-4">
						<div class="card text-white mx-auto bg-danger mb-3" style="max-width: 18rem;">
						  <div class="card-header">Jumlah Orang Positif</div>
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $total_postif; ?></h5>
						  </div>
						</div>
					</div>
					<div class="col-md-4 col-4">
						<div class="card text-white mx-auto bg-success mb-3" style="max-width: 18rem;">
						  <div class="card-header">Jumlah Orang Sembuh</div>
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $total_sembuh; ?></h5>
						  </div>
						</div>
					</div>
					<div class="col-md-4 col-4">
						<div class="card text-white mx-auto bg-dark mb-3" style="max-width: 18rem;">
						  <div class="card-header">Jumlah Orang Meninggal</div>
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $total_meninggal; ?></h5>
						  </div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<section class="bg-dark text-white my-5" id="gejala">
			<div class="container">
				<div class="row py-5">
					<div class="col-md-6 text-center">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRNceV7UsgE4qR8YVWCY_LHcHqBr6BHzygcNA&usqp=CAU" alt="" class="img-fuild rounded border border-light">
					</div>
					<div class="col-md-6">
						<h3>Gejala Covid-19</h3>
						<p class="pl-2">Waspadai gejala gejala Covid-19</p>
						<ul>
							<li>Demam tinggi</li>
							<li>Batuk dan pilek</li>
							<li>Berkurangnya kemampuan indera penciuman</li>
							<li>Berkurangnya kemampuan indera pengecap/perasa</li>
							<li>Sesak nafas</li>
							<li>Sakit Tenggorokan</li>
							<li>Mata Merah</li>
							<li>Lelah</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="my-5" id="kasus-daerah">
			<div class="container-fluid">
				<h3 class="text-center">Table Kasus Covid-19 Per Provinsi</h3>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table" id="myTable">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama Provinsi</td>
										<td>Kasus Positif</td>
										<td>Kasus Sembuh</td>
										<td>Kasus Meninggal</td>
									</tr>
								</thead>
								<tbody>
									<?php  
										$nomor = 1;
										foreach ($data_corona->features as $see):
									?>
									<tr>
										<td><?php echo $nomor++ ?></td>
										<td><?php echo $see->attributes->Provinsi ?></td>
										<td class="text-danger"><?php echo $see->attributes->Kasus_Posi ?></td>
										<td class="text-success"><?php echo $see->attributes->Kasus_Semb ?></td>
										<td class="text-dark"><?php echo $see->attributes->Kasus_Meni ?></td>
									</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="grafik-pertumbuhan">
			<div class="container-fluid my-5">
				<div class="row">
					<div class="col-md-12">
						<h3>Grafik pertumbuhan Covid-19 </h3>
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</section>
		<section id="peta-penyebaran">
			<div class="container-fluid my-5">
				<div class="row">
					<div class="col-md-12">
						<h3>Peta penyebaran Covid-19 </h3>
						<iframe src="https://www.google.com/maps/d/embed?mid=1U1FGDVD49lpMU4Nwg0hNrtMfPCBRhbbW" height="480" class="w-100"></iframe>
					</div>
				</div>
			</div>
		</section>
		
		<section class="mb-5">
			<div class="container-fluid">
				<h3>Form Laporan Kasus Covid-19</h3>
				<?php if (!empty($this->session->flashdata('isi_pesan'))): ?>
					<p class="alert alert-<?php echo $this->session->flashdata('tipe') ?>"><?php echo $this->session->flashdata('isi_pesan') ?></p>
				<?php endif ?>
				<div class="row">
					<div class="col-md-6">
						<form action="page/create_laporan" method="POST" accept-charset="utf-8">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="Masukkan Email Anda..." required="" name="email">
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" placeholder="Masukkan Nama Anda..." required="" name="nama">
							</div>
							<div class="form-group">
								<label>Keterangan Laporan</label>
								<textarea name="keterangan" placeholder="Masukkan Keterangan Laporan Anda" class="form-control" rows="5"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-info float-right">submit</button>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<img src="https://advokasi.aji.or.id/upload/208902_577015275650770_215744490_n.jpg" alt="" class="img-fluid rounded border border-dark mx-auto">
					</div>
				</div>
			</div>
		</section>

		<section class="my-5" id="kasus-daerah">
			<div class="container-fluid">
				<h3 class="text-center">Data Laporan</h3>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table" id="myTable">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama</td>
										<td>Email</td>
										<td>Keterangan</td>
									</tr>
								</thead>
								<tbody>
									<?php  
										$nomor = 1;
										foreach ($laporan as $see):
									?>
									<tr>
										<td><?php echo $nomor++ ?></td>
										<td><?php echo $see->nama ?></td>
										<td class="text-danger"><?php echo $see->email ?></td>
										<td class="text-info"><?php echo $see->keterangan ?></td>
									</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="footer bg-dark">
      <div class="container py-3">
        <p class="text-light text-center">STAY SAVE AT HOME | Copyright &copy; Ma's Irfani <?php echo date('Y') ?></p>
      </div>
    </footer>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="<?php echo base_url("assets/bootstrap_4/js/bootstrap.min.js") ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
		<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<script src="path/to/smooth-scroll.polyfills.min.js"></script>
		<script>
		$(document).ready( function () {
		    $('#myTable').DataTable();
		} );
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: [
		        	<?php  
		        		foreach ($provinsi as $see) {
		        			echo $see->attributes->Hari_ke.",";
		        		}
		        	?>
		        ],
		        datasets: [{
		            label: '# total kasus',
		            data: [
		            	<?php  
				        		foreach ($provinsi as $see) {
				        			echo $see->attributes->Jumlah_Pasien_Sembuh.",";
				        		}
				        	?>
		            ],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255, 99, 132, 1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero: true
		                }
		            }]
		        }
		    }
		});
		</script>
	</body>
</html>