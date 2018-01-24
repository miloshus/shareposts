<?php

class Pages extends Controller{
        public function __construct(){
        	

          }

      public function index(){
        if(isLoggedIn()){
          redirect('posts');
          
        }
      	$data = [
      		'title' => 'Shareposts',
      		'description' => 'Register and Login for sharing your posts'

      	];
      			$this->view('pages/index', $data);

      			
        }
     public function about(){
      $data = ['title' => 'About Us',
              'description' => 'AboutAboutAbout'
    ];
      			$this->view('pages/about', $data);

     }
}

