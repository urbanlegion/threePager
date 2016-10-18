<?php
/**
 * Created by PhpStorm.
 * User: yearzero
 * Date: 10/18/2016
 * Time: 6:48 PM
 */

class User{
    //these vars are protected and not private since I would like
    // future inherited classes to be able to apply the
    // overloading magic setter and it's array.
    protected $action;
    public $actions = array();

    public function __set($action, $value){
        //let's get rid of any erroneous chars:
        if (ctype_alnum($action) == true) {
            $this->actions[$action] = $value;
        } else {
            die('erroneous api call for: ' . $action);
        }
    }
    public function __get($action){
        return  $this->actions[$action];
    }
}
$user = new user();
$zipcode = $user->zipcode = 90210;
$firstName = $user->fName = 'Donald';
$lastName = $user->lName = 'Trump';
$beenDrinking = $user->alcohol = 'strong';

echo $lastName.' said we need to grab the getter by the setter and make america '.$beenDrinking.' again';

echo '<pre>';
print_r($user->actions);
echo '</pre>';

// array results:
//    [zipcode] => 90210
//    [fName] => Donald
//    [lName] => Trump
//    [alcohol] => strong


