<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <meta charset=utf-8>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
     <?php 
        foreach($subjects as $r): 
        echo "<a href = '".base_url()."open_subj"."/".$r->subject."'>$r->subject</a>";
        echo "<br>";
        endforeach;  
     ?>
 </body>
</html>