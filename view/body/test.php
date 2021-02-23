<?php
//Connecting to sql db.
$name = '1';
$authorId = Database::get()->execute('SELECT * FROM post WHERE authorId = :authorId',array(':authorId' => $name));

foreach ($authorId as $key) {
  echo nl2br("{$key['title']} {$key['createdAt']} {$key['updatedAt']} {$key['content']} \n\r");

}
if($authorId == null){
  echo "null";
}
