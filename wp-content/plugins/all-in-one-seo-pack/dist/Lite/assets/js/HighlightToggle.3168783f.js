import{B as l}from"./Checkbox.6db0b9ed.js";import{B as s}from"./Radio.7b47f2fa.js";import{_ as i}from"./_plugin-vue_export-helper.eefbdd86.js";import{o as r,c as u,k as c,l as m,m as g,q as d,G as f}from"./runtime-dom.esm-bundler.5c3c7d72.js";const p={components:{BaseCheckbox:l,BaseRadio:s},props:{type:{type:String,required:!0},name:{type:String,required:!0},modelValue:{type:[Boolean,String,Event],required:!0},active:Boolean,size:String,round:Boolean},methods:{toggleCheckbox(){this.$refs.toggle.labelToggle()}}};function _(n,o,e,y,B,a){return r(),u("div",{class:f(["aioseo-highlight-toggle",[{active:e.active},{[e.size]:e.size}]]),onClick:o[1]||(o[1]=(...t)=>a.toggleCheckbox&&a.toggleCheckbox(...t))},[(r(),c(d(`base-${e.type}`),{ref:"toggle",name:e.name,modelValue:e.modelValue,size:e.size,round:e.round,"onUpdate:modelValue":o[0]||(o[0]=t=>n.$emit("update:modelValue",t))},{default:m(()=>[g(n.$slots,"default")]),_:3},8,["name","modelValue","size","round"]))],2)}const z=i(p,[["render",_]]);export{z as B};
