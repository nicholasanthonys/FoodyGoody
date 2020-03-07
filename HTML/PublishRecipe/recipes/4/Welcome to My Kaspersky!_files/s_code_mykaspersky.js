var adobeTrackingServer="tr1.kaspersky.com";
var adobeTrackingServerSecure="tr2.kaspersky.com";

function Visitor(k,s){if(!k)throw"Visitor requires Adobe Marketing Cloud Org ID";var a=this;a.version="1.3.4";var h=window,m=h.Visitor;h.s_c_in||(h.s_c_il=[],h.s_c_in=0);a._c="Visitor";a._il=h.s_c_il;a._in=h.s_c_in;a._il[a._in]=a;h.s_c_in++;var t=h.document,j=h.O;j||(j=null);var i=h.P;i||(i=!0);var p=h.N;p||(p=!1);a.C=function(a){var c=0,b,e;if(a)for(b=0;b<a.length;b++)e=a.charCodeAt(b),c=(c<<5)-c+e,c&=c;return c};a.m=function(a){var c="0123456789",b="",e="",f,g=8,h=10,i=10;if(1==a){c+="ABCDEF";for(a=
0;16>a;a++)f=Math.floor(Math.random()*g),b+=c.substring(f,f+1),f=Math.floor(Math.random()*g),e+=c.substring(f,f+1),g=16;return b+"-"+e}for(a=0;19>a;a++)f=Math.floor(Math.random()*h),b+=c.substring(f,f+1),0==a&&9==f?h=3:(1==a||2==a)&&10!=h&&2>f?h=10:2<a&&(h=10),f=Math.floor(Math.random()*i),e+=c.substring(f,f+1),0==a&&9==f?i=3:(1==a||2==a)&&10!=i&&2>f?i=10:2<a&&(i=10);return b+e};a.I=function(){var a;!a&&h.location&&(a=h.location.hostname);if(a)if(/^[0-9.]+$/.test(a))a="";else{var c=a.split("."),b=
c.length-1,e=b-1;1<b&&2>=c[b].length&&(2==c[b-1].length||0>",ac,ad,ae,af,ag,ai,al,am,an,ao,aq,ar,as,at,au,aw,ax,az,ba,bb,be,bf,bg,bh,bi,bj,bm,bo,br,bs,bt,bv,bw,by,bz,ca,cc,cd,cf,cg,ch,ci,cl,cm,cn,co,cr,cu,cv,cw,cx,cz,de,dj,dk,dm,do,dz,ec,ee,eg,es,eu,fi,fm,fo,fr,ga,gb,gd,ge,gf,gg,gh,gi,gl,gm,gn,gp,gq,gr,gs,gt,gw,gy,hk,hm,hn,hr,ht,hu,id,ie,im,in,io,iq,ir,is,it,je,jo,jp,kg,ki,km,kn,kp,kr,ky,kz,la,lb,lc,li,lk,lr,ls,lt,lu,lv,ly,ma,mc,md,me,mg,mh,mk,ml,mn,mo,mp,mq,mr,ms,mt,mu,mv,mw,mx,my,na,nc,ne,nf,ng,nl,no,nr,nu,nz,om,pa,pe,pf,ph,pk,pl,pm,pn,pr,ps,pt,pw,py,qa,re,ro,rs,ru,rw,sa,sb,sc,sd,se,sg,sh,si,sj,sk,sl,sm,sn,so,sr,st,su,sv,sx,sy,sz,tc,td,tf,tg,th,tj,tk,tl,tm,tn,to,tp,tt,tv,tw,tz,ua,ug,uk,us,uy,uz,va,vc,ve,vg,vi,vn,vu,wf,ws,yt,nd,".indexOf(","+
c[b]+","))&&e--;if(0<e)for(a="";b>=e;)a=c[b]+(a?".":"")+a,b--}return a};a.cookieRead=function(a){var a=encodeURIComponent(a),c=(";"+t.cookie).split(" ").join(";"),b=c.indexOf(";"+a+"="),e=0>b?b:c.indexOf(";",b+1);return 0>b?"":decodeURIComponent(c.substring(b+2+a.length,0>e?c.length:e))};a.cookieWrite=function(d,c,b){var e=a.cookieLifetime,f,c=""+c,e=e?(""+e).toUpperCase():"";b&&"SESSION"!=e&&"NONE"!=e?(f=""!=c?parseInt(e?e:0):-60)?(b=new Date,b.setTime(b.getTime()+1E3*f)):1==b&&(b=new Date,f=b.getYear(),
b.setYear(f+2+(1900>f?1900:0))):b=0;return d&&"NONE"!=e?(t.cookie=encodeURIComponent(d)+"="+encodeURIComponent(c)+"; path=/;"+(b?" expires="+b.toGMTString()+";":"")+(a.cookieDomain?" domain="+a.cookieDomain+";":""),a.cookieRead(d)==c):0};a.e=j;a.w=function(a,c){try{"function"==typeof a?a.apply(h,c):a[1].apply(a[0],c)}catch(b){}};a.L=function(d,c){c&&(a.e==j&&(a.e={}),void 0==a.e[d]&&(a.e[d]=[]),a.e[d].push(c))};a.l=function(d,c){if(a.e!=j){var b=a.e[d];if(b)for(;0<b.length;)a.w(b.shift(),c)}};a.j=
j;a.J=function(d,c,b){var e=0,f=0,g;if(c&&t){for(g=0;!e&&2>g;){try{e=(e=t.getElementsByTagName(0<g?"HEAD":"head"))&&0<e.length?e[0]:0}catch(h){e=0}g++}if(!e)try{t.body&&(e=t.body)}catch(i){e=0}if(e)for(g=0;!f&&2>g;){try{f=t.createElement(0<g?"SCRIPT":"script")}catch(l){f=0}g++}}!c||!e||!f?b&&b():(f.type="text/javascript",f.setAttribute("async","async"),f.src=c,e.firstChild?e.insertBefore(f,e.firstChild):e.appendChild(f),b&&(a.j==j&&(a.j={}),a.j[d]=setTimeout(b,a.loadTimeout)))};a.H=function(d){a.j!=
j&&a.j[d]&&(clearTimeout(a.j[d]),a.j[d]=0)};a.D=p;a.F=p;a.isAllowed=function(){if(!a.D&&(a.D=i,a.cookieRead(a.cookieName)||a.cookieWrite(a.cookieName,"T",1)))a.F=i;return a.F};a.a=j;a.c=j;var w=a.V;w||(w="MC");var n=a.Y;n||(n="MCMID");var x=a.X;x||(x="MCCIDH");var y=a.W;y||(y="MCAS");var u=a.T;u||(u="A");var l=a.Q;l||(l="MCAID");var v=a.U;v||(v="AAM");var r=a.S;r||(r="MCAAMLH");var o=a.R;o||(o="MCAAMB");var q=a.Z;q||(q="NONE");a.t=0;a.B=function(){if(!a.t){var d=a.version;a.audienceManagerServer&&
(d+="|"+a.audienceManagerServer);a.audienceManagerServerSecure&&(d+="|"+a.audienceManagerServerSecure);if(a.audienceManagerCustomerIDDPIDs)for(var c in a.audienceManagerCustomerIDDPIDs)!Object.prototype[c]&&a.audienceManagerCustomerIDDPIDs[c]&&(d+=c+"="+a.audienceManagerCustomerIDDPIDs[c]);a.t=a.C(d)}return a.t};a.G=p;a.h=function(){if(!a.G){a.G=i;var d=a.B(),c=p,b=a.cookieRead(a.cookieName),e,f,g,h=new Date;a.a==j&&(a.a={});if(b&&"T"!=b){b=b.split("|");b[0].match(/^[\-0-9]+$/)&&(parseInt(b[0])!=
d&&(c=i),b.shift());1==b.length%2&&b.pop();for(d=0;d<b.length;d+=2)e=b[d].split("-"),f=e[0],g=b[d+1],e=1<e.length?parseInt(e[1]):0,c&&(f==x&&(g=""),0<e&&(e=h.getTime()/1E3-60)),f&&g&&(a.d(f,g,1),0<e&&(a.a["expire"+f]=e,h.getTime()>=1E3*e&&(a.c||(a.c={}),a.c[f]=i)))}if(!a.b(l)&&(b=a.cookieRead("s_vi")))b=b.split("|"),1<b.length&&0<=b[0].indexOf("v1")&&(g=b[1],d=g.indexOf("["),0<=d&&(g=g.substring(0,d)),g&&g.match(/^[0-9a-fA-F\-]+$/)&&a.d(l,g))}};a.M=function(){var d=a.B(),c,b;for(c in a.a)!Object.prototype[c]&&
a.a[c]&&"expire"!=c.substring(0,6)&&(b=a.a[c],d+=(d?"|":"")+c+(a.a["expire"+c]?"-"+a.a["expire"+c]:"")+"|"+b);a.cookieWrite(a.cookieName,d,1)};a.b=function(d,c){return a.a!=j&&(c||!a.c||!a.c[d])?a.a[d]:j};a.d=function(d,c,b){a.a==j&&(a.a={});a.a[d]=c;b||a.M()};a.p=function(d,c){var b=new Date;b.setTime(b.getTime()+1E3*c);a.a==j&&(a.a={});a.a["expire"+d]=Math.floor(b.getTime()/1E3);0>c?(a.c||(a.c={}),a.c[d]=i):a.c&&(a.c[d]=p)};a.A=function(a){if(a&&("object"==typeof a&&(a=a.d_mid?a.d_mid:a.visitorID?
a.visitorID:a.id?a.id:a.uuid?a.uuid:""+a),a&&(a=a.toUpperCase(),"NOTARGET"==a&&(a=q)),!a||a!=q&&!a.match(/^[0-9a-fA-F\-]+$/)))a="";return a};a.i=function(d,c){a.H(d);a.g!=j&&(a.g[d]=p);if(d==w){var b=a.b(n);if(!b){b="object"==typeof c&&c.mid?c.mid:a.A(c);if(!b){if(a.r){a.getAnalyticsVisitorID(null,!1,!0);return}b=a.m()}a.d(n,b)}if(!b||b==q)b="";"object"==typeof c&&((c.d_region||c.dcs_region||c.d_blob||c.blob)&&a.i(v,c),a.r&&c.mid&&a.i(u,{id:c.id}));a.l(n,[b])}if(d==v&&"object"==typeof c){b=604800;
void 0!=c.id_sync_ttl&&c.id_sync_ttl&&(b=parseInt(c.id_sync_ttl));var e=a.b(r);e||((e=c.d_region)||(e=c.dcs_region),e&&(a.p(r,b),a.d(r,e)));e||(e="");a.l(r,[e]);e=a.b(o);if(c.d_blob||c.blob)(e=c.d_blob)||(e=c.blob),a.p(o,b),a.d(o,e);e||(e="");a.l(o,[e]);!c.error_msg&&a.o&&a.d(x,a.o)}if(d==u){b=a.b(l);b||((b=a.A(c))?a.p(o,-1):b=q,a.d(l,b));if(!b||b==q)b="";a.l(l,[b])}};a.g=j;a.n=function(d,c,b,e){var f="",g;if(a.isAllowed()&&(a.h(),f=a.b(d),!f&&(d==n?g=w:d==r||d==o?g=v:d==l&&(g=u),g))){if(c&&(a.g==
j||!a.g[g]))a.g==j&&(a.g={}),a.g[g]=i,a.J(g,c,function(){if(!a.b(d)){var b="";d==n&&(b=a.m());a.i(g,b)}});a.L(d,b);c||a.i(g,{id:q});return""}if((d==n||d==l)&&f==q)f="",e=i;b&&e&&a.w(b,[f]);return f};a._setMarketingCloudFields=function(d){a.h();a.i(w,d)};a.setMarketingCloudVisitorID=function(d){a._setMarketingCloudFields(d)};a.r=p;a.getMarketingCloudVisitorID=function(d,c){return a.isAllowed()?(a.marketingCloudServer&&0>a.marketingCloudServer.indexOf(".demdex.net")&&(a.r=i),a.n(n,a.s("_setMarketingCloudFields"),
d,c)):""};a.K=function(){a.getAudienceManagerBlob()};a.f={};a.z=p;a.o="";a.setCustomerIDs=function(d){a.f=d;if(a.isAllowed()){a.h();var d=a.b(x),c="",b,e;d||(d=0);for(b in a.f)e=a.f[b],!Object.prototype[b]&&e&&(c+=(c?"|":"")+b+"|"+e);a.o=a.C(c);a.o!=d&&(a.z=i,a.K())}};a.getCustomerIDs=function(){return a.f};a._setAnalyticsFields=function(d){a.h();a.i(u,d)};a.setAnalyticsVisitorID=function(d){a._setAnalyticsFields(d)};a.getAnalyticsVisitorID=function(d,c,b){if(a.isAllowed()){var e="";b||(e=a.getMarketingCloudVisitorID(function(){a.getAnalyticsVisitorID(d,
i)}));if(e||b){var f=b?a.marketingCloudServer:a.trackingServer,g="";a.loadSSL&&(b?a.marketingCloudServerSecure&&(f=a.marketingCloudServerSecure):a.trackingServerSecure&&(f=a.trackingServerSecure));f&&(g="http"+(a.loadSSL?"s":"")+"://"+f+"/id?callback=s_c_il%5B"+a._in+"%5D._set"+(b?"MarketingCloud":"Analytics")+"Fields&mcorgid="+encodeURIComponent(a.marketingCloudOrgID)+(e?"&mid="+e:""));return a.n(b?n:l,g,d,c)}}return""};a._setAudienceManagerFields=function(d){a.h();a.i(v,d)};a.s=function(d){var c=
a.audienceManagerServer,b="",e=a.b(n),f=a.b(o,i),g=a.b(l),g=g&&g!=q?"&d_cid_ic=AVID%01"+encodeURIComponent(g):"",h="",j,k;a.loadSSL&&a.audienceManagerServerSecure&&(c=a.audienceManagerServerSecure);if(c){if(a.f)for(j in a.f)if(!Object.prototype[j]&&(b=a.f[j]))g+="&d_cid_ic="+encodeURIComponent(j)+"%01"+encodeURIComponent(b),a.audienceManagerCustomerIDDPIDs&&(k=a.audienceManagerCustomerIDDPIDs[j])&&(h+="&d_cid="+k+"%01"+encodeURIComponent(b));d||(d="_setAudienceManagerFields");b="http"+(a.loadSSL?
"s":"")+"://"+c+"/id?d_rtbd=json&d_ver=2"+(!e&&a.r?"&d_verify=1":"")+"&d_orgid="+encodeURIComponent(a.marketingCloudOrgID)+(e?"&d_mid="+e:"")+(f?"&d_blob="+encodeURIComponent(f):"")+g+h+"&d_cb=s_c_il%5B"+a._in+"%5D."+d}return b};a.getAudienceManagerLocationHint=function(d,c){if(a.isAllowed()&&a.getMarketingCloudVisitorID(function(){a.getAudienceManagerLocationHint(d,i)})){var b=a.b(l);b||(b=a.getAnalyticsVisitorID(function(){a.getAudienceManagerLocationHint(d,i)}));if(b)return a.n(r,a.s(),d,c)}return""};
a.getAudienceManagerBlob=function(d,c){if(a.isAllowed()&&a.getMarketingCloudVisitorID(function(){a.getAudienceManagerBlob(d,i)})){var b=a.b(l);b||(b=a.getAnalyticsVisitorID(function(){a.getAudienceManagerBlob(d,i)}));if(b)return b=a.s(),a.z&&a.p(o,-1),a.n(o,b,d,c)}return""};m.AUTH_STATE_UNAUTHENTICATED=0;m.AUTH_STATE_AUTHENTICATED=1;m.AUTH_STATE_ASSUMED_AUTHENTICATED=2;m.AUTH_STATE_LOGGEDOUT=3;a.setAuthState=function(d){a.isAllowed()&&(a.h(),a.d(y,d))};a.getAuthState=function(){return a.isAllowed()?
(a.h(),a.b(y)):0};a.k="";a.q={};a.u="";a.v={};a.getSupplementalDataID=function(d,c){!a.k&&!c&&(a.k=a.m(1));var b=a.k;a.u&&!a.v[d]?(b=a.u,a.v[d]=i):b&&(a.q[d]&&(a.u=a.k,a.v=a.q,a.k=b=!c?a.m(1):"",a.q={}),b&&(a.q[d]=i));return b};0>k.indexOf("@")&&(k+="@AdobeOrg");a.marketingCloudOrgID=k;a.namespace=s;a.cookieName="AMCV_"+k;a.cookieDomain=a.I();a.cookieDomain==h.location.hostname&&(a.cookieDomain="");if(s){var m="AMCV_"+s,A=a.cookieRead(a.cookieName),z=a.cookieRead(m);!A&&z&&(a.cookieWrite(a.cookieName,
z,1),a.cookieWrite(m,"",-60))}a.loadSSL=0<=h.location.protocol.toLowerCase().indexOf("https");a.loadTimeout=500;a.marketingCloudServer=a.audienceManagerServer="dpm.demdex.net"}getInstance=function(k,s){var a,h=window.s_c_il,m;0>k.indexOf("@")&&(k+="@AdobeOrg");if(h)for(m=0;m<h.length;m++)if((a=h[m])&&"Visitor"==a._c&&(a.marketingCloudOrgID==k||s&&a.namespace==s))return a;return new Visitor(k,s)};

