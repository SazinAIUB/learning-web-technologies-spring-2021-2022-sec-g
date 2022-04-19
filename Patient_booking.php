
<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
        <link rel="stylesheet" href="CSS/style.css">
      </head>  
      <body>  
           <?php
        
           session_start();

           if (isset($_SESSION['username']) ){require 'Bar/top1.php';}
           else{header("location:Login.php");}
      require 'Model/approval_validation.php';  
      ?>




               <div class="div">
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
               <fieldset>
               <label for="name">Enter name you want to append:</label>
               <input type="text" id="name" name="name">
               <br><br>
               <input type="submit" name="submit" value="Submit" class="btn btn-info">
               </fieldset>
               </div>
               </form>                
          
      </body>  
 </html>  