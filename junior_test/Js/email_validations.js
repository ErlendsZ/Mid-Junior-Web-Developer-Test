
var email = document.getElementById('email_input')
const form = document.getElementById('form')
var text = document.getElementById("text");
var checkBox = document.getElementById("checkbox");


document.getElementById("email_message").innerHTML = columbia;

function validateemail()  
{  

var x=document.form.email.value;
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");



if (email.value === '')
    {
        document.getElementById("email_message").innerHTML = 'Email is required';
        return false;  
    }  
            
if (checkBox.checked == false)
    {
        document.getElementById("email_message").innerHTML = 'You must accept the terms and condition';
        return false;  
    } 
    
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
    {  
    document.getElementById("email_message").innerHTML = 'Please provide a valid e-mail address'
    return false;  
    }  

    if ( email.value.substring(dotposition+1) ==='co')
    {  
    document.getElementById("email_message").innerHTML = 'We are not accepting subscriptions from Colombia emails';
    return false;  
    } 

    

}  


 