// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyB-2lj9TyxnMaNqSqeP92mRkYSkp_adXj4",
  authDomain: "roblox-3b3e2.firebaseapp.com",
  projectId: "roblox-3b3e2",
  storageBucket: "roblox-3b3e2.appspot.com",
  messagingSenderId: "665297858080",
  appId: "1:665297858080:web:eb8de0522d7927baf99645",
  measurementId: "G-ZBV6880KLQ"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