var visitor = new Visitor("983502BE532960BE0A490D4C@AdobeOrg");

visitor.trackingServer = adobeTrackingServer; // same as s.trackingServer
visitor.trackingServerSecure = adobeTrackingServerSecure; //same as s.trackingServerSecure

// To enable CNAME support, add the following configuration variables
// If you are not using CNAME, DO NOT include these variables
visitor.marketingCloudServer = adobeTrackingServer;
visitor.marketingCloudServerSecure = adobeTrackingServerSecure; //same as s.trackingServerSecure

if ( typeof kaspersky != 'object' ) {
	var kaspersky = {};
}

if ( typeof tmpKLOmniture != 'object' ) {
	var tmpKLOmniture = {};
	tmpKLOmniture['functionName'] = '';
}

var orderLeverDiscount = 0;
var productLevelDiscount = 0;
var productsRevUpsell = '';

// kaspersky['testmode'] = 1;

var s_account = kaspersky['testmode'] == '1' ? 'kaspersky-ucp-dev' : 'kaspersky-kpc';
var s = new AppMeasurement();
s.visitor = getVisitorInstance('983502BE532960BE0A490D4C@AdobeOrg');
s.account = s_account;
s.prop30 = '20180322';//library version
s.charSet = 'UTF-8';
s.currencyCode = kaspersky['currency']?kaspersky['currency']:'USD';
s.trackDownloadLinks = true;
s.trackExternalLinks = true;
s.trackInlineStats = true;
s.linkDownloadFileTypes = 'pdf,txt,exe,sis,cab,rpm,msp,deb,msi,tbz,tgz,gz,zip,ini,doc,docx,nsf,xls,xlsx,ppt,pptx,csv,apk,dmg,rtf,wav,mp3,mov,mpg,avi,wmv';
s.linkInternalFilters = 'javascript:,my.kaspersky.com,m.kaspersky.com,center.kaspersky.com,beta.ucp,kaspersky-labs.com';
s.linkLeaveQueryString = false;
s.linkTrackVars = 'None';
s.linkTrackEvents = 'None';
s.sCodeName = 's_code_mykaspersky.js';
s.debugTrace = '';

//track pageView
tmpKLOmniture['trackPageViewName'] = '';
function trackPageView(pageName) {
	s.debugTrace = s.apl(s.debugTrace, 'trackPageView', ' > ', 0);
	if (pageName.indexOf('End Session Dialog') == -1) {
		tmpKLOmniture['trackPageViewName'] = pageName;
		tmpKLOmniture['functionName'] = 'trackPageView';
		s.t();
		tmpKLOmniture['trackPageViewName'] = '';
	}
}

//track downloads
function trackDownload(fname, type) {
	s.debugTrace = s.apl(s.debugTrace, 'trackDownload', ' > ', 0);
	tmpKLOmniture['functionName'] = 'trackDownload';
	if ( !fname ) {
		return;
	}
	if ( fname.indexOf('&') > -1 ) {
		attr_arr = s.split(fname, '&');
		if (attr_arr.length > 0) {
			fname = "";
			for ( var i=0; i<attr_arr.length; i++ ) {
				attr_arr[i] = attr_arr[i].toLowerCase();
				if ( attr_arr[i].indexOf('appid') > -1 || attr_arr[i].indexOf('serviceid') > -1 || attr_arr[i].indexOf('typeid') > -1 ) {
					var strArr = attr_arr[i].split('=');
					attr_arr[i] = strArr[1];
				}
			}
			fname = attr_arr.join(':');
		}
	}
	if ( type ) {
		fname = type + ' ' + fname;
	}
	if ( s.eVar7 = s.getValOnce(fname,'evar7',0) ) {
		s.linkTrackVars = 'prop7,prop8,eVar7,events';
		s.linkTrackEvents = 'event4';
		s.prop7 = fname;
		s.prop8 = s.pageName;
		s.events = 'event4';
		s.tl(this, 'd', fname, null, 'navigate');
		s.prop7 = s.eVar7 = s.prop8 = s.events = '';
		return false;
	}
}

// track CTA v2.0 custom
function trackCta(e) {
	tmpKLOmniture['functionName'] = 'trackCta';
	var objEvent = e || event || window.event;
	var target = objEvent.target || objEvent.srcElement;
	var ctaHref;
	var ctaName;
	var ctaDetected = false;
	var bubbling = true;
	while (bubbling && target) {
		if (ctaDetected == false) {
			ctaName = target.getAttribute('data-omniture-cta-name');
			if (ctaName) {
				ctaDetected = true;
				s.debugTrace = s.apl(s.debugTrace, 'trackCta', ' > ', 0);
				ctaHref = target.getAttribute('href');
				s.linkTrackVars = 'eVar3,eVar68';
				s.eVar68 = ctaName;
				s.tl(target, 'o', ctaHref);
				s.eVar68 = '';
			}
		}
		if (ctaDetected) {
			bubbling = false;
		} else if (target.parentNode && target.parentNode != document.body && target != document.body) {
			target = target.parentNode || false;
		} else  {
			bubbling = false;
		}
	}
}

function trackSignin(type) {
	s.debugTrace = s.apl(s.debugTrace, 'trackSignin', ' > ', 0);
	tmpKLOmniture['functionName'] = 'trackSignin';
	var eventName = 'Sign in';
	s.linkTrackVars = 'eVar3,events';
	s.linkTrackEvents = 'event48';
	s.events = 'event48';
	if (type == 'Email' || type == 'Facebook') {
		eventName = eventName + ':' + type;
	} else {
		eventName = eventName + ':[UNDEFINED]';
	}
	s.tl(true, 'o', eventName);
	s.events = '';
}

