<?php
    $db = new SQLite3("./db/db.sqlite");
    $sql = 'SELECT id FROM Category';
    $res = $db->query($sql);
    
    $ids = [];
    while($row = $res->fetchArray())
    {
        array_push($ids,$row['id']);
    }     
    
    foreach($ids as $id)
    {
        $sql = 'SELECT * FROM Forum WHERE cat_id = \'' . $id .'\'';
        $res = $db->query($sql);
        
        while($row = $res->fetchArray(SQLITE3_ASSOC))
        {
            var_dump($row);
        }
    }
?>