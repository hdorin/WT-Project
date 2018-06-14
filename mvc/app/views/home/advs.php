<?php

require_once 'header.php';
?>
<!--if urlempty draw search and custom_serach-->
<!--if not empty display itemsbased on link-->
<!--<form action="advs">-->
    <link rel="stylesheet" href="resources/stylesheets/products.css" type="text/css"/>

    <script>
        function src(st){
            print( document.getElementById("st").value);
        }
    </script>
    <script>
        function showProducts(str) {
            // if (str === "") {
            //     document.getElementById("txtHint").innerHTML = "";
            //     return;
            // }
            // let xmlhttp;
            // if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
            // else { // code for IE6, IE5
            //     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            // }
            // xmlhttp.onreadystatechange = function () {
            //     if (this.readyState === 4 && this.status === 200) {
            //         document.getElementById("txtHint").innerHTML = this.responseText;
            //     }
            // };
            // xmlhttp.open("GET", "search_response?q=" + document.getElementById("MaxVal").value, true);
            // xmlhttp.send();
            src("TBCLR","PLS WORK BOYZ");
        }
    </script>
    <script>
        function clearBox()
        {


            var checkBox_C1 = document.getElementById("C1");
            var checkBox_C2 = document.getElementById("C2");
            var checkBox_C3 = document.getElementById("C3");
            var checkBox_S1 = document.getElementById("S1");
            var checkBox_S2 = document.getElementById("S2");
            var Max_price = document.getElementById("MaxVal");
            var Min_price = document.getElementById("MinVal");
            var ctr_chose = document.getElementById("country");
            // Get the output text
            // var text = document.getElementById("text");
            var C1_Value="";
            var C2_Value="";
            var C3_Value="";
            var S1_Value="";
            var S2_Value="";
            var Mi_Value="";
            var Ma_Value="";
            var ctr_chosen="";

            if (checkBox_C1.checked == true){C1_Value=C1.value;}
            if (checkBox_C2.checked == true){C2_Value=C2.value;}
            if (checkBox_C3.checked == true){C3_Value=C3.value;}
            if (checkBox_S1.checked == true){S1_Value=S1.value;}
            if (checkBox_S2.checked == true){S2_Value=S2.value;}
            Ma_Value=MaxVal.value;
            Mi_Value=MinVal.value;
            ctr_chosen=ctr_chose.value;

            s=window.location.search;
            document.getElementById('TBCLR').innerHTML =C1_Value+"\n"+C2_Value+"\n"+C3_Value+"\n"+S1_Value+"\n"+S2_Value+"\n"+Mi_Value+"\n"+Ma_Value+"\n"+ctr_chosen+"\n"+s ;



            let xmlhttp;
            if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
            else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "search_response"+s+"&Q1="+C1_Value+"&Q2="+C2_Value+"&Q3="+C3_Value+"&S1="+S1_Value+"&S2="+S2_Value+"&MN="+Mi_Value+"&MA="+Ma_Value+"&CTCHO="+ctr_chosen, true);
            xmlhttp.send();




        }
    </script>

        <div class="lgdLiv">
            <div class="pad">
                <table>
<!--                    <tr>-->
<!--                        <table>-->
<!---->
<!--                            <tr>-->
<!--                                <th class="table_title" style="text-align: left">-->
<!--                                    Search by Price-->
<!--                                </th>-->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <label for="money_sort1"><input type="checkbox" id="money_sort1" name="money_sort1" value="asc"/></label>-->
<!--                                    <label class="advSlbl">Ascending</label>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <input type="checkbox" id="money_sort2" name="money_sort2" value="desc"/>-->
<!--                                    <label class="advSlbl">Descending</label>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <td></td>-->
<!---->
<!--                        </table>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <table>-->
<!--                            <tr>-->
<!--                                <th class="table_title" style="text-align: left">Sort by time</th>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <input type="checkbox" value="lessd">-->
<!--                                    <label class="advSlbl">Less then a day</label>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <input type="checkbox" value="lessw">-->
<!--                                    <label class="advSlbl">Less then a week</label>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <input type="checkbox" value="mw">-->
<!--                                    <label class="advSlbl">More then a week</label>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </tr>-->
                    <tr>
                        <table>
                            <tr>
                            </tr>
                            <tr>
                                <th class="table_title" style="text-align: left">Search by Condition</th>
                            </tr>
                            <td>
                                <input type="checkbox" id="C1" value="bc">
                                <label class="advSlbl">Bad Condition</label>
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="C2" value="gc">
                                    <label class="advSlbl">Good Condition</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="C3" value="ln">
                                    <label class="advSlbl">Like New</label>
                                </td>
                            </tr>
                        </table>
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <th class="table_title" style="text-align: left">Free shiping</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="S1" value="fs">
                                    <label class="advSlbl">With free shiping</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="S2" value="wfs">
                                    <label class="advSlbl">Without free shiping</label>
                                </td>
                            </tr>
                        </table>
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <th class="table_title" style="text-align: left">Min value:</th>
                            </tr>
                            <td>
                                <input type="number" min="0" max="999999" name="MinVal" id="MinVal">
                            </td>
                        </table>
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <th class="table_title" style="text-align: left">Max value:</th>
                            </tr>
                            <td>
                                <input type="number" min="0" max="999999" name="MinVal" id="MaxVal">
                            </td>
                        </table>
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <th class="table_title" style="text-align: left">Country</th>
                            </tr>
                            <td>
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "auctiox_db";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $database);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                else {
                                    $sql = "SELECT DISTINCT country FROM products;";
                                    $result = $conn->query ($sql);
                                    $DB_country = " ";
                                if ($result) {
//                                    $DB_country =$DB_country+ "<select name=\"country\" id=\"country\">";
                                    echo "<select name=\"country\" id=\"country\">";
//                                    if($result){ echo  "ya";}
//                                    else{echo "no";}
                                    echo "<option value=\"NONE\">NONE</option>";
                                    while ($row = $result->fetch_assoc()) {
//                                        echo '<option value="' + $row + '">' + $row + '</option>';
                                        echo "<option value=\"".$row['country']."\">".$row['country']."</option>";
                                    }
                                    echo "</select>";
                                }

                                    $conn->close ();
                                }
                                ?>
                            </td>
                        </table>
                    </tr>
                    <tr>
                        <table><tr>
                                <button onclick="clearBox('TBCLR');showProducts();" class="sort_btn" value="text" >SORT</button>
                            </tr></table>
                    </tr>
                </table>
            </div>
        </div>

