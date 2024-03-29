<?php

namespace App\Domain\Communication\Models;

use BlueFission\Framework\Model\ModelSql as Model;

class CommunicationChannelModel extends Model
{
    protected $_table = ['communication_channels'];
    protected $_fields = [
        'communication_channel_id',
        'name',
        'label',
    ];
}
