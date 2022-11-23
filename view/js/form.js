var category = document.getElementById("category"),
  name = document.getElementById("name"),
  description = document.getElementById("description"),
  image1 = document.getElementById("image1"),
  form = document.getElementById("form"),
  errormsg = document.getElementsByClassName("error"),
  suc_icon = document.getElementsByClassName("success-icon"),
  fail_icon = document.getElementsByClassName("failure-icon");
  form.addEventListener("submit", (e) => {
  e.preventDefault();
  if (name.value === "") {
    errormsg[0].innerHTML = "name cannot be blank";
    fail_icon[0].style.opacity = "1";
    suc_icon[0].style.opacity = "0";
  } else {
    errormsg[0].innerHTML = "";
    fail_icon[0].style.opacity = "0";
    suc_icon[0].style.opacity = "1";
  }
  if (description.value === "") {
    errormsg[1].innerHTML = "description cannot be blank";
    fail_icon[1].style.opacity = "1";
    suc_icon[1].style.opacity = "0";
  } else {
    errormsg[1].innerHTML = "";
    fail_icon[1].style.opacity = "0";
    suc_icon[1].style.opacity = "1";
  }

  if (image1.value === "") {
    errormsg[2].innerHTML = "Username cannot be blank";
    fail_icon[2].style.opacity = "1";
    suc_icon[2].style.opacity = "0";
  } else {
    errormsg[2].innerHTML = "";
    fail_icon[2].style.opacity = "0";
    suc_icon[2].style.opacity = "1";
  }
});
