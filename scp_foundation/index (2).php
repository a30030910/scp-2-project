<!DOCTYPE html>
<html lang="en">
   <head>
      <title>SCP</title>
      <meta charset="utf-8">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="js/script.js"></script>
   </head>
     <body style="color: black; background:linear-gradient(to right, #000000 , #2d272c, #000000) ; font-style: bold;">
        <div class="container" style="color: grey;">
      <nav class="navbar navbar-default">
         <div class="container-fluid" style="background-color: grey; color: black;">
            <div class="navbar-header">
               <a class="navbar-brand" href="#" style="color: white; font-size: 35px;"><b><i>SCP Foundation</i></b></a>
            </div>
            <ul class="nav navbar-nav">
               <li ><a target="_blank" href="scp-002.html" style="color: white; font-size: 25px;"><i><b>SCP-002</b></i></a></li>
               <li><a target="_blank" href="scp-003.html" style="color: white;font-size: 25px;"><i><b>SCP-003</b></i></a></a></li>
               <li><a target="_blank" href="scp-004.html" style="color: white;font-size: 25px;"><i><b>SCP-004</b></i></a></a></li>
               <li><a target="_blank" href="scp-005.html" style="color: white;font-size: 25px;"><i><b>SCP-005</b></i></a></a></li>
               <li><a target="_blank" href="scp-006.html" style="color: white;font-size: 25px;"><i><b>SCP-006</b></i></a></a></li>
            </ul>
         </div>
      </nav>
      <div class="container">
         <?php
            $scp_json = json_decode(file_get_contents('scp.json'));
            $i = 0;
            ?>
         <?php foreach($scp_json as $obj): ?>
         <button type="button" onclick="play(<?php echo $i; ?>);" class="btn btn-btn btn-lg">
         Play</button>
         <button  onclick="pause();" type="button" class="btn btn-danger btn-lg">         Cancel
         </button>
         
         <div id="<?php echo $i; ?>" >
            <h2><?php echo $obj->name; ?></h2>
            <h3><?php echo $obj->heading1; ?></h3>
            <p><?php echo $obj->contain; ?></p>
            <h3><?php echo $obj->heading2; ?></h3>
            <p><?php echo $obj->descriptionD; ?></p>
            <?php if($i == 0){  ?>
            <?php } 
               $i++; ?>
         </div>
         <hr>
         <br>
         <?php  endforeach; ?>
      </div>
   </body>
</html>