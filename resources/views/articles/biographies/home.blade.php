<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Home page of Bingster a web development and data science blog">
    <meta name="theme-color" content="#000000" />
    <title>Bingster</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="/css/app.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans|Saira+Extra+Condensed');
html,
body {
    margin: 0;
    scroll-behavior: smooth;
}

a {
    text-decoration: none;
}

ul {
    list-style: none;
}

body {
    background: linear-gradient(90deg, #080808 0%, #343434 30%, #262627 67%, #080808 100%);
    background-size: 100%;
}

@keyframes background {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 100% 0;
    }
}


/* Section Properties */

section {
    min-height: 100vh;
    margin-left: 20%;
}


.content-padding {
    position: relative;
    padding: 0 5vw 0 1vw;
}


/* Font Properties */

.main {
    font-family: 'Serif', serif;
    line-height: 1.5rem;
    width: 60%;
    margin: 0 auto;
}

.title {
    font-family: 'Saira Extra Condensed', sans-serif;
    font-weight: 200;
    margin: 0;
}

.section-title {
    font-size: 4rem;
    left: 14%;
    position: relative;
}

.item-title {
    font-size: 1.8rem;
}

.item-subtitle {
    font-size: 1.4rem;
    font-weight: 500;
    color: #5d6369;
}


/* Item Properties */

.item-wrapper {
    display: flex;
    margin-bottom: 7vh;
    width: 70%;
    margin: 15%;
}

.item {
    display: block;
    width: 70%;
}

.item-right {
    display: block;
    width: 30%;
}

.item-date {
    margin-top: 8px;
}

.align {
    text-align: right;
}


/* Bulleted List Properties */

.list {
    display: flex;
    flex-direction: column;
}

.list-item {
    margin-left: 10px;
}

.indent {
    display: inline-block;
    margin: 0 0 0 10px;
}


/* Colors */

.red {
    color: #D30000;
}

.dark-red {
    color: #990000;
}

.grey {
    color: #5d6369;
}
.blue {
    color: #2d8cea;
}

/* Navigation ----------------------------------------------- */

.nav {
    width: 18%;
    height: 100%;
    background-color: #000000;
    position: fixed;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.nav a {
    color: #777777;
    font-family: 'Segoe UI', sans-serif;
    text-transform: uppercase;
    display: block;
    padding: 10px;
    margin-right: 40px;
}

.nav a:hover {
    color: rgb(228, 228, 228);
}

.nav a:active,
.nav a:focus-within {
    color: #ffffff;
}

.rounded-img {
    border-radius: 50%;
    width: 10rem;
    height: 10rem;
    border: .5rem solid rgba(255, 255, 255, .2);
}

.nav-title {
    display: none;
}

.menu-bars .fa {
    display: none;
}


/* About ---------------------------------------------------- */



.main-title {
    font-size: 2rem;
    font-weight: 200;
    line-height: 2rem;
    
}

.sub-title {
    font-size: 1.5rem;
    font-weight: 500;
    color: #5d6369;
    line-height: 2rem;
    margin: 0;
}

.social-icons {
    display: flex;
    position: fixed;
    margin-top: 3vh;
    right: 40px;
    bottom: 0;
  }


.social-icons .icons {
    display: block;
    position: relative;
    flex-direction: row;
    margin-left: 15px;
}

.circle {
    font-size: 3.5rem;
}

.social-icon {
    font-size: 1rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}


/* Experience ----------------------------------------------- */

.experience-content-top {
    top: 5vh;
}


/* Education ------------------------------------------------ */


/* Skills --------------------------------------------------- */

.skill-icons {
    display: flex;
    margin-top: 5vh;
    margin-bottom: 8vh;
}

.icons {
    display: block;
    position: relative;
    flex-direction: row;
    margin-left: 75px;
}

.no-margin-left {
    margin-left: -1vw;
}

.skill-icon {
    font-size: 3.5rem;
    position: absolute;
    top: 50%;
    left: 55%;
    transform: translate(-50%, -50%);
}

#diamond {
    font-size: 3rem;
}



/* Responsive Design Media Queries */


/* 1080 Resolution and Larger */

@media screen and (min-width: 800px) and (min-height: 945px) {
    .content-top {
        top: 32vh;
    }
}


/*    Regular Laptop Fullscreen */

@media screen and (min-width: 800px) and (min-height: 901px) and (max-height: 944px) {
    .content-top {
        top: 32vh !important;
    }
}


/*    Regular Laptop */

@media screen and (min-width: 800px) and (min-height: 780px) and (max-height: 900px) {
    .content-top {
        top: 28vh;
    }
}


/* Navigation Collapse */

