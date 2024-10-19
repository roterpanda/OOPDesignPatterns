<?php

declare(strict_types=1);

namespace roterpanda\Designpatterns\OOPPrinciples\Coupling;

class Order
{
    private readonly INotificationService $notificationService;

    public function __construct(INotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function placeOrder(): void
    {
        $this->notificationService->sendNotification('Your order has been placed.');
    }
}