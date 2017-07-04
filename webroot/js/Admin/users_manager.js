$( document ).ready(function() {
  
	//Configuracoes do DataTable
    $('#tab_users').dataTable({
        language: {
            url: '../webroot/js/datatables/Portuguese-Brasil.json'
        },
    	"paging": true,
      	"lengthChange": false,
      	"searching": true,
      	"ordering": true,
      	"info": true,
      	"columnDefs": [{
            "orderable": false,
            "className": 'chkbox',
            "targets": 0
        }],
        order: [[ 1, 'asc' ]]
    });
	
    
    //Marca e Desmarca todos os registros da tabela
    $("#all_chkbox").change(function(){
    	
    	if($(this).is(':checked')){
    		
    		$("td.chkbox input:checkbox").each(function(index,data){
    			$(this).prop('checked',true);
    		});
    		
    	}else{
    		
    		$("td.chkbox input:checkbox").each(function(index,data){
    			$(this).prop('checked',false);
    		});
    	}
    	
    })
    
	//Exibe as regras de um usuario ao seleciona-lo
    $("td.chkbox input:checkbox").change(function(){
    	
    	qtd_checked = $('td.chkbox input:checkbox:checked').length;
    	
    	if(qtd_checked == 1){
    		//Exibe as regras ligadas ao usuarios selecionado.
    		id = $(this).val();
    		
    	    $.ajax({
    	    	url: "ajaxGetRules",
    	    	type:'GET',
    	    	data:{id:id},
    	    	success: function(result,status,xhr){
    	    		$("#div_rules").html(result);
    	    	},
    	    	error: function(result,status,xhr){
    	    		alert('Erro do ajax ao acessar função "ajaxGetRules".');
    	    	},

    	    });
    		
    		
    	}else if(qtd_checked > 1){
    		//Varios usuarios selecionados, exibe caixa de selecao para aplicar regra em massa
    		alert('Vários Selecionados');
    		$("#div_rules").html('');
    	}else{
    		//Oculta a dive de regras
    		alert('Nenhum Selecionado');
    		$("#div_rules").html('');
    	}

    })
	
    
    

	
	
	
});