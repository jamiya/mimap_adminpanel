<?php

class CmserviceController extends ControllerBase {

    public function initialize() {
        $this->tag->setTitle('Company Service');
        parent::initialize();
    }

    public function indexAction() {
        $this->view->services = $this->service->get('/mimap/services/details');

        $categories = $this->service->get('/mimap/cats/categories');
        $this->view->categories = $this->tree($categories['data'], array(), null, "", "&nbsp;&nbsp;&nbsp;&nbsp;");
    }

    public function listAction() {
        $this->view->services = $this->service->get('/mimap/services/details');
    }
    
    
    public function catservAction()
    {
        $this->view->services = $this->service->get('/mimap/services/details');
    }    

    public function namexistAction() {

        $services = $this->service->get('/mimap/services/details');

        $serviceName = trim($this->request->getPost('serviceName', array('string', 'striptags')));

        foreach ($services as $service) {

            if (strcasecmp($serviceName, trim($service['serviceListName'])) == 0) {

                return $this->response->setContent("true");
            }
        }

        return $this->response->setContent("false");
    }

    public function jsonListAction() {

        $this->view->disable();

        $this->response->setContentType('application/json', 'UTF-8');

        $categories = $this->service->get('/mimap/cats/categories');

        $treeList = $this->tree($categories['data'], array(), null, '', "&nbsp;&nbsp;&nbsp;&nbsp;");

        return $this->response->setContent(json_encode($treeList));
    }

    public function addAction() {


//         $categories = $this->service->get('/mimap/cats/categories');
//       
//         $treeList = $this->tree($categories['data'], array(), null, '','&nbsp;&nbsp;&nbsp;&nbsp;');
//   
//         $this->view->categories = $treeList;


        if ($this->request->isPost()) {


            $serviceListName = trim($this->request->getPost('serviceListName', array('string', 'striptags')));

            $categoryId = $this->request->getPost('categoryId');

            $params = array("serviceListName" => $serviceListName);

            foreach ($categoryId as $lol) {
                $params['categories'][] = array("categoryId" => $lol);
            }

            $options = array(
                'headers' => array('Content-type' => 'application/json'),
                'body' => json_encode($params)
            );

            $response = $this->service->put("/mimap/services/insert", $options);

            $this->view->disable();
            $this->response->setContentType('application/json', 'UTF-8');
            return $this->response->setContent(json_encode($response));
        }
    }

    public function deleteAction($id) {
        // $this->service->delete('/mimap/cats/delete/'. $id);
        $this->service->delete('/mimap/services/delete?id' . $id);

        $this->response->redirect("/cmcategory");

        $this->view->disable();

        return;
    }

    public function deleteajaxAction($id) {

        $response = $this->service->delete('/mimap/services/delete/?id='.$id);

        $this->view->disable(); 

        $this->response->setContentType('application/json', 'UTF-8');

        return $this->response->setContent(json_encode($response));

        // return $this->response->setContent(json_encode(array('type'=>'danger','message'=>$response)));  
    }

    public function updateAction($id) {

        if ($this->request->isPost()) {

            $id = $this->request->getPost('categoryId');
            $serviceListName = trim($this->request->getPost('serviceListName', array('string', 'striptags')));

            $categoryId = $this->request->getPost('categoryId');

            $isShowMenu = ($this->request->getPost("isShowMenu") == "on") ? true : false;


            $params = array("categoryId" => trim($id),
                "serviceListName" => $serviceListName,
                "categoryId" => ($categoryId) ? $categoryId : null,
                "isShowMenu" => $isShowMenu,
                "isActive" => true,
                "icon" => null,
                "orderView" => null
            );

            $options = array(
                'headers' => array('Content-type' => 'application/json'),
                'body' => json_encode($params)
            );

            $response = $this->service->post("/mimap/cats/update", $options);

            $this->view->disable();
            $this->response->setContentType('application/json', 'UTF-8');
            return $this->response->setContent(json_encode($response));
        } else {

            $categories = $this->service->get('/mimap/cats/categories');

            $treeList = $this->tree($categories['data'], array(), null, '', '&nbsp;&nbsp;&nbsp;&nbsp;');
            $this->view->categories = $treeList;

            $this->view->category = $this->service->get('/mimap/cats/categorybyid?id=' . $id);
        }
    }

    public function treeAction() {
        
    }

    public function jsonAction() {

        $records = array();
        $records['nodes'] = array();

        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '0';
        $level = 1;
        if ($id != '0') {
            $id = explode(':', $id);
            $level = $id[1] + 1;
        }

        for ($i = 1; $i < 6; $i++) {
            $id_ = time() + rand(1000, 20000) . ':' . ($level);
            $records['nodes'][] = array('id' => $id_, 'parent' => $id, 'name' => 'Node - ' . $level . ' - ' . $i, 'level' => $level, 'type' => 'folder');
        }


        $this->view->disable();

        $this->response->setContentType('application/json', 'UTF-8');

        return $this->response->setContent(json_encode($records));
    }

    private function tree($categories, $categoriesTree, $parentId, $prefix, $prefix2) {

        foreach ($categories as $category) {
            if ($category['parentId']['categoryId'] == $parentId) {
                $category['categoryName'] = $prefix . $category['categoryName'];
                array_push($categoriesTree, $category);
                if ($this->isParent($category['categoryId'], $categories)) {
                    $categoriesTree = $this->tree($categories, $categoriesTree, $category['categoryId'], $prefix . $prefix2, $prefix2);
                }
            }
        }
        return $categoriesTree;
    }

    private function isParent($id, $categories) {
        foreach ($categories as $category) {
            if ($category['categoryId']['categoryId'] == $id) {
                return true;
            }
        }
        return false;
    }

}
