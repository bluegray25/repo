<?php 
$dominio = $_SERVER['HTTP_HOST'];
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
?>

<items>


<!--item>
<title>[COLORlightyellow]Codigo: [COLORyellow][B]final[/COLOR][/B] </title>
<link>NA</link> 
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
<info>Codigo temporal . para la Final de la Liga de Campeones!!!
</info>
</item-->

<item>
<title>[B][UPPERCASE] [COLOR deepskyblue]ingresar al Addon[/COLOR][/B] [/UPPERCASE]</title>
<link>NA</link> 

<externallink>$doregex[code]</externallink> 

<regex>
<name>code</name>  
<expres><![CDATA[#$pyFunction
import re,requests,base64,xbmc,six
from kodi_six import xbmc,xbmcgui,xbmcaddon,xbmcvfs
EJECUTAR_XBMC = xbmc if six.PY2 else xbmcvfs
def GetLSProData(page_data,Cookie_Jar,m):
	path = EJECUTAR_XBMC.translatePath('special://profile/addon_data/plugin.video.blackghost/')
	
	file = "codeserver.txt"
	  
	try:
		f = open(path + file, 'r')
		HERE = f.read()
		f.close()
		xbmc.executebuiltin("Notification( [COLOR lime][B]Codigo Activado ![/B][/COLOR] , [COLOR lightblue]No olvides seguir apoyando.[/COLOR], 2000)")
	except:
		dialog = xbmcgui.Dialog()		
		HERE = dialog.input('[COLOR white]Ingresa el [COLOR lightblue][B]Codigo Permanente[/B][/COLOR] o de [COLOR lightyellow][B]Invitacion semanal[/B][/COLOR]:[/COLOR] ', type=xbmcgui.INPUT_ALPHANUM)
		xbmc.executebuiltin("Notification(Apoya este Proyecto, paypal.me/blackghost, 1000)")
		if 'g' in HERE:			
			OPT = "http://<?php echo $dominio; ?>/addon/"
			HERE = OPT + HERE + ".php"
			f = open(path + file, 'w')
			f.write(HERE)
			f.close()
			savednotif = "Notification( [COLOR blue]El Codigo ha sido Guardado[/COLOR], Gracias por Apoyar el proyecto, 2000)"
			xbmc.executebuiltin(savednotif)
			return HERE	  
		else:
			OPT = "http://<?php echo $dominio; ?>/addon/"
			HERE = OPT + HERE + ".php"
			savednotif = "Notification( [COLOR blue]Cargando Codigo...[/COLOR], Gracias!, 1000)"
			xbmc.executebuiltin(savednotif)
			return HERE
	return HERE  
 ]]></expres>
<page></page>
</regex> 

<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
</item>




 <item> <title> </title><link>na</link>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
</item>






<item> <title>Solicita el [COLOR palegreen][B]Codigo Semanal[/B][/COLOR] al correo: [COLORlime][B]blackaddon@icloud.com[/B][/COLOR] o en el grupo de Telegram[COLORlime][B]@AddonBG[/B][/COLOR]</title><link>na</link>
<thumbnail>http://<?php echo $dominio; ?>/black/img/correo.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
<info>Ingresa al Grupo de Telegram y en el Mensaje Fijado encontraras el Codigo de acceso o envia un correo a blackaddon@icloud.com. 
</info>
</item>


<item>
<title>[B][COLOR chartreuse]Apoya Este Increíble Proyecto con una Donación para seguir Adelante![/COLOR][/B]</title>
<link>na</link>
<thumbnail>http://<?php echo $dominio; ?>/black/img/pp.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
<info>⬇️¿Quieres apoyarnos y obtener un código permanente?⬇️
Con una donación de €15 EUR, recibirás un código permanente, válido en todos tus dispositivos y  queda guardado en tu Kodi para siempre. 
</info>
</item>







  <item> <title> [COLOR lightyellow][B]APOYANOS[/B]: [COLOR deepskyblue][B]paypal.me/blackghost[/B] [/COLOR]</title><link>na</link>
<thumbnail>http://<?php echo $dominio; ?>/black/img/pp.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
<info>⬇️¿Quieres apoyarnos y obtener un código permanente?⬇️
Con una donación de €15 EUR, recibirás un código permanente, válido en todos tus dispositivos y  queda guardado en tu Kodi para siempre. 
</info>
</item>



  <!--item> <title>Descarga e Instala nuestra APK: [COLOR deepskyblue][B]http://<?php echo $dominio; ?>/app[/B] [/COLOR]</title><link>na</link>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart></item--> 
  


