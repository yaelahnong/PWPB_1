<?php
	$conn = mysqli_connect("localhost","root","","db_sekolah");
	
	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}
	
	function tambah($data) {
		global $conn;
		
		$nis = $_POST["NIS"];
		$nama = $_POST["nama"];
		$jk = $_POST["JK"];
		$kelas = $_POST["kelas"];
		$alamat = $_POST["alamat"];
		
		$result = mysqli_query($conn, "SELECT * FROM data_siswa WHERE NIS = '$nis'");
		
		if( mysqli_fetch_assoc($result) ) {
			echo "<script>
					alert('Siswa sudah terdaftar !')
				</script>";
			return false;
		}
		
		$query = mysqli_query( $conn, "INSERT INTO data_siswa 
										VALUES
										('', '$nis', '$nama', '$jk', '$kelas', '$alamat')
										");
										
		
		mysqli_query($conn, $query);
		
		return true;
	}
	
	function hapus($id) {
		global $conn;
		
		mysqli_query ($conn, "DELETE FROM data_siswa WHERE id_siswa = $id");
		return mysqli_affected_rows($conn);
		
	}
	
	function ubah($data) {
		global $conn;
		
		
		$id =  $data["id"];
		$nis = $_POST["NIS"];
		$nama = $_POST["nama"];
		$jk = $_POST["JK"];
		$kelas = $_POST["kelas"];
		$alamat = $_POST["alamat"];
		
		$query = mysqli_query( $conn, "UPDATE data_siswa 
										SET
										NIS = '$nis',
										nama = '$nama',
										jenis_kelamin = '$jk',
										kelas = '$kelas',
										alamat = '$alamat'
										WHERE id_siswa = $id
										"); // id_siswa -> identifier
										
		
		mysqli_query($conn, $query);

		return true;
	}
	
	
	
	

?>
