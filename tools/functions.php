<?php

    function validate_add_learner($POST){
        if( $POST['learner-password'] !=$POST['learner-confirm-password'] ){
            return false;
        }
        return true;
    }

?>