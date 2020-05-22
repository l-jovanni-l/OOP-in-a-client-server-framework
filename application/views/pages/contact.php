<!-- -------------------
Name: Jovanni Elias 
Final project 
Purpose: This is the body of my contact page. 
---------------------->

<div class="background">
        <h1>Contact Us</h1>
        <h2>Got a question or concern? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</h2>
<!--
            The standard color for the error message is red but if the validate() is true
            The textFail class will be removed and the sentText class will be added
            Giving it a x text color
-->
        <div id="msg" class="message textFail">
            <!-- This is for wtv message we have after being tested for validation -->
            <br>
        </div>
        <form id="names-form" name="names-form" action="process.php" method="post">
        <div class="form">
            <input type="text" id="zName" placeholder="Name" name="name" class="smallTextBox" maxlength="64" value="" ><br>
            <input type="text" id="zEmail" placeholder="Email" name="email" class="smallTextBox" maxlength="64" value=""><br>
            <input type="text" id="zReEmail" placeholder="Re-enter Email" name="remail1" class="smallTextBox" maxlength="64" value=""><br>
            <input type="text" id="zSubject" placeholder="Subject" name="subject" class="smallTextBox" maxlength="64" value=""><br>
            <div>Message: <span id="chars">0</span> out of 1000 characters</div>
            <textarea id="zMessage" placeholder="Message" name="message" class="bigTextBox" maxlength="1000"></textarea> <br>
            
            <button type="button" id="formSend" class="button">Send</button>
            <button type="button" id="formClear" class="button">Clear</button>
        </div>
        </form>
    </div>
    
  