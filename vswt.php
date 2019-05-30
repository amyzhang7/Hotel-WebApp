<?php

require('db.php');

// 2. Do a query
$query  = "SELECT id, staffname, stimes, etimes "; 
$query .= "FROM vswt ";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");

}
?>
    
    <!doctype html>
<html lang="en">

<head>
    <title>View Staff Work Times</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        @font-face {
            font-family: Atlantic Inline;
            src: url('Atlantic Inline.otf'),
                url('Atlantic Inline.TTF');
        }

        @font-face {
            font-family: Fashion Engraved Std;
            src: url('FashionEngravedStd_0.otf')
        }

        @font-face {
            font-family: Romance Fatal Serif Std;
            src: url('Romance Fatal Serif Std.ttf')
        }

        nav a {
            font-family: Atlantic Inline;

        }

        h1 {
            color: #a29061;
            font-family: Atlantic Inline;
        }

        h5 {
            font-family: Atlantic Inline;
        }

        .carousel-inner img {
            width: 100%;
            height: 30%;
        }

        .container {
            color: #a29061 !important;
        }

        a {
            color: #FFFFFF !important;
        }

        a:hover {
            color: #333333 !important;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
</head>

<body style="background-color:#efebe9" oncontextmenu=self.event.returnValue=false>
    <div class="jumbotron jumbotron-fluid" style="background-color:#333333; margin-bottom: 0">
        <div class="container">
            <h2 class="display-4">AI Royal Prince Hotel----Manager Website</h2>
                <p class="lead"></p>
        </div>
    </div>
    <table class="text-dark table-hover table-bordered col-md-8">
     <legend>Worker Times</legend>
     <tr>
     <td>ID</td>
     <td>Department</td>
     <td>Work Strat Times</td> 
     <td>Work End Times</td>    
     </tr>          
            
            <?php
     
// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" , $row["id"] . "</td>";
    echo "<td>" , $row["staffname"] . "</td>";
    echo "<td>" , $row["stimes"] ."</td>";
    echo "<td>" , $row["etimes"] ."</td>";
    "</td>";
    
}
?>

  
<?php

// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);

?>