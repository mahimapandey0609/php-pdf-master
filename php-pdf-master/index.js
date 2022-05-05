let btn = document.getElementById('sub');
btn.addEventListener('click',function(){
    let txt1 =document.getElementById('text');
    let txtvalue1 = txt1.value;
    let txt2 =document.getElementById('date');
    let txtvalue2= txt2.value;
    let txt3 =document.getElementById('title');
    let txtvalue3 = txt3.value;
     

    document.getElementById('person').innerHTML=txtvalue1;
    document.getElementById('job').innerHTML=txtvalue2;
    document.getElementById('doj').innerHTML=txtvalue3;
});
