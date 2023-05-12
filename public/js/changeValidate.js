
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
function emailV(){

    if(document.myForm.email.value.match(mailformat)){

        if(document.myForm.email.classList.contains("is-invalid"))
        {
            document.myForm.email.classList.remove("is-invalid");
        }
        document.myForm.email.classList.add("is-valid");
    }
    else
    {
        if(document.myForm.email.classList.contains("is-valid"))
        {
            document.myForm.email.classList.remove("is-valid");
        }
        document.myForm.email.classList.add("is-invalid");
    }
}

function sifreV(){

    if(Number.isInteger(parseInt(Number(document.myForm.password.value)))==true&&document.myForm.password.value!=""){
    
        if(document.myForm.password.classList.contains("is-invalid"))
        {
            document.myForm.password.classList.remove("is-invalid");
        }
        document.myForm.password.classList.add("is-valid");
    }
    else
    {
        if(document.myForm.password.classList.contains("is-valid"))
        {
            document.myForm.password.classList.remove("is-valid");
        }
        document.myForm.password.classList.add("is-invalid");
    }
}