
var email = document.getElementById('email_input')
const form = document.getElementById('form') 
var regex = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
var text = document.getElementById("text");
let message = [];
var checkBox = document.getElementById("checkbox");

        form.addEventListener('submit', (event) => {

        

        if (checkBox.checked == false)
        {
            message.push('You must accept the terms and condition')
            document.getElementById("email_message").innerHTML = message;
            event.preventDefault();
        } 

            if (email.value === '')
            {
                message.push('Email is required')
                document.getElementById("email_message").innerHTML = message;
                event.preventDefault();
              
            }
             
        
            if (regex.test(email) == true)
            {
            
            }
        
           
            if ((regex.test(email) == false) && email !=='' )
            {
                message.push('Please provide a valid e-mail address')
                document.getElementById("email_message").innerHTML = message;
                event.preventDefault();
                message = [];
            }
        
        
          })

 