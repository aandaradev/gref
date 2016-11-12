//----------DHTML Menu Created using AllWebMenus PRO ver 5.3-#870---------------
//C:\AppServ\www\gref\Menu sistema GREF.awm
awmRelativeCorner=5;
var awmMenuName='menu';
var awmLibraryBuild=870;
var awmLibraryPath='/awmdata';
var awmImagesPath='/awmdata/menu';
var awmSupported=(navigator.appName + navigator.appVersion.substring(0,1)=="Netscape5" || document.all || document.layers || navigator.userAgent.indexOf('Opera')>-1 || navigator.userAgent.indexOf('Konqueror')>-1)?1:0;
if (awmAltUrl!='' && !awmSupported) window.location.replace(awmAltUrl);
if (awmSupported){
var nua=navigator.userAgent,scriptNo=(nua.indexOf('Chrome')>-1)?2:((nua.indexOf('Safari')>-1)?2:(nua.indexOf('Gecko')>-1)?2:((nua.indexOf('Opera')>-1)?4:1));
var mpi=document.location,xt="";
var mpa=mpi.protocol+"//"+mpi.host;
var mpi=mpi.protocol+"//"+mpi.host+mpi.pathname;
if(scriptNo==1){oBC=document.all.tags("BASE");if(oBC && oBC.length) if(oBC[0].href) mpi=oBC[0].href;}
while (mpi.search(/\\/)>-1) mpi=mpi.replace("\\","/");
mpi=mpi.substring(0,mpi.lastIndexOf("/")+1);
var e=document.getElementsByTagName("SCRIPT");
for (var i=0;i<e.length;i++){if (e[i].src){if (e[i].src.indexOf(awmMenuName+".js")!=-1){xt=e[i].src.split("/");if (xt[xt.length-1]==awmMenuName+".js"){xt=e[i].src.substring(0,e[i].src.length-awmMenuName.length-3);if (e[i].src.indexOf("://")!=-1){mpi=xt;}else{if(xt.substring(0,1)=="/")mpi=mpa+xt; else mpi+=xt;}}}}}
while (mpi.search(/\/\.\//)>-1) {mpi=mpi.replace("/./","/");}
var awmMenuPath=mpi.substring(0,mpi.length-1);
while (awmMenuPath.search("'")>-1) {awmMenuPath=awmMenuPath.replace("'","%27");}
document.write("<SCRIPT SRC='"+awmMenuPath+awmLibraryPath+"/awmlib"+scriptNo+".js'><\/SCRIPT>");
var n=null;
awmzindex=1000;
}

var awmImageName='';
var awmPosID='';
var awmSubmenusFrame='';
var awmSubmenusFrameOffset;
var awmOptimize=0;
var awmHash='TXGKFVSTSUQOWQWSDUGWAD';
var awmNoMenuPrint=1;
var awmUseTrs=0;
var awmSepr=["0","","",""];
var awmMarg=[0,0,0,0];
function awmBuildMenu(){
if (awmSupported){
awmImagesColl=["header-tile.png",11,44,"indicator.png",10,13,"indicatorOver.png",10,13,"item-tileOver.png",11,43];
awmCreateCSS(1,2,0,'#FFFFFF','#0055E5',0,'bold 14px Segoe UI, Tahoma, Verdana',n,'none','0','#000000','0px 15px 0px 15',0,'0px / 0px',n);
awmCreateCSS(0,2,0,'#FFFFFF','#0055E5',0,'bold 14px Segoe UI, Tahoma, Verdana',n,'none','0','#000000','0px 15px 0px 15',0,'0px / 0px',n);
awmCreateCSS(0,1,0,n,'#17860E',n,n,n,'solid','1','#189B25','0px 0px 0px 0',0,'0px / 0px',n);
awmCreateCSS(1,2,2,'#14721D','#CCCACA',n,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #2FCE3A #000000','0px 15px 0px 15',1,'0px / 0px',n);
awmCreateCSS(0,2,0,'#FFFFFF','#FFFFFF',3,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #EDFB0F #000000','0px 15px 0px 15',1,'0px / 0px',n);
awmCreateCSS(0,2,0,'#FFFFFF','#FFFFFF',3,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #B1B2B3 #000000','0px 15px 0px 15',1,'0px / 0px',n);
awmCreateCSS(1,2,2,'#14721D','#CCCACA',n,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #2FCE3A #000000','0px 15px 0px 15',0,'0px / 0px',n);
awmCreateCSS(0,2,0,'#FFFFFF','#FFFFFF',3,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #EDFB0F #000000','0px 15px 0px 15',0,'0px / 0px',n);
awmCreateCSS(0,2,0,'#FFFFFF','#FFFFFF',3,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #B1B2B3 #000000','0px 15px 0px 15',0,'0px / 0px',n);
awmCreateCSS(0,1,0,n,'#227D20',n,n,n,'solid','1','#000000','0px 0px 0px 0',0,'0px / 0px',n);
awmCreateCSS(1,2,2,'#1A8922','#C5C5C5',n,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #E0E0E0 #000000','0px 15px 0px 15',1,'0px / 0px',n);
awmCreateCSS(0,2,0,'#343434','#FFFFFF',3,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #0163E8 #000000','0px 15px 0px 15',1,'0px / 0px',n);
awmCreateCSS(1,2,2,'#1A8922','#C5C5C5',n,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #E0E0E0 #000000','0px 15px 0px 15',0,'0px / 0px',n);
awmCreateCSS(0,2,0,'#343434','#FFFFFF',3,'bold 14px Segoe UI, Tahoma, Verdana',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #0163E8 #000000','0px 15px 0px 15',0,'0px / 0px',n);
var s0=awmCreateMenu(0,0,0,0,1,0,0,0,7,10,10,0,1,2,0,0,1,n,n,100,1,0,0,0,130,-1,1,200,200,0,0,0,"0,0,0",n,n,n,n,n,n,n,n,0,0,1,0,1,0,0,0,1,0);
it=s0.addItemWithImages(3,4,5," Inicio ",n,n,"",n,n,n,3,3,3,n,n,n,"../contenido.php",n,n,n,"../contenido.php","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,16,n);
it=s0.addItemWithImages(6,7,8," Quienes Somos ",n,n,"",n,n,n,3,3,3,1,2,2,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,0,n);
var s1=it.addSubmenu(1,0,-1,1,1,1,0,9,0,0,1,n,n,100,44,3,170,-1,1,200,200,0,0,"0,0,0",0,"0",1);
it=s1.addItemWithImages(10,11,11," Misión y Visión ",n,n,"",n,n,n,3,3,3,n,n,n,"../mision-vision.html",n,n,n,"../mision-vision.html","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,2,n);
it=s1.addItemWithImages(10,11,11," Reseña Historica ",n,n,"",n,n,n,3,3,3,n,n,n,"../reseñahistorica.html",n,n,n,"../reseñahistorica.html","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,3,n);
it=s1.addItemWithImages(10,11,11," Cronograma Organizacional ",n,n,"",n,n,n,3,3,3,n,n,n,"../organigrama.html",n,n,n,"../organigrama.html","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,4,n);
it=s0.addItemWithImages(6,7,8," Registro ",n,n,"",n,n,n,3,3,3,1,2,2,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,9,n);
var s1=it.addSubmenu(1,0,-1,1,1,1,0,9,0,0,1,n,n,100,44,1,170,-1,1,200,200,0,0,"0,0,0",0,"0",1);
it=s1.addItemWithImages(10,11,11," Nuevos Miembros ",n,n,"",n,n,n,3,3,3,n,n,n,"../Planilla.php",n,n,n,"../Planilla.php","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,10,n);
it=s1.addItemWithImages(10,11,11," Acceso Administradores ",n,n,"",n,n,n,3,3,3,n,n,n,"../administradores.html",n,n,n,"../administradores.html","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,11,n);
it=s1.addItemWithImages(12,13,13," Consultar Miembros ",n,n,"",n,n,n,3,3,3,n,n,n,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,12,n);
it=s0.addItemWithImages(6,7,8," Actividades ",n,n,"",n,n,n,3,3,3,1,2,2,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,18,n);
var s1=it.addSubmenu(1,0,-1,1,1,1,0,9,0,0,1,n,n,100,44,2,170,-1,1,200,200,0,0,"0,0,0",0,"0",1);
it=s1.addItemWithImages(10,11,11," Proxima Actividad ",n,n,"",n,n,n,3,3,3,n,n,n,"../proximact.html",n,n,n,"../proximact.html","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,7,n);
it=s1.addItemWithImages(12,13,13," Cronograma de Actividades ",n,n,"",n,n,n,3,3,3,n,n,n,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,6,n);
it=s1.addItemWithImages(12,13,13," Galería de Imágenes ",n,n,"",n,n,n,3,3,3,n,n,n,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,1,n);
it=s0.addItemWithImages(6,7,8," Reglamentos ",n,n,"",n,n,n,3,3,3,1,2,2,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,21,n);
var s1=it.addSubmenu(1,0,-1,1,1,1,0,9,0,0,1,n,n,100,44,4,170,-1,1,200,200,0,0,"0,0,0",0,"0",1);
it=s1.addItemWithImages(10,11,11," Estatutos del GREF ",n,n,"",n,n,n,3,3,3,n,n,n,"../estatutos.html",n,n,n,"../estatutos.html","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,22,n);
it=s0.addItemWithImages(6,7,8," Zona de Descarga ",n,n,"",n,n,n,3,3,3,1,2,2,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,34,n);
var s1=it.addSubmenu(1,0,-1,1,1,1,0,9,0,0,1,n,n,100,44,5,170,-1,1,200,200,0,0,"0,0,0",0,"0",1);
it=s1.addItemWithImages(12,13,13," Manuales ",n,n,"",n,n,n,3,3,3,n,n,n,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,13,n);
it=s1.addItemWithImages(12,13,13," Videos y Documentales ",n,n,"",n,n,n,3,3,3,n,n,n,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,14,n);
it=s0.addItemWithImages(6,7,8," Noticias ",n,n,"",n,n,n,3,3,3,1,2,2,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,15,n);
var s1=it.addSubmenu(1,0,-1,1,1,1,0,9,0,0,1,n,n,100,44,6,170,-1,1,200,200,0,0,"0,0,0",0,"0",1);
it=s1.addItemWithImages(10,11,11," Grupo Fénix del Iutet visitará Pdvsa Occidente ",n,n,"",n,n,n,3,3,3,n,n,n,"../noticia1.html",n,n,n,"../noticia1.html","principal",0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,17,n);
it=s0.addItemWithImages(6,7,8," Foro ",n,n,"",n,n,n,3,3,3,n,n,n,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,5,n);
it=s0.addItemWithImages(6,7,8," Contacto ",n,n,"",n,n,n,3,3,3,n,n,n,"",n,n,n,n,n,0,43,2,n,n,n,n,n,n,0,0,0,0,0,n,n,n,0,0,0,8,n);
s0.pm.buildMenu();
}}