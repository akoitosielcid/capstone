<?php
    // $type = (!empty($bg) ? $bg : "bg-secondary");
    if(!empty($bg) && $bg=="warning") {
        $type = "bg-warning";
    }
    else if(!empty($bg) && $bg=="danger") {

        $type = "bg-danger";
    }
    else {
        $type = "bg-secondary";
    }

    
    $msg = (!empty($message) ? $bg : "NaN");

?>
 <div class="alert <?= $type ?>" role="alert">
 <?= $msg ?>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>