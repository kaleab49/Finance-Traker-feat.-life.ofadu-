<?php

namespace App\GraphQL\Mutations;

use App\Contracts\SmsTransactionProcessor;

class CreateSms
{
    protected $smsTransactionProcessor;

    public function __construct(SmsTransactionProcessor $smsTransactionProcessor)
    {
        $this->smsTransactionProcessor = $smsTransactionProcessor;
    }

    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $sms = $args['body'];
        $created_at = $args['created_at'] ?? null;

        return $this->smsTransactionProcessor->process($sms, $created_at);
    }
}
