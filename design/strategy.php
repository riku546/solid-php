<?php

// interface Strategy
// {
//     public function processPay(int $amount);
// }

// class CreditCard implements Strategy
// {
//     public function processPay(int $amount)
//     {
//         echo htmlspecialchars("success creditCard payment ");
//     }
// }

// class PayPay implements Strategy
// {
//     public function processPay(int $amount)
//     {
//         echo htmlspecialchars("success paypay payment");
//     }

// }

// class Payment
// {
//     private $paymentStrategy;

//     public function __construct(Strategy $strategy)
//     {
//         $this->paymentStrategy = $strategy;

//     }

//     public function executePayment($amount)
//     {
//         $this->paymentStrategy->processPay($amount);
//     }

// }

// // $credit = new CreditCard();
// $paypay = new PayPay();
// $payment = new Payment($paypay);
// $payment->executePayment(100);
