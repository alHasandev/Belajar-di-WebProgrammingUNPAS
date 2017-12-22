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
		$gambar = htmlspecialchars($data["gambar"]);

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
		$gambar = htmlspecialchars($data["gambar"]);

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

 ?>