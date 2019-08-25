function displayLoginForm(){
    let shadow = document.querySelector(".shadow");
    let login = document.querySelector(".login");
    let body = document.body;
    let html = document.documentElement;

    login.style.display = "flex";
    shadow.style.height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight ) + 'px';
    shadow.style.display = "block";
    window.scrollTo({ top: 0 });
}

function closeLoginForm(){
    let shadow = document.querySelector(".shadow");
    let login = document.querySelector(".login");
    if (login.style.display === "flex") {
            login.style.display = "none";
            shadow.style.display = "none";
        }
}

function verifyLoginForm(){
    let username = document.querySelector("#name");
    let password = document.querySelector("#pass");
    if(username.value !== '' && password.value !== ''){
        document.querySelector('#loginForm').submit();
    } else {
        document.querySelector('#loginError').style.display = "block";
        if(username.value === ''){username.classList.add('invalid');}else{username.classList.remove('invalid');}
        if(password.value === ''){password.classList.add('invalid');}else{password.classList.remove('invalid');}
    }
}

function verifyRegisterForm(){
    let email = document.querySelector("#email");
    let username = document.querySelector("#nameRegister");
    let password = document.querySelector("#passRegister");
    let confirm = document.querySelector("#confirm");
    let city = document.querySelector("#city");
    let country = document.querySelector("#country");
    if(email.value !== '' && username.value !== '' && password.value !== '' && city.value !== '' && country.value !== ''){
        if(password.value === confirm.value) {
            document.querySelector('#registerForm').submit();
        } else {
            document.querySelector('#registerErrorPass').style.display = "block";
            document.querySelector('#registerError').style.display = "none";
        }
    } else {
        document.querySelector('#registerError').style.display = "block";
        if(email.value === ''){email.classList.add('invalid');}else{email.classList.remove('invalid');}
        if(username.value === ''){username.classList.add('invalid');}else{username.classList.remove('invalid');}
        if(password.value === ''){password.classList.add('invalid');}else{password.classList.remove('invalid');}
        if(confirm.value === ''){confirm.classList.add('invalid');}else{confirm.classList.remove('invalid');}
        if(city.value === ''){city.classList.add('invalid');}else{city.classList.remove('invalid');}
        if(country.value === ''){country.classList.add('invalid');}else{country.classList.remove('invalid');}
    }
}

function verifyDonateForm(){
    let bundleOfThree = document.querySelector("#bundleOfThree");
    let bundleOfSix = document.querySelector("#bundleOfSix");
    let description = document.querySelector("#description");
    if(bundleOfThree.value !== '' && bundleOfSix.value !== '' && description.value !== ''){
            document.querySelector('#donateForm').submit();
    } else {
            document.querySelector('#donateError').style.display = "block";
            if(bundleOfThree.value === ''){bundleOfThree.classList.add('invalid');}else{bundleOfThree.classList.remove('invalid');}
            if(bundleOfSix.value === ''){bundleOfSix.classList.add('invalid');}else{bundleOfSix.classList.remove('invalid');}
            if(description.value === ''){description.classList.add('invalid');}else{description.classList.remove('invalid');}
    }
}

function verifyBundleForm(){
    let utilizationPerWeek = document.querySelector("#utilizationPerWeek");
    let numberOfStudentPerWeek = document.querySelector("#numberOfStudentPerWeek");
    if(utilizationPerWeek.value !== '' && numberOfStudentPerWeek.value !== ''){
        document.querySelector('#bundleForm').submit();
    } else {
        document.querySelector('#bundleError').style.display = "block";
        if(utilizationPerWeek.value === ''){utilizationPerWeek.classList.add('invalid');}else{utilizationPerWeek.classList.remove('invalid');}
        if(numberOfStudentPerWeek.value === ''){numberOfStudentPerWeek.classList.add('invalid');}else{numberOfStudentPerWeek.classList.remove('invalid');}
    }
}

function disconnectFromSite(){
    document.querySelector('#disconnectForm').submit();
}