@media screen and (max-width: 1080px) {
    section {
        margin-left: 0;
    }
    .content-padding {
        padding: 0 1rem;
    }
    /* Navigation ----------------------------------- */
    .navbar-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background-color: #000;
        z-index: 100;
    }
    .menu-bars .fa {
        color: #fff;
        font-size: 30px;
        display: initial;
        position: absolute;
        top: 10px;
        left: 12px;
    }
    .nav {
        width: 100%;
        height: 210px;
        margin-top: 50px;
        z-index: 20;
        top: -500px;
        transition: 0.75s ease;
    }
    .nav-expand {
        top: 0;
        transition: 0.3s ease;
    }
    .nav a {
        padding: 5px;
    }
    .display-picture {
        display: none;
    }
    .nav-title {
        color: #fff;
        font-size: 32px;
        display: initial;
        position: absolute;
        left: 43%;
    }
}

/* About --------------------------------------------- */
    .about-content-top {
        top: 22vh;
    }
    .main-title {
        line-height: 2rem;
    }
    .circle {
        font-size: 3rem;
    }
    .social-icon {
        font-size: 1.75rem;
    }
    /* Experience ---------------------------------------- */
    /* .experience-content-top { top: 6vh; } */
    .item-wrapper {
        display: block;
    }
    .item {
        width: 100%;
    }
    .item-right {
        width: 100%;
    }
    .align {
        text-align: left;
    }
    /* Skills -------------------------------------------- */
    .skill-icons {
        margin-left: -77px;
    }
    .icons {
        margin-left: 60px;
    }
    .skill-icon {
        font-size: 3rem;
    }
    #diamond {
        font-size: 2.5rem;
    }
    .line-height {
        line-height: 4rem;
        margin-bottom: 4vh;
    }



/*   iPhone X */

@media screen and (max-width: 400px) {
    .social-icons .icons {
        margin-left: 12px;
    }
    .small-text {
        font-size: .9rem;
    }
}


/*   iPhone 6/7/8 */

@media screen and (max-width: 400px) and (max-height: 699px) {
    .content-top {
        top: 10vh;
    }
}


/*   iPhone 5 */

@media screen and (max-width: 350px) and (max-height: 600px) {
    .nav-title {
        left: 28%;
    }
    .smaller-text {
        font-size: .8rem;
    }
    /* About -------------------------*/
    .about-content-top {
        top: 12vh;
    }
    .main-title {
        font-size: 6rem;
        line-height: 5rem;
    }
    .sub-title {
        font-size: 1.4rem;
    }
    .circle {
        font-size: 2.5rem;
    }
    .social-icon {
        font-size: 1.45rem;
    }
    /* Skills -----------------------*/
    .icons {
        margin-left: 50px;
    }
    .skill-icon {
        font-size: 2.5rem;
    }
    #diamond {
        font-size: 2rem;
    }
}

/* iPad Pro */

@media screen and (min-width: 1024px) and (max-width: 1366px) {
    .rounded-img {
        height: 8rem;
        width: 8rem;
    }
}


/* iPad */

@media screen and (min-width: 650px) and (max-width: 768px) {
    .nav-title {
        left: 40%;
    }
}


/* Large Mobile */

@media screen and (max-width: 600px) {
    .nav-title {
        left: 32%;
    }
    .content-top {
        top: 12vh;
    }
}
</style>

</head>

<body>
    <div class="container">
        <div id="particles-js"></div>
        
        
        <!-- Navigation ------------------------------------------------------>
        <div class="navbar-background">
            <a href="index.html">
                <span class="title nav-title">Bingster
              </span>
            </a>
            <div class="menu-bars" onclick="Toggle()">
                <i class="fab fa-bars fa"></i>
            </div>
        </div>

        <nav class="nav" id="nav">
            <ul onclick="Toggle()">
                <li class="display-picture">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
		<li><a href="/articles">Articles</a></li>
                <li><a href="/projects">Projects</a></li>
                <li><a href="/message">Message</a></li>
              
            </ul>
        </nav>
       
       
        <section id="about">
            <ul class="social-icons">
                    <li class="icons">
                        <a href="https://github.com/b1ngster/" target="_blank" rel="noopener" title="Github">
                            <span class="fa-layers-fa-fw">
                            <i class="fas fa-circle circle red"></i>
                            <i class="fab fa-github fa-inverse social-icon"></i>
                        </span>
                        </a>
                    </li>
                    <li class="icons">
                        <a href="https://twitter.com/_bingster_/" target="_blank" rel="noopener" title="Twitter">
                            <span class="fa-layers-fa-fw">
                            <i class="fas fa-circle circle red"></i>
                            <i class="fab fa-twitter fa-inverse social-icon"></i>
                        </span>
                        </a>
                    </li>
                    <li class="icons">
                        <a href="https://www.linkedin.com/in/garyblackpool/" target="_blank" rel="noopener" title="Linkedin">
                            <span class="fa-layers-fa-fw">
                            <i class="fas fa-circle circle red"></i>
                            <i class="fab fa-linkedin-in fa-inverse social-icon"></i>
                        </span>
                        </a>
                    </li><br>
                </ul>
            </div>
        </section>
        <!-- Experience ------------------------------------------------------>
        
        </section>
        <!-- Javascript -->
        <script>
            function Toggle() {
                var x = document.getElementById("nav");
                if (x.className === "nav") {
                    x.className += " nav-expand";
                } else {
                    x.className = "nav";
                }
            }
        </script>
</body>

</html>
