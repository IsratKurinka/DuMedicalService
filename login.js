/**
 * Created by emma on 4/29/17.
 */
//var loginFlag = 0;
function globalLogin() {
    checkLogInMail();
<<<<<<< HEAD
=======
    //pageEntry();
>>>>>>> 5b6b2426097b5c149197d72d84e8805e4859193a
}
function checkLogInMail() {
    var mailET = document.getElementById("mailID");
    var mailIdError = document.getElementById("mailIdErr");
    mailID = mailET.value;
    var regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (!regex.test(mailID)) {
        mailIdError.innerHTML = "Enter a valid Email id";
        //loginFlag = 1;
    }
    else{
        checkmailPass();
    }
}


function checkmailPass() {
    var passET = document.getElementById("psw");
    var passError = document.getElementById("pswErr");

    psw = passET.value;

    console.log(mailID);
    console.log(psw);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        console.log(this.readyState);

        if(this.readyState == 4 && this.status == 200)
        {
            console.log(this.status);
            var response = xhttp.responseText;
<<<<<<< HEAD
            if(String(response.trim()) === "success") {
                alert("Successfully logged in :)");
                document.getElementById("id01").style.display = 'none';
                $('#id01').modal('hide');
                document.getElementById("navBarHealthcard").style.display = 'none';
                document.getElementById("navBarLog").innerHTML = '<li>\<a onclick="myFunc();"' +
                    ' style="width:auto;"> Logout </a>\</li>';
            }
            else{
                document.getElementById("loginErr").innerHTML = response;
=======
            document.getElementById("loginErr").innerHTML=response;
            //alert(response);
            if(String(response.trim()) === "success") {
                //document.getElementById("loginErr").innerHTML = "Mail or Password is correct";
                alert("Successfully logged in :)");
                window.location.href = "index.html";

            }
            else{
                document.getElementById("loginErr").innerHTML = response;

>>>>>>> 5b6b2426097b5c149197d72d84e8805e4859193a
            }
        }

    }
    xhttp.open("GET", "passwordChecker.php?psw="+psw+"&mailID="+mailID, true);
    xhttp.send();
<<<<<<< HEAD
}
=======

}
>>>>>>> 5b6b2426097b5c149197d72d84e8805e4859193a
