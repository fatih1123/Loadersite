
<body text="16777215" bgcolor="#000000" onload="writetext()" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<script>      
window.scrollBy(0, 1)      
window.resizeTo(0,0)      
window.moveTo(0,0)                
//setInterval("move()",30);      
setTimeout("move()", 1);      
var mxm=100      
var mym=50    
var mx=0      
var my=0      
var sv=50      
var status=1      
var szx=0      
var szy=0      
var c=255      
var n=0      
var sm=30      
var cycle=2      
var done=2      
function move()      
    {      
    if (status == 1)      
        {      
        mxm=mxm/1.05      
        mym=mym/1.05      
        mx=mx+mxm      
        my=my-mym      
        mxm=mxm+(400-mx)/100      
        mym=mym-(300-my)/100      
        window.moveTo(mx,my)      
        rmxm=Math.round(mxm/10)      
        rmym=Math.round(mym/10)      
        if (rmxm == 0)      
            {      
            if (rmym == 0)      
                {      
                status=2      
                }      
            }      
        }      
    if (status == 2)      
        {      
        sv=sv/1.1      
        scrratio=1+1/3      
        mx=mx-sv*scrratio/2      
        my=my-sv/2      
        szx=szx+sv*scrratio      
        szy=szy+sv      
        window.moveTo(mx,my)      
        window.resizeTo(szx,szy)      
        if (sv < 0.1)      
            {      
            status=3      
            }      
        }      
    if (status == 3)      
        {      f
        document.fgColor=0xffffFF      
        c=c-16       
        if (c<0)      
            {status=8}      
        }      
    if (status == 4)      
        {      
        c=c+16      
        document.bgColor=c*65536      
        document.fgColor=(255-c)*65536      
        if (c > 239)      
            {status=5}      
        }      
    if (status == 5)      
        {      
        c=c-16      
        document.bgColor=c*65536      
        document.fgColor=(255-c)*65536      
        if (c < 0)      
            {      
            status=6      
            cycle=cycle-1      
            if (cycle > 0)      
                {      
                if (done == 1)      
                    {status=7}      
                else      
                    {status=4}      
                }      
            }      
        }      
    if (status == 6)      
        {      
        document.title = "INC Team"      
        alert("INC Team")      
        cycle=2      
        status=4      
        done=1      
        }      
    if (status == 7)      
        {      
        c=c+4      
        document.bgColor=c*65536      
        document.fgColor=(255-c)*65536      
        if (c > 128)      
            {status=8}      
        }      
    if (status == 8)      
        {      
        window.moveTo(0,0)      
        sx=screen.availWidth      
        sy=screen.availHeight      
        window.resizeTo(sx,sy)      
        status=9      
}      
    var timer=setTimeout("move()",0.3)      
    }      
</script>
 <center>
<script language="JavaScript">
        msg = new Array(); //strings written in screen
        msg[0] = "<font color='00ff00'><center><h2><u><center>..::--- [ VIP-SLMPT Maker Editions To My Condings ] ---::..</u></h2></center></font>";
        msg[1] = "<font color='00ff00'><center>************************************************************************************</center> </font><b";
        msg[2] = "   <br>";
        msg[3] = "<font color='00ff00'><center>VB.NET Coder By <a href='http://www.vip-salmputnet.ga/'><font Face='Harrington' color='Red'> <b>Fatih-Akcakaya</b></font></a></font>";
        msg[4] = "<font color='00ff00'><center><font face='Tahoma' color='Red'>VIP-SalmputNet Best HACK TEAM Site...</font></center></font>";
        msg[5] = "<font size = '5' color='00ff33' ><b><center> VIP-SalmputNet  </center></b></font>";
        msg[6] = "   <br>";
        
        msg[7] = "<font color='00ff00'><center>Designed By: CODERFATIH</center></font>";
        msg[8] = "<font color='00ff00'><center> >>>http://www.vip-salmputnet.ga/<<< </center></font>";


        text1  = "";    //the same as text2, only the last character is highlighted
        text2  = "";    //current string, which will be written
        count  = 0;        //char index in string text
        count2 = 0;    //number of strings

        text = msg[0].split(""); //text - string written

        function writetext() { //show strings above on screen
            text1 = text2 + "<font color='red>" + text[count] + "</font>";
            text2 += text[count];
            document.all["nothing"].innerHTML = text1; //where to write

            if (count < text.length-1){
                count++;
                setTimeout('writetext()', 25);
            }
            else { //if this string is written, get the new string
                count = 0;

                if (count2 != 8) {  //write 8 strings
                    count2++;
                    text2 += "<p>"; //a new line
                    text = eval('msg['+count2+'].split("")'); //get the new string to text
                    setTimeout('writetext()', 25);
                }
            }
        }
    </script>
