<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="assets/images/travicon.png">
    <title>TravTerrell.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,DOM,Bootstrap,Web development,references,examples,source code,adobe creative suite, photoshop, illustrator">
    <meta name="description" content="Travis Terrell - Full Stack Web Development and Graphic Design using HTML, CSS, JavaScript, jQuery, PHP, MySQL, Adobe Creative Suite, and more!">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->
  </head>

  <body>

    <div class="container-fluid">

      <div class="row nav">
        <div class="col-sm-2" id="navlogo">
          <img id="logo" src="assets/images/travlogo.png" alt="© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved.">
        </div>
        <div class="col-sm-10" id="navlinks">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="content">
      <div class="row" id="index_info">
          <div class="col-sm-6 col-sm-push-6" id="right_index">
            <ul class="rslides">
                <li><img id="index_pics" src="assets/images/pic1.jpg" alt="© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved."></li>
                <li><img id="index_pics" src="assets/images/pic2.jpg" alt="© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved."></li>
                <li><img id="index_pics" src="assets/images/pic5.jpg" alt="© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved."></li>
                <li><img id="index_pics" src="assets/images/pic3.jpg" alt="© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved."></li>
                <li><img id="index_pics" src="assets/images/pic4.jpg" alt="© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved."></li>
            </ul>
          </div>
          <div class="col-sm-6 col-sm-pull-6" id="left_index">
            <img id="trav_index_logo" src="assets/images/trav_index_logo.png" alt="© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved.">
            <p>Full Stack Web Developer</p>
            <p>Creative Engineer</p>
            <p>2x Emmy Nominee</p>
          </div>
       </div>
       <div class="row">
         <div class="col-sm-12" id="quote">
           <blockquote>“We have always held to the hope, the belief, the conviction that there is a better life, a better world, beyond the horizon."</blockquote>
           <p>- Franklin D. Roosevelt</p>
         </div>
       </div>
        <div class="row">
         <div class="col-sm-12" id="footer">
           <p>© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved.</p>
         </div>
       </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="responsiveslides.js"></script>
      <script>
        $(function() {
          $(".rslides").responsiveSlides();
        });
      </script>

  </div>

  </body>

</html>
