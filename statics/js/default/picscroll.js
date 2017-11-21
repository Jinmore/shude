jsweb8_cn_left2.innerHTML=jsweb8_cn_left1.innerHTML
function Marquee3(){
if(jsweb8_cn_left2.offsetWidth-jsweb8_cn_left.scrollLeft<=0)
jsweb8_cn_left.scrollLeft-=jsweb8_cn_left1.offsetWidth
else{
jsweb8_cn_left.scrollLeft++
}
}
var MyMar3=setInterval(Marquee3,50)
jsweb8_cn_left.onmouseover=function() {clearInterval(MyMar3)}
jsweb8_cn_left.onmouseout=function() {MyMar3=setInterval(Marquee3,50)}
