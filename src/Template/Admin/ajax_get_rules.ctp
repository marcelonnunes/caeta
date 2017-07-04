<style>

tr.group,
tr.group:hover {
    background-color: #ddd !important;
}

</style>

<div class="box box-danger">

	
	<div class="box-header  with-border">
		<h3 class="box-title">Permissões</h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse">
				<i class="fa fa-minus"></i>
			</button>
		</div>
	</div>
	
	
	
	<div class="box-body">
		<table id="rules_tab" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Controller</th>
					<th>Métodos</th>
					<th>Ver</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($rules as $key1 => $rule): ?>
				
					<?php foreach ($rule as $controller => $val): ?>
						<?php foreach ($val as $key3 => $view): ?>
							<tr>
								<td><?= $controller."Controller"; ?></td>
								<td><?= $view; ?></td>
								<td><input type="checkbox"></td>
								<td><input type="checkbox"></td>
								<td><input type="checkbox"></td>

							</tr>
						<?php endforeach; ?>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>



<script type="text/javascript">
$( document ).ready(function() {

	//Configuracoes do DataTable
    $('#rules_tab').dataTable({
        language: {
            url: '../webroot/js/datatables/Portuguese-Brasil.json'
        },
    	"paging": false,
      	"lengthChange": false,
      	"searching": true,
      	"ordering": true,
      	"info": false,
      	"columnDefs": [
          	{
	            "orderable": false,
	            "visible": false,
	            "targets": 0
        	},
          	{
                "orderable": false,
                "className": 'chkbox',
                "targets": [2,3,4]
            },
      	],        
      	"drawCallback": function ( settings ) {
        	var api = this.api();
        	var rows = api.rows( {page:'current'} ).nodes();
        	var last=null;

	        api.column(0, {page:'current'} ).data().each( function ( group, i ) {
	            if ( last !== group ) {
	                $(rows).eq( i ).before(
	                    '<tr class="group"><td colspan="5"><strong>'+group+'</strong></td></tr>'
	                );
	
	                last = group;
	            }
	        } );
    	}
       
    });
    
});

</script>

