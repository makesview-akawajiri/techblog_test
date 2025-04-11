import"./translations.d159963e.js";import{u as m,l as s}from"./index.7377ee90.js";import{u as d}from"./AnalyzerStore.5ef6efc0.js";import{g,f as a}from"./runtime-dom.esm-bundler.5c3c7d72.js";import{s as n,_ as e}from"./default-i18n.20001971.js";const t="all-in-one-seo-pack",h=(i={})=>{const{score:r=g(0)}=i,c=d(),u=m(),o={weveGotWorkToDo:n(e("We've got some%1$swork to do!",t),"<br>"),needsImprovement:n(e("Needs%1$sImprovement!",t),"<br>"),veryGood:e("Very Good!",t),excellent:e("Excellent!",t),toSeeYourSiteScore:e("to see your Site Score.",t),toAnalyzeCompetitorSite:e("to analyze a competitor site.",t),enterLicenseKey:e("A valid license key is required",t),anErrorOccurred:e("An error occurred while analyzing your site.",t),criticalIssues:e("Important Issues",t),warnings:e("Warnings",t),recommendedImprovements:e("Recommended Improvements",t),goodResults:e("Good Results",t),completeSiteAuditChecklist:e("Complete Site Audit Checklist",t)},l=a(()=>{if(u.aioseo.data.isLocal)return{description:e("It looks like you are accessing our analyzer from a local install. Our SEO analyzer does not work on local installs because we are unable to access it. Please try again once the site has been published.",t),buttons:[{text:e("Learn More",t),type:"blue",tag:"a",url:s.getDocUrl("seoAnalyzer")}]};switch(c.analyzeError){case"invalid-token":return{description:n(e("Your site is currently not connected to %1$s. In order to analyze your site, you must first connect to our server. Please connect to %1$s and try again.",t),"AIOSEO"),buttons:[{text:e("Connect to AIOSEO",t),type:"blue"}]};case"invalid-html":case"missing-content":case"outbound-request-failed":return{description:n(e("We are unable to retrieve the content for your site. This could be due to a number of reasons, but most likely the connection timed out while our analyzer was trying to access it. Please try again soon.",t),"AIOSEO"),buttons:[{text:e("Try Again",t),type:"blue",runAgain:!0},{text:e("Learn More",t),type:"gray",tag:"a",url:s.getDocUrl("seoAnalyzer")}]};default:return{description:e("The SEO analysis failed due to an unknown error. Please wait a moment and try again. If the issue continues to occur, then please contact our support team.",t),buttons:[{text:e("Learn More",t),type:"blue",tag:"a",url:s.getDocUrl("seoAnalyzer")}]}}}),p=n(e("Connect with %1$s",t),"AIOSEO"),y=a(()=>25>=r.value?o.weveGotWorkToDo:50>=r.value?o.needsImprovement:75>=r.value?o.veryGood:o.excellent);return{connectWithAioseo:p,description:y,errorObject:l,strings:o}};export{h as u};
