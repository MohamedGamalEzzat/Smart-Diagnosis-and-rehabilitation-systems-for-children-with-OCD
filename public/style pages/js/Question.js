var InputP1 = Array.from(document.querySelectorAll(".QuestionP1 input"));
var InputP2 = Array.from(document.querySelectorAll(".QuestionP2 input"));
var InputP3 = Array.from(document.querySelectorAll(".QuestionP3 input"));
var InputP4 = Array.from(document.querySelectorAll(".QuestionP4 input"));
var InputP5 = Array.from(document.querySelectorAll(".QuestionP5 input"));
var InputP6 = Array.from(document.querySelectorAll(".QuestionP6 input"));
var InputP7 = Array.from(document.querySelectorAll(".QuestionP7 input"));
var InputP8 = Array.from(document.querySelectorAll(".QuestionP8 input"));
var InputP9 = Array.from(document.querySelectorAll(".QuestionP9 input"));
var InputP10 = Array.from(document.querySelectorAll(".QuestionP10 input"));


var labels = Array.from(document.querySelectorAll("label"));
var SurePart1 = document.querySelector(".sure1");
var SurePart2 = document.querySelector(".sure2");
var SurePart3=document.querySelector(".sure3")
var SurePart4=document.querySelector(".sure4")
var SurePart5=document.querySelector(".sure5")
var SurePart6=document.querySelector(".sure6")
var SurePart7=document.querySelector(".sure7")
var SurePart8=document.querySelector(".sure8")
var SurePart9=document.querySelector(".sure9")
var SurePart10=document.querySelector(".sure10")


var Back10=document.getElementById("back10")
var Show=document.querySelector(".insert")
var layer=document.querySelector("#layer")
var QuestionP1=document.querySelector(".QuestionP1")
var QuestionP2=document.querySelector(".QuestionP2")
var QuestionP3=document.querySelector(".QuestionP3")
var QuestionP4=document.querySelector(".QuestionP4")
var QuestionP5=document.querySelector(".QuestionP5")
var QuestionP6=document.querySelector(".QuestionP6")
var QuestionP7=document.querySelector(".QuestionP7")
var QuestionP8=document.querySelector(".QuestionP8")
var QuestionP9=document.querySelector(".QuestionP9")
var QuestionP10=document.querySelector(".QuestionP10")



// Start var Rate

var Choose = false;
var RateP1=0;
var RateP2=0;
var RateP3=0;
var RateP4=0;
var RateP5=0;
var RateP6=0;
var RateP7=0;
var RateP8=0;
var RateP9=0;
var RateP10=0;
var total=0;
// End  var Rate

// Start QuestionP1
for (let i = 0; i < InputP1.length; i++) {
  InputP1[i].addEventListener("click", () => {
    checkP1(i);
  });
}
function checkP1(ind){
  InputP1.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP1[0].checked) {
    Choose = true;
    RateP1 = 0;
  } else if (InputP1[1].checked) {
    Choose = true;
    RateP1 = 1;
  } else if (InputP1[2].checked) {
    Choose = true;
    RateP1 = 2;
  } else if (InputP1[3].checked) {
    Choose = true;
    RateP1 = 3;
  } else if (InputP1[4].checked) {
    Choose = true;
    RateP1 = 4;
  }
  total+=RateP1;
  }
  SurePart1.addEventListener("click", () => {
    if (Choose) {
      SurePart1.addEventListener("click",()=>{
        QuestionP1.style.display="none";
        QuestionP2.style.display="block";
        console.log(total);
      })
    }
  });
// End QuestionP1
// Start QuestionP2

for(let i=0;i<InputP2.length; i++){
  InputP2[i].addEventListener("click",()=>{
    checkP2(i);
  })
}
function checkP2(ind){
  InputP2.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP2[0].checked) {
    Choose = true;
    RateP2 = 0;
  } else if (InputP2[1].checked) {
    Choose = true;
    RateP2 = 1;
  } else if (InputP2[2].checked) {
    Choose = true;
    RateP2= 2;
  } else if (InputP2[3].checked) {
    Choose = true;
    RateP2 = 3;
  } else if (InputP2[4].checked) {
    Choose = true;
    RateP2 = 4;
  }
  total+=RateP2;
  }
  SurePart2.addEventListener("click", () => {
    if (Choose) {
      SurePart2.addEventListener("click",()=>{
            QuestionP2.style.display="none";
            QuestionP3.style.display="block";
            console.log(total);
      })
    }
  });
// End QuestionP2

// Start QuestionP3