function trackRegistration(type) {
	s.debugTrace = s.apl(s.debugTrace, 'trackRegistration', ' > ', 0);
	tmpKLOmniture['functionName'] = 'trackRegistration';
	var eventName = 'Registration';
	s.linkTrackVars = 'eVar3,events';
	s.linkTrackEvents = 'event2';
	s.events = 'event2';
	if (type == 'Email' || type == 'Facebook') {
		eventName = eventName + ':' + type;
	} else {
		eventName = eventName + ':[UNDEFINED]';
	}
	s.tl(true, 'o', eventName);
	s.events = '';
}

tmpKLOmniture['FormsInitiated'] = ':';
function trackForm(formName, event) {
	s.debugTrace = s.apl(s.debugTrace, 'trackForm', ' > ', 0);
	tmpKLOmniture['functionName'] = 'trackForm';
	s.linkTrackVars = 'eVar3,events';
	s.linkTrackEvents = '';
	s.events = '';
	if (event == 'Changed' && tmpKLOmniture['FormsInitiated'].indexOf(':' + formName + ':') == -1) {
		s.tl(true, 'o', 'Forms:' + formName + ':Initiated');
		s.events = '';
		tmpKLOmniture['FormsInitiated'] = tmpKLOmniture['FormsInitiated'] + formName + ':';
	}
}

//track buy buttons
function trackBuyButton(button_name,product) {
	s.debugTrace = s.apl(s.debugTrace, 'trackBuyButton', ' > ', 0);
	tmpKLOmniture['functionName'] = 'trackBuyButton';
	s.linkTrackVars = 'events';
	s.events = 'scBuyButton';
	s.events = s.getCartOpenStore('s_scOpen');
	s.events = s.resetGetCartOpen('s_scOpen');
	s.events = s.getCheckout('s_scCheckout');
	s.events = s.events.indexOf('scOpen')>-1?'scOpen':'';
	s.linkTrackEvents = s.events;
	s.tl(this,'o',button_name+":"+product);
	s.events = '';
}

function trackCampaign() {
	s.debugTrace = s.apl(s.debugTrace, 'trackCampaign', ' > ', 0);
	try {
		if (typeof(window.Utils.OmnitureTracking.getQueryParams()) != 'undefined') {
			var queryObj = window.Utils.OmnitureTracking.getQueryParams();
			var campaign = queryObj['reseller']?queryObj['reseller']:queryObj['cid']?queryObj['cid']:queryObj['campaign']?queryObj['campaign']:'';
			return campaign;
		}
	} catch (err) {
		//s.prop20 = 'Utils.OmnitureTracking not placed ' + s.pageName?s.pageName:'';
	}
}

function trackSCUpdate(products_replica, currency, action) {
	s.debugTrace = s.apl(s.debugTrace, 'trackSCUpdate', ' > ', 0);
	tmpKLOmniture['functionName'] = 'trackSCUpdate';
	//by this kaspersky['products_replica'] before banner is known
	s.events = s.products = '';
	s.linkTrackVars = 'prop21,events,products';
	s.linkTrackEvents = 'scView,events,scAdd,scRemove';
	var newProd = '';

	kaspersky['events'] = 'scView';
	switch(action) {
		case 'add': kaspersky['events'] = 'scAdd';
		//comparing kaspersky['products'] with products_replica to find out what's been added
		for (var n=0;n<products_replica.split(',').length;n++) {
			if (kaspersky['products'].indexOf(products_replica.split(',')[n].split(';')[1]) == -1) {
				//has been added
				newProd+=products_replica.split(',')[n] + ',';
			}
		}
		newProd = newProd.substring(0,newProd.length-1);
		newProd = kaspersky['products'] + ',' + newProd;
		s.linkTrackEvents = 'scAdd';
		break;
		case 'remove': kaspersky['events'] = 'scRemove';
		//comparing kaspersky['products'] with products_replica to find out what's been removed
		for (var n=0;n<kaspersky['products'].split(',').length;n++) {
			//newProd+=';' + products_replica.split(',')[n].split(';')[1] + ';' + products_replica.split(',')[n].split(';')[2] + ',';
			if (products_replica.indexOf(kaspersky['products'].split(',')[n].split(';')[1]) == -1) {
				//has been removed
				newProd+=kaspersky['products'].split(',')[n] + ',';
			}
		}
		newProd = newProd.substring(0,newProd.length-1);

		s.linkTrackEvents = 'scRemove';
		break;
		case 'upsell' : {
			kaspersky['events'] = 'scView'; //upsell popup
			s.linkTrackEvents = 'scView';
			var sum = 0;

			for (var n=0;n<products_replica.split(',').length;n++) {
				sum = sum + parseFloat(products_replica.split(',')[n].split(';')[3]);
				newProd+=';' + products_replica.split(',')[n].split(';')[1] + ';' + products_replica.split(',')[n].split(';')[2] + ',';
			}
			newProd = newProd.substring(0,newProd.length-1);
			productsRevSum+='>' + sum;
			s.prop21 = s.prop21 + ':' + productsRevSum;
		}
		break;
		case 'update': {
			kaspersky['events'] = 'scView';
		s.linkTrackEvents = 'scView';
		}
		break;
	}

	s.events = s.apl(s.events, kaspersky['events'], ',', 1);
	s.products = kaspersky['products'] = newProd;
	kaspersky['products_replica'] = products_replica;
	s.tl(true, 'o', 'SC update');
	s.events = s.prop21 = productsRevSum = '';
}

function trackUpsellPopup(products,currency) {
	s.debugTrace = s.apl(s.debugTrace, 'trackUpsellPopup', ' > ', 0);
	tmpKLOmniture['functionName'] = 'trackUpsellPopup';
	s.events = s.products = '';
	productsRevSum = '';
	var sum = 0;
	/*
	for (String t:products.split(','))	{
		sum+=parseFloat(t.split(';')[3]);
	}
	*/
	for (var n=0;n<products.split(',').length;n++) {
		sum = sum + parseFloat(products.split(',')[n].split(';')[3]);
	}
	productsRevSum = currency + ':' + sum;
	s.linkTrackVars = 'prop21';
	s.prop21 = 'upsell popup';
	s.tl(true, 'o', 'upsell popup');
}

function trackRegWin(name,locale,source) {
	s.debugTrace = s.apl(s.debugTrace, 'trackRegWin', ' > ', 0);
	//update the code here
	console.log('trackRegWin');
}

function trackEvent(category, name, parameters) {
	var name = name || "";
	var parameters = parameters || "";
	s.debugTrace = s.apl(s.debugTrace, 'trackEvent', ' > ', 0);
	tmpKLOmniture['functionName'] = 'trackEvent';
	s.linkTrackVars = 'eVar3';
	s.tl(true, 'o', category + ':' + name + ':' + parameters);
	console.log('trackEvent(' + category + ', ' + name + ', ' + parameters);
}

function trackMaxymiser(t) {
    s.debugTrace = s.apl(s.debugTrace, 'trackMaxymiser', ' > ', 0);
    tmpKLOmniture["testCohort"] = t;
    trackEvent('Maximizer');
}


// inProduct v3.4
function trackInProduct() {
	// s.debugTrace = s.apl(s.debugTrace, 'trackInProduct', ' > ', 0);
	var inp, inp_arr, inp_err=0;
	if ( typeof s.split != 'function' || typeof s.Util.getQueryParamUpdated != 'function' ) {
		return;
	}
	if ( inp = s.Util.getQueryParamUpdated('inp') ) {
		inp = s.repl(s.repl(inp, '%3A', ':'), '%3a', ':');//fix for encoded colon
		inp = s.repl(inp, ':0:0:0:0::', ':0:0:0:0:0:');//fix for v2014
		if ( inp.substring(inp.length-3) == 'cwd' ) { //fix for cwd
			inp = s.repl(inp, '::', ':0:');
		}
		inp_arr = s.split(inp, ':');
		if ( inp_arr.length == 10 || ( inp_arr.length == 9 && inp.substring(inp.length-1) == ':' ) ) {
			//b
			if ( inp_arr[0].length > 0 && inp_arr[1] && inp_arr[2] && inp_arr[3] ) {
				s.eVar28 = inp_arr[0]+':'+inp_arr[1]+':'+inp_arr[2]+':'+inp_arr[3];
			} else {
				inp_err = 'b';
			}
			//l
			if ( inp_arr[4].length > 0 && inp_arr[5].length > 0 && inp_arr[6].length > 0 && inp_arr[7].length > 0 && inp_arr[8].length > 0 ) {
				s.eVar32 = inp_arr[4]+':'+inp_arr[5]+':'+inp_arr[6]+':'+inp_arr[7]+':'+inp_arr[8];
			} else {
				inp_err = 'l';
			}
			//i
			if ( inp_arr[9] ) {
				s.eVar31 = inp_arr[9].replace(/\([^()]+\)/g,'()');
			}
		} else {
			inp_err = 1;
		}
		if ( inp_err ) {
			s.prop20 = 'ERROR inp='+inp+ ( inp_err == 1 ? '' : ' | '+inp_err );
		}
	}
}


/* Plugin Config */
s.usePlugins=true

