<?php

	if (!isset($params['escape']) || $params['escape'] !== false) {
    	$message = h($message);
	}
	
?>

<script type="text/javascript">

	$(document).ready(function () {
		
	    new PNotify({
	        title: 'Sucesso!',
	        text: '<?php echo $message; ?>',
	        width: "100%",
	        type: "success",
	        animate: {
	            animate: true,
	            in_class: 'slideInDown',
	            out_class: 'slideOutUp'
	        }
	    });
  
	});

</script>