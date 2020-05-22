 /*********************
Name: Jovanni Elias
Final project
Purpose: This file is for my email. First it will validate it client side. Just for UX. 
        Then i will validate on the server. 
**********************/

"use strict";


//    This is the function to test if the email is valid or not. if it is, it will return true
function validEmail(emailInput) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(emailInput);
    }
    
//    This function checks if name, subject and message are not empty. If they are, report an error message.
function validate() {
    
//    Getting the values of each field
    var nameInput = $("#zName").val().trim();
    var emailInput = $("#zEmail").val().trim();
    var reEmailInput = $("#zReEmail").val().trim();
    var subjectInput = $("#zSubject").val().trim();
    var messageInput = $("#zMessage").val().trim();
    


//    Testing to see if the fields are empty
    var errorMessage = "";

    if (nameInput === ""){
        errorMessage += "Name cannot be empty<br>";
    }


//    Keep these together. they piggyback off eachother.
    if (emailInput === ""){
        errorMessage += "Email cannot be empty<br>";
    }
    else if (!validEmail(emailInput)){
        errorMessage += "The email is not valid<br>";
    }
    else if (reEmailInput === ""){
        errorMessage += "The re-entered email cannot be empty<br>";
    }  
    else if (!validEmail(reEmailInput)){
        errorMessage += "The re-entered email is not valid<br>";
    }
    else if (emailInput !== reEmailInput){
        errorMessage += "The emails do not match<br>";
    }
    
    
    if (subjectInput === ""){
        errorMessage += "Subject cannot be empty<br>";
    }
    if (messageInput === ""){
        errorMessage += "Message cannot be empty<br>";
    }
    
    if (errorMessage === ""){
        $("#msg").removeClass("textFail").addClass("textPass");
        $("#msg").html("Sending . . ."); 
        
            $.ajax({
                url: 'sendemail',
                type: 'POST',
                data: {name: nameInput, subject: subjectInput, message: messageInput, remail1: reEmailInput},
                success: function (val) {
                    clearForm();
                    $("#msg").html("Sent !");
                },
                error: function (val) {
                    $("#msg").val("Server Error!");
                }
            });
        } else {
            $("#msg").removeClass("textPass").addClass("textFail");
            $("#msg").html(errorMessage);
            return false;
        }
    
}
function clearForm() { 
            $("#zName").val('');
            $("#zEmail").val('');
            $("#zReEmail").val('');
            $("#zSubject").val('');
            $("textArea").val('');
            $("span").text("0");
    };
$(document).ready(function(){

    $(document).on('keyup', "textarea", function () {
        $("span").text($("textarea").val().length);
    });

    $("#formSend").click(function() {
        validate();
    });


    $("#formClear").click(function(){
        clearForm();
    });  
});