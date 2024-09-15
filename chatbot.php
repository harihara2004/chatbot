
<!DOCTYPE html>
<html lang="en">
<head>
  <h2>chatbot</h2>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/va.scss">
  <link rel="stylesheet" href="css/logstyle.css"/>
    <link rel="stylesheet" href="css/v.css">
   <title>Chatbox</title>
</head>  

<body> 
   
 <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/sa.js"></script>

<div class="container-fluid">
  <!-- slider -->

<div id="carousel">
  <figure id="spinner">
    <img src="image/j.jpeg" alt ="" style="width: 6574px" height="100%">
    <img src="image/g.jpeg"  alt="" style="width: 6574px" height="100%">
    <img src="image/wel.PNG"alt="" style="width: 6574px" height="100%">
    <img src="image/hi.PNG" alt="" style="width: 6574px" height="100%">
    <img src="image/h.jpg" alt="" style="width: 6574px" height="100%">
    <img src="image/d.PNG" alt="" style="width: 6574px" height="100%">
    <img src="image/gj.jpg" alt="" style="width: 6574px" height="100%">
    <img src="image/f.PNG" alt="" style="width: 6574px" height="100%">
  </figure>
</div>
<br>
<br>
<br>
<span style="float:left" class="ss-icon" style="color:white" onclick="galleryspin('-')">&lt; </span>
<span style="float:right" class="ss-icon" style="color: white"onclick="galleryspin('')">&gt; </span>

 
<!-- slider end-->
</div>

 <div class="chatbox-wrapper">
    <div class="chatbox-toggle">
      <i class='bx bx-message-dots'></i>
    </div>
    <div class="chatbox-message-wrapper">
      <div class="chatbox-message-header">
        <div class="chatbox-message-profile">
         
              <img src="image/ship.jpeg" alt=""class="chatbox-message-image" >
          <div>
            <h4 class="chatbox-message-name">Hariharan</h4>
            <p class="chatbox-message-status">online</p>
          </div>
        </div>
        <div class="chatbox-message-dropdown">
          <i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
          <ul class="chatbox-message-dropdown-menu">
            <li>
              <a href="#">Search</a>
            </li>
            <li>
              <a href="#">Report</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="chatbox-message-content">
        <h4 class="chatbox-message-no-message">You don't have message !</h4>
        <!-- <div class="chatbox-message-item sent">
          <span class="chatbox-message-item-text">
            Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
          </span>
          <span class="chatbox-message-item-time">08:30</span>
        </div>
        <div class="chatbox-message-item received">
          <span class="chatbox-message-item-text">
            Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
          </span>
          <span class="chatbox-message-item-time">08:30</span>
        </div> -->
      </div>
      <div class="chatbox-message-bottom">
        <form action="#" class="chatbox-message-form">
          <textarea rows="1" placeholder="Type message..." class="chatbox-message-input"></textarea>
          <button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
        </form>
      </div>
    </div>
  </div>
  

  <script src="js/script.js"></script>
</body>
</html>