(function(){
    var g=!0,h=null,j=!1,aa=function(a,b,c){
        return a.call.apply(a.bind,arguments)
        },ba=function(a,b,c){
        if(!a)throw Error();
        if(2<arguments.length){
            var e=Array.prototype.slice.call(arguments,2);
            return function(){
                var c=Array.prototype.slice.call(arguments);
                Array.prototype.unshift.apply(c,e);
                return a.apply(b,c)
                }
            }
        return function(){
        return a.apply(b,arguments)
        }
    },l=function(a,b,c){
    l=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?aa:ba;
    return l.apply(h,arguments)
    };
    
var m=(new Date).getTime();
    var p=function(a){
    a=parseFloat(a);
    return isNaN(a)||1<a||0>a?0:a
    },ca=/^([\w-]+\.)*([\w-]{2,})(\:[0-9]+)?$/,da=function(a,b){
    if(!a)return b;
    var c=a.match(ca);
    return c?c[0]:b
    };
    
var ea=p("0.0"),fa=p("0.001"),ga=p("0.001");
    var ha=/^true$/.test("false")?g:j;
    var t=function(){
    return da("","pagead2.googlesyndication.com")
    };
    
var ia=/&/g,ja=/</g,la=/>/g,ma=/\"/g,na={
    "\x00":"\\0",
    "\b":"\\b",
    "\f":"\\f",
    "\n":"\\n",
    "\r":"\\r",
    "\t":"\\t",
    "\x0B":"\\x0B",
    '"':'\\"',
    "\\":"\\\\"
},x={
    "'":"\\'"
};

var y=window,z,oa=h,A=document.getElementsByTagName("script");
    A&&A.length&&(oa=A[A.length-1].parentNode);
    z=oa;
    t();
    var B=function(a){
    return!!a&&"function"==typeof a&&!!a.call
    },pa=function(a,b){
    if(!(2>arguments.length))for(var c=1,e=arguments.length;c<e;++c)a.push(arguments[c])
        },qa=function(a,b){
    if(!(1E-4>Math.random())){
        var c=Math.random();
        if(c<b)return a[Math.floor(c/b*a.length)]
            }
            return h
    },ra=function(a){
    try{
        return!!a.location.href||""===a.location.href
        }catch(b){
        return j
        }
    };

var sa=h,ta=function(){
    if(!sa){
        for(var a=window,b=a,c=0;a!=a.parent;)if(a=a.parent,c++,ra(a))b=a;else break;sa=b
        }
        return sa
    };
    
var C,D=function(a){
    this.c=[];
    this.b=a||window;
    this.a=0;
    this.d=h
    },ua=function(a,b){
    this.l=a;
    this.i=b
    };
    
D.prototype.o=function(a,b){
    0==this.a&&0==this.c.length&&(!b||b==window)?(this.a=2,this.f(new ua(a,window))):this.g(a,b)
    };
    
D.prototype.g=function(a,b){
    this.c.push(new ua(a,b||this.b));
    va(this)
    };
    
D.prototype.p=function(a){
    this.a=1;
    a&&(this.d=this.b.setTimeout(l(this.e,this),a))
    };
    
D.prototype.e=function(){
    1==this.a&&(this.d!=h&&(this.b.clearTimeout(this.d),this.d=h),this.a=0);
    va(this)
    };
    
D.prototype.q=function(){
    return g
    };
D.prototype.nq=D.prototype.o;
D.prototype.nqa=D.prototype.g;
D.prototype.al=D.prototype.p;
D.prototype.rl=D.prototype.e;
D.prototype.sz=D.prototype.q;
var va=function(a){
    a.b.setTimeout(l(a.m,a),0)
    };
    
D.prototype.m=function(){
    if(0==this.a&&this.c.length){
        var a=this.c.shift();
        this.a=2;
        a.i.setTimeout(l(this.f,this,a),0);
        va(this)
        }
    };

D.prototype.f=function(a){
    this.a=0;
    a.l()
    };
var wa=function(a){
    try{
        return a.sz()
        }catch(b){
        return j
        }
    },xa=function(a){
    return!!a&&("object"==typeof a||"function"==typeof a)&&wa(a)&&B(a.nq)&&B(a.nqa)&&B(a.al)&&B(a.rl)
    },ya=function(){
    if(C&&wa(C))return C;
    var a=ta(),b=a.google_jobrunner;
    return xa(b)?C=b:a.google_jobrunner=C=new D(a)
    },za=function(a,b){
    ya().nq(a,b)
    },Aa=function(a,b){
    ya().nqa(a,b)
    };
    
var Ba=/MSIE [2-7]|PlayStation|Gecko\/20090226/i,Ca=/Android|Opera/,Da=function(){
    var a=E,b=F.google_ad_width,c=F.google_ad_height,e=["<iframe"],d;
    for(d in a)a.hasOwnProperty(d)&&pa(e,d+"="+a[d]);e.push('style="left:0;position:absolute;top:0;"');
    e.push("></iframe>");
    b="border:none;height:"+c+"px;margin:0;padding:0;position:relative;visibility:visible;width:"+b+"px";
    return['<ins style="display:inline-table;',b,'"><ins id="',a.id+"_anchor",'" style="display:block;',b,'">',e.join(" "),"</ins></ins>"].join("")
    };
    
var Ea=function(a,b,c){
    c||(c=ha?"https":"http");
    return[c,"://",a,b].join("")
    };
    
var Fa=function(){},Ha=function(a,b,c){
    switch(typeof b){
        case "string":
            Ga(b,c);
            break;
        case "number":
            c.push(isFinite(b)&&!isNaN(b)?b:"null");
            break;
        case "boolean":
            c.push(b);
            break;
        case "undefined":
            c.push("null");
            break;
        case "object":
            if(b==h){
            c.push("null");
            break
        }
        if(b instanceof Array){
            var e=b.length;
            c.push("[");
            for(var d="",f=0;f<e;f++)c.push(d),Ha(a,b[f],c),d=",";
            c.push("]");
            break
        }
        c.push("{");
            e="";
            for(d in b)b.hasOwnProperty(d)&&(f=b[d],"function"!=typeof f&&(c.push(e),Ga(d,c),c.push(":"),Ha(a,f,c),e=
            ","));c.push("}");
            break;
        case "function":
            break;
        default:
            throw Error("Unknown type: "+typeof b);
    }
},Ia={
    '"':'\\"',
    "\\":"\\\\",
    "/":"\\/",
    "\b":"\\b",
    "\f":"\\f",
    "\n":"\\n",
    "\r":"\\r",
    "\t":"\\t",
    "\x0B":"\\u000b"
},Ja=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g,Ga=function(a,b){b.push('"');b.push(a.replace(Ja,function(a){if(a in Ia)return Ia[a];var b=a.charCodeAt(0),d="\\u";16>b?d+="000":256>b?d+="00":4096>b&&(d+="0");return Ia[a]=d+b.toString(16)}));b.push('"')};var I="google_ad_block google_ad_channel google_ad_client google_ad_format google_ad_height google_ad_host google_ad_host_channel google_ad_host_tier_id google_ad_output google_ad_override google_ad_region google_ad_section google_ad_slot google_ad_type google_ad_width google_adtest google_allow_expandable_ads google_alternate_ad_url google_alternate_color google_analytics_domain_name google_analytics_uacct google_bid google_city google_color_bg google_color_border google_color_line google_color_link google_color_text google_color_url google_container_id google_contents google_country google_cpm google_ctr_threshold google_cust_age google_cust_ch google_cust_gender google_cust_id google_cust_interests google_cust_job google_cust_l google_cust_lh google_cust_u_url google_disable_video_autoplay google_ed google_eids google_enable_ose google_encoding google_font_face google_font_size google_frame_id google_gl google_hints google_image_size google_kw google_kw_type google_lact google_language google_loeid google_max_num_ads google_max_radlink_len google_mtl google_num_radlinks google_num_radlinks_per_unit google_num_slots_to_rotate google_only_ads_with_video google_only_pyv_ads google_only_userchoice_ads google_override_format google_page_url google_previous_watch google_previous_searches google_referrer_url google_region google_reuse_colors google_rl_dest_url google_rl_filtering google_rl_mode google_rt google_safe google_sc_id google_scs google_sui google_skip google_tag_info google_targeting google_tdsma google_tfs google_tl google_ui_features google_ui_version google_video_doc_id google_video_product_type google_with_pyv_ads google_yt_pt google_yt_up".split(" ");var Ka=function(a){this.b=a;a.google_iframe_oncopy||(a.google_iframe_oncopy={handlers:{}});this.j=a.google_iframe_oncopy},La;var J="var i=this.id,s=window.google_iframe_oncopy,H=s&&s.handlers,h=H&&H[i],w=this.contentWindow,d;try{
d=w.document
}catch(e){}
if(h&&d&&(!d.body||!d.body.firstChild)){
if(h.call){
setTimeout(h,0)
}else if(h.match){
w.location.replace(h)
}
}
";
/[&<>\"]/.test(J)&&(-1!=J.indexOf("&")&&(J=J.replace(ia,"&amp;")),-1!=J.indexOf("<")&&(J=J.replace(ja,"&lt;")),-1!=J.indexOf(">")&&(J=J.replace(la,"&gt;")),-1!=J.indexOf('"')&&(J=J.replace(ma,"&quot;")));La=J;Ka.prototype.set=function(a,b){this.j.handlers[a]=b;this.b.addEventListener&&this.b.addEventListener("load",l(this.k,this,a),j)};Ka.prototype.k=function(a){a=this.b.document.getElementById(a);var b=a.contentWindow.document;if(a.onload&&b&&(!b.body||!b.body.firstChild))a.onload()};function Ma(){var a=K,b=K.document,c=a.google_ad_width,e=a.google_ad_height,d;a:{try{d=a.top.document==b;break a}catch(f){}d=j}if(d)return j;d=b.documentElement;if(c&&e){var k=1,n=1;a.innerHeight?(k=a.innerWidth,n=a.innerHeight):d&&d.clientHeight?(k=d.clientWidth,n=d.clientHeight):b.body&&(k=b.body.clientWidth,n=b.body.clientHeight);if(n>2*e||k>2*c)return j}return g};var Na=function(){var a="script";return["<",a,' src="',Ea(t(),"/pagead/js/r20121128/r20121128/show_ads_impl.js",""),'"></',a,">"].join("")},Oa=function(){var a="script";return["<",a,' src="',Ea(t(),"/pagead/expansion_embed.js"),'"></',a,">"].join("")},Pa=function(a){var b;if(!(b="expt"!=a.google_expand_experiment))a:{var c=a.document;try{var e;if(!(e=
    a.google_allow_expandable_ads===j)){
    var d;
    if(!(d=!c.body)){
        var f;
        if(!(f=a.google_ad_output&&"html"!=a.google_ad_output)){
            var k;
            if(!(k=isNaN(a.google_ad_height))){
                var n;
                if(!(n=isNaN(a.google_ad_width))){
                    var v;
                    if(!(v=c.domain!=a.location.hostname)){
                        var u;
                            b:{
                            a=navigator;
                            var q=a.userAgent,G=a.platform;
                            if(/Win|Mac|Linux/.test(G)&&!/^Opera/.test(q)){
                                var U=(/WebKit\/(\d+)/.exec(q)||[0,0])[1],ka=(/rv\:(\d+\.\d+)/.exec(q)||[0,0])[1];
                                if(/Win/.test(G)&&/MSIE.*Trident/.test(q)&&7<c.documentMode||!U&&"Gecko"==
                                    a.product&&1.7<ka&&!/rv\:1\.8([^.]|\.0)/.test(q)||524<U){
                                    u=g;
                                    break b
                                }
                            }
                            u=j
                        }
                        v=!u
                    }
                    n=v
                }
                k=n
            }
            f=k
        }
        d=f
    }
    e=d
}
if(e){
    b=g;
    break a
}
}catch(V){
    b=g;
    break a
}
b=j
}
return b?j:g
},Qa=function(a,b,c,e){
    return function(){
        var d=j;
        e&&ya().al(3E4);
        try{
            if(ra(a.document.getElementById(b).contentWindow)){
                var f=a.document.getElementById(b).contentWindow,k=f.document;
                if(!k.body||!k.body.firstChild)k.open(),f.google_async_iframe_close=g,k.write(c)
                    }else{
                var n=a.document.getElementById(b).contentWindow,v;
                f=c;
                f=String(f);
                if(f.quote)v=
                    f.quote();
                else{
                    for(var k=['"'],u=0;u<f.length;u++){
                        var q=f.charAt(u),G=q.charCodeAt(0),U=k,ka=u+1,V;
                        if(!(V=na[q])){
                            var H;
                            if(31<G&&127>G)H=q;
                            else{
                                var s=q;
                                if(s in x)H=x[s];
                                else if(s in na)H=x[s]=na[s];
                                else{
                                    var r=s,w=s.charCodeAt(0);
                                    if(31<w&&127>w)r=s;
                                    else{
                                        if(256>w){
                                            if(r="\\x",16>w||256<w)r+="0"
                                                }else r="\\u",4096>w&&(r+="0");
                                        r+=w.toString(16).toUpperCase()
                                        }
                                        H=x[s]=r
                                    }
                                }
                            V=H
                        }
                        U[ka]=V
                    }
                    k.push('"');
                v=k.join("")
                }
                n.location.replace("javascript:"+v)
            }
            d=g
        }catch(Gb){
        n=ta().google_jobrunner,xa(n)&&n.rl()
        }
        d&&(new Ka(a)).set(b,
        Qa(a,b,c,j))
    }
},Ra=Math.floor(1E6*Math.random()),Sa=function(a){
    a=a.data.split("\n");
    for(var b={},c=0;c<a.length;c++){
        var e=a[c].indexOf("=");
        -1!=e&&(b[a[c].substr(0,e)]=a[c].substr(e+1))
        }
        b[1]==Ra&&(window.google_top_url=b[3])
    };
    
