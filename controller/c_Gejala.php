<?php 
/**
 * 
 */
class Gejala
{

	function TampilSemua()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($koneksi, "SELECT * from ds_gejala");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama'] = $d['nama'];
			$i++;
		}
		return $data;
	}

	function InsertGejala($nama){
		include "../koneksi/koneksi.php";
		$query = mysqli_query($koneksi, "INSERT INTO ds_gejala (nama)
			values('$nama')");
	}

	function HapusGejala($id)
	{
		include "../koneksi/koneksi.php";
		mysqli_query($koneksi, "DELETE FROM ds_gejala WHERE id = '$id'");
	}

	function EditGejala($id,$nama)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($koneksi, "UPDATE ds_gejala set nama='$nama' WHERE id='$id'");
	}

	function TampilSatuData($id)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($koneksi, "SELECT * FROM ds_gejala WHERE id = '$id'");
		$g = mysqli_fetch_object($query);
		$this->id = $g->id;
		$this->nama = $g->nama;
	}

	function TampilAngka()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($koneksi, "SELECT max(id) as nilai FROM ds_gejala");
		$g = mysqli_fetch_object($query);
		$this->nilai = $g->nilai;
	}


	//bagian halaman utama
	function TampilSemuaWeb()
	{
		include "koneksi/koneksi.php";
		$query = mysqli_query($koneksi, "SELECT * from ds_gejala");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama'] = $d['nama'];
			$i++;
		}
		return $data;
	}
}
error_reporting(0);
?>