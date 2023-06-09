<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Quienes_Somos.css">
</head>
<body>
    Hola Mundo este es "¿Quienes somos?"

<section class="carousel" aria-label="Gallery">
    <ol class="carousel__viewport">
        <li id="carousel__slide1"
            tabindex="0"
            class="carousel__slide">
        <div class="carousel__snapper">
            <a href="#carousel__slide6"
            class="carousel__prev">Go to last slide</a>
            <a href="#carousel__slide2"
            class="carousel__next">Go to next slide</a>
        </div>
        </li>
        <li id="carousel__slide2"
            tabindex="0"
            class="carousel__slide">
        <div class="carousel__snapper"></div>
        <a href="#carousel__slide1"
            class="carousel__prev">Go to previous slide</a>
        <a href="#carousel__slide3"
            class="carousel__next">Go to next slide</a>
        </li>
        <li id="carousel__slide3"
            tabindex="0"
            class="carousel__slide">
        <div class="carousel__snapper"></div>
        <a href="#carousel__slide2"
            class="carousel__prev">Go to previous slide</a>
        <a href="#carousel__slide4"
            class="carousel__next">Go to next slide</a>
        </li>
        <li id="carousel__slide4"
            tabindex="0"
            class="carousel__slide">
        <div class="carousel__snapper"></div>
        <a href="#carousel__slide3"
            class="carousel__prev">Go to previous slide</a>
        <a href="#carousel__slide5"
            class="carousel__next">Go to first slide</a>
        </li>
        <li id="carousel__slide5"
            tabindex="0"
            class="carousel__slide">
        <div class="carousel__snapper"></div>
        <a href="#carousel__slide4"
            class="carousel__prev">Go to previous slide</a>
        <a href="#carousel__slide6"
            class="carousel__next">Go to first slide</a>
        </li>
        <li id="carousel__slide6"
            tabindex="0"
            class="carousel__slide">
        <div class="carousel__snapper"></div>
        <a href="#carousel__slide5"
            class="carousel__prev">Go to previous slide</a>
        <a href="#carousel__slide1"
            class="carousel__next">Go to first slide</a>
        </li>   
    </ol>
    <aside class="carousel__navigation">
        <ol class="carousel__navigation-list">
            <li class="carousel__navigation-item">
                <a href="#carousel__slide1"
                class="carousel__navigation-button">Go to slide 1</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide2"
                class="carousel__navigation-button">Go to slide 2</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide3"
                class="carousel__navigation-button">Go to slide 3</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide4"
                class="carousel__navigation-button">Go to slide 4</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide5"
                class="carousel__navigation-button">Go to slide 5</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide6"
                class="carousel__navigation-button">Go to slide 6</a>
            </li>
        </ol>
    </aside>
</section>






<div class="container">
    <div class="swiper swiperCarousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px" height="125px"></svg>
                    <div class="header">
                        <h1 class="name">Jared Foster</h1>
                        <h2 class="title">Sr. Tech Journalist, Digital Frontier</h2>
                    </div>
                    <div class="quote-container">
                        <p class="quote">
                            As a technology journalist, I've seen numerous gadgets come and go. However, the MindSync Neural Interface isn't just a flash in the pan - it's here to revolutionize the way we perceive and interact with technology. The convenience it brings, coupled with its stellar performance, makes it more than just a device - it's an experience. One that is utterly transformative in the truest sense of the word.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px" height="125px"></svg>
                    <div class="header">
                        <h1 class="name">Jared Foster</h1>
                        <h2 class="title">Sr. Tech Journalist, Digital Frontier</h2>
                    </div>
                    <div class="quote-container">
                        <p class="quote">
                            As a technology journalist, I've seen numerous gadgets come and go. However, the MindSync Neural Interface isn't just a flash in the pan - it's here to revolutionize the way we perceive and interact with technology. The convenience it brings, coupled with its stellar performance, makes it more than just a device - it's an experience. One that is utterly transformative in the truest sense of the word.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
</body>
</html>