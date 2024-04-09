// export next and back btn
let next = document.getElementById("next");
let back = document.getElementById("back");
// export username and password parent
let all_username = document.querySelector(".username_parent");
let all_password = document.querySelector(".pass_parent");
// export line progress and secend leve
let line = document.getElementById("line_prog");
let sc_lvl = document.getElementById("second_prog");
// export inp username and password
let username_inp = document.querySelector(".username_inp");
let password_inp = document.querySelector(".password_inp");
// export message error
let msg = document.getElementById("msg");
// set helper variable
let helper = false;
let one_time = false;
// on click in next function

next.addEventListener("click", (e) => {
  if (helper == true) {
    console.log("Should Submit the data");
    if (
      password_inp.value.length > 16 ||
      password_inp.value.length < 8 ||
      password_inp.value === ""
    ) {
      msg.innerHTML = "Error, Input Has Empty, Less Than 8 Or More Than 16";
      msg.style.color = "red";
      e.preventDefault();
    } else {
      e.eventDefault();
    }
  }

  e.preventDefault();
  if (
    username_inp.value.length > 14 ||
    username_inp.value === "" ||
    username_inp.value.length < 4
  ) {
    msg.innerHTML = "Error, Input Has Empty, Less Than 4 Or More Than 15";
    msg.style.color = "red";
    helper = false;
  } else {
    e.preventDefault();
    all_password.classList.add("bring");
    all_username.classList.add("throw");
    if (back.disabled == true) {
      back.disabled = !back.disabled;
    }
    line.classList.add("active");
    sc_lvl.classList.add("lvl_right_now");
    helper = true;
    if (one_time == false) {
      msg.innerHTML = "Type Your Password";
      msg.style.color = "#000";
      one_time = true;
    }
  }
});

//
//

back.addEventListener("click", (e) => {
  back.disabled = true;
  e.preventDefault();
  all_password.classList.remove("bring");
  all_username.classList.remove("throw");
  line.classList.remove("active");
  sc_lvl.classList.remove("lvl_right_now");
  helper = false;
  msg.innerHTML = "Type Username";
  msg.style.color = "#000";
  one_time = false;
});

// export moon and sun icon mode
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

// Mode Config [Hard To finded]
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
    let logo_light = document.querySelector(".light_logo");
    let logo_dark = document.querySelector(".dark_logo");
    let inps = document.querySelectorAll("input");
    let bg = document.querySelector(".bg");

    inps.forEach((element) => {
      element.classList.add("inp_bg");
      element.classList.add("plsh");
    });

    bg.classList.add("bg_dr");
    font_dark.forEach((element) => {
      element.classList.add("font_dark");
    });
    logo_light.style.display = "none";
    logo_dark.style.display = "block";
    console.log("dakesnss");
  }
};
