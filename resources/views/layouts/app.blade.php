<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Home page of Bingster a web development and data science blog">
    <meta name="theme-color" content="#000000">
    <title>Bingster</title>
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="/css/main.css">
     <link rel="stylesheet" href="/css/tex.css">
</head>

<body>
    <div class="container">
       
        <!-- Navigation -->
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
            </ul>
        </nav>
       
 <main class="main">
            @yield('content')
        </main>                                                                                      
                                                                                          

   <section id="socail_links">
     <h5 style="display:none">Social Links </h5>
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
                    </li>
                </ul>
      
        </section>
</div>
<footer>

<div id="pages">
<div id="cookie-consent">
<h2>Cookie Policy</h2>
      <p>We use cookies to give you best experience on our website.</p>
      <button id="accept-cookies">Accept Cookies</button>  
      <button id="decline-cookies" class="remove-cookies" >Decline Cookies</button>
</div>

<ul>
    <li> <a href="/pages/cookie-policy/">Cookie Policy</a></li>
    <li> <a href="/pages/privacy-policy/">Privacy Policy</a></li>
    <li> <a href="/pages/accessiblity-policy/">Accessiblity Policy</a></li>
  </ul>
<div>
 
</footer> 

  <!-- Javascript -->
        <script>
 const overlay = document.getElementById('pages');
 const acceptButton = document.getElementById('accept-cookies');

document.addEventListener('DOMContentLoaded', function () {
  var removeButtons = document.querySelectorAll('.remove-cookies');

  function removeAllCookies() {
    var cookies = document.cookie.split("; ");
    for (var c = 0; c < cookies.length; c++) {
      var d = window.location.hostname.split(".");
      while (d.length > 0) {
        var cookieBase = encodeURIComponent(cookies[c].split(";")[0].split("=")[0]) + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=' + d.join('.') + ' ;path=';
        var p = location.pathname.split('/');
        document.cookie = cookieBase + '/';
        while (p.length > 0) {
          document.cookie = cookieBase + p.join('/');
          p.pop();
        }
        d.shift();
      }
    }
  }

  for (var i = 0; i < removeButtons.length; i++) {
    removeButtons[i].addEventListener('click', removeAllCookies);
  }
});




if (localStorage.getItem('cookiesAccepted')) {
      const overlay = document.getElementById('pages');
      const acceptButton = document.getElementById('accept-cookies');
      overlay.style.display = 'none';
}

if (!localStorage.getItem('cookiesAccepted')) {
      const overlay = document.getElementById('pages');
      const acceptButton = document.getElementById('accept-cookies');

      // Display the overlay
      overlay.style.display = 'flex';

      // Add event listener to the "Accept Cookies" button
      acceptButton.addEventListener('click', () => {
        // Set a flag in local storage to remember user's choice
        localStorage.setItem('cookiesAccepted', true);
        // Hide the overlay
        overlay.style.display = 'none';
      });
    }



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
