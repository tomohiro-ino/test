document.write("問1<br>");
for(var i = 0; i<25; i++){
if(i % 5==0)
document.write("<br>");
if(i % 2==0){
document.write("★");
}else{ document.write("☆");}
}
document.write("<br>");
document.write("<br>");

document.write("問2<br>");
for(var i = 0; i<25; i++){
if(i % 5==0)
document.write("<br>");
if(i % 6==0){
document.write("☆");
}else{ document.write("★");}
}
document.write("<br>");
document.write("<br>");

document.write("問3<br>");

for(var i = 0; i<6; i++){
for(var a = 0; a<i; a++)
if( i % a ==1){
document.write("☆")
}else{	
document.write("★");
}
document.write("<br>");
}
