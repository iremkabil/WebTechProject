var mailformat = /^[a-z]\d{10}@sakarya\.edu\.tr$/;
function emailV() {
  var email = document.myForm.password.value;
  var password = document.myForm.password.value;
  if (
    email.match(mailformat) &&
    email.substring(0, email.indexOf("@")) === password
  ) {
    if (email.classList.contains("is-invalid")) {
      email.classList.remove("is-invalid");
    }
    email.classList.add("is-valid");
  }else {
    if (email.classList.contains("is-valid")) {
      email.classList.remove("is-valid");
    }
    email.classList.add("is-invalid");
  }
}

function sifreV() {
  var password = document.myForm.password.value;
  var email = document.myForm.email.value;

  if (password === email.substring(0, email.indexOf("@"))) {
    if (password.classList.contains("is-invalid")) {
      password.classList.remove("is-invalid");
    }
    password.classList.add("is-valid");
  }  else {
    if (password.classList.contains("is-valid")) {
      password.classList.remove("is-valid");
    }
    password.classList.add("is-invalid");
  }
}


// var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// function emailV(){

//     if(document.myForm.email.value.match(mailformat)){

//         if(document.myForm.email.classList.contains("is-invalid"))
//         {
//             document.myForm.email.classList.remove("is-invalid");
//         }
//         document.myForm.email.classList.add("is-valid");
//     }
//     else
//     {
//         if(document.myForm.email.classList.contains("is-valid"))
//         {
//             document.myForm.email.classList.remove("is-valid");
//         }
//         document.myForm.email.classList.add("is-invalid");
//     }
// }

// function sifreV(){

//     if(Number.isInteger(parseInt(Number(document.myForm.password.value)))==true&&document.myForm.password.value!=""){
    
//         if(document.myForm.password.classList.contains("is-invalid"))
//         {
//             document.myForm.password.classList.remove("is-invalid");
//         }
//         document.myForm.password.classList.add("is-valid");
//     }
//     else
//     {
//         if(document.myForm.password.classList.contains("is-valid"))
//         {
//             document.myForm.password.classList.remove("is-valid");
//         }
//         document.myForm.password.classList.add("is-invalid");
//     }
// }
