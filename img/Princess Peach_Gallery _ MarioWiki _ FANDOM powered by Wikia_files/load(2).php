var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"},"common":{"loadScript":"https://slot1-images.wikia.nocookie.net/__load/-/","apiScript":"/api.php"}});mw.loader.register([["site",1526602500,[],"site"],["noscript",1202225400,[],"noscript"],["startup",1540307700,[],"startup"],["user",1202225400,[],"user"],["user.groups",1202225400,[],"user"],["user.options",1540307700,[],"private"],["user.cssprefs",1540307700,["mediawiki.user"],"private"],["user.tokens",1202225400,[],"private"],["filepage",1202225400],["mediawiki.language.data",1539003600,["mediawiki.language.init"]],["skins.monobook",1540215900,[],null,"common"],["jquery",1540215900,[],null,"common"],["jquery.appear",1540215900,[],null,"common"],["jquery.arrowSteps",1540215900,[],null,"common"],[
"jquery.async",1540215900,[],null,"common"],["jquery.autoEllipsis",1540215900,["jquery.highlightText"],null,"common"],["jquery.byteLength",1540215900,[],null,"common"],["jquery.byteLimit",1540215900,["jquery.byteLength"],null,"common"],["jquery.checkboxShiftClick",1540215900,[],null,"common"],["jquery.client",1540215900,[],null,"common"],["jquery.collapsibleTabs",1540215900,[],null,"common"],["jquery.color",1540215900,["jquery.colorUtil"],null,"common"],["jquery.colorUtil",1540215900,[],null,"common"],["jquery.cookie",1540215900,[],null,"common"],["jquery.delayedBind",1540215900,[],null,"common"],["jquery.expandableField",1540215900,["jquery.delayedBind"],null,"common"],["jquery.farbtastic",1540215900,["jquery.colorUtil"],null,"common"],["jquery.footHovzer",1540215900,[],null,"common"],["jquery.form",1540215900,[],null,"common"],["jquery.getAttrs",1540215900,[],null,"common"],["jquery.highlightText",1540215900,[],null,"common"],["jquery.hoverIntent",1540215900,[],null,"common"],[
"jquery.json",1540215900,[],null,"common"],["jquery.localize",1540215900,[],null,"common"],["jquery.makeCollapsible",1540215900,[],null,"common"],["jquery.messageBox",1540215900,[],null,"common"],["jquery.mockjax",1540215900,[],null,"common"],["jquery.mw-jump",1540215900,[],null,"common"],["jquery.mwExtension",1540215900,[],null,"common"],["jquery.placeholder",1540215900,[],null,"common"],["jquery.qunit",1540215900,[],null,"common"],["jquery.qunit.completenessTest",1540215900,["jquery.qunit"],null,"common"],["jquery.spinner",1540215900,[],null,"common"],["jquery.suggestions",1540215900,["jquery.autoEllipsis"],null,"common"],["jquery.tabIndex",1540215900,[],null,"common"],["jquery.tablesorter",1540215900,["jquery.mwExtension"],null,"common"],["jquery.textSelection",1540215900,[],null,"common"],["jquery.validate",1540215900,[],null,"common"],["jquery.xmldom",1540215900,[],null,"common"],["jquery.tipsy",1540215900,[],null,"common"],["jquery.ui.core",1540215900,["jquery"],"jquery.ui",
"common"],["jquery.ui.widget",1540215900,[],"jquery.ui","common"],["jquery.ui.mouse",1540215900,["jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.position",1540215900,[],"jquery.ui","common"],["jquery.ui.draggable",1540215900,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.droppable",1540215900,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui","common"],["jquery.ui.resizable",1540215900,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.selectable",1540215900,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.sortable",1540215900,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.accordion",1540215900,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.autocomplete",1540215900,["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui","common"],[
"jquery.ui.button",1540215900,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.datepicker",1540215900,["jquery.ui.core"],"jquery.ui","common"],["jquery.ui.dialog",1540215900,["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui","common"],["jquery.ui.progressbar",1540215900,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.slider",1540215900,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.tabs",1540215900,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.effects.core",1540215900,["jquery"],"jquery.ui","common"],["jquery.effects.blind",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.bounce",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.clip",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.drop",1540215900,[
"jquery.effects.core"],"jquery.ui","common"],["jquery.effects.explode",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fade",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fold",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.highlight",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.pulsate",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.scale",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.shake",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.slide",1540215900,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.transfer",1540215900,["jquery.effects.core"],"jquery.ui","common"],["mediawiki",1540215900,[],null,"common"],["mediawiki.api",1540215900,["mediawiki.util"],null,"common"],["mediawiki.api.category",1540215900,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.edit",
1540215900,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.parse",1540215900,["mediawiki.api"],null,"common"],["mediawiki.api.titleblacklist",1540215900,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.watch",1540215900,["mediawiki.api","mediawiki.user"],null,"common"],["mediawiki.debug",1540215900,["jquery.footHovzer"],null,"common"],["mediawiki.debug.init",1540215900,["mediawiki.debug"],null,"common"],["mediawiki.feedback",1540215900,["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"],null,"common"],["mediawiki.htmlform",1540215900,[],null,"common"],["mediawiki.Title",1540215900,["jquery.byteLength","mediawiki.util"],null,"common"],["mediawiki.Uri",1540215900,[],null,"common"],["mediawiki.user",1540215900,["jquery.cookie"],null,"common"],["mediawiki.util",1540215900,["jquery.client","jquery.cookie","jquery.messageBox","jquery.mwExtension"],null,"common"],["mediawiki.action.edit",1540215900,["jquery.textSelection",
"jquery.byteLimit"],null,"common"],["mediawiki.action.history",1540215900,["jquery.ui.button"],"mediawiki.action.history","common"],["mediawiki.action.history.diff",1540215900,[],"mediawiki.action.history","common",["sass"]],["mediawiki.action.view.dblClickEdit",1540215900,["mediawiki.util","mediawiki.page.startup"],null,"common"],["mediawiki.action.view.metadata",1540215900,[],null,"common"],["mediawiki.action.view.rightClickEdit",1540215900,[],null,"common"],["mediawiki.action.watch.ajax",1540215900,["mediawiki.api.watch","mediawiki.util"],null,"common"],["mediawiki.language",1540215900,["mediawiki.language.data","mediawiki.cldr"],null,"common"],["mediawiki.cldr",1540215900,["mediawiki.libs.pluralruleparser"],null,"common"],["mediawiki.libs.pluralruleparser",1540215900,[],null,"common"],["mediawiki.language.init",1540215900,[],null,"common"],["mediawiki.jqueryMsg",1540215900,["mediawiki.util","mediawiki.language"],null,"common"],["mediawiki.language.months",1540215900,[
"mediawiki.language"],null,"common"],["mediawiki.language.names",1536615000,["mediawiki.language.init"]],["mediawiki.libs.jpegmeta",1540215900,[],null,"common"],["mediawiki.page.ready",1540215900,["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","mediawiki.util"],null,"common"],["mediawiki.page.startup",1540215900,["jquery.client","mediawiki.util"],null,"common"],["mediawiki.special",1540215900,[],null,"common"],["mediawiki.special.block",1540215900,["mediawiki.util"],null,"common"],["mediawiki.special.changeemail",1540215900,["mediawiki.util"],null,"common"],["mediawiki.special.changeslist",1540215900,["jquery.makeCollapsible"],null,"common"],["mediawiki.special.movePage",1540215900,["jquery.byteLimit"],null,"common"],["mediawiki.special.preferences",1540215900,[],null,"common"],["mediawiki.special.recentchanges",1540215900,["mediawiki.special"],null,"common"],["mediawiki.special.search",1540215900,[],null,"common"],["mediawiki.special.undelete",1540215900,[],null
,"common"],["mediawiki.special.upload",1540215900,["mediawiki.libs.jpegmeta","mediawiki.util"],null,"common"],["mediawiki.special.javaScriptTest",1540215900,["jquery.qunit"],null,"common"],["test.sinonjs",1540215900,[],null,"common"],["mediawiki.tests.qunit.testrunner",1540307700,["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready","test.sinonjs"],null,"common"],["mediawiki.legacy.ajax",1540215900,["mediawiki.util","mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.commonPrint",1540215900,[],null,"common"],["mediawiki.legacy.config",1540215900,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.IEFixes",1540215900,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.mwsuggest",1540215900,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.preview",1540215900,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.protect",1540215900,["mediawiki.legacy.wikibits","jquery.byteLimit"],null,
"common"],["mediawiki.legacy.shared",1540215900,[],null,"common"],["mediawiki.legacy.upload",1540215900,["jquery.spinner","mediawiki.util"],null,"common"],["mediawiki.legacy.wikibits",1540215900,["mediawiki.util","wikia.importScript"],null,"common"],["mediawiki.legacy.wikiprintable",1540215900,[],null,"common"],["amd",1540215900,[],null,"common"],["amd.shared",1202225400,["wikia.instantGlobals","wikia.cache","wikia.cookies","wikia.document","wikia.geo","wikia.fbLocale","wikia.loader","wikia.location","wikia.log","wikia.mw","wikia.nirvana","wikia.querystring","wikia.history","wikia.throbber","wikia.thumbnailer","wikia.tracker","wikia.window","wikia.abTest","underscore"],null,"common"],["wikia.window",1540215900,["amd"],null,"common"],["wikia.cache",1540215900,["amd","wikia.window"],null,"common"],["wikia.document",1540215900,["amd","wikia.window"],null,"common"],["wikia.location",1540215900,["amd","wikia.window"],null,"common"],["wikia.nirvana",1540215900,["amd"],null,"common"],[
"wikia.mw",1540215900,["amd","wikia.window"],null,"common"],["wikia.fbLocale",1540215900,["wikia.geo"],null,"common"],["wikia.loader",1540215900,["amd","wikia.window","wikia.mw","wikia.nirvana","wikia.fbLocale"],null,"common"],["wikia.querystring",1540215900,["amd","wikia.window"],null,"common"],["wikia.history",1540215900,["amd","wikia.window"],null,"common"],["wikia.cookies",1540215900,["amd","wikia.window"],null,"common"],["wikia.log",1540215900,["amd","wikia.querystring","wikia.cookies"],null,"common"],["wikia.abTest",1540215900,["amd","wikia.window"],null,"common"],["wikia.instantGlobals",1540215900,["amd","wikia.window"],null,"common"],["wikia.thumbnailer",1540215900,["amd"],null,"common"],["wikia.geo",1540215900,["amd","wikia.cookies","wikia.querystring"],null,"common"],["wikia.tracker",1540215900,["amd","wikia.window","wikia.log","wikia.tracker.stub"],null,"common"],["wikia.tracker.stub",1540215900,["amd","wikia.window"],null,"common"],["wikia.throbber",1540215900,["amd"],null,
"common"],["underscore",1540215900,["amd"],null,"common"],["wikia.aim",1540215900,["amd"],null,"common"],["wikia.uniqueId",1540215900,["amd"],null,"common"],["wikia.modernizr",1540307700,["amd","modernizr"],null,"common"],["wikia.mustache",1540215900,["amd"],null,"common"],["wikia.underscore",1540215900,["amd","wikia.window"],null,"common"],["wikia.stickyElement",1540215900,["amd","wikia.window","wikia.document","wikia.underscore"],null,"common"],["wikia.jquery.ui",1540215900,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse","jquery.ui.position","jquery.ui.draggable","jquery.ui.droppable","jquery.ui.sortable","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.tabs","jquery.ui.datepicker"],"jquery.ui","common"],["jquery.mustache",1540215900,["wikia.mustache"],null,"common"],["jquery.autocomplete",1540215900,[],null,"common"],["jquery.dataTables",1540215900,[],null,"common"],["jquery.timeago",1540215900,[],null,"common"],["wikia.yui",1540215900,[],"yui","common"],[
"wikia.importScript",1540215900,[],null,"common"],["wikia.article.edit",1540215900,["wikia.tracker"],null,"common"],["jquery.uls.data",1540215900],["jquery.i18n",1540215900,["mediawiki.libs.pluralruleparser"]],["ext.math.mathjax",1540215900,[],"ext.math.mathjax"],["ext.math.mathjax.enabler",1540215900],["ext.wikia.TimeAgoMessaging",1540215900,["jquery.timeago","mediawiki.jqueryMsg"]],["ext.designSystem",1202225400],["wikia.ext.instantGlobals",1540307700,[],null,"common"],["wikia.ext.instantGlobalsOverride",1540215900,[],null,"common"],["ext.bannerNotifications",1202225400],["ext.quickTools",1540215900,["mediawiki.user","mediawiki.util"]],["ext.createUserPage",1540215900,["mediawiki.user","mediawiki.util"]],["ext.quickAdopt",1540215900,["mediawiki.util","ext.createUserPage"]],["ext.wikia.authPreferences",1540215900],["ext.wikia.facebookTags",1540215900,[],null,"common"],["ext.wikia.multiLookup",1540215900],["ext.wikia.ListGlobalUsers",1540215900],["ext.geshi.local",1202225400],[
"ext.siteWideMessages.anon",1540215900],["ext.scribunto",1540215900],["ext.scribunto.edit",1540215900,["ext.scribunto","mediawiki.api"]],["ext.wikia.InfoboxBuilder",1540215900,[],null,"local",["sass"]],["ext.categoryTree",1540215900],["ext.categoryTree.css",1540215900],["ext.checkUser",1540215900,["mediawiki.util"]],["ext.cite",1540215900,["jquery.tooltip"]],["jquery.tooltip",1540215900],["ext.wikia.ajaxpoll",1540215900,[],null,"local",["sass"]],["ext.wikia.WMU",1540215900,["wikia.yui","jquery.aim"]],["ext.wikia.LinkSuggest",1540215900,["jquery.ui.autocomplete"]],["ext.wikia.ListUsers",1540215900,["jquery.ui.autocomplete","jquery.dataTables"],null,"local",["sass"]],["ext.tabber",1540215900],["ext.nuke",1540215900],["ext.userLogin",1202225400],["ext.UserProfilePage.Lightbox",1540215900,["mediawiki.jqueryMsg"],null,"local",["sass"]],["ext.renameuser.modal",1540215900,["mediawiki.util"]],["ext.Chat2.ChatBanModal",1540215900],["ext.Chat2.ChatWidget",1202225400],["ext.Chat2.ChatBanList",
1540215900,["jquery.dataTables","wikia.nirvana"],null,"local",["sass"]],["ext.Chat2",1202225400,["mediawiki.jqueryMsg"]],["ext.AdminDashboard",1202225400],["wikia.ext.abtesting",1535371200,[],null,"common"],["wikia.ext.abt3sting",1535371200,[],null,"common"],["wikia.ext.abtest",1540215900],["wikia.ext.abtesting.edit.styles",1540215900,[],null,"local",["sass"]],["wikia.ext.abtesting.edit",1540215900],["oojs",1540215900],["oojs-ui",1540215900,["oojs","oojs-ui.styles"]],["oojs-ui.styles",1540215900],["jquery.visibleText",1540215900],["Base64.js",1540215900],["easy-deflate.core",1540215900,["Base64.js"]],["easy-deflate.deflate",1540215900,["easy-deflate.core"]],["unicodejs",1540215900],["unicodejs.wordbreak",1202225400,["unicodejs"]],["papaparse",1540215900],["rangefix",1540215900],["ext.visualEditor.viewPageTarget.init",1540215900,["jquery.client","mediawiki.page.startup","mediawiki.Title","mediawiki.Uri","mediawiki.util","user.options","ext.visualEditor.track"]],[
"ext.visualEditor.viewPageTarget.noscript",1540215900],["ext.visualEditor.viewPageTarget",1540215900,["ext.visualEditor.base","ext.visualEditor.mediawiki","ext.visualEditor.core.desktop","jquery.placeholder","mediawiki.feedback","mediawiki.jqueryMsg","mediawiki.util"]],["ext.visualEditor.mobileViewTarget",1540215900,["ext.visualEditor.base","ext.visualEditor.mediawiki.mobile","ext.visualEditor.core.mobile","ext.visualEditor.mwimage.core"]],["ext.visualEditor.ve",1540215900],["ext.visualEditor.track",1540215900,["ext.visualEditor.ve"]],["ext.visualEditor.base",1540215900,["oojs","oojs-ui","unicodejs","rangefix","ext.visualEditor.ve"]],["ext.visualEditor.mediawiki",1540215900,["jquery.visibleText","jquery.byteLength","jquery.client","mediawiki.api","mediawiki.language","mediawiki.Title","mediawiki.Uri","mediawiki.user","mediawiki.util","easy-deflate.deflate","user.options","user.tokens","ext.visualEditor.base","ext.visualEditor.track"]],["ext.visualEditor.mediawiki.mobile",1540215900,[
"ext.visualEditor.mediawiki","ext.visualEditor.core.mobile"]],["ext.visualEditor.standalone",1540215900,["ext.visualEditor.base","jquery.i18n"]],["ext.visualEditor.data",1540215900,["ext.visualEditor.base"]],["ext.visualEditor.core",1540215900,["unicodejs","papaparse","jquery.uls.data","ext.visualEditor.base"]],["ext.visualEditor.core.desktop",1540215900,["ext.visualEditor.core"]],["ext.visualEditor.core.mobile",1540215900,["ext.visualEditor.core"]],["ext.visualEditor.mwcore",1540215900,["ext.visualEditor.core","mediawiki.Title","mediawiki.action.history.diff","mediawiki.user","mediawiki.util","mediawiki.jqueryMsg","jquery.autoEllipsis","jquery.byteLimit"]],["ext.visualEditor.mwformatting",1540215900,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage.core",1540215900,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage",1540215900,["ext.visualEditor.mwimage.core"]],["ext.visualEditor.mwlink",1540215900,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwmeta",1540215900,[
"ext.visualEditor.mwcore","ext.visualEditor.mwlink"]],["ext.visualEditor.mwreference.core",1540215900,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwreference",1540215900,["ext.visualEditor.mwreference.core","ext.visualEditor.mwtransclusion"]],["ext.visualEditor.mwtransclusion.core",1540215900,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwtransclusion",1540215900,["ext.visualEditor.mwtransclusion.core","mediawiki.jqueryMsg","mediawiki.language"]],["ext.visualEditor.language",1540215900,["ext.visualEditor.core","mediawiki.language.names"]],["ext.visualEditor.mwalienextension",1540215900,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwgallery",1540215900,["ext.visualEditor.mwcore"]],["ext.visualEditor.experimental",1202225400,["ext.visualEditor.language","ext.visualEditor.mwalienextension"]],["ext.visualEditor.wikia.viewPageTarget.init",1540215900,["jquery.client","jquery.byteLength","mediawiki.Title","mediawiki.Uri","mediawiki.util","user.options","ext.visualEditor.track"]],[
"ext.visualEditor.wikia.oasisViewPageTarget",1540215900,["ext.visualEditor.viewPageTarget"]],["ext.visualEditor.wikia.core",1540215900,["ext.visualEditor.core.desktop","ext.visualEditor.mwimage","ext.visualEditor.mwmeta"]],["ext.closeMyAccount",1540215900,[],null,"local",["sass"]],["ext.TwitterTag",1540215900],["ext.wikia.VKTag",1540215900],["ext.ArticleVideo.jw",1540215900],["ext.fandomComMigration",1202225400],["ext.maps.common",1540215900,[],"ext.maps"],["ext.maps.coord",1540215900,[],"ext.maps"],["ext.maps.resizable",1202225400,["jquery.ui.resizable"],"ext.maps"],["mapeditor",1540215900,["ext.maps.common","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.dialog"],"ext.maps"],["ext.maps.services",1540215900,["ext.maps.common","ext.maps.coord"],"ext.maps"],["ext.maps.googlemaps3",1540215900,["ext.maps.common"],"ext.maps"],["ext.maps.gm3.markercluster",1540215900,[],"ext.maps"],["ext.maps.gm3.markerwithlabel",1540215900,[],"ext.maps"],["ext.maps.gm3.geoxml",1540215900,[],
"ext.maps/geoxml3"],["ext.maps.gm3.earth",1540215900,[],"ext.maps"],["ext.maps.openlayers",1540215900,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet",1540215900,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet.fullscreen",1540215900,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.markercluster",1540215900,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.providers",1540215900,["ext.maps.leaflet"],"ext.maps"]]);mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"oasis","stylepath":"https://slot1-images.wikia.nocookie.net/__cb7530017530012/common/skins","wgUrlProtocols":"\\/\\/|ftp\\:\\/\\/|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|svn\\:\\/\\/|telnet\\:\\/\\/|worldwind\\:\\/\\/|xmpp\\:","wgArticlePath":"/wiki/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"http://mario.wikia.com",
"wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.19.24","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgDefaultDateFormat":"mdy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgMainPageTitle":"MarioWiki","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"MarioWiki","5":"MarioWiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","110":"Forum","111":"Forum talk","500":"User blog","501":"User blog comment","502":"Blog","503":"Blog talk","828":"Module","829":"Module talk","1200":"Message Wall","1201":"Thread","1202":"Message Wall Greeting","2000":"Board","2001":"Board Thread","2002":"Topic"},"wgNamespaceIds":{"media":-2,
"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"mariowiki":4,"mariowiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"forum":110,"forum_talk":111,"user_blog":500,"user_blog_comment":501,"blog":502,"blog_talk":503,"module":828,"module_talk":829,"message_wall":1200,"thread":1201,"message_wall_greeting":1202,"board":2000,"board_thread":2001,"topic":2002,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"MarioWiki","wgFileExtensions":["png","gif","jpg","jpeg","ico","pdf","svg","odt","ods","odp","odg","odc","odf","odi","odm","ogg","ogv","oga"],"wgDBname":"mario","wgFileCanRotate":!0,"wgAvailableSkins":{"oasis":"Oasis","wikiamobile":"WikiaMobile"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wikicities","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":
" %!\"$\x26\'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgSassParams":{"background-dynamic":"false","background-image":"https://vignette.wikia.nocookie.net/mario/images/5/50/Wiki-background/revision/latest?cb=20180901015502","background-image-height":"600","background-image-width":"450","color-body":"green","color-body-middle":"#dd3509","color-buttons":"red","color-community-header":"red","color-header":"yellow","color-links":"#0148c2","color-page":"#d4e6f7","oasisTypography":1,"page-opacity":"90","widthType":0},"wgWikiaBaseDomain":"wikia.com","wgWikiaBaseDomainRegex":"((wikia|fandom)\\.com|(wikia|fandom)-dev\\.(com|us|pl))","wgServicesExternalDomain":"https://services.wikia.com/","wgServicesExternalAlternativeDomain":"https://services.fandom.com/","wgRecommendedVideoABTestPlaylist":"","wgJSMessagesCB":"7530017530012.0.0","wgVisualEditorConfig":{"disableForAnons":!1,"preferenceModules":{"visualeditor-enable-experimental":"ext.visualEditor.experimental",
"visualeditor-enable-language":"ext.visualEditor.language"},"namespaces":[0,2,14,4],"pluginModules":["ext.visualEditor.wikia.core"],"defaultUserOptions":{"betatempdisable":0,"enable":1,"defaultthumbsize":180,"visualeditor-enable-experimental":0,"visualeditor-enable-language":0},"blacklist":{"msie":null,"android":[["\x3c",3]],"firefox":[["\x3c=",14]],"opera":[["\x3c",12]],"blackberry":null,"silk":null},"skins":["oasis","venus"],"tabPosition":"before","tabMessages":{"edit":null,"editsource":"visualeditor-ca-classiceditor","create":null,"createsource":"visualeditor-ca-classiceditor","editlocaldescriptionsource":"visualeditor-ca-editlocaldescriptionsource","createlocaldescriptionsource":"visualeditor-ca-createlocaldescriptionsource","editsection":null,"editsectionsource":"visualeditor-ca-editsource-section","editappendix":null,"editsourceappendix":null,"createappendix":null,"createsourceappendix":null,"editsectionappendix":null,"editsectionsourceappendix":null},"showBetaWelcome":!1,
"enableTocWidget":!1},"wgCommunityPageDisableTopContributors":!1});mw.loader.state({"jquery":"ready"});window.preMwLdrSt&&mw.loader.state(window.preMwLdrSt);if(window.preMwLdrStA){for(var i=0;i<window.preMwLdrStA.length;i++)mw.loader.state(window.preMwLdrStA[i]);};};if(isCompatible()){document.write("\x3cscript src=\"https://slot1-images.wikia.nocookie.net/__load/-/debug%3Dfalse%26lang%3Den%26only%3Dscripts%26skin%3Doasis%26version%3D7530017530012-20181022T134500Z/jquery,mediawiki\"\x3e\x3c/script\x3e");}delete isCompatible;;

/* cache key: mario:resourceloader:filter:minify-js:7:0514d31014d3664fb3a8bfa1006282b0 */