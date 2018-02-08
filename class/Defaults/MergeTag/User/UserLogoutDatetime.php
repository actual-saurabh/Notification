<?php

namespace underDEV\Notification\Defaults\MergeTag\User;
use underDEV\Notification\Defaults\MergeTag\StringTag;

class UserLogoutDatetime extends StringTag {

    private $trigger;

    public function __construct( $trigger ) {

        $this->trigger = $trigger;

    	parent::__construct( array(
			'slug'        => 'user_logout_datetime',
			'name'        => __( 'User logout time' ),
			'description' => __( 'Will be resolved to a user logout time' ),
			'resolver'    => function() {
				return date( 'Y-m-d H:i:s' );
			}
        ) );

    }

    public function check_requirements( ) {

        return date( 'Y-m-d H:i:s' );

    }

}
