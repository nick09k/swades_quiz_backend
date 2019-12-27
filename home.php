<?php session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $SIZE=htmlspecialchars($_POST['SIZE']);
    $_SESSION['SIZE'] = $SIZE;
    header('Location: members.php');
    exit;
}
?>




<!DOCTYPE html>
<html>

    
    
    <body>

        
<p>Register Here</p>
            
                        <p>Please select the team size</p>
                        <form method ="post" action="members.php">
                            <div>
                                <select name="SIZE" required>
                                    <option value="" default>TEAM SIZE</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <br>
                            <input type="submit" name="insert" value="NEXT">
                 
                        </form>
               



    </body>
    
</html>
