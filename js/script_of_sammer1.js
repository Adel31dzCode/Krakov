// التحقق من وجود الكوكي "us"
var isUsCookiePresent = document.cookie.split(";").some(function (cookie) {
  return cookie.trim().startsWith("us=");
});

// التحقق من وجود الكوكي "ps"
var isPsCookiePresent = document.cookie.split(";").some(function (cookie) {
  return cookie.trim().startsWith("ps=");
});

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
    let logo_unique_dark = document.querySelector(".dark_on_only");
    let logo_unique_light = document.querySelector(".light_on_only");
    let mecanic = document.querySelectorAll(".mecanic");
    let continer_li = document.getElementById("cantainer_ul");

    if (isUsCookiePresent && isPsCookiePresent) {
      let list1 = document.querySelector(".top_pr");
      let list2 = document.querySelector(".top_bt");
      let list3 = document.querySelector(".top_md");

      list1.addEventListener("mouseenter", () => {
        list1.classList.add("bgger");
      });

      list1.addEventListener("mouseleave", () => {
        list1.classList.remove("bgger");
      });

      list2.addEventListener("mouseenter", () => {
        list2.classList.add("bgger");
      });

      list2.addEventListener("mouseleave", () => {
        list2.classList.remove("bgger");
      });

      list3.addEventListener("mouseenter", () => {
        list3.classList.add("bgger");
      });

      list3.addEventListener("mouseleave", () => {
        list3.classList.remove("bgger");
      });
    }

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

    if (!isUsCookiePresent && !isPsCookiePresent) {
      sign_btnsnes.classList.add("sin");
      let sign_btnsnes = document.querySelector(".sign");
    }
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
  if (line1.classList.contains("line_for_1")) {
    $("#tahari_for_nav").fadeIn(200);
  } else {
    $("#tahari_for_nav").fadeOut(200);
  }
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

if (isUsCookiePresent && isPsCookiePresent) {
  // import the login btn profile
  let profile_btn = document.querySelector(".logged_list");
  // import the list option profile
  let list_opt = document.getElementById("profile_opt");

  profile_btn.addEventListener("click", () => {
    if (list_opt.classList.contains("shower")) {
      $("#profile_opt").fadeOut();
      list_opt.classList.remove("shower");
      $("#tahari_for_menu").fadeOut(200);
    } else {
      $("#profile_opt").fadeIn();
      list_opt.classList.add("shower");
      $("#tahari_for_menu").fadeIn(200);
    }
  });

  document.onclick = function (e) {
    if (
      e.target.id !== "profile_opt" &&
      e.target.id !== "lister" &&
      e.target.id !== "username" &&
      e.target.id !== "profile_photo" &&
      e.target.id !== "ic"
    ) {
      $("#profile_opt").fadeOut();
      list_opt.classList.remove("shower");
      $("#tahari_for_menu").fadeOut(200);
    }
  };

  let notification_btn = document.querySelector(".notification");
  let menu_not = document.getElementById("menu_not");
  let cover = document.getElementById("tahari");

  notification_btn.addEventListener("click", () => {
    if (menu_not.classList.contains("apprencer")) {
      menu_not.classList.remove("apprencer");
      $("#menu_not").fadeOut(200);
      $("#tahari_for_not").fadeOut(200);
    } else {
      menu_not.classList.add("apprencer");
      $("#menu_not").fadeIn(200);
      $("#tahari_for_not").fadeIn(200);
    }
  });

  let log_out_btn = document.querySelector(".log_out");
  log_out_btn.addEventListener("click", () => {
    function deleteCookie(name) {
      document.cookie =
        name + "=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;";
    }
    deleteCookie("us");

    function deleteCookie1(name) {
      document.cookie =
        name + "=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;";
    }
    deleteCookie1("ps");
  });
}

let navver = document.getElementById("tahari_for_nav");

navver.addEventListener("click", () => {
  line2.classList.toggle("line_for_2");
  line1.classList.toggle("line_for_1");
  nav_bar.classList.toggle("come");
  $("#tahari_for_nav").fadeOut(200);
});
