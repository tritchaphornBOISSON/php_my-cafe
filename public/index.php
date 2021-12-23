<?php require_once 'header.php'; ?>
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <div class="carousel-inner">
            <div class="carousel-item overlay active">
                <img src="images/places-g90fdb29b8_1920.jpg" class="d-block w-100" alt="Inside cafe">
                <div class="carousel-caption d-none d-md-block">
                    <h3>The best place to start your day</h3>
                </div>
            </div>
            <div class="carousel-item  overlay">
                <img src="images/coffee-gcb24277b7_1920.jpg" class="d-block w-100" alt="coffee and notebook">
                <div class="carousel-caption d-none d-md-block">
                    <h3>With the variety of baked goods and drinks</h3>
                </div>
            </div>
            <div class="carousel-item overlay">
                <img src="images/coffee-g252ad5a16_1920.jpg" class="d-block w-100" alt="coffee and notebook">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Come and enjoy your time here</h3>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container container-section">
    <div class="row presentation">
        <h2>Refresh your day here!</h2>
        <div class="col-lg-3 present-description">
            <div class="image-cropper">
                <img class="present-icon" src="images/coffeecup2.png" alt="hot coffee">
            </div>
            <h4>Heading</h4>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
        <div class="col-lg-3 present-description">
            <div class="image-cropper">
                <img class="present-icon" src="images/pancake2.png" alt="pancake">
            </div>
            <h4>Heading</h4>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        </div>
        <div class="col-lg-3 present-description">
            <div class="image-cropper">
                <img class="present-icon" src="images/smoothie2.png" alt="banana smoothie">
            </div>
            <h4>Heading</h4>
            <p>And lastly this, the third column of representative placeholder content.</p>
        </div>
        <div class="col-lg-3 present-description">
            <div class="image-cropper">
                <img class="present-icon" src="images/cake2.png" alt="cake">
            </div>
            <h4>Heading</h4>
            <p>And lastly this, the third column of representative placeholder content.</p>
        </div>
    </div>
</div>
<div class="container container-section">
    <div class="row about-us-home">
        <div class="col-md-6 col-sm-12">
            <h2 class="brown-text">Our Story! <span class="light-green-text">It’ll blow your mind.</span></h2>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda atque, debitis delectus doloribus ea eaque eos fugit ipsa ipsam maxime minus molestias nesciunt nulla numquam provident sit ullam unde, ut voluptatem. Architecto commodi consequatur cupiditate dignissimos enim esse in iste mollitia necessitatibus nihil provident quaerat quas reprehenderit, sapiente unde.</p>
            <button type="button" class="btn btn-outline-primary">Find out more!</button>
        </div>
        <div class="col-md-6 col-sm-12">
            <img src="images/people-2592338_1920.jpg" alt="inside cafe">
        </div>
    </div>
</div>




<div class="container container-section top-rated">
    <h2>Our top rated menus</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card" style="width: 22rem;">
                <img src="images/waffle-1351308_1920.jpg" class="card-img-top" alt="pancake">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 22rem;">
                <img src="images/cocoa-4527164_1920.jpg" class="card-img-top" alt="hot cocoa">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 22rem;">
                <img src="images/milk-3176015_1920.jpg" class="card-img-top" alt="strawberry smoothie">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container container-section">
    <div class="p-3 mb-3 rounded-3 testimonials-title">
        <div class="container-fluid">
            <h2 class="display-5 fw-bold">Our Happy Customers</h2>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 rounded-3 testimonials">
                <div class="col-6 customer-image">
                    <img src="images/woman.png" alt="woman">
                </div>
                <div class="col-6 customer-text">
                    <h2>Lily Beauty</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 rounded-3 testimonials">
                <div class="col-6 customer-image">
                    <img src="images/spring.png" alt="woman">
                </div>
                <div class="col-6 customer-text">
                    <h2>Jack Handsome</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container container-section chefs-section">
    <h2>Meet our baristas and our bakers</h2>
    <div class="row chefs">
        <div class="col-3 all-chefs" id="chef1">

        </div>
        <div class="col-3 all-chefs" id="chef2">

        </div>
        <div class="col-3 all-chefs" id="chef3">

        </div>
        <div class="col-3 all-chefs" id="chef4">

        </div>

    </div>
</div>

<div class="containter-fluid book-table">
    <div class="row">
        <div class="col-7">
            <h2>Book a table!</h2>
            <div class="row g-3 row-form">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
            </div>
            <div class="row g-3 row-form">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number">
                </div>
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email address" aria-label="Email address">
                </div>
            </div>
            <div class="row g-3 row-form">
                <div class="col">
                    <input  class="form-control" placeholder="Date" aria-label="Date"  type="text" onfocus="(this.type='date')" id="date">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Time" aria-label="Time">
                </div>
            </div>
            <div class="row g-3 row-form">
                <div class="col">
                    <textarea type="text" class="form-control" placeholder="Your note" aria-label="Your note"></textarea>
                </div>
            </div>
            <div class="row g-3 row-form">
                <div class="col">
                    <button class="btn book-button" type="button">Reserve me one table please..</button>
                </div>
            </div>
        </div>
        <div class="col-5">
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>

