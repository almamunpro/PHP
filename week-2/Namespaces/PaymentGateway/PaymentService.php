<?php 

require_once './paypal/Transaction.php';
require_once './Stripe/Transaction.php';


use PaymentGateway\Paypal\transaction as PaypalTransaction; // import
use PaymentGateway\Stripe\transaction as StripeTransaction; // import

class PaymentService{
    public function createTransaction($transactionMethod){
        if($transactionMethod == 'paypal'){
            $transactionMethod = new PaymentGateway\Paypal\transaction();
        }
        else if($transactionMethod == 'stripe'){
            $transactionMethod = new Stripetransaction();
        }
    }
}

// 5.3 Namespaces