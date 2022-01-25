<?php

if ($_POST ["N1"] !="" and $_POST["N2"] !="")  {
    if ($_POST["operacion"] == "suma") {
        print ($resultado = $_POST["N1"] + $_POST["N2"]);
    }
    if ($_POST["operacion"] == "resta") {
        print ($resultado = $_POST["N1"] - $_POST["N2"]);
    }
    if ($_POST["operacion"] == "multiplicacion") {
        print ($resultado = $_POST["N1"] * $_POST["N2"]);
    }
    if ($_POST["operacion"] == "division") {
        print ($resultado = $_POST["N1"] / $_POST["N2"]);
    }
} else {
    print(" Error, una o ambas entradas estan vacias");
}
?>