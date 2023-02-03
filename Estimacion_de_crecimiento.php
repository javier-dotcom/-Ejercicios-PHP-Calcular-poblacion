<!DOCTYPE html>


<html>

<head>
    <title>Equivalencias.php</title>
    <style type="text/css">
    body {
        background-color: #000;
        color: #fff;
    }

    .input,
    p {
        text-align: center;
        padding: 3px;
        color: #000;
        background-color: rgba(20, 159, 159);
        border: 5px groove rgba(159, 20, 20);
        text-decoration: none;
        opacity: 0.7;
    }

    .input:hover {
        opacity: 1.0;
        cursor: pointer;
    }

    p:hover {
        opacity: 1.0;
        cursor: pointer;
    }

    .for {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    .ejer {
        text-align: center;
        width: 80%;
        margin: auto;
    }

    .label {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    table,
    tr,
    td {
        margin: auto;
        color: #000;
        background-color: rgba(20, 159, 159);
        border: 5px groove rgba(159, 20, 20);
        padding: 3px;
    }
    </style>


</head>

<body>
    <div class="ejer">
        <h1>Programacion PHP</h1>
        <h3>Estimacion de crecimiento</h3>

        <p>Elaborar un programa para estimar la población estudiantil que se espera tener en un determinado año, los
            datos que se tienen son: la población actual de la escuela (número de estudiantes), el porcentaje de
            crecimiento anual que se espera tener,
            el año actual y el año al que se desea estimar el crecimiento. Todos estos datos deben ser leídos para
            imprimir al final lo estimado. </p>

        <form action="Estimacion_de_crecimiento.php" method="get">

            <div class="for">

                <div class="label">
                    <label>Cantidad de alumnos hoy</label>
                    <input class="input" type="Number" name="alum" id="alum" required>
                </div>

                <div class="label">
                    <label>Porcentaje crecimiento</label>
                    <input class="input" type="Number" name="porc" id="porc" required>
                </div>

                <div class="label">
                    <label>Año Actual</label>
                    <input class="input" type="Number" name="actual" id="actual" required>
                </div>

                <div class="label">
                    <label>Año de estimacion</label>
                    <input class="input" type="Number" name="futuro" id="futuro" required>
                </div>

            </div>
            <br><br>
            <input class="input" type="submit" name="envi" value="Calcular poblacion  ">
        </form>

        <?php  
if(isset($_GET["envi"])){
$estu=$_GET["alum"];
$porcen=$_GET["porc"];
$futuro=$_GET["futuro"];
$actual=$_GET["actual"];
function CalcularPoblacion($estu,$porcen,$futuro,$actual ){
$cant=$futuro-$actual;

for($a=1;$a<=$cant;$a++){
$final=$estu+($estu*($porcen/100));
$estu=$final;
}
return $final;

 }
       if($actual==$futuro || $actual>$futuro){
echo"<h2> El año actual no puede ser mayor ni igual al año de estimacion</h2><br>";
}else{

echo "<h2>La población estudiantil que se espera tener en el año $futuro es </h2>" . CalcularPoblacion($estu,$porcen,$futuro,$actual) . "<h2>alumnos.</h2>";
 }
 }
?>
    </div>
    </div>
</body>

</html>