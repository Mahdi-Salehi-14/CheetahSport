<?php
class Authentication{
    static function Login( $uid ){        
        $_SESSION['uid'] = $uid;
    }
    static function Check(){
        return isset( $_SESSION['uid'] );
    }
    static function uid(){
        return $_SESSION['uid'];
    }
    static function Logout(){
        unset( $_SESSION['uid'] );
    }
}
?>