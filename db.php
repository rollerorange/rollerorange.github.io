<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('sportschoolDatabase.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
      $sql =<<<EOF
      SELECT * from KLANT;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['klantID'] . "\n";
      echo "NAME = ". $row['naam'] ."\n";
      echo "QRCODE = ". $row['QRcode'] ."\n";
   }
   echo "Operation done successfully\n";
   $db->close();
?>