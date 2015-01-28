<?php 
include("connections/db.inc.php"); 

$query_menuLinea= $db->Execute("SELECT id, descripcion
							FROM t_linea
							ORDER BY id ASC");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_menuLinea){
exit("Error en la consulta Menu linea");
}

?>
<!-- <link rel="stylesheet" href="menu/css/styles.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
<script src="js/jquery-1.10.1.min.js"></script>
<article id="menuProdHome">
	<ul class="menu">
		<?php
		foreach($query_menuLinea as $k => $row_menuLinea) 
		{ 
			$query_menuSublinea= $db->Execute("SELECT sublinea, descripcion
										FROM t_sublinea
										WHERE 	id_linea = $row_menuLinea[id]
										ORDER BY sublinea ASC");
			// Verificamos si hemos realizado bien nuestro Query
			if(!$query_menuSublinea){
			exit("Error en la consulta Menu sublinea");
			}
			?>
		<li id="<?php echo $row_menuLinea['id'];?>"><a href="#"><?php echo $row_menuLinea['descripcion'];?></a>
			<ul>
				<?php
				foreach($query_menuSublinea as $ks => $row_menuSublinea) 
				{ ?>
				<li id="<?php echo $row_menuSublinea['sublinea'];?>"><a class="sublinea" href="producto.php?id=<?php echo $row_menuLinea['id'];?>&id_sublinea=<?php echo $row_menuSublinea['sublinea'];?>">
					<?php echo $row_menuSublinea['descripcion'];?></a></li>				
				<?php } ?>
			</ul>
		</li>
		<?php } ?>
	</ul>
</article>

<!--initiate accordion-->
<script type="text/javascript">
	$getURL = function(key)   {  
        key = key.replace(/[\[]/, '\\[');  
        key = key.replace(/[\]]/, '\\]');  
        var pattern = "[\\?&]" + key + "=([^&#]*)";  
        var regex = new RegExp(pattern);  
        var url = unescape(window.location.href);  
        var results = regex.exec(url);  
        if (results === null) {  
	            return '0';  
	        } else {  
	            return results[1];  
	        } 
        } 

	$(function() {
	
	    var 	idLinea		= $getURL('id_linea'),
	    	 	idSublinea	= $getURL('id_sublinea'),
	    		menu_ul 	= $('.menu > li > ul'),
	           	menu_a  	= $('.menu > li > a'),
	           	menuLinea	= $('.menu > #'+idLinea+' > a'),
	           	menuUL 		= $('.menu > #'+idLinea+' > ul'),	
	           	menuLI 		= $('.menu > li > ul > #'+idSublinea);	

		menu_ul.hide();
    	menuLinea.addClass('active');
	    menuUL.show();
	    menuLI.addClass('activo');
	
	    menu_a.click(function(e) { //mouseover cuando mouse se mueva por encima -- mouseenter cuando el mouse entre al objeto --click al dar click
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });


	
	});
</script>
<?php //exit(""); ?>