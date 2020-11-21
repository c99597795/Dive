const diveLinker =new DiveLinker ("dive");
var Output=diveLinker.getOutputList();
var killmonster='530ec9047f2c477a989bfcd02d5cad42'
var Score='e76a7266d6604757a70b89fe782424d3'
var complete="71e6e03979f64bdebda08e6842631091"
var postkill=diveLinker.getAttr(killmonster);
var finish=false;
var postlevel=0;
var postscore="";
var postcompletes="";

$(function(){
  $("#post").on('click',function (event) {
    $.ajax({
      url:'Score.php',
      type:'GET',
      data:{score:postscore,complete:postcompletes},
        success: function(data) {
            console.log()
        }
    });
  })
})
$(function () {
  window.addEventListener("message", update);   //監聽事件
  function update(event)
  {
      status = diveLinker.getAttr(complete);   //先判斷dive是否已經匯入，如果已經匯入，才進行讀取值
       //如果已經匯入，進行讀取值
      if(status=="-1"&&finish==false)
      {
        postscore=parseInt(diveLinker.getAttr(Score));
        postkillmonster=parseInt(diveLinker.getAttr(killmonster));
        level=postscore+postkillmonster;
        //SS級
        if(level>=7){
          postlevel=5;
        }
        else if(postscore==3){
          postlevel=4;
        }
        else if(postscore==2){
          postlevel=3;
        }
        else if(postscore==1){
          postlevel=2;
        }
        else if(postscore==0){
          postlevel=1;
        }
        else if(diveLinker.getAttr(complete)=='-1'){
          postlevel=0;
        }
        //若complete值為1 代表獲勝
        if(diveLinker.getAttr(complete)=='1'){
          postcompletes='Win';
        }
        else{
          postcompletes='Lose';
        }
        $.ajax({
          url:'Score.php',
          type:'GET',
          data:{
            level:postlevel,
            score:postscore,
            killmonster:postkillmonster,
            complete:postcompletes},
            success: function(data) {
                alert('成功');
            }
        });   
      finish=true;  
      }
      else if(status=="1"&&finish==false)
      {
        postscore=parseInt(diveLinker.getAttr(Score));
        postkillmonster=parseInt(diveLinker.getAttr(killmonster));
        level=postscore+postkillmonster;
        if(level>=8){
          postlevel=5;
        }
        else if(postscore==4){
          postlevel=4;
        }
        else if(postscore==3){
          postlevel=3;
        }
        else if(postscore==2){
          postlevel=2;
        }
        else if(postscore==1){
          postlevel=1;
        }
        else if(diveLinker.getAttr(complete)=='-1'){
          postlevel=0;
        }
        //若complete值為1 代表獲勝
        if(diveLinker.getAttr(complete)=='1'){
          postcompletes='Win';
        }
        else{
          postcompletes='Lose';
        }
        $.ajax({
          url:'Score.php',
          type:'GET',
          data:{level:postlevel,
            score:postscore,
            killmonster:postkillmonster,
            complete:postcompletes},
            success: function(data) {
              alert('成功');
            }
        });   
      finish=true;  
      }
}  
})

function post(){
  console.log("執行");   
}

function getkillmonster(id) {
    id.innerHTML = diveLinker.getAttr(killmonster);
  }
  function getScore(id) {
    id.innerHTML = diveLinker.getAttr(Score);
  }
  function score(number){   
    var value=number;   
    location.href="Score.php?score="+value;   
}
function killmonsters(number){   
  var value=number;   
  location.href="Score.php?killmonster="+value;   
}  
function completes(number){   
  var value=number;   
  location.href="Score.php?complete="+value;   
}  