<html>
    <head>
        <meta charset="utf-8">
        <title>CALCULATOR IN PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
      <div class="container" style="margin-top:20px;">
      <h1 style="text-align:center;">Taschenrechner</h1>
           
      <form action="ergebnis.php" method="get">
              <div class="form-group">
                <label for="first_nr">Zahl 1</label>
                <input type="text" class="form-control" name="first_nr">
              </div>
             
              <div class="form-group">
                <label for="second_nr">Zahl 2</label>
                <input type="text" class="form-control" name="second_nr">
              </div>
              
              <div class="form-group">
                <label for="selection">Wahlen Sie bitte</label>
                <select name="selection" class="form-control">
                    <option value="+">Addieren</option>
                    <option value="-">Subtrahieren</option>
                    <option value="*">Multiplizieren</option>
                    <option value="/">Dividieren</option>
                </select>
              </div>
             
              <button type="submit" class="btn btn-danger" name="calc" class="btn btn-default" >Rechnen</button>
            </form>

                <?php if(isset($_GET['w_msg'])){
    echo " <h2>Achtung: ".$_GET['w_msg']."</h2>";
}
?>
                <?php if(isset($_GET['r_msg'])){
    echo "<h1>Ergebnis: ".$_GET['r_msg']."</h1>";
}
?>
        </div>
     
      
       
    </body>
</html>