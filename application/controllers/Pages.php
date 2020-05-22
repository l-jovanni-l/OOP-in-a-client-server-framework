<?php
 /*********************
Name: Jovanni Elias
Final project
Purpose: This is for loading all the pages and putting them together in a template. 
**********************/

class Pages extends CI_Controller {

    public function view($page = 'home') {
//Step 2        
//This loads the templating engine 
        $this->load->library('parser');
        
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        } else {
            $data['title'] = ucfirst($page);
            
            /*
             * Conditionally load data and scripts here.
             * See the instructions for an example.
             */     

//            This line says, when you attempt to put the page together via a template
//            grab the file map.js and use it for the page. Same thing for the contact template.
//            This is done so we dont use uneeded code on a website.
            $data['map']= $this->parser->parse('templates/facts', [], TRUE);
            $data['main']=$this->parser->parse('templates/contact', [], TRUE);
          
//Step 3
//This loads the HTML for the footer  
            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page);
            $this->load->view('templates/footer');
        }
    }
}

//Step 4 is in the footer.php file
            