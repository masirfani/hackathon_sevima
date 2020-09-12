<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap_4/css/bootstrap.min.css") ?>">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">FYI Covid-19</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<section class="my-5">
			<div class="container-fluid">
				<h1 class="text-center mb-3 text-grey">Data Jumlah Covid-19</h1>
				<div class="row">
					<div class="col-md-4">
						<div class="card text-white mx-auto bg-danger mb-3" style="max-width: 18rem;">
						  <div class="card-header">Jumlah Orang Positif</div>
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $total_postif; ?></h5>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-white mx-auto bg-success mb-3" style="max-width: 18rem;">
						  <div class="card-header">Jumlah Orang Sembuh</div>
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $total_sembuh; ?></h5>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
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
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table">
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

		<!-- <div class="row">
					<div class="col-md-6">
						<canvas id="myChart"></canvas>
					</div>
				</div> -->
		<pre>
			<?php var_dump($statistik[0]) ?>
		</pre>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="<?php echo base_url("assets/bootstrap_4/js/bootstrap.min.js") ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
		<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: [
		        	<?php  
		        		foreach ($statistik as $see) {
		        			echo $see->attributes->Hari_ke.",";
		        		}
		        	?>
		        ],
		        datasets: [{
		            label: '# of Votes',
		            data: [
		            	<?php  
				        		foreach ($statistik as $see) {
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