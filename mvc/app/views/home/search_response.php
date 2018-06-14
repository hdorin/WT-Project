<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="resources/stylesheets/app.css" type="text/css" />
    <link rel="stylesheet" href="resources/stylesheets/searchbar.css" type="text/css" />
    <link rel="stylesheet" href="resources/stylesheets/abt.css" type="text/css" />
    <link rel="stylesheet" href="resources/stylesheets/products.css" type="text/css" />
</head>
<body>
<div class="product" >
    <a href="#">
        <img src="html.jpg" alt="cevapoza" />
        <h2>Title product</h2>
    </a>
    <div id="desc" class="desc" onclick="coll()">
        This is some long text that will not fit in the box. This is some long text that will not fit in the box.
    </div>

    <div>
        <p>Tags</p>
        <p>Expiration Date - xx-xx-xxxx</p>
    </div>
    <p>Price - ??$</p>
    <button>Bid</button>
</div>
<?php
    echo "<br><br>";
    echo "SRV QUERR" . $_SERVER['QUERY_STRING'];
    echo "<br><br>";
    $srv = $_SERVER['QUERY_STRING'];
    if (strpos ($_SERVER['QUERY_STRING'], "&src")) {
//        echo "WE GOT SRC<br><br>";
//        if ($_GET['src']) echo "SRC NOT EMPTY?<br><br>";
        $q = explode ("&", $srv);
        $Bad_cond = $_GET["Q1"];
        $Good_cond = $_GET["Q2"];
        $New_cond = $_GET["Q3"];
        $Min_value=$_GET["MN"];
        $Max_value=$_GET["MA"];
        $country=$_GET["CTCHO"];
        $TEST_COND=$Bad_cond.$Good_cond.$New_cond;

        echo $Bad_cond;
        echo $Good_cond;
        echo $New_cond;
        if($TEST_COND == ''){
                echo "EMPTY";
            $Bad_cond="Bad";
            $Good_cond="Good";
            $New_cond="Like New";

        }
        if($Max_value==''){
            $Max_value=999999;
        }
        if($Min_value==''){
            $Min_value=0;
        }
        if($Max_value<$Min_value){
            $ss=$Max_value;
            $Max_value=$Max_value;
            $Min_value=$ss;
        }

        $conn = new mysqli("localhost", "root", "", "auctiox_db");
        if ($conn->connect_error) {
            die ("Connection Failed");
        } else {


            $t = '%' . $_GET['src'] . '%';
            $t = str_replace (" ", "%", $t);
            if ($country="NONE") {

//                $stmt = $conn->prepare ('SELECT * FROM products WHERE keywords LIKE ? AND (`condition` =? OR `condition` =? OR `condition` =?) AND curr_price=>?  AND curr_price<=?')
//                $stmt->bind_param ("ssssii", $t, $Bad_cond, $Good_cond, $New_cond, $Min_value, $Max_value);
                $stmt = $conn->prepare ('SELECT * FROM products WHERE (keywords LIKE ?  OR title LIKE ?)AND (`condition`=? OR `condition`=? OR `condition`=?) AND `curr_price`>=? AND `curr_price`<=?');
                echo 'SELECT * FROM products WHERE keywords LIKE ? AND `condition`=? ';
                $stmt->bind_param ("sssssii", $t,$t,$Good_cond,$Bad_cond,$New_cond,$Min_value,$Max_value);


            }
            else{
                $stmt = $conn->prepare ('SELECT * FROM products WHERE (keywords LIKE ?  OR title LIKE ?)AND (`condition`=? OR `condition`=? OR `condition`=?) AND `curr_price`>=? AND `curr_price`<=? AND `country`=?');
                echo 'SELECT * FROM products WHERE keywords LIKE ? AND `condition`=? ';
                $stmt->bind_param ("sssssiis", $t,$t,$Good_cond,$Bad_cond,$New_cond,$Min_value,$Max_value,$country);
            }
            $stmt->execute ();

            $results = $stmt->get_result ();
            echo "<br>" . $results->num_rows . "<br>";
            if ($results->num_rows > 0) {
                echo "we got results<br>";
                foreach ($results as $row)
                    echo $row["country"];
            }

        }
    }
?>

</body>
</html>
