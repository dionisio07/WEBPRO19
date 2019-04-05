<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends CI_Model {

	public function GetMahasiswa_1234567890(){
		/*
			..:: QUESTION ::.. 
			Function that can retrieve student data along with the name of the department [jurusan]. (clue: JOIN).
		*/
		// YOUR_CODE_HERE

		$query = $this->db->query('SELECT m.nim, m.nama, m.kelas, j.nama_jurusan, j.fakultas, m.foto FROM mahasiswa m JOIN jurusan j ON m.id_jurusan = j.id_jurusan;');

		return $query->result();
		
	}
	
	public function Getjurusan_1234567890(){
		/*
			..:: QUESTION ::.. 
			Function that can retrieve department [jurusan] data and the number of students in each department [jurusan]. (clue: Join, Aggregate Function)
		*/
		// YOUR_CODE_HERE
		$query = $this->db->query('SELECT j.nama_jurusan, j.fakultas, j.akreditasi, count(m.nim) as jumlah_mahasiswa FROM jurusan j JOIN mahasiswa m ON j.id_jurusan = m.id_jurusan GROUP BY j.nama_jurusan, j.fakultas, j.akreditasi;');

		return $query->result();
	}
}

