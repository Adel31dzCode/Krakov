// Export Btns :
let btn_prev = document.getElementById("prev");
let btn_next = document.getElementById("nxt");
// Export Inputs Parent :
let username_parent = document.querySelector(".user");
let country_parent = document.querySelector(".country");
let skill_parent = document.querySelector(".skill");
let email_parent = document.querySelector(".email");
let password_parent = document.querySelector(".password");
// Export Inputs :
let username_inp = document.querySelector(".user_inp");
let country_inp = document.querySelector(".cont_inp");
let skill_inp = document.querySelector(".skl_inp");
let email_inp = document.querySelector(".email_inp");
let password_inp = document.querySelector(".pss_inp");
// Export Msg From All The Parent Inputs :
let msg_username = document.querySelector(".user_msg");
let msg_country = document.querySelector(".country_msg");
let msg_skill = document.querySelector(".skill_msg");
let msg_email = document.querySelector(".email_msg");
let msg_password = document.querySelector(".password_msg");
// The 3 Three Continers
let continer_1 = document.getElementById("custom_fr");
let continer_2 = document.getElementById("custom_sc");
let continer_3 = document.getElementById("custom_th");
let continer_4 = document.getElementById("custom_fo");
// Range Progress
var lineElement = document.querySelector(".line");
var computedStyle = window.getComputedStyle(lineElement, "::before");
var currentWidth = parseInt(computedStyle.width) || 0;

// Range Levels
let first_lvl = document.querySelector(".fr");
let secend_lvl = document.querySelector(".sc");
let three_lvl = document.querySelector(".th");

// Another Var
var lvl = 1;
var username_checker = false;
var country_checker = false;
var skills_checker = false;
var email_checker = false;
var password_checker = false;
//
//
//

btn_next.addEventListener("click", (e) => {
  //   LVL 3 SRATED
  if (lvl == 3) {
    if (
      !email_inp.value.match(
        /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
      )
    ) {
      msg_email.innerHTML = "Failed, Email Not Valid";
      msg_email.style.color = "red";
      email_checker = false;
    } else {
      email_checker = true;
      msg_email.innerHTML = "Type Your Email Above";
      msg_email.style.color = "inherit";
    }

    if (
      password_inp.value == "" ||
      password_inp.value.length < 4 ||
      password_inp.value.length >= 16
    ) {
      msg_password.innerHTML =
        "Failed, Input Empty Or Less Than 4 Or More Than 16";
      msg_password.style.color = "red";
    } else {
      password_checker = true;
      msg_password.innerHTML = "Create Your Password";
      msg_password.style.color = "inherit";
    }

    if (!email_checker == true && !password_checker == true) {
      e.preventDefault();
    }
  }

  //   LVL 2 SRATED
  if (lvl == 2) {
    if (!country_inp.value) {
      msg_country.innerHTML = "Failed, Please Choose Your Country";
      msg_country.style.color = "red";
      country_checker = false;
    } else {
      country_checker = true;
      msg_country.innerHTML = "Select Your Country";
      msg_country.style.color = "inherit";
    }
    if (
      skill_inp.value.length >= 26 ||
      skill_inp.value == "" ||
      skill_inp.value.length < 4
    ) {
      msg_skill.innerHTML = "Failed, Input Empty Or More Than 26";
      msg_skill.style.color = "red";
      skills_checker = false;
    } else {
      skills_checker = true;
      msg_skill.innerHTML = "Ex: Barber, Restaurant!";
      msg_skill.style.color = "inherit";
    }

    if (skills_checker == true && country_checker == true) {
      lvl = 3;
      continer_2.classList.remove("act");
      continer_3.classList.add("act");
      var newWidth = Math.min(currentWidth + 100, 100);
      lineElement.style.setProperty("--before-width", newWidth + "%");
      e.preventDefault();
      three_lvl.classList.add("lvl_passed");
    } else {
      e.preventDefault();
    }
  }

  //   LVL 1 SRATED

  if (lvl == 1) {
    if (
      username_inp.value.length >= 14 ||
      username_inp.value == "" ||
      username_inp.value.length < 4 /* ||
      username_inp.value.match(/^[a-zA-Z_ء]+$/) */
    ) {
      msg_username.innerHTML =
        "Failed, Input Empty, Less Than 4 Or More Than 14";
      msg_username.style.color = "red";
      username_checker = false;
    } else {
      username_checker = true;
      msg_username.innerHTML = "Create Your Username";
      msg_username.style.color = "inherit";
    }

    // Manegment
    if (username_checker == true) {
      continer_1.classList.add("dsb");
      continer_2.classList.add("act");
      var newWidth = Math.min(currentWidth + 50, 100);
      lineElement.style.setProperty("--before-width", newWidth + "%");
      lvl = 2;
      e.preventDefault();
      secend_lvl.classList.add("lvl_passed");
      btn_prev.removeAttribute("disabled");
    } else {
      e.preventDefault();
    }
  }
});
btn_prev.addEventListener("click", (e) => {
  if (lvl == 3) {
    lvl = 2;
    continer_2.classList.add("act");
    continer_3.classList.remove("act");
    var newWidth = Math.min(currentWidth + 50, 100);
    lineElement.style.setProperty("--before-width", newWidth + "%");
    btn_next.preventDefault();
    three_lvl.classList.remove("lvl_passed");
  }
  if (lvl == 2) {
    lvl = 1;
    continer_1.classList.remove("dsb");
    continer_2.classList.remove("act");
    var newWidth = Math.min(currentWidth + 0, 100);
    lineElement.style.setProperty("--before-width", newWidth + "%");
    secend_lvl.classList.remove("lvl_passed");
    btn_prev.setAttribute("disabled", "true");
  }
});

//

let moon = document.querySelector(".dark");
let sun = document.querySelector(".light");
let btns = document.querySelector(".child_lst");

moon.addEventListener("click", () => {
  moon.classList.add("none");
  sun.classList.add("block");
  moon.classList.remove("block");
  sun.classList.remove("none");
  window.localStorage.setItem("mode", "dark");
  location.reload();
});
sun.addEventListener("click", () => {
  moon.classList.add("block");
  sun.classList.add("none");
  moon.classList.remove("none");
  sun.classList.remove("block");
  window.localStorage.setItem("mode", "light");
  location.reload();
});

let mode = window.localStorage.getItem("mode");

if (!mode) {
  window.localStorage.setItem("mode", "light");
}

if (mode === "light") {
  sun.style.display = "none";
  moon.style.display = "block";
} else if (mode === "dark") {
  sun.style.display = "block";
  moon.style.display = "none";
}

window.onload = () => {
  if (mode === "dark") {
    let font_dark = document.querySelectorAll(".font_dr");
    let bg = document.querySelectorAll(".bg");
    let inps = document.querySelectorAll("input");
    let logo_dr = document.querySelector(".logo_dark");
    let logo_lt = document.querySelector(".logo_light");

    if (window.innerWidth < 900) {
      logo_lt.style.display = "none";
      logo_dr.style.display = "block";
    }

    inps.forEach((element) => {
      element.classList.add("inp_bg");
      element.classList.add("plsh");
    });

    bg.forEach((element) => {
      element.classList.add("bg_dr");
    });
    font_dark.forEach((element) => {
      element.classList.add("font_dark");
    });
  }
};
