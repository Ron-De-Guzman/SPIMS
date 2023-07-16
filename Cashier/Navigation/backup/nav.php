<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu using HTML, CSS</title>
   

    <!---Stycle-->
    <link rel="stylesheet" href="navigation.css">
    
</head>
<body>
    
    <div class="wrapper">
        <!---sidebar-->
        <div class="sidebar">
            <div class="sidebar_logo">
                <img src="img/favicon.png" alt="codingscape">
                <a href="#"> SPIMS</a>
            </div>
            <ul class="sidebar_items">
                <div class="sidebar-toggle">
                    <i class='bx bxs-chevron-left'></i>
                    <p>Hide Sidebar</p>
            </div>
                <li class="sidebar_items_list">
                    <a href="home.php" class="sidebar_nav_item"> 
                        <i class='bx bx-home-alt-2'></i>
                     <p>Dashboard</p>
                    </a>
                </li>
                <li class="sidebar_items_list_info">
                    <span>Stationery Products Inventory System</span>
                </li>
                
                <li class="sidebar_items_list">
                    <a href="#" class="sidebar_nav_item"> 
                        <i class='bx bxs-dashboard' ></i>
                        <p>Purchase</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="#" class="sidebar_nav_item"> 
                        <i class='bx bxs-calendar' ></i>
                        <p>Sales</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="#" class="sidebar_nav_item"> 
                        <i class='bx bxs-conversation' ></i>
                        <p>Stocks</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="#" class="sidebar_nav_item"> 
                        <i class='bx bx-task' ></i>
                        <p>Report</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="CreateAcc.php" class="sidebar_nav_item"> 
                        <i class='bx bx-log-out' ></i>
                        <p>Create Account</p>
                    </a>
                </li>
                
                <li class="sidebar_items_list">
                    <a href ="AdminLogin.php" class="sidebar_nav_item" > 
                        <i class='bx bx-log-out' ></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
            
        </div> 
        <script src="navigation.js"></script>
        