<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?> <!--Head include-->
    <title>Silver Hills Contact Us</title>
    <meta name="description" content="Silver Hills feedback form"> 
    <meta name="keywords" content="silver hills feedback, leave us a message, social media, responsive"> <!--Keywords for SEO-->
<style>
    .text{
        background-color: #990000; /*For the form - This page only!*/
    }
</style>
</head>
<body>
<main>
    <header>  <!--header starts here-->
        <?php include ("nav.php"); ?>
    </header> <!--Header ends here--> 
    
    <?php include("banner.php"); ?> <!--Banner include-->  
    
    <div class="row">
		<div class="col-sm-4 col-sm-offset-4 col-md-4 col-lg-4 col-xl-4 text-center">
            <div class="contactform">
    <form class="backform" action="confirm.php" method="get"> <!--My form-->
        <div class="form-group">
            <label class="text" for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Name" required> <!--Makes sure text is required or doesnt submit-->
        </div>
        <div class="form-group">
            <label class="text" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" required> <!--Makes sure email is valid format or doesnt submit-->
        </div>
        <div class="form-group">
            <label class="text" for="formMessage">Message</label>
            <textarea id="formMessage" name="message" class="form-control" placeholder="Please leave your feedback." rows="8" required="required" data-error="Please,leave us a message."></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>        
    
    <footer>
        <?php
             include("footer.php");
             ?>
    </footer> <!--Footer ends here-->
    
</main>
</body>
</html>