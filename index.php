<?php
 $rezultat = 0.0;
 $numar = 0.0;
 $operatie = "";
 $string = $_POST["nr"];

 if (!empty($string))
 {   
     $expresie = explode(" ", $string);

     $numar = $expresie[0];
     if (is_numeric($numar)) {

        $rezultat = $numar;
        
         for ($i = 1; $i < count($expresie); $i++) 
         {
            if ($expresie[$i] == "+" || $expresie[$i] == "-" || $expresie[$i] == "*" || $expresie[$i] == "/")
            {
                $operatie = $expresie[$i];
            }
            else if (is_numeric($expresie[$i]))
            {
                $numar = $expresie[$i];

                if ($operatie != "")
                {
                    switch ($operatie) 
                    {
                        case "+":
                            {
                                $rezultat = $rezultat + $numar;
                                break;
                            }
                        case "-":
                            {
                                $rezultat = $rezultat - $numar;
                                break;
                            }

                        case "*":
                            {
                                $rezultat = $rezultat * $numar;
                                break;
                            }
                        case "/":
                            {
                                $rezultat = $rezultat / $numar;
                                break;
                            }
                    }

                    $operatie = "";
            
                }

            }       

         } 
     }
 }
 else
 {
     $rezultat = "";
 }

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Calculator Cristina</title>
        <link rel="stylesheet" type="text/css" href="calculatorOS.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="calculatorOS.js"></script>
    </head>
    <body>
        <form action="index.php" method="post">
            <div>
                <div class="header">
                    <input id="nr" name="nr" type="text" value="<?php echo $rezultat;?>">
                    <input type="button" id="C" name="C" value="C" />
                    <input type="button" id="back" name="back" value="<-" />
                </div>
                <div class="numberFields">
                    <input type="button" name="1" value="1" />
                    <input type="button" name="2" value="2" />
                    <input type="button" name="3" value="3" />
                    <input type="button" name="4" value="4" />
                    <input type="button" name="5" value="5" />
                    <input type="button" name="6" value="6" />
                    <input type="button" name="7" value="7" />
                    <input type="button" name="8" value="8" />
                    <input type="button" name="9" value="9" />
                    <input type="button" name="0" value="0" />
                </div>
                <div class="operations">
                    <input type="button" name="+" value="+" />
                    <input type="button" name="-" value="-" />
                    <input type="button" name="*" value="*" />
                    <input type="button" name="/" value="/" />
                </div>
                <div class="sum">
                    <input type="submit" value="=" />
                </div>
            </div> 
        </form>   
    </body>
</html>