for(let i=0;i<InputP3.length; i++){
  InputP3[i].addEventListener("click",()=>{
    checkP3(i);
  })
}
function checkP3(ind){
  InputP3.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP3[0].checked) {
    Choose = true;
    RateP3 = 0;
  } else if (InputP3[1].checked) {
    Choose = true;
    RateP3 = 1;
  } else if (InputP3[2].checked) {
    Choose = true;
    RateP3= 2;
  } else if (InputP3[3].checked) {
    Choose = true;
    RateP3 = 3;
  } else if (InputP3[4].checked) {
    Choose = true;
    RateP3 = 4;
  }
  total+=RateP3;
  }
  SurePart3.addEventListener("click", () => {
    if (Choose) {
      SurePart3.addEventListener("click",()=>{
            QuestionP3.style.display="none";
            QuestionP4.style.display="block";
            console.log(total);
      })
    }
  });

// End QuestionP3

// Start QuestionP4

for(let i=0;i<InputP4.length; i++){
  InputP4[i].addEventListener("click",()=>{
    checkP4(i);
  })
}
function checkP4(ind){
  InputP4.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP4[0].checked) {
    Choose = true;
    RateP4 = 0;
  } else if (InputP4[1].checked) {
    Choose = true;
    RateP4 = 1;
  } else if (InputP4[2].checked) {
    Choose = true;
    RateP4= 2;
  } else if (InputP4[3].checked) {
    Choose = true;
    RateP4 = 3;
  } else if (InputP4[4].checked) {
    Choose = true;
    RateP4 = 4;
  }
  total+=RateP4;
  }
  SurePart4.addEventListener("click", () => {
    if (Choose) {
      SurePart4.addEventListener("click",()=>{
            QuestionP4.style.display="none";
            QuestionP5.style.display="block";
            console.log(total);
      })
    }
  });
// End QuestionP4
// Start QuestionP5
for(let i=0;i<InputP5.length; i++){
  InputP5[i].addEventListener("click",()=>{
    checkP5(i);
  })
}
function checkP5(ind){
  InputP5.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP5[0].checked) {
    Choose = true;
    RateP5 = 0;
  } else if (InputP5[1].checked) {
    Choose = true;
    RateP5 = 1;
  } else if (InputP5[2].checked) {
    Choose = true;
    RateP5= 2;
  } else if (InputP5[3].checked) {
    Choose = true;
    RateP5 = 3;
  } else if (InputP5[4].checked) {
    Choose = true;
    RateP5 = 4;
  }
  total+=RateP5;
  }
  SurePart5.addEventListener("click", () => {
    if (Choose) {
      SurePart5.addEventListener("click",()=>{
            QuestionP5.style.display="none";
            QuestionP6.style.display="block";
            console.log(total);
      })
    }
  });

// End QuestionP5

// Start QuestionP6
for(let i=0;i<InputP6.length; i++){
  InputP6[i].addEventListener("click",()=>{
    checkP6(i);
  })
}
function checkP6(ind){
  InputP6.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP6[0].checked) {
    Choose = true;
    RateP6 = 0;
  } else if (InputP6[1].checked) {
    Choose = true;
    RateP6 = 1;
  } else if (InputP6[2].checked) {
    Choose = true;
    RateP6= 2;
  } else if (InputP6[3].checked) {
    Choose = true;
    RateP6 = 3;
  } else if (InputP6[4].checked) {
    Choose = true;
    RateP6 = 4;
  }
  total+=RateP6;
  }
  SurePart6.addEventListener("click", () => {
    if (Choose) {
      SurePart6.addEventListener("click",()=>{
            QuestionP6.style.display="none";
            QuestionP7.style.display="block";
            console.log(total);
      })
    }
  });

// End QuestionP6


// Start QuestionP7
for(let i=0;i<InputP7.length; i++){
  InputP7[i].addEventListener("click",()=>{
    checkP7(i);
  })
}
function checkP7(ind){
  InputP7.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP7[0].checked) {
    Choose = true;
    RateP7 = 0;
  } else if (InputP7[1].checked) {
    Choose = true;
    RateP7 = 1;
  } else if (InputP7[2].checked) {
    Choose = true;
    RateP7= 2;
  } else if (InputP7[3].checked) {
    Choose = true;
    RateP7 = 3;
  } else if (InputP7[4].checked) {
    Choose = true;
    RateP7 = 4;
  }
  total+=RateP7;
  }
  SurePart7.addEventListener("click", () => {
    if (Choose) {
      SurePart7.addEventListener("click",()=>{
            QuestionP7.style.display="none";
            QuestionP8.style.display="block";
            console.log(total);
      })
    }
  });

// End QuestionP7

