
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="<?php echo base_url("assets/js/api.js")?>" ></script>
<script>
  function showAlert(target,type, content) {
      // Create the alert div dynamically
  
      // Append the alert to the body
      document.getElementById(target).innerHTML = `
      <div class="alert alert-${type}" role="alert">
      ${content}
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
      `;
    }
    </script>
<script src="<?php echo base_url("new_admin/vendors/popper/popper.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/vendors/bootstrap/bootstrap.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/vendors/anchorjs/anchor.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/vendors/is/is.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/vendors/fontawesome/all.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/vendors/lodash/lodash.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/vemdors/polyfill.io/v3/polyfill.min58be.js?features=window.scroll")?>"></script>
    <script src="<?php echo base_url("new_admin/vendors/list.js/list.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/vendors/feather-icons/feather.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/vendors/dayjs/dayjs.min.js") ?>"></script>
    <script src="<?php echo base_url("new_admin/assets/js/phoenix.js") ?>"></script>