var slideimages = new Array()


slideimages[0] = new Image()
slideimages[0].src="assets/imgs/CSR/TARA12.jpg"

slideimages[1] = new Image()
slideimages[1].src="assets/imgs/CSR/TARA15.jpg"

slideimages[2] = new Image()
slideimages[2].src="assets/imgs/CSR/TARA16.jpg"

slideimages[3] = new Image()
slideimages[3].src="assets/imgs/CSR/TARA4.jpg"

slideimages[4] = new Image()
slideimages[4].src="assets/imgs/CSR/TARA5.jpg"

slideimages[5] = new Image()
slideimages[5].src="assets/imgs/CSR/TARA6.jpg"

slideimages[6] = new Image()
slideimages[6].src="assets/imgs/CSR/TARA7.jpg"

slideimages[7] = new Image()
slideimages[7].src="assets/imgs/CSR/TARA8.jpg"

slideimages[8] = new Image()
slideimages[8].src="assets/imgs/CSR/TARA10.jpg"


slideimages[9] = new Image()
slideimages[9].src="assets/imgs/CSR/TARA13.jpg"

slideimages[10] = new Image()
slideimages[10].src="assets/imgs/CSR/TARA14.jpg"


slideimages[11] = new Image()
slideimages[11].src="assets/imgs/CSR/TARA3.jpg"




var step=0
slideit()

function slideit(){
    var i;
    for(i=0;i<12;i++)
    {
        if (!document.images)
        return
        document.getElementById('slideImg').src = slideimages[step].src  
    }
    step++
    if (step > 11){step=0}

    setTimeout("slideit()", 3000)
}