<?php
//    echo $_GET['src']

?>
<!--        <div id="TBCLR">-->
<!--    --><?php
//    $servername = "localhost";
//    $username = "root";
//    $password = "";
//    $database = "auctiox_db";
////echo $_GET['src'];
//    // Create connection
//    $conn = new mysqli($servername, $username, $password, $database);
//    if(strpos($_SERVER['QUERY_STRING'],"src")) {
////        echo "this is src";
////        echo $_querry;
////        echo "end_src";
//        // Check connection
//
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        } else {
//            $keyword=$_GET['src'];
//            $sql = 'SELECT * FROM products WHERE 1 ';
//            $result = $conn->query ($sql);
//            $DB_country = " ";
//            if ($result) {
//                //                                    $DB_country =$DB_country+ "<select name=\"country\" id=\"country\">";
//                echo "<div>";
//                //                                    if($result){ echo  "ya";}
//                //                                    else{echo "no";}
//                while ($row = $result->fetch_assoc ()) {
//                    //                                        echo '<option value="' + $row + '">' + $row + '</option>';
//                    echo "<option value=\"" . $row['country'] . "\">" . $row['country'] . "</option>";
//                }
//                echo "</div>";
//            }
//            else {
//                echo "No Such Items Found!";
//            }
//            $conn->close ();
//        }
//    }
//        ?>
<!--</div>-->



    <div id="TBCLR">
        <?php
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        // Create connection
//        echo $_GET['src'];
        if(strpos($_SERVER['QUERY_STRING'],"src")) {
            $conn = new mysqli("localhost", "root", "", "auctiox_db");
            if ($conn->connect_error) {
                die ("Connection Failed");
            } else {

                $t ='%'.$_GET['src'].'%';
                $t=str_replace (" ","%",$t);
                $stmt = $conn->prepare ('SELECT * FROM products WHERE keywords LIKE ? OR title LIKE ?');
                echo $t."<br>";
                ;
                $stmt->bind_param ("ss", $t,$t);
                $stmt->execute ();

                    $results = $stmt->get_result ();
                    echo "<br>".$results->num_rows."<br>";
                    if ($results->num_rows>0) {
                        echo "we got results<br>";
                        foreach ($results as $row)
                            echo $row["title"];
                        }

                }
            }

        ?>
    </div>
<?php//$_GET['money_sort1']?>
        <div id="txtHint"></div>
<!--<!--    <div class="se
<?php
//
//echo $_SERVER['QUERY_STRING']
//?>
<?php
//echo $_SERVER['QUERY_STRING'];
//echo '<br>';
//echo $_GET['url'];
//if(strpos($_GET['url'],'advs')!==false)
//    echo '               ';
//
//
//echo $_GET['src'];
//?>
<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "auctiox_db";
//
//// Create connection
//$conn = mysqli_connect ($servername, $username, $password, $dbname);
//// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error ());
//}
//
//
//echo $_GET['src'];
//$sql = "SELECT id,title,description,is_active FROM products where title like ". $_GET['q'] ;
//
//if (isset($_GET['submit1']))
//    echo 'button pressed';
//
//
//$result = mysqli_query ($conn, $sql);
//
//if (mysqli_num_rows ($result) > 0) {
//    // output data of each row
//    while ($row = mysqli_fetch_assoc ($result)) {
//        echo '<h3>' .$row["id"] .  '</h3>';
//        echo " id: " . $row["id"] . " - title: " . $row["title"] . " - description " . $row["description"] . " -is_active " . $row["is_active"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}
//?>
<?php

require_once 'footer.php';

?>