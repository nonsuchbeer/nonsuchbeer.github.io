<!DOCTYPE html>
<html lang="en">
<head>
  <script src="jquery.js"></script> 
 <script src="index.js"></script>
  <script type='text/javascript' src='handle_login.js?w=2'></script>
    <script type='text/javascript' src='read_single_range.js?w=2'></script>
    <script>
    $(document).ready(function() {
  setInterval(function() {
    cache_clear()
  }, 1000000);
   $("#tap1").load("tap1.html?n=1"); 
    $("#tap2").load("tap2.html?n=1"); 
     $("#tap3").load("tap3.html?n=1"); 
      $("#tap4").load("tap4.html?n=1"); 
});

function cache_clear() {
  window.location.reload(true);
  // window.location.reload(); use this if you do not remove cache
}
</script> 
  <meta charset="UTF-8">
  <title>Screen 1</title>
  <link rel="stylesheet" href="css/main.css" />



</head>
<body>

 <!--
    BEFORE RUNNING:
    ---------------
    1. If not already done, enable the Google Sheets API
       and check the quota for your project at
       https://console.developers.google.com/apis/api/sheets
    2. Get access keys for your application. See
       https://developers.google.com/api-client-library/javascript/start/start-js#get-access-keys-for-your-application
    3. For additional information on authentication, see
       https://developers.google.com/sheets/api/quickstart/js#step_2_set_up_the_sample
    -->
 
    <script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
    <button id="signin-button" onclick="handleSignInClick()">Sign in</button>
    <button id="signout-button" onclick="handleSignOutClick()">Sign out</button>


    
  <div class="menu">

    <div class="row">
      <div class="column">
    <div class="menu__content">

      <div class="menu__item">
        <div class="menu__item-info">
          <div class="menu__item-title">
            <span class="menu__item-title-text"><?php echo row[1]; ?></span>
            <span class="menu__item-title-dots"></span>
          </div>
          <div class="menu__item-details menu__item-details--price"><?php echo "ALSO AVAILABLE IN 473mL CANS"; ?><sup>$</sup></div>
        </div>
        <div class="menu__item-accessory">
          7.0<sup>%</sup>
        </div>
      </div>

      <div class="menu__item">
        <div class="menu__item-info">
          <div class="menu__item-title">
            <span class="menu__item-title-text"><div id="tap2"></div></span>
            <span class="menu__item-title-dots"></span>
          </div>
          <div class="menu__item-details menu__item-details--price">ALSO AVAILABLE IN 473mL CANS 4<sup>$</sup></div>
        </div>
        <div class="menu__item-accessory">
          6.5<sup>%</sup>
        </div>
      </div>
      
  </div>

</div>

    <div class="column">
  <div class="menu__content">
      <div class="menu__item">
        <div class="menu__item-info">
          <div class="menu__item-title">
            <span class="menu__item-title-text"><div id="tap3"></div></span>
            <span class="menu__item-title-dots"></span>
          </div>
          <div class="menu__item-details menu__item-details--price">ALSO AVAILABLE IN 473mL CANS 4<sup>$</sup></div>
        </div>
        <div class="menu__item-accessory">
          8.0<sup>%</sup>
        </div>
      </div>

      <div class="menu__item">
        <div class="menu__item-info">
          <div class="menu__item-title">
            <span class="menu__item-title-text"><div id="tap4"></div></span>
            <span class="menu__item-title-dots"></span>
          </div>
         <div class="menu__item-details menu__item-details--price">ALSO AVAILABLE IN 473mL CANS 4<sup>$</sup></div>
        </div>
        <div class="menu__item-accessory">
          8.4<sup>%</sup>
        </div>
      </div>
  </div>
</div>
</div>



  
    <footer class="menu__footer">
      <div class="menu__footer-column">
        <div class="menu__sub-item">
          <span class="menu__sub-item-text">FULL POURS</span>
          <span class="menu__sub-item-accessory">7<sup>$</sup></span>
        </div>
      </div>
      <div class="menu__footer-column">
        <div class="menu__sub-item">
          <span class="menu__sub-item-text">SMALL POURS 12cL/4oz</span>
          <span class="menu__sub-item-accessory">3<sup>$</sup></span>
        </div>
      </div>
      
    </footer>
  </div>

</body>
</html>
