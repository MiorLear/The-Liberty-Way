document.addEventListener('mousedown', function (event) {
    const toggleMenu = document.querySelector('.menu');
    const targetElement = event.target;

    // Comprobar si el clic ocurrió fuera del menú o del botón de apertura
    if (!toggleMenu.contains(targetElement) && targetElement !== document.querySelector('.media')) {
        toggleMenu.classList.remove('active');
    }
});

function menuToggle() {
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active');
}





document.getElementById("fileImg").onchange = function () {
    document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

    document.getElementById("cancel").style.display = "block";
    document.getElementById("confirm").style.display = "block";

    document.getElementById("upload").style.display = "none";
}

var userImage = document.getElementById('image').src;
document.getElementById("cancel").onclick = function () {
    document.getElementById("image").src = userImage; // Back to previous image

    document.getElementById("cancel").style.display = "none";
    document.getElementById("confirm").style.display = "none";

    document.getElementById("upload").style.display = "block";
}





function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.getElementById("toggleIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}

function togglePasswordVisibility2() {
    var passwordInput = document.getElementById("password2");
    var toggleIcon = document.getElementById("toggleIcon2");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}

function togglePasswordVisibility3() {
    var passwordInput = document.getElementById("password3");
    var toggleIcon = document.getElementById("toggleIcon3");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}