let btn = document.querySelector(".button-86_");
btn.onclick = function name(e) {
  e.preventDefault();
  window.open("#inp_continer", "_self");
};

// Export List Title
let all_ttl = document.querySelectorAll(".title");
let main_ttl = document.querySelector(".main");
let friend_ttl = document.querySelector(".frnd_requ");
let describe_ttl = document.querySelector(".desc");
let gender_ttl = document.querySelector(".gend");
let secutiry_ttl = document.querySelector(".sec_set");
let features_ttl = document.querySelector(".fut_feat");
let saved_ttl = document.querySelector(".sav");
let contact_ttl = document.querySelector(".cont");
// Export Sections
let all_sections = document.querySelectorAll(".sections");
let for_main = document.getElementById("for_main");
let for_friend = document.getElementById("for_friend");
let for_describe = document.getElementById("for_describe");
let for_gender = document.getElementById("for_gender");
let for_security = document.getElementById("for_security");
let for_features = document.getElementById("for_features");
let for_saved = document.getElementById("for_saved");
let for_contact = document.getElementById("for_contact");

main_ttl.addEventListener("click", () => {
  all_ttl.forEach((element) => {
    element.classList.remove("current");
  });
  main_ttl.classList.add("current");
  all_sections.forEach((element) => {
    element.classList.add("none");
    element.classList.remove("block");
  });
  for_main.classList.add("block");
  for_main.classList.remove("none");
});

friend_ttl.addEventListener("click", () => {
  all_ttl.forEach((element) => {
    element.classList.remove("current");
  });
  friend_ttl.classList.add("current");
  all_sections.forEach((element) => {
    element.classList.add("none");
    element.classList.remove("block");
  });
  for_friend.classList.add("block");
  for_friend.classList.remove("none");
});

describe_ttl.addEventListener("click", () => {
  all_ttl.forEach((element) => {
    element.classList.remove("current");
  });
  describe_ttl.classList.add("current");
  all_sections.forEach((element) => {
    element.classList.add("none");
    element.classList.remove("block");
  });
  for_describe.classList.add("block");
  for_describe.classList.remove("none");
});

gender_ttl.addEventListener("click", () => {
  all_ttl.forEach((element) => {
    element.classList.remove("current");
  });
  gender_ttl.classList.add("current");
  all_sections.forEach((element) => {
    element.classList.add("none");
    element.classList.remove("block");
  });
  for_gender.classList.add("block");
  for_gender.classList.remove("none");
});

secutiry_ttl.addEventListener("click", () => {
  all_ttl.forEach((element) => {
    element.classList.remove("current");
  });
  secutiry_ttl.classList.add("current");
  all_sections.forEach((element) => {
    element.classList.add("none");
    element.classList.remove("block");
  });
  for_security.classList.add("block");
  for_security.classList.remove("none");
});

features_ttl.addEventListener("click", () => {
  all_ttl.forEach((element) => {
    element.classList.remove("current");
  });
  features_ttl.classList.add("current");
  all_sections.forEach((element) => {
    element.classList.add("none");
    element.classList.remove("block");
  });
  for_features.classList.add("block");
  for_features.classList.remove("none");
});

saved_ttl.addEventListener("click", () => {
  all_ttl.forEach((element) => {
    element.classList.remove("current");
  });
  saved_ttl.classList.add("current");
  all_sections.forEach((element) => {
    element.classList.add("none");
    element.classList.remove("block");
  });
  for_saved.classList.add("block");
  for_saved.classList.remove("none");
});

contact_ttl.addEventListener("click", () => {
  all_ttl.forEach((element) => {
    element.classList.remove("current");
  });
  contact_ttl.classList.add("current");
  all_sections.forEach((element) => {
    element.classList.add("none");
    element.classList.remove("block");
  });
  for_contact.classList.add("block");
  for_contact.classList.remove("none");
});

var typed2 = new Typed("#dsn", {
  strings: [
    " ",
    " ",
    "Adel31_dz",
    "Web Designer",
    "Photo Editor",
    "Photo Taker",
    "Full Stack",
    "Athlete",
    "Politician",
  ],
  typeSpeed: 70,
  backSpeed: 30,
  cursorChar: "_",
  shuffle: true,
  smartBackspace: false,
  loop: true,
});

