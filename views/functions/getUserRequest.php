<?php
function getUserRequest($con,$user_id)
    {
        # Since mysql_ is deprecated/removed from new version, I will use PDO
        # safely binding the value
        $query = $con->prepare("select * from drivers where availability = 1");
        $query->execute(array(":0"=>$user_id));
        while($result = $query->fetch(PDO::FETCH_ASSOC)) {
            $row[] = $result;
        }

        return (isset($row))? $row : array();
    }
?>