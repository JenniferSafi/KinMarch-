!function(e){"use strict";e((function(){e(document).on("submit",".shopengine-filter",(function(t){t.preventDefault();let n=e(this),i=window.location.search.substr(1),o=window.location.href.split(/[?#]/)[0].replace(/\/page\/[0-9]+\//g,""),s=document.title,l=e(".shopengine-archive-products").first(),d=(i+"&"+n.serialize()).split("&").reduce((function(e,t){if(!t)return e;let n=t.split("=");return e[n[0]]=decodeURIComponent(n[1]),""===n[1]&&delete e[n[0]],(n[0].endsWith("%5B%5D")||n[0].endsWith("[]"))&&delete e[n[0]],"paged"===n[0]&&delete e[n[0]],e}),{}),r=e.param(d),a=r?decodeURIComponent(o+"?"+r):o;"undefined"!=typeof window.shopengine_filter_ajax&&null!==window.shopengine_filter_ajax&&window.shopengine_filter_ajax.abort(),window.shopengine_filter_ajax=e.ajax({method:"GET",url:o,data:d,beforeSend:function(){l.addClass("is-loading"),window.history.pushState({},s,a)},success:function(t){let n=e(t).find(".shopengine-archive-products");l.html(n.html());let i=e(".shopengine-archive-result-count > p");i.length&&i.text(n.find("p.woocommerce-result-count").text())},complete:function(){l.removeClass("is-loading")}})}))}))}(jQuery);