function s_doPlugins(s) {
	s.linkTrackVars = s.apl(s.linkTrackVars, 'prop29', ',', 1);
	s.debugTrace = s.apl(s.debugTrace, (s.linkType ? 's.tl' : 's.t') + ' > s_doPlugins', ' > ', 0);

	var pageName = tmpKLOmniture['trackPageViewName'] || kaspersky['pagename'];
	
	// Renaming
	
	pageName.replace(/^My.?Account/g, 'Account Settings');
	
	if (pageName == 'Payment Registration > Credit Card From Account Settings My account') {
		pageName = 'My Account > Edit Credit Card';
	} else if (pageName == 'Payment Registration > Credit Card From Account Settings Store') {
		pageName = 'Store > Edit Credit Card';
	}
	
	// TODO: remove
	
	if (kaspersky['sitetype'] == 'IPP') {
		if (pageName == 'SignUp') {
			pageName = kaspersky['section'] + ' > ' + 'Sign Up';
		} else if (pageName == 'SignIn') {
			pageName = kaspersky['section'] + ' > ' + 'Sign In';
		} else if (pageName == 'MailSent') {
			pageName = kaspersky['section'] + ' > ' + 'Mail Sent';
		} else if (pageName == 'RegistrationFailed') {
			pageName = kaspersky['section'] + ' > ' + 'Registration Failed';
		} else if (pageName == 'Connected') {
			pageName = kaspersky['section'] + ' > ' + 'Connected';
		}
	}

	// Spiffing up
	
	var pageName_arr = pageName.split(' > ');
	
	if (/^Error > Page Not Found/.test(pageName) || /^Error > Not Found/.test(pageName)) {
		s.pageType = 'errorPage';
		s.pageName = '';
	} else {
		s.pageName = pageName;
	}
	
	s.channel = 'D=c1';
	s.hier1 = s.repl(pageName, ' > ', ' | ');

	s.server = window.location.hostname;
	s.eVar2 = kaspersky['country'];
	s.eVar3 = 'D=pageName';
	s.eVar9 = 'D=g';
	s.eVar58 = kaspersky['locale'] ? kaspersky['locale'] : 'UNDEFINED';
	
	if (typeof kaspersky.eVar77 == 'undefined') s.eVar77 = '';
	
	if (typeof kaspersky.hasProduct != 'undefined' && kaspersky.hasProduct !== '') {
		s.eVar77 = s.eVar77 + '{"hasProduct":' + kaspersky.hasProduct + '}';
	}
	
	if (typeof kaspersky.safeKidsLicenseType != 'undefined' && kaspersky.safeKidsLicenseType !== '') {
		s.eVar77 = s.eVar77 + '{"safeKidsLicenseType":' + kaspersky.safeKidsLicenseType + '}';
	}
	
	if (typeof kaspersky.hasSafeKidsMobileDevices != 'undefined' && kaspersky.hasSafeKidsMobileDevices !== '') {
		s.eVar77 = s.eVar77 + '{"hasSafeKidsMobileDevices":' + kaspersky.hasSafeKidsMobileDevices + '}';
	}

    // Check Maxymiser call
	if (tmpKLOmniture["testCohort"]) {
		s.evar37 = tmpKLOmniture["testCohort"];
	}
	
	// External CMP
	if ( !s.campaign ) {
		if ( !(/reseller|cid|campaign|typnews/.test(document.location.pathname)) && (typeof kaspersky_reseller != 'undefined' && kaspersky_reseller) ) {
			s.campaign = kaspersky_reseller;
		} else if (s.Util.getQueryParamUpdated('reseller,cid,campaign,typnews',':') != '') {
			s.campaign = s.Util.getQueryParamUpdated('reseller,cid,campaign','|').split('|')[0];
		} else {
			var campaign = trackCampaign();
			if (typeof campaign != 'undefined') {
				s.campaign = campaign;
			}
		}
	}
	if ( s.campaign ) {
		s.campaign = /[?%&=/]/.test(s.campaign)?'Incorrect value':s.getValOnce(s.campaign,'extcamp',0);
	}
	s.eVar19=s.eVar20=s.eVar21=s.eVar22=s.prop17=s.campaign?'D=v0':'';

	// Internal CMP
	if(!s.eVar4) {
		s.eVar4=s.getValOnce(s.Util.getQueryParamUpdated('icid'),'intcamp',0);
	}

	if ( kaspersky['events'] ) {
		s.events = s.apl(s.events, kaspersky['events'], ',', 1);
	}

	// TY Page details
	if ( kaspersky['orderid'] && s.events.indexOf('purchase') > -1 ) {
		s.eVar12 = s.transactionID = s.purchaseID = kaspersky['orderid'];
		////////// SC 2.0 calculating product level discount -
		//kaspersky['products_replicaTY'] - list of products with base prices in kaspersky['currency']
		var prodLevDisSum = 0;
		var priceSum = 0;
		var k=0;

		////////// Checking on coupon code applied ///////////////
		var arrPr = kaspersky['products'].split(',');
		for (var n=0;n<arrPr.length;n++) {
			var t = arrPr[n];
			var tRep = kaspersky['products_replicaTY'].split(',')[k];
			var id = t.split(';')[1];
			var price = parseFloat(t.split(';')[3]);
			var idR = tRep.split(";")[1];
			var priceR = parseFloat(tRep.split(';')[3]);
			priceSum+=price;
			if (price != priceR) {
				//product level discount detection
				prodLevDisSum+=priceR-price;
			}

			k++;
		}
		////////// Checking on coupon code applied ///////////////

		kaspersky['productleveldiscount'] = prodLevDisSum;
		if (prodLevDisSum != 0)	{
			kaspersky['orderleveldiscount'] = 0;
		} else {
			if (priceSum != kaspersky['totalorderamount']) {
				kaspersky['orderleveldiscount'] = priceSum - kaspersky['totalorderamount'];
			} else kaspersky['orderleveldiscount'] = 0;
		}

		s.eVar53 = kaspersky['couponcode'];
		s.prop20 = 'OrdLevDis='+kaspersky['orderleveldiscount'] + ':ProdLevDis=' + kaspersky['productleveldiscount'] + ':totalOrderAmm=' + kaspersky['totalorderamount'];

	} //end of TY page details

	trackInProduct();

	// Define siteType
	if (kaspersky['sitetype'] == 'Default' || kaspersky['sitetype'] == 'IPP' || kaspersky['sitetype'] == 'Mobile') {
		s.eVar47 = kaspersky['sitetype'];
	} else {
		s.eVar47 = 'Default';
	}

	// Define spage
	s.eVar59 = kaspersky['spage'] || '';

	if ( kaspersky['referrer'] ) {
		s.referrer = decodeURIComponent(kaspersky['referrer']);
	}

	////////// SC 2.0 - products
	if ( kaspersky['products'] ) {
		s.products = kaspersky['products'];
	}
	
	// Debug
	s.prop20 = 'file=s_code_mykaspersky.js,function=' + tmpKLOmniture['functionName'];
	tmpKLOmniture['functionName'] = '';
	s.prop29 = 'v1:' + s.sCodeName + ':' + s.debugTrace + ':' + (s.linkType ? s.linkType : 'p');
	s.debugTrace = '';
}
s.doPlugins=s_doPlugins




/************************** PLUGINS SECTION *************************/
/* You may insert any plugins you wish to use here.				 */

/*******************************************************************/
/*
 * Plugin: getQueryParam 2.3
 */
s.Util.getQueryParamUpdated = new Function("b","delim","a","c",""
+"var e;var arr;var va='';var v;var aP;a||(a=s.pageURL?s.pageURL:window.location);c||(c='&');delim||(delim=':');"
+"dl=',';v = '';if (b) {arr=b.split(dl)}else return'';for(i=0;i<arr.length;i++){if(a && (aP=''+a,e=aP.indexOf('?'"
+"),e>=0 && (aP=c+aP.substring(e+1)+c,e=aP.toLowerCase().indexOf(c.toLowerCase()+arr[i].toLowerCase()+'='), e>=0&&"
+"(va=aP.substring(e+c.length+arr[i].length+1)))) ){e=va.indexOf(c);e_alt=va.indexOf('#');if (e_alt>-1){"
+"e = Math.min(e,e_alt);}if (e>=0&&(va=va.substring(0,e)),va.length>0){v=v+delim+va}}};return v.substring(1)");

/*
 * Plugin: getValOnce 0.2 - get a value once per session or number of days
 */
s.getValOnce=new Function("v","c","e",""
+"var s=this,k=s.Util.cookieRead(c),a=new Date;e=e?e:0;if(v){a.setTime(a.getTime("
+")+e*86400000);s.Util.cookieWrite(c,v,e?a:0);}return v==k?'':v");

/*
* Plugin Utility: apl v1.1
*/
s.apl=new Function("L","v","d","u",""
+"var s=this,m=0;if(!L)L='';if(u){var i,n,a=s.split(L,d);for(i=0;i<a."
+"length;i++){n=a[i];m=m||(u==1?(n==v):(n.toLowerCase()==v.toLowerCas"
+"e()));}}if(!m)L=L?L+d+v:v;return L");

/*
 * Utility Function: split v1.5 - split a string (JS 1.0 compatible)
 */
s.split=new Function("l","d",""
+"var i,x=0,a=new Array;while(l){i=l.indexOf(d);i=i>-1?i:l.length;a[x"
+"++]=l.substring(0,i);l=l.substring(i+d.length);}return a");

/*
 * Plugin: getNewRepeat 1.1 - 365 Return whether user is new or repeat
 */
s.getNewRepeat=new Function("d",""
+"var s=this,e=new Date(),cval,sval,ct=e.getTime();e.setTime(ct+d*24*"
+"60*60*1000);cval=s.Util.cookieRead('s_nr');if(cval.length==0){s.Util.cookieWrite('s_nr',ct+'"
+"-New',e);return 'New';}sval=cval.split('-');if(ct-sval[0]<30*60*100"
+"0&&sval[1]=='New'){s.Util.cookieWrite('s_nr',ct+'-New',e);return 'New';}else {s."
+"c_w('s_nr',ct+'-Repeat',e);return 'Repeat';}");

/*
 * Utility Function: join
 */
s.join = new Function("v","p",""
+"var s = this;var f,b,d,w;if(p){f=p.front?p.front:'';b=p.back?p.back"
+":'';d=p.delim?p.delim:'';w=p.wrap?p.wrap:'';}var str='';for(var x=0"
+";x<v.length;x++){if(typeof(v[x])=='object' )str+=s.join( v[x],p);el"
+"se str+=w+v[x]+w;if(x<v.length-1)str+=d;}return f+str+b;");

/*
 * Plugin Utility: Replace v1.0
 */
s.repl=new Function("x","o","n",""
+"var i=x.indexOf(o),l=n.length;while(x&&i>=0){x=x.substring(0,i)+n+x."
+"substring(i+o.length);i=x.indexOf(o,i+l)}return x");


/*
 * Plugins: getCartOpen, resetGetCartOpen, getCheckout
 */
s.getCartOpen=new Function("c",""
+"var s=this,t=new Date,e=s.events?s.events:'',i=0;t.setTime(t.getTim"
+"e()+1800000);if(s.Util.cookieRead(c)||e.indexOf('scOpen')>-1){if(!s.Util.cookieWrite(c,1,t))"
+"{s.Util.cookieWrite(c,1,0)}}else{if(e.indexOf('scAdd')>-1){if(s.Util.cookieWrite(c,1,t)){i=1}"
+"else if(s.Util.cookieWrite(c,1,0)){i=1}}}if(i){e=e+',scOpen'}return e");
s.getCartOpenStore=new Function("c",""
+"var s=this,t=new Date,e=s.events?s.events:'',i=0;t.setTime(t.getTim"
+"e()+1800000);if(s.Util.cookieRead(c)||e.indexOf('scOpen')>-1){if(!s.Util.cookieWrite(c,1,t))"
+"{s.Util.cookieWrite(c,1,0)}}else{if(e.indexOf('scBuyButton')>-1){if(s.Util.cookieWrite(c,1,t)){i=1}"
+"else if(s.Util.cookieWrite(c,1,0)){i=1}}}if(i){e='scOpen'}return e");
s.resetGetCartOpen=new Function("c",""
+"var s=this,t=new Date,e=s.events?s.events:'';t.setTime(t.getTime()+"
+"10000);if(e.indexOf('purchase')>-1){if(s.Util.cookieRead(c)||e.indexOf('scOpen'"
+")>-1){if(!s.Util.cookieWrite(c,'',t)){s.Util.cookieWrite(c,'',0);}}}return e");
s.getCheckout=new Function("c",""
+"var s=this,t=new Date,e=s.events?s.events:'';t.setTime(t.getTime()+"
+"1800000);if(e.indexOf('scCheckout')>-1){if(s.Util.cookieRead(c)){e=s.repl(s.rep"
+"l(e,'scCheckout',''),',,',',')}if(!s.Util.cookieWrite(c,1,t)){s.Util.cookieWrite(c,1,0)}}t.se"
+"tTime(t.getTime()+10000);if(s.Util.cookieRead(c)&&e.indexOf('purchase')>-1){if("
+"!s.Util.cookieWrite(c,'',t)){s.Util.cookieWrite(c,'',0);}}return e");

function getVisitorInstance(k) {
var a,m;
var h = window.s_c_il;
if (k && (k.indexOf('@') > -1)) {
	for (m=0;m<h.length;m++) {
		if ((a=h[m]) && ('Visitor'==a._c) && (a.marketingCloudOrgID==k)){
			return a;
		}
	}
}
return new Visitor(k,s);
}

