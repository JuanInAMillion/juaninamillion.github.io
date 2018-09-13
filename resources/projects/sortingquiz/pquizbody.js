
function randOrd()
{
return (Math.round(Math.random())-0.5); 
}
 
 
 
function displayResult(aa,bb,cc,dd,ee,ff) 
{
var mx = Math.max(aa,bb,cc,dd,ee,ff); 
var res = []; if (aa == mx) res.push('a'); 
if (bb == mx) res.push('b'); 
if (cc == mx) res.push('c'); 
if (dd == mx) res.push('d'); 
if (ee == mx) res.push('e'); 
if (ff == mx) res.push('f'); 
var ch = res[Math.floor(Math.random()*res.length)]; 
resPage = resPage + ch + '.html'; 
document.write('<div style="font-size:24px;"><b>The Sorting Hat Has Decided<\/b><\/div><blockquote><span style="font-size:12px;"> <br \/><img src="background/Sorting-Hat-icon.png"/> <br \/> <br \/> <br \/><\/span><\/blockquote><div><a href="'+resPage+'">You Belong To...</a><\/div>');
}


var qsParm = new Array(); 

function qs() 
{ 
var query = window.location.search.substring(1); 
var parms = query.split('&'); 
for (var i=0; i<parms.length; i++) {
var pos = parms[i].indexOf('='); 
if (pos > 0) {
var key = parms[i].substring(0,pos); 
var val = parms[i].substring(pos+1); qsParm[key] = val;}}
}
qsParm['questnum'] = 0; qsParm['aa'] = 0; qsParm['bb'] = 0; qsParm['cc'] = 0; qsParm['dd'] = 0; qsParm['ee'] = 0; qsParm['ff'] = 0; qs(); var questnum = qsParm['questnum']; var aa = qsParm['aa'];aa=aa%475; var bb = qsParm['bb'];bb=bb%475; var cc = qsParm['cc'];cc=cc%475; var dd = qsParm['dd'];dd=dd%475; var ee = qsParm['ee'];ee=ee%475; var ff = qsParm['ff'];ff=ff%475;




function checkAnswer(e,x)
{
var a = -1; 
for (var i=0; i<e.c.length; i++) {
if (e.c[i].checked) {a = i;}} 
if (a == -1) { 
alert("You must select an answer");
return false;
} 



switch(e.c[a].value) { 
case '0': aa++; break; 
case '1': bb++; break; 
case '2': cc++; break; 
case '3': dd++; break; 
case '4': ee++; break; 
case '5': ff++; break;} 
var www = self.location.href.lastIndexOf('?'); 
var thispage = self.location.href; 
if (www != -1) thispage = self.location.href.substr(0,www); questnum++; 
var p = Math.floor((Math.random() * 8) + 2); aa = (p * 475) +aa; p = Math.floor((Math.random() * 8) + 2); bb = (p * 475) +bb; p = Math.floor((Math.random() * 8) + 2); cc = (p * 475) +cc; p = Math.floor((Math.random() * 8) + 2); dd = (p * 475) +dd; p = Math.floor((Math.random() * 8) + 2); ee = (p * 475) +ee; p = Math.floor((Math.random() * 8) + 2); ff = (p * 475) +ff; top.location = thispage + '?questnum='+ questnum +'&aa='+aa+'&bb='+bb+'&cc='+cc+'&dd='+dd+'&ee='+ee+'&ff='+ff; return false;}
var tblsz = quiz.length; 

document.write('<table align="center" cellpadding="3" width="350" border="1" style="background-color:#feebd2;"><tr>'); 
if (questnum < quiz.length) { 
var f = quiz[questnum].split('~'); 
var ans = []; 
document.write('<td align="left"><form name="myForm"><div style="font-size:20px;">Question: '+f[0]+'</div><blockquote><span style="font-size:16px;">\n'); ans[0] = '<input type="radio" name="c" value="0" \/> '+f[1]+'<br \/>\n'; ans[1] = '<input type="radio" name="c" value="1" \/> '+f[2]+'<br />\n'; if (f[3] != '') ans[2] = '<input type="radio" name="c" value="2" \/> '+f[3]+'<br />\n'; if (f[4] != '') ans[3] = '<input type="radio" name="c" value="3" \/> '+f[4]+'<br />\n'; if (f[5] != '') ans[4] = '<input type="radio" name="c" value="4" \/> '+f[5]+'<br />\n'; if (f[6] != '') ans[5] = '<input type="radio" name="c" value="5" \/> '+f[6]+'<br />\n'; ans.sort( randOrd ); document.write(ans.join('')); document.write('<\/span><\/blockquote><div align="right"><input type="button" value="Next Question" onclick="checkAnswer(myForm,0);return false;" \/><\/div><\/form>\n');} 
else {
document.write('<td align="center">\n'); 
document.write('<form name="myForm">'); displayResult(aa,bb,cc,dd,ee,ff); 
document.write('<\/form>\n');} 
document.write('<\/td><\/tr><\/table>\n');



