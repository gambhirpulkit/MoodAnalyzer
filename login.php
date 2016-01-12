<!DOCTYPE html>
<html >
  <head>
          <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Mood Analyzer</title>
    
        <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/search_style.css">

    
    
    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        @import url(http://fonts.googleapis.com/css?family=Ubuntu:400,500);

  body
  {
    background:
  radial-gradient(black 15%, transparent 16%) 0 0,
  radial-gradient(black 15%, transparent 16%) 8px 8px,
  radial-gradient(rgba(64,153,255,.1) 15%, transparent 20%) 0 1px,
  radial-gradient(rgba(64,153,255,.1) 15%, transparent 20%) 8px 9px;
  background-color:#282828;
  background-size:16px 16px;
     #background: -webkit-radial-gradient(circle, rgb(255,255,255), rgb(64,153,255));
    font-family: 'Ubuntu', sans-serif;
    text-align:center;
    width:100%;
  }

    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>
   
    <div id="tweet" style="color:white;"><h1>Mood Analyzer</h1></div><br><br><br>
    
      <a href="layout-4.php"><div id="scaler"> </div></a>
    
    <div style="width: 50%; float: left;">
    <h1 style="color:white;">My sentiments</h1>
    <a class="twitter btn" href="#">
        <div class="twitter-icon btn-icon"></div>
        Login with Twitter
      </a>
    </div>

    <div style="width: 50%; float: right;">
    <h1 style="color:white;">Analyze other's sentiments</h1>
      <form>
        
      </form>
    </div>
    
    
    
  </body>
</html>