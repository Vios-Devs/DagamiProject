<?php
    include_once "header.php"

?>

    <div id="banner-section">
        <div class="black-bg">
            <h1 class="banner-text">It's more fun in <span class="yellow-text">Dagami</span></h1>
            <a href="#random-photos" class="banner-btn">View more</a>
        </div>
    </div>

    <div id="about-content">
        <div class="container about-text">
            <h2 class="title">What is Dagami?</h2>
            <p class="paragraph">Dagami is one of the many towns in Leyte that has contributed much to the growth of the province.  From its natural wonders, to its bountiful agriculture, to its irresistable culinary delicacies, Dagami continues to be a vital land of potential for Leyte.</p>
            <p class="paragraph"><span class="p-bold">Etymology</span> – Dinagami to Dagami!<br> Locals indicate the name "Dagami" first arose during a confrontation between a group of Spaniards and a group of farmers during the Spanish colonial period:</p>
            <p class="paragraph"><span class="p-italic">“One harvest season, Spanish soldiers inquired a group of men and women harvesting rice nearby the name of the community that was a few meters away. The natives thought that they were asking for a definite term for the field after rice had been harvested and answered, "Dinagami, a Senior." The Spanish had such difficulty in pronouncing Dinagami that the natives ridiculed them. Having felt insulted, one of the civil guards shouted angrily in Spanish, "Dagami or Dawian makes no difference! This place is Dagami, Dagami, Dagami! You Indios! What a queer language you speak." From then on, Dagilan was changed to Dagami by the village folk who thought the name was most suited for the place.”<span></p>
            <a href="about.php" class="read-more">Read more</a>
        </div>
    </div>
<div id="slider-content-wrap">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="Images/ilovedagami.jpg" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="item">
                    <img src="Images/church-1.jpg" alt="Chicago" style="width:100%;">
                </div>
                <div class="item">
                    <img src="Images/binagol.jpg" alt="New york" style="width:100%;">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div> 
</div>    


    <div id="map-section"></div>

    <?php
        include_once "footer.php"
    ?>


 <script src="./assets/vanilla.js"></script>

</body>
</html>