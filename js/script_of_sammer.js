let options = document.getElementById("option_mode");
let button_mode = document.querySelector(".btn_mode");

if (window.innerWidth > 1000) {
  button_mode.addEventListener("mouseenter", () => {
    if (!options.classList.contains("show")) {
      $("#option_mode").fadeIn(200);
      options.classList.toggle("show");
    }
  });
  button_mode.addEventListener("mouseleave", () => {
    $("#option_mode").fadeOut(200);
    options.classList.toggle("show");
  });
}

let mode = window.localStorage.getItem("mode");
let light_btn = document.querySelector(".light_btn");
let dark_btn = document.querySelector(".dark_btn");
let check_light = document.querySelector(".check_light");
let check_dark = document.querySelector(".check_dark");

/* Set Light Mode Onload The Web One Once */
if (!mode) {
  window.localStorage.setItem("mode", "light");
}
/* End Code Set Mode Light */

/* Events Click The Dark And Light Btn */
dark_btn.addEventListener("click", () => {
  window.localStorage.setItem("mode", "dark");
  console.log("it's dark");
  location.reload();
});
light_btn.addEventListener("click", () => {
  window.localStorage.setItem("mode", "light");
  console.log("it's light");
  location.reload();
});
/* End Events Click The Dark And Light Btn */

// Onload Do Light Or Night
window.onload = () => {
  if (mode === "light") {
    // Events Change Colors And Bg To Light Mode

    /* Declare Again */

    let all_font = document.querySelectorAll(".font");
    let all_bg = document.querySelectorAll(".bg");
    let logo_dark = document.querySelector(".dark_on");
    let logo_light = document.querySelector(".light_on");
    let hr_option = document.getElementById("break");
    let right_now = document.querySelector(".right_now");
    let centry = document.querySelector(".dark_on");
    let log_btnses = document.querySelectorAll(".set_log_dark");
    let sign_btnsnes = document.querySelector(".sign");
    let continer_li = document.querySelector(".cantainer_ul");

    /* End Declare */

    all_font.forEach((element) => {
      element.classList.remove("font_dark");
    });
    all_bg.forEach((element) => {
      element.classList.remove("bg_dark");
      element.classList.remove("border_set");
    });
    /*mecanic.forEach((element) => {
      element.classList.add("filtring");
    });*/

    if (window.innerWidth < 300) {
      logo_unique_dark.style.display = "none";
      logo_unique_light.style.display = "flex";
    }

    logo_dark.style.display = "none";
    logo_light.style.display = "flex";
    hr_option.classList.remove("hr_set");
    right_now.classList.remove("right");
    centry.classList.remove("centry");

    sign_btnsnes.classList.remove("sin");
    log_btnses.forEach((element) => {
      element.classList.remove("log_set");
    });
    // Hover Dark Setting
    dark_btn.addEventListener("mouseenter", () => {
      dark_btn.style.backgroundColor = "";
    });
    dark_btn.addEventListener("mouseleave", () => {
      dark_btn.style.backgroundColor = "";
    });

    light_btn.addEventListener("mouseenter", () => {
      light_btn.style.backgroundColor = "";
    });
    light_btn.addEventListener("mouseleave", () => {
      light_btn.style.backgroundColor = "";
    });

    // End Hover Settings

    // End Events Change Colors And Bg To Light Mode
  } else if (mode === "dark") {
    // Events Change Colors And Bg To Dark Mode
    let all_font = document.querySelectorAll(".font");
    let all_bg = document.querySelectorAll(".bg");
    let logo_dark = document.querySelector(".dark_on");
    let logo_light = document.querySelector(".light_on");
    let hr_option = document.getElementById("break");
    let right_now = document.querySelector(".right_now");
    let centry = document.querySelector(".dark_on");
    let log_btnses = document.querySelectorAll(".set_log_dark");
    let sign_btnsnes = document.querySelector(".sign");
    let logo_unique_dark = document.querySelector(".dark_on_only");
    let logo_unique_light = document.querySelector(".light_on_only");
    let mecanic = document.querySelectorAll(".mecanic");
    let continer_li = document.getElementById("cantainer_ul");

    all_font.forEach((element) => {
      element.classList.add("font_dark");
    });
    all_bg.forEach((element) => {
      element.classList.add("bg_dark");
      element.classList.add("border_set");
    });
    mecanic.forEach((element) => {
      element.classList.add("filtring");
    });

    if (window.innerWidth < 900) {
      logo_unique_dark.style.display = "flex";
      logo_unique_light.style.display = "none";
      continer_li.classList.add("bg_dark");
    }

    hr_option.classList.add("hr_set");
    logo_dark.style.display = "flex";
    logo_light.style.display = "none";
    right_now.classList.add("right");
    centry.classList.add("centry");
    sign_btnsnes.classList.add("sin");

    log_btnses.forEach((element) => {
      element.classList.add("log_set");
    });
    // Hover Dark Setting

    if (window.innerWidth < 900) {
      button_mode.addEventListener("mouseenter", () => {
        button_mode.style.backgroundColor = "#121212";
      });
      button_mode.addEventListener("mouseleave", () => {
        button_mode.style.backgroundColor = "#333";
      });
    }

    dark_btn.addEventListener("mouseenter", () => {
      dark_btn.style.backgroundColor = "#161616";
    });
    dark_btn.addEventListener("mouseleave", () => {
      dark_btn.style.backgroundColor = "#333";
    });

    light_btn.addEventListener("mouseenter", () => {
      light_btn.style.backgroundColor = "#161616";
    });
    light_btn.addEventListener("mouseleave", () => {
      light_btn.style.backgroundColor = "#333";
    });

    // End Hover Settings

    // Upload Here More Codes

    // End Events Change Colors And Bg To Dark Mode
  }
};

setInterval(() => {
  if (mode === "light") {
    check_dark.style.display = "none";
    check_light.style.display = "inline-block";
  } else if (mode === "dark") {
    check_dark.style.display = "inline-block";
    check_light.style.display = "none";
  }
}, 1);

let burger_btn = document.getElementById("burger_menu");
let line1 = document.querySelector(".line_top");
let line2 = document.querySelector(".line_middle");
let nav_bar = document.getElementById("cantainer_ul");

burger_btn.addEventListener("click", () => {
  line2.classList.toggle("line_for_2");
  line1.classList.toggle("line_for_1");
  nav_bar.classList.toggle("come");
});

button_mode.addEventListener("click", () => {
  if (options.style.opacity === "1") {
    options.style.opacity = "0";
    options.style.height = "0";
    options.style.display = "none";
  } else {
    options.style.opacity = "1";
    options.style.display = "block";
    options.style.height = `${dark_btn.offsetHeight * 2 + 4}px`;
  }
});
