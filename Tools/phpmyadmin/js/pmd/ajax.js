var http_request=false,xmldoc,textdoc;
function makeRequest(a,b){http_request=false;if(window.XMLHttpRequest){http_request=new XMLHttpRequest;http_request.overrideMimeType&&http_request.overrideMimeType("text/xml")}else if(window.ActiveXObject)try{http_request=new ActiveXObject("Msxml2.XMLHTTP")}catch(d){try{http_request=new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}}if(!http_request){alert("Giving up :( Cannot create an XMLHTTP instance");return false}http_request.onreadystatechange=alertContents;http_request.open("POST",a,true);http_request.setRequestHeader("Content-type",
"application/x-www-form-urlencoded");http_request.setRequestHeader("Content-length",b.length);http_request.setRequestHeader("Connection","close");http_request.send(b);return true}
function alertContents(){if(http_request.readyState==1){document.getElementById("layer_action").style.left=document.body.clientWidth+document.body.scrollLeft-85+"px";document.getElementById("layer_action").style.top=document.body.scrollTop+10+"px";document.getElementById("layer_action").style.visibility="visible";document.getElementById("layer_action").innerHTML="Loading..."}if(http_request.readyState==2)document.getElementById("layer_action").innerHTML="Loaded";if(http_request.readyState==3)document.getElementById("layer_action").innerHTML=
"Loading 99%";if(http_request.readyState==4)if(http_request.status==200){textdoc=http_request.responseText;xmldoc=http_request.responseXML;PrintXML()}else alert("There was a problem with the request.")}
function PrintXML(){var a=xmldoc.getElementsByTagName("root").item(0);if(a==null){myWin=window.open("","Report","width=400, height=250, resizable=1, scrollbars=1, status=1");var b=myWin.document;b.write(textdoc);b.close()}else{a.getAttribute("act")=="save_pos"&&PMA_ajaxShowMessage(a.getAttribute("return"));if(a.getAttribute("act")=="relation_upd"){PMA_ajaxShowMessage(a.getAttribute("return"));if(a.getAttribute("b")=="1"){contr.splice(a.getAttribute("K"),1);Re_load()}}if(a.getAttribute("act")=="relation_new"){PMA_ajaxShowMessage(a.getAttribute("return"));
if(a.getAttribute("b")=="1"){b=contr.length;var d=a.getAttribute("DB1")+"."+a.getAttribute("T1"),e=a.getAttribute("F1"),c=a.getAttribute("DB2")+"."+a.getAttribute("T2");a=a.getAttribute("F2");contr[b]=[];contr[b][""]=[];contr[b][""][c]=[];contr[b][""][c][a]=[];contr[b][""][c][a][0]=d;contr[b][""][c][a][1]=e;Re_load()}}}};
