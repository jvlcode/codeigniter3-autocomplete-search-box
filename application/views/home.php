<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="<?=base_url('assets/easyautocomplete/easy-autocomplete.css')?>" >
<script  src="<?=base_url('assets/easyautocomplete/jquery.easy-autocomplete.js')?>"></script>
<link rel="stylesheet" href="<?=base_url('assets/easyautocomplete/easy-autocomplete.themes.css')?>" >
<div style="margin-left: 500px;">
	<h3>Autocomplete Search</h3>
	<input type="text" id="searchbox" >
	<input type="hidden" id="searchboxid" >
</div>
<script>
	var options = {
		url:function(query){
			return "home/country?query="+query;
		},
		getValue:"name",
		list:{
			onSelectItemEvent:function(){
				var id = $('#searchbox').getSelectedItemData().id;
				//alert(id);
				$('#searchboxid').val(id);
			}
		}
	};
	$(document).ready(function(){
		$('#searchbox').easyAutocomplete(options);
	});
	
</script>
