  <div class="container">
	  <div class="box">
      <h2>Data Jurusan</h2>
      <p>Tabel Data Jurusan Telkom Univerity</p>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Nama Fakultas</th>
            <th>Akreditasi</th>
            <th>Jumlah Mahasiswa</th>
          </tr>
        </thead>
        <tbody>
          <!--
            ..:: QUESTION ::.. 
            Print a table from the results of Getjurusan_nim data
          -->
          <!-- YOUR_CODE_HERE -->
		<?php 
		  $i = 0;
		  foreach($departments as $department){?>
		  <tr>
            <td><?php echo $i+=1;?></td>
            <td><?php echo $department->nama_jurusan;?></td>
            <td><?php echo $department->fakultas;?></td>
            <td><?php echo $department->akreditasi;?></td>
            <td><?php echo $department->jumlah_mahasiswa;?></td>
          </tr>
		  <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
