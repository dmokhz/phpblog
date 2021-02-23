
  <div class="blog-masthead py-1" style="background-color:#087E8B">
    <div class="container d-flex justify-content-between">
      <nav class="d-inline-flex flew-row nav blog-nav ">
        <a class="navbar-brand text-white py-2 mx-1 align-middle" href="blog.html">
          <img src="writelogo.png" alt="Logo" height="40" width="40">
          Bootstrap Blog
        </a>
      </nav>
      <nav class="d-flex align-items-center text-white">
        Welcome,
        <a href="#" class="text-warning"> user!</a>
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
            <a href="post" class="list-group-item list-group-item-action active bg-warning">發表文章</a>

            <a href="blog" class="list-group-item">發表過的文章</a>
          </ul>
        </div>
      </div>
      <div class="col-sm-8 blog-main">
        <form class="form-group" action="sendpost" method="post">
          <label for="Topic">Topic</label>
          <input type="text" class="form-control" id="Topic" placeholder="標題" name="title"><br>
          <label for="editor">Paragraph</label><br>
          <textarea class="form control" id="editor" cols="76" rows="10" placeholder="  文章" name="content"></textarea>
          <button type="submit" class="btn btn-secondary mt-2">Submit</button>
        </form>
      </div> <!-- /.row -->

    </div> <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="http://v4-alpha.getbootstrap.com/assets/js/vendor/jquery.min.js">
    </script>
    </script>
    <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
