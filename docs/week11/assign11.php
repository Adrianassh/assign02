<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Shopping</title>
</head>

<style>
    .space2 {
        width: 80%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .space2 input {
        width: 75%;
        border-color: darkgrey;
        border-radius: 10px;
        height: 30px;
        padding-left: 10px;
    }

    .space2 output {
        width: 75%;
        border-color: darkgrey;
        border-radius: 10px;
        height: 30px;
        text-align: left;
        font-size: 20px;
    }

    .space2 label {
        width: 15%;
        text-align: left;
        font-size: 20px;
    }

    .tabla {
        border: 4px solid #EFDCFB;
        background-color: rgba(212,169,219,1);
        width: 350px;
        text-align: center;
        border-collapse: collapse;
    }

    .tabla td, th {
        border: 1px solid #EFDCFB;
        padding: 5px 2px;
    }

    .tabla tbody td {
        font-size: 13px;
        font-weight: bold;
        color: #FFFFFF;
    }

    .tabla tr:nth-child(even) {
        background: rgba(186,109,198,1) ;
    }

    .tabla thead {
        background: rgba(186,109,198,1) ;
        border-bottom: 4px solid rgba(186,109,198,1) ;
    }

    .tabla thead th {
        font-size: 19px;
        font-weight: bold;
        color: #FFFFFF;
        text-align: left;
        border-left: 0px solid rgba(186,109,198,1) ;
    }

    .tabla thead th:first-child {
        border-left: none;
    }

</style>

<body>
    <div class="contenedor">
        <div class="header">
            <nav class="navegador">
                <div class="logo">
                    <img src="./img/logo_janus.png" alt="logo">
                    <p>F&J Developers</p>
                </div>
                <div class="fluid">
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="../week02/assign02.html">Week 2</a></li>
                        <li><a href="../week03/assign03.html">Week 3</a></li>
                        <li><a href="../week04/assign04.html">Week 4</a></li>
                        <li><a href="../week05/assign05.html">Week 5</a></li>
                        <li><a href="../week06/assign06.html">Week 6</a></li>
                        <li><a href="../week07/assign07.html">Week 7</a></li>
                        <li><a href="../week08/assign08.html">Week 8</a></li>
                        <li><a href="../week09/assign09.html">Week 9</a></li>
                        <li><a href="../week10/assign10.html">Week 10</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="contenido">
            <div class="card tarjeta">
                <div class="card-body">
                    <h3>Shopping Calculator</h3>
                    <h4>Confirm Purchase</h4>

                    <div class="space2">
                        <output id="response2">
                            Thank you, please validate that the information is correct before confirming your order.
                        </output>
                    </div>
                    <br>
                    <div class="space2">
                        <label for="payment">Name:</label>
                        <output id="payment">
                            <?php echo $_POST["first_name"] . " " . $_POST["last_name"] ?>
                        </output>
                    </div>
                    <div class="space2">
                        <label for="payment">Address:</label>
                        <output id="payment">
                            <?php echo $_POST["address"] ?>
                        </output>
                    </div>
                    <div class="space2">
                        <label for="payment">Phone:</label>
                        <output id="payment">
                            <?php echo $_POST["phone"] ?>
                        </output>
                    </div>
                    <br>
                    <div class="space2">
                        <?php
                            $item0 = $_POST["item_0"];
                            $item1 = $_POST["item_1"];
                            $item2 = $_POST["item_2"];
                            $item3 = $_POST["item_3"];
                            $total = $item0*1.3 + $item1*1.7 + $item2*2.4 + $item3*3.5;
                            
                            if ($item0 > 0 || $item1 > 0 || $item2 > 0 || $item3 > 0) {
                                echo "<table class = 'tabla'>
                                <tr>
                                <th>Product</th>
                                <th>Amount</th>
                                </tr>";
                                if ($item0 > 0) {
                                    echo "<tr>";
                                    echo "<td>" . "Salt" . "</td>";
                                    echo "<td>" . $item0 . "</td>";
                                    echo "</tr>";
                                }
                                if ($item1 > 0) {
                                    echo "<tr>";
                                    echo "<td>" . "Meat" . "</td>";
                                    echo "<td>" . $item1 . "</td>";
                                    echo "</tr>";
                                }
                                if ($item2 > 0) {
                                    echo "<tr>";
                                    echo "<td>" . "Milk" . "</td>";
                                    echo "<td>" . $item2 . "</td>";
                                    echo "</tr>";
                                }
                                if ($item3 > 0) {
                                    echo "<tr>";
                                    echo "<td>" . "Fish" . "</td>";
                                    echo "<td>" . $item3 . "</td>";
                                    echo "</tr>";
                                }
                                echo "<tr>";
                                echo "<td>" . "Total" . "</td>";
                                echo "<td>" . $total . "</td>";
                                echo "</tr>";
                                echo "</table>";
                            }
                        ?>
                    </div>
                    <br>
                    <div class="space2">
                        <form id="formulario" action="assign11_a.php" method="post">
                            <div class="space-bootom">
                                <button type="submit" name="sumt" class="btn1" value = "confirm">Confirm</button>
                                <button type="submit" name="sumt" class="btn1" value = "cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div style="margin-top: auto; margin-bottom: auto; margin-left: 13px;">
                <img class="img-avatar-rounded" src="./img/avatar.jpg" alt="Adri">
                <a class="navbar-brand me-auto mb-2 mb-lg-0" href="#"
                    style="color: #fff; margin-top: auto; margin-bottom: auto;">
                    Adriana Sandoval Salamanca</a>
            </div>
        </div>
    </div>
</body>

</html>