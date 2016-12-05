<?php
if (!empty($_POST["domain"])) {
 $gltd = array('.com', '.net', '.org', '.id', '.co.id', '.info', '.web.id');
 $name = $_POST['domain'];
 $cleanSpace = preg_replace('/\s+/', '', $name);
 $cleanLtd = array_shift(explode('.', $cleanSpace));
 $lowerCase = strtolower($cleanLtd);
 foreach ($gltd as $ltd) {
  $domain = $lowerCase.$ltd;
  if (gethostbyname($domain) != $domain) {
   echo "<tr class='warning'>
         <td>".$domain."</td>
         <td><span class='label label-warning'>Not Avaible</span></td>
         
       </tr>";
  } else {
   echo "<tr class='success'>
         <td>".$domain."</td>
         <td><span class='label label-success'>Avaible</span></td>
         
       </tr>";
  }
 }
}
?>
