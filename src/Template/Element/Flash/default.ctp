<?php
$class = 'info';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}

?>
<script type="text/javascript">

	$(document).ready(function () {
		
	    new PNotify({
	        title: 'Informação:',
	        text: '<?php echo $message; ?>',
	        width: "100%",
	        type: "info",
	        animate: {
	            animate: true,
	            in_class: 'slideInDown',
	            out_class: 'slideOutUp'
	        }
	    });
  
	});

</script>