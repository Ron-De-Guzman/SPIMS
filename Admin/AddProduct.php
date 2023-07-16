<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Res/Style/CreateAcc.css">
    
    <title>Add Products</title>
    
</head>

<body> 
    
    <?php
    include 'Navigation/nav.php'
    ?>
    
 
       
    <div class="container">
    <form method="POST" action="addprodddb.php">
        <div id="HeaderH1">
        <h1>Add Product</h1>
        </div>
        
        <div>
            <label for="prodName"> Product Name </label></br>
            <input type="text" name="prodName" id="prodName" required>
        </div>

        <div>
            <label for="prodCat"> Product Category</label></br>
        <select name="Category" id="Category">
            <option value="Ballpen">Ballpen</option>
            <option value="BondPaper">Bond Paper</option> 
            <option value="Notebook">Notebook</option>
            <option value="Pencil">Pencil</option> 
            <option value="Paper">Paper</option>
            <option value="Eraser">Eraser</option> 
            <option value="Folder">Folder</option>
            <option value="Envelope">Envelope</option> 
            <option value="Tapes">Tapes</option>
            <option value="Board">Board</option> 
            <option value="ColoringMaterials">Coloring Materials</option>
        </select>
        </div>

        <div>
        </br><label for="purPrice"> Purchase Price </label></br>
            <input type="text" name="purPrice" id="purPrice" required>
        </div>
        <div>
            <label for="retPrice"> Retail Price </label></br>
            <input type="text" name="retPrice" id="retPrice" required>
        </div>

        <div>
            <label for="idlStks"> Ideal Stocks </label></br>
            <input type="number" name="idlStks" id="idlStks" required>
        </div>

        <div>
            <label for="availStks"> Available Stocks </label></br>
            <input type="text" name="availStks" id="availStks" required>
        </div>

        <div>
            <label for="asVal"> Available Stocks Value </label></br>
            <input type="number" name="asVal" id="asVal" required>
        </div>

        

       

        <div class="submitButton" id="submitbtn">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
        

    </form>
    </div>

</body>
</html>
