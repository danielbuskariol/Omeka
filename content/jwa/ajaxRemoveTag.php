<?php
$__c->admin()->protect();
$__c->tags()->deleteAssociation( $_POST['tag_id'], $_POST['object_id'] );
?>