<?php

namespace app\controllers\admina;

use app\controllers\AppController;

class UserController extends AppController{
    
    public function actionIndex() {
        return $this->render('index');
    }
}
