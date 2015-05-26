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
        $result = $this->service->get('/mimap/cats/categories');
        $this->view->categories = $result['data'];

    }
    
    public function jsonListAction(){
        
       $this->view->disable();
       
       $this->response->setContentType('application/json', 'UTF-8');
       
       $categories = $this->service->get('/mimap/cats/categories');
       
       $treeList = $this->tree($categories['data'], array(), null, '');
             
      return  $this->response->setContent(json_encode($treeList));  
        
    }
    
    
    public function addAction(){
        
        
         if ($this->request->isPost()) {
             
            $this->view->disable();
        
            $this->response->setContentType('text/html', 'UTF-8');
            
            $categoryName = trim($this->request->getPost('categoryName', array('string', 'striptags')));
           

            $parentId = $this->request->getPost('parentId');
            
           // return $this->response->setContent($parentId);
            
            $isShowMenu = $this->request->getPost('isShowMenu');
                        
            $categories = $this->service->get('/mimap/cats/categories');
                        
            foreach ($category as $categories['data']){
                
                if(strcasecmp($categoryName,  trim($category['categoryName']))==0){
                    
                  return $this->response->setContent("Ийм нэртэй категори байна");
                }
              
            }
                        
            $cmCategory = new CmCategory();
            $cmCategory->setCategoryId("1000".time());
            $cmCategory->setCategoryName($categoryName);
            $cmCategory->setParentId($parentId);
            $cmCategory->setIsActive(true);
            $cmCategory->setIsShowMenu($isShowMenu);
            
            
            //return $this->response->setContent($cmCategory);

            if ($cmCategory->save() == false) {
                   
               $error="error"; 
               
                foreach ($cmCategory->getMessages() as $message) {
                    
                    $error .= ' '.$message;
                        //$this->flash->error((string) $message);
                }
                
              return $this->response->setContent($error);
                
            } else {
               // $this->flash->success('Thanks for sign-up, please log-in to start generating invoices');
              return $this->response->setContent("Хадгаллаа");
            }
            
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
    
    private function tree($categories,$categoriesTree,$parentId,$prefix){
       
        foreach ($categories as $category) {
            if($category['parentId']['categoryId']==$parentId){
                $category['categoryName'] = $prefix.$category['categoryName'];
                array_push($categoriesTree,$category);
                if($this->isParent($category['categoryId'],$categories)){
                  $categoriesTree = $this->tree($categories, $categoriesTree, $category['categoryId'],$prefix."--");
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

    