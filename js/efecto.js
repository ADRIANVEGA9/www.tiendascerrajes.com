$(document).on("ready", inicio);
function inicio () 
{
	//Aqui va todo el codigo relacionado con DOM
	$("#s4a").on("click", movida);
	$("#s4a").on("mouseover", movida);
	$("#s4b").on("mouseout", oculta);
}

function movida () 
{
	//JSON
	var cambiosCSS =
	{
		width: "97",
		display:"inline-block",
		visibility:"visible"
	};
	var noParpadea =
	{
		display: "none"
	}
	$("#s4b").css(cambiosCSS);
	$("#bottom").css(noParpadea);
	// $("#color div").on("click", cambiarColor);
}

function oculta () 
{
	//JSON
	var cambiosCSS =
	{
		width: "0"
	};
	var noParpadea =
	{
		display: "inline-block"
	}
	$("#s4b").css(cambiosCSS);	
	$("#s4a #bottom").css(noParpadea);
	$("#s4b img").css(cambiosCSS);	
	// $("#color div").on("click", cambiarColor);

}

// function cambiarColor (datos) 
// {
// 	var colorito = datos.currentTarget.id;
// 	var nuevoCoche = "c" + colorito + ".jpg";
// 	$("#cochecito img").attr("src", nuevoCoche);
// }