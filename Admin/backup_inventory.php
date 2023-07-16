<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Res/Style/Dashboard.css">
    <link rel="stylesheet" href="Res/Style/inventory.css">
    <title>Document</title>
</head>

<body>
    <?php
    include 'Navigation/nav.php';
    include 'inventorydb.php';


    ?>

    <div class="container">
        <?php
        include 'tablehead.php';
        ?>
        <caption>Pencil</caption>
        <?php
        if ($pencil->num_rows > 0) {

            while ($row = $pencil->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>



        <?php
        include 'tablehead.php';
        ?>
        <caption>Ballpen</caption>
        <?php
        if ($ballpen->num_rows > 0) {

            while ($row = $ballpen->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>


        <?php
        include 'tablehead.php';
        ?>
        <caption>Bond Paper</caption>
        <?php
        if ($bondpaper->num_rows > 0) {

            while ($row = $bondpaper->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>



        <?php
        include 'tablehead.php';
        ?>

        <caption>Eraser</caption>

        <?php
        if ($eraser->num_rows > 0) {

            while ($row = $eraser->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>


        <?php
        include 'tablehead.php';

        ?>

        <caption>Notebook</caption>

        <?php
        if ($notebook->num_rows > 0) {

            while ($row = $notebook->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>


        <?php
        include 'tablehead.php';
        ?>
        <caption>Paper</caption>
        <?php
        if ($paper->num_rows > 0) {

            while ($row = $paper->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>

        <?php
        include 'tablehead.php';
        ?>
        <caption>Coloring Materials</caption>
        <?php
        if ($color->num_rows > 0) {

            while ($row = $color->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>

        <?php
        include 'tablehead.php';
        ?>

        <caption>Folder</caption>

        <?php
        if ($folder->num_rows > 0) {

            while ($row = $folder->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>


        <?php
        include 'tablehead.php';
        ?>
        <caption>Envelope</caption>
        <?php
        if ($envelope->num_rows > 0) {

            while ($row = $envelope->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>



        <?php
        include 'tablehead.php';
        ?>


        <caption>Materials</caption>
        <?php
        if ($materials->num_rows > 0) {

            while ($row = $materials->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>


        </table>



        <?php
        include 'tablehead.php';
        ?>



        <caption>Books</caption>
        <?php
        if ($books->num_rows > 0) {

            while ($row = $books->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>



        <?php
        include 'tablehead.php';
        ?>
        <caption>Tapes</caption>
        <?php
        if ($tapes->num_rows > 0) {

            while ($row = $tapes->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>



        <?php
        include 'tablehead.php';
        ?>
        <caption>Board</caption>
        <?php
        if ($board->num_rows > 0) {

            while ($row = $board->fetch_assoc()) {

                echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["PurPrice"] . "</td><td>" . $row["RetailPrice"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["AvailStockVal"] . "</td></tr>";
            }
            echo "</table>";
        } else {

            echo "<tr><td>" . "0 result" . "</td><td>";
        }
        ?>

        </tbody>
        </table>

    </div>
</body>

</html>