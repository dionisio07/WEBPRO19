<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<!-- Lengkapi baris 10-14 agar mmemberikan output sesuai yang diharapkan -->
<ul>
<?php foreach($upload_data as $item => $val){?>
<li><?php echo $item;?>: <?php echo $val;?></li>
<?php } ?>
</ul>

<p><?php echo anchor('C_Upload', 'Upload Another File!'); ?></p>

</body>
</html>