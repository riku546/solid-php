<?php

class AuthService
{
    public function authenticate(string $userName, string $password): bool
    {
        echo htmlspecialchars("Authenticate user {$userName}\n");
        return true;
    }

}

class PaymentService
{
    public function processPayment(int $amount): bool
    {
        echo htmlspecialchars("Process payment of {$amount}\n");
        return true;
    }
}

class NotificationService
{
    public function sendNotification(string $message): bool
    {
        echo htmlspecialchars("sending notification {$message}\n");
        return true;
    }
}

class paymentInterface
{
    private $auth;
    private $payment;
    private $notification;

    public function __construct()
    {
        $this->auth = new AuthService();
        $this->payment = new PaymentService();
        $this->notification = new NotificationService();
    }

    public function method(string $userName, string $password, int $amount): void
    {
        if (!$this->auth->authenticate($userName, $password)) {
            return;
        }

        if ($this->payment->processPayment($amount)) {
            $this->notification->sendNotification("payment success");
        }
    }
}

$userName = "user1";
$password = "password";
$amount = 100;

$paymentInterface = new paymentInterface();
$paymentInterface->method($userName, $password, $amount);
