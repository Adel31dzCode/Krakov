// التحقق من وجود الكوكي "us"
var isUsCookiePresent = document.cookie.split(";").some(function (cookie) {
  return cookie.trim().startsWith("us=");
});

// التحقق من وجود الكوكي "ps"
var isPsCookiePresent = document.cookie.split(";").some(function (cookie) {
  return cookie.trim().startsWith("ps=");
});

// Get Started Button Effect Start
const letters = Array.from(document.querySelectorAll(".letter"));
letters.forEach((letter) => {
  let timerId;
  const ripple = document.createElement("div");
  ripple.classList.add("ripple");
  letter.appendChild(ripple);

  letter.addEventListener("mousedown", (e) => {
    clearTimeout(timerId);
    const size = letter.offsetWidth;
    const pos = letter.getBoundingClientRect();
    const x = e.pageX - pos.left - size;
    const y = e.pageY - pos.top - size;
    ripple.style =
      "top:" +
      y +
      "px; left:" +
      x +
      "px; width: " +
      size * 2 +
      "px; height: " +
      size * 2 +
      "px;";
    ripple.classList.remove("active");
    ripple.classList.remove("start");
    console.log("worked");
    setTimeout(() => {
      ripple.classList.add("start");
      setTimeout(() => {
        ripple.classList.add("active");
      });
    });
  });

  letter.addEventListener("mouseup", (e) => {
    clearTimeout(timerId);
    timerId = setTimeout(() => {
      ripple.classList.remove("active");
      ripple.classList.remove("start");
    }, 800);
  });
});

//Get Started Button Effect End

let ranges = document.querySelector(".parent_range");
let progress = document.querySelectorAll(".persent");

let six_sec = document.querySelector(".six_sec");
let nums = document.querySelectorAll(".number");
let reaction = true;

window.onscroll = () => {
  setTimeout(() => {
    if (window.scrollY >= ranges.offsetTop - 1000) {
      progress.forEach((span) => {
        span.style.width = span.dataset.width;
      });
      console.log("why");
    } else {
      progress.forEach((span) => {
        span.style.width = "0%";
      });
    }
  }, 500);

  if (window.scrollY >= six_sec.offsetTop - 500 && reaction == true) {
    nums.forEach((num) => {
      start_count(num);
    });
    reaction = false;
  }
};

function start_count(e) {
  let goal = e.dataset.goal;
  let counter = setInterval(() => {
    e.textContent++;
    if (e.textContent == goal) {
      clearInterval(counter);
    }
  }, 3000 / goal);
}

let titleFollowMouse = document.querySelector(".tittle_folowwong");

function updateTitlePosition(e) {
  titleFollowMouse.style.left = e.clientX + 20 + "px";
  titleFollowMouse.style.top = e.clientY - 30 + "px";
}

window.addEventListener("mousemove", updateTitlePosition);

function showTitle(text) {
  var title = document.getElementById("custom-title");
  title.innerHTML = text;
  title.style.display = "block";
}

function hideTitle() {
  var title = document.getElementById("custom-title");
  title.style.display = "none";
}

/* Mode Light And Dark */

window.onload = () => {
  if (mode === "light") {
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

    all_font.forEach((element) => {
      element.classList.remove("font_dark");
    });
    all_bg.forEach((element) => {
      element.classList.remove("bg_dark");
      element.classList.remove("border_set");
    });

    if (window.innerWidth < 300) {
      logo_unique_dark.style.display = "none";
      logo_unique_light.style.display = "flex";
    }

    logo_dark.style.display = "none";
    logo_light.style.display = "flex";
    hr_option.classList.remove("hr_set");
    right_now.classList.remove("right");
    centry.classList.remove("centry");

    if (!isUsCookiePresent && !isPsCookiePresent) {
      sign_btnsnes.classList.remove("sin");
    }

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
  } else if (mode === "dark") {
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
    let icon_dr = document.querySelector(".ic_dr");
    let tittle_important = document.querySelectorAll(".tittle_im");
    let staticts = document.querySelectorAll(".statistics");
    let color_num = document.querySelectorAll(".num");
    let four_section = document.querySelector(".four_sec");
    let num = document.querySelectorAll(".numbe");
    let static_contoner = document.querySelectorAll(".static");
    let img_mark = document.querySelectorAll(".brnd");
    let lit_tittle = document.querySelectorAll(".manager_comunuty");
    let txt_gradient = document.getElementById("date_last");
    let hr_dark = document.querySelectorAll(".comma_brands");
    let fromes_email = document.querySelector(".from");
    let rng = document.querySelectorAll(".range");

    icon_dr.classList.add("filtring_of_imgs");
    four_section.classList.add("special_dark");
    txt_gradient.classList.add("speacial_for_gradient");
    fromes_email.classList.add("lit_tittle");

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

    rng.forEach((element) => {
      element.classList.add("range_bg");
    });
    hr_dark.forEach((element) => {
      element.classList.add("speacial_bg");
    });
    lit_tittle.forEach((element) => {
      element.classList.add("lit_tittle");
    });
    img_mark.forEach((element) => {
      element.classList.add("filtring_of_imgs");
    });
    static_contoner.forEach((element) => {
      element.classList.add("special_dark");
    });
    num.forEach((element) => {
      element.classList.add("important_tittles");
    });
    color_num.forEach((element) => {
      element.classList.add("important_tittles");
    });
    staticts.forEach((element) => {
      element.classList.add("bg_dark_little");
    });
    tittle_important.forEach((element) => {
      element.classList.add("important_tittles");
    });
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
      let sign_btnsnes = document.querySelector(".sign");
      sign_btnsnes.classList.add("sin");
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
  }
};
