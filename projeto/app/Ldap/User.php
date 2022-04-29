<?php

namespace App\Ldap;

use LdapRecord\Models\Model;

class User extends Model
{
    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    public static $objectClasses = [
        'top',
        'person',
        'organizationalperson',
        'user',
    ];
    /**
     * Função para converter do tipo windows-int para datação legivel
     * 
     * @var int
     */
    public function getAccountexpires( $value ){
        return date("d-m-Y H:i:s", $value/10000000 - 11644473600);
    }



}
