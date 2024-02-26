
<!DOCTYPE html>
<html>
  
<head>
    <title>Form Submittion without using submit Button</title>
</head>
  
<body>
    <h1 style="color: green">
        GeeksforGeeks
    </h1>
    <h3>
        Form Submittion without using submit Button
    </h3>
    <form id="form" 
          action="form.php" 
          method="post">
        <label>
            Subscribe the GBlog to get daily update!!!
        </label>
        <br><br>
        <input type="text" 
               name="text" 
               placeholder="Enter Mail ID" />
        <br/>
        <h5 onclick="submit()">
            Click Me to  Subscribe!
        </h5> 
    </form>
    <script>
        function submit() {
            let form = document.getElementById("form");
            form.submit();
            alert("Data stored in database!");
        }
    </script>
	<!DOCTYPE html>
<html lang="en">
  
<body>
    <form action="https://gfg.com/" method="post">
        Username:<br>
        <input type="text" name="username">
        <br>
        Email id:<br>
        <input type="text" name="email_id">
        <br><br>
  
        <button type="submit" formaction="#">
            Submit 1
        </button>
          
        <button type="submit" formaction="#">
            Submit 2
        </button>
    </form>
</body>
  
</html>
</body>
</html>
