<?php  

$id_provinsi_terpilih = $_POST["id_provinsi"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=".$id_provinsi_terpilih,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: 3e720beeee9af60e18c0982de4dab410"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	//dapatnya dalam bentuk json
	//konversi ke array dulu
	$array_response = json_decode($response,TRUE);
	$data_distrik = $array_response ["rajaongkir"]["results"];
	// echo "<pre>";
	// echo print_r($data_distrik);
	// echo "</pre>";

	echo "<option value=''>--Pilih Kota/Kabupaten--<?option>";

	foreach ($data_distrik as $key => $tiap_distrik) 
	{
		echo "<option value='' 
		id_distrik='".$tiap_distrik["city_id"]."'
		nama_provinsi='".$tiap_distrik["province"]."' 
		nama_distrik='".$tiap_distrik["city_name"]."' 
		tipe_distrik='".$tiap_distrik["type"]."' 
		kodepos='".$tiap_distrik["postal_code"]."'	>";
		echo $tiap_distrik["type"]." ";
		echo $tiap_distrik["city_name"];
		echo "</option>";
	}
}



?>