<item> 
<title>[UPPERCASE] [COLOR white]Correo:[/UPPERCASE][B] [COLOR lightblue] blackaddon@icloud.com [/COLOR][/COLOR][/B]</title><link>na</link>
<thumbnail>http://<?php echo $dominio; ?>/black/img/correo.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
</item>

  <item> 
<title>[UPPERCASE] [COLOR white]Nuevo Telegram:[/UPPERCASE][B] [COLOR lightblue] @AddonBG[/COLOR][/COLOR][/B]</title>
<link>na</link>

<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart></item> 
  


<!--item> <title>   </title><link>na</link><externallink>$doregex[help]</externallink>
<regex>
<name>help</name>
<expres><![CDATA[#$pyFunction
import xbmc
import xbmcaddon
import xbmcgui
def GetLSProData(page_data,Cookie_Jar,m):
    dialog = xbmcgui.Dialog()
    d = dialog.input('_exit:', type=xbmcgui.INPUT_ALPHANUM).replace(" ", "+")
    return d
]]></expres>
<page></page>
</regex>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
</item-->



 <item> <title> </title><link>na</link>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
</item>

<!--item>
<title>[B][COLOR white]Configuracion: [COLOR lightgreen]Activar Turbo[/COLOR] [/COLOR][/B]</title>
<link>$doregex[canal]</link>
<regex>
<name>canal</name>
<expres>$pyFunction:xbmcaddon.Addon('plugin.video.blackghost').openSettings()</expres>
<page></page>
</regex>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
<info>Solo se activa la primera vez despues de instalar el Addon</info>
 </item-->
 
<item>
<title>[COLOR white]Configuracion Activar Turbo: $doregex[turbo][/COLOR]</title>
<link>$doregex[idt]</link>

<regex>
<name>idt</name>
<expres>$pyFunction:xbmcaddon.Addon('plugin.video.blackghost').openSettings()</expres>
<page></page>
<NOTPlayable>True</NOTPlayable>
</regex>

<regex>
<name>turbo</name>
<expres>$pyFunction:('$doregex[turbo1]').replace('0','[COLOR orange]No, Activalo Aqui').replace('1','[COLOR lime]Turbo, Activado[/COLOR]').replace('False','[COLOR orange]No,  Activalo Aqui.').replace('True','[COLOR lime][OK, Activado!!!][/COLOR]')</expres>
<page></page>
</regex>

<regex>
<name>turbo1</name>
<expres><![CDATA[#$pyFunction
def GetLSProData(page_data,Cookie_Jar,m):
 import xbmc,os
 path = xbmc.translatePath('special://profile/addon_data/plugin.video.blackghost/')
 return os.path.exists(path)
]]></expres>

<expres><![CDATA[#$pyFunction
import xbmc, xbmcvfs, six
from kodi_six import xbmc, xbmcgui, xbmcaddon, xbmcvfs

def GetLSProData(page_data,Cookie_Jar,m):
    EJECUTAR_XBMC = xbmc if six.PY2 else xbmcvfs
    path = EJECUTAR_XBMC.translatePath('special://profile/addon_data/plugin.video.blackghost/')
    
    if xbmcvfs.exists(path):        
        return True
    else:        
        return False
]]></expres>
<page></page>
</regex>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
<info>Si ya te Aparece Activado, no hace falta Activar nuevamente. 

 Despues de Activar el Turbo / Instalar ResolverURL / Recuerda salir del Addon y volver a Entrar para que lo cambios  tengan efecto</info>
</item>





<item>
<title>[COLOR white]Dependencia ResolveURL: $doregex[ResolveUrl][/COLOR]</title>
<link>$doregex[id]</link>


<regex>
<name>id</name>
<expres>$pyFunction:xbmc.executebuiltin('InstallAddon(script.module.resolveurl)')</expres>
<page></page>
<NOTPlayable>True</NOTPlayable>
</regex>

<regex>
<name>ResolveUrl</name>
<expres>$pyFunction:('$doregex[ResolveUrl1]').replace('0','[COLOR orange]No,  Instalar Desde Aqui.').replace('1','[COLOR lime]Si, Instalado[/COLOR]').replace('False','[COLOR orange]No,  Instalar Desde Aqui.').replace('True','[COLOR lime]Si, Instalado[/COLOR]')</expres>
<page></page>
</regex>

