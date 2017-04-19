<?php

class migration_1_1_1 implements \SmartcatSupport\util\Migration {

    function version () {
        return '1.1.1';
    }

    /**
     *
     * @return bool|WP_Error
     */
    function migrate () {
        add_option( 'migration' );
    }

}

return new migration_1_1_1();
