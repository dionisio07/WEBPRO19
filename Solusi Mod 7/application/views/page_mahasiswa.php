  <div class="container">
  	<div class="box">
      <h2>Data Mahasiswa</h2>
      <p>Tabel Data Mahasiswa Telkom Univerity</p>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th class="text-center">Foto</th>
          </tr>
        </thead>
        <tbody>
          <!--
            ..:: QUESTION ::.. 
            Print a table from the results of Getmahasiswa_nim data, and display photos of each user with the 'assets / photo' path
          -->
          <!-- YOUR_CODE_HERE -->
          <?php 
		  $i = 0;
		  foreach($students as $student){?>
		  <tr>
            <td><?php echo $i+=1;?></td>
            <td><?php echo $student->nim;?></td>
            <td><?php echo $student->nama;?></td>
            <td><?php echo $student->kelas;?></td>
            <td><?php echo $student->nama_jurusan;?></td>
            <td><?php echo $student->fakultas;?></td>
            <td class="text-center"><img src="<?php echo base_url().'assets/Foto/' . $student->foto;?>" height="60" width="60" /></td>
          </tr>
		  <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
