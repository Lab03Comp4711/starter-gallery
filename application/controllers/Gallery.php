<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Gallery extends Application 
{
    /**
     * COntroller for gallery view
     */
    
    public function index() 
    {
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }
}

