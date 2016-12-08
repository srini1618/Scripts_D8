<html>

   <head>
      <title>PHP Form Validation</title>
   </head>

   <body>



      <h2>Convert JSON data to img tag</h2>

      <form method = "post" action = "replace1.php">
         <table>
            <tr>
               <td>Json data</td>
               <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
             <tr>
               <td>Submit</td>
               <td> <input type="submit" value="submit" onclick="test()" /></td>
            </tr>
         </table>
      </form>
      
<?php

function test() {
   $val = "";
  $val = json_decode($_POST["comment"]);
  if(isset($val)){
$var = '<img src="" alt="'.$val[0][0]->attributes->alt.'" title="'.$val[0][0]->attributes->title.'" height="'.$val[0][0]->attributes->height.'" width="'.$val[0][0]->attributes->width.'" class="'.$val[0][0]->attributes->class.'">';
}
echo htmlspecialchars($var);
}

if (isset($_POST)){ //If it is the first time, it does nothing
  test();
}
?>
   </body>
</html>


