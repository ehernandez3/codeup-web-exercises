importScriptPage('ShowHide/code.js','dev');if(mwCustomEditButtons){mwCustomEditButtons[mwCustomEditButtons.length]={"imageFile":"https://images.wikia.nocookie.net/central/images/c/c8/Button_redirect.png","speedTip":"Redirect","tagOpen":"#REDIRECT [[","tagClose":"]]","sampleText":"Insert text"};}var hasClass=(function(){var reCache={};return function(element,className){return(reCache[className]?reCache[className]:(reCache[className]=new RegExp("(?:\\s|^)"+className+"(?:\\s|$)"))).test(element.className);};})();var autoCollapse=2;var collapseCaption="hide";var expandCaption="show";function collapseTable(tableIndex){var Button=document.getElementById("collapseButton"+tableIndex);var Table=document.getElementById("collapsibleTable"+tableIndex);if(!Table||!Button){return false;}var Rows=Table.rows;if(Button.firstChild.data==collapseCaption){for(var i=1;i<Rows.length;i++){Rows[i].style.display="none";}Button.firstChild.data=expandCaption;}else{for(var i=1;i<Rows.length;i++){Rows[i].style.
display=Rows[0].style.display;}Button.firstChild.data=collapseCaption;}}function createCollapseButtons(){var tableIndex=0;var NavigationBoxes=new Object();var Tables=document.getElementsByTagName("table");for(var i=0;i<Tables.length;i++){if(hasClass(Tables[i],"collapsible")){var HeaderRow=Tables[i].getElementsByTagName("tr")[0];if(!HeaderRow)continue;var Header=HeaderRow.getElementsByTagName("th")[0];if(!Header)continue;NavigationBoxes[tableIndex]=Tables[i];Tables[i].setAttribute("id","collapsibleTable"+tableIndex);var Button=document.createElement("span");var ButtonLink=document.createElement("a");var ButtonText=document.createTextNode(collapseCaption);Button.style.styleFloat="right";Button.style.cssFloat="right";Button.style.fontWeight="normal";Button.style.textAlign="right";Button.style.width="6em";ButtonLink.style.color=Header.style.color;ButtonLink.setAttribute("id","collapseButton"+tableIndex);ButtonLink.setAttribute("href","javascript:collapseTable("+tableIndex+");");ButtonLink.
appendChild(ButtonText);Button.appendChild(document.createTextNode("["));Button.appendChild(ButtonLink);Button.appendChild(document.createTextNode("]"));Header.insertBefore(Button,Header.childNodes[0]);tableIndex++;}}for(var i=0;i<tableIndex;i++){if(hasClass(NavigationBoxes[i],"collapsed")||(tableIndex>=autoCollapse&&hasClass(NavigationBoxes[i],"autocollapse"))){collapseTable(i);}}}addOnloadHook(createCollapseButtons);var NavigationBarHide='['+collapseCaption+']';var NavigationBarShow='['+expandCaption+']';function toggleNavigationBar(indexNavigationBar){var NavToggle=document.getElementById("NavToggle"+indexNavigationBar);var NavFrame=document.getElementById("NavFrame"+indexNavigationBar);if(!NavFrame||!NavToggle){return false;}if(NavToggle.firstChild.data==NavigationBarHide){for(var NavChild=NavFrame.firstChild;NavChild!=null;NavChild=NavChild.nextSibling){if(hasClass(NavChild,'NavPic')){NavChild.style.display='none';}if(hasClass(NavChild,'NavContent')){NavChild.style.display='none';
}}NavToggle.firstChild.data=NavigationBarShow;}else if(NavToggle.firstChild.data==NavigationBarShow){for(var NavChild=NavFrame.firstChild;NavChild!=null;NavChild=NavChild.nextSibling){if(hasClass(NavChild,'NavPic')){NavChild.style.display='block';}if(hasClass(NavChild,'NavContent')){NavChild.style.display='block';}}NavToggle.firstChild.data=NavigationBarHide;}}function createNavigationBarToggleButton(){var indexNavigationBar=0;var divs=document.getElementsByTagName("div");for(var i=0;NavFrame=divs[i];i++){if(hasClass(NavFrame,"NavFrame")){indexNavigationBar++;var NavToggle=document.createElement("a");NavToggle.className='NavToggle';NavToggle.setAttribute('id','NavToggle'+indexNavigationBar);NavToggle.setAttribute('href','javascript:toggleNavigationBar('+indexNavigationBar+');');var NavToggleText=document.createTextNode(NavigationBarHide);for(var NavChild=NavFrame.firstChild;NavChild!=null;NavChild=NavChild.nextSibling){if(hasClass(NavChild,'NavPic')||hasClass(NavChild,'NavContent')){if
(NavChild.style.display=='none'){NavToggleText=document.createTextNode(NavigationBarShow);break;}}}NavToggle.appendChild(NavToggleText);for(var j=0;j<NavFrame.childNodes.length;j++){if(hasClass(NavFrame.childNodes[j],"NavHead")){NavFrame.childNodes[j].appendChild(NavToggle);}}NavFrame.setAttribute('id','NavFrame'+indexNavigationBar);}}}addOnloadHook(createNavigationBarToggleButton);function updatetimer(i){var now=new Date();var then=timers[i].eventdate;var diff=count=Math.floor((then.getTime()-now.getTime())/1000);if(isNaN(diff)){timers[i].firstChild.nodeValue='** '+timers[i].eventdate+' **';return;}if(diff<0){diff=-diff;var tpm='T plus ';}else{var tpm='T minus ';}var left=(diff%60)+' seconds';diff=Math.floor(diff/60);if(diff>0)left=(diff%60)+' minutes '+left;diff=Math.floor(diff/60);if(diff>0)left=(diff%24)+' hours '+left;diff=Math.floor(diff/24);if(diff>0)left=diff+' days '+left
timers[i].firstChild.nodeValue=tpm+left;timeouts[i]=setTimeout('updatetimer('+i+')',1000);}function checktimers(){var nocountdowns=getElementsByClassName(document,'span','nocountdown');for(var i in nocountdowns)nocountdowns[i].style.display='none'
var countdowns=getElementsByClassName(document,'span','countdown');for(var i in countdowns)countdowns[i].style.display='inline'
timers=getElementsByClassName(document,'span','countdowndate');timeouts=new Array();if(timers.length==0)return;for(var i in timers){timers[i].eventdate=new Date(timers[i].firstChild.nodeValue);updatetimer(i);}}addOnloadHook(checktimers);document.write('<script type="text/javascript" src="'+'/index.php?title=MediaWiki:Functions.js&action=raw&ctype=text/javascript&smaxage=18000"></script>');function fillEditSummaries(){var label=document.getElementById("wpSummaryLabel");if(label==null)return;var comboString="Standard summaries: <select id='stdSummaries' onchange='onStdSummaryChange()'>";comboString+="</select><br />";label.innerHTML=comboString+label.innerHTML;requestComboFill('stdSummaries','Template:Stdsummaries');}function onStdSummaryChange(){var combo=document.getElementById("stdSummaries");var value=combo.options[combo.selectedIndex].value;if(value!="")document.getElementById("wpSummary").value=value;}addOnloadHook(fillEditSummaries);AjaxRCRefreshText='Auto-Refresh';
AjaxRCRefreshHoverText='Automatically refresh the page';ajaxPages=["Special:RecentChanges","Special:WikiActivity","Special:UncategorizedPages","Special:AllPages"];importScriptPage('AjaxRC/code.js','dev');if(!window.ajaxPages){var ajaxPages=new Array('Special:RecentChanges','Special:WikiActivity','Special:Log','Special:NewFiles');}if(!window.ajaxCallAgain){var ajaxCallAgain=[];}if(typeof AjaxRCRefreshText=="string"){refreshText=AjaxRCRefreshText;}if(typeof AjaxRCRefreshHoverText=="string"){refreshHover=AjaxRCRefreshHoverText;}function setCookie(c_name,value,expiredays){var exdate=new Date();exdate.setDate(exdate.getDate()+expiredays);document.cookie=c_name+"="+escape(value)+((expiredays===null)?"":";expires="+exdate.toGMTString());}function getCookie(c_name){if(document.cookie.length>0){var c_start=document.cookie.indexOf(c_name+"=")
if(c_start!==-1){c_start=c_start+c_name.length+1;var c_end=document.cookie.indexOf(";",c_start);if(c_end===-1){c_end=document.cookie.length;}return unescape(document.cookie.substring(c_start,c_end));}}return"";}function preloadAJAXRL(){var ajaxRLCookie=(getCookie("ajaxload-"+wgPageName)=="on")?true:!1,appTo=($('#WikiaPageHeader').length)?$('#WikiaPageHeader'):($('#AdminDashboardHeader').length?$('#AdminDashboardHeader > h1'):$('.firstHeading'));appTo.append('&nbsp;<span style="font-size: xx-small; line-height: 100%;" id="ajaxRefresh"><span style="border-bottom: 1px dotted; cursor: help;" id="ajaxToggleText" title="'+refreshHover+'">'+refreshText+':</span><input type="checkbox" style="margin-bottom: 0;" id="ajaxToggle"><span style="display: none;" id="ajaxLoadProgress"><img src="'+ajaxIndicator+'" style="vertical-align: baseline; float: none;" border="0" alt="Refreshing page" /></span></span>');$('#ajaxLoadProgress').ajaxSend(function(event,xhr,settings){if(location.href==settings.
url){$(this).show();}}).ajaxComplete(function(event,xhr,settings){if(location.href==settings.url){$(this).hide();for(i in ajaxCallAgain){ajaxCallAgain[i]();}}});$('#ajaxToggle').click(toggleAjaxReload);$('#ajaxToggle').attr('checked',ajaxRLCookie);if(getCookie("ajaxload-"+wgPageName)=="on"){loadPageData();}}window.MessageWallUserTags={tagColor:'red',glow:!0,glowSize:'15px',glowColor:'#f77',users:{'username':'usergroup','ZeoSpark':'Bureaucrat • Administrator','Neon the Spelunker':'Administrator','Docter98':'Administrator','JosephTheElite':'Administrator','KamariU':'Administrator','Lumoshi':'Administrator'}};function toggleAjaxReload(){if($('#ajaxToggle').prop('checked')==true){setCookie("ajaxload-"+wgPageName,"on",30);doRefresh=!0;loadPageData();}else{setCookie("ajaxload-"+wgPageName,"off",30);doRefresh=!1;clearTimeout(ajaxTimer);}}function loadPageData(){var cC=($('#WikiaArticle').length)?'#WikiaArticle':'#bodyContent';$(cC).load(location.href+" "+cC+" > *",function(data){if(
doRefresh){ajaxTimer=setTimeout("loadPageData();",ajaxRefresh);}});}$(function(){for(x in ajaxPages){if(wgPageName==ajaxPages[x]&&$('#ajaxToggle').length===0){preloadAJAXRL();}}});;function addMastheadTags(){var rights={};rights["ZeoSpark"]=["Master Plumber","Bureaucrat"];rights["Doctor98"]=["The Hero of Spaghetti"];rights["Lumoshi"]=["Supreme Maximum Ultimate Prime Lord King Chancellor Overlord Dictator Emperor"];rights["Dreb607"]=["Master Joke Telling Game Playing Kart Racing Party Throwing Music Listening Fire Shooting Superstar Plumber"];rights["KamariU"]=["Princess That Also Loves To Joke Around And Is A Queen Wannabe I Want A Cookie Right Now Okay Bye","Administrator"];rights["JosephTheElite"]=["Master Plumber"];if(wgCanonicalSpecialPageName=="Contributions"){var user=wgPageName.substring(wgPageName.lastIndexOf("/")+1).replace(/_/g," ");}else{var user=wgTitle;}if(typeof rights[user]!="undefined"){$('.UserProfileMasthead .masthead-info span.tag').remove();for(var i=0,len=rights[
user].length;i<len;i++){$('<span class="tag" span style="margin-left: 10px !important">'+rights[user][i]+'</span>').appendTo('.masthead-info hgroup');}}};$(function(){if($('#UserProfileMasthead')){addMastheadTags();}});var hasClass=(function(){var reCache={};return function(element,className){return(reCache[className]?reCache[className]:(reCache[className]=new RegExp("(?:\\s|^)"+className+"(?:\\s|$)"))).test(element.className);};})();function showEras(className){if(typeof(SKIP_ERAS)!='undefined'&&SKIP_ERAS)return;var titleDiv=document.getElementById(className);if(titleDiv==null||titleDiv==undefined)return;var cloneNode=titleDiv.cloneNode(true);var firstHeading=getFirstHeading();firstHeading.insertBefore(cloneNode,firstHeading.childNodes[0]);cloneNode.style.display="block";}document.write('<link REL="shortcut icon" HREF="/images/6/64/Favicon.ico" />')
var SocialMediaButtons={position:"top",colorScheme:"light"};importScriptPage('SocialIcons/code.js','dev');var statement='Before entering, please read the <a href="http://mario.wikia.com/wiki/Help:Chat">help page for chat</a>.'
function chatStatement(){if($('section.ChatModule').size()>0&&$('p.chat-name').html()!=statement){$('p.chat-name').html(statement);setTimeout(chatStatement,1);}};$(chatStatement);var ajaxIndicator='https://images.wikia.nocookie.net/dev/images/8/82/Facebook_throbber.gif',ajaxTimer,ajaxRefresh=60000,refreshText='Automatically refresh this page',refreshHover='Enable auto-refreshing page loads',doRefresh=!0;if(!window.ajaxPages){var ajaxPages=new Array('Special:RecentChanges','Special:WikiActivity','Special:Log','Special:NewFiles');}if(!window.ajaxCallAgain){var ajaxCallAgain=[];}if(typeof AjaxRCRefreshText=="string"){refreshText=AjaxRCRefreshText;}if(typeof AjaxRCRefreshHoverText=="string"){refreshHover=AjaxRCRefreshHoverText;}function setCookie(c_name,value,expiredays){var exdate=new Date();exdate.setDate(exdate.getDate()+expiredays);document.cookie=c_name+"="+escape(value)+((expiredays===null)?"":";expires="+exdate.toGMTString());}function getCookie(c_name){if(document.cookie.length>0
){var c_start=document.cookie.indexOf(c_name+"=")
if(c_start!==-1){c_start=c_start+c_name.length+1;var c_end=document.cookie.indexOf(";",c_start);if(c_end===-1){c_end=document.cookie.length;}return unescape(document.cookie.substring(c_start,c_end));}}return"";}function preloadAJAXRL(){var ajaxRLCookie=(getCookie("ajaxload-"+wgPageName)=="on")?true:!1,appTo=($('#WikiaPageHeader').length)?$('#WikiaPageHeader'):($('#AdminDashboardHeader').length?$('#AdminDashboardHeader > h1'):$('.firstHeading'));appTo.append('&nbsp;<span style="font-size: xx-small; line-height: 100%;" id="ajaxRefresh"><span style="border-bottom: 1px dotted; cursor: help;" id="ajaxToggleText" title="'+refreshHover+'">'+refreshText+':</span><input type="checkbox" style="margin-bottom: 0;" id="ajaxToggle"><span style="display: none;" id="ajaxLoadProgress"><img src="'+ajaxIndicator+'" style="vertical-align: baseline; float: none;" border="0" alt="Refreshing page" /></span></span>');$('#ajaxLoadProgress').ajaxSend(function(event,xhr,settings){if(location.href==settings.
url){$(this).show();}}).ajaxComplete(function(event,xhr,settings){if(location.href==settings.url){$(this).hide();for(i in ajaxCallAgain){ajaxCallAgain[i]();}}});$('#ajaxToggle').click(toggleAjaxReload);$('#ajaxToggle').attr('checked',ajaxRLCookie);if(getCookie("ajaxload-"+wgPageName)=="on"){loadPageData();}}function toggleAjaxReload(){if($('#ajaxToggle').prop('checked')==true){setCookie("ajaxload-"+wgPageName,"on",30);doRefresh=!0;loadPageData();}else{setCookie("ajaxload-"+wgPageName,"off",30);doRefresh=!1;clearTimeout(ajaxTimer);}}function loadPageData(){var cC=($('#WikiaArticle').length)?'#WikiaArticle':'#bodyContent';$(cC).load(location.href+" "+cC+" > *",function(data){if(doRefresh){ajaxTimer=setTimeout("loadPageData();",ajaxRefresh);}});}$(function(){for(x in ajaxPages){if(wgPageName==ajaxPages[x]&&$('#ajaxToggle').length===0){preloadAJAXRL();}}});;;mw.loader.state({"site":"ready"});

/* cache key: mario:resourceloader:filter:minify-js:7:cb26c68778c62a0055a0103ad4d81d26 */