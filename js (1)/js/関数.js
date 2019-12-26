document.write("問1<br>");

function menseki(hankei,ensyuuritu=3.14){
return"面積は"+hankei*hankei*3.14+"cm²です。";
}
document.write(menseki(5));
document.write("<br>");
document.write(menseki(7));
document.write("<br>");
document.write(menseki(10));
document.write("<br>");
document.write("<br>");

document.write("問2<br>");
function
totalprice(otona,kodomo){
return"合計金額は"+otona+"円です。";
}
document.write(totalprice(500*2+200*4));
document.write("<br>");
document.write(totalprice(500*1+200*5));
document.write("<br>");
document.write(totalprice(500*3+200*7));