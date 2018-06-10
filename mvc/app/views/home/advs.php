<?php

require_once 'header.php';
?>
<!--if urlempty draw search and custom_serach-->
<!--if not empty display itemsbased on link-->
<!--<form action="advs">-->


    <script>
        function getElem(st){
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
        function src(str)
        {
            s=window.location.search.split('+');
            document.getElementById('TBCLR').innerHTML = s;
        }
    </script>

        <div class="lgdLiv">
            <div class="pad">
<!--                <form  method="get">-->
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
                                <input type="checkbox" value="bc">
                                <label class="advSlbl">Bad Condition</label>
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" value="gc">
                                    <label class="advSlbl">Good Condition</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" value="ln">
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
                                    <input type="checkbox" value="fs">
                                    <label class="advSlbl">With free shiping</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" value="wfs">
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
                                <input type="text" name="MinVal" id="MinVal">
                            </td>
                        </table>
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <th class="table_title" style="text-align: left">Max value:</th>
                            </tr>
                            <td>
                                <input type="text" name="MinVal" id="MaxVal">
                            </td>
                        </table>
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <th class="table_title" style="text-align: left">Country</th>
                            </tr>
                            <td>

<!--                                <select name="country" id="country">-->
<!--                                    <option value="volvo">Volvo</option>-->
<!--                                    <option value="saab">Saab</option>-->
<!--                                    <option value="fiat">Fiat</option>-->
<!--                                    <option value="audi">Audi</option>-->
<!--                                </select>-->
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
                                    while ($row = $result->fetch_assoc()) {
//                                        echo '<option value="' + $row + '">' + $row + '</option>';
                                        echo "<option value=\"".$row['country']."\">".$row['country']."</option>";
                                    }
                                    echo "</select>";
//                                    echo $DB_country;
                                }
                                    echo $DB_country;
                                    $conn->close ();
                                }




                                ?>
                            </td>
                        </table>
                    </tr>
                    <tr>
<!--                        <form>-->
<!--                        <table><Button type="submit" class="sort_btn">Sort</Button></table>-->
                        <table><tr>
                                <button onclick="clearBox('TBCLR');showProducts();" class="sort_btn" value="text" >SORT</button>
                            </tr></table>
<!--                        </form>-->
                    </tr>
                </table>
<!--                </form>-->
            </div>
        </div>
<div id="TBCLR"> <?php echo 'some textgoes here hope it will dissapear' ?></div>
<?php//$_GET['money_sort1']?>
<!---->
        <div id="txtHint"></div>
<!--<!--    <div class="searchbarUnit">-->-->
<!--<!--        <div class="form-wrapper">-->-->
<!--<!--            <input type="text" placeholder="What are you looking for?" name="src" id="src" required>-->-->
<!--<!--            <button  type="submit"  >Search</button>-->-->
<!--<!--        </div>-->-->
<!--<!--    </div>-->-->
<!--<!--</form>-->-->
<!---->
<!--<div id="txtHint">-->
<!--    <p>here is texthint.</p>-->
<!--</div>-->
<!---->
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