<?php
    include('templates/_header.php');

    echo '<svg height="300px" width="500px">';
    
    // LES RECTANGLES 
    $RectangleBleu=new Rectangle(50,150,'#318CE7',0.5); 
    // $RectangleBleu->DonnerParam('50px','150px','60px','80px','#318CE7',0.5);
    $RectangleBleu->dessinerRectangle();

    $RectangleVert=new Rectangle(200,200,'#3A9D23',0.5); 
    // $RectangleVert->DonnerParam('200px','200px','120px','50px','#3A9D23',0.5);
    $RectangleVert->dessinerRectangle();

    //LES CERCLES
    $CercleJaune=new Cercle(300,100,'#F3D617',0.5);
    //$CercleJaune->DonnerParam('300px','100px','40px','#F3D617',0.5);
    $CercleJaune->dessinerCercle();

    //LES TRIANGLES
    $TriangleRouge=new Triangle('40 20, 140 100, 40 100','#C60800',0.5);
    //$TriangleRouge->DonnerParam('40 20, 140 100, 40 100','#C60800',0.5);
    $TriangleRouge->dessinerTriangle();
    echo "</svg>";
     /*try {

       $stmt = $dbh->prepare("::




        
        ");

        $stmt->execute();
        $commandes = $stmt->fetchAll();

        // var_dump($commandes);
    }
    catch (PDOException $e) {
        
        echo "Erreur lors de l'éxécution d'une requête SQL :";
        $errorInfo = $stmt->errorInfo();
        echo "  <div class=\"sqlError\">
                    <fieldset>
                        <legend>Erreur sql ¯\_(ツ)_/¯</legend>
                        <div class=\"content\">" . $errorInfo[2] . "</div>
                    </fieldset>
                </div>
        ";

    }*/
?>
    
    <h3></h3>

<?php   
    include('templates/_footer.php');
?>