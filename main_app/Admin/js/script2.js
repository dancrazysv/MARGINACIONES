
function seleccion(tr,value){
	$(function(){
		if($("#chk"+value).attr("checked")=="checked"){
		$("#chk"+value).removeAttr("checked");
			$(tr).css("background-color","#FFFFFF");
			
		}else{
		$("#chk"+value).attr("checked","true");
		$("#chk"+value).prop("checked","true");	
		$(tr).css("background-color","#BEDAE8");
		}
	})
	}



   



function quitBox(cmd)
{   
    if (cmd=='quit')
    {
        open(location, '_self').close();
    }   
    return false;   
}
