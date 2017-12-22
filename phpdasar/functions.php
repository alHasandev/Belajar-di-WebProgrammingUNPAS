<?php 

	// Koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "db_phpdasar");

	// fungsi untuk menampilkan data
	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}

		return $rows;
	}

	// fungsi untuk tambah data
	function tambah($data) {
		global $conn;

		// ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($data["nama"]);
		$npm = htmlspecialchars($data["npm"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		
		// Upload gambar
		$gambar = Upload();
		if( !$gambar ) {
			return false;
		}

		// query insert data
		$query = "INSERT INTO mahasiswa VALUES(NULL, '$nama', '$npm', '$email', '$jurusan', '$gambar')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	// fungsi untuk hapus data
	function hapus($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	// fungsi untuk ubah data
	function ubah($data) {
		global $conn;

		// ambil data dari tiap elemen dalam form
		// $id = $_GET["id"];
		$id = $data['id'];
		$nama = htmlspecialchars($data["nama"]);
		$npm = htmlspecialchars($data["npm"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		// cek apakah user pilih gambar baru/tidak
		if( $_FILES['gambar']['error'] === 4 ) {
			$gambar = $gambarLama;
		} else {
			$gambar = upload();
		}

		// query insert data
		$query = "UPDATE mahasiswa SET
					npm = '$npm', 
					nama = '$nama', 
					email = '$email', 
					jurusan = '$jurusan',
					gambar = '$gambar'
				  WHERE id = '$id'
				";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}

	// fungsi untuk mencari data sesuai keyword
	function cari($keyword) {
		$query = "SELECT * FROM mahasiswa 
				   WHERE 
					nama LIKE '%$keyword%' OR
					npm LIKE '%$keyword%' OR
					email LIKE '%$keyword%' OR
					jurusan LIKE '%$keyword%'
				";
		return query($query);
	}

	function upload() {

		$namaFile = $_FILES['gambar']['name'];
		$ukuranFIle = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmp_name = $_FILES['gambar']['tmp_name'];

		// cek apakah tidak ada gambar di upload
		if( $error === 4 ) {
			echo "<script>
						alert('Pilih gambar terlebih dahulu!')
				  </script>";
			return false;
		}

		// cek apakah yang diupload adalah gambar
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
						alert('yang anda upload bukan gambar!')
				  </script>";
			return false;
		}

		// cek jika ukurannya terlalu besar
		if( $ukuranFIle > 1002400 ) {
			echo "<script>
						alert('ukuran gambar terlalu besar!')
				  </script>";
			return false;
		}

		// lolos pengecekan, gambar siap diupload
		// generate nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.' . $ekstensiGambar; 

		move_uploaded_file($tmp_name, 'img/' . $namaFileBaru);

		return $namaFileBaru;


	}

 ?>