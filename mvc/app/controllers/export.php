<?php
//require_once '../core/Controller.php';

class Export extends Controller
{
    public function index($data='')
    {
        if(empty($_SESSION['userId'])){
            die("You must log in!");
        }
        $format=$data;
        if($format=='xml'){
            $this->export_xml();
        }else if($format=='json'){
            $this->export_json();
        }else if($format=='pdf'){
            $this->export_pdf();
        }else{
            die("Page not found!");
        }
    }
    public function export_pdf(){
        $pdf=$this->model('FPDF');
        $pdf->AddPage();
        $pdf->SetFont("Arial","B",16);
        $pdf->Cell(0,10,"Auctions situation:",0,1);

        $link = $this->auctiox_db_connect();
 
        $sql = $link->prepare('SELECT title,description,`condition`,keywords,brand,country,curr_price,next_price,expires_on FROM products WHERE is_active=1');
        $sql->execute();
        $sql->bind_result($titleRow,$descriptionRow,$conditionRow,$keywordsRow,$brandRow,$countryRow,$curr_priceRow,$next_priceRow,$expires_onRow);
        
        $pdf->SetFont("Arial","B",12);
        while($sql->fetch()){
            $pdf->Cell(0,10,"Title:" . $titleRow,0,1);
            $pdf->Cell(0,10,"Description:" . $descriptionRow,0,1);
            $pdf->Cell(0,10,"Condition:" . $conditionRow,0,1);
            $pdf->Cell(0,10,"Keywords:" . $keywordsRow,0,1);
            $pdf->Cell(0,10,"Brand:" . $brandRow,0,1);
            $pdf->Cell(0,10,"Country:" . $countryRow,0,1);
            $pdf->Cell(0,10,"Current price:" . $curr_priceRow,0,1);
            $pdf->Cell(0,10,"Next price:" . $next_priceRow,0,1);
            $pdf->Cell(0,10,"Expires on:" . $expires_onRow,0,1);

            $pdf->Cell(0,10,"",0,1);

        }
        
        $pdf->output();
    }
    public function export_json(){
        $link = $this->auctiox_db_connect();
 
        $sql = $link->prepare('SELECT title,description,`condition`,keywords,brand,country,curr_price,next_price,expires_on FROM products WHERE is_active=1');
        $sql->execute();
        $sql->bind_result($titleRow,$descriptionRow,$conditionRow,$keywordsRow,$brandRow,$countryRow,$curr_priceRow,$next_priceRow,$expires_onRow);
        $sql->fetch();
        $json_array=array();
        while($sql->fetch()){
            $row[]=array(
                'title' => $titleRow,
                'description' => $descriptionRow,
                'condition' => $conditionRow,
                'keywords' => $keywordsRow,
                'brand' => $brandRow,
                'countryRow' => $conditionRow,
                'curr_price' => $curr_priceRow,
                'next_price' => $next_priceRow,
                'expires_on' => $expires_onRow
            );  
        }
        echo json_encode($row);
        
        mysqli_close($link);
        
    }
    public function export_xml(){
        
        $link = $this->auctiox_db_connect();
 
        $sql = $link->prepare('SELECT title,description,`condition`,keywords,brand,country,curr_price,next_price,expires_on FROM products WHERE is_active=1');
        $sql->execute();
        $sql->bind_result($titleRow,$descriptionRow,$conditionRow,$keywordsRow,$brandRow,$countryRow,$curr_priceRow,$next_priceRow,$expires_onRow);
        
        $xml=new DOMDocument("1.0");
        $xml->formatOutput=true;
        $auctions=$xml->createElement("auctions");
        $xml->appendChild($auctions);

        while($sql->fetch()){
            $auction=$xml->createElement("auction");
            $auctions->appendChild($auction);
            $title=$xml->createElement("title",$titleRow);
            $auction->appendChild($title);
            $description=$xml->createElement("description",$descriptionRow);
            $auction->appendChild($description);
            $condition=$xml->createElement("condition",$conditionRow);
            $auction->appendChild($condition);
            $keywords=$xml->createElement("keywords",$keywordsRow);
            $auction->appendChild($keywords);
            $brand=$xml->createElement("brand",$brandRow);
            $auction->appendChild($brand);
            $country=$xml->createElement("country",$countryRow);
            $auction->appendChild($country);
            $curr_price=$xml->createElement("current_price",$curr_priceRow);
            $auction->appendChild($curr_price);
            $next_price=$xml->createElement("next_price",$next_priceRow);
            $auction->appendChild($next_price);
            $expires_on=$xml->createElement("expires_on",$next_priceRow);
            $auction->appendChild($expires_on);
        }
        echo "<xmp>".$xml->saveXML()."</xmp>";
        mysqli_close($link);
    }

}