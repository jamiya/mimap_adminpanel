<?php

class CmcategoryController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Company Category');
        parent::initialize();
    }

    public function indexAction()
    {
       
        $this->view->categories = $this->service->get('/mimap/category/categories');

    }

    public function addAction()
    {
        
    }
    
    public function jsonListAction(){
        
       $this->view->disable();
       
       $this->response->setContentType('application/json', 'UTF-8');
             
      return  $this->response->setContent(json_encode($this->service->get('/mimap/category/categories')));  
        
    }

        public function treeAction()
    { 

                 
    }
    
    public function jsonAction()
    {
        
        $records = array();
        $records['nodes'] = array();

        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '0';
        $level = 1;
        if ($id != '0') {
                $id = explode(':', $id);
                $level = $id[1] + 1;
        }

        for($i = 1; $i < 6; $i++) {
                $id_ = time() + rand(1000, 20000) . ':' . ($level);
                $records['nodes'][] = array('id' => $id_, 'parent' => $id, 'name' => 'Node - ' . $level . ' - ' . $i, 'level' => $level, 'type' => 'folder');
        }
     
        
       $this->view->disable();
       
       $this->response->setContentType('application/json', 'UTF-8');
             
      return  $this->response->setContent(json_encode($records));
       
    }
    
    


}

    