window.google_loader_used=g;
var L=window;
if(!("google_onload_fired"in L)){
    L.google_onload_fired=j;
    var Ta=function(){
        L.google_onload_fired=g
        };
        
    L.addEventListener?L.addEventListener("load",Ta,j):L.attachEvent&&L.attachEvent("onload",Ta)
    }
    var Ua=window,Va=2;
try{
    Ua.top.document==Ua.document?Va=0:ra(Ua.top)&&(Va=1)
    }catch(Wa){}
if(2===Va&&top.postMessage&&!window.google_top_experiment&&(window.google_top_experiment=qa(["jp_e","jp_c"],fa),"jp_e"===window.google_top_experiment)){
    var M=window;
    M.addEventListener?M.addEventListener("message",Sa,j):M.attachEvent&&M.attachEvent("onmessage",Sa);
    var Xa={
        "0":"google_loc_request",
        1:Ra
    },Ya=[],Za;
    for(Za in Xa)Ya.push(Za+"="+Xa[Za]);top.postMessage(Ya.join("\n"),"*")
    }
    window.google_expand_experiment||(window.google_expand_experiment=qa(["expt","control"],ea)||"none");
var $a;
if(window.google_enable_async===j)$a=0;
else{
    var ab=navigator.userAgent;
    $a=(Ba.test(ab)||Ca.test(ab)?j:g)&&!window.google_container_id&&(!window.google_ad_output||"html"==window.google_ad_output)
    }
