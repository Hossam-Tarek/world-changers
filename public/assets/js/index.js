$(document).ready(function () {

    $(document).on('click', '.te .fa-eye-slash', function() {
        $(this).siblings('input').attr('type','text')
        $(this).removeClass('fa-eye-slash')
        $(this).addClass('fa-eye')
    })
    $(document).on('click', '.te .fa-eye', function() {
        $(this).siblings('input').attr('type','password')
        $(this).addClass('fa-eye-slash')
        $(this).removeClass('fa-eye')
    })
    $(document).on('click', '.open-nav-on-mobile', function() {
        $('.navigation').toggleClass('active')
    })
    $(document).on('mouseenter', '.navigation', function() {
        console.log("enter"); 
        $('.subjects-section').addClass('mr-250 overflow-hidden')
        $('.after-navbar-section').addClass('mr-250 overflow-hidden')
    })
    $(document).on('mouseleave', '.navigation', function() {
        $('.subjects-section').removeClass('mr-250 overflow-hidden')
        $('.after-navbar-section').removeClass('mr-250 overflow-hidden')
    })
    $(document).click(function (event) {
        console.log("ddd");
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("show");
        if (_opened === true && !clickover.hasClass("navbar-toggler")) {
            $("button.navbar-toggler").click();
        }
    });
    const marginTopFromNavbar = $("nav.navbar").outerHeight();
    $(".after-navbar-section").css("margin-top", marginTopFromNavbar);

    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
// show password
$(".show-password").on("click", function () {
    if ($(this).siblings("input").attr("type") === "password") {
        $(this).siblings("input").prop("type", "text");
        $(this).prop("src", "/assets/images/icons/eye-close.svg");
    } else {
        $(this).siblings("input").prop("type", "password");
        $(this).prop("src", "/assets/images/icons/password.svg");
    }
});
//form validation
document.querySelector("#email").addEventListener("blur", validateEmail);

document.querySelector("#password").addEventListener("blur", validatePassword);

const reSpaces = /^\S*$/;

function validateEmail(e) {
    e.preventDefault();
    const email = document.querySelector("#email");
    const re = /^([a-zA-Z0-9_\-?\.?]){3,}@([a-zA-Z]){3,}\.([a-zA-Z]){2,5}$/;

    if (reSpaces.test(email.value) && re.test(email.value)) {
        email.classList.remove("is-invalid");
        email.classList.add("is-valid");

        return true;
    } else {
        email.classList.add("is-invalid");
        email.classList.remove("is-valid");

        return false;
    }
}

function validatePassword(e) {
    e.preventDefault();

    const password = document.querySelector("#password");

    const re = /(?=.*\d)(?=.*[a-z])(.{6,})/;
    if (re.test(password.value) && reSpaces.test(password.value)) {
        password.classList.remove("is-invalid");
        password.classList.add("is-valid");

        return true;
    } else {
        password.classList.add("is-invalid");
        password.classList.remove("is-valid");

        return false;
    }
}

(function () {
    const forms = document.querySelectorAll(".needs-validation");

    for (let form of forms) {
        form.addEventListener(
            "submit",
            function (event) {
                if (
                    !form.checkValidity() ||
                    !validateEmail() ||
                    !validatePassword()
                ) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    form.classList.add("was-validated");
                }
            },
            false
        );
    }
})();
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    "use strict";
    window.addEventListener(
        "load",
        function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(
                forms,
                function (form) {
                    form.addEventListener(
                        "submit",
                        function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        },
                        false
                    );
                }
            );
        },
        false
    );
})();