function displaySelectedImage(input) {
  var preview = document.getElementById("profile_photo_local");
  var statusMessage = document.querySelector(".bug");

  // Check if a file is selected
  if (input.files && input.files[0]) {
    // Check if the selected file is an image
    if (input.files[0].type.startsWith("image/")) {
      // Check if the image size is greater than 1 MB
      if (input.files[0].size > 1024 * 1024 * 5) {
        showErrorMessage("Image size should be less than 1 MB");
        return; // Stop further execution
      }

      var reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);

      // Clear status message if an image is selected
      clearStatusMessage();
    } else {
      // If the selected file is not an image
      showErrorMessage("Please, choose an image");
    }
  } else {
    // If no file is selected
    showErrorMessage("You haven't uploaded an image");
  }
}

function showErrorMessage(message) {
  // Use SweetAlert2 to display the error message in a popup
  Swal.fire({
    icon: "error",
    title: "Oops...",
    text: message,
  });
}

function clearStatusMessage() {
  // Clear any existing status messages if needed
}

// Export Msgs
let msg_username = document.getElementById("msg_username");
let msg_email = document.getElementById("msg_email");
let msg_skills = document.getElementById("msg_skills");
// Export Inputs
let inp_username = document.querySelector(".username_inp");
let inp_email = document.querySelector(".email_inp");
let inp_skills = document.querySelector(".skills_inp");
// submit btn
let btn_sub = document.getElementById("sub_info_preso");

btn_sub.addEventListener("click", (e) => {
  if (
    !inp_username.value.match(/[a-zA-Z0-9]/) ||
    inp_username.value.length < 4 ||
    inp_username.value.length > 14
  ) {
    msg_username.innerHTML = "Failed, Username Is Not Valid";
    msg_username.style.color = "red";
    e.preventDefault();
  } else {
    msg_username.innerHTML = "Change Your Username Here!";
    msg_username.style.color = "inherit";
  }

  if (
    !inp_email.value.match(
      /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
    ) ||
    inp_email.value.length > 26
  ) {
    msg_email.innerHTML = "Failed, Email Not Valid";
    msg_email.style.color = "red";
    e.preventDefault();
  } else {
    msg_email.innerHTML = "Change Your Email Here!";
    msg_email.style.color = "inherit";
  }

  if (
    !inp_skills.value === "" ||
    inp_skills.value.length >= 24 ||
    inp_skills.value.length < 4
  ) {
    msg_skills.innerHTML = "Failed, Skills Not Correct";
    msg_skills.style.color = "red";
    e.preventDefault();
  } else {
    msg_skills.innerHTML = "Change Your Skills Here!";
    msg_skills.style.color = "inherit";
  }
});

let icon_close = document.querySelector(".fa-x");
let menu = document.getElementById("tittles");
let burger_icon = document.getElementById("barger_tittle");

burger_icon.addEventListener("click", () => {
  menu.classList.add("backup");
});
icon_close.addEventListener("click", () => {
  menu.classList.remove("backup");
});
all_ttl.forEach((element) => {
  element.addEventListener("click", () => {
    menu.classList.remove("backup");
  });
});

// modes

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
    const root = document.documentElement;
    root.style.setProperty("--color", "#fff");
    root.style.setProperty("--bg", "#1f2023");
    root.style.setProperty("--bg_btn", "#e4e4e4");
    root.style.setProperty("--txt_btn", "#131a21");
    root.style.setProperty("--th_bg", "#333");
    root.style.setProperty("--bs-body-bg", "#333");
    root.style.setProperty("--bs-body-color", "#fff");
    root.style.setProperty("--bs-tertiary-bg", "#333");
    root.style.setProperty("--sc_bg", "#333");
    root.style.setProperty("--sc_color", "#ababab");

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

    all_ttl.forEach((element) => {
      element.addEventListener("mouseenter", () => {
        element.classList.add("hover_cls");
      });
      element.addEventListener("mouseleave", () => {
        element.classList.remove("hover_cls");
      });
    });
  }
};
