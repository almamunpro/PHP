<?php 

require_once './paypal/Transaction.php';
require_once './Stripe/Transaction.php';


use PaymentGateway\Paypal\transaction; // import
use PaymentGateway\Stripe\transaction; // import

class PaymentService{
    public function createTransaction($transactionMethod){
        if($transactionMethod == 'paypal'){
            $transactionMethod = new PaymentGateway\Paypal\transaction();
        }
        else if($transactionMethod == 'stripe'){
            $transactionMethod = new transaction();
        }
    }
}

// 5.3 Namespaces