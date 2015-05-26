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
    
    public function jsonListAction(){
        
       $this->view->disable();
       
       $this->response->setContentType('application/json', 'UTF-8');
       
       $categories = $this->service->get('/mimap/category/categories');
       
       $treeList = $this->tree($categories, array(), null, '');
             
      return  $this->response->setContent(json_encode($treeList));  
        
    }
    
    
    public function addAction(){
        
        
         if ($this->request->isPost()) {

            $categoryName = trim($this->request->getPost('categoryName', array('string', 'striptags')));
            $parentId = $this->request->getPost('parentId', 'num');
            $isShowMenu = $this->request->getPost('isShowMenu', 'bool');

            $categories = $this->service->get('/mimap/category/categories');
            
            foreach ($category as $categories){
                
                if(strcasecmp($categoryName,  trim($category['categoryName']))==0){
                    $this->flash->error('Ийм нэртэй категори байна');
                    return false;
                }
              
            }
           
            $cmCategory = new CmCategory();
            
            $cmCategory->setCategoryName($categoryName);
            $cmCategory->setParentId($parentId);
            $cmCategory->setIsActive(1);
            $cmCategory->setIsShowMenu($isShowMenu);

            if ($cmCategory->save() == false) {
                              
                foreach ($user->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $this->flash->success('Thanks for sign-up, please log-in to start generating invoices');
                return $this->forward('session/index');
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
                  $categoriesTree = $this->tree($categories, $categoriesTree, $category['categoryId'],$prefix.' ');
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

    