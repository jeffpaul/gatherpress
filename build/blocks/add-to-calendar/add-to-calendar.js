(()=>{"use strict";var e={n:t=>{var n=t&&t.__esModule?()=>t.default:()=>t;return e.d(n,{a:n}),n},d:(t,n)=>{for(var l in n)e.o(n,l)&&!e.o(t,l)&&Object.defineProperty(t,l,{enumerable:!0,get:n[l]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=window.wp.domReady,n=e=>{e.preventDefault();const t=e.target.nextElementSibling.style.display,n=document.querySelectorAll(".gp-add-to-calendar__list");for(let e=0;e<n.length;e++)n[e].style.display="none";e.target.nextElementSibling.style.display="none"===t?"flex":"none"};e.n(t)()((()=>{(()=>{const e=document.querySelectorAll(".gp-add-to-calendar");for(let t=0;t<e.length;t++)e[t].querySelector(".gp-add-to-calendar__init").addEventListener("click",n,!1),document.addEventListener("click",(({target:n})=>{n.closest(".gp-add-to-calendar")||(e[t].querySelector(".gp-add-to-calendar__list").style.display="none")})),document.addEventListener("keydown",(({key:n})=>{"Escape"===n&&(e[t].querySelector(".gp-add-to-calendar__list").style.display="none")}))})()}))})();