<html>
  <head>
      <title>Submit a form using image</title>
  </head>
  <body>
    <form id="form" action="form.php" method="post">
        <input type='text' name='text' />
        <a href="javascript: submit()">
           <img src="gfg.jpg" width="35" height="30" />
        </a>
    </form>
    <script>
    function submit(){
        form.submit();
        alert("Data stored in database!");
    }
    </script>
  </body>
</html>