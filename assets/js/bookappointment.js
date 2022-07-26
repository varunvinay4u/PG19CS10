const findLoc=()=>{
    const status = document.querySelector('.status');
    const success= (position) => {
        console.log(position)
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        const geoApiUrl="https://api.bigdatacloud.net/data/reverse-geocode-client?latitude-$(latitude)&longitude-$(longitude}&localityLanguage=en"
        fetch(geoApiUrl)
        .then(res=>res.json())
        .then(data=> {
          console.log(data)
          document.getElementById('state').value = data.principalSubdivision
          document.getElementById('locality').value = data.locality
          document.getElementById('country').value = data.countryName
          document.getElementById('city').value = data.city
          document.getElementById('pin').value = data.postcode 
            
  
        })
   }
   
       const error= () => {
         status.textContent = "Unable to retrieve your location";
       }
    navigator.geolocation.getCurrentPosition(success,error);
  }
  
  document.querySelector('.findLocat').addEventListener("click",findLoc);
  //document.getElementById('state').value = textContent;


  // Select all input elements for varification
 const userName = document.getElementById("name");
 const email = document.getElementById("email");
// const password = document.getElementById("password");
// const confirmpassword = document.getElementById("confirmpassword");
 const phoneNumber = document.getElementById("phoneNumber");
// const gender = document.registration;
// const register_as = document.getElementById("register_as");
 const zipcode = document.getElementById("pin");
 
// // function for form varification
  // function formValidation() {
//    // checking length of name
//    if (userName.value.length < 2 || userName.value.length > 20) {
//      alert("Name length should be more than 2 and less than 21 charaters");
//      userName.focus();
//      return false;
//    }
// //   // checking email format
    // if (email.value.match()) {
    //   alert("Please enter a valid email!");
    //   email.focus();
    //   return false;
    // }
// //   // checking password character pattern
// //   if (password.value === "")  {
// //     alert("please provide a password");
// //     password.focus();
// //     return false;
// //   }

// //   if (!password.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/)) {
// //     alert("Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character, and must be between 8 and 15 characters long.");
// //     password.focus();
// //     return false;
// //   }

// //   if (!(confirmpassword.value === password.value))  {
// //     alert("passwords do not match");
// //     password.focus();
// //     return false;
// //   }
// //   // checking phone number
//    if (!phoneNumber.value.match(/^[1-9][0-9]{9}$/)) {
//      alert("Phone number must be 10 characters long number and first digit can't be 0!");
//      phoneNumber.focus();
//      return false;
//    }
// //   // checking gender
// //   if (gender.gender.value === "") {
// //     alert("Please select your gender!");
// //     return false;
// //   }
// //   // checking register_as
// //   if (register_as.value === "") {
// //     alert("Please select your category!")
// //     return false;
// //   }
//    // checking zip code
//    if (!zipcode.value.match(/^[0-9]{6}$/)) {
//      alert("Zip code must be 6 characters long number!");
//      zipcode.focus();
//      return false;
//    }
//    return true;
  // }
