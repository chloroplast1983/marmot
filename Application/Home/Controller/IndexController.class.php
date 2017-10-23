<?php
namespace Home\Controller;

use System\Classes\Controller;
use Common\Controller\JsonApiController;
use Marmot\Core;

class IndexController extends Controller
{

    use JsonApiController;
    
    /**
     * @codeCoverageIgnore
     */
    public function index()
    {
        //setcookie('oauid',1,time() + 3000,'/','qixinyun.com', false, true);
//        var_dump($_COOKIE);
        var_dump("Hello World marmot");
        return true;
    }

    /**
     * @codeCoverageIgnore
     */
    public function error()
    {
        $this->displayError();
        return false;
    }
}
