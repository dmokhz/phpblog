<?php
$route = new Router(Request::uri()); //搭配 .htaccess 排除資料夾名稱後解析 URL
$route->getParameter(1); // 從 http://127.0.0.1/game/aaa/bbb 取得 aaa 字串之意

// 用參數決定載入某頁並讀取需要的資料
switch ($route->getParameter(1)) {
  case 'blog':
      include('view/head/default.php'); // 載入共用的頁首
      include('view/body/blog.php');
      include('view/foot/default.php');
    break;
  case 'post':
      include('view/head/default.php'); // 載入共用的頁首
      include('view/body/post.php');
      include('view/foot/default.php');
    break;
  case 'sendpost':
      include('view/head/default.php'); // 載入共用的頁首
      include('view/body/sendpost.php');
      include('view/foot/default.php');
    break;
  case 'test':
      include('view/head/default.php'); // 載入共用的頁首
      include('view/body/test.php');
      include('view/foot/default.php');
    break;
  default:
      include('view/head/default.php'); // 載入共用的頁首
      include('view/body/blog.php');
      include('view/foot/default.php'); // 載入共用的頁尾
    break;
}
