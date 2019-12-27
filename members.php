<?php session_start();
$check = false;
if(isset($_SESSION['SIZE'])){
    $SIZE = $_SESSION['SIZE'];
    $check = true;
}


?>
<html>
<head>
</head>

<body>
  


            <!--========== ye warning hai ye display hoga back aane pe  ==========-->
       

                    <?php if ($check):?>
                    MEMBER DETAILS
                    <?php else:?>
                    505 ERROR!!
                    <?php endif;?>
          <!--yaha tak warning message hai-->

    <?php if ($check): ?>
    <form  method ="post" action="submit.php">
         <input  type="text" name="teamname" placeholder="TEAM NAME" required>
               
                <select name="zone" required>
                    <option value="">ZONE</option>
                   <option value="east">EAST</option>
                   <option value="WEST">WEST</option>
                   <option value="NORTH">NORTH</option>
                    <option value="SOUTH">SOUTH</option>
                </select>

          <input   type="text" name="password" placeholder="PASSWORD" required>
           
      
        <?php
        for($i=0; $i<$SIZE; $i++):
        ?>
        
            <h2>MEMBER <?php echo($i+1) ?></h2>
            <br>
             
                <input   type="text" name="name[]" placeholder="NAME" required>

            
            <br>
               
                <input   type="text" name="college[]" placeholder="COllege" required>

            
            <br>
             
                <input   type="text" name="contact[]" pattern="[789][0-9]{9}" placeholder="CONTACT" autocomplete="off" required>
          
            <br>
             
                <input   type="email" name="email[]" placeholder="EMAIL" autocomplete="off" required>
          
        <?php endfor; ?>
      
        </br>
         <input type="submit" name="submit" value="REGISTER" >
    </form>
    <?php else:?>
    <p> Kindly Select the Team Size First!!</p>
    <p><a href="#link for swades">GO BACK</a></p>
    <?php endif;?>

</div>

</body>
</html>