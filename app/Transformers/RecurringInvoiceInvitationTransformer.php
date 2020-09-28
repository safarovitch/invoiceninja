<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2020. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Transformers;

use App\Models\InvoiceInvitation;
use App\Models\RecurringInvoiceInvitation;
use App\Utils\Traits\MakesHash;

class RecurringInvoiceInvitationTransformer extends EntityTransformer
{
    use MakesHash;

    public function transform(RecurringInvoiceInvitation $invitation)
    {
        return [
            'id'                => $this->encodePrimaryKey($invitation->id),
            'client_contact_id' => $this->encodePrimaryKey($invitation->client_contact_id),
            'key'               => $invitation->key,
            'updated_at'        => (int) $invitation->updated_at,
            'archived_at'       => (int) $invitation->deleted_at,
            'created_at'        => (int) $invitation->created_at,
        ];
    }
}