if($a){
    var bb=window;
    bb.google_unique_id?++bb.google_unique_id:bb.google_unique_id=1;
    for(var K=window,_script$$inline_83="script",N,F=K,E={
        allowtransparency:'"true"',
        frameborder:'"0"',
        height:'"'+K.google_ad_height+'"',
        hspace:'"0"',
        marginwidth:'"0"',
        marginheight:'"0"',
        onload:'"'+La+'"',
        scrolling:'"no"',
        vspace:'"0"',
        width:'"'+K.google_ad_width+'"'
        },cb=F.document,O=E.id,db=0;!O||F.document.getElementById(O);)O="aswift_"+db++;
    E.id=O;
    E.name=O;
    cb.write(Da());
    N=O;
    var eb,P=K;
    P.google_page_url&&(P.google_page_url=
        String(P.google_page_url));
    for(var fb=[],gb=0,hb=I.length;gb<hb;gb++){
        var ib=I[gb];
        if(P[ib]!=h){
            var jb;
            try{
                var kb=[];
                Ha(new Fa,P[ib],kb);
                jb=kb.join("")
                }catch(lb){}
            jb&&pa(fb,ib,"=",jb,";")
            }
        }
    eb=fb.join("");
var Q=window,mb=Q.google_ad_output,R=Q.google_ad_format;
if(!R&&("html"==mb||mb==h))R=Q.google_ad_width+"x"+Q.google_ad_height;
R=R&&(!Q.google_ad_slot||Q.google_override_format)?R.toLowerCase():"";
Q.google_ad_format=R;
var S,nb=[y.google_ad_slot,y.google_ad_format,y.google_ad_type,y.google_ad_width,
y.google_ad_height];
if(z){
    var T;
    if(z){
        for(var ob=[],pb=0,W=z;W&&25>pb;W=W.parentNode,++pb)ob.push(9!=W.nodeType&&W.id||"");
        T=ob.join()
        }else T="";
    T&&nb.push(T)
    }
    var qb=0;
if(nb){
    var rb=nb.join(":"),sb=rb.length;
    if(0==sb)qb=0;
    else{
        for(var X=305419896,tb=0;tb<sb;tb++)X^=(X<<5)+(X>>2)+rb.charCodeAt(tb)&4294967295;
        qb=0<X?X:4294967296+X
        }
    }
S=qb.toString();
    a:{
    var Y=window,Z=Y.google_async_slots;
    Z||(Z=Y.google_async_slots={});
    var ub=Y.google_unique_id,$=String("number"==typeof ub?ub:0);
    if($ in Z&&($+="b",$ in
        Z))break a;
    Z[$]={
        sent:j,
        w:Y.google_ad_width||"",
        h:Y.google_ad_height||"",
        adk:S,
        type:Y.google_ad_type||"",
        slot:Y.google_ad_slot||"",
        fmt:Y.google_ad_format||"",
        cli:Y.google_ad_client||"",
        saw:[]
    }
}
var vb=K.postMessage?qa(["expt","control"],ga):"",wb="";
if(K.postMessage&&"expt"==vb){
    var xb;
    xb=(K.google_page_url||Ma()?K.document.URL:K.document.referrer)+"_"+S+"_"+K.google_unique_id;
    var yb=xb=h,zb=Ea(da("","googleads.g.doubleclick.net"),["/pagead/html/r20121128/zrt_lookup.html",
        yb?"#"+yb:""].join(""),""),wb=['<iframe id="',N,'" name="',N,'" style="display:none" src="',zb,'" ></iframe>'].join("")
    }
    for(var Ab=K,Bb=0,Cb=I.length;Bb<Cb;Bb++)Ab[I[Bb]]=h;
var Db=(new Date).getTime(),Eb=K.google_top_experiment,Fb=K.google_expand_experiment,Hb="";
Pa(K)&&(Hb=Oa());
var Ib=["<!doctype html><html><body>",wb,"<",_script$$inline_83,">",eb,"google_show_ads_impl=true;google_unique_id=",K.google_unique_id,';google_async_iframe_id="',N,'";google_ad_unit_key="',S,'";google_start_time=',m,";",
Eb?'google_top_experiment="'+Eb+'";':"",Fb?'google_expand_experiment="'+Fb+'";':"",vb?'google_lookup_frame_experiment="'+vb+'";':"","google_bpp=",Db>m?Db-m:1,";</",_script$$inline_83,">",Hb,Na(),"</body></html>"].join("");
(K.document.getElementById(N)?za:Aa)(Qa(K,N,Ib,g))
}else window.google_start_time=m,!("object"==typeof window.n&&"function"==typeof window.n.createIframe)&&Pa(window)&&document.write(Oa()),document.write(Na());
})();
