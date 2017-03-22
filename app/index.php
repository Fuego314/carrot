<?php

session_start();


$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
$success = isset($_SESSION['success']) ? $_SESSION['success'] : '';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrots!</title>
    <meta name="description" content="">
    <meta name="Author" content="Luke Tucker">
    <link href="https://fonts.googleapis.com/css?family=Cabin:500|Cabin+Sketch:400,700|Open+Sans" rel="stylesheet">
    <!-- build:css css/styles.min.css -->
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/animsition.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
  	<link rel="stylesheet" href="css/main.css">
  	<!-- endbuild -->
  </head>
  <body class="animsition">

    <nav>

  		<div class="nav-brand">
  			<div class="container">
  				<button class="navbar-toggle scrolled">
  					<span class="toggle-bar top-bar"></span>
  					<span class="toggle-bar middle-bar"></span>
  					<span class="toggle-bar bottom-bar"></span>
  				</button>
  			</div><!-- container -->
  		</div><!-- nav-brand -->

  		<div class="navbar">
  			<div class="container">
  				<ul class="nav">
  					<li><a href="#about" class="nav-link">About</a></li>
  					<li><a href="#benefits" class="nav-link">Benefits</a></li>
  					<li><a href="#types" class="nav-link">Types</a></li>
  					<li><a href="#gallery" class="nav-link">Gallery</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
  				</ul>
  			</div><!-- container -->
  		</div><!-- nav -->

  	</nav>

    <header class="header">
      <img class="carrot-logo" src="images/carrot-logo.svg" alt="Carrot logo">
      <div class="header-content">
        <h1>carrots</h1>
        <h2>because who doesn't like carrots?</h2>
        <img class="carrot-harvest" src="images/head-carrot.svg" alt="Carrot for harvest">
      </div><!-- header content -->
    </header>

    <section id="about" class="about">
      <div class="container">
        <div class="about-content">

          <h3 class="section-title">About carrots</h3>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc blandit ligula ac consequat bibendum. Aenean rutrum sodales vehicula. Nullam et interdum leo, in consectetur ante. Cras mattis feugiat fringilla. Morbi posuere non magna hendrerit viverra. Vestibulum faucibus ultricies lorem, eget efficitur quam posuere quis. Pellentesque vitae faucibus metus. Nullam vel augue et ex sagittis suscipit.</p>

          <p>Nulla semper auctor enim, quis ornare lorem tristique sed. Nulla suscipit imperdiet nunc nec sodales. Vestibulum suscipit, augue ac efficitur sodales, nibh felis vulputate odio, eget pulvinar mauris est id augue. Ut quis nisl quis leo laoreet feugiat id in eros. Integer viverra dui eu sem efficitur scelerisque. Proin sollicitudin condimentum lorem a faucibus. Cras ut aliquam purus, vel aliquam sem. Sed id velit pellentesque, mattis metus ac, aliquet elit. Sed eget mattis diam. Donec gravida sed ligula et sollicitudin.</p>

        </div><!-- about content -->
      </div><!-- container -->
    </section><!-- about -->

    <section id="benefits" class="benefits dark-bg">
      <div class="container">
        <div class="benefits-content">

          <h3 class="section-title">the benefits</h3>

          <img class="benefits-carrot" src="images/benefits-carrot.png" alt="The benefits of carrots">

          <div class="benefit">
            <p>Prevents heart disease</p>
            <img src="images/arrow.svg" alt="Arrow">
          </div><!-- benefit -->
          <div class="benefit">
            <img src="images/arrow.svg" alt="Arrow">
            <p>Reduces high blood pressure</p>
          </div><!-- benefit -->
          <div class="benefit">
            <p>Maintains good digestive health</p>
            <img src="images/arrow.svg" alt="Arrow">
          </div><!-- benefit -->
          <div class="benefit">
            <img src="images/arrow.svg" alt="Arrow">
            <p>You want to see in the dark right? Eat up!</p>
          </div><!-- benefit -->
          <div class="benefit">
            <p>Boosts immune system</p>
            <img src="images/arrow.svg" alt="Arrow">
          </div><!-- benefit -->
          <div class="benefit">
            <img src="images/arrow.svg" alt="Arrow">
            <p>Regulates blood sugar levels</p>
          </div><!-- benefit -->

        </div><!-- benefits content -->
      </div><!-- container -->
    </section>

    <section id="types" class="types">
      <div class="container">
        <div class="types-content">

          <h3 class="section-title">types</h3>

          <div class="types-slider">

            <div class="carrot-type">
              <div class="type-main">
                <h4>Imperator</h4>
                <img class="type-img imperator-img" src="images/imperator.svg" alt="Imperator Carrot">
                <img class="info-icon" src="images/info.svg" alt="More Info">
              </div><!-- type main -->
              <div class="type-info">
                <img src="images/close.svg" alt="Close Info">
                <ul>
                  <li>Large and very flavorful</li>
                  <li>Excellent all-purpose carrot</li>
                  <li>Many Imperator carrots are actually crosses between Nantes and Imperator types</li>
                  <li>Most commonly grown carrot</li>
                </ul>
              </div><!-- type earth -->
            </div><!-- carrot type -->

            <div class="carrot-type">
              <div class="type-main">
                <h4>Nantes</h4>
                <img class="type-img" src="images/nantes.svg" alt="Nantes Carrot">
                <img class="info-icon" src="images/info.svg" alt="More Info">
              </div><!-- type main -->
              <div class="type-info">
                <img src="images/close.svg" alt="Close Info">
                <ul>
                  <li>Extremely sweet and tender</li>
                  <li>Available fall through spring</li>
                  <li>Approximately forty different carrot cultivars fall under the Nantes variety name</li>
                  <li>Originated over 5000 years ago in present-day Afghanistan</li>
                </ul>
              </div><!-- type earth -->
            </div><!-- carrot type -->

            <div class="carrot-type">
              <div class="type-main">
                <h4>Chantenay</h4>
                <img class="type-img chantenay-img" src="images/chantenay.svg" alt="Chantenay Carrot">
                <img class="info-icon" src="images/info.svg" alt="More Info">
              </div><!-- type main -->
              <div class="type-info">
                <img src="images/close.svg" alt="Close Info">
                <ul>
                  <li>No need to peel</li>
                  <li>Chantenay carrots contain around 90% water</li>
                  <li>Originated from the Chantenay region of France</li>
                  <li>Chantenay carrots contain a good level of fibre</li>
                </ul>
              </div><!-- type earth -->
            </div><!-- carrot type -->

            <div class="carrot-type">
              <div class="type-main">
                <h4>Danvers</h4>
                <img class="type-img" src="images/danvers.svg" alt="Danvers Carrot">
                <img class="info-icon" src="images/info.svg" alt="More Info">
              </div><!-- type main -->
              <div class="type-info">
                <img src="images/close.svg" alt="Close Info">
                <ul>
                  <li>Known for being conical in shape</li>
                  <li>Usually shorter than Imperator types</li>
                  <li>Deep orange</li>
                  <li>They arose in Danvers, Massachusetts in 1871</li>
                </ul>
              </div><!-- type earth -->
            </div><!-- carrot type -->

          </div><!-- types slider -->

        </div><!-- types content -->
      </div><!-- container -->
    </section>

    <section id="sign-up" class="sign-up">
      <div class="container">
				<div class="sign-up-content">
					<h3 class="section-title">want to know more?</h3>
					<p>Vestibulum faucibus ultricies lorem, eget efficitur quam posuere quis. Pellentesque vitae faucibus metus donec gravida sed ligula et sollicitudin.</p>
					<form>
						<input class="sign-up-email" type="email" name="more-info-email" placeholder="Enter your email address">
            <input class="sign-up-btn" type="submit" value="find out more">
					</form>
				</div><!-- sign up content -->
      </div><!-- container -->
    </section>

    <section id="contact" class="contact dark-bg">
      <div class="container">
        <div class="contact-content">

          <h3 class="section-title">Questions</h3>

          <form action="question.php" method="POST" id="question-form" class="question-form">

    				<div class="name-email">
    					<!-- Name -->
    					<div class="form-group">
    						<label class="label" for="name">Name</label>
    						<input id="name" name="name" type="text" class="form-control name" <?php if (!empty($error)) { echo isset($fields['name']) ? ' value="' . $fields['name'] . '" ' : ''; } ?>>
    					</div><!-- form group -->

    					<!-- Email -->
    					<div class="form-group">
    						<label class="label" for="email">Email</label>
    						<input id="email" name="email" type="email" class="form-control email" <?php if (!empty($error)) { echo isset($fields['email']) ? ' value="' . $fields['email'] . '" ' : ''; } ?>>
    					</div><!-- form group -->
    				</div><!-- name email -->

            <!-- Website -->
            <div class="form-group">
              <label class="control-label" for="website">Website</label>
              <input id="website" name="website" type="text" class="form-control website" <?php if (!empty($error)) { echo isset($fields['website']) ? ' value="' . $fields['website'] . '" ' : ''; } ?>>
            </div><!-- website -->

        		<!-- Question -->
    				<label class="label" for="question">Question</label>
            <textarea id="question" class="form-control question" rows="11" name="question"><?php if (!empty($error)) { echo isset($fields['question']) ? $fields['question'] : ''; } ?></textarea>

      			<input type="submit" value="Send Question" class="btn">

            <div class="result">
            <?php if (!empty($error)) { ?>
              <p><?php echo $error; ?></p>
            <?php } else { ?>
              <p><?php echo $success; ?></p>
            <?php } ?>
            </div>

            </div>
    			</form>

        </div><!-- contact content -->
      </div><!-- container -->
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--build:js js/main.min.js -->
    <script src="js/build/animsition.js"></script>
    <script src="js/build/slick.js"></script>
    <script src="js/build/main.js"></script>
    <!-- endbuild -->
  </body>
</html>

<?php

unset($_SESSION['error']);
unset($_SESSION['fields']);
unset($_SESSION['success']);

?>
