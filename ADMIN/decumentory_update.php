<?php

include("configration.php");
include("connection.php");
if (isset($_SESSION["admin"])) {
    $user_data = $_SESSION["admin"];
    $user_char = $user_data;
  }
  else{
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Documentory Update</title>
    <link rel="icon" href="logo_0005241.ico" type="image/x-icon">
    <link rel="stylesheet" href="sidebar.css?v=<?= $versionn ?>">
    <link rel="stylesheet" href="style.css?v=<?= $versionn ?>">

    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\css/all.min.css?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\css/all.css?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\js/all.min.js?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\js/all.js?v=<? $version ?>">
    <style>
                 
#loader-overlay {
	position: fixed;
	z-index: 9999;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: rgb(0, 0, 0);

  }
  
  #loader-video {
	max-width: 100%;
	max-height: 100%;
  }
  
  #content {
	display: none;
  }
        .gradient-text {
            background: linear-gradient(to right, gold, white, gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
            position: relative;
            font-size: 30px;
            font-weight: bold;
            font-family:'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">

        <div class="logo_name ">
            <a herf="Homepage.php"class="gradient-text">
              Prime&nbsp;Play
            </a>

            </div>            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul>

            <li class="list">
                <a href="Homepage.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="links_name">Homepage</span>
                </a>
                <span class="tooltip">Homepage</span>
            </li>

            <li class="list">
                <a href="chart.php">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li class="list">
                <a href="Documentory_upload.php">
                    <i class="fa-solid fa-file-arrow-up"></i>
                    <span class="links_name">Documentory Upload</span>
                </a>
                <span class="tooltip">Documentory Upload</span>
            </li>
            <li class="list active">
                <a href="documentory_update.php">
                    <i class="fa-solid fa-file-pen"></i>
                    <span class="links_name">Documentory Update</span>
                </a>
                <span class="tooltip">Documentory Update</span>
            </li>
            <li class="list">
                <a href="Documentory_detail.php">
                    <i class="fa-solid fa-circle-info"></i>
                    <span class="links_name">Documentory Details</span>
                </a>
                <span class="tooltip">Documentory Details</span>
            </li>

          
            <li class="list">
                <a href="User_details.php">
                    <i class="fa-solid fa-users-line"></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li class="list">
                <a href="message.php">
                    <i class="fa-regular fa-comment-dots fa-5x"></i>
                    <span class="links_name">message</span>
                </a>
                <span class="tooltip">message</span>
            </li>
            <li class="list">
                <a href="Logout.php">
                    <i class="fa-solid fa-circle-user"></i>
                    <span class="links_name">User logout</span>
                </a>
                <span class="tooltip">logout</span>
            </li>
            <li class="list">
                <a href="../FRONTED/index.php">
                    <i class="fa-solid fa-globe"></i>
                    <span class="links_name">Go TO Fronted</span>
                </a>
                <span class="tooltip">Go To Fronted</span>
            </li>
        </ul>
    </div>

    <?php

    $id = $_GET['id'];
    $query1 = "SELECT * FROM documentory_detail WHERE id = $id";


    $result1 = mysqli_query($connn, $query1);
    $row1 = mysqli_fetch_assoc($result1);
$_SESSION['idname'] = $row1['id'];

    ?>

    <section class="home-section">
        <div class="text">

            <div class="main_content">

                <div class="info">
                    <?php echo "  <form action='Documentory_uploading_back.php?id={$row1['id']}' method='POST' enctype='multipart/form-data'>";
                    ?>

                    <h1 class="dec_uploadertext" align="center">Update Page</h1>
                    <div class="uploader">


                        <div class="detail">
                            <table border="0">




                                <tr>
                                    <td>Title:
                                    </td>
                                    <td>
                                        <?php echo "        <textarea name='MovieTitle'  placeholder='All Title' id='' cols='30' rows='4'>" . $row1['title'] . "</textarea><br>" ?>


                                    </td>

                                </tr>
                                <tr>
                                    <td>Desciption
                                    </td>
                                    <td>
                                        <?php echo '         <textarea name="descrtiption"   placeholder="Add Description" id="" cols="30" rows="10">' . $row1["desciption"] . '</textarea><br>'; ?>



                                    </td>

                                </tr>
                                <tr>

                                <tr>
                                    <td>rating
                                    </td>
                                    <td>
                                        <input type="range" name="rating" id="slider" min="0" max="10">
                                        <span id="value"> <?php echo $row1["rating"]; ?> </span>



                                    </td>

                                </tr>



                                <?php
                                $count=0;
                                $sentence = $row1['type'];
                                $words = explode(",", $sentence);
                                $word_list = array();
                                foreach ($words as $word) {
                                    $word_list[] = trim($word);
                                }


                                $checkboxValues = array("drama", "action", "advanture", "comedy", "horror", "Romance", "science_fiction", "fantasy", "Historical", "Crime");



                                foreach ($checkboxValues as $value) {
                                    if (in_array($value, $word_list)) {

                                ?>

                                        <tr>
                                            <td>
                                                <?php echo $value; ?>

                                            </td>
                                            <td>
                                                <?php print_r("<input type='checkbox' class='myCheckbox' name='Videotype[]'  value='$value' checked>");$count++; ?>


                                            </td>

                                        </tr>

                                    <?php } else {
                                        // Set the checkbox as unchecked

                                    ?>

                                        <tr>
                                            <td>
                                                <?php echo $value; ?>

                                            </td>
                                            <td>
                                                <?php print_r("<input type='checkbox' class='myCheckbox' name='Videotype[]'  value='$value' >"); ?>


                                            </td>

                                        </tr>


                                <?php

                                    }
                                }

                                // If there were no matches, display the original string containing the checkbox values







                                // Example variable value
                                // Example array of checkbox values

                                // Loop through the checkbox values






                                ?>



                                <tr>
                                    <td>
                                        Duration

                                    </td>
                                    <td>
                                        <?php echo       "<input type='text' placeholder='Add Time' name='Duration' value='  " . $row1['duration'] . " 'id=''>"; ?>

                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        Year

                                    </td>
                                    <td>
                                        <input type="text" placeholder="Add Year" name="Year" value="<?php echo $row1['year']; ?>" id="">

                                    </td>

                                </tr>


                                <tr>
                                        <td>
                                            Cetegory

                                        </td>
                                        <td>
                                            <select name="options" id="options">
                                                <option  name="options" value="Science_fiction">Science_fiction</option>
                                                <option  name="options" value="History">History</option>
                                                <option  name="options" value="Nature">Nature</option>
                                                <option  name="options" value="Action">Action</option>
                                                <option  name="options" value="Horror">Horror</option>
                                                <option  name="options" value="Drama">Drama</option>

                                            </select>

                                        </td>

                                    </tr>
                            </table>










                        </div>

                        <div class="round">
                            <div class="images">
                                <p>background_Image</p>

                                <img class="background_upload" id="myImage" src="#" height="200px" width="250px" alt="">

                                <input type="file" id="myFileInput" name="background_image">


                            </div>
                            <div class="images">
                                <p>Thumnail</p>

                                <img class="background_upload" id="myImage2" src="#" height="200px" width="250px" alt="">

                                <input id="myFileInput2" type="file" name="thumbnail">



                            </div>
                            <div class="images">
                                <p>Verticle Thumnail2</p>

                                <img class="background_upload" id="myImage3" src="#" height="200px" width="250px" alt="">

                                <input id="myFileInput4" type="file" name="thumbnail2">



                            </div>
                            <div class="images">
                                <p>Video</p>
                                <video class="background_upload" id="myVideo" height="200px" width="250px" controls alt="">
                                    <source src="#" type="video/quicktime/mp4">
                                </video>




                            </div>

                            <div class="images">


                                <input type="file" id="myFileInput3" name="video">


                            </div>

                        </div>

                    </div>
                    <div class="submit" align="center">
                        <input type="submit" name="upload" value="Update">
                    </div>
                   <?php echo " </form>";?>
                </div>
            </div>
        </div>


    </section>



    <script>
        // Get the file input element and the image element
        var fileInput = document.getElementById('myFileInput');
        var fileInput2 = document.getElementById('myFileInput2');
        var fileInput4 = document.getElementById('myFileInput4');
        var fileInput3 = document.getElementById('myFileInput3');
        var image = document.getElementById('myImage');
        var image2 = document.getElementById('myImage2');
        var image4 = document.getElementById('myImage3');
        var video3 = document.getElementById('myVideo');

        // Add an event listener to the file input element
        fileInput.addEventListener('change', function() {
            // Create a URL for the selected file
            var file = fileInput.files[0];
            var url = URL.createObjectURL(file);

            // Set the src attribute of the image element to the URL
            image.src = url;
        });


        // Add an event listener to the file input element
        fileInput2.addEventListener('change', function() {
            // Create a URL for the selected file
            var file2 = fileInput2.files[0];
            var url2 = URL.createObjectURL(file2);

            // Set the src attribute of the image element to the URL
            image2.src = url2;
        });
        fileInput4.addEventListener('change', function() {
            // Create a URL for the selected file
            var file4 = fileInput4.files[0];
            var url4 = URL.createObjectURL(file4);

            // Set the src attribute of the image element to the URL
            image4.src = url4;
        });
        // Add an event listener to the file input element
        fileInput3.addEventListener('change', function() {
            // Create a URL for the selected file
            var file3 = fileInput3.files[0];
            var url3 = URL.createObjectURL(file3);

            // Set the src attribute of the image element to the URL
            video3.src = url3;
        });



        // Get all the checkboxes
        var checkboxes = document.querySelectorAll('.myCheckbox');

        // Add an event listener to each checkbox
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // Count how many checkboxes are checked
                var numChecked = <?php echo $count;?>;
                checkboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        numChecked++;
                    }
                });
var v= <?php echo $count;?>;
                // If three checkboxes are checked, disable all the other checkboxes
                if (v == 3 || numChecked == 4 || numChecked == 5 || numChecked == 6) {
                    checkboxes.forEach(function(checkbox) {
                        if (!checkbox.checked) {
                            checkbox.disabled = true;
                        }
                    });
                } else {
                    checkboxes.forEach(function(checkbox) {
                        checkbox.disabled = false;
                    });
                }
            });
        });

        let slider = document.getElementById("slider");
        let valueDisplay = document.getElementById("value");

        slider.addEventListener("input", function() {
            valueDisplay.innerHTML = slider.value;
        });

                

// Hide the loader overlay after 5 seconds
setTimeout(function() {
  var loaderOverlay = document.getElementById("loader-overlay");
  var video = document.getElementById("loader-video");
  var content = document.getElementById("content");

  // Hide the loader overlay and show the content
  loaderOverlay.style.display = "none";
  video.style.display = "none";
  content.style.display = "block";
}, 2000);
    </script>

    <script src="script.js"></script>
</body>

</html>