if (window.addEventListener) {
	window.addEventListener('click', function(e) {
		try {
			trackCta(e);
		} catch(error) {console.log('trackCta(): ' + error);};
	}, false);
} else if (window.attachEvent) {
	window.attachEvent('onclick', function(e) {
		try {
			trackCta(e);
		} catch(error) {console.log('trackCta(): ' + error);};
	});
}

/* WARNING: Changing any of the below variables will cause drastic
changes to how your visitor data is collected.  Changes should only be
made when instructed to do so by your account manager.*/

s.visitorNamespace="kaspersky"
s.dc=122
s.trackingServer=adobeTrackingServer
s.trackingServerSecure=adobeTrackingServerSecure

if (kaspersky['sitetype'] == 'IPP' || (kaspersky['sitetype'] != 'Mobile' && !/m\.kaspersky\.com/i.test(window.location.hostname) && !/m\.center\.kaspersky\.com/i.test(window.location.hostname) && !/m\.beta\.ucp\.kaspersky-labs\.com/i.test(window.location.hostname) && kaspersky['trackPageViewOnLoad'] == 1 && kaspersky['pagename'])) {
	s.t();
}

/*
 ============== DO NOT ALTER ANYTHING BELOW THIS LINE ! ===============

AppMeasurement for JavaScript version: 1.6.1
Copyright 1996-2016 Adobe, Inc. All Rights Reserved
More info available at http://www.adobe.com/marketing-cloud.html
*/
function AppMeasurement(){var a=this;a.version="1.6.1";var k=window;k.s_c_in||(k.s_c_il=[],k.s_c_in=0);a._il=k.s_c_il;a._in=k.s_c_in;a._il[a._in]=a;k.s_c_in++;a._c="s_c";var q=k.AppMeasurement.Cb;q||(q=null);var r=k,n,t;try{for(n=r.parent,t=r.location;n&&n.location&&t&&""+n.location!=""+t&&r.location&&""+n.location!=""+r.location&&n.location.host==t.host;)r=n,n=r.parent}catch(u){}a.sb=function(a){try{console.log(a)}catch(b){}};a.Da=function(a){return""+parseInt(a)==""+a};a.replace=function(a,b,d){return!a||
0>a.indexOf(b)?a:a.split(b).join(d)};a.escape=function(c){var b,d;if(!c)return c;c=encodeURIComponent(c);for(b=0;7>b;b++)d="+~!*()'".substring(b,b+1),0<=c.indexOf(d)&&(c=a.replace(c,d,"%"+d.charCodeAt(0).toString(16).toUpperCase()));return c};a.unescape=function(c){if(!c)return c;c=0<=c.indexOf("+")?a.replace(c,"+"," "):c;try{return decodeURIComponent(c)}catch(b){}return unescape(c)};a.kb=function(){var c=k.location.hostname,b=a.fpCookieDomainPeriods,d;b||(b=a.cookieDomainPeriods);if(c&&!a.cookieDomain&&
!/^[0-9.]+$/.test(c)&&(b=b?parseInt(b):2,b=2<b?b:2,d=c.lastIndexOf("."),0<=d)){for(;0<=d&&1<b;)d=c.lastIndexOf(".",d-1),b--;a.cookieDomain=0<d?c.substring(d):c}return a.cookieDomain};a.c_r=a.cookieRead=function(c){c=a.escape(c);var b=" "+a.d.cookie,d=b.indexOf(" "+c+"="),f=0>d?d:b.indexOf(";",d);c=0>d?"":a.unescape(b.substring(d+2+c.length,0>f?b.length:f));return"[[B]]"!=c?c:""};a.c_w=a.cookieWrite=function(c,b,d){var f=a.kb(),e=a.cookieLifetime,g;b=""+b;e=e?(""+e).toUpperCase():"";d&&"SESSION"!=
e&&"NONE"!=e&&((g=""!=b?parseInt(e?e:0):-60)?(d=new Date,d.setTime(d.getTime()+1E3*g)):1==d&&(d=new Date,g=d.getYear(),d.setYear(g+5+(1900>g?1900:0))));return c&&"NONE"!=e?(a.d.cookie=c+"="+a.escape(""!=b?b:"[[B]]")+"; path=/;"+(d&&"SESSION"!=e?" expires="+d.toGMTString()+";":"")+(f?" domain="+f+";":""),a.cookieRead(c)==b):0};a.H=[];a.ea=function(c,b,d){if(a.wa)return 0;a.maxDelay||(a.maxDelay=250);var f=0,e=(new Date).getTime()+a.maxDelay,g=a.d.visibilityState,m=["webkitvisibilitychange","visibilitychange"];
g||(g=a.d.webkitVisibilityState);if(g&&"prerender"==g){if(!a.fa)for(a.fa=1,d=0;d<m.length;d++)a.d.addEventListener(m[d],function(){var b=a.d.visibilityState;b||(b=a.d.webkitVisibilityState);"visible"==b&&(a.fa=0,a.delayReady())});f=1;e=0}else d||a.l("_d")&&(f=1);f&&(a.H.push({m:c,a:b,t:e}),a.fa||setTimeout(a.delayReady,a.maxDelay));return f};a.delayReady=function(){var c=(new Date).getTime(),b=0,d;for(a.l("_d")?b=1:a.qa();0<a.H.length;){d=a.H.shift();if(b&&!d.t&&d.t>c){a.H.unshift(d);setTimeout(a.delayReady,
parseInt(a.maxDelay/2));break}a.wa=1;a[d.m].apply(a,d.a);a.wa=0}};a.setAccount=a.sa=function(c){var b,d;if(!a.ea("setAccount",arguments))if(a.account=c,a.allAccounts)for(b=a.allAccounts.concat(c.split(",")),a.allAccounts=[],b.sort(),d=0;d<b.length;d++)0!=d&&b[d-1]==b[d]||a.allAccounts.push(b[d]);else a.allAccounts=c.split(",")};a.foreachVar=function(c,b){var d,f,e,g,m="";e=f="";if(a.lightProfileID)d=a.L,(m=a.lightTrackVars)&&(m=","+m+","+a.ja.join(",")+",");else{d=a.e;if(a.pe||a.linkType)m=a.linkTrackVars,
f=a.linkTrackEvents,a.pe&&(e=a.pe.substring(0,1).toUpperCase()+a.pe.substring(1),a[e]&&(m=a[e].Bb,f=a[e].Ab));m&&(m=","+m+","+a.C.join(",")+",");f&&m&&(m+=",events,")}b&&(b=","+b+",");for(f=0;f<d.length;f++)e=d[f],(g=a[e])&&(!m||0<=m.indexOf(","+e+","))&&(!b||0<=b.indexOf(","+e+","))&&c(e,g)};a.p=function(c,b,d,f,e){var g="",m,p,k,w,n=0;"contextData"==c&&(c="c");if(b){for(m in b)if(!(Object.prototype[m]||e&&m.substring(0,e.length)!=e)&&b[m]&&(!d||0<=d.indexOf(","+(f?f+".":"")+m+","))){k=!1;if(n)for(p=
0;p<n.length;p++)m.substring(0,n[p].length)==n[p]&&(k=!0);if(!k&&(""==g&&(g+="&"+c+"."),p=b[m],e&&(m=m.substring(e.length)),0<m.length))if(k=m.indexOf("."),0<k)p=m.substring(0,k),k=(e?e:"")+p+".",n||(n=[]),n.push(k),g+=a.p(p,b,d,f,k);else if("boolean"==typeof p&&(p=p?"true":"false"),p){if("retrieveLightData"==f&&0>e.indexOf(".contextData."))switch(k=m.substring(0,4),w=m.substring(4),m){case "transactionID":m="xact";break;case "channel":m="ch";break;case "campaign":m="v0";break;default:a.Da(w)&&("prop"==
k?m="c"+w:"eVar"==k?m="v"+w:"list"==k?m="l"+w:"hier"==k&&(m="h"+w,p=p.substring(0,255)))}g+="&"+a.escape(m)+"="+a.escape(p)}}""!=g&&(g+="&."+c)}return g};a.mb=function(){var c="",b,d,f,e,g,m,p,k,n="",r="",s=e="";if(a.lightProfileID)b=a.L,(n=a.lightTrackVars)&&(n=","+n+","+a.ja.join(",")+",");else{b=a.e;if(a.pe||a.linkType)n=a.linkTrackVars,r=a.linkTrackEvents,a.pe&&(e=a.pe.substring(0,1).toUpperCase()+a.pe.substring(1),a[e]&&(n=a[e].Bb,r=a[e].Ab));n&&(n=","+n+","+a.C.join(",")+",");r&&(r=","+r+",",
n&&(n+=",events,"));a.events2&&(s+=(""!=s?",":"")+a.events2)}if(a.visitor&&1.5<=parseFloat(a.visitor.version)&&a.visitor.getCustomerIDs){e=q;if(g=a.visitor.getCustomerIDs())for(d in g)Object.prototype[d]||(f=g[d],e||(e={}),f.id&&(e[d+".id"]=f.id),f.authState&&(e[d+".as"]=f.authState));e&&(c+=a.p("cid",e))}a.AudienceManagement&&a.AudienceManagement.isReady()&&(c+=a.p("d",a.AudienceManagement.getEventCallConfigParams()));for(d=0;d<b.length;d++){e=b[d];g=a[e];f=e.substring(0,4);m=e.substring(4);!g&&
"events"==e&&s&&(g=s,s="");if(g&&(!n||0<=n.indexOf(","+e+","))){switch(e){case "supplementalDataID":e="sdid";break;case "timestamp":e="ts";break;case "dynamicVariablePrefix":e="D";break;case "visitorID":e="vid";break;case "marketingCloudVisitorID":e="mid";break;case "analyticsVisitorID":e="aid";break;case "audienceManagerLocationHint":e="aamlh";break;case "audienceManagerBlob":e="aamb";break;case "authState":e="as";break;case "pageURL":e="g";255<g.length&&(a.pageURLRest=g.substring(255),g=g.substring(0,
255));break;case "pageURLRest":e="-g";break;case "referrer":e="r";break;case "vmk":case "visitorMigrationKey":e="vmt";break;case "visitorMigrationServer":e="vmf";a.ssl&&a.visitorMigrationServerSecure&&(g="");break;case "visitorMigrationServerSecure":e="vmf";!a.ssl&&a.visitorMigrationServer&&(g="");break;case "charSet":e="ce";break;case "visitorNamespace":e="ns";break;case "cookieDomainPeriods":e="cdp";break;case "cookieLifetime":e="cl";break;case "variableProvider":e="vvp";break;case "currencyCode":e=
"cc";break;case "channel":e="ch";break;case "transactionID":e="xact";break;case "campaign":e="v0";break;case "latitude":e="lat";break;case "longitude":e="lon";break;case "resolution":e="s";break;case "colorDepth":e="c";break;case "javascriptVersion":e="j";break;case "javaEnabled":e="v";break;case "cookiesEnabled":e="k";break;case "browserWidth":e="bw";break;case "browserHeight":e="bh";break;case "connectionType":e="ct";break;case "homepage":e="hp";break;case "events":s&&(g+=(""!=g?",":"")+s);if(r)for(m=
g.split(","),g="",f=0;f<m.length;f++)p=m[f],k=p.indexOf("="),0<=k&&(p=p.substring(0,k)),k=p.indexOf(":"),0<=k&&(p=p.substring(0,k)),0<=r.indexOf(","+p+",")&&(g+=(g?",":"")+m[f]);break;case "events2":g="";break;case "contextData":c+=a.p("c",a[e],n,e);g="";break;case "lightProfileID":e="mtp";break;case "lightStoreForSeconds":e="mtss";a.lightProfileID||(g="");break;case "lightIncrementBy":e="mti";a.lightProfileID||(g="");break;case "retrieveLightProfiles":e="mtsr";break;case "deleteLightProfiles":e=
"mtsd";break;case "retrieveLightData":a.retrieveLightProfiles&&(c+=a.p("mts",a[e],n,e));g="";break;default:a.Da(m)&&("prop"==f?e="c"+m:"eVar"==f?e="v"+m:"list"==f?e="l"+m:"hier"==f&&(e="h"+m,g=g.substring(0,255)))}g&&(c+="&"+e+"="+("pev"!=e.substring(0,3)?a.escape(g):g))}"pev3"==e&&a.c&&(c+=a.c)}return c};a.B=function(a){var b=a.tagName;if("undefined"!=""+a.Fb||"undefined"!=""+a.wb&&"HTML"!=(""+a.wb).toUpperCase())return"";b=b&&b.toUpperCase?b.toUpperCase():"";"SHAPE"==b&&(b="");b&&(("INPUT"==b||
"BUTTON"==b)&&a.type&&a.type.toUpperCase?b=a.type.toUpperCase():!b&&a.href&&(b="A"));return b};a.za=function(a){var b=a.href?a.href:"",d,f,e;d=b.indexOf(":");f=b.indexOf("?");e=b.indexOf("/");b&&(0>d||0<=f&&d>f||0<=e&&d>e)&&(f=a.protocol&&1<a.protocol.length?a.protocol:l.protocol?l.protocol:"",d=l.pathname.lastIndexOf("/"),b=(f?f+"//":"")+(a.host?a.host:l.host?l.host:"")+("/"!=h.substring(0,1)?l.pathname.substring(0,0>d?0:d)+"/":"")+b);return b};a.I=function(c){var b=a.B(c),d,f,e="",g=0;return b&&
(d=c.protocol,f=c.onclick,!c.href||"A"!=b&&"AREA"!=b||f&&d&&!(0>d.toLowerCase().indexOf("javascript"))?f?(e=a.replace(a.replace(a.replace(a.replace(""+f,"\r",""),"\n",""),"\t","")," ",""),g=2):"INPUT"==b||"SUBMIT"==b?(c.value?e=c.value:c.innerText?e=c.innerText:c.textContent&&(e=c.textContent),g=3):c.src&&"IMAGE"==b&&(e=c.src):e=a.za(c),e)?{id:e.substring(0,100),type:g}:0};a.Db=function(c){for(var b=a.B(c),d=a.I(c);c&&!d&&"BODY"!=b;)if(c=c.parentElement?c.parentElement:c.parentNode)b=a.B(c),d=a.I(c);
d&&"BODY"!=b||(c=0);c&&(b=c.onclick?""+c.onclick:"",0<=b.indexOf(".tl(")||0<=b.indexOf(".trackLink("))&&(c=0);return c};a.vb=function(){var c,b,d=a.linkObject,f=a.linkType,e=a.linkURL,g,m;a.ka=1;d||(a.ka=0,d=a.clickObject);if(d){c=a.B(d);for(b=a.I(d);d&&!b&&"BODY"!=c;)if(d=d.parentElement?d.parentElement:d.parentNode)c=a.B(d),b=a.I(d);b&&"BODY"!=c||(d=0);if(d&&!a.linkObject){var p=d.onclick?""+d.onclick:"";if(0<=p.indexOf(".tl(")||0<=p.indexOf(".trackLink("))d=0}}else a.ka=1;!e&&d&&(e=a.za(d));e&&
!a.linkLeaveQueryString&&(g=e.indexOf("?"),0<=g&&(e=e.substring(0,g)));if(!f&&e){var n=0,r=0,q;if(a.trackDownloadLinks&&a.linkDownloadFileTypes)for(p=e.toLowerCase(),g=p.indexOf("?"),m=p.indexOf("#"),0<=g?0<=m&&m<g&&(g=m):g=m,0<=g&&(p=p.substring(0,g)),g=a.linkDownloadFileTypes.toLowerCase().split(","),m=0;m<g.length;m++)(q=g[m])&&p.substring(p.length-(q.length+1))=="."+q&&(f="d");if(a.trackExternalLinks&&!f&&(p=e.toLowerCase(),a.Ca(p)&&(a.linkInternalFilters||(a.linkInternalFilters=k.location.hostname),
g=0,a.linkExternalFilters?(g=a.linkExternalFilters.toLowerCase().split(","),n=1):a.linkInternalFilters&&(g=a.linkInternalFilters.toLowerCase().split(",")),g))){for(m=0;m<g.length;m++)q=g[m],0<=p.indexOf(q)&&(r=1);r?n&&(f="e"):n||(f="e")}}a.linkObject=d;a.linkURL=e;a.linkType=f;if(a.trackClickMap||a.trackInlineStats)a.c="",d&&(f=a.pageName,e=1,d=d.sourceIndex,f||(f=a.pageURL,e=0),k.s_objectID&&(b.id=k.s_objectID,d=b.type=1),f&&b&&b.id&&c&&(a.c="&pid="+a.escape(f.substring(0,255))+(e?"&pidt="+e:"")+
"&oid="+a.escape(b.id.substring(0,100))+(b.type?"&oidt="+b.type:"")+"&ot="+c+(d?"&oi="+d:"")))};a.nb=function(){var c=a.ka,b=a.linkType,d=a.linkURL,f=a.linkName;b&&(d||f)&&(b=b.toLowerCase(),"d"!=b&&"e"!=b&&(b="o"),a.pe="lnk_"+b,a.pev1=d?a.escape(d):"",a.pev2=f?a.escape(f):"",c=1);a.abort&&(c=0);if(a.trackClickMap||a.trackInlineStats||a.ActivityMap){var b={},d=0,e=a.cookieRead("s_sq"),g=e?e.split("&"):0,m,p,k,e=0;if(g)for(m=0;m<g.length;m++)p=g[m].split("="),f=a.unescape(p[0]).split(","),p=a.unescape(p[1]),
b[p]=f;f=a.account.split(",");m={};for(k in a.contextData)k&&!Object.prototype[k]&&"a.activitymap."==k.substring(0,14)&&(m[k]=a.contextData[k],a.contextData[k]="");a.c=a.p("c",m)+(a.c?a.c:"");if(c||a.c){c&&!a.c&&(e=1);for(p in b)if(!Object.prototype[p])for(k=0;k<f.length;k++)for(e&&(g=b[p].join(","),g==a.account&&(a.c+=("&"!=p.charAt(0)?"&":"")+p,b[p]=[],d=1)),m=0;m<b[p].length;m++)g=b[p][m],g==f[k]&&(e&&(a.c+="&u="+a.escape(g)+("&"!=p.charAt(0)?"&":"")+p+"&u=0"),b[p].splice(m,1),d=1);c||(d=1);if(d){e=
"";m=2;!c&&a.c&&(e=a.escape(f.join(","))+"="+a.escape(a.c),m=1);for(p in b)!Object.prototype[p]&&0<m&&0<b[p].length&&(e+=(e?"&":"")+a.escape(b[p].join(","))+"="+a.escape(p),m--);a.cookieWrite("s_sq",e)}}}return c};a.ob=function(){if(!a.zb){var c=new Date,b=r.location,d,f,e=f=d="",g="",m="",k="1.2",n=a.cookieWrite("s_cc","true",0)?"Y":"N",q="",s="";if(c.setUTCDate&&(k="1.3",(0).toPrecision&&(k="1.5",c=[],c.forEach))){k="1.6";f=0;d={};try{f=new Iterator(d),f.next&&(k="1.7",c.reduce&&(k="1.8",k.trim&&
(k="1.8.1",Date.parse&&(k="1.8.2",Object.create&&(k="1.8.5")))))}catch(t){}}d=screen.width+"x"+screen.height;e=navigator.javaEnabled()?"Y":"N";f=screen.pixelDepth?screen.pixelDepth:screen.colorDepth;g=a.w.innerWidth?a.w.innerWidth:a.d.documentElement.offsetWidth;m=a.w.innerHeight?a.w.innerHeight:a.d.documentElement.offsetHeight;try{a.b.addBehavior("#default#homePage"),q=a.b.Eb(b)?"Y":"N"}catch(u){}try{a.b.addBehavior("#default#clientCaps"),s=a.b.connectionType}catch(x){}a.resolution=d;a.colorDepth=
f;a.javascriptVersion=k;a.javaEnabled=e;a.cookiesEnabled=n;a.browserWidth=g;a.browserHeight=m;a.connectionType=s;a.homepage=q;a.zb=1}};a.M={};a.loadModule=function(c,b){var d=a.M[c];if(!d){d=k["AppMeasurement_Module_"+c]?new k["AppMeasurement_Module_"+c](a):{};a.M[c]=a[c]=d;d.Sa=function(){return d.Wa};d.Xa=function(b){if(d.Wa=b)a[c+"_onLoad"]=b,a.ea(c+"_onLoad",[a,d],1)||b(a,d)};try{Object.defineProperty?Object.defineProperty(d,"onLoad",{get:d.Sa,set:d.Xa}):d._olc=1}catch(f){d._olc=1}}b&&(a[c+"_onLoad"]=
b,a.ea(c+"_onLoad",[a,d],1)||b(a,d))};a.l=function(c){var b,d;for(b in a.M)if(!Object.prototype[b]&&(d=a.M[b])&&(d._olc&&d.onLoad&&(d._olc=0,d.onLoad(a,d)),d[c]&&d[c]()))return 1;return 0};a.qb=function(){var c=Math.floor(1E13*Math.random()),b=a.visitorSampling,d=a.visitorSamplingGroup,d="s_vsn_"+(a.visitorNamespace?a.visitorNamespace:a.account)+(d?"_"+d:""),f=a.cookieRead(d);if(b){f&&(f=parseInt(f));if(!f){if(!a.cookieWrite(d,c))return 0;f=c}if(f%1E4>v)return 0}return 1};a.N=function(c,b){var d,
f,e,g,m,k;for(d=0;2>d;d++)for(f=0<d?a.ra:a.e,e=0;e<f.length;e++)if(g=f[e],(m=c[g])||c["!"+g]){if(!b&&("contextData"==g||"retrieveLightData"==g)&&a[g])for(k in a[g])m[k]||(m[k]=a[g][k]);a[g]=m}};a.La=function(c,b){var d,f,e,g;for(d=0;2>d;d++)for(f=0<d?a.ra:a.e,e=0;e<f.length;e++)g=f[e],c[g]=a[g],b||c[g]||(c["!"+g]=1)};a.ib=function(a){var b,d,f,e,g,k=0,p,n="",q="";if(a&&255<a.length&&(b=""+a,d=b.indexOf("?"),0<d&&(p=b.substring(d+1),b=b.substring(0,d),e=b.toLowerCase(),f=0,"http://"==e.substring(0,
7)?f+=7:"https://"==e.substring(0,8)&&(f+=8),d=e.indexOf("/",f),0<d&&(e=e.substring(f,d),g=b.substring(d),b=b.substring(0,d),0<=e.indexOf("google")?k=",q,ie,start,search_key,word,kw,cd,":0<=e.indexOf("yahoo.co")&&(k=",p,ei,"),k&&p)))){if((a=p.split("&"))&&1<a.length){for(f=0;f<a.length;f++)e=a[f],d=e.indexOf("="),0<d&&0<=k.indexOf(","+e.substring(0,d)+",")?n+=(n?"&":"")+e:q+=(q?"&":"")+e;n&&q?p=n+"&"+q:q=""}d=253-(p.length-q.length)-b.length;a=b+(0<d?g.substring(0,d):"")+"?"+p}return a};a.Ra=function(c){var b=
a.d.visibilityState,d=["webkitvisibilitychange","visibilitychange"];b||(b=a.d.webkitVisibilityState);if(b&&"prerender"==b){if(c)for(b=0;b<d.length;b++)a.d.addEventListener(d[b],function(){var b=a.d.visibilityState;b||(b=a.d.webkitVisibilityState);"visible"==b&&c()});return!1}return!0};a.aa=!1;a.F=!1;a.Za=function(){a.F=!0;a.i()};a.Y=!1;a.R=!1;a.Va=function(c){a.marketingCloudVisitorID=c;a.R=!0;a.i()};a.ba=!1;a.S=!1;a.$a=function(c){a.visitorOptedOut=c;a.S=!0;a.i()};a.V=!1;a.O=!1;a.Na=function(c){a.analyticsVisitorID=
c;a.O=!0;a.i()};a.X=!1;a.Q=!1;a.Pa=function(c){a.audienceManagerLocationHint=c;a.Q=!0;a.i()};a.W=!1;a.P=!1;a.Oa=function(c){a.audienceManagerBlob=c;a.P=!0;a.i()};a.Qa=function(c){a.maxDelay||(a.maxDelay=250);return a.l("_d")?(c&&setTimeout(function(){c()},a.maxDelay),!1):!0};a.Z=!1;a.D=!1;a.qa=function(){a.D=!0;a.i()};a.isReadyToTrack=function(){var c=!0,b=a.visitor;a.aa||a.F||(a.Ra(a.Za)?a.F=!0:a.aa=!0);if(a.aa&&!a.F)return!1;b&&b.isAllowed()&&(a.Y||a.marketingCloudVisitorID||!b.getMarketingCloudVisitorID||
(a.Y=!0,a.marketingCloudVisitorID=b.getMarketingCloudVisitorID([a,a.Va]),a.marketingCloudVisitorID&&(a.R=!0)),a.ba||a.visitorOptedOut||!b.isOptedOut||(a.ba=!0,a.visitorOptedOut=b.isOptedOut([a,a.$a]),a.visitorOptedOut!=q&&(a.S=!0)),a.V||a.analyticsVisitorID||!b.getAnalyticsVisitorID||(a.V=!0,a.analyticsVisitorID=b.getAnalyticsVisitorID([a,a.Na]),a.analyticsVisitorID&&(a.O=!0)),a.X||a.audienceManagerLocationHint||!b.getAudienceManagerLocationHint||(a.X=!0,a.audienceManagerLocationHint=b.getAudienceManagerLocationHint([a,
a.Pa]),a.audienceManagerLocationHint&&(a.Q=!0)),a.W||a.audienceManagerBlob||!b.getAudienceManagerBlob||(a.W=!0,a.audienceManagerBlob=b.getAudienceManagerBlob([a,a.Oa]),a.audienceManagerBlob&&(a.P=!0)),a.Y&&!a.R&&!a.marketingCloudVisitorID||a.V&&!a.O&&!a.analyticsVisitorID||a.X&&!a.Q&&!a.audienceManagerLocationHint||a.W&&!a.P&&!a.audienceManagerBlob||a.ba&&!a.S)&&(c=!1);a.Z||a.D||(a.Qa(a.qa)?a.D=!0:a.Z=!0);a.Z&&!a.D&&(c=!1);return c};a.k=q;a.q=0;a.callbackWhenReadyToTrack=function(c,b,d){var f;f={};
f.eb=c;f.cb=b;f.ab=d;a.k==q&&(a.k=[]);a.k.push(f);0==a.q&&(a.q=setInterval(a.i,100))};a.i=function(){var c;if(a.isReadyToTrack()&&(a.Ya(),a.k!=q))for(;0<a.k.length;)c=a.k.shift(),c.cb.apply(c.eb,c.ab)};a.Ya=function(){a.q&&(clearInterval(a.q),a.q=0)};a.Ta=function(c){var b,d,f=q,e=q;if(!a.isReadyToTrack()){b=[];if(c!=q)for(d in f={},c)f[d]=c[d];e={};a.La(e,!0);b.push(f);b.push(e);a.callbackWhenReadyToTrack(a,a.track,b);return!0}return!1};a.lb=function(){var c=a.cookieRead("s_fid"),b="",d="",f;f=8;
var e=4;if(!c||0>c.indexOf("-")){for(c=0;16>c;c++)f=Math.floor(Math.random()*f),b+="0123456789ABCDEF".substring(f,f+1),f=Math.floor(Math.random()*e),d+="0123456789ABCDEF".substring(f,f+1),f=e=16;c=b+"-"+d}a.cookieWrite("s_fid",c,1)||(c=0);return c};a.t=a.track=function(c,b){var d,f=new Date,e="s"+Math.floor(f.getTime()/108E5)%10+Math.floor(1E13*Math.random()),g=f.getYear(),g="t="+a.escape(f.getDate()+"/"+f.getMonth()+"/"+(1900>g?g+1900:g)+" "+f.getHours()+":"+f.getMinutes()+":"+f.getSeconds()+" "+
f.getDay()+" "+f.getTimezoneOffset());a.visitor&&(a.visitor.jb&&(a.authState=a.visitor.jb()),!a.supplementalDataID&&a.visitor.getSupplementalDataID&&(a.supplementalDataID=a.visitor.getSupplementalDataID("AppMeasurement:"+a._in,a.expectSupplementalData?!1:!0)));a.l("_s");a.Ta(c)||(b&&a.N(b),c&&(d={},a.La(d,0),a.N(c)),a.qb()&&!a.visitorOptedOut&&(a.analyticsVisitorID||a.marketingCloudVisitorID||(a.fid=a.lb()),a.vb(),a.usePlugins&&a.doPlugins&&a.doPlugins(a),a.account&&(a.abort||(a.trackOffline&&!a.timestamp&&
(a.timestamp=Math.floor(f.getTime()/1E3)),f=k.location,a.pageURL||(a.pageURL=f.href?f.href:f),a.referrer||a.Ma||(a.referrer=r.document.referrer),a.Ma=1,a.referrer=a.ib(a.referrer),a.l("_g")),a.nb()&&!a.abort&&(a.ob(),g+=a.mb(),a.ub(e,g),a.l("_t"),a.referrer=""))),c&&a.N(d,1));a.abort=a.supplementalDataID=a.timestamp=a.pageURLRest=a.linkObject=a.clickObject=a.linkURL=a.linkName=a.linkType=k.s_objectID=a.pe=a.pev1=a.pev2=a.pev3=a.c=a.lightProfileID=0};a.tl=a.trackLink=function(c,b,d,f,e){a.linkObject=
c;a.linkType=b;a.linkName=d;e&&(a.j=c,a.u=e);return a.track(f)};a.trackLight=function(c,b,d,f){a.lightProfileID=c;a.lightStoreForSeconds=b;a.lightIncrementBy=d;return a.track(f)};a.clearVars=function(){var c,b;for(c=0;c<a.e.length;c++)if(b=a.e[c],"prop"==b.substring(0,4)||"eVar"==b.substring(0,4)||"hier"==b.substring(0,4)||"list"==b.substring(0,4)||"channel"==b||"events"==b||"eventList"==b||"products"==b||"productList"==b||"purchaseID"==b||"transactionID"==b||"state"==b||"zip"==b||"campaign"==b)a[b]=
void 0};a.tagContainerMarker="";a.ub=function(c,b){var d,f=a.trackingServer;d="";var e=a.dc,g="sc.",k=a.visitorNamespace;f?a.trackingServerSecure&&a.ssl&&(f=a.trackingServerSecure):(k||(k=a.account,f=k.indexOf(","),0<=f&&(k=k.substring(0,f)),k=k.replace(/[^A-Za-z0-9]/g,"")),d||(d="2o7.net"),e=e?(""+e).toLowerCase():"d1","2o7.net"==d&&("d1"==e?e="112":"d2"==e&&(e="122"),g=""),f=k+"."+e+"."+g+d);d=a.ssl?"https://":"http://";e=a.AudienceManagement&&a.AudienceManagement.isReady();d+=f+"/b/ss/"+a.account+
"/"+(a.mobile?"5.":"")+(e?"10":"1")+"/JS-"+a.version+(a.yb?"T":"")+(a.tagContainerMarker?"-"+a.tagContainerMarker:"")+"/"+c+"?AQB=1&ndh=1&pf=1&"+(e?"callback=s_c_il["+a._in+"].AudienceManagement.passData&":"")+b+"&AQE=1";a.hb(d);a.ga()};a.hb=function(c){a.g||a.pb();a.g.push(c);a.ia=a.A();a.Ja()};a.pb=function(){a.g=a.rb();a.g||(a.g=[])};a.rb=function(){var c,b;if(a.na()){try{(b=k.localStorage.getItem(a.la()))&&(c=k.JSON.parse(b))}catch(d){}return c}};a.na=function(){var c=!0;a.trackOffline&&a.offlineFilename&&
k.localStorage&&k.JSON||(c=!1);return c};a.Aa=function(){var c=0;a.g&&(c=a.g.length);a.o&&c++;return c};a.ga=function(){if(a.o&&(a.v&&a.v.complete&&a.v.timeout&&a.v.pa(),a.o))return;a.Ba=q;if(a.ma)a.ia>a.K&&a.Ha(a.g),a.oa(500);else{var c=a.bb();if(0<c)a.oa(c);else if(c=a.xa())a.o=1,a.tb(c),a.xb(c)}};a.oa=function(c){a.Ba||(c||(c=0),a.Ba=setTimeout(a.ga,c))};a.bb=function(){var c;if(!a.trackOffline||0>=a.offlineThrottleDelay)return 0;c=a.A()-a.Ga;return a.offlineThrottleDelay<c?0:a.offlineThrottleDelay-
c};a.xa=function(){if(0<a.g.length)return a.g.shift()};a.tb=function(c){if(a.debugTracking){var b="AppMeasurement Debug: "+c;c=c.split("&");var d;for(d=0;d<c.length;d++)b+="\n\t"+a.unescape(c[d]);a.sb(b)}};a.Ua=function(){return a.marketingCloudVisitorID||a.analyticsVisitorID};a.U=!1;var s;try{s=JSON.parse('{"x":"y"}')}catch(x){s=null}s&&"y"==s.x?(a.U=!0,a.T=function(a){return JSON.parse(a)}):k.$&&k.$.parseJSON?(a.T=function(a){return k.$.parseJSON(a)},a.U=!0):a.T=function(){return null};a.xb=function(c){var b,
d,f;a.Ua()&&2047<c.length&&("undefined"!=typeof XMLHttpRequest&&(b=new XMLHttpRequest,"withCredentials"in b?d=1:b=0),b||"undefined"==typeof XDomainRequest||(b=new XDomainRequest,d=2),b&&a.AudienceManagement&&a.AudienceManagement.isReady()&&(a.U?b.ta=!0:b=0));!b&&a.Ka&&(c=c.substring(0,2047));!b&&a.d.createElement&&a.AudienceManagement&&a.AudienceManagement.isReady()&&(b=a.d.createElement("SCRIPT"))&&"async"in b&&((f=(f=a.d.getElementsByTagName("HEAD"))&&f[0]?f[0]:a.d.body)?(b.type="text/javascript",
b.setAttribute("async","async"),d=3):b=0);b||(b=new Image,b.alt="",b.abort||"undefined"===typeof k.InstallTrigger||(b.abort=function(){b.src=q}));b.va=function(){try{b.timeout&&(clearTimeout(b.timeout),b.timeout=0)}catch(a){}};b.onload=b.pa=function(){b.va();a.gb();a.ca();a.o=0;a.ga();if(b.ta){b.ta=!1;try{var c=a.T(b.responseText);a.AudienceManagement.passData(c)}catch(d){}}};b.onabort=b.onerror=b.ya=function(){b.va();(a.trackOffline||a.ma)&&a.o&&a.g.unshift(a.fb);a.o=0;a.ia>a.K&&a.Ha(a.g);a.ca();
a.oa(500)};b.onreadystatechange=function(){4==b.readyState&&(200==b.status?b.pa():b.ya())};a.Ga=a.A();if(1==d||2==d){var e=c.indexOf("?");f=c.substring(0,e);e=c.substring(e+1);e=e.replace(/&callback=[a-zA-Z0-9_.\[\]]+/,"");1==d?(b.open("POST",f,!0),b.send(e)):2==d&&(b.open("POST",f),b.send(e))}else if(b.src=c,3==d){if(a.Ea)try{f.removeChild(a.Ea)}catch(g){}f.firstChild?f.insertBefore(b,f.firstChild):f.appendChild(b);a.Ea=a.v}b.timeout=setTimeout(function(){b.timeout&&(b.complete?b.pa():(a.trackOffline&&
b.abort&&b.abort(),b.ya()))},5E3);a.fb=c;a.v=k["s_i_"+a.replace(a.account,",","_")]=b;if(a.useForcedLinkTracking&&a.G||a.u)a.forcedLinkTrackingTimeout||(a.forcedLinkTrackingTimeout=250),a.da=setTimeout(a.ca,a.forcedLinkTrackingTimeout)};a.gb=function(){if(a.na()&&!(a.Fa>a.K))try{k.localStorage.removeItem(a.la()),a.Fa=a.A()}catch(c){}};a.Ha=function(c){if(a.na()){a.Ja();try{k.localStorage.setItem(a.la(),k.JSON.stringify(c)),a.K=a.A()}catch(b){}}};a.Ja=function(){if(a.trackOffline){if(!a.offlineLimit||
0>=a.offlineLimit)a.offlineLimit=10;for(;a.g.length>a.offlineLimit;)a.xa()}};a.forceOffline=function(){a.ma=!0};a.forceOnline=function(){a.ma=!1};a.la=function(){return a.offlineFilename+"-"+a.visitorNamespace+a.account};a.A=function(){return(new Date).getTime()};a.Ca=function(a){a=a.toLowerCase();return 0!=a.indexOf("#")&&0!=a.indexOf("about:")&&0!=a.indexOf("opera:")&&0!=a.indexOf("javascript:")?!0:!1};a.setTagContainer=function(c){var b,d,f;a.yb=c;for(b=0;b<a._il.length;b++)if((d=a._il[b])&&"s_l"==
d._c&&d.tagContainerName==c){a.N(d);if(d.lmq)for(b=0;b<d.lmq.length;b++)f=d.lmq[b],a.loadModule(f.n);if(d.ml)for(f in d.ml)if(a[f])for(b in c=a[f],f=d.ml[f],f)!Object.prototype[b]&&("function"!=typeof f[b]||0>(""+f[b]).indexOf("s_c_il"))&&(c[b]=f[b]);if(d.mmq)for(b=0;b<d.mmq.length;b++)f=d.mmq[b],a[f.m]&&(c=a[f.m],c[f.f]&&"function"==typeof c[f.f]&&(f.a?c[f.f].apply(c,f.a):c[f.f].apply(c)));if(d.tq)for(b=0;b<d.tq.length;b++)a.track(d.tq[b]);d.s=a;break}};a.Util={urlEncode:a.escape,urlDecode:a.unescape,
cookieRead:a.cookieRead,cookieWrite:a.cookieWrite,getQueryParam:function(c,b,d){var f;b||(b=a.pageURL?a.pageURL:k.location);d||(d="&");return c&&b&&(b=""+b,f=b.indexOf("?"),0<=f&&(b=d+b.substring(f+1)+d,f=b.indexOf(d+c+"="),0<=f&&(b=b.substring(f+d.length+c.length+1),f=b.indexOf(d),0<=f&&(b=b.substring(0,f)),0<b.length)))?a.unescape(b):""}};a.C="supplementalDataID timestamp dynamicVariablePrefix visitorID marketingCloudVisitorID analyticsVisitorID audienceManagerLocationHint authState fid vmk visitorMigrationKey visitorMigrationServer visitorMigrationServerSecure charSet visitorNamespace cookieDomainPeriods fpCookieDomainPeriods cookieLifetime pageName pageURL referrer contextData currencyCode lightProfileID lightStoreForSeconds lightIncrementBy retrieveLightProfiles deleteLightProfiles retrieveLightData".split(" ");
a.e=a.C.concat("purchaseID variableProvider channel server pageType transactionID campaign state zip events events2 products audienceManagerBlob tnt".split(" "));a.ja="timestamp charSet visitorNamespace cookieDomainPeriods cookieLifetime contextData lightProfileID lightStoreForSeconds lightIncrementBy".split(" ");a.L=a.ja.slice(0);a.ra="account allAccounts debugTracking visitor trackOffline offlineLimit offlineThrottleDelay offlineFilename usePlugins doPlugins configURL visitorSampling visitorSamplingGroup linkObject clickObject linkURL linkName linkType trackDownloadLinks trackExternalLinks trackClickMap trackInlineStats linkLeaveQueryString linkTrackVars linkTrackEvents linkDownloadFileTypes linkExternalFilters linkInternalFilters useForcedLinkTracking forcedLinkTrackingTimeout trackingServer trackingServerSecure ssl abort mobile dc lightTrackVars maxDelay expectSupplementalData AudienceManagement".split(" ");
for(n=0;250>=n;n++)76>n&&(a.e.push("prop"+n),a.L.push("prop"+n)),a.e.push("eVar"+n),a.L.push("eVar"+n),6>n&&a.e.push("hier"+n),4>n&&a.e.push("list"+n);n="pe pev1 pev2 pev3 latitude longitude resolution colorDepth javascriptVersion javaEnabled cookiesEnabled browserWidth browserHeight connectionType homepage pageURLRest".split(" ");a.e=a.e.concat(n);a.C=a.C.concat(n);a.ssl=0<=k.location.protocol.toLowerCase().indexOf("https");a.charSet="UTF-8";a.contextData={};a.offlineThrottleDelay=0;a.offlineFilename=
"AppMeasurement.offline";a.Ga=0;a.ia=0;a.K=0;a.Fa=0;a.linkDownloadFileTypes="exe,zip,wav,mp3,mov,mpg,avi,wmv,pdf,doc,docx,xls,xlsx,ppt,pptx";a.w=k;a.d=k.document;try{if(a.Ka=!1,navigator){var y=navigator.userAgent;if("Microsoft Internet Explorer"==navigator.appName||0<=y.indexOf("MSIE ")||0<=y.indexOf("Trident/")&&0<=y.indexOf("Windows NT 6"))a.Ka=!0}}catch(z){}a.ca=function(){a.da&&(k.clearTimeout(a.da),a.da=q);a.j&&a.G&&a.j.dispatchEvent(a.G);a.u&&("function"==typeof a.u?a.u():a.j&&a.j.href&&(a.d.location=
a.j.href));a.j=a.G=a.u=0};a.Ia=function(){a.b=a.d.body;a.b?(a.r=function(c){var b,d,f,e,g;if(!(a.d&&a.d.getElementById("cppXYctnr")||c&&c["s_fe_"+a._in])){if(a.ua)if(a.useForcedLinkTracking)a.b.removeEventListener("click",a.r,!1);else{a.b.removeEventListener("click",a.r,!0);a.ua=a.useForcedLinkTracking=0;return}else a.useForcedLinkTracking=0;a.clickObject=c.srcElement?c.srcElement:c.target;try{if(!a.clickObject||a.J&&a.J==a.clickObject||!(a.clickObject.tagName||a.clickObject.parentElement||a.clickObject.parentNode))a.clickObject=
0;else{var m=a.J=a.clickObject;a.ha&&(clearTimeout(a.ha),a.ha=0);a.ha=setTimeout(function(){a.J==m&&(a.J=0)},1E4);f=a.Aa();a.track();if(f<a.Aa()&&a.useForcedLinkTracking&&c.target){for(e=c.target;e&&e!=a.b&&"A"!=e.tagName.toUpperCase()&&"AREA"!=e.tagName.toUpperCase();)e=e.parentNode;if(e&&(g=e.href,a.Ca(g)||(g=0),d=e.target,c.target.dispatchEvent&&g&&(!d||"_self"==d||"_top"==d||"_parent"==d||k.name&&d==k.name))){try{b=a.d.createEvent("MouseEvents")}catch(n){b=new k.MouseEvent}if(b){try{b.initMouseEvent("click",
c.bubbles,c.cancelable,c.view,c.detail,c.screenX,c.screenY,c.clientX,c.clientY,c.ctrlKey,c.altKey,c.shiftKey,c.metaKey,c.button,c.relatedTarget)}catch(q){b=0}b&&(b["s_fe_"+a._in]=b.s_fe=1,c.stopPropagation(),c.stopImmediatePropagation&&c.stopImmediatePropagation(),c.preventDefault(),a.j=c.target,a.G=b)}}}}}catch(r){a.clickObject=0}}},a.b&&a.b.attachEvent?a.b.attachEvent("onclick",a.r):a.b&&a.b.addEventListener&&(navigator&&(0<=navigator.userAgent.indexOf("WebKit")&&a.d.createEvent||0<=navigator.userAgent.indexOf("Firefox/2")&&
k.MouseEvent)&&(a.ua=1,a.useForcedLinkTracking=1,a.b.addEventListener("click",a.r,!0)),a.b.addEventListener("click",a.r,!1))):setTimeout(a.Ia,30)};a.Ia();a.loadModule("ActivityMap")}
function s_gi(a){var k,q=window.s_c_il,r,n,t=a.split(","),u,s,x=0;if(q)for(r=0;!x&&r<q.length;){k=q[r];if("s_c"==k._c&&(k.account||k.oun))if(k.account&&k.account==a)x=1;else for(n=k.account?k.account:k.oun,n=k.allAccounts?k.allAccounts:n.split(","),u=0;u<t.length;u++)for(s=0;s<n.length;s++)t[u]==n[s]&&(x=1);r++}x||(k=new AppMeasurement);k.setAccount?k.setAccount(a):k.sa&&k.sa(a);return k}AppMeasurement.getInstance=s_gi;window.s_objectID||(window.s_objectID=0);
function s_pgicq(){var a=window,k=a.s_giq,q,r,n;if(k)for(q=0;q<k.length;q++)r=k[q],n=s_gi(r.oun),n.setAccount(r.un),n.setTagContainer(r.tagContainerName);a.s_giq=0}s_pgicq();