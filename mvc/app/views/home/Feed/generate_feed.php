<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/23/2018
 * Time: 10:42 PM
 */

$feed_type = $_GET['q'];

$result = $data['result'];


if($feed_type == 'RSS') {

    echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\">\n";

    echo "<channel>
  <title>AuctioX Home Page</title>
  <link>https://www.localhost.com</link>
  <description>Auction Web Site</description>\n";


    foreach ($result as $d) {

        foreach ($d as $s) {
            $id = $s['product_id'];
            $title = $s['title'];
            $desc = $s['description'];
            $state = $s['is_active'];

            echo "  <item>\n";
            echo "      <title>$title</title>
      <description>$desc</description>
      <state>$state</state>
      <link>link</link>\n";
            echo "  </item> \n";
        }
    }
    echo "</channel>";

    exit();
}

if($feed_type == 'Atom') {

    echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<atom version=\"2.0\">\n";

    $d = new DateTime();
    $last_update = date('Y-m-d H:i:s', $d->getTimestamp());

    echo "<channel>
  <title>AuctioX Home Page</title>
  <link href = \"https://www.localhost.com\"/>
  <description>Auction Web Site</description>
  <updated>$last_update</updated>\n";

    echo "  
  <author>
    <name>Auctiox</name>
    <email>auctiox@example.com</email>
  </author>\n\n";


    foreach ($result as $d) {

        foreach ($d as $s) {
            $id = $s['product_id'];
            $title = $s['title'];
            $desc = $s['description'];
            $state = $s['is_active'] == 1 ? 'active' : 'inacvtive';
            $link = "localhost/product?id=$id";
            $db_last_update = 'db_product_last_update';

            echo "  <entry>\n";
            echo "      <title>$title</title>
      <summary>$desc</summary>
      <state>$state</state>
      <link href = $link/>
      <updated>$db_last_update</updated>\n";
            echo "  </entry> \n";
        }
    }
    echo "</channel>";

    exit();
}
