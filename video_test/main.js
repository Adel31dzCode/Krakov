$("#btn-data").click(() => {
  $.ajax({
    url: "data.php",
    success: (output) => {
      $("#container").html(output);
    },
    error: (error) => {
      console.log(error);
    },
  });
});
