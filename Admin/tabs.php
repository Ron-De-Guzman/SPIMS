<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SPIMS</title>
    <link rel="stylesheet" type="text/css" href="Res/Style/tabs.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" href="Res/Style/inventory.css">
</head>

<body>
    <?php
    include 'Navigation/nav.php';
    include 'inventorydb.php';


    ?>

    <div class="tabContainer">
        <div class="buttonContainer">
            <button onclick="showPanel(0,'#B28DFF')">Pencil</button>
            <button onclick="showPanel(1,'#97A2FF')">Ballpen</button>
            <button onclick="showPanel(2,'#B28DFF')">Bond Paper</button>
            <button onclick="showPanel(3,'#97A2FF')">Eraser</button>
            <button onclick="showPanel(4,'#B28DFF')">Notebook</button>
            <button onclick="showPanel(5,'#97A2FF')">Paper</button>
            <button onclick="showPanel(6,'#B28DFF')">Coloring Materials</button>
            <button onclick="showPanel(7,'#97A2FF')">Folder</button>
            <button onclick="showPanel(8,'#B28DFF')">Envelope</button>
            <button onclick="showPanel(9,'#97A2FF')">Tapes</button>
            <button onclick="showPanel(10,'#B28DFF')">Board</button>


        </div>

        <div class="tabPanel">
            <?php
            include 'tablehead.php';

            ?>

            <caption>Pencil</caption>
            <?php
            if ($pencil->num_rows > 0) {

                while ($row = $pencil->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>
        <div class="tabPanel">
            <?php
            include 'tablehead.php';
            ?>
            <caption>Ballpen</caption>
            <?php
            if ($ballpen->num_rows > 0) {

                while ($row = $ballpen->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>
        <div class="tabPanel">
            <?php
            include 'tablehead.php';
            ?>
            <caption>Bond Paper</caption>
            <?php
            if ($bondpaper->num_rows > 0) {

                while ($row = $bondpaper->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>
        <div class="tabPanel">
            <?php
            include 'tablehead.php';
            ?>

            <caption>Eraser</caption>

            <?php
            if ($eraser->num_rows > 0) {

                while ($row = $eraser->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>
        <div class="tabPanel">
            <?php
            include 'tablehead.php';

            ?>

            <caption>Notebook</caption>

            <?php
            if ($notebook->num_rows > 0) {

                while ($row = $notebook->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>
        <div class="tabPanel">
            <?php
            include 'tablehead.php';
            ?>
            <caption>Paper</caption>
            <?php
            if ($paper->num_rows > 0) {

                while ($row = $paper->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>


        <div class="tabPanel">
            <?php
            include 'tablehead.php';
            ?>


            <caption>Coloring Materials</caption>
            <?php
            if ($color->num_rows > 0) {

                while ($row = $color->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>


            </table>
        </div>


        <div class="tabPanel">
            <?php
            include 'tablehead.php';
            ?>

            <caption>Folder</caption>

            <?php
            if ($folder->num_rows > 0) {

                while ($row = $folder->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>
        <div class="tabPanel">
            <?php
            include 'tablehead.php';
            ?>
            <caption>Envelope</caption>
            <?php
            if ($envelope->num_rows > 0) {

                while ($row = $envelope->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>


        <div class="tabPanel">
            <?php
            include 'tablehead.php';
            ?>
            <caption>Tapes</caption>
            <?php
            if ($tapes->num_rows > 0) {

                while ($row = $tapes->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>
        <div class="tabPanel"><?php
                                include 'tablehead.php';
                                ?>
            <caption>Board</caption>
            <?php
            if ($board->num_rows > 0) {

                while ($row = $board->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $row['ProdName']; ?></td>
                        <td><?php echo $row['PurPrice']; ?></td>
                        <td><?php echo $row['RetailPrice']; ?></td>
                        <td><?php echo $row['IdealStocks']; ?></td>
                        <td><?php echo $row['AvailStocks']; ?></td>
                        <td><?php echo $row['AvailStockVal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ProdName']; ?>">Edit</a>
                            <a href="deletedb.php?id=<?php echo $row['ProdName']; ?>">Delete</a>
                        </td>
                    </tr>
                    <!--#echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";-->
            <?php
                }
                echo "</table>";
            } else {

                echo "<tr><td>" . "0 result" . "</td><td>";
            }
            ?>

            </tbody>
            </table>
        </div>






    </div>

    <script src="Res/Style/tabs.js"></script>
</body>

</html>