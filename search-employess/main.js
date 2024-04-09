// Export Btn Submit And His Weapons
let btn_submit = document.getElementById("submit_self");
let request_document = document.getElementById("submit_request");
let cover = document.getElementById("all_request");
var body = document.getElementsByTagName("BODY")[0];
//

function check_us(cookieName) {
  return document.cookie.includes(cookieName + "=");
}

var us_exitst = check_us("us");

btn_submit.addEventListener("click", () => {
  if (us_exitst) {
    if (request_document.classList.contains("show_tr")) {
      $("#submit_request").fadeOut();
      request_document.classList.remove("show_tr");
      $("#all_request").fadeOut();
      body.style = "overflow: auto";
    } else {
      $("#submit_request").fadeIn();
      request_document.classList.add("show_tr");
      $("#all_request").fadeIn();
      body.style = "overflow: hidden";
    }
  } else {
    Swal.fire({
      title: "Note!",
      text: "You Are Not User For Submit Your Job ",
      footer:
        '<a href="../log_in/">Log in!</a> or <a href="../regester/">Regester!</a>',
      icon: "error",
    });
  }
});
function func() {
  $("#submit_request").fadeOut();
  request_document.classList.remove("show_tr");
  $("#all_request").fadeOut();
  body.style = "overflow: auto";
}

cover.addEventListener("click", () => {
  $("#submit_request").fadeOut();
  request_document.classList.remove("show_tr");
  $("#all_request").fadeOut();
  body.style = "overflow: auto";
});

// End Code Submit Request Job

// Start Ajax Try Code
/*
let submit_btn = document.getElementById("send_request");

submit_btn.addEventListener("click", function submitForm() {
  var kind_request = $('input[name="filter_form"]:checked').val();
  var title = $('input[name="tittle"]').val();
  var formData = { title: title, kind_request: kind_request };

  $.ajax({
    url: "",
    type: "POST1",
    data: formData,
    success: function (responce) {},
  });
});*/

let submit_btn = document.getElementById("send_request");
let msg_title = document.querySelector(".msg_title");
let tittle_inp = document.getElementById("tittle_inp");

submit_btn.addEventListener("click", function submitForm() {
  if (
    tittle_inp.value == "" ||
    tittle_inp.value.length > 36 ||
    tittle_inp.value.length <= 4
  ) {
    msg_title.innerHTML = "Failed, Type Between 4-36 Character";
    msg_title.style.color = "red";
  } else {
    $("#submit_request").fadeOut();
    request_document.classList.remove("show_tr");
    $("#all_request").fadeOut();
    body.style = "overflow: auto";
    tittle_inp.value = "";

    var filter_form = $('input[name="filter_form"]:checked').val();
    var title = $('input[name="title"]').val();

    var formData = { title: title, filter_form: filter_form }; // تغيير اسماء الحقول لتتناسب مع اسماء POST

    console.log("Function Inside Is Working");

    $.ajax({
      url: "submiter.php",
      type: "POST", // تغيير "POST1" إلى "POST"
      data: formData,
      success: function (response) {
        if (response === "Success, Job Added Successfcly") {
          Swal.fire({
            title: "Note",
            text: "Success, Job Added Successfcly",
            icon: "success",
          });
        } else if (response === "Failed, You already Submited A Job") {
          Swal.fire({
            title: "Note",
            text: "Failed, You already Submited A Job",
            icon: "error",
          });
        }
      },
      error: function (error) {
        Swal.fire({
          title: "Failed!",
          text: "Failed, Please Try Again There Is Some Thing Wrong", // تغيير إلى error.responseText للحصول على نص الخطأ
          icon: "error",
        });
      },
    });
  }
});

//
//

//

//

