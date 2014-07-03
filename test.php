<?php

try {
  // open connection to MongoDB server
  $conn = new MongoClient('mongodb://arni360:divine@ds051007.mongolab.com:51007/formulaire');


   echo "Connection to database successfully". "\n";
   // select a database
   $db = $conn->formulaire;
   echo "Database mydb selected";

   $collection = $db->name;
   echo "Collection selected succsessfully". "\n";

   $cursor = $collection->find();
   // iterate cursor to display title of documents
   foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
  // disconnect from server
  $conn->close();
} catch (MongoConnectionException $e) {
  die('Error connecting to MongoDB server');
} catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
?>