<regex>
<name>ResolveUrl1</name>
<expres><![CDATA[#$pyFunction
def GetLSProData(page_data,Cookie_Jar,m):
 import xbmc
 xbmc.executebuiltin('UpdateAddonRepos')
 xbmc.executebuiltin('UpdateAddonRepos')
 hola = xbmc.getCondVisibility('System.HasAddon(script.module.resolveurl)')
 return hola
]]></expres>
<page></page>
</regex>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
<info>Si ya lo tienes instalado no es necesario reinstalar. 

 Despues de Activar el Turbo / Instalar ResolverURL / Recuerda salir del Addon y volver a Entrar para que lo cambios  tengan efecto</info>
</item>




<item>
<title>[COLOR white]Server [I](<?php echo $dominio; ?>/)[/I] $doregex[vpn][/COLOR]</title>
<link>NA</link>


<regex>
<name>vpn</name>
<expres>$pyFunction:('$doregex[vpn1]').replace('0','[COLOR orange]ERROR, problemas para acceder a <?php echo $dominio; ?>/').replace('1','[COLOR lime]Cargado..., SERVER OK[/COLOR]').replace('True','[COLOR lime]ACTIVADO - OK [/COLOR]').replace('False','[COLOR orange]ERROR, problemas para acceder al server  [/COLOR]')</expres>
<page></page>
</regex>


<regex>
<name>vpn1</name>
<expres><![CDATA[#$pyFunction
import re,requests,xbmc
def GetLSProData(page_data,Cookie_Jar,m):
	url = "http://<?php echo $dominio; ?>/"	  
	try:
		response = requests.get(url, timeout=10)
		if response.status_code == 200 or response.status_code == 302:
			return True
		else:
			return False		
	except:
		requests.exceptions.RequestException
		xbmc.executebuiltin("Notification( [COLORyellow]ERROR[/COLOR] Hay problemas para acceder a [COLORlime]<?php echo $dominio; ?>/[/COLOR] intenta cambiando DNS o usando VPN, 1000)")
		return False
 ]]></expres>
<page></page>
</regex>


<thumbnail>http://bgtv.xyz/black/img/icon.png</thumbnail>
<fanart>http://bgtv.xyz/black/img/fanart.jpg</fanart>
<info>  Despues de Activar el Turbo / Instalar ResolverURL / Recuerda salir del Addon y volver a Entrar para que lo cambios  tengan efecto</info>
</item>

<!--item>
<title>[B][COLOR white]Herramienta: [COLOR lightgreen]Instalar ResolveUrl[/COLOR][/COLOR][/B]</title>
<link>$doregex[id]</link>
<regex>
<name>id</name>
<expres>$pyFunction:xbmc.executebuiltin('InstallAddon(script.module.resolveurl)')</expres>
<page></page>
<NOTPlayable>True</NOTPlayable>
</regex>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
<info>Si ya lo tienes instalado no es necesario reinstalar.</info>
</item-->






<item>
<title>[COLOR coral][B]Herramienta:  ●  [ELIMINAR]  Codigo [I]Permanente[/I] Guardado  ● [/B][/COLOR]</title>


<info>
Elimina el Codigo Permanente Guardado
-
Elimina el Codigo  Permanente (si te marca error por cambio de dominio)
-
tambien  si has ingresado  [I]incorrectamente[/I] el  codigo permanente.
-
Si no hay codigo guardado marcara error.
  </info>
  
<link>$doregex[code]</link>  

 
<regex>
<name>code</name>  
<expres><![CDATA[#$pyFunction
import re,requests,base64,xbmc,six,os
from kodi_six import xbmc,xbmcgui,xbmcaddon,xbmcvfs
EJECUTAR_XBMC = xbmc if six.PY2 else xbmcvfs
def GetLSProData(page_data,Cookie_Jar,m):  
  xbmc.executebuiltin("Notification(BlackGhost,Eliminando Codigo Guardado,6000)")  
  selected = 'codeserver.txt'
  path = EJECUTAR_XBMC.translatePath('special://profile/addon_data/plugin.video.blackghost/')
  os.remove (path + selected)  
  return 'https://raw.githubusercontent.com/blackghostaddon/gray/master/list' 
]]></expres>
<page></page>
</regex>
<thumbnail>http://<?php echo $dominio; ?>/black/img/icon.png</thumbnail>
<fanart>http://<?php echo $dominio; ?>/black/img/fanart.jpg</fanart>
</item>




</items>


