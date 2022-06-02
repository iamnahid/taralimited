var slideimages = new Array()

slideimages[0] = new Image()
slideimages[0].src="assets/imgs/agro/RR (2).webp"

slideimages[1] = new Image()
slideimages[1].src="assets/imgs/agro/RR (3).webp"

slideimages[2] = new Image()
slideimages[2].src="assets/imgs/agro/RR (4).webp"

slideimages[3] = new Image()
slideimages[3].src="assets/imgs/agro/RR (5).webp"

slideimages[4] = new Image()
slideimages[4].src="assets/imgs/agro/RR (6).webp"

slideimages[5] = new Image()
slideimages[5].src="assets/imgs/agro/RR (8).webp"

slideimages[6] = new Image()
slideimages[6].src="assets/imgs/agro/RR (9).webp"


slideimages[7] = new Image()
slideimages[7].src="assets/imgs/agro/RR (11).webp"

slideimages[8] = new Image()
slideimages[8].src="assets/imgs/agro/RR (13).webp"


slideimages[9] = new Image()
slideimages[9].src="assets/imgs/agro/RR (14).webp"



var step=0
slideit()

function slideit(){
    var i;
    for(i=0;i<10;i++)
    {
        if (!document.images)
        return
        document.getElementById('slideImg').src = slideimages[step].src  
    }
    step++
    if (step > 9){step=0}

    setTimeout("slideit()", 3000)
}
