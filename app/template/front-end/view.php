<script>
    var Mess="<?= isset($_GET["Mess"])?$_GET["Mess"]:'' ?>";
    if(Mess!=''){
        alert(Mess);
    }
</script>
<?php
if (isset($view)) {
    include($view);
}
