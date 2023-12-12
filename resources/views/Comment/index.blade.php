<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Feedback System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- Demo styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'font-serif';
        }

        section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #29332b;
            overflow: hidden;
        }

        .swiper-container {
            width: 100%;
            margin: 0 auto;

            /* padding-top: 50px;
            padding-bottom: 50px; */
        }

        .swiper-slide {
            display: flex;
            justify-content: space-between;
            /* text-align: center; */
            background-position: center;
            background-size: cover;
            width: 500px;
            height: 500px;
            background: #250821;
            box-shadow: 0 0 0.5rem #39ff14;
            filter: blur(4px);
            border-radius: 10px;
        }

        .swiper-slide-active {
            filter: blur(0px);
            background: #29332b;

        }

        .testimonialBox {
            position: relative;
            /* max-width: 500px;
            max-height: 300px; */
            padding: 40px;
            padding-top: 70px;
            color: white;
        }

        .testimonialBox .quote {
            position: absolute;
            top: 20px;
            left: 30px;
            transform: rotate(180deg);
        }

        .testimonialBox .quote1 {
            position: absolute;
            top: 20px;
            right: 30px;
            transform: rotate(360deg);
        }

        .testimonialBox .comment {
            height: 300px;
            width: 400px;
            overflow-y: auto;
            word-wrap: break-word;
            overflow-x: hidden;
            scrollbar-width: thin;
            scrollbar-color: #39ff14 #29332b;
        }

        .comment::-webkit-scrollbar {
            width: 0.5rem;
        }

        .comment::-webkit-scrollbar-track {
            background: #29332b;
        }

        .comment::-webkit-scrollbar-thumb {
            background: #39ff14;
            border-radius: 5rem;
        }

        .testimonialBox .details {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .testimonialBox .details .imgBx {
            position: relative;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
            box-shadow: 0 0 0.5rem #39ff14;
        }

        .testimonialBox .details .imgBx img {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;

        }

        .testimonialBox .details h3 {
            font-size: 20px;
            font-weight: 400;
            letter-spacing: 1px;
            color: #39ff14;
            line-height: 1.1em;
            text-shadow: 0 0 0.5rem #39ff14;
        }

        .testimonialBox .details h3 span {
            font-size: 16px;
            color: #39ff14;
        }

        @media (max-width: 600px) {

            .swiper-slide {
                width: 400px;
                height: 500px;
            }

            .testimonialBox .comment {
                height: 300px;
                width: 320px;
                overflow-y: auto;
                word-wrap: break-word;
                overflow-x: hidden;
                scrollbar-width: thin;
                scrollbar-color: #39ff14 #29332b;
            }
        }

        @media (max-width: 500px) {

            .swiper-slide {
                width: 300px;
                height: 500px;
            }

            .testimonialBox .comment {
                height: 300px;
                width: 200px;
                overflow-y: auto;
                word-wrap: break-word;
                overflow-x: hidden;
                scrollbar-width: thin;
                scrollbar-color: #39ff14 #29332b;
            }

            .testimonialBox .details h3 {
                font-size: 16px;
                font-weight: 400;
                letter-spacing: 1px;
                color: #39ff14;
                line-height: 1.1em;
                text-shadow: 0 0 0.5rem #39ff14;
            }

            .testimonialBox .details h3 span {
                font-size: 12px;
                color: #39ff14;
            }
        }

        @media (max-width: 350px) {

            .swiper-slide {
                width: 200px;
                height: 500px;
            }

            .testimonialBox .details .imgBx {
                position: relative;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                overflow: hidden;
                box-shadow: 0 0 0.5rem #39ff14;
            }

            .testimonialBox .details .imgBx img {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .testimonialBox .comment {
                height: 300px;
                width: 150px;
                overflow-y: auto;
                word-wrap: break-word;
                overflow-x: hidden;
                scrollbar-width: thin;
                scrollbar-color: #39ff14 #29332b;
            }

            .testimonialBox .details h3 {
                font-size: 12px;
                font-weight: 400;
                letter-spacing: 1px;
                color: #39ff14;
                line-height: 1.1em;
                text-shadow: 0 0 0.5rem #39ff14;
            }

            .testimonialBox .details h3 span {
                font-size: 10px;
                color: #39ff14;
            }
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <section>
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                @foreach ($comments as $comment)
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            {{-- <img src="images/quote.png" class="quote">
                            <img src="images/quote.png" class="quote1"> --}}
                            <div class="content">
                                <div class="comment">
                                    <p><i style="color: #39ff14;"
                                            class='text-2xl	text-green-700 bx bxs-quote-alt-left bx-tada'></i>&nbsp;{{ $comment->comment }}&nbsp;<i
                                            style="color: #39ff14;"
                                            class='text-2xl	text-green-700 bx bxs-quote-alt-right bx-tada'></i>
                                    </p>
                                </div>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="{{ asset('images/users/' . $comment->photo) }}" alt=""
                                            srcset="">
                                    </div>
                                    <h3>{{ $comment->first_name }}
                                        {{ $comment->last_name }}<br><br><span>{{ $comment->current_position }}<br>
                                            ({{ $comment->current_company }})
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
        });

        // Pause autoplay on hover
        var swiperContainer = document.querySelector(".mySwiper");

        swiperContainer.addEventListener("mouseenter", function() {
            swiper.autoplay.stop();
        });

        // Resume autoplay on mouse leave
        swiperContainer.addEventListener("mouseleave", function() {
            swiper.autoplay.start();
        });
    </script>
</body>

</html>