$(document).ready(function () {
  var search_btn = $("#btn_search");

  search_btn.on("click", function SearchForm() {
    var search_filter = $('input[name="filter"]:checked').val();
    var search_value = $('input[name="search"]').val();

    // قم بإرسال البيانات باستخدام Ajax
    $.ajax({
      url: "searcher.php",
      type: "POST",
      data: { search: search_value, filter: search_filter },
      success: function (response) {
        // جلب البيانات بنجاح
        // تحديث محتوى #offer_continer بالبيانات الجديدة
        $("#offer_continer").html(response);

        // قم بتبديل الفئة style_gr لكل عنصر بشكل تتابعي
        $("#offer_continer .offer").each(function (index) {
          $(this).toggleClass("style_gr", index % 2 !== 0);
        });
      },
      error: function (error) {
        // عملية الاستعلام فشلت
        console.error(error);
      },
    });
  });
});
//
//
//

$(document).ready(function () {
  // تعريف الحدث على الزر الأصلي
  $(document).on("click", ".foreach_btns", function () {
    var show_btn = $(this); // احتفظ بالزر الحالي
    $.ajax({
      url: "show.php",
      type: "POST",
      data: {}, // لا تحتاج لبيانات في هذا المثال
      success: function (response) {
        // جلب البيانات بنجاح
        // إضافة البيانات الجديدة إلى نهاية #offer_continer
        $("#offer_continer").html(response);

        // قم بتبديل الفئة style_gr لكل عنصر بشكل تتابعي
        $("#offer_continer .offer").each(function (index) {
          $(this).toggleClass("style_gr", index % 2 !== 0);
        });

        // إخفاء الزر الأصلي الذي تم النقر عليه
        show_btn.hide();
      },
      error: function (error) {
        // عملية الاستعلام فشلت
        console.error(error);
      },
    });
  });

  // تعريف الحدث على الزر الجديد داخل #offer_continer
  $(document).on("click", "#offer_continer .foreach_btns", function () {
    // إخفاء الزر الذي تم النقر عليه في #offer_continer
    $(this).hide();
  });
});

//

//

//

//

//

//

//

//

/* Mode Light And Dark */

window.onload = () => {
  if (mode === "light") {
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
    let sch_btn = document.querySelector("#btn_search");
    let inps = document.querySelectorAll("input");
    let booksmaker = document.querySelectorAll(".fa-bookmark");
    let comma_hr = document.querySelectorAll(".comma");
    let title_request = document.getElementById("label_tittle");
    let x_close = document.querySelector(".fa-x");

    x_close.style = "background: #fff;color: #000";

    title_request.style = "background: transparent;";

    logo_dark.style.display = "flex";
    logo_light.style.display = "none";

    all_bg.forEach((element) => {
      element.classList.add("bg_dark");
      element.classList.add("border_set");
    });

    all_font.forEach((element) => {
      element.classList.add("font_dark");
    });

    if (window.innerWidth < 900) {
      logo_unique_dark.style.display = "flex";
      logo_unique_light.style.display = "none";
      continer_li.classList.add("bg_dark");
    }

    const root = document.documentElement;
    root.style.setProperty("--color", "#fff");
    root.style.setProperty("--bg", "#1f2023");
    root.style.setProperty("--sc_bg", "#333");
    root.style.setProperty("--th_bg", "#333");
    root.style.setProperty("--gray_bg", "#b1b1b1");
    root.style.setProperty("--dids_bg", "#838383");

    comma_hr.forEach((element) => {
      element.style = "border-color: #838383 !important;";
    });

    inps.forEach((element) => {
      element.classList.add("inp_style_dark");
    });
    booksmaker.forEach((element) => {
      element.style = "color: #fff";
    });

    sch_btn.classList.add("search_btn_dark");
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

    mecanic.forEach((element) => {
      element.classList.add("filtring");
    });

    if (window.innerWidth < 900) {
      logo_unique_dark.style.display = "flex";
      logo_unique_light.style.display = "none";
      continer_li.classList.add("bg_dark");
    }

    hr_option.classList.add("hr_set");

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
