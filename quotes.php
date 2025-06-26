<?php
$images = [
    "img/quote 2.jpg",
    "img/quote 3.jpg",
    "img/quote 4.jpg"
];
?>

<div class="row m-3 py-5 justify-content-center">
    <div class="col-md-9 d-flex flex-column">
        <h2 class="text-center mb-4">Words you didn’t ask for, but maybe needed.</h2>
        <div id="CarouselSlide" class="carousel slide" data-bs-ride="carousel" style="box-shadow: 4px 6px 7px 0px rgba(0,0,0, 0.50);">
            
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="img/quote 1.jpg" class="d-block w-100" alt="Quote 1">
                </div>

                <?php
                foreach ($images as $index => $image_path) {
                    echo '<div class="carousel-item" data-bs-interval="3000">';
                    echo '  <img src="' . $image_path . '" class="d-block w-100" alt="Quote ' . ($index + 2) . '">';
                    echo '</div>';
                }
                ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#CarouselSlide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#CarouselSlide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>