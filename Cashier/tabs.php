
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SPIMS</title>
    <link rel="stylesheet" type="text/css" href="Res/Style/tabs.css">
	<link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" href="Res/Style/inventory.css">
</head>
<body >
<?php       
     include 'Navigation/nav.php';
     include 'inventorydb.php';
     
   
    ?>
 
<div class="tabContainer">
    <div class="buttonContainer">
        <button onclick="showPanel(0,'#D5AAFF')">Pencil</button>
        <button onclick="showPanel(1,'#B2B2B2')">Ballpen</button>
        <button onclick="showPanel(2,'#DA70FA')">Bond Paper</button>
        <button onclick="showPanel(3,'#8A2BE2')">Eraser</button>
        <button onclick="showPanel(4,'#B28DFF')">Notebook</button>
        <button onclick="showPanel(5,'#97A2FF')">Paper</button>
        <button onclick="showPanel(6,'#D5AAFF')">Coloring Materials</button>
        <button onclick="showPanel(7,'#B2B2B2')">Folder</button>
        <button onclick="showPanel(8,'#DA70FA')">Envelope</button>
        <button onclick="showPanel(9,'#8A2BE2')">Tapes</button>
        <button onclick="showPanel(10,'#B28DFF')">Board</button>
      
       
    </div>
    
            <div class="tabPanel">
            <?php
                            include 'tablehead.php';
                            ?>
                                  <caption>Pencil</caption>
                                        <?php
                               if ($pencil -> num_rows > 0 ) {

                                while($row = $pencil-> fetch_assoc()){
                                
                                echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($ballpen -> num_rows > 0 ) {

                                while($row = $ballpen-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($bondpaper -> num_rows > 0 ) {

                                while($row = $bondpaper-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($eraser -> num_rows > 0 ) {

                                while($row = $eraser-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($notebook -> num_rows > 0 ) {

                                while($row = $notebook-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($paper -> num_rows > 0 ) {

                                while($row = $paper-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($color -> num_rows > 0 ) {

                                while($row = $color-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($folder -> num_rows > 0 ) {

                                while($row = $folder-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($envelope -> num_rows > 0 ) {

                                while($row = $envelope-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($tapes -> num_rows > 0 ) {

                                while($row = $tapes-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                    echo "<tr><td>"."0 result"."</td><td>";
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
                               if ($board -> num_rows > 0 ) {

                                while($row = $board-> fetch_assoc()){
                                
                                    echo"<tr><td>".$row["ProdName"]."</td><td>".$row["PurPrice"]."</td><td>".$row["RetailPrice"]."</td><td>".$row["IdealStocks"]."</td><td>".$row["AvailStocks"]."</td><td>".$row["AvailStockVal"]."</td></tr>";
                                }
                                echo "</table>";
                                }
                                else{

                                echo "<tr><td>"."0 result"."</td><td>";
                                }
                                ?>
                                    
                                </tbody>
                            </table></div>

       
       
           
   
 
</div>

<script src="Res/Style/tabs.js"></script>
</body>
</html>
    
    