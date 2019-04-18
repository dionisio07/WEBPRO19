<html>
<head>
<title>Upload Form</title>
<style type="text/css">
	html{
  height:100%;
}

body{
  
  background-color:#2590EB;
  height:100%;
}
h1{
	text-align: center;
	padding-top: 50px;
	color: white;
}

img{
	height: 150px;
	width: 150px;
	display: block; 
	margin: 0 auto; 
	text-align: center;
}
.wrapper{
  
  /*width:100%;
  height:100%;*/
  display:flex;
  align-items:center;
  justify-content:center;
  

  .file-upload{

    height:200px;
    width:200px;
    border-radius: 100px;
    position:relative;
    
    display:flex;
    justify-content:center;
    align-items: center;  

    border:4px solid #FFFFFF;
    overflow:hidden;
    background-image: linear-gradient(to bottom, #2590EB 50%, #FFFFFF 50%);
    background-size: 100% 200%;
    transition: all 1s;
    color: #FFFFFF;
    font-size:100px;

    input[type='file']{

      height:200px;
      width:200px;
      position:absolute;
      top:0;
      left:0;
      opacity:0;
      cursor:pointer;

    }

    &:hover{

      background-position: 0 -100%;

      color:#2590EB;

    }
  }
}
</style>
</head>

<body>
	<h1>Upload - CodeIgniter</h1>
	<img src="http://ikfrbandung.com/assets/backend/images/upload.png">
	<br/><br/>
	<div class="wrapper">
	  <div class="file-upload">
	  	<?php echo $error;?>
	  	<?php echo form_open_multipart('C_Upload/do_upload');?>
	    <input type="file" name="userfile" size="20" />
	    <br/><br />
	    <input type="submit" value="upload" />
	    <i class="fa fa-arrow-up"></i>
	  </div>
	</div>
</body>
</html>