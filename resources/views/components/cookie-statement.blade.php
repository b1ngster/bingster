<div class="cookie-statement">
    <!-- Your cookie statement content goes here -->
    <p>This website uses cookies to enhance user experience...</p>
    <button class="btn btn-primary" id="accept-cookies">Accept Cookies</button>
</div>

<!-- JavaScript code to handle cookie acceptance -->
<script>
    document.getElementById('accept-cookies').addEventListener('click', function() {
        // Set a cookie to remember that the user has accepted the cookies
        document.cookie = "cookies_accepted=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
        // Hide the cookie statement
        document.querySelector('.cookie-statement').style.display = 'none';
    });
</script>
