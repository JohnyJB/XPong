var usuario = function(pnombre)
{
    this.nombre = pnombre;
}

usuario.prototype.guardarnombre = function(usuario)
{
    //localStorage.clear();
    localStorage.setItem('nombre', usuario.nombre);  		
}

$(document).ready(function()
{
    $(document).ready(function()
{
    $('#escenario1').click(function()
    {
        var nom = new usuario($('#nombre1').val());

        if(  nom.nombre == '')
        {
            alert("El campo esta vacio");
        }
        else
        {
            location.href = "GTJS_Escenario001/index.html";
            nom.guardarnombre(nom);
        }
                    
    });

    $('#escenario2').click(function()
    {
        var nom = new usuario($('#nombre1').val());

        if(  nom.nombre == '')
        {
            alert("El campo esta vacio");
        }
        else
        {
            location.href = "GTJS_Escenario002/index.html";
            nom.guardarnombre(nom);
        }
                    
    });

    $('#escenario3').click(function()
    {
        var nom = new usuario($('#nombre1').val());

        if(  nom.nombre == '')
        {
            alert("El campo esta vacio");
        }
        else
        {
            location.href = "GTJS_Escenario003/index.html";
            nom.guardarnombre(nom);
        }
                    
    });

    $('#puntuaciones').click(function()
    {
        
            location.href = "GTJS_Escenario001/score.php";
            
        
                    
    });
});
});