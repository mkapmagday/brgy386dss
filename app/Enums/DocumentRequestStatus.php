<?php
namespace App\Enums;

enum DocumentRequestStatus : string
{

    case pending = 'pending';
    case approved = 'approved';
    case for_claiming = 'for claiming';
    case claimed = 'claimed';


}