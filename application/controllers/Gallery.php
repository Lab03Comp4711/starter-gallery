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
        // get all the images from our model
        $pix = $this->images->all();
        
        // build an array of formatted cells for the pix
        foreach ($pix as $picture)
            $cells[] = $this->parser->parse('_cell', (array) $picture, true);
        
        //prime the table class
        $this->load->library('table');
        $parms = array(
            'table_open' => '<table class="gallery">',
            'cell_start' => '<td class="oneimage">',
            'cell_alt_start' => '<td class="oneimage">'
        );
        $this->table->set_template($parms);
        
        //generate the tables
        $rows = $this->table->make_columns($cells, 3);
        $this->data['thetable'] = $this->table->generate($rows);
        
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }
}

