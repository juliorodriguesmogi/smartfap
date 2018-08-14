<?php
$conn = new PDO('mysql:host=209.97.130.137;dbname=cyberpc07','cyberpc07','phoenix10');
$handle = fopen("c:\\CBO2002_2011.CSV", "r");
$contrecs=0;
$conn->beginTransaction();
if ($handle) {
    while (!feof($handle)) {
        //$x=strlen(fgets($handle));
        
        $linha = fgetcsv($handle,350,";" );
        $stmt=$conn->prepare("insert into `cbos` values (?,?,?)");
        
        try {

            $stmt->bindValue(1,$linha[0], PDO::PARAM_STR);
            $stmt->bindValue(2,$linha[1], PDO::PARAM_STR);
            $stmt->bindValue(3,$linha[2], PDO::PARAM_STR);
            $stmt->execute();
            if ($contrecs>1000 || !feof($handle)) {
                $conn->commit();
                $conn->beginTransaction();                
                $contrecs=0;
            }    
            $contrecs++;

       } catch(PDOException $e) {
            if(stripos($e->getMessage(), 'DATABASE IS LOCKED') !== false) {
            // This should be specific to SQLite, sleep for 0.25 seconds
            // and try again.  We do have to commit the open transaction first though
            $conn->commit();
            sleep(1000);
            } else {
                $conn->rollBack();
                throw $e;
            }
        }
    }    
    $conn->commit();

    
}

?>