// Start QuestionP8
for(let i=0;i<InputP8.length; i++){
  InputP8[i].addEventListener("click",()=>{
    checkP8(i);
  })
}
function checkP8(ind){
  InputP5.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP8[0].checked) {
    Choose = true;
    RateP8 = 0;
  } else if (InputP8[1].checked) {
    Choose = true;
    RateP8 = 1;
  } else if (InputP8[2].checked) {
    Choose = true;
    RateP8= 2;
  } else if (InputP8[3].checked) {
    Choose = true;
    RateP8 = 3;
  } else if (InputP8[4].checked) {
    Choose = true;
    RateP8 = 4;
  }
  total+=RateP8;
  }
  SurePart8.addEventListener("click", () => {
    if (Choose) {
      SurePart8.addEventListener("click",()=>{
            QuestionP8.style.display="none";
            QuestionP9.style.display="block";
            console.log(total);
      })
    }
  });

// End QuestionP8
// Start QuestionP9
for(let i=0;i<InputP9.length; i++){
  InputP9[i].addEventListener("click",()=>{
    checkP9(i);
  })
}
function checkP9(ind){
  InputP9.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP9[0].checked) {
    Choose = true;
    RateP9 = 0;
  } else if (InputP9[1].checked) {
    Choose = true;
    RateP9 = 1;
  } else if (InputP9[2].checked) {
    Choose = true;
    RateP9= 2;
  } else if (InputP9[3].checked) {
    Choose = true;
    RateP9 = 3;
  } else if (InputP9[4].checked) {
    Choose = true;
    RateP9 = 4;
  }
  total+=RateP9;
  }
  SurePart9.addEventListener("click", () => {
    if (Choose) {
      SurePart9.addEventListener("click",()=>{
            QuestionP9.style.display="none";
            QuestionP10.style.display="block";
            console.log(total);
      })
    }
  });

// End QuestionP9

// Start QuestionP8
for(let i=0;i<InputP10.length; i++){
  InputP10[i].addEventListener("click",()=>{
    checkP10(i);
  })
}
function checkP10(ind){
  InputP10.forEach((Ele , index)=>{
    if(index !== ind){
      Ele.disabled =true;
    }
  })
  if (InputP10[0].checked) {
    Choose = true;
    RateP10 = 0;
  } else if (InputP10[1].checked) {
    Choose = true;
    RateP10 = 1;
  } else if (InputP10[2].checked) {
    Choose = true;
    RateP10= 2;
  } else if (InputP10[3].checked) {
    Choose = true;
    RateP10 = 3;
  } else if (InputP10[4].checked) {
    Choose = true;
    RateP10 = 4;
  }
  total+=RateP10;
  }
  var textH3="";
  var textP="";
  SurePart10.addEventListener("click", () => {
    if (Choose) {
      SurePart10.addEventListener("click",()=>{
            if(total<=7){
              textH3="أعراض وسواس قهري خفيفة جدا.";
              textP=`ي الغالب ال تحتاج إلى العالج إال إذا كان معدال قليال ألنك
              تتجنب مواقف كثيرة أو لديك أفعال قهرية فقط أو وسواس فقط.`
            }else if(total<=15 && total>=8){
              textH3="أعراض خفيفة"
              textP=`التي من المحتمل أن تتعارض في حياتك بطرق ملحوظة(إذا كان لديك وسواس
                أو أفكار فهذا يعني شدة متوسطة)`
            }else if(total<=23 && total>=16){
              textH3=`أعراض متوسطة`
              textP=` إحراز 11 نقطة هو الحد األدنى المطلوب لدخول دراسات عالج اضطراب
              الوسواس القهري.`
            }else if(total<=31 && total>=24){
              textH3=`أعراض ملحوظة`
              textP=` والتي من المحتمل أن تفسد نوعية حياتك بصورة كبيرة`
            }else if(total<=40 && total>=32){
              textH3=`أعراض شديدة`
              textP=`التي من المحتمل أن تسبب عجزا بالغا. قد تحتاج إلى عالج يقوم به اختصاصي
              في اضطراب الوسواس القهري.`
            }

            Show.innerHTML=`
            <div class="showRate position-absolute">
            <div class="mainRate">
            <img src="../style pages/image/undraw_Reviewed_docs_re_9lmr 1.png" alt="">
                <h3>${textH3}</h3>
                <p>${textP}</p>
                <div class="links">
                    <a href="home">لنبدأ رحلتنا</a>
                </div>
            </div>
        </div>`;
        layer.style.display="block";
      })
    }
  });

Back10.addEventListener("click", function () {
      window.location.reload();
});
