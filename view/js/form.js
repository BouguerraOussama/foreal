var category = document.getElementById("category"),
  namee = document.getElementById("name"),
  description = document.getElementById("description"),
  image1 = document.getElementById("image1"),
  form = document.getElementById("form"),
  errormsg = document.getElementsByClassName("error"),
  suc_icon = document.getElementsByClassName("success-icon"),
  fail_icon = document.getElementsByClassName("failure-icon");
  form.addEventListener("submit", (e) => {
  e.preventDefault();
   if (category.value === "") {

     errormsg[0].innerHTML = "category cannot be blank";
     fail_icon[0].style.opacity = "1";
     suc_icon[0].style.opacity = "0";
   } else {
     errormsg[0].innerHTML = "";
     fail_icon[0].style.opacity = "0";
     suc_icon[0].style.opacity = "1";
   }
  if (namee.value === "") {
    errormsg[1].innerHTML = "name cannot be blank";
    fail_icon[1].style.opacity = "1";
    suc_icon[1].style.opacity = "0";
  } else {
    errormsg[1].innerHTML = "";
    fail_icon[1].style.opacity = "0";
    suc_icon[1].style.opacity = "1";
  }
  if (description.value === "") {
    errormsg[2].innerHTML = "description cannot be blank";
    fail_icon[2].style.opacity = "1";
    suc_icon[2].style.opacity = "0";
  } else {
    errormsg[2].innerHTML = "";
    fail_icon[2].style.opacity = "0";
    suc_icon[2].style.opacity = "1";
  }

  if (image1.value === "") {
    errormsg[3].innerHTML = "you need to select images first";
    fail_icon[3].style.opacity = "1";
    suc_icon[3].style.opacity = "0";
  } else {
    errormsg[3].innerHTML = "";
    fail_icon[3].style.opacity = "0";
    suc_icon[3].style.opacity = "1";
  }
});
