var slideimages = new Array()
slideimages[0] = new Image()
slideimages[0].src = "assets/imgs/spin/ESML/E.JPG"

slideimages[1] = new Image()
slideimages[1].src="assets/imgs/spin/ESML/E1.jpg"

slideimages[2] = new Image()
slideimages[2].src="assets/imgs/spin/ESML/E2.JPG"

slideimages[3] = new Image()
slideimages[3].src="assets/imgs/spin/ESML/E3.jpg"

slideimages[4] = new Image()
slideimages[4].src="assets/imgs/spin/ESML/E4.JPG"

slideimages[5] = new Image()
slideimages[5].src="assets/imgs/spin/ESML/E5.JPG"



var step=0
slideit()

function slideit(){
    var i;
    for(i=0;i<6;i++)
    {
        if (!document.images)
        return
        document.getElementById('slideImg').src = slideimages[step].src  
    }
    step++
    if (step > 5){step=0}

    setTimeout("slideit()", 3000)
}
