var slideimages = new Array()
slideimages[0] = new Image()
slideimages[0].src = "assets/imgs/spin/KSML/K.jpg"

slideimages[1] = new Image()
slideimages[1].src="assets/imgs/spin/KSML/K1.jpg"

slideimages[2] = new Image()
slideimages[2].src="assets/imgs/spin/KSML/K2.jpg"

slideimages[3] = new Image()
slideimages[3].src="assets/imgs/spin/KSML/K3.jpg"

slideimages[4] = new Image()
slideimages[4].src="assets/imgs/spin/KSML/K4.jpg"



var step=0
slideit()

function slideit(){
    var i;
    for(i=0;i<5;i++)
    {
        if (!document.images)
        return
        document.getElementById('slideImg').src = slideimages[step].src  
    }
    step++
    if (step > 4){step=0}

    setTimeout("slideit()", 3000, easeInOut)
}
