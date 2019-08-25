<?php
  include_once 'header.php';
?>

 <div id="head"> 		
 
      <span class="m-scene" id="main" >
        <h2 style="color: black;margin-left: 50px;" id="portfolioh2" class="scene_element scene_element--fadein">Testimonials</h2>
      </span> 
  </div>
  <div id="container" class="m-scene" id="main">
    <div class="image1 scene_element scene_element--fadein">
      <p class="name">Pratham Rathore</p>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae alias officia, iste reiciendis non consectetur repellendus esse odit, nulla assumenda, rem sunt sint, enim a sed quis suscipit numquam praesentium.</p>
    </div>
    <div class="image2 scene_element scene_element--fadein">
      <p class="name">Education</p>
   
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quas asperiores aperiam, ducimus nam, at commodi labore velit, sunt dolor minima. Aspernatur, enim dolore laudantium repellendus libero velit cupiditate veniam?</p>
    </div>
    <div class="image3 scene_element scene_element--fadein">
        <p class="name">Created</p>
    
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quas asperiores aperiam, ducimus nam, at commodi labore velit, sunt dolor minima. Aspernatur, enim dolore laudantium repellendus libero velit cupiditate veniam?</p>
    </div>
    <div class="image4 scene_element scene_element--fadein">
        <p class="name">Skills</p>
     
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quas asperiores aperiam, ducimus nam, at commodi labore velit, sunt dolor minima. Aspernatur, enim dolore laudantium repellendus libero velit cupiditate veniam?</p>
    </div>
    <div class="image4 scene_element scene_element--fadein">
        <p class="name">Future Goals</p>
     
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quas asperiores aperiam, ducimus nam, at commodi labore velit, sunt dolor minima. Aspernatur, enim dolore laudantium repellendus libero velit cupiditate veniam?</p>
    </div>
    <div class="image4 scene_element scene_element--fadein">
        <p class="name">Details</p>
     
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quas asperiores aperiam, ducimus nam, at commodi labore velit, sunt dolor minima. Aspernatur, enim dolore laudantium repellendus libero velit cupiditate veniam?</p>
    </div>
  </div> 


  <footer>
    <div id="foot">
      <div class="social">

        <h3>Stay Connected</h3>

        <a href="https://www.instagram.com/pratham_castleofglass/?hl=en" class="social instagram">
          <img class="logo" src="icon1.png" alt="">
        </a>

          <a href="https://www.facebook.com/" class="social facebook">
          <img class="logo" src="icon2.png" alt="">
        </a>

         <a href="https://www.linkedin.com/in/pratham-rathore-7a835515b/" class="social linkedin">
          <img class="logo" src="icon3.png" alt="">
        </a>
      </div>
      <div class="contact">
        <h3>Contact Us</h3>
        <form action="form.php" method="post" name="form" class="contact">

          <label for="name">Name</label><br>
          <input type="text" name="text" class="text">
          <br><br>
          
          
          <label for="email">Email</label><br>
          <input type="email" name="email" class="text">
          <br><br>

          <label for="password">Password</label><br>
          <input type="password" name="password" class="text"><br><br>

          <label for="message">Message</label><br>
          <textarea name="message" class="message"></textarea><br><br>

          <input class="submit" value="Submit" type="submit" name="submit">
        </form>
      </div>
    </div>
  </footer>
  <?php
include_once 'footer.php'
?>