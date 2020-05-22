<!-- -------------------
Name: Jovanni Elias 
Final project 
Purpose: This is the footer template that will go to every single page. Its the last third of my templates
---------------------->
        <hr>
        <div class="fakeFooter">
            Visit <a class="links" href="http://www.alpacainfo.com/academy/about-alpacas" target="_blank">www.alpacainfo.com</a>for more information about alpacas<br> By vanni<br>2020
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
        <!-- The line underneath is used to pull the variable main which holds the value of the path for 
              the main.js file. it comes from all the way in Pages.php
              It's like writing the lines above but now its faster and easier. I just call the variable
              and the link to it gets pulled. 
              This is called conditionally loading scripts.
              Alex's explanation for why -> You do it because in a real site there are hundreds, or thousands, or 10s of thousands of js files. You only need a few on each page, for that page's functionality. Why would you load 1000s of files on every page when you only need a couple for that page? Why would you load any on a page that doesn't need any? You should only load exactly what you need, no more, no less.
        -->
        
        <!--step 4
        this will print the script conditionally meaning i am calling it to use it. -->
        <?= $main; ?>
        
    </body>
</html>


