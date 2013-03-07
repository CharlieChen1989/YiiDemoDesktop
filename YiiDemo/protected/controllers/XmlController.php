<?php

class XmlController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'createXml', 'loadXml','expatXml'),
                'users' => array('*'),
            ),
//            array('allow', // allow authenticated user to perform 'create' and 'update' actions
//                'actions' => array('create', 'update', 'setLangMenu', 'dynamicState','dynamicCity','dynamicCode'),
//                'users' => array('@'),
//            ),
//            array('allow', // allow admin user to perform 'admin' and 'delete' actions
//                'actions' => array('admin', 'delete'),
//                'users' => array('admin'),
//            ),
//            array('deny', // deny all users
//                'users' => array('*'),
//            ),
        );
    }

    public function actionCreateXml() {
        $model = new placementXml();

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'xml-create-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        if (isset($_POST['placementXml'])) {
            $model->attributes = $_POST['placementXml'];
            if ($model->validate(true)) {
                if($model->operate =='ADD'){
                    $this->doCreate($model);
                }else{
                    $this->doQuery($model);
                }
                $this->redirect('/xml/loadXml');
            }
        }

        $this->renderPartial('createXml', array('model' => $model));
    }
    
    public function actionExpatXml($filename){
        $xml = new DOMDocument('1.0', 'UTF-8');
        $filePath = 'dirname(__FILE__)."\\..\\';
        $xml->load($filePath.$filename);       
        $array = XML2Array::createArray($xml);        
        $this->renderPartial('expatXml',array('array'=>$array));
        
    }

    public function actionLoadXml() {
        $this->renderPartial('loadXml');
    }
    /**
     * @method build the xml file
     * @param type $model 
     * @author Liang Chen
     */
     public function doQuery($model) {
        if ($model !== null) {
            // create doctype 
            $dom = new DOMDocument("1.0", 'utf-8');
            // display document in browser as plain text 
            // for readability purposes 
            header("Content-Type: text/plain");
            // create root element 
            $root = $dom->createElement("xmlInterchange");
            $dom->appendChild($root);

            // create child element 
            $item = $dom->createElement("function_name");
            $root->appendChild($item);
            // create text node 
            $text = $dom->createTextNode($model->function_name);
            $item->appendChild($text);

            // create child element 
            $item = $dom->createElement("operate");
            $root->appendChild($item);
            // create another text node 
            $text = $dom->createTextNode($model->operate);
            $item->appendChild($text);

            $item = $dom->createElement("txn_seqno");
            $root->appendChild($item);
            // create text node 
            $text = $dom->createTextNode("PLAQRY" . $model->txn_seqno);
            $item->appendChild($text);

            $item = $dom->createElement("txn_time");
            $root->appendChild($item);
            // create text node 
            $text = $dom->createTextNode($model->txn_time);
            $item->appendChild($text);

            $item = $dom->createElement("placement");
            $root->appendChild($item);

            $itemChild0 = $dom->createElement("placement_requests");
            $item->appendChild($itemChild0);
            $itemChild1 = $dom->createElement("placement_request");
            $itemChild0->appendChild($itemChild1);
            
            //去除字符串最后的逗号并组成数组
            $str = substr($model->vendor_memberID, 0, -1);
            $memberIDs = explode(",", $str);
            foreach ($memberIDs as $key => $value) {
                //<vendor_memberID></vendor_memberID>
                $itemChild2 = $dom->createElement("vendor_memberID");
                $itemChild1->appendChild($itemChild2);
                // create text node 
                $text = $dom->createTextNode($value);
                $itemChild2->appendChild($text);
            }        
            $dom->save("testq.xml");
//            echo $dom->saveXML();
        }
    }

    public function doCreate($model) {
        if ($model !== null) {
            // create doctype 
            $dom = new DOMDocument("1.0", 'utf-8');
            // display document in browser as plain text 
            // for readability purposes 
            header("Content-Type: text/plain");
            // create root element 
            $root = $dom->createElement("xmlInterchange");
            $dom->appendChild($root);

            // create child element 
            $item = $dom->createElement("function_name");
            $root->appendChild($item);
            // create text node 
            $text = $dom->createTextNode($model->function_name);
            $item->appendChild($text);

            // create child element 
            $item = $dom->createElement("operate");
            $root->appendChild($item);
            // create another text node 
            $text = $dom->createTextNode($model->operate);
            $item->appendChild($text);

            $item = $dom->createElement("txn_seqno");
            $root->appendChild($item);
            // create text node 
            $text = $dom->createTextNode("PLAADD" . $model->txn_seqno);
            $item->appendChild($text);

            $item = $dom->createElement("txn_time");
            $root->appendChild($item);
            // create text node 
            $text = $dom->createTextNode($model->txn_time);
            $item->appendChild($text);

            $item = $dom->createElement("placement");
            $root->appendChild($item);

            $itemChild0 = $dom->createElement("placement_requests");
            $item->appendChild($itemChild0);
            
            //去除字符串最后的逗号并组成数组
            $str1 = substr($model->vendor_memberID, 0, -1);
            $memberIDs = explode(",", $str1);
            $str2 = substr($model->vendor_sponsorID, 0, -1);
            $sponsorIDs = explode(",", $str2);
            $str3 = substr($model->vendor_parentID, 0, -1);
            $parentIDs = explode(",", $str3);
            $str4 = substr($model->position, 0, -1);
            $positions = explode(",", $str4);
            //  纵向数组拆分数组并组成新的横向二维数组
            $members = array();
            foreach ($memberIDs as $key => $value) {
                $members[$key]['vendor_memberID'] = $value;
            }
            foreach ($sponsorIDs as $key => $value) {
                $members[$key]['vendor_sponsorID'] = $value;
            }
            foreach ($parentIDs as $key => $value) {
                $members[$key]['vendor_parentID'] = $value;
            }
            foreach ($positions as $key => $value) {
                $members[$key]['position'] = $value;
            }
            //二维数组迭代添加节点
            for ($i = 1; $i <= count($members); $i++) {                
                $itemChild1 = $dom->createElement("placement_request");
                $itemChild0->appendChild($itemChild1);
                foreach ($members[$i-1] as $key => $value) {
                    //<vendor_memberID></vendor_memberID>
                    $itemChild2 = $dom->createElement($key);
                    $itemChild1->appendChild($itemChild2);
                    // create text node 
                    $text = $dom->createTextNode($value);
                    $itemChild2->appendChild($text);
                }
            }
//            $savePath = Yii::app()->baseUrl . '..\\userfiles\\file\\' . "test" . ".xml";
//            echo $savePath;
//            exit;
            // save and display tree 
            $dom->save("test.xml");
//            echo $dom->saveXML();
        }
    }

}