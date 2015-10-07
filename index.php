<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Mood Analyzer</title>
    
    
    
    
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




  #scaler
  {
    border: 0.3em solid rgb(64,153,255);
    border-radius:200px;
    display:inline-block;
    height:200px;
    transition: all 1s ease;
    width:200px;

    background: url('https://si0.twimg.com/a/1354824529/images/resources/twitter-bird-blue-on-white.png') no-repeat;
    #background-size: 200px 200px;
    #background-position: center top;
    background-size: 100% Auto;
  }

  #scaler:hover
  {
    transform:scale(1.6)
      rotate(-360deg); 
    background: url('https://si0.twimg.com/a/1354824529/images/resources/twitter-bird-white-on-blue.png') no-repeat;

    border: 0.3em solid rgba(255,255,255, 0.9); 
    background-size: 100% Auto;
  }

    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>

    <!--Inspired by
 http://codepen.io/wmora/pen/fEzux  
background credits goes to Lea Verou
http://lea.verou.me/css3patterns/
-->


<html>
  <body>    
    <div id="tweet" style="color:white;"><h1>Mood Analyzer</h1></div><br><br><br>
    
      <a href="layout-4.php"><div id="scaler"> </div></a>
    
  </body>
</html>
    
    
    
    
    
  </body>
</html>