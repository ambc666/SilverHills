<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?> <!--Head include-->
    <title>Silver Hills Water Activities</title>
    <meta name="description" content="Silver Hills water activities from october to march."> 
    <meta name="keywords" content="silver hills water activities, white water rafting, white water kayaking, white water canoeing, micro rafting, hot dogging, winter months, wet & wild, thrills, courses, paddling, solo and tandem, excitement, white water"> <!--Keywords for SEO-->
</head>
<body>
<main>
    <header>  <!--header starts here-->
        <?php include ("nav.php"); ?>
    </header> <!--Header ends here--> 
    
    <?php include("banner.php"); ?> <!--Banner include-->  
    
    <div class="row"><!--Row 1-->
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xl-10 col-xl-offset-1 bg-1 text-center">
        <h2>Water Based Activities</h2>
            <br>
            <p class="text">Our White Water Collection is only available in the winter months from October to the end of March.</p>
        </div>
    </div>
    
    <div class="row"><!--Row 2-->
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-2 col-xl-2 col-xl-offset-2 bg-1 text-center"> <!-- Box 1 -->
        <h2>White Water Rafting</h2>
            <h3>Wet & Wild Adrenaline pumping white water!</h3>
            <p class="text">A must for those who enjoy getting wet and love white-knuckle rides. From the tranquil head waters and scenic gorges of the River Wye to the thrills and spills of the thundering white water of Hell Hole!</p>
            <img class="waterimg" src="img/rafting.jpg" alt="Group of people rafting in rough waters">
        </div>
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-3 col-lg-offset-2 col-xl-3 col-xl-offset-2 bg-1 text-center"> <!-- Box 2 -->
        <h2>White Water Kayaking</h2>
            <h3>Experience the thrills of White Water Kayaking!</h3>
            <p class="text">We offer 2 day courses throughout the winter for those who have done some kayaking previously and want to improve their skills and experience the excitement of paddling white water.</p>
            <img class="waterimg" src="img/woman-kayak.jpg" alt="Woman relaxing in a yellow kayak in calm waters">
        </div>        
    </div>
    
    <div class="row"><!--Row 3-->
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-2 col-xl-2 col-xl-offset-2 bg-1 text-center"> <!-- Box 1 -->
        <h2>White Water Canoeing</h2>
            <h3>Discover White Water Canoeing.</h3>
            <p class="text">Two days designed to introduce you to the thrills and spills of white water and aimed at flat water paddlers, solo or tandem, who want to develop their white water boat-handling skills.</p>
            <img class="waterimg" src="img/man-canoe.jpg" alt="Young man rowing in a canoe along a river">
        </div>
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-3 col-lg-offset-2 col-xl-3 col-xl-offset-2 bg-1 text-center"> <!-- Box 2 -->
        <h2>Micro Rafting (Hot Dogging)</h2>
            <h3>Tried White Water Rafting? NOW experience Hot Dogging!</h3>
            <p class="text">Paddling these inflatable rafts/kayaks is great fun, and the excitement as you follow your river guide through some of Scotland' most demanding grade 2 to 3 white water is a must for those who enjoy getting wet and love white-knuckle rides.</p>
            <img class="waterimg" src="img/water-rafting.jpg" alt="Family of three playing with water pistols while sitting on a raft">
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