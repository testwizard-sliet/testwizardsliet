let navbar = document.querySelector('.header .navbar')

document.querySelector('#menu-btn').onclick = () =>{
  navbar.classList.add('active');
}

document.querySelector('#close-navbar').onclick = () =>{
  navbar.classList.remove('active');
};

function validateLoginform() {
  var username = document.login_form.email_username.value;
  var password = document.login_form.password.value;

  if (username == null || username == "" && password == null || password == "") {
    alert("Username/Email and Password can't be blank.");
    return false;
  }
  else if (username == null || username == "") {
    alert("Username/Email can't be blank.");
    return false;
  }
  else if (password == null || password == "") {
    alert("Password can't be blank.");
    return false;
  }
  else if (password.length < 5) {
    alert("Password must be at least 5 characters long.");
    return false;
  }
}

// function validateRegisterform(){  
//   var fullname=document.register_form.fullname.value;  
//   var username=document.register_form.username.value;
//   var e_mail=document.register_form.email.value;
//   var password=document.register_form.password.value;

//   if (fullname==null || fullname==""){  
//     alert("Name can't be blank!!");
//     return false; 
//   }
//   else if (username==null || username==""){  
//     alert("Username can't be blank!!");
//     return false; 
//   }
//   else if (e_mail==null || e_mail==""){  
//     alert("Email can't be blank!!"); 
//     return false;
//   }
//   else if (password==null || password==""){  
//     alert("Email can't be blank!!"); 
//     return false;
//   }
//   else if(password.length<5){ 
//     alert("Password must be at least 6 characters long.");  
//     return false;  
//     }  
//   }  

function popup(popup_name) {
  get_popup = document.getElementById(popup_name);
  if (get_popup.style.display == "flex") {
    get_popup.style.display = "none";
  } else {
    get_popup.style.display = "flex";
  }
}
