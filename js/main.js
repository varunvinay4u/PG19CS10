// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import {getAuth, onAuthStateChanged} from "firebase/auth";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBejYGfKipqW-T_0gfNoh609oZH9WL6hyk",
  authDomain: "pg19cs10.firebaseapp.com",
  projectId: "pg19cs10",
  storageBucket: "pg19cs10.appspot.com",
  messagingSenderId: "82975153140",
  appId: "1:82975153140:web:702e32ee2341d0e0d537a1",
  measurementId: "G-0D0WD65KQT"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
auth=getAuth(app);

onAuthStateChanged(auth,user➡{
    if(user=null){
     console.log('logged in!');
    }else {
      console.log('No user');
   }


var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}
