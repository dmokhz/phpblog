
  <div class="blog-masthead py-1" style="background-color:#087E8B">
    <div class="container">
      <nav class="nav blog-nav ">
        <a class="navbar-brand text-white py-2 mx-1 align-middle" href="blog.html">
          <img src="writelogo.png" alt="Logo" height="40" width="40">
          Bootstrap Blog
        </a>
      </nav>
    </div>
    <div class="container">

    </div>
  </div>

  <div class="container">

    <div class="row">

      <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
          <ul class="list-group">
              <a href="post" class="list-group-item">發表文章</a>
              <a href="blog" class="list-group-item border border-secondary list-group-item-action active bg-warning">發表過的文章</a>
          </ul>
        </div>
      </div><!-- /.blog-sidebar -->
      <div class="col-sm-8 blog-main">


        <?php
        $user = '1';
        $name = 'dmokhz';
        $authorId = Database::get()->execute('SELECT * FROM post WHERE authorId = :authorId ORDER BY updatedAt desc',array(':authorId' => $user));
        foreach ($authorId as $key)
        {
          ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $key['title']; ?></h2>
            <p class="blog-post-meta"><?php echo $key['updatedAt']; ?> by <a href="#"><?php echo $name; ?></a></p>
            <p><?php echo nl2br($key['content']); ?></p>
            </div>
        <?php
        }
       ?>
      </div>  <!-- /.blog-main -->

    </div>  <!-- /.row -->

  </div>  <!-- /.container -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="http://v4-alpha.getbootstrap.com/assets/js/vendor/jquery.min.js">

  <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
