const niffler=document.getElementById("niffler-container");
const treasure = document.getElementById("treasure-container");


function nifflerPosition(direction, justify,align)
{
    niffler.style.flexDirection=direction;
    niffler.style.justifyContent = justify;
    niffler.style.alignItems=align;
}

function treasurePosition(direction,justify,align)
{
    treasure.style.flexDirection=direction;
    treasure.style.justifyContent=justify;
    treasure.style.alignItems=align;
}

function check(ans1,ans2,next,btnName)
{

    console.log("correct");
    const input1=document.getElementById('in_1').value;
    const input2 = document.getElementById('in_2').value;
    if(input1==ans1 && input2==ans2)
{
   
  document.getElementById(btnName).style.display="block";
    document.getElementById(next).style.display="inline-block";
    document.getElementById(btnName).onclick=function(){
        window.location.href="updateTable.php";}
}

}

var lvl= document.getElementById('currentLevel').getAttribute('lvl');
console.log("Level is =" + lvl);


if(lvl==1)
{
nifflerPosition('row','flex-start','flex-start');
treasurePosition('row','flex-end','flex-start');
document.getElementById('codingArea').onmouseover=function(){

    const input1=document.getElementById('in_1').value;
    const input2 = document.getElementById('in_2').value;

    if (input1 != '' && input2!= '')
    niffler.style.justifyContent = input2;
check('flex','flex-end','level2','nextLevel1');
}

}
else if(lvl==2)
{

    nifflerPosition('row','center','flex-start');
    treasurePosition('row','space-between','center');
    document.getElementById('codingArea').onmouseover=function(){
        const input1=document.getElementById('in_1').value;
        const input2 = document.getElementById('in_2').value;

        if (input1 != '')
        niffler.style.justifyContent = input1;
        if(input2 != '')
        niffler.style.alignItems=input2;
    check('space-between','center','level3','nextLevel2');
    }
}
else if(lvl==3)
{
    nifflerPosition('row','center','flex-start');
    treasurePosition('column','space-between','flex-start');
    document.getElementById('codingArea').onmouseover=function(){
        const input1=document.getElementById('in_1').value;
        const input2 = document.getElementById('in_2').value;
if (input1 != '')
        niffler.style.flexDirection = input1;
        if(input2 != '')
        niffler.style.justifyContent=input2;
    check('space-between','column','level3','nextLevel3');
    }
}