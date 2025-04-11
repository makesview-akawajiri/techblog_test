import E from"./AboutUs.9ffb37bf.js";import{C as T}from"./Index.c3566421.js";import O from"./GettingStarted.113a34cf.js";import{D as w}from"./constants.1ec71a84.js";import{l as N}from"./index.a87126ce.js";import{C as L,c as x,S as I}from"./Caret.d9cc70ba.js";import"./translations.d159963e.js";import{_ as v}from"./_plugin-vue_export-helper.eefbdd86.js";import{s as a,_ as t}from"./default-i18n.20001971.js";import{v as c,o as n,c as l,a as o,t as s,C as p,l as m,x as u,F as $,J as M,b as _,k as h,q as B}from"./runtime-dom.esm-bundler.5c3c7d72.js";import"./helpers.53868b98.js";import"./em.7625294c.js";import"./Row.df38a5f6.js";import"./External.c9d4f255.js";import"./vue-router.2f910c93.js";import"./license.d747bfcd.js";import"./upperFirst.2cd99bdd.js";import"./_stringToArray.f9ddb970.js";import"./toString.f0787db8.js";import"./allowed.ab723907.js";/* empty css             */import"./params.af7ed354.js";import"./Tabs.7c14121d.js";import"./ProBadge.751e0b85.js";import"./Information.13e8cece.js";import"./Slide.39c07c03.js";import"./Header.328e2f25.js";import"./addons.dc226733.js";import"./LicenseKeyBar.669e450f.js";import"./ScrollTo.81bea8a7.js";import"./LogoGear.cb664d3b.js";import"./AnimatedNumber.f1ad3fb5.js";import"./numbers.9fc174f3.js";import"./Logo.6c9d2b19.js";import"./index.1f3cb1fa.js";import"./Support.e867db75.js";import"./date.6089ddf7.js";import"./datetime.f197aeae.js";import"./Url.e5c2ac01.js";import"./Exclamation.22e53a8b.js";import"./Gear.bd4e1565.js";import"./news-sitemap.3092e2bf.js";import"./GettingStarted.1c2b31f2.js";import"./Book.74a13fcd.js";import"./Rocket.50a36aac.js";import"./Index.ac5cec7c.js";const e="all-in-one-seo-pack",R={components:{CoreAlert:L,SvgCircleCheck:x,SvgClose:I},data(){return{links:N,strings:{header:{title:a(t("%1$s Lite vs. Pro",e),"AIOSEO"),description:a(t("Get the most out of %1$s by upgrading to Pro and unlocking all of the powerful features.",e),"All in One SEO")},grid:{features:t("Features:",e)},cta:{title:t("Upgrade to Pro to Unlock Powerful SEO Features",e),description:a(t("%1$s is the best WordPress SEO plugin. Join over %2$s Professionals who are already using %3$s to improve their website search rankings.",e),"All in One SEO","3,000,000+","AIOSEO"),button:a(t("Upgrade to %1$s Today",e),"Pro"),bonus:a(t("%1$sBonus:%2$s You can upgrade to the %3$s plan today and %4$ssave %5$s off%6$s (discount auto-applied).",e),"<strong>","</strong>","Pro","<strong>",w,"</strong>")}},features:{seo:{name:t("Search Engine Optimization (SEO)",e),lite:{title:t("Limited Support",e),description:t("Posts, Pages and custom Post Types only",e)},pro:{title:t("Complete Support",e),description:t("Posts, Pages, custom Post Types + Categories, Tags and custom Taxonomies",e)}},socialMeta:{name:t("Social Meta (Open Graph Markup)",e),lite:{title:t("Limited Support",e),description:t("Posts, Pages and custom Post Types only",e)},pro:{title:t("Complete Support",e),description:t("Posts, Pages, custom Post Types + Categories, Tags and custom Taxonomies",e)}},searchStatistics:{name:t("Google Search Console Integration",e),lite:{title:t("Not Available",e)},pro:{title:t("Included as Pro Feature",e),description:t("Connect with Google Search Console to track how your site is performing in search rankings and generate reports with actionable insights that help you get the most out of your content. (Elite plan only)",e)}},openai:{name:t("Open AI Integration",e),lite:{title:t("Not Available",e)},pro:{title:t("Included as Pro Feature",e),description:t("Use the power of ChatGPT to generate engaging SEO titles and meta descriptions for your posts.",e)}},wooCommerce:{name:t("WooCommerce Integration",e),lite:{title:t("Limited Support",e),description:t("WooCommerce Products only",e)},pro:{title:t("Complete Support",e),description:t("WooCommerce Products, Product Categories, Product Tags, Product Attributes + WooCommerce smart tags (price, brand, etc.)",e)}},schema:{name:t("Schema Rich Snippets",e),lite:{title:t("Limited Support",e),description:t("Posts, Pages, Categories and Tags only",e)},pro:{title:t("Complete Support",e),description:t("Posts, Pages, Categories, Tags + Breadcrumb Navigation + advanced graphs (Product, FAQ Page, Recipe, etc.)",e)}},breadcrumbs:{name:t("Visual Breadcrumb Trails",e),lite:{title:t("Limited Support",e),description:t("Default template for all pages.",e)},pro:{title:t("Complete Support",e),description:t("Granular control over the template for each post type, taxonomy and archive.",e)}},sitemap:{name:t("XML Sitemap",e),lite:{title:t("Limited Support",e),description:t("Control the priority & frequency per Post Type/Taxonomy",e)},pro:{title:t("Complete Support",e),description:t("Control the priority & frequency of each Post, Page, Category, Tag, etc.",e)}},videoSitemap:{name:t("Video Sitemap",e),lite:{title:t("Not Available",e)},pro:{title:t("Available as Addon Plugin",e),description:t("Submit your videos to search engines (Pro & Elite plans only)",e)}},newsSitemap:{name:t("News Sitemap",e),lite:{title:t("Not Available",e)},pro:{title:t("Available as Addon Plugin",e),description:t("Submit your latest news stories to Google News (Pro & Elite plans only)",e)}},imageSeo:{name:t("Image SEO",e),lite:{title:t("Not Available",e)},pro:{title:t("Available as Addon Plugin",e),description:t("Control the title, alt tag, caption, description and filename of your images (Plus, Pro & Elite plans only)",e)}},localSeo:{name:t("Local SEO",e),lite:{title:t("Not Available",e)},pro:{title:t("Available as Addon Plugin",e),description:t("Local Business schema (multiple locations supported) + Business Info & Location blocks, widgets & shortcodes (Plus, Pro & Elite plans only)",e)}},redirectionManager:{name:t("Redirection Manager",e),lite:{title:t("Not Available",e)},pro:{title:t("Available as Addon Plugin",e),description:t("Create, manage and monitor redirects for 404's or modified posts + server redirects, full site redirects and site aliases (Pro & Elite plans only)",e)}},linkAssistant:{name:t("Link Assistant",e),lite:{title:t("Not Available",e)},pro:{title:t("Available as Addon Plugin",e),description:t("View detailed link & domain reports, manage existing links and discover new internal linking opportunities through smart suggestions (Pro & Elite plans only)",e)}},seoRevisions:{name:t("SEO Revisions",e),lite:{title:t("Not Available",e)},pro:{title:t("Included as Pro Feature",e),description:t("SEO Revisions provide a historical record of SEO updates, allowing you to monitor the effectiveness of your SEO efforts and make informed decisions. (Plus, Pro & Elite plans only)",e)}},restApi:{name:t("REST API",e),lite:{title:t("Not Available",e)},pro:{title:t("Available as Addon Plugin",e),description:t("Manage your post and term SEO meta via the WordPress REST API. This addon also works seamlessly with headless WordPress installs. (Plus, Pro & Elite plans only)",e)}},support:{name:t("Customer Support",e),lite:{title:t("Limited Support",e)},pro:{title:t("Priority Support",e)}}}}}},U={class:"aioseo-lite-vs-pro"},G={class:"aioseo-lite-vs-pro-header"},F={class:"header-title"},V={class:"header-text"},W={class:"aioseo-lite-vs-pro-grid"},D={class:"header"},q=o("div",{class:"header-lite"},"Lite",-1),H=o("div",{class:"header-pro"},"Pro",-1),J=o("hr",null,null,-1),z={class:"feature"},Q={class:"feature-title"},X={key:0},Y={class:"feature-title"},j={key:0},K=o("hr",null,null,-1),Z={class:"aioseo-lite-vs-pro-cta"},tt={class:"cta-title"},et={class:"cta-text"},ot=["innerHTML"];function it(g,f,P,y,i,S){const d=c("base-button"),b=c("svg-close"),A=c("svg-circle-check"),C=c("core-alert");return n(),l("div",U,[o("div",G,[o("div",null,[o("div",F,s(i.strings.header.title),1),o("div",V,s(i.strings.header.description),1)]),p(d,{type:"green",tag:"a",href:i.links.utmUrl("about-us-page","header-button"),target:"_blank"},{default:m(()=>[u(s(i.strings.cta.button),1)]),_:1},8,["href"])]),o("div",W,[o("div",D,[o("div",null,s(i.strings.grid.features),1),q,H]),J,o("div",null,[(n(!0),l($,null,M(i.features,(r,k)=>(n(),l("div",{key:k},[o("div",z,[o("div",null,s(r.name),1),p(b),o("div",null,[o("div",Q,s(r.lite.title),1),r.lite.description?(n(),l("div",X,s(r.lite.description),1)):_("",!0)]),p(A),o("div",null,[o("div",Y,s(r.pro.title),1),r.pro.description?(n(),l("div",j,s(r.pro.description),1)):_("",!0)])]),K]))),128))])]),o("div",Z,[o("div",tt,s(i.strings.cta.title),1),o("div",et,s(i.strings.cta.description),1),p(d,{type:"green",tag:"a",href:i.links.utmUrl("about-us-page","footer-button"),target:"_blank"},{default:m(()=>[u(s(i.strings.cta.button),1)]),_:1},8,["href"]),p(C,{class:"cta-text bonus-alert",type:"yellow"},{default:m(()=>[u(" 🎁 "),o("span",{innerHTML:i.strings.cta.bonus},null,8,ot)]),_:1})])])}const st=v(R,[["render",it]]),rt="all-in-one-seo-pack",nt={components:{AboutUs:E,CoreMain:T,GettingStarted:O,LiteVsPro:st},data(){return{strings:{pageName:t("About Us",rt)}}}};function at(g,f,P,y,i,S){const d=c("core-main");return n(),h(d,{"page-name":i.strings.pageName,showSaveButton:!1},{default:m(()=>[(n(),h(B(g.$route.name)))]),_:1},8,["page-name"])}const te=v(nt,[["render",at]]);export{te as default};
