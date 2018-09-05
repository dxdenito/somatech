<?php
include_once('assets/includes/includes.php');
include_once('assets/includes/article.php');

$article = new Article;
$articles = $article->fetch();

if (isset($_POST['email'])) {
    # insert in mailing list...

    $email=$_POST['email'];
    if(empty($email)){
        $error="input an email please!!!";

    }else{
    $sql="INSERT INTO mailings (mail) VALUES ('$email')";
    if ($query= mysqli_query($con,$sql)){
        $error="You will now be receiving email notifications from us!";
    }else{
        $error="there was an error on our side. Sorry!! try next time";
    }}


}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Somatech- Get the best coding tutorial and latest technology news only in one place</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/agency.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
<body>
	<nav id="men" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Soma<span>Tech</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="general.php">General</a></li>
                        <li><a href="php.php">Php</a></li>
                        <li><a href="java.php">Java</a></li>
                        <li><a href="html.php">Html</a></li>
                        <li><a href="css.php">Css</a></li>
                        <li><a href="technews.php">Contact</a></li>
                        

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
    </nav>
    <div class="panel">

    <div class="float-md-left">
    	<ol>
    		<?php  
    		 $sql = "SELECT * FROM articles " ;
             $result = mysqli_query ( $con, $sql   ) or trigger_error ( "SQL" , E_USER_ERROR );
	         while ( $row = mysqli_fetch_assoc ( $result )) {
	         	?>
	         	<li>
	         		<a href="article.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_title']; ?></a>-
	         		<small>posted <?php echo date('l jS M Y h:i:sa',$row['article_timestamp']);?></small>
                    <p style="margin-left: 4%; ">
                        <?php echo $row['description'] ?>
                    </p>
	         	</li>


                <?php 
                }
	         	?>
    	</ol>
    </div>
    <div class="float-md-right">
    	ggczsjgj<br>
    	weeew<br><br>weasdanhcdbkuba
      <h6> <small><a href="admin/index.php">admin</a></small></h6>
     
    </div>
    </div>
    <section id="footer" class="text-left">
        <div class="container">
        <div class="row">
        <div class="col-md-2">
        <h2>LINKS</h2>
        
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="general.php">General</a></li>
                        <li><a href="php.php">Php</a></li>
                        <li><a href="java.php">Java</a></li>
                        <li><a href="html.php">Html</a></li>
                        <li><a href="css.php">Css</a></li>
                        <li><a href="technews.php">Contact</a></li>
                        

        
        </div>
        <div class="col-md-2 ">
        <H2>SOCIALS</H2>
        
        <li><i class="fa fa-facebook"></i><a href="https://www.facebook.com/denis.karanja.589">&nbsp; Somatech</a></li>
        <li><i class="fa fa-twitter"></i><a href="https://www.twitter.com/denitoraymers">&nbsp; @Somatech</a></li>
        <li><i class="fa fa-instagram"></i><a href="">&nbsp; Somatech</a></li>
        <li><i class="fa fa-linkedin"></i><a href="https://linkedin.com/in/denis-karanja-184481110">&nbsp; Somatech</a></li>
        <li><i class="fa fa-google-plus"></i><a href="https://plus.google.com/114888110296372397531">&nbsp; Somatech</a></li>
        <li><i class="fa fa-rss"></i><a href="">&nbsp; www.deniskibathi.com</a></li>
        
        </div>
        <div class="col-md-4">
        <H2>Subscribe to our news letter</H2>
        <form id="Subscribe" action="index.php" method="post">
            <?php if (isset($error)) {
                ?>
                <small style="color: gold;"><?php echo $error; ?></small><br><br>
                <?php
            } ?>
            <input type="email" name="email" id="email" id="email" placeholder="name@your-email.com"><br>
            <input type="submit" name="submit" value="Subscribe" id="btn">
            
        </form>
        <p>
            Your email address is confidential and will only be used to alert you of a new post. We value the security and privacy of your information.
        </p>
        </div>
        <div class="col-md-4">
        <H2>ABOUT</H2>
        <p>
        SomaTech is a creative and innovative Kenyan based learning website for learning experiences as perceived by kenyans. It embarks in bridging the gap of what is learnt in kenyan universities and colleges in terms of computer programming and networking. The site has been created by a creative kenyan mind <a href="https://www.deniskibathi.com">Denis Kibathi Karanja</a> who came up with the idea of this site. We will continue updating this site's content as we move on. Read more from<a href="story"> somatech site story</a> to learn about Somatech.
        </p>
        </div>
        </div>
        </div>
        
  </section>


<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>