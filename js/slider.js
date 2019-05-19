//手機版熱門活動slider
var slide = document.getElementsByClassName('cardFrame');
var leftBtn = document.getElementById('leftBtn');
var rightBtn = document.getElementById('rightBtn');

leftBtn.addEventListener('click',function(){
	var temp = slide[0].getAttribute('class');
	slide[0].setAtrribute('class',slide[1].getAtrribute('class'));
	slide[1].setAtrribute('class',slide[2].getAtrribute('class'));
	slide[2].setAtrribute('class',temp);
});

rightBtn.addEventListener('click',function(){
	var temp = slide[0].getAttribute('class');
	slide[0].setAtrribute('class',slide[2].getAtrribute('class'));
	slide[2].setAtrribute('class',slide[1].getAtrribute('class'));
	slide[1].setAtrribute('class',temp);
});