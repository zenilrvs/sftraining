  var A1,B1,A2,B2,x,i,a,b,yoy,jkl,fgh,m,n,o,ala;
  A1=0; B1=0; A2=0; B2=0;
  i=0;
  function dice(){
    x=Math.floor(Math.random() * 6)+1;
    document.getElementById('tip3').style.display="none";
    document.getElementById('tip1').style.display="none";
    document.getElementById('rolled').innerHTML=x;
    if(i%2==0){
      document.getElementById('turn').innerHTML="Turn of Player A";
      if(A1==0){
        if(x==6){
          A1=1;
          document.getElementById('A'+A1).innerHTML="1A";
          if (A2==0) {
          document.getElementById('cng').innerHTML="1A";
        }
        else if (A2==101) {
          document.getElementById('cng').innerHTML="0A";
        }
        }
        else i++;
       }
      else if(A1==0 && A2==101){
        if(x==6){
          A1=1;
          document.getElementById('A'+A1).innerHTML="1A";
          document.getElementById('cng').innerHTML="0A";
        }
        else i++;
       }
       else if(A2==0||A2==101){
        if (x==6) {
          document.getElementById('tip1').style.display="block";
        }
        else{
         if((A1+x)<28){
          document.getElementById('A'+A1).innerHTML='.';
          A1=A1+x;
          i++;
          document.getElementById('A'+A1).innerHTML='1A';
        }
        else if((A1+x)==28&&(A2!=101)){
          document.getElementById('A'+A1).innerHTML=".";
          A1=A2;
          A2=101;
          i++;
          if(A1!=0){
          document.getElementById('A'+A1).innerHTML="1A";
        }
        else {
          A1=0;
        }
        }
        else if((A1+x)==28){
          document.getElementById('A28').innerHTML="1A";
          alert('Player A wins');
        }
        else{
          document.getElementById('tip3').style.display="block";
          i++;
        }
        }
       }
       else if(x==6){ document.getElementById('tip2').style.display="block";}
       else {document.getElementById('tip2').style.display="block";
          i++;
     }
     if (((A1==B1)||(A2==B1))&&(B1!=0)) {
      if (B2==0) {
        document.getElementById('bng').innerHTML='2B';
        B1=0;
        m=1;
      }
      else {
        document.getElementById('bng').innerHTML='1B';
        yoy=B2;
        B1=yoy;
        B2=0;
        m=n;
        n=1;
        document.getElementById('A'+B1).innerHTML='1B';
    }

     }
     else if(((A1==B2)||(A2==B2))&&(B2!=0)){
      B2=0;
      document.getElementById('bng')='1B';
     }
    }
    else if(i%2==1){
      document.getElementById('turn').innerHTML="Turn of Player B";
      if(B1==0){
        if(x==6){
          B1=15;
          document.getElementById('A'+B1).innerHTML="1B";
          document.getElementById('bng').innerHTML="1B";
          m=1;
        if (B2==0) {
          document.getElementById('bng').innerHTML="1B";
        }
        else if (B2==100) {
          document.getElementById('bng').innerHTML="0B";
        }          
        }
        else i++;
       }/*bara*/
       else if(B2==100||B2==0){
        if (x==6) {
          document.getElementById('tip1').style.display="block";
        }
        else if( m+x < 28){
          document.getElementById('A'+B1).innerHTML='.';
          B1=B1+x;
          i++;
          m=m+x;
          if(B1<29){
          document.getElementById('A'+B1).innerHTML='1B';
        }
          else{
            B1=B1-28
            document.getElementById('A'+B1).innerHTML='1B';
          }
        }
        else if((m+x)==28&&(B2!=100)){
          document.getElementById('A'+B1).innerHTML=".";
          B1=B2;
          m=n;
          B2=100;
          i++;
          if(B1!=0){
          document.getElementById('A'+B1).innerHTML="1B";
        }
        else {
          B1=0;
          m=1;
        }
        }
        else if((m+x)==28){
          document.getElementById('A28').innerHTML="1B";
          alert('Player B wins');
        }
        else{
          document.getElementById('tip3').style.display="block";
          i++;
        }
       }
       /*araara*/
       else if(x==6){ document.getElementById('tip2').style.display="block";}
       else {document.getElementById('tip2').style.display="block";
          i++;
     }
        if (((A1==B1)||(A1==B2))&&(A1!=0)) {
      if (A2==0) {
        document.getElementById('cng').innerHTML='2A';
        A1=0;
      }
      else if(A2!=101){
        document.getElementById('cng').innerHTML='1A';
        yoy=A2;
        A1=yoy;
        A2=0;
        document.getElementById('A'+A1).innerHTML='1A';
    }
    else{
      A1=0;
      document.getElementById('cng').innerHTML='1A';
    }

     }
     else if(((A2==B1)||(A2==B2))&&(A2!=0)){
      A2=0;
      document.getElementById('cng')='1A';
     }
    }
  }

  function relA(){
    if(i%2==0){
    if (x==6) {
    if(A1!=0){
      A2=1;
      document.getElementById('cng').innerHTML="0A";
      document.getElementById('A'+A2).innerHTML="2A";
      document.getElementById('tip1').style.display="none";
     }
  }
  }
}
  function relB(){
    if (i%2==1) {
     if(x==6){
     if (B1!=0&&B1!=15) {
      B2=15;
      document.getElementById('bng').innerHTML="0B";
      document.getElementById('A'+B2).innerHTML="2B";
      document.getElementById('tip1').style.display="none";
      n=1;
     }
   }
  }
}
  function MV(num){
    if(A1==num){
        if((A1+x)<28){
          document.getElementById('A'+A1).innerHTML='.';
          A1=A1+x;
          document.getElementById('A'+A1).innerHTML='1A';
        }
        else if((A1+x)==28&&(A2!=101)){
          document.getElementById('A'+A1).innerHTML=".";
          A1=A2;
          A2=101;
          if(A1!=0){
          document.getElementById('A'+A1).innerHTML="1A";
          }
        }
        else if((A1+x)==28){
          document.getElementById('A28').innerHTML="1A";
          alert('Player A wins');
        }
        else{
          document.getElementById('tip3').style.display="block";
        }
        }
    if(A2==num){
      if((A2+x)<28){
      document.getElementById('A'+A2).innerHTML=".";
      A2=A2+x;
      document.getElementById('A'+A2).innerHTML="2A";
    }
    else if((A2+x)==28){
      document.getElementById('A'+A2).innerHTML=".";
      A2=101;
    }
    else document.getElementById('tip3').style.display="block";
  }
    if(B1==num){
     if( m+x <28){
          document.getElementById('A'+B1).innerHTML='.';
          B1=B1+x;
          m=m+x;
          if(B1<29){
          document.getElementById('A'+B1).innerHTML='1B';
        }
          else{
            B1=B1-28
            document.getElementById('A'+B1).innerHTML='1B';
          }
        }
        else if((m+x)==28&&(B2!=100)){
          document.getElementById('A'+B1).innerHTML=".";
          B1=B2;
          m=n;
          B2=100;
          if(B1!=0){
          document.getElementById('A'+B1).innerHTML="1B";
        }
        else {
          B1=0;
          m=1;
        }
        }
        else if( m+x == 28 ){
          document.getElementById('A28').innerHTML="1B";
          alert('Player B wins');
        }
        else document.getElementById('tip3').style.display="block";
       }
       /*araara*/
    if(B2==num){
      if( n+x < 28 ){
          document.getElementById('A'+B2).innerHTML='.';
          B2=B2+x;
          n=n+x;
          if(B2<29){
          document.getElementById('A'+B2).innerHTML='2B';
        }
          else{
            B2=B2-28
            document.getElementById('A'+B2).innerHTML='2B';
          }
        }
      else if( n+x ==28){
        document.getElementById('A'+B2),innerHTML=".";
        B2=100;
      }
      else document.getElementById('tip3').style.display="block";

      }
    if(i%2==0){
      if (((A1==B1)||(A2==B1))&&(B1!=0)) {
      if (B2==0) {
        document.getElementById('bng').innerHTML='2B';
        B1=0;
      }
      else {
        document.getElementById('bng').innerHTML='1B';
        yoy=B2;
        B1=yoy;
        B2=0;
        m=n;
        n=1;
        document.getElementById('A'+B1).innerHTML='1B';
    }

     }
     else if(((A1==B2)||(A2==B2))&&(B2!=0)){
      B2=0;
      document.getElementById('bng')='1B';
     }
    }
    if(i%2==1){
      if (((A1==B1)||(A1==B2))&&(A1!=0)) {
      if (A2==0) {
        document.getElementById('cng').innerHTML='2A';
        A1=0;
      }
      else if (A2!=101){
        document.getElementById('cng').innerHTML='1A';
        yoy=A2;
        A1=yoy;
        A2=0;
        document.getElementById('A'+A1).innerHTML='1A';
    }
    else{
      A1=0;
      document.getElementById('cng').innerHTML="1A"
    }

     }
     else if(((A2==B1)||(A2==B2))&&(A2!=0)){
      A2=0;
      document.getElementById('cng')='1A';
     }
    }
   document.getElementById('tip2').style.display="none";
   document.getElementById('tip1').style.display="none";  
  }
  