<font style="FONT-SIZE: 4pt" face="Courier New">
</font><div align="center"><font style="FONT-SIZE: 4pt" face="Courier New">
<center><font class="pic2ascii"><br><font color="#000000">##1</font><font color="#808080">#</font><font color="#ffffff">0</font><font color="#808080">@</font><font color="#000000">0#0@101@0@0#@1@@#0#@</font><font color="#c0c0c0">1</font><font color="#000000">1@#1#</font><br><font color="#000000">01</font><font color="#808080">#</font><font color="#ffffff">0</font><font color="#808080">1</font><font color="#000000">0111@#1#@@###@#00##01@</font><font color="#808080">#</font><font color="#000000">000@</font><br><font color="#000000">01</font><font color="#ffffff">@</font><font color="#c0c0c0">0</font><font color="#000000">#01@#@</font><font color="#808080">0111@10#1@</font><font color="#000000">@0@010#</font><font color="#c0c0c0">0</font><font color="#000000">111#</font><br><font color="#000000">@</font><font color="#808080">#</font><font color="#ffffff">1</font><font color="#808080">1</font><font color="#000000">011@#</font><font color="#808080">#</font><font color="#c0c0c0">0@00@10</font><font color="#808080">0@#@</font><font color="#000000">@11110</font><font color="#c0c0c0">@</font><font color="#000000">@@00</font><br><font color="#000000">0</font><font color="#c0c0c0">0</font><font color="#ffffff">1</font><font color="#808080">@</font><font color="#000000">##1</font><font color="#808080">01</font><font color="#c0c0c0">1@</font><font color="#ffffff">1#1@</font><font color="#c0c0c0">@0#</font><font color="#808080">#@1</font><font color="#000000">1</font><font color="#c0c0c0">@</font><font color="#000000">10##</font><font color="#808080">@</font><font color="#000000">000@</font><br><font color="#000000">1</font><font color="#c0c0c0">@</font><font color="#ffffff">1</font><font color="#c0c0c0">0</font><font color="#808080">1</font><font color="#000000">@</font><font color="#808080">1</font><font color="#c0c0c0">0</font><font color="#808080">0</font><font color="#c0c0c0">#</font><font color="#ffffff">#@0#1@</font><font color="#c0c0c0">1#@</font><font color="#808080">@</font><font color="#000000">@</font><font color="#c0c0c0">#</font><font color="#808080">0</font><font color="#000000">1@</font><font color="#c0c0c0">10</font><font color="#808080">@</font><font color="#000000">@100</font><br><font color="#000000">0</font><font color="#808080">#</font><font color="#ffffff">1</font><font color="#c0c0c0">0</font><font color="#808080">@#</font><font color="#000000">@</font><font color="#808080">#</font><font color="#c0c0c0">##</font><font color="#ffffff">@#1@1@@</font><font color="#c0c0c0">@@</font><font color="#808080">@</font><font color="#000000">0</font><font color="#c0c0c0">0</font><font color="#000000">#</font><font color="#808080">0</font><font color="#c0c0c0">#@0</font><font color="#000000">110@0</font><br><font color="#000000">@0</font><font color="#c0c0c0">00</font><font color="#808080">@1</font><font color="#000000">@</font><font color="#808080">0</font><font color="#c0c0c0">01</font><font color="#ffffff">###@1##</font><font color="#c0c0c0">@0@</font><font color="#808080">#</font><font color="#c0c0c0">0</font><font color="#000000">#</font><font color="#c0c0c0">10@</font><font color="#808080">0</font><font color="#000000">01@11</font><br><font color="#000000">1#1</font><font color="#808080">1@</font><font color="#000000">#@</font><font color="#808080">1</font><font color="#c0c0c0">11</font><font color="#ffffff">11@0#1#</font><font color="#c0c0c0">@1@</font><font color="#808080">@1</font><font color="#000000">##</font><font color="#c0c0c0">#</font><font color="#808080">0</font><font color="#000000">@#</font><font color="#c0c0c0">1</font><font color="#000000">@00</font><br><font color="#000000">#@</font><font color="#808080">#</font><font color="#000000">#11</font><font color="#808080">00</font><font color="#c0c0c0">@#</font><font color="#ffffff">1#0##10</font><font color="#c0c0c0">0#0</font><font color="#808080">10</font><font color="#000000">1@@@0#</font><font color="#c0c0c0">0</font><font color="#000000">101</font><br><font color="#000000">#@0</font><font color="#808080">10#@</font><font color="#c0c0c0">@01#</font><font color="#ffffff">#100@@</font><font color="#c0c0c0">##0</font><font color="#808080">###</font><font color="#000000">11#0@#001</font><br><font color="#000000">#0</font><font color="#c0c0c0">0</font><font color="#000000">#</font><font color="#808080">0</font><font color="#c0c0c0">00#</font><font color="#ffffff">1</font><font color="#c0c0c0">0</font><font color="#808080">@</font><font color="#c0c0c0">#</font><font color="#ffffff">@0@#</font><font color="#c0c0c0">00@</font><font color="#808080">#0</font><font color="#000000">##@@#@</font><font color="#c0c0c0">#</font><font color="#000000">@1#0</font><br><font color="#000000">#0</font><font color="#c0c0c0">0</font><font color="#000000">#</font><font color="#808080">1</font><font color="#c0c0c0">@#</font><font color="#ffffff">1@</font><font color="#c0c0c0">@</font><font color="#808080">@</font><font color="#c0c0c0">@0</font><font color="#ffffff">##1</font><font color="#c0c0c0">@1</font><font color="#808080">#@</font><font color="#c0c0c0">#0#</font><font color="#808080">0</font><font color="#000000">1##00#@@</font><br><font color="#000000">#11#</font><font color="#808080">0</font><font color="#c0c0c0">@</font><font color="#ffffff">0#1@</font><font color="#c0c0c0">1</font><font color="#808080">1</font><font color="#c0c0c0">@11#@</font><font color="#808080">#0</font><font color="#c0c0c0">11@1@</font><font color="#808080">0</font><font color="#000000">10#0000</font><br><font color="#000000">1@@#0</font><font color="#ffffff">#</font><font color="#c0c0c0">#</font><font color="#808080">0@</font><font color="#c0c0c0">##011@1#</font><font color="#808080">#</font><font color="#c0c0c0">##0</font><font color="#808080">@01@0</font><font color="#000000">0011#0</font><br><font color="#000000">1#</font><font color="#808080">@</font><font color="#000000">##</font><font color="#c0c0c0">@</font><font color="#808080">#</font><font color="#000000">1#0#</font><font color="#c0c0c0">#</font><font color="#808080">1#</font><font color="#c0c0c0">@#</font><font color="#000000">@</font><font color="#c0c0c0">0#1</font><font color="#808080">0</font><font color="#000000">@1@@#1#0@@0</font><br><font color="#000000">1#</font><font color="#808080">00</font><font color="#000000">1</font><font color="#808080">1</font><font color="#000000">0</font><font color="#ff0000">1#0</font><font color="#000000">#@</font><font color="#808080">10</font><font color="#000000">@</font><font color="#808080">@</font><font color="#000000">#</font><font color="#c0c0c0">0</font><font color="#808080">0</font><font color="#000000">11</font><font color="#ff0000">1##</font><font color="#000000">0@@#0#@1</font><br><font color="#000000">11</font><font color="#808080">1</font><font color="#c0c0c0">0</font><font color="#808080">00</font><font color="#000000">@</font><font color="#ff0000">0@01</font><font color="#000000">0@1@0@</font><font color="#808080">@</font><font color="#000000">10</font><font color="#ff0000">0111</font><font color="#000000">##@0@#0@</font><br><font color="#000000">#0</font><font color="#808080">1</font><font color="#ffffff">@</font><font color="#c0c0c0">@</font><font color="#808080">0</font><font color="#000000">11</font><font color="#ff0000">11#</font><font color="#000000">1##@0@#@1</font><font color="#ff0000">###</font><font color="#000000">@0#</font><font color="#808080">@</font><font color="#000000">00@#@</font><br><font color="#000000">@@0</font><font color="#c0c0c0">1</font><font color="#ffffff">#</font><font color="#c0c0c0">0@</font><font color="#000000">1@0@@##1</font><font color="#808080">@#</font><font color="#000000">@@@@1</font><font color="#808080">@#00</font><font color="#000000">@00@01</font><br><font color="#000000">10@</font><font color="#c0c0c0">##</font><font color="#ffffff">1@0@</font><font color="#c0c0c0">0</font><font color="#808080">#@</font><font color="#000000">@#</font><font color="#c0c0c0">0</font><font color="#ffffff">#</font><font color="#c0c0c0">@</font><font color="#808080">1</font><font color="#000000">#0</font><font color="#808080">1010#</font><font color="#000000">0101@0#</font><br><font color="#000000">0@01</font><font color="#808080">100</font><font color="#c0c0c0">111</font><font color="#808080">@0#@</font><font color="#ffffff">01</font><font color="#808080">@</font><font color="#c0c0c0">#</font><font color="#808080">1</font><font color="#000000">#10@#0@#0##@@</font><br><font color="#000000">0100#0</font><font color="#808080">110@@</font><font color="#c0c0c0">1</font><font color="#808080">#</font><font color="#c0c0c0">@</font><font color="#ffffff">0</font><font color="#808080">#</font><font color="#000000">@</font><font color="#808080">01</font><font color="#000000">#1@#000@101@0</font><br><font color="#000000">01@1@1#@01</font><font color="#808080">@</font><font color="#c0c0c0">110#</font><font color="#000000">@11</font><font color="#808080">0</font><font color="#000000">@1@0@#000@#0#</font><br><font color="#000000">##@0##1@@#</font><font color="#808080">#</font><font color="#ffffff">1</font><font color="#c0c0c0">0@@</font><font color="#000000">0@#</font><font color="#808080">#</font><font color="#000000">0110@#001@10#</font><br><font color="#000000">#01@00@#@@</font><font color="#808080">@</font><font color="#ffffff">1@#</font><font color="#c0c0c0">0</font><font color="#000000">#</font><font color="#ffffff">0</font><font color="#000000">1</font><font color="#808080">0</font><font color="#000000">01@</font><font color="#808080">1</font><font color="#000000">10@01@##0</font><br><font color="#000000">@##11010</font><font color="#808080">1</font><font color="#000000">@</font><font color="#c0c0c0">0@#</font><font color="#ffffff">@#</font><font color="#c0c0c0">1</font><font color="#ffffff">1</font><font color="#c0c0c0">@0</font><font color="#000000">@</font><font color="#808080">1</font><font color="#000000">@</font><font color="#808080">@</font><font color="#000000">#@101#0#1</font><br><font color="#000000">11@@#1@@</font><font color="#808080">1</font><font color="#000000">#</font><font color="#c0c0c0">#@1</font><font color="#808080">@</font><font color="#c0c0c0">#</font><font color="#ffffff">@</font><font color="#c0c0c0">1</font><font color="#ffffff">@</font><font color="#c0c0c0">@0</font><font color="#808080">1</font><font color="#000000">#1#11111@00</font><br><font color="#000000">10#@1001@@</font><font color="#c0c0c0">#</font><font color="#ffffff">1</font><font color="#808080">#</font><font color="#c0c0c0">0#@1</font><font color="#ffffff">0</font><font color="#c0c0c0">#1</font><font color="#808080">#</font><font color="#000000">11@101##011</font><br><font color="#000000">@#@01@0#0#</font><font color="#808080">1</font><font color="#c0c0c0">@</font><font color="#000000">1</font><font color="#c0c0c0">0</font><font color="#ffffff">#</font><font color="#c0c0c0">@</font><font color="#808080">1</font><font color="#ffffff">@</font><font color="#c0c0c0">#</font><font color="#808080">0</font><font color="#000000">@@@@00100@11</font><br><font color="#000000">@@0#@#1@0#10@</font><font color="#808080">@</font><font color="#c0c0c0">0#</font><font color="#000000">1</font><font color="#c0c0c0">@</font><font color="#808080">0</font><font color="#000000">##11111#010@0</font><br><font color="#000000">1@#0#1@010@#011@1@#@0000101@#0@0</font></font></center></font></div>

<center><span style="FONT-WEIGHT: 200"></span></center>
<div id="nothing" style="FONT-WEIGHT: bold; WIDTH: 800px; FONT-FAMILY: &#39;courier new&#39;; HEIGHT: 540px"><font color="00ff00"><center><h2><u></u><center><u>..::--- Hacked By OnuncuTorun ---::..</u></center></h2></center></font><p><font color="00ff00"></font></p><center><font color="00ff00">************************************************************************************</font></center><font color="00ff00"> </font><b<p>   <br><p><font color="00ff00"></font></p><center><font color="00ff00">Website Has Been Hacker By <a href="http://demo.onuncutorun.com/hack/mailto"><font face="Harrington" color="Red"> <b>OnuncuTorun</b></font></a></font><p><font color="00ff00"></font></p><center><font color="00ff00"><font face="Tahoma" color="Red">OnuncuTorun Say's: Admin A��klar� Kapat...</font></font></center><p><font size="5" color="00ff33"><b></b></font></p><center><font size="5" color="00ff33"><b> OnuncuTorun Was Here  </b></font></center><p>   <br></p><p><font color="00ff00"></font></p><center><font color="00ff00">Designed By: OnuncuTorun<!--<font color='red-->c</font></center></center></b<p></div><table align="center">
  
  <tbody></tbody></table>
<script language="JavaScript"> 
        if (document.all){
            Cols = 9;            //number of falldown binary string
            Cl   = 50;            //maximum length of binary string
            Cs   = 100;            //number of pixels between binary strings
            Ts   = 10;            //font-size of binary string
            Tc   = '#008800';    //color of binary string
            Tc1  = '#00ff00';    //color of 1st bit in binary string
            MnS  = 22;            //minimum speed of binary string
            MxS  = 25;            //maximum spees of binary string
            I    = Cs;

            Sp  = new Array();                        //array speed of binary strings
            S   = new Array();                      //the position of binary string
            Y   = new Array();                        //array of position of binary strings
            C   = new Array();                        //array save bits of string
            M   = new Array();                      //binary string
            B   = new Array();                        //temp for creating binary string
            RC  = new Array();                        //length of binary strings
            E   = new Array();                        //array of head-bit in written strings
            Tcc = new Array(0,1,2,3,4,5,6,7,8,9);    //array of head-bit in binary strings

            document.write("<div id='Container' style='position:absolute; top:0; left:-"+Cs+"'>");

            for (i=0; i < Cols; i++){    //area to show binary strings
                S[i] = I += Cs;            //calculate the position of binary string
                document.write("<div id='A' style='position:absolute; top:0; font-family:Arial;" +
                                "font-size:" + Ts + "px; left:" + S[i] + "; width:" + Ts + "px;" +
                                "height:0px; color:" + Tc + "; visibility:hidden'></div>");
            }
            document.write("</div>");
        }

        for(j = 0; j < Cols; j++){
            RC[j] = 1 + Math.round(Math.random()*Cl);    //random length of the binary strings
            for(i=0; i < RC[j]; i++){
                B[i] = "";                                //sign of ending of string
                C[i] = Math.round(Math.random())+' ';    //get bit in binary strings
                B[0] += C[i];
            }
            M[j] = B[0];                                //binary string
            Y[j] = 0;                                     //1st position of strings are 0
            Sp[j] = Math.round(MnS+Math.random()*MxS);    //random speed of binary strings
        }

        function Cycle(){
            Container.style.top = window.document.body.scrollTop;
            for (i=0; i < Cols; i++){
                var r = Math.floor(Math.random()*Tcc.length);        //get a position in table Tcc
                E[i] = '<font color='+Tc1+'>'+Tcc[r]+'</font>';        //get the head-bit
                Y[i]+=Sp[i];                                        //the position of current string
                if (Y[i] > window.document.body.clientHeight) {        //if at the end of window, calculate again
                    i2 = 1 + Math.round(Math.random()*Cols);
                    RC[i2] = 1 + Math.round(Math.random()*Cl);
                    for(i3 = 0; i3 < RC[i2]; i3++){                    //get bit in binary strings
                        B[i3] = "";
                        C[i3] = Math.round(Math.random())+' ';
                        B[0] += C[i3];
                    }
                    M[i] = B[0];
                    Y[i] = -Ts*M[i].length/1.5;                        //hide 2/3 string at beginning
                    Sp[i] = Math.round(MnS+Math.random()*MxS);        //random speed of binary strings
                    A[i].style.visibility = 'visible';
                }
                A[i].style.top=Y[i];                                //the i-th in tag div A
                A[i].innerHTML=M[i] + ' ' + E[i];                    //show the binary string in tag A
            }
            setTimeout('Cycle()',100)
        }

        Cycle();
</script>
</center>