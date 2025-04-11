import{G as C}from"./constants.a8a14dc3.js";import{b as V,w as Y,s as j,r as y,u as I,l as k,k as q}from"./index.7377ee90.js";import{u as J}from"./Widgets.1141b949.js";import{B as Q}from"./RadioToggle.333e7750.js";import{C as G}from"./SettingsRow.ac18ea66.js";import{G as X,a as Z}from"./Row.df38a5f6.js";import{_ as H}from"./_plugin-vue_export-helper.eefbdd86.js";import{o as m,c as f,t as b,b as S,F as D,J as A,G as E,v as u,k as w,l as c,a as h,C as n,x as v,T as $,q as ee,K as re,L as te}from"./runtime-dom.esm-bundler.5c3c7d72.js";import"./translations.d159963e.js";import{_ as r,s as L}from"./default-i18n.20001971.js";import{C as oe}from"./Blur.edde4939.js";import{C as z}from"./Card.7fa0e19d.js";import{C as se}from"./Tabs.dfb0f423.js";import{C as ae}from"./ProBadge.751e0b85.js";import{C as ne}from"./Index.a76253da.js";import{C as ie}from"./HtmlTagsEditor.ede971bf.js";import{C as le}from"./SettingsSeparator.126ae1cc.js";import{C as ce}from"./Index.67b3f099.js";import"./helpers.53868b98.js";import"./Tooltip.73441134.js";import"./Caret.a21d4ca8.js";import"./index.b359096c.js";import"./Slide.39c07c03.js";import"./vue-router.2f910c93.js";import"./Information.13e8cece.js";import"./Editor.9cb3bfe8.js";import"./isEqual.96d3394c.js";import"./_baseIsEqual.aba7ca44.js";import"./_getTag.1e50d0c4.js";import"./_baseClone.76efb8f9.js";import"./_arrayEach.6af5abac.js";import"./UnfilteredHtml.c4692b65.js";import"./CheckSolid.a0a6d7e0.js";const me={setup(){return{optionsStore:V()}},props:{previewData:{type:Array,default:null},useDefaultTemplate:{type:Boolean,default:!0},label:String},computed:{previewLength(){return this.getPreviewData()?this.getPreviewData().length:0}},methods:{getPreviewData(){let t=this.previewData.filter(e=>!!e).map(e=>Y.decode(j(e)).replace(/#breadcrumb_separator/g,'<span class="aioseo-breadcrumb-separator">'+this.optionsStore.options.breadcrumbs.separator+"</span>").replace(/#breadcrumb_link/g,"Permalink"));return this.useDefaultTemplate&&!this.optionsStore.options.breadcrumbs.showCurrentItem&&(t=t.slice(0,t.length-1)),t},sanitizeString:y}},ue={class:"aioseo-preview-box"},pe={key:0,class:"label"},be={key:0,class:"aioseo-breadcrumb-separator"},de=["innerHTML"],ge=["innerHTML"];function he(t,e,d,o,s,i){return m(),f("div",ue,[d.label?(m(),f("span",pe,b(d.label)+": ",1)):S("",!0),(m(!0),f(D,null,A(i.getPreviewData(),(g,p)=>(m(),f(D,{key:p},[1<i.previewLength&&p>0&&p<i.previewLength?(m(),f("span",be,b(i.sanitizeString(o.optionsStore.options.breadcrumbs.separator)),1)):S("",!0),p<i.previewLength-1?(m(),f("span",{key:1,class:E({"aioseo-breadcrumb":!g.match(/aioseo-breadcrumb/),link:g!==o.optionsStore.options.breadcrumbs.breadcrumbPrefix&&!g.match(/<a /)}),innerHTML:g},null,10,de)):S("",!0),p===i.previewLength-1?(m(),f("span",{key:2,class:E({last:!0,link:o.optionsStore.options.breadcrumbs.linkCurrentItem&&d.useDefaultTemplate&&!g.match(/<a /),noLink:!o.optionsStore.options.breadcrumbs.linkCurrentItem&&d.useDefaultTemplate,"aioseo-breadcrumb":!g.match(/aioseo-breadcrumb/)}),innerHTML:g},null,10,ge)):S("",!0)],64))),128))])}const M=H(me,[["render",he]]),_e="all-in-one-seo-pack",fe={setup(){return{optionsStore:V(),rootStore:I()}},components:{CoreSettingsRow:G,GridColumn:X,GridRow:Z,Preview:M},data(){return{strings:{useDefaultTemplate:r("Use a default template",_e)}}},computed:{postTypes(){return this.rootStore.aioseo.postData.postTypes}},methods:{getPreview(t){const e=this.optionsStore.options.breadcrumbs;return[e.breadcrumbPrefix?e.breadcrumbPrefix:"",e.homepageLink?e.homepageLabel?e.homepageLabel:"Home":"",e.showBlogHome&&t.name==="post"?"Blog Home":"",["post","page","attachment"].includes(t.name)?"":t.label,this.getPostTypeTaxonomy(t).singular,this.postTypeIsHierarchical(t)?"Post Parent":"",this.getPostTypeTemplate(t)]},postTypeIsHierarchical(t){return 0<this.rootStore.aioseo.postData.postTypes.filter(e=>e.name===t.name&&e.hierarchical).length},postTypeHasArchive(t){return 0<this.rootStore.aioseo.postData.postTypes.filter(e=>e.name===t.name&&e.hasArchive).length},getPostTypeTemplate(t,e=!0){let d=this.rootStore.aioseo.breadcrumbs.defaultTemplate;return e?d=d.replace(new RegExp("#breadcrumb_label","g"),t.singular):d=d.replace(new RegExp("#breadcrumb_label","g"),"#breadcrumb_post_title_"+t.name),d},getPostTaxonomyOptions(t){return this.rootStore.aioseo.postData.taxonomies.filter(e=>t.taxonomies.includes(e.name)).map(e=>({value:e.name,label:e.label}))},getPostTypeTaxonomy(t){const e=this.rootStore.aioseo.postData.taxonomies.filter(d=>t.taxonomies.includes(d.name));return 0<e.length?e[0]:[]}}},Se={class:"content"};function ve(t,e,d,o,s,i){const g=u("preview"),p=u("base-toggle"),x=u("grid-column"),T=u("grid-row"),P=u("core-settings-row");return m(),f("div",Se,[(m(!0),f(D,null,A(i.postTypes,B=>(m(),w(P,{class:"aioseo-breadcrumbs-post-type",name:B.label,key:B.name},{content:c(()=>[h("div",null,[n(g,{"preview-data":i.getPreview(B)},null,8,["preview-data"]),n(T,null,{default:c(()=>[n(x,null,{default:c(()=>[n(p,{class:"current-item"}),v(" "+b(s.strings.useDefaultTemplate),1)]),_:1})]),_:1})])]),_:2},1032,["name"]))),128))])}const we=H(fe,[["render",ve]]),_="all-in-one-seo-pack",ye={setup(){return{rootStore:I()}},components:{ContentTypesLite:we,CoreBlur:oe,CoreCard:z,CoreMainTabs:se,CoreProBadge:ae,Cta:ne},data(){return{links:k,strings:{breadcrumbTemplates:r("Breadcrumb Templates",_),breadcrumbTemplatesTooltip:r("Override the default template for breadcrumbs on your site using our easy-to-use template editor.",_),ctaButtonText:r("Unlock Breadcrumb Templates",_),ctaHeader1:L(r("Breadcrumb Templates is a %1$s Feature",_),"PRO"),ctaDescription:r("Our template editor will allow you to easily customize how breadcrumbs are displayed on your site based on each post type or taxonomy.",_)},features:[r("Custom HTML templates",_),r("Content Types",_),r("Taxonomies",_),r("Archives",_)],tab:"ContentTypesLite",tabs:[{slug:"ContentTypesLite",name:r("Content Types",_),access:"aioseo_general_settings",pro:!0},{slug:"Taxonomies",name:r("Taxonomies",_),access:"aioseo_general_settings",pro:!0},{slug:"Archives",name:r("Archives",_),access:"aioseo_general_settings",pro:!0},{slug:"Advanced",name:r("Advanced",_),access:"aioseo_general_settings",pro:!0}]}},methods:{}},Te=t=>(re("data-v-1d4be296"),t=t(),te(),t),ke={class:"aioseo-breadcrumbs"},Le={class:"content"},xe=Te(()=>h("br",null,null,-1));function Pe(t,e,d,o,s,i){const g=u("core-pro-badge"),p=u("core-main-tabs"),x=u("core-blur"),T=u("cta"),P=u("core-card");return m(),f("div",ke,[n(P,{slug:"breadcrumbTemplates"},{header:c(()=>[h("span",null,b(s.strings.breadcrumbTemplates),1),n(g)]),tooltip:c(()=>[v(b(s.strings.breadcrumbTemplatesTooltip),1)]),tabs:c(()=>[h("div",Le,[n(x,null,{default:c(()=>[n(p,{tabs:s.tabs,showSaveButton:!1,active:s.tab,internal:""},null,8,["tabs","active"]),n($,{name:"route-fade",mode:"out-in"},{default:c(()=>[(m(),w(ee(s.tab),{active:s.tab},null,8,["active"]))]),_:1})]),_:1}),n(T,{"cta-link":s.links.getPricingUrl("breadcrumb-templates","breadcrumb-templates-upsell"),"button-text":s.strings.ctaButtonText,"learn-more-link":s.links.getUpsellUrl("breadcrumb-templates",null,o.rootStore.isPro?"pricing":"liteUpgrade"),"feature-list":s.features},{"header-text":c(()=>[v(b(s.strings.ctaHeader1),1),xe,v(" "+b(s.strings.ctaHeader2),1)]),description:c(()=>[v(b(s.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list"])])]),_:1})])}const U=H(ye,[["render",Pe],["__scopeId","data-v-1d4be296"]]),a="all-in-one-seo-pack",Be={setup(){const{strings:t}=J({name:"breadcrumbs"});return{licenseStore:q(),optionsStore:V(),rootStore:I(),composableStrings:t,GLOBAL_STRINGS:C,links:k}},components:{BaseRadioToggle:Q,Breadcrumbs:U,BreadcrumbsLite:U,CoreCard:z,CoreHtmlTagsEditor:ie,CoreSettingsRow:G,CoreSettingsSeparator:le,CoreUiElementSlider:ce,Preview:M},data(){return{displayInfo:{block:{copy:"",desc:L(r('To add this block, edit a page or post and search for the "%1$s - Breadcrumbs" block. %2$s',a),"AIOSEO",k.getDocLink(C.learnMore,"breadcrumbsDisplay",!0))},shortcode:{copy:"[aioseo_breadcrumbs]",desc:L(r("Use the following shortcode to display the current breadcrumbs. %1$s",a),k.getDocLink(C.learnMore,"breadcrumbsShortcode",!0))},widget:{copy:"",desc:`${this.composableStrings.visitWidgetsPage} ${k.getDocLink(C.learnMore,"breadcrumbsDisplay",!0)}`},php:{copy:"<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>",desc:L(r("Use the following PHP code anywhere in your theme (in the loop) to display the breadcrumbs. %1$s",a),k.getDocLink(C.learnMore,"breadcrumbsFunction",!0))}},strings:{description:L(r("Breadcrumbs are an essential part of SEO. By default %1$s will automatically add breadcrumbs to the schema markup that we add to your site and you don't need to make any changes for that to work. Breadcrumbs can also be used as a secondary navigation system that tells users where they are on a website relative to the homepage.",a),"AIOSEO"),descriptionTooltip:r("The purpose of breadcrumb navigation is to help users navigate around your website. It also helps search engines understand the structure and hierarchy of links on a web page.",a),breadcrumbs:r("Breadcrumbs",a),enableBreadcrumbs:r("Enable Breadcrumbs",a),showBreadcrumbsOnYourWebsite:r("Show Breadcrumbs on Your Website",a),breadcrumbSettings:r("Breadcrumb Settings",a),breadcrumbTooltip:L(r("These settings will affect all the breadcrumbs displayed by %1$s throughout your site.",a),"AIOSEO"),separator:r("Separator",a),homepageLink:r("Homepage Link",a),homepageLabel:r("Homepage label",a),homepageDescription:r("Label used for homepage link (first item) in breadcrumbs.",a),breadcrumbPrefix:r("Breadcrumb Prefix",a),breadcrumbPrefixDescription:r("Prefix for breadcrumb path.",a),archiveFormat:r("Archive Format",a),archiveFormatDescription:r("Format the label used for archives page.",a),searchResultFormat:r("Search Result Format",a),searchResultFormatDescription:r("Format the label used for the search results page.",a),errorFormat404:r("404 Error Format",a),errorFormat404Description:r("Format the label used for the 404 error page.",a),currentItem:r("Current Item",a),showCurrentItem:r("Show current item",a),linkCurrentItem:r("Link current item",a),home:r("Home",a),category:r("Category",a),subcategory:r("Subcategory",a),articleTitle:r("Article Title",a),searchKeyword:r("search key word goes here",a),categoryName:r("Category Name",a),breadcrumbTemplates:r("Breadcrumb Templates",a),categoryHierarchy:r("Category Hierarchy",a),categoryHierarchyDescription:r("Display complete category hierarchy even if not selected on each individual post.",a),blog:r("Blog",a),blogCrumb:r("Blog Page Title",a),showBlogHome:r("Show Blog Home",a)}}},computed:{getSearchForText(){return this.optionsStore.options.breadcrumbs.searchResultFormat.replace(new RegExp("#breadcrumb_search_string","g"),`<strong>${this.strings.searchKeyword}</strong>`)},getArchivesOfText(){return this.optionsStore.options.breadcrumbs.archiveFormat.replace(new RegExp("#breadcrumb_archive_post_type_name","g"),`<strong>${this.strings.categoryName}</strong>`)},getPagedText(){return this.optionsStore.options.breadcrumbs.pagedFormat.replace(new RegExp("#breadcrumb_format_page_number","g"),"<strong>2</strong>")},previews(){return[{label:"Post",preview:this.getPostPreview()},{label:"Archive",preview:this.getArchivePreview()},{label:"Search",preview:this.getSearchPreview()},{label:"404",preview:this.get404Preview()}]},hasDeprecatedEnable(){return this.optionsStore.internalOptions.internal.deprecatedOptions.includes("breadcrumbsEnable")},isDeprecatedEnable(){return this.hasDeprecatedEnable&&this.optionsStore.options.deprecated.breadcrumbs.enable}},methods:{getRootPreview(){const t=this.optionsStore.options.breadcrumbs.homepageLabel?this.optionsStore.options.breadcrumbs.homepageLabel:"Home";return[this.optionsStore.options.breadcrumbs.breadcrumbPrefix?this.optionsStore.options.breadcrumbs.breadcrumbPrefix:"",this.optionsStore.options.breadcrumbs.homepageLink?t:""].filter(e=>!!e).map(e=>y(e))},getPostPreview(){return[...this.getRootPreview(),this.optionsStore.options.breadcrumbs.showBlogHome?"Blog Home":"",this.strings.category,this.strings.subcategory,this.strings.articleTitle].filter(t=>!!t).map(t=>y(t))},getArchivePreview(){return[...this.getRootPreview(),this.getArchivesOfText].filter(t=>!!t).map(t=>y(t))},getSearchPreview(){return[...this.getRootPreview(),this.getSearchForText].filter(t=>!!t).map(t=>y(t))},get404Preview(){return[...this.getRootPreview(),this.optionsStore.options.breadcrumbs.errorFormat404].filter(t=>!!t).map(t=>y(t))},sanitizeString:y}},Ce={class:"aioseo-breadcrumbs"},De={class:"aioseo-settings-row aioseo-section-description"},He=["innerHTML"],Fe={class:"previews-box main-preview"},Ve={class:"homepage-link"},Ie={class:"homepage-link-label"},Ae={class:"aioseo-description"},Re={class:"aioseo-description"},Oe={class:"aioseo-description"},Ee={class:"aioseo-description"},Ue={class:"aioseo-description"},Ge={class:"aioseo-description first"},ze={key:0,class:"aioseo-description"};function Me(t,e,d,o,s,i){const g=u("base-toggle"),p=u("core-settings-row"),x=u("core-ui-element-slider"),T=u("core-card"),P=u("preview"),B=u("core-settings-separator"),R=u("base-radio-toggle"),O=u("base-input"),F=u("core-html-tags-editor"),N=u("breadcrumbs-lite"),W=u("breadcrumbs",!0);return m(),f("div",Ce,[n(T,{slug:"enableBreadcrumbs","header-text":s.strings.breadcrumbs},{tooltip:c(()=>[v(b(s.strings.descriptionTooltip),1)]),default:c(()=>[h("div",De,[v(b(s.strings.description)+" ",1),h("span",{innerHTML:o.links.getDocLink(o.GLOBAL_STRINGS.learnMore,"breadcrumbsDisplay",!0)},null,8,He)]),o.optionsStore.internalOptions.internal.deprecatedOptions.includes("breadcrumbsEnable")?(m(),w(p,{key:0,name:s.strings.enableBreadcrumbs},{content:c(()=>[n(g,{modelValue:o.optionsStore.options.deprecated.breadcrumbs.enable,"onUpdate:modelValue":e[0]||(e[0]=l=>o.optionsStore.options.deprecated.breadcrumbs.enable=l)},null,8,["modelValue"])]),_:1},8,["name"])):S("",!0),!i.hasDeprecatedEnable||i.isDeprecatedEnable?(m(),w(x,{key:1,label:s.strings.showBreadcrumbsOnYourWebsite,options:s.displayInfo},null,8,["label","options"])):S("",!0)]),_:1},8,["header-text"]),!i.hasDeprecatedEnable||i.isDeprecatedEnable?(m(),w(T,{key:0,slug:"breadcrumbSettings","header-text":s.strings.breadcrumbSettings},{tooltip:c(()=>[v(b(s.strings.breadcrumbTooltip),1)]),default:c(()=>[n(p,{name:o.GLOBAL_STRINGS.preview},{content:c(()=>[h("div",Fe,[(m(!0),f(D,null,A(i.previews,(l,K)=>(m(),w(P,{key:K,"preview-data":l.preview,label:l.label},null,8,["preview-data","label"]))),128))])]),_:1},8,["name"]),n(p,{name:s.strings.separator},{content:c(()=>[n(B,{"options-separator":o.optionsStore.options.breadcrumbs.separator,"onUpdate:separator":e[1]||(e[1]=l=>o.optionsStore.options.breadcrumbs.separator=l),"show-more-slug":"breadcrumbsShowMoreSeparators"},null,8,["options-separator"])]),_:1},8,["name"]),n(p,{name:s.strings.homepageLink},{content:c(()=>[h("div",Ve,[n(R,{modelValue:o.optionsStore.options.breadcrumbs.homepageLink,"onUpdate:modelValue":e[2]||(e[2]=l=>o.optionsStore.options.breadcrumbs.homepageLink=l),name:"homepageLink",options:[{label:o.GLOBAL_STRINGS.off,value:!1,activeClass:"dark"},{label:o.GLOBAL_STRINGS.on,value:!0}]},null,8,["modelValue","options"]),h("div",Ie,[v(b(s.strings.homepageLabel)+" ",1),n(O,{size:"medium",modelValue:i.sanitizeString(o.optionsStore.options.breadcrumbs.homepageLabel),"onUpdate:modelValue":[e[3]||(e[3]=l=>o.optionsStore.options.breadcrumbs.homepageLabel=i.sanitizeString(l)),e[4]||(e[4]=l=>o.optionsStore.options.breadcrumbs.homepageLabel=l)]},null,8,["modelValue"])])]),h("div",Ae,b(s.strings.homepageDescription),1)]),_:1},8,["name"]),n(p,{name:s.strings.breadcrumbPrefix},{content:c(()=>[n(O,{modelValue:i.sanitizeString(o.optionsStore.options.breadcrumbs.breadcrumbPrefix),"onUpdate:modelValue":e[5]||(e[5]=l=>o.optionsStore.options.breadcrumbs.breadcrumbPrefix=i.sanitizeString(l)),size:"medium"},null,8,["modelValue"]),h("div",Re,b(s.strings.breadcrumbPrefixDescription),1)]),_:1},8,["name"]),0<o.rootStore.aioseo.data.staticBlogPage?(m(),w(p,{key:0,name:s.strings.showBlogHome},{content:c(()=>[n(R,{modelValue:o.optionsStore.options.breadcrumbs.showBlogHome,"onUpdate:modelValue":e[6]||(e[6]=l=>o.optionsStore.options.breadcrumbs.showBlogHome=l),name:"showBlogHome",options:[{label:o.GLOBAL_STRINGS.off,value:!1,activeClass:"dark"},{label:o.GLOBAL_STRINGS.on,value:!0}]},null,8,["modelValue","options"])]),_:1},8,["name"])):S("",!0),n(p,{name:s.strings.archiveFormat},{content:c(()=>[n(F,{modelValue:i.sanitizeString(o.optionsStore.options.breadcrumbs.archiveFormat),"onUpdate:modelValue":e[7]||(e[7]=l=>o.optionsStore.options.breadcrumbs.archiveFormat=i.sanitizeString(l)),"line-numbers":!1,single:"",checkUnfilteredHtml:"","tags-context":"breadcrumbs-format-archive","minimum-line-numbers":3,showAllTagsLink:!1,"default-tags":["breadcrumb_archive_post_type_name"],tagsDescription:""},null,8,["modelValue"]),h("div",Oe,b(s.strings.archiveFormatDescription),1)]),_:1},8,["name"]),n(p,{name:s.strings.searchResultFormat},{content:c(()=>[n(F,{modelValue:i.sanitizeString(o.optionsStore.options.breadcrumbs.searchResultFormat),"onUpdate:modelValue":e[8]||(e[8]=l=>o.optionsStore.options.breadcrumbs.searchResultFormat=i.sanitizeString(l)),"line-numbers":!1,single:"",checkUnfilteredHtml:"","tags-context":"breadcrumbs-format-search","minimum-line-numbers":3,showAllTagsLink:!1,"default-tags":["breadcrumb_search_string"],tagsDescription:""},null,8,["modelValue"]),h("div",Ee,b(s.strings.searchResultFormatDescription),1)]),_:1},8,["name"]),n(p,{name:s.strings.errorFormat404},{content:c(()=>[n(F,{modelValue:i.sanitizeString(o.optionsStore.options.breadcrumbs.errorFormat404),"onUpdate:modelValue":e[9]||(e[9]=l=>o.optionsStore.options.breadcrumbs.errorFormat404=i.sanitizeString(l)),"line-numbers":!1,allowTags:!1,disableEmoji:!1,single:"",checkUnfilteredHtml:"","minimum-line-numbers":3,showAllTagsLink:!1,tagsDescription:""},null,8,["modelValue"]),h("div",Ue,b(s.strings.errorFormat404Description),1)]),_:1},8,["name"]),n(p,{name:s.strings.currentItem},{content:c(()=>[h("div",Ge,[n(g,{modelValue:o.optionsStore.options.breadcrumbs.showCurrentItem,"onUpdate:modelValue":e[10]||(e[10]=l=>o.optionsStore.options.breadcrumbs.showCurrentItem=l),class:"current-item"},null,8,["modelValue"]),v(" "+b(s.strings.showCurrentItem),1)]),o.optionsStore.options.breadcrumbs.showCurrentItem?(m(),f("div",ze,[n(g,{modelValue:o.optionsStore.options.breadcrumbs.linkCurrentItem,"onUpdate:modelValue":e[11]||(e[11]=l=>o.optionsStore.options.breadcrumbs.linkCurrentItem=l),class:"current-item"},null,8,["modelValue"]),v(" "+b(s.strings.linkCurrentItem),1)])):S("",!0)]),_:1},8,["name"])]),_:1},8,["header-text"])):S("",!0),o.licenseStore.isUnlicensed?(m(),w(N,{key:1})):S("",!0),!o.licenseStore.isUnlicensed&&(!i.hasDeprecatedEnable||i.isDeprecatedEnable)?(m(),w(W,{key:2})):S("",!0)])}const yr=H(Be,[["render",Me]]);export{yr as default};
