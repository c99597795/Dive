const diveLinker = new DiveLinker("dive");
diveLinker.start();
var va;     //我要輸出的值

var status=false;

$(function () {
    

    window.addEventListener("message", update);   //監聽事件
    function update(event)
    {

        

        status = diveLinker.getLoadingStatus();   //先判斷dive是否已經匯入，如果已經匯入，才進行讀取值

        if(status=="true")  //如果已經匯入，進行讀取值
        {
            
            diveLinker.start() 

            va= diveLinker.getAttr("49d02248aed04ca39ff4750b456edc1e");   //抓出此id的值

            $("#texts").text(va);   //把抓到的值指定到我要的標籤
            

            
            
        }

    }
    

    
})





    





