<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index(){
		$harian = $this->request_curl("https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=Kasus_Posi,Kasus_Semb,Kasus_Meni,Provinsi,FID&returnGeometry=false&outSR=4326&f=json");
		$data['data_corona'] = $harian;
		$data['total_postif'] = 0;
		$data['total_sembuh'] = 0;
		$data['total_meninggal'] = 0;
		foreach ($harian->features as $see):
			$data['total_postif'] += $see->attributes->Kasus_Posi;
			$data['total_sembuh'] += $see->attributes->Kasus_Semb;
			$data['total_meninggal'] += $see->attributes->Kasus_Meni;
		endforeach;

		$statistik = $this->request_curl("https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/Statistik_Perkembangan_COVID19_Indonesia/FeatureServer/0/query?where=1%3D1&outFields=Jumlah_Kasus_Kumulatif,Hari_ke,Tanggal,Jumlah_Pasien_Sembuh,Jumlah_Pasien_Meninggal&returnGeometry=false&orderByFields=Hari_ke%20ASC&outSR=4326&f=json");
		$data['provinsi'] = $statistik->features;
		$this->load->view('home', $data);

	}

	function request_curl($link){
		$url_api = $link;
		$data = curl_init($url_api);
		curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
		$respon = curl_exec($data);
		return json_decode($respon);
		curl_close($data);
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */