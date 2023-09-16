<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>
<?php include('includes/navbar.php'); ?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="images/smiling-attractive-woman-stylish-colorful-outfit-jumping-with-shopping-bags-pink-yellow-background-polo-neck-striped-mini-skirt-shopaholic-sale-fashion-summer-trend_285396-2421.avif" class="d-block" alt="">
            </div>
            <div class="carousel-item active">
                <img src="images/1000_F_272320686_WPr0zMuDxazM8QmRRuBcKj3GtHxrCYMY.jpg" class="d-block" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/joyful-girl-with-curly-brown-hair-dancing-purple-background-with-kissing-face-expression_197531-7071.avif" class="d-block" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/1000_F_138479672_hjSTOQfYxoJmKRRfDcprOFFb727kGnIn.jpg" class="d-block" alt="">
            </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="sm-photo">
    <div class="ph-left w-25">
        <img src="images/photo-1674574124473-e91fdcabaefc.avif" class="" alt="">
        <h4>Hot Collection</h4>
        <h1>New Trend For Women</h1>
        <p class=" text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet excepturi, voluptatem quasi deleniti quidem ratione quia neque dicta animi perferendis?</p>
        <button type="button" class="btn btn-outline-dark px-4 text-muted">Shop Now</button>
    </div>
    <div class="ph-right">
        <img src="images/photo-1559563458-527698bf5295.avif" class="" alt="">
        <img src="images/photo-1542375344054-b1f28d71d914.avif" class="" alt="">
    </div>
</div>

</bode>

<style scoped>

.carousel-item .d-block{
    width: 100%;
    height: 80vh;
}
.carousel{
    width: 100%;
    height: 80vh;
}

/* sm-photo */
.sm-photo{
    display: flex;
    justify-content: space-between;
    margin: 4.5vh 30vh 5vh 30vh;
}
.sm-photo img{
    width: 80vh;
    height: 52vh;
}
.ph-left h4{
    color: #e11299;
    margin: 2.5vh 0 1vh 0;  
    font-size: 4.5vh;
    /* font-family: 'Lobster', cursive; */
    font-family: 'Parisienne', cursive;
}
.ph-left h1{
    width: 70vh;
    font-weight: 400;
}
.ph-left p{
    width: 70vh;
}
.ph-right{
    width: 37%;
    margin-right: 10vh;
}
.ph-right img{
    width: 70vh;
    height: 45vh;
    margin-bottom: 2vh;
}

/* Featured items */

</style>