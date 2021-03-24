//load
$(window).on('load', function() {
    $(".loader").fadeOut();
    $("#preloder").delay(300).fadeOut("slow");
});
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.display = "none";
    } else {
        document.getElementById("navbar").style.display = "block";
    }
}

// login
function login() {
    document.getElementById('id01').style.display = 'block';
}


$("#search").click(function() {
    $("#ttk").hide(1000);
});


// Star Ranking
function init() {
    var rank = document.getElementById('star-rank');
    var stars = document.getElementsByClassName('star');
    var cardHdr = document.getElementById('card-header');

    rank.addEventListener('click', ranker, false);

    function ranker(e) {
        if (e.target.className == 'star star-selected') {
            removeColor();
            setColor(e.target.getAttribute('data'));
        } else {
            setColor(e.target.getAttribute('data'));
        }

        if (Number(e.target.getAttribute('data')) === 1) {
            removeColor();
        }
    }

    function removeColor(num) {
        var i;
        for (i = 0; i < stars.length; i++) {
            stars[i].classList.remove('star-selected');
        }

    }

    function setColor(num) {
        var i;
        for (i = 0; i < Number(num); i++) {
            var ph = (i * -1 + 4);
            stars[ph].className = 'star star-selected';
        }
    }
}

window.onload = function() {
    init();
};

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function information_open() {
    document.getElementById("mySideinfo").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function information_close() {
    document.getElementById("mySideinfo").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}


//login
function toggleSignup() {
    document.getElementById("login-toggle").style.backgroundColor = "#fff";
    document.getElementById("login-toggle").style.color = "#222";
    document.getElementById("signup-toggle").style.backgroundColor = "#f15e75";
    document.getElementById("signup-toggle").style.color = "#fff";
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
}

function toggleLogin() {
    document.getElementById("login-toggle").style.backgroundColor = "#f15e75";
    document.getElementById("login-toggle").style.color = "#fff";
    document.getElementById("signup-toggle").style.backgroundColor = "#fff";
    document.getElementById("signup-toggle").style.color = "#222";
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
}