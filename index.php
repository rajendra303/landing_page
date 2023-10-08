<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#hero"> Astrologer</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#WhyChooseUs">Why Choose Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <section class="hero" id="hero">
        <h1>World Best Astrologer<span>.</span></h1>
        <p>Astrologer who has been offering his expert astrological services for many years. For the past 25 years, he has been an astrologer. He has inherited this talent from several generations of family members.</p>
    </section>



    <section class="about" id="about">
    <h2>About Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Astrology is a belief system and practice that suggests a connection between the positions and movements of celestial bodies, such as planets and stars, and various aspects of human life and personality. It's often used to gain insights into a person's character, behavior, and potential life events based on their birth chart, which is a map of the sky at the time and place of their birth. Astrologers interpret these celestial patterns to offer guidance, predictions, and self-awareness to individuals. While astrology is popular and deeply rooted in various cultures, it's considered a pseudoscience by the scientific community, as it lacks empirical evidence to support its claims.</p>
            </div>
            <div class="col-md-6">
                <img src="https://e0.pxfuel.com/wallpapers/388/435/desktop-wallpaper-high-quality-astrology-full-thumbnail.jpg" alt="Astrology Image">
            </div>
        </div>
    </div>
</section>







    <section class="WhyChooseUs" id="WhyChooseUs">
        <div class="container">
            <div class="col-md-6">
                <h2>Why Choose Us</h2>
                <p>His one true calling in life, his true love, and his sole true job is astrology. It runs in his blood. He is from a traditional Hindu Brahmin household. In addition to his father, he has had the honor of being mentored by a number of other Gurus who have imparted old astrological knowledge to him. Because individuals constantly come to him after hearing about how he helped others directly from their own mouths, he has never needed any type of publicity through television or the press.</p>
            </div>
            <div class="col-md-6 image">
                <img src="https://c4.wallpaperflare.com/wallpaper/462/891/725/zodiac-wallpaper-preview.jpg" alt="Astrology Image">
            </div>
        </div>
    </section>

    <section class="main">
        <div class="container">
            <div class="col-md-6">
                <p>He adheres to the traditional “vaidic sanatan” methods of astrology. Due to the stressful circumstances, we are currently experiencing, he has resorted to the internet to let people know that he is also at ease doing client sessions online.
                You can find the name “World Best Astrologer” with many nice reviews and a five-star rating if you search for “best astrologer near me” or similar terms in Google. So, don’t waste your time if you need to consult with the best astrologer in India, if you are really in trouble.</p>
            </div>
            <div class="col-md-6 image1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUfFay7_PEouaRhVyRAahsWHCQzwWTcxrLYQ&usqp=CAU" alt="Astrology Image">
            </div>
        </div>
    </section>

<section id="contact">
    <h1>Contact</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56127.56921606706!2d77.033757!3d28.450228!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19d582e38859%3A0x2cf5fe8e5c64b1e!2sGurugram%2C%20Haryana!5e0!3m2!1sen!2sin!4v1696682083329!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <form action="contact.php" method="post" role="form" class="php-email-form">
        <div class="form-row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
            <div class="text-center"><button type="submit">Send Message</button></div>
        </div>
    </form>
</section>


    <footer>
        <p>&copy; Rajendra Singh Negi</p>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
