<?php
/**
 * client Ninja (https://clientninja.com).
 *
 * @link https://github.com/clientninja/clientninja source repository
 *
 * @copyright Copyright (c) 2020. client Ninja LLC (https://clientninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Import\Transformers;

use Illuminate\Support\Str;

/**
 * Class PaymentTransformer.
 */
class PaymentTransformer extends BaseTransformer
{
    /**
     * @param $data
     *
     * @return bool|Item
     */
    public function transform($data)
    {
        return [
                'company_id' => $this->maps['company']->id,
                'number' => $this->getString($data, 'payment.number'),
                'user_id' => $this->getString($data, 'payment.user_id'),
                'amount' =>  $this->getString($data, 'payment.amount'),
                'refunded' =>  $this->getString($data, 'payment.refunded'),
                'applied' =>  $this->getString($data, 'payment.applied'),
                'transaction_reference' => $this->getString($data, 'payment.transaction_reference '),
                'date' => $this->getString($data, 'payment.date'),
                'private_notes' =>  $this->getString($data, 'payment.private_notes'),
                'number' =>  $this->getString($data, 'number'),
                'custom_value1' =>  $this->getString($data, 'custom_value1'),
                'custom_value2' =>  $this->getString($data, 'custom_value2'),
                'custom_value3' =>  $this->getString($data, 'custom_value3'),
                'custom_value4' =>  $this->getString($data, 'custom_value4'),
                'client_id' =>  $this->getString($data, 'client_id'),
                'invoice_number' => $this->getString($data, 'payment.invoice_number'),
            ];
    }
}