<?php
//Connecting to sql db.
$authorId = Database::get()->execute('SELECT id FROM user WHERE user_name = :user_name',array(':user_name' => 'dmokhz'));
$date = date('Y/m/d h:i:s', time()); //insert current time
$table = "post";
$data_array['authorId'] = $authorId[0]['id'];
$data_array['title'] = $_POST["title"];
$data_array['createdAt'] = $date;
$data_array['updatedAt'] = $date;
$data_array['content'] = $_POST["content"];
Database::get()->insert($table,$data_array);
header("post");
?>
success.
<a href="blog">Back to home page!</a>
