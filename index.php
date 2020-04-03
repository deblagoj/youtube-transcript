<html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;

}

.form-inline label {
  margin: 5px 5px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  width: 30%;

  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>

<style>
    .box{
        border: 1px solid #aaa; /*getting border*/

        color: #000; /*text color*/
        box-sizing: border-box;
          width: 75%;
          height: 70%;

          float: left;
          padding: 50px;
    }
</style>




</head>
<body>



version 1


<form class="form-inline" action="" method="post">
Youtube link: <input type="text" name="link"><br>

</label>
<button type="submit">Submit</button>
</form>


<?php
echo '1';
if(isset($_POST["link"])) {
     // process form data, send email, output message
echo '2';
#echo $_POST["link"];
$txt = 'python3 transcript10.py ';
$txt .=$_POST["link"];
$command = escapeshellcmd($txt);
$var = shell_exec($command);
echo $var ;
echo '<textarea class="box">'.$var.'</textarea>';
}
?>


</body>
</html>
