<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $naam = $email = $gender = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naam = test_input($_POST["naam"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
    }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    ?>
    <h2><?php echo "Hello, $naam"?></h2>
    <?php echo "U are: $gender"; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <br>Name:<input class="naam" type="text" name="naam">
    <?php
    if (isset($_POST['naam']))
      if(empty($_POST['naam'])){
      echo "Name required!";
    }
    ?>
    <br>
    Email:<input class="email" type="email" name="email">
    <?php
    if (isset($_POST['email']))
      if(empty($_POST['email'])){
      echo "Email required!";
    }
    ?>
    <br>
    Lesbian<input onclick="lesbian()" ondblclick="wit()" id="l" type="radio" name="gender" value="Lesbian" required>
    Gay<input onclick="gay()" ondblclick="wit()" id="h" type="radio" name="gender" value="Gay"required>
    Bisexual<input onclick="bisexual()" ondblclick="wit();" id="b" type="radio" name="gender" value="Bisexual" required>
    Transgender<input onclick="transgender()" ondblclick="wit();" id="t" type="radio" name="gender" value="Transgender" required>
    Male<input onclick="male()" ondblclick="wit()" id="m" type="radio" name="gender" value="Male" required>
    Female<input onclick="female()" ondblclick="wit()" id="v" type="radio" name="gender" value="Female" required>
    <?php
    if (isset($_POST['gender']))
      if(empty($_POST['gender'])){
      echo "Gender required!";
    }
    ?><br>
    <label for="check">Checkbox:</label>
    Wilt u beoordelen:<input id="check" type="checkbox" name="check">
    <input class="submit" type="submit" name="submit">
    <div id="beoordeling">
    <p id="text">Beoordeling:</p>
    <input id="v" type="checkbox" name="gender"><br>
</div>
    </form>
    <script>
var checkbox = document.getElementById("check");
var Beoordeeld = document.getElementById("beoordeling");
checkbox.addEventListener('change', function(){
    if(this.checked){
        Beoordeeld.style.visibility = 'visible';
    } else {
        Beoordeeld.style.visibility = 'hidden';
    }
});
</script>
<script>
    function lesbian () {
        document.body.style.backgroundColor = "red";
    }
    function gay () {
        document.body.style.backgroundColor = "orange";
    }
    function bisexual () {
        document.body.style.backgroundColor = "yellow";
    }
    function transgender () {
        document.body.style.backgroundColor = "purple";
    }
    function male () {
        document.body.style.backgroundColor = "blue";
    }
    function female () {
        document.body.style.backgroundColor = "pink";
    }
    function wit () {
        document.body.style.backgroundColor = "wit";
    }
    </script>
</body>
</html>