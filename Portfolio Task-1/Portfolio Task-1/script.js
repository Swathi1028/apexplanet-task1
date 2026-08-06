// Typing Effect

const text = [
"Web Developer",
"PHP Developer",
"Frontend Learner"
];

let index = 0;
let char = 0;

function type(){

if(char < text[index].length){

document.getElementById("typing").innerHTML += text[index].charAt(char);

char++;

setTimeout(type,100);

}

else{

setTimeout(erase,1000);

}

}

function erase(){

if(char>0){

document.getElementById("typing").innerHTML=text[index].substring(0,char-1);

char--;

setTimeout(erase,50);

}

else{

index++;

if(index>=text.length)
index=0;

setTimeout(type,300);

}

}

type();

// Dark Mode

const btn=document.getElementById("themeBtn");

btn.onclick=function(){

document.body.classList.toggle("dark");

}

// Fade Animation

const sections=document.querySelectorAll("section");

window.addEventListener("scroll",()=>{

sections.forEach(sec=>{

const top=window.scrollY;

if(top+500>sec.offsetTop){

sec.style.opacity="1";

sec.style.transform="translateY(0)";

}

});

});

sections.forEach(sec=>{

sec.style.opacity="0";

sec.style.transform="translateY(50px)";
sec.style.transition=".6s";

});