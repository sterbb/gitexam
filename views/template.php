<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Exam</title>
    <!-- fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- tailwind -->
    <link rel="stylesheet" href="views/assets/css/tailwind.output.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <!-- date picker -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.3/dist/datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
    <!-- end of CDN -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="/views/assets/js/charts-lines.js" defer></script>
    <script src="/views/assets/js/charts-pie.js" defer></script> -->
    <script src="views/assets/js/focus-trap.js "></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>
    <?php
        echo '<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ \'overflow-hidden\': isSideMenuOpen }">';
            include "modules/sidebar.php";
                echo '<div class="flex flex-col flex-1 w-full">';
                    include "modules/header.php";
                    if(isset($_GET["route"])){
                        if($_GET["route"] == 'student' ||
                          $_GET["route"] == 'employee' ||
                          $_GET["route"] == 'studenttable' ||
                          $_GET["route"] == 'employeetable'){
                            include "modules/".$_GET["route"].".php";
                        }else{
                            include "modules/404.php";
                        }
                    }else{
                        include "modules/student.php";
                    }



                echo '</div>';
        echo '</div>';
    ?>
    

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="views/assets/js/init-alpine.js"></script>
    <script src="views/js/student.js"></script>         
    <script src="views/js/employee.js"></script>  
    <script src="views/helpers/helpers.js"></script>
            
</body>
</html>