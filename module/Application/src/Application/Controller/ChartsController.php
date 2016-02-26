<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ChartsController extends AbstractActionController {
    
    public function chartjsAction() {
        return new ViewModel();
    }
    
    public function morrisAction() {
        return new ViewModel();
    } 
    
    public function flotAction() {
        return new ViewModel();
    } 
    
    public function inlinechatAction() {
        return new ViewModel();
    } 
    
}
