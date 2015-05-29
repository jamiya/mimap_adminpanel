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
        $categories = $this->service->get('/mimap/cats/categories');
        $this->view->categories = $this->tree($categories['data'], array(), null,"","");
    }
    
    public function listAction()
    {
        $categories = $this->service->get('/mimap/cats/categories');
        $this->view->categories = $this->tree($categories['data'], array(), null,"","");

    }
    
    
    public function namexistAction(){
               
       $categories = $this->service->get('/mimap/cats/categories');
       
       $categoryName = trim($this->request->getPost('categoryName', array('string', 'striptags')));
              
        foreach ($categories['data'] as $category){

            if(strcasecmp($categoryName,  trim($category['categoryName']))==0){

             return $this->response->setContent("true"); 
            }

        }              
             
      return  $this->response->setContent("false");  
        
    }
    
    public function jsonListAction(){
        
       $this->view->disable();
       
       $this->response->setContentType('application/json', 'UTF-8');
       
       $categories = $this->service->get('/mimap/cats/categories');
       
       $treeList = $this->tree($categories['data'], array(), null, '',"&nbsp;&nbsp;&nbsp;&nbsp;");
             
      return  $this->response->setContent(json_encode($treeList));  
        
    }
    
    
    public function addAction(){
        
        
         $categories = $this->service->get('/mimap/cats/categories');
       
         $treeList = $this->tree($categories['data'], array(), null, '','&nbsp;&nbsp;&nbsp;&nbsp;');
   
         $this->view->categories = $treeList;
                 
        
         if ($this->request->isPost()) {
             
            
            $categoryName = trim($this->request->getPost('categoryName', array('string', 'striptags')));
           
            $parentId = $this->request->getPost('parentId');
                    
            $isShowMenu = ($this->request->getPost("isShowMenu") == "on") ? true : false;
                                   
                                    
             $params = array( "categoryName" => $categoryName,
                                  "parentId" => ($parentId) ? $parentId : null,
                                "isShowMenu" => $isShowMenu,
                                  "isActive" => true,
                                      "icon" => null,
                                 "orderView" => null
                                                     );
            
            $options = array(
            'headers' => array('Content-type' => 'application/json'),
            'body' => json_encode($params)
            );
            
            $response = $this->service->put("/mimap/cats",$options);
                               
            $this->view->disable();
            $this->response->setContentType('application/json', 'UTF-8');
         return $this->response->setContent(json_encode($response)); 
                 
                     
        }
         
        
    }
    
    
    public function deleteAction($id){
       // $this->service->delete('/mimap/cats/delete/'. $id);
        $this->service->delete('/mimap/cats/delete?id='. $id);
                
        $this->response->redirect("/cmcategory");
        
        $this->view->disable();
         
        return;             
    }
    
    
    public function deleteajaxAction($id){

        $response = $this->service->delete('/mimap/cats/delete?id='. $id);
        
        $this->view->disable();
        
        $this->response->setContentType('application/json', 'UTF-8');    
        
        return $this->response->setContent(json_encode($response));
             
       // return $this->response->setContent(json_encode(array('type'=>'danger','message'=>$response)));  
              
    }
    
    
    public function updateAction($id){
                   
       if ($this->request->isPost()) {
           
            $id = $this->request->getPost('categoryId');
            $categoryName = trim($this->request->getPost('categoryName', array('string', 'striptags')));
           
                $parentId = $this->request->getPost('parentId');
                    
              $isShowMenu = ($this->request->getPost("isShowMenu") == "on") ? true : false;
                                                
            
             $params = array(   "categoryId" => trim($id),
                              "categoryName" => $categoryName,
                                  "parentId" => ($parentId) ? $parentId : null,
                                "isShowMenu" => $isShowMenu,
                                  "isActive" => true,
                                      "icon" => null,
                                 "orderView" => null
                                                     );
            
            $options = array(
            'headers' => array('Content-type' => 'application/json'),
            'body' => json_encode($params)
            );
            
            $response = $this->service->post("/mimap/cats/update",$options);
            
            $this->view->disable();
            $this->response->setContentType('application/json', 'UTF-8');
     return $this->response->setContent(json_encode($response)); 
                          
       }
       
       else{
       
         $categories = $this->service->get('/mimap/cats/categories'); 
         
         $treeList = $this->tree($categories['data'], array(), null, '','&nbsp;&nbsp;&nbsp;&nbsp;');
         $this->view->categories = $treeList;
                  
         $this->view->category = $this->service->get('/mimap/cats/categorybyid?id='.$id);
         
       }
              
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
    
    private function tree($categories,$categoriesTree,$parentId,$prefix,$prefix2){
       
        foreach ($categories as $category) {
            if($category['parentId']['categoryId']==$parentId){
                $category['categoryName'] = $prefix.$category['categoryName'];
                array_push($categoriesTree,$category);
                if($this->isParent($category['categoryId'],$categories)){
                  $categoriesTree = $this->tree($categories, $categoriesTree, $category['categoryId'],$prefix.$prefix2,$prefix2);
                }
            }
        }        
        return $categoriesTree; 
    }
    
    
    private function isParent($id,$categories){
        foreach ($categories as $category){
          if($category['parentId']['categoryId']==$id){
              return true;
         }
        }
        return false;
    }
    
    


}

    