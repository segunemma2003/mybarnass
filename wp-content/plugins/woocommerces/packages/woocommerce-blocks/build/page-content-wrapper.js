(()=>{var e,t={7381:(e,t,o)=>{"use strict";o.r(t);var r=o(9307);const a=window.wp.blocks;var i=o(5736);const n=window.wp.blockEditor;var s=o(897);const c=window.wc.wcSettings;var p;const l=(0,c.getSetting)("wcBlocksConfig",{buildPhase:1,pluginUrl:"",productCount:0,defaultAvatar:"",restApiRoutes:{},wordCountType:"words"}),u=(l.pluginUrl,l.pluginUrl,l.buildPhase,null===(p=c.STORE_PAGES.shop)||void 0===p||p.permalink,c.STORE_PAGES.checkout.id),g=(c.STORE_PAGES.checkout.permalink,c.STORE_PAGES.privacy.permalink,c.STORE_PAGES.privacy.title,c.STORE_PAGES.terms.permalink,c.STORE_PAGES.terms.title,c.STORE_PAGES.cart.id),m=(c.STORE_PAGES.cart.permalink,c.STORE_PAGES.myaccount.permalink?c.STORE_PAGES.myaccount.permalink:(0,c.getSetting)("wpLoginUrl","/wp-login.php"),(0,c.getSetting)("localPickupEnabled",!1),(0,c.getSetting)("countries",{})),d=(0,c.getSetting)("countryData",{}),w=(Object.fromEntries(Object.keys(d).filter((e=>!0===d[e].allowBilling)).map((e=>[e,m[e]||""]))),Object.fromEntries(Object.keys(d).filter((e=>!0===d[e].allowBilling)).map((e=>[e,d[e].states||[]]))),Object.fromEntries(Object.keys(d).filter((e=>!0===d[e].allowShipping)).map((e=>[e,m[e]||""]))),Object.fromEntries(Object.keys(d).filter((e=>!0===d[e].allowShipping)).map((e=>[e,d[e].states||[]]))),Object.fromEntries(Object.keys(d).map((e=>[e,d[e].locale||[]]))),JSON.parse('{"name":"woocommerce/page-content-wrapper","version":"1.0.0","title":"WooCommerce Page","description":"Displays WooCommerce page content.","category":"woocommerce","keywords":["WooCommerce"],"textdomain":"woocommerce","supports":{"html":false,"multiple":false,"inserter":false},"attributes":{"page":{"type":"string","default":""}},"providesContext":{"postId":"postId","postType":"postType"},"apiVersion":2,"$schema":"https://schemas.wp.org/trunk/block.json"}'));o(1786),(0,a.registerBlockType)(w,{icon:{src:s.Z},edit:({attributes:e,setAttributes:t})=>{const o=(0,n.useBlockProps)({className:"wp-block-woocommerce-page-content-wrapper"});return(0,r.useEffect)((()=>{if(!e.postId&&e.page){let o=0;"checkout"===e.page&&(o=u),"cart"===e.page&&(o=g),o&&t({postId:o,postType:"page"})}}),[e,t]),(0,r.createElement)("div",{...o},(0,r.createElement)(n.InnerBlocks,{template:[["core/post-title",{align:"wide"}],["core/post-content",{align:"wide"}]]}))},save:()=>(0,r.createElement)(n.InnerBlocks.Content,null),variations:[{name:"checkout-page",title:(0,i.__)("Checkout Page","woocommerce"),attributes:{page:"checkout"},isActive:(e,t)=>e.page===t.page},{name:"cart-page",title:(0,i.__)("Cart Page","woocommerce"),attributes:{page:"cart"},isActive:(e,t)=>e.page===t.page}]})},1786:()=>{},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n},444:e=>{"use strict";e.exports=window.wp.primitives}},o={};function r(e){var a=o[e];if(void 0!==a)return a.exports;var i=o[e]={exports:{}};return t[e].call(i.exports,i,i.exports,r),i.exports}r.m=t,e=[],r.O=(t,o,a,i)=>{if(!o){var n=1/0;for(l=0;l<e.length;l++){for(var[o,a,i]=e[l],s=!0,c=0;c<o.length;c++)(!1&i||n>=i)&&Object.keys(r.O).every((e=>r.O[e](o[c])))?o.splice(c--,1):(s=!1,i<n&&(n=i));if(s){e.splice(l--,1);var p=a();void 0!==p&&(t=p)}}return t}i=i||0;for(var l=e.length;l>0&&e[l-1][2]>i;l--)e[l]=e[l-1];e[l]=[o,a,i]},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.j=6413,(()=>{var e={6413:0};r.O.j=t=>0===e[t];var t=(t,o)=>{var a,i,[n,s,c]=o,p=0;if(n.some((t=>0!==e[t]))){for(a in s)r.o(s,a)&&(r.m[a]=s[a]);if(c)var l=c(r)}for(t&&t(o);p<n.length;p++)i=n[p],r.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return r.O(l)},o=self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})();var a=r.O(void 0,[2869],(()=>r(7381)));a=r.O(a),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["page-content-wrapper"]=a})();