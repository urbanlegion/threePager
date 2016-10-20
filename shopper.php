<?php


class Shopper
{
    private $fishaShopperId, $orderId, $orderTotal, $token, $fishaOrderId, $listOfOrders;
    private $email, $name, $lastName, $phone, $city, $street, $houseNumber, $shopper;

    public function __construct($email, $name, $lastName, $phone, $city, $street, $houseNumber)
    {
        $this->shopper = $shopper = array(
            $this->email = $email,
            $this->name = $name,
            $this->lastName = $lastName,
            $this->phone = $phone,
            $this->city = $city,
            $this->street = $street,
            $this->houseNumber = $houseNumber
        );
        $this->fishaShopperId = $fishaShopperId = $this->email;
    }
    public function throwError($errorMsg, $errorCode){
        //TODO: define error messages and code array/json
        //TODO: PHPEmail to filter email subjects based on error code to quickly resolve customer service issues
        return 'an error has occurred: '.$errorMsg.' Please email support@fisha.co.il with ONLY the error code: '.$errorCode.' in the subject line.';
    }
    public function getShopperById($fishaShopperId ){
        if($fishaShopperId) {
            return $this->shopper;
        }else{
            return $this->throwError();
        }
    }
    public function CreateNewShopper ($fishaShopperId){
        if($fishaShopperId) {
            return $this->shopper;
        }else{
            return $this->throwError();
        }
    }
    public function UpdateShopper ($fishaShopperId, $shopper){
        if($fishaShopperId) {
            $this->shopper = $shopper;
            return $fishaShopperId.' user has been updated successfully';
        }else{
            return $this->throwError();
        }
    }
    public function createNewOrder  ($fishaShopperId, $orderId, $orderTotal, $token, $fishaOrderId){
        $this->order = $order = array(
            $this->fishaShopperId = $fishaShopperId,
            $this->orderId = $orderId,
            $this->orderTotal = $orderTotal,
            $this->token = $token,
            $this->fishaOrderId = $fishaOrderId
    );
        if($fishaOrderId) {
            return $this->order;
        }else{
            return $this->throwError();
        }
    }
    public function getOrders($fishaShopperId, $listOfOrders){
        $this->listOfOrders = $listOfOrders;
        if($fishaShopperId) {
            return $listOfOrders;
        }else{
            return $this->throwError();
        }
    }
}

$user001 = new Shopper('erez@example.com', 'erez', 'tall', '0509998888', 'givatayim', 